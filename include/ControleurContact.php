<?php
require __DIR__.'/phpmailer/PHPMailerAutoload.php';

class ControleurContact {

	private $session_token;
	private $form_token;
	private $data;
	private $erreur = array();
	private $erreur_message = array();

	public function __construct() {

	}

	public function gerer() {
		session_start();

		$this->session_token = (isset($_SESSION['contact_form_token']) ? $_SESSION['contact_form_token'] : null);
		if(isset($_POST['societe'])) {
			if(empty($_POST['info'])) {
				$this->data = $_POST;
				if($this->session_token && $_POST['csrf'] == $this->session_token && $this->checkCaptcha()) {
					if($this->checkData()) {
						if($this->envoyer()) {
							$this->message = 'Votre message a bien été envoyé, nous vous recontacterons au plus vite.';
						}
						else {
							$this->erreur[] = 'Désolé, une erreur est survenue lors de l\'envoi de votre message.';
						}
					}
					else {
						// $this->erreur[] = 'Des erreurs ont été trouvées dans votre saisie : <br>'.$this->erreur;
					}
				}
				else {
					$this->erreur[] = 'Une erreur de jeton est survenue, peut-être avez-vous actualisé la page ?';
				}
			}
		}

		$this->form_token = (hash_hmac('sha256', $this->code(32), $this->code(32)));
		$_SESSION['contact_form_token'] = $this->form_token;
		return $this->html();
	}

	private function checkCaptcha() {
		if(empty($_POST['g-recaptcha-response'])) {
			$this->erreur_message[] = 'Vous devez cocher la case "Je ne suis pas un robot".';
			return false;
		}


		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$params = array(
			'secret' => '6LeWSh4TAAAAAPjR52SSSLDtWyl1FmIvjU4xgV7A',
			'response' => $_POST['g-recaptcha-response'],
			'remoteip' => $_SERVER['REMOTE_ADDR']
		);
		$ressource = curl_init($url);
		curl_setopt($ressource, CURLOPT_POST, true);
		curl_setopt($ressource, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ressource, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ressource, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ressource, CURLOPT_PORT, 443);
		$p = http_build_query($params);
		curl_setopt($ressource, CURLOPT_POSTFIELDS, $p);
		$reponse = curl_exec($ressource);
		if(empty($reponse)) {
			return false;
		}

		$obj = json_decode($reponse);
		if($obj->success) {
			return true;
		}
		return false;
	}

	private function checkData() {
		$champs = array(
			'societe',
			'nom',
			'prenom',
			'tel',
			'mail',
			'message'
		);

		foreach($champs as $champ) {
			if(empty($this->data[$champ])) {
				$this->erreur_message[] = 'Tous les champs sont obligatoires.';
				$this->erreur[] = $champ;
				continue;
			}

			if($champ != 'message' && preg_match('#[\r\n]#', $this->data[$champ])) {
				$this->erreur_message[] = 'Tous les champs sont obligatoires.';
				$this->erreur[] = $champ;
			}
		}

		// societe, nom, prenom
		if(strlen($this->data['societe']) > 128) {
			$this->data['societe'] = substr($this->data['societe'], 0, 128);
		}
		if(strlen($this->data['nom']) > 128) {
			$this->data['nom'] = substr($this->data['nom'], 0, 128);
		}
		if(strlen($this->data['prenom']) > 128) {
			$this->data['prenom'] = substr($this->data['prenom'], 0, 128);
		}

		if(!empty($this->data['tel'])) {
			$this->data['tel'] = preg_replace('#[^0-9+]#', '', $this->data['tel']);
			if(!preg_match('#^\+?[0-9]{8,}#', $this->data['tel'])) {
				$this->erreur_message[] = 'Le numero de téléphone semble incorrect.';
				$this->erreur[] = 'tel';
			}
		}

		if(!empty($this->data['mail'])) {
			if(false === filter_var($this->data['mail'], FILTER_VALIDATE_EMAIL)) {
				$this->erreur_message[] = 'L\'email semble incorrect.';
				$this->erreur[] = 'mail';
			}
		}

		if(count($this->erreur)) {
			return false;
		}

		return true;
	}

