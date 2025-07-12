<?php

define('PAGE_GAMEP', 1);
define('PAGE_MISCP', 2);
define('PAGE_RESUME', 3);
define('PAGE_CODES', 4);

$nPage = PAGE_RESUME;

if(isset($_GET['p']))
{
	$strP = $_GET['p'];	
	if('misc' === $strP)
	{
		$nPage = PAGE_MISCP;
	}
	else if('resume' === $strP)
	{
		$nPage = PAGE_RESUME;
	}
	else if('game' == $strP)
	{
		$nPage = PAGE_GAMEP;
	}
	else if('sample' == $strP)
	{
		$nPage = PAGE_CODES;
	}
}

switch($nPage)
{
	case PAGE_GAMEP:require('game_projects.php');break;
	case PAGE_MISCP:require('misc_projects.php');break;
	case PAGE_RESUME:require('resume.php');break;
	case PAGE_CODES:require('code_sample.php');break;
	default:echo 'Page not found!';break;
}

?>