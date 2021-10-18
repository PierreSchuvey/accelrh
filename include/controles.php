<?php
function verif_an($champ,$min_size, $max_size)
{
	$lg=strlen($champ);
	if($lg<$min_size)
	{
		return false;
	}
		
	if($lg>$max_size)
	{
		return false;
	}
		
	$ponct="[:punct:][:cntrl:][:print:][:blank:][:space:]";
		
	$exp="^[a-zA-Z0-9\\-äàâéèëêïîôöùüûÿçÀÂÄÉÈËÊÎÏÔÖÛÜÙ€".$ponct."]*$";
	if(!ereg($exp, $champ))
	{
		return false;
	}
	return true;
}
	
function verif_a($champ,$min_size, $max_size)
{
	$ponct="[:print:][:cntrl:][:space:][:punct:][:blank:]";
	$exp="^[a-zA-Z\\-äàâéèëêïîôöùüûÿçÀÂÄÉÈËÊÎÏÔÖÛÜÙ".$ponct."]{".$min_size.",".$max_size."}$";
	return (ereg($exp, $champ)); 
}

function verif_n($input,$min_size,$max_size)
{
	$exp="[0-9]{".$min_size.",".$max_size."}$";
		return ereg($exp, $input); 	 
}
	
function verif_tel($champ)
{
	$l=strlen($champ);
	if($l<6 || $l>16)
	{
		return false;	
	}

	$exp="^[0-9 -/]{4,16}$";
	return ereg($exp,$champ);
}
	
function verif_mail($champ)
{
	return( ereg("^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+".
              "@".
              "[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.".
              "[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$",
              $champ) );
}
?>