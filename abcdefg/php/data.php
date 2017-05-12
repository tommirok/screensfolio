<?php
include ('getdata1.php');
function get_otsikko($name)
{
	$name = $palautus;
	
	foreach($kuvat as $kuva=>$otsikko)
	{
		if($kuva==$name)
		{
			
			return $otsikko;
			break;
		}
	}
}