<?php 
// Name: Zabala, Jan Chrysler S.
// Section: CYB - 201
// Subject: 6DWEB
// Date: November 20, 2025

// The initialization of variables and arrays with operators and type juggling.
	$title = "Daylight";
	$artist = "David Kushner";

	$month = "April";
	$day = '14';
	$year = "2023";
	$releaseDate = $month.' '. $day.','.$year;

	$mood = "Paradoxical";

	$verseCount1 = "1";
	$verseCount2 = '1';
	$totalVerseCount = $verseCount1 + $verseCount2;

	$preChorusCount1 = '1';
	$preChorusCount2 = "1";
	$totalPreChorusCount = $preChorusCount1 + $preChorusCount2;

	$chorusCount1 = "1";
	$chorusCount2 = '1';
	$totalChorusCount = $chorusCount1 + $chorusCount1;

// The arrays of words used in lyrics.

	$nouns = ["there", "blood", "lust", "burden", "sinners", "prayer", "Souls", "pride", "guilt", "darkness", "distance", "way", "it", "time", "poison", "vine", "sins", "daylight", "mercy", "you", "knees", "light", "night time", "me", "end", "forgiveness"];
	$verbs = ["Telling", "won’t", "go", "know", "care", "Tryna", "wash", "spilt", "is", "share", "atone", "tied", "intertwined", "been", "livin’", "resist", "love", "hate", "drink", "Hidin’", "runnin’", "Tellin’", "spare", "might", "find", "down", "try", "follow", "leave", "beggin’"];
	$adjectives = ["lone", "tied", "intertwined", "dark", "same", "last", "Deep", "down", "way", "night"];

// The lyrics construction using arrays.
	$verse1 = ["$verbs[0] myself I $verbs[1] $verbs[2] $nouns[0]", 
	"Oh, but I $verbs[3] that I $verbs[1] $verbs[4]", 
	"$verbs[5] $verbs[6] away all the $nouns[1] I've $verbs[7]", 
	"This $nouns[2] is a $nouns[3] that we both $verbs[9]", 
	"Two $nouns[4] can't $verbs[10] from a $adjectives[0] $nouns[5]", 
	"$nouns[6] $adjectives[1] $adjectives[2] by our $nouns[7] and $nouns[8]"];

	$preChorus1 = ["(Ooh) There's $nouns[9] in the $nouns[10]",
	"From the $nouns[11] that I've $verbs[13] $verbs[14]",
	"(Ooh) But I $verbs[3] I can't $verbs[15] it"];

	$chorus = ["Oh, I $verbs[16] it and I $verbs[17] it at the same $nouns[13]",
	"You and I $verbs[18] the $nouns[14] from the same $nouns[15]",
	"Oh, I $verbs[16] it and I $verbs[17] it at the same $nouns[13]",
	"$verbs[19] all of our $nouns[16] from the $nouns[17]",
	"From the $nouns[17], $verbs[20] from the $nouns[17]",
	"From the $nouns[17], $verbs[20] from the $nouns[17]",
	"Oh, I $verbs[16] it and I $verbs[17] it at the same $nouns[13]"];

	$verse2 = ["$verbs[21] myself it's the $adjectives[5] $nouns[13]",
	"Can you $verbs[22] any $nouns[18] that $nouns[19] $verbs[23] $verbs[24]",
	"If I'm $verbs[25] on my $nouns[20] again?",
	"$adjectives[6] $adjectives[7], $adjectives[8] $verbs[25], Lord I $verbs[26]",
	"Try to $verbs[27] your $nouns[21], but it's $nouns[22]",
	"Please don't $verbs[28] $nouns[23] in the $nouns[24]"];

	$preChorus2 = ["(Ooh) There's $nouns[9] in the $nouns[10]",
	"I'm $verbs[29] for $nouns[25]",
	"(Ooh) But I $verbs[3] I $verbs[23] $verbs[15] it, ooh"];
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Zabala - PRLM HandsOn Mod1.2: PHP Lyric Remix</title>
	<style>
		body {
			background-image: url('https://png.pngtree.com/background/20250524/original/pngtree-golden-sunset-wheat-field-art-featuring-breathtaking-scenic-landscape-in-warm-picture-image_16573540.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			background-position:center;
			color: white;
			text-align: center;
		}
	</style>
</head>
<body>
	<!-- The display of the song information. -->
	<h1> Song Title: <?= $title ?> </h1>
	<h2> Artist: <?= $artist ?> </h2>
	<h3> Release Date: <?= $releaseDate ?> </h3>
	<h4> Mood: <?= $mood ?> </h4>
	<p> Full Song Lyrics: </p>

	<!-- The display of the full song lyrics using the variables and arrays. -->
	<p> [Verse 1] </p>
	<p> <?= $verse1[0] ?> <br> <?= $verse1[1] ?> <br> <?= $verse1[2] ?> <br> <?= $verse1[3] ?> <br> <?= $verse1[4] ?> <br> <?= $verse1[5] ?> </p>

	<p> [Pre-Chorus 1] </p>
	<p> <?= $preChorus1[0] ?> <br> <?= $preChorus1[1] ?> <br> <?= $preChorus1[2] ?> </p>

	<p> [Chorus] </p>
	<p> <?= $chorus[0] ?> <br> <?= $chorus[1] ?> <br> <?= $chorus[2] ?> <br> <?= $chorus[3] ?> <br> <?= $chorus[4] ?> <br> <?= $chorus[5] ?> <br> <?= $chorus[6] ?> </p>

	<p> [Verse 2] </p>
	<p> <?= $verse2[0] ?> <br> <?= $verse2[1] ?> <br> <?= $verse2[2] ?> <br> <?= $verse2[3] ?> <br> <?= $verse2[4] ?> <br> <?= $verse2[5] ?> </p>

	<p> [Pre-Chorus 2] </p>
	<p> <?= $preChorus2[0] ?> <br> <?= $preChorus2[1] ?> <br> <?= $preChorus2[2] ?> </p>

	<p> [Chorus] </p>
	<p> <?= $chorus[0] ?> <br> <?= $chorus[1] ?> <br> <?= $chorus[2] ?> <br> <?= $chorus[3] ?> <br> <?= $chorus[4] ?> <br> <?= $chorus[5] ?> <br> <?= $chorus[6] ?> <br> </p>
	<p> <?= $chorus[0] ?> <br> <?= $chorus[1] ?> <br> <?= $chorus[2] ?> <br> <?= $chorus[3] ?> <br> <?= $chorus[4] ?> <br> <?= $chorus[5] ?> <br> <?= $chorus[6] ?> <br> </p>

	<p> Total Number of Verse: <?= $totalVerseCount ?> <br>
		Total Number of Pre-Chorus: <?= $totalPreChorusCount ?> <br>
		Total Number of Chorus: <?= $totalChorusCount ?> </p>
</body>
</html>