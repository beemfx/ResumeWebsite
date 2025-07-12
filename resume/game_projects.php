<?php
require('common.php');
BeginPage('Game Projects');
?>
<?php DisplayTOC(); ?>
<h1>Game Projects by Blaine Myers</h1>

<?php BeginSection('Emergence Engine and Tools', false, 2); ?>
<p>
All software applications are written in C++ with additional command-line tools written in C++ and Python.
</p>
<?php BeginSection('Emegerence Engine and E.X.P.L.O.R.: A New World'); ?>
<p>
Emergence Game Engine is a game engine that powers E.X.P.L.O.R.: A New World.
<a href="explorgame.jpg"><img src="explorgame.jpg"/></a>
<a href="explorgame2.jpg"><img src="explorgame2.jpg"/></a>
</p>
<?php EndSection(); //'Emergence Engine'  ?>

<!-- BEGIN EGWorldEd -->
<?php BeginSection('World Editor', true); ?>
<p>
Editor for creating worlds.
<br />
<a href="egworlded.jpg"><img src="egworlded.jpg"/></a>
</p>
<?php EndSection(); ?>
<!-- END EGDefEd -->

<!-- BEGIN EGDefEd -->
<?php BeginSection('Entity Definition Editor', true); ?>
<p>
Visual editor for Entity (Actor) definitions.
<br />
<a href="egdefed.jpg"><img src="egdefed.jpg"/></a>
</p>
<?php EndSection(); ?>
<!-- END EGDefEd -->

<!-- BEGIN EGLytEd -->
<?php BeginSection('UI Layout Editor', true); ?>
<p>
Visual editor for UI layouts.
<br />
<a href="eglayout.jpg"><img src="eglayout.jpg"/></a>
</p>
<?php EndSection(); ?>
<!-- END EGLytEd -->

<!-- BEGIN EGSmEd -->
<?php BeginSection('EGSM Editor', true); ?>
<p>
Visual editor for the EGSM scripting language.
<br />
<a href="egsmed.jpg"><img src="egsmed.jpg"/></a>
</p>
<?php EndSection(); ?>
<!-- END EGSmEd -->

<!-- BEGIN EGAssetEd -->
<?php BeginSection('Data Asset Editor', true); ?>
<p>
Visual Editor for game-defined data assets.
<br />
<a href="egasseted.jpg"><img src="egasseted.jpg"/></a>
</p>
<?php EndSection(); ?>
<!-- END EGAssetEd -->
<div id="HIDEOTHERTOOLS" style="display:none;">
<?php BeginSection('Other Tools', true); ?>
<ul>
<li>egmake2 - Tool used in aiding the build process. Builds data assets. Localizes data assets and localized text in code. Etc.</li>
<li>msEG2 - Plugin for MilkShape3D to export meshes and skeletons to the Emergence Engine formats.</li>
<li>EGSetPaths - Tool to setup environment variables used in the build process.</li>
<li>EGLpkViewer - Tool to view compiled and packaged game assets.</li>
<li>vsgen - Tool to build visual studio projects for game libraries, tools, and SDKs.</li>
<li>CSVImport - Tool to import various game assets from excel spreadsheets or CSV files. (Works with Perforce depots.)</li>
</ul>
</div>
<?php EndSection(); //'Milkshape3D Plugin'  ?>
<?php EndSection(); ?> <!-- 'Emergence Engine and Tools-->
<div id="HIDESTUFF" style="display:none;">
<?php BeginSection('ScrollGIN and Tools', true, 2); ?>
<h3><a href="https://github.com/beemfx/ScrollGIN">https://github.com/beemfx/ScrollGIN</a></h3>
<p>
				ScrollGIN is a 2D side-scrolling engine designed for games similar to
				those seen on early consoles such as the NES. It could also be used
				to develop top-down dungeon crawlers or RPGs.
</p>
<?php BeginSection('ScrollGIN'); ?>
<p>
			The engine features a tile based map format, each tile being a square.
			All physical geometry for collision detection is in the form of AABBs.
			Rasterization by DirectDraw. Also features parallax scrolling
			backgrounds. It is written in C++.
</p>
<?php EndSection(); //'ScrollGIN'  ?>
<?php BeginSection('ScrollEDIT', true); ?>
<p>
			This is a utility designed to generate maps for the ScrollGIN engine.
			It is an easy to use tool that allows the user to create a map. It works similar
			to MS Paint, but instead of painting colors, tiles are painted. It also
			allows the "painting" of physical geometry. Written in C++ using
			the Windows API.
	<a href="scrolledit.jpg"><img src="scrolledit.jpg"/></a>
</p>
<?php EndSection(); //'ScrollEDIT'  ?>
<?php BeginSection('ImageEdit', true); ?>
<p>
			Rather than accessing images directly from the disk. ScrollGIN uses a
			custom image format. This custom image format is designed to store
			multiple images into a single file. For example, an animated sprite
			consists of an image for each frame. This utility allows the user to
			define each frame of an animation, and compact that data, as well as
			the image data into a single file. Multiple sprites can be stored in a
			single file. Developed using C++ and the Windows API.
	<a href="imageedit.jpg"><img src="imageedit.jpg"/></a>
</p>
<?php EndSection(); //'ImageEdit'  ?>
<?php EndSection(); //'ScrollGIN and Tools'  ?>
<?php BeginSection('E.X.P.L.O.R. and Tools', true, 2); ?>
<h3><a href="https://github.com/beemfx/EXPLOR-Game">https://github.com/beemfx/EXPLOR-Game</a></h3>
<p>
				E.X.P.L.O.R. is an engine intended to power a grid based dungeon crawler as seen from the early 80s to mid 90s.
</p>
<?php BeginSection('E.X.P.L.O.R.'); ?>
<p>
			Originally written in QBasic for DOS and later ported to C++ for Windows. Featured grid based collision and MIDI audio (of all things).
</p>
<p>
	<br/>Original DOS version written in QBasic.<br/>
	<a href="screen0002.jpg"><img src="screen0002.jpg"/></a>
	Windows port written in C++.<br/>
	<a href="screen0004.jpg"><img src="screen0004.jpg"/></a>
</p>
<?php EndSection(); //'ScrollGIN'  ?>
<?php BeginSection('ExplorED', true); ?>
<p>
			A utility designed to edit maps for use with the E.X.P.L.O.R. game.
	<a href="explored0006.jpg"><img src="explored0006.jpg"/></a>
</p>
<?php EndSection(); //'ExplorED'  ?>
<?php EndSection(); //'E.X.P.L.O.R. and Tools'  ?>
<?php BeginSection('Huckleberry&#8217;s Adventure', true, 2); ?>
<h3><a href="https://github.com/beemfx/QBasic-Games/tree/master/Huckl">https://github.com/beemfx/QBasic-Games/tree/master/Huckl</a></h3>
<p>
				A trivia game written in QBasic as an English class project.
	<a href="huckl_000.png"><img src="huckl_000.png"/></a>
<?php EndSection(); //'E.X.P.L.O.R. and Tools'  ?>
</div>
<?php
EndPage();
?>
