<?php
$characters = array();

$characters[] = array(
	'name' => 'Andrew \'Drew\' Willims',
	'image' => 'Drew',
	'bio' => 'An amiable war veteran, with a fondness for good food and drink, serious combat skills, and a well-buried past.'
);
?>

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
</style>

<div id="bios">
<?php
foreach ($characters as $character) {?>
	<div class="bio"><?php
	echo "<h4>{$character->name}</h4>";
	echo "<p>{$character->bio}</p>";
	echo "<img src='./imagedirectory/bioimages/{$character->image}.png' />";
	?></div>
<?php
}
?>
</div>