	private function envoyer() {
		$m = new PHPMailer(true);
		try {
			$m->addAddress('root@localhost', 'Post Master');
			$m->setFrom('thierry.mur@accelerh.fr', 'Vitrine AcceleRH');
			$m->Subject = 'Contact vitrine AcceleRH';
			$m->isHTML(true);
			$m->CharSet= "utf-8";
			$m->Body =
				"<p>Message envoyé via le site vitrine AcceleRH :</p>
				<p>Société : ".$this->data['societe']."</p>
				<p>Prénom / Nom  : ".$this->data['prenom'].' '.$this->data['nom']."</p>
				<p>Tel : ".$this->data['tel']."</p>
				<p>Mail : ".$this->data['mail']."</p>
				<p>Message :<br>".nl2br($this->data['message'])."</p>
				<p>Informations techniques :<br>";
			foreach($_SERVER as $k => $v) {
				$m->Body .= "$k => $v<br>";
			}
			$m->Body .= '</p>';
			$m->send();
		}
		catch(Exception $e) {
			$this->erreur[] = $e->getMessage();
			return false;
		}

		return true;
	}

	private function html() {
		$html = '';
		if(count($this->erreur_message)) {
			$this->erreur_message = array_unique($this->erreur_message);
			$html .= '<div class="erreur-message">Des erreurs ont été trouvées :<br>'.implode('<br>', $this->erreur_message).'</div>';
		}
		if(!empty($this->message)) {
			$html .= '<div class="confirmation-message">'.$this->message.'</div>';
		}

		$html .=
			"<form method=\"POST\" action=\"#contact\">
				<div class=\"row\">
					<div class=\"form-group col-12 offset-sm-2 col-sm-4\">
						<label for=\"nom\">Nom<span class=\"require\">*</span></label>
						<input type=\"text\" class=\"form-control\" name=\"nom\" placeholder=\"Nom\">
					</div>
					<div class=\"form-group col-12 col-sm-4\">
						<label for=\"societe\">Société<span class=\"require\">*</span></label>
						<input type=\"text\" class=\"form-control\" name=\"societe\" placeholder=\"Société\">
					</div>
				</div>
				<div class=\"row\">
					<div class=\"form-group col-12 offset-sm-2 col-sm-4\">
						<label for=\"prenom\">Prénom<span class=\"require\">*</span></label>
						<input type=\"text\" class=\"form-control\" name=\"prenom\" placeholder=\"Prénom\">
						<label for=\"mail\">E-mail Professionnel<span class=\"require\">*</span></label>
						<input type=\"mail\" class=\"form-control\" name=\"mail\" placeholder=\"E-mail Professionnel\">
					</div>
					<div class=\"form-group col-12 col-sm-4\">
						<label for=\"message\">Message<span class=\"require\">*</span></label>
						<textarea class=\"form-control\" name=\"message\" placeholder=\"Message\" rows=\"3\"></textarea>
					</div>
				</div>
				<div class=\"row\">
					<div class=\"form-group col-12 offset-sm-2 col-sm-4\">
						<label for=\"tel\">Téléphone<span class=\"require\">*</span></label>
						<input type=\"text\" class=\"form-control\" name=\"tel\" placeholder=\"Numéro de téléphone\">
						<input type=\"hidden\" name=\"csrf\" value=\"".$this->form_token."\">
						<div class=\"g-recaptcha\" data-sitekey=\"6LeWSh4TAAAAAPFcJgGdI96pn_VBK42J-TeV7PeJ\"></div>
					</div>
					<div class=\"col-12 col-sm-4\">
						<button name=\"mailform\" type=\"submit\" class=\"btn btn-send\">ENVOYER <i class=\"fas fa-paper-plane\"></i></button>
					</div>
				</div>
			</form>";

		return $html;
	}

	// generons un nouveau token
	private function code($max_length) {
		$code = md5(uniqid(rand()));
		$code = strip_tags(stripslashes($code));
		$code = str_replace('. ', '', $code);
		$code = strrev(str_replace('/', '', $code));
		$code = substr($code, 0, $max_length);
		return $code;
	}
}
