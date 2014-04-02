<?php
$characters = array();

$characters[] = array(
	'name' => 'Katrin \'Kat\' O\'Neill',
	'image' => 'Vendetta-Kat',
	'bio' => 'Pithy one-liner coming soon'
);
$characters[] = array(
	'name' => 'Dagan Clancy',
	'image' => 'Vendetta-Dagan',
	'bio' => 'Pithy one-liner coming soon'
);
$characters[] = array(
	'name' => 'Okami Saitou',
	'image' => 'Vendetta-Okami',
	'bio' => 'Pithy one-liner coming soon'
);
$characters[] = array(
	'name' => 'Andrew \'Drew\' Willims',
	'image' => 'Vendetta-Drew',
	'bio' => 'An amiable war veteran, with a fondness for good food and drink, serious combat skills, and a well-buried past.'
);
$characters[] = array(
	'name' => 'Rudy \'Baby\' Babel',
	'image' => 'Vendetta-Rudy',
	'bio' => 'Pithy one-liner coming soon'
);
$characters[] = array(
	'name' => 'Mallory Teken',
	'image' => 'Vendetta-Mallory',
	'bio' => 'Pithy one-liner coming soon'
);
?>
<link href='http://fonts.googleapis.com/css?family=Chicle|Frijole' rel='stylesheet' type='text/css'>
<style type="text/css">
	body {
		background-image: none;
		background: #000000; /* Old browsers */
		background: -moz-linear-gradient(top,  #000000 0%, #4c0010 90%, #6d0019 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#000000), color-stop(90%,#4c0010), color-stop(100%,#6d0019)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #000000 0%,#4c0010 90%,#6d0019 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #000000 0%,#4c0010 90%,#6d0019 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #000000 0%,#4c0010 90%,#6d0019 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #000000 0%,#4c0010 90%,#6d0019 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#6d0019',GradientType=0 ); /* IE6-9 */
	}
	#header {
		text-align: center;
		font-family: 'Frijole', cursive;
		font-size: 10em;
		color: #666600;
	}
	#description {
		font-size: 1.5em;
		text-align: center;
		font-family: 'Chicle', cursive;
		color: #aaaaaa;
	}
</style>

<div id="header">Vendetta</div>
<div id="description">A mean sort of ship, Vendetta and her crew have a tendency to do dirty jobs for anyone as can pay well enough.</div>

<div id="bios">
<?php
foreach ($characters as $character) {
	echo '<div class="bio">';
	echo "<h4>{$character['name']}</h4>";
	echo "<p>{$character['bio']}</p>";
	echo "<img src='./imagedirectory/bioimages/{$character['image']}.png' />";
	echo '</div>';
}
?>
</div>
