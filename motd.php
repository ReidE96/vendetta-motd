<?php
// Edit between the ' to change details - if you want a ' in the text, put a \ before it.
// GM info
$currentGM = 'Gideon Jones';
$nextGM = 'Aaron Call'; // Leave blank if unknown

// Current plot summary
$currentEvents = 'The <i>Vendetta</i> is currently docked in Baoreing Port on the planet Santo.  Captain O\'Neill is scheduled to meet an old friend on the docks about a potential job.';

// Longer plot summary
$storySoFar = 'Once a story has begun, here it shall be logged.';

// Characters - name and bio show as typed, image loads from the bioimage directory or shows No Photo image if left blank
$characters = array();
$characters[] = array(
	'name' => 'Katrin \'Kat\' O\'Neill',
	'image' => 'Vendetta-Kat',
	'bio' => 'A reputedly ruthless captain, slow to trust but fiercely protective of her crew'
);
$characters[] = array(
	'name' => 'Dagan Clancy',
	'image' => 'Vendetta-Dagan',
	'bio' => 'A lackadaisical medic with questionable (to outside parties) competence and combat experience.'
);
$characters[] = array(
	'name' => 'Okami Saitou',
	'image' => 'Vendetta-Okami',
	'bio' => 'A stern but loyal man finding his way in The Black.'
);
$characters[] = array(
	'name' => 'Andrew \'Drew\' Willims',
	'image' => 'Vendetta-Drew',
	'bio' => 'An amiable war veteran with a fondness for good food and drink, serious combat skills, and a well-buried past.'
);
$characters[] = array(
	'name' => 'Rudy \'Baby\' Babel',
	'image' => 'Vendetta-Rudy',
	'bio' => 'A kid just on the verge of going from a quiet gifted child to a true mechanical genius, but never losing his... quirks.'
);
$characters[] = array(
	'name' => 'Mallory Teken',
	'image' => 'Vendetta-Mallory',
	'bio' => 'A more-than-capable young pilot seeking to forge a future for herself, while keeping her ties to the Teken family concealed at all costs.'
);

// END OF DATA, START OF PAGE

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
	.border {
		border: 5px ridge #331122;
		padding: 5px;
		background: #3d1507; /* Old browsers */
		background: -moz-linear-gradient(top,  #3d1507 0%, #260b00 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3d1507), color-stop(100%,#260b00)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #3d1507 0%,#260b00 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #3d1507 0%,#260b00 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #3d1507 0%,#260b00 100%); /* IE10+ */
		background: linear-gradient(to bottom,  #3d1507 0%,#260b00 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3d1507', endColorstr='#260b00',GradientType=0 ); /* IE6-9 */
	}
	#header {
		text-align: center;
		font-family: 'Frijole', cursive;
		font-size: 10em;
		color: #aa9933;
	}
	#description {
		font-size: 2em;
		text-align: center;
		font-family: 'Chicle', cursive;
	}
	.bio {
		width: 500px;
		margin-bottom: 10px;
	}
	.section {
		width: 31%;
		margin: 0 1% 30px 1%;
		display: inline-block;
		vertical-align: top;
	}
	#admin {
	}
	#ship {
	}
	#bios {
	}
	p {
		margin: 5px;
		font-family: 'Chicle', cursive;
		font-size: 1.7em;
	}
	.info {
		width: 360px;
		display: inline-block;
		vertical-align: top;
		margin-top: 10px;
	}
	.image {
		width: 130px;
		display: inline-block;
		margin: 5px;
	}
	.name {
		padding-left: 10px;
		font-family: 'Chicle', cursive;
		font-size: 2.3em;
		margin: 0;
	}
	.title {
		font-family: 'Frijole', cursive;
		font-size: 3em;
		text-align: center;
		margin-top: 20px;
	}
</style>

<div id="header">Vendetta</div>
<div id="description">A mean sort of ship, Vendetta and her crew have a tendency to do dirty jobs for anyone as can pay well enough.</div>
<div id="admin" class="section">
	<div id="joining"><p class="title">Joining</p><p class="border">Vendetta's currently got all the scurvy rogues she could ask for, so you're likely out of luck. That said, if you think you can convince us otherwise, <a href="mailto:vpoperations@ajjegames.com?subject=Vendetta Application">send an email</a> with a character idea and we'll see what we see. No promises though.</p></div>
	<div id="leaders"><p class="title">Chain of Command</p><p class="border">We do things a little differently to most. <a href="mailto:vpoperations@ajjegames.com?subject=Vendetta Enquiry">Euan Reid</a> is the SL, but he's only in charge OOCly and even then only because someone has to be responsible. Captain O'Neill (played by Allanna Maitland) is in charge IC. As to GM, we rotate between the players from episode to episode, with Gideon Jones serving as Overlord GM-in-Chief. Currently GMing is <?php echo $currentGM; echo ('' == $nextGM) ? '' : ', next up is ' . $nextGM; ?>.</p></div>
</div>
<div id="ship" class="section">
	<div id="currentEvents"><p class="title">Current Events</p><p class="border"><?php echo $currentEvents; ?></p></div>
	<div id="storySoFar"><p class="title">The Story So Far</p><p class="border"><?php echo $storySoFar; ?></p></div>
</div>
<div id="bios" class="section">
<p class="title">Rogues Gallery</p>
<?php
foreach ($characters as $character) {
	$img = ('' == $character['image']) ? 'ajjeimages/lotwnophoto.jpg' : 'ridetheedge/imagedirectory/bioimages/' . $character['image'] . '.png';
	echo '<div class="border bio"><div class="info">';
	echo "<p class=\"name\">{$character['name']}</p>";
	echo "<p>&nbsp;{$character['bio']}</p></div>";
	echo "<div class=\"image\"><img src=\"/$img\" /></div>";
	echo '</div>';
}
?>
</div>
