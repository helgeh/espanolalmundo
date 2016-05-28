<?php require_once('./includes/header.php'); ?>

<?php

	// The menu:

	$pages = array('features', 'prices', 'contact');

	$menu = '<li class=""><a href="#intro">HOME</a></li>';
	$ddmenu = '<option value="#intro">HOME</option>';

	foreach ($pages as $page) {
		$menu .= '<li class=""><a href="#' . $page . '">' . strtoupper($page) . '</a></li>';
		$ddmenu .= '<option value="#' . $page . '">' . $page . '</option>';
	}

	echo '<div class="nav-menu">';
	echo '<ul class="nav nav-pills normal">';
	echo $menu;
	echo '</ul>';
	echo '<select class="nav nav-pills dropdown">';
	echo $ddmenu;
	echo '</select>';
	echo '</div>';

?>

	<div class="wrapper">

		<div id="intro" class="parallax-section ">
			<div class="story pin-it">

				<?php

									// The Intro section:

				echo file_get_contents('./pages/intro.html');

				?>

			</div>
		</div> 


				<?php

					// The pages sections:

					foreach ($pages as $page) 
					{
						echo '<section id="' . $page . '" class="' . $page . ' ">';
						echo file_get_contents('./pages/' . $page . '.html');
						echo '</section>';
					}

				?>

<?php require_once('./includes/footer.php'); ?>