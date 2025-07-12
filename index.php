<?php


if( isset( $_SERVER['SERVER_NAME'] ) ) {
	$wgServerName = $_SERVER['SERVER_NAME'];
} elseif( isset( $_SERVER['HOSTNAME'] ) ) {
	$wgServerName = $_SERVER['HOSTNAME'];
} elseif( isset( $_SERVER['HTTP_HOST'] ) ) {
	$wgServerName = $_SERVER['HTTP_HOST'];
} elseif( isset( $_SERVER['SERVER_ADDR'] ) ) {
	$wgServerName = $_SERVER['SERVER_ADDR'];
} else {
	$wgServerName = 'localhost';
}


if(preg_match('/.*roughconcept\.com.*/i', $wgServerName)!=0)
{
	header("Location: http://www.roughconcept.com/rc/");
}
elseif(preg_match('/.*jackeverett\.com.*/i', $wgServerName)!=0)
{
	header("Location: http://www.roughconcept.com/rc/");
}
elseif(preg_match('/.*blainemyers\.com.*/i', $wgServerName)!=0)
{
	header("Location: http://www.blainemyers.com/resume/");
}
else
{
	header("Location: http://www.beemsoft.com/home/");
}

?>