<?php
//common.php - Common functions used through this resume.

function BeginPage($strPageTitle)
{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<style type="text/css">
					body{background-color:black}
					div#main
					{
						background-color:white;
						width:800px;
						margin:2em auto;
						padding:1em;
					}
					
					div#resume
					{
						background-color:black;
						width:100%;
						margin:0;
						padding:0;
					}
						
					div#main a
					{
						color: #cc5555;
						text-decoration:none;
					}
					
					div#main a:hover
					{
						text-decoration:underline;
					}
					
					div#main a:visited
					{
						color: #aa5555;
					}
						
					div#main h1
					{
						text-align:center;
						margin-bottom:.2em;
					}
						
					div#main h2
					{
						margin:1em 2em 0 2em;
						border-bottom:1px solid black;
						text-transform: uppercase;
						font-size:14pt;
					}
						
					div#main h3
					{
						font-size:14pt;
						margin:.2em 4em;
						border:0;
						padding:0;
					}
						
					div#main p, div#main ul
					{
						margin:0 2em .75em 7em;
						border:0;
						padding:0;
					}
					
					div#main li
					{
						margin:0 1.2em;
						padding:0;
						border:0;
					}
					
					div#main img
					{
						text-align:center;
						width:75%;
						display:block;
						margin:1em auto;
						border:0;
					}
					
					div#resume img
					{
						text-align:center;
						width:100%;
						Display:block;
						margin:0;
						border:0;
					}
					
					div#main img.button
					{
						text-align:left;
						width:auto;
						display:inline;
						margin:0;
						border:0;
						vertical-align:middle;
					}
					
					div#main iframe
					{
						text-align:center;
						display:block;
						margin:1em auto;
					}
					
					div#toc
					{
						display:block;
						text-align:center;
					}
					
					div#toc a
					{
						color:black;
					}
					
					div#toc a:hover
					{
						text-decoration: underline;
					}
				</style>
				<script language='javascript' type='text/javascript'>
					function DisplayDIV(name, bShow)
					{
						//Decide if the div is to be shown or hidden.
						strShowState = bShow?'inherit':'none';
						
						var elem, vis;
						if( document.getElementById ) // this is the way the standards work
							elem = document.getElementById( name );
						else if( document.all ) // this is the way old msie versions work
							elem = document.all[name];
						else if( document.layers ) // this is the way nn4 works
							elem = document.layers[name];
						
						vis = elem.style;
						
						vis.display = strShowState;
					}
					
					function DIVSwap(strShow, strHide)
					{
						DisplayDIV(strShow, true);
						DisplayDIV(strHide, false);
					}
				</script>
				<title> <?php echo $strPageTitle; ?></title>
		</head>
		<body>
		<div id="main">
<?php
}

function EndPage()
{
?>
	</div><!-- id="main" -->
	</body>
	<script language=javascript type='text/javascript'>
	//Hide all the DIVs that shouldn't be expanded at the start.
	//DisplayDIV('EmergenceTools', false);
	</script>
	</html>
<?php
}

function BeginSection($strName, $bStartHidden=false, $nLevel=3) {
	$strBtnTextExpand = sprintf("<a href=\"javascript:DIVSwap('%s', '%s');\"><img class=\"button\" src=\"expand.png\" alt=\"Expand\"/></a>", $strName.'Exp', $strName.'Hid');
	$strBtnTextCollapse   = sprintf("<a href=\"javascript:DIVSwap('%s', '%s');\"><img class=\"button\" src=\"collapse.png\" alt=\"Expand\"/></a>", $strName.'Hid', $strName.'Exp');
	
	printf("<div style=\"display:%s;\" id=\"%s\">\n", $bStartHidden ? 'inline' : 'none', $strName . 'Hid');
	printf('<h%1$d>%3$s %2$s</h%1$d>', $nLevel, $strName, $strBtnTextExpand);
	printf("</div>\n");
	printf("<div style=\"display:%s;\" id=\"%s\">\n", $bStartHidden ? 'none' : 'inline', $strName . 'Exp');
	printf('<h%1$d>%3$s %2$s</h%1$d>', $nLevel, $strName, $strBtnTextCollapse);
}

function EndSection() {
	printf("</div>\n");
}


function DisplayTOC()
{
?>
<div id="toc">
	<a href="index.php?p=resume">Resume</a> | <a href="index.php?p=game">Game Projects</a> <!-- | <a href="index.php?p=misc">Misc. Projects</a> --> | <a href="index.php?p=sample">Code Samples</a>
</div>
<?php
}
?>
