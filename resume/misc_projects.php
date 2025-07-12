<?php
require('common.php');
BeginPage('Miscellaneous Projects');
?>
<?php DisplayTOC(); ?>
<h1>Miscellaneous Projects by Blaine Myers</h1>

<?php BeginSection('CornerBin', true, 3); ?>
<ul><li><a href="http://cornerbin.sourceforge.net/" target="_BLANK">http://cornerbin.sourceforge.net/</a></li></ul>
<p>
Written in C++ for MS Windows using MFC. This application eliminates the need to
have an icon for the Recycle Bin on the desktop. It places an icon in the system
tray that has similar functionality to the Recycle Bin. It features the ability
to customize certain settings in the application, such as the icon, and certain
behavior.
<a href="http://cornerbin.sourceforge.net/screen1.jpg"><img src="http://cornerbin.sourceforge.net/screen1.jpg"/></a>
<a href="http://cornerbin.sourceforge.net/screen2.jpg"><img src="http://cornerbin.sourceforge.net/screen2.jpg"/></a>
</p>
<?php EndSection(); //'Cornerbin'  ?>

<?php BeginSection('Podcast Sync Prep', true, 3); ?>
<p>
This is a utility designed to prepare podcasts to be synchronized to a portable
music device. Many music devices offer the abilities to play audio files in
alphabetical order or by shuffling. It is often desirable to play podcasts in
a specific order. This utility features an easy to use drag and drop interface
that allows someone to specify the order that a set of podcasts should be played
and renames the files appropriately. Then when the files are copied to the
music device, they will play in the appropriate order. It also clears any MP3
tags that may have otherwise confused the device into playing the files in some
other order based on "Album" or "Genre", for example.
</p>
<p>
This application was written in Java using the Swing and AWT APIs for the
Windows interface.
<a href="podsyncp.jpg"><img src="podsyncp.jpg"/></a>
<a href="podsyncp2.jpg"><img src="podsyncp2.jpg"/></a>
</p>
<?php EndSection(); //'Podcast Sync Prep'  ?>

<?php BeginSection('Rough Concept Website', true, 3); ?>
<ul><li><a href="http://www.roughconcept.com" target="_BLANK">http://www.roughconcept.com/</a></li></ul>
<p>
This website was developed using PHP and MySQL to generate HTML and CSS.
Includes a messaging system. Which features a contact form that any visitor can
use, and a back end email interface for logged in users to retrieve messages.
Messages are also forwarded to an email address. Also features a
feedback system that allows visitors to post comments on the site’s content,
and a news archive system, with an easy to use backend for posting new news
stories. Additional code written in JavaScript.
</p>
<p>
The blog portion of the website is powered by b2evolution, with a custom skin 
written in PHP to match the rest of the website.
</p>
<?php EndSection(); //'Rough Concept Website'  ?>

<?/*
<?php BeginSection('Project Template', true, 3); ?>
<p>
Some information about the project.
<a href="a.jpg"><img src="a.jpg"/></a>
</p>
<?php EndSection(); //'Project Template'  ?>
*/?>
<?php
EndPage();
?>
