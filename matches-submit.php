<?php include("top.html"); ?>

<!--  ALEX Homework 4 (NerdLuv)  -->

<?php 
$username = trim($_GET["name"]); #trim white spaces at beginning and end
?>


<h1>Matches for <?= $username ?></h1>

<?php
#PHP code that finds particular matches depending on the user request
$lines = file("singles.txt", FILE_IGNORE_NEW_LINES);
#Do not add new line at the end of each array element

list($name, $gender, $age, $personality, $os, $min, $max) = explode(",", $lines[0]);
$i = 0;
while ($username != $name) {
	$i++;
	list($name, $gender, $age, $personality, $os, $min, $max) = explode(",", $lines[$i]);
}

#Find matches for that particular user
foreach ($lines as $line) {
	list($name2, $gender2, $age2, $personality2, $os2, $min2, $max2) = explode(",", $line);
	if ($gender2 != $gender && 
		$age2 >= $min &&
		$age2 <= $max &&
		$min2 <= $age &&
		$max2 >= $age && 
		similar_text($personality2, $personality) > 0 &&
		$os == $os2) {
	?>

<!--Create a div to return the results for the matches-->
<div class="match">
<p>
	<?= $name2 ?>
</p>

<ul>
	<li><strong>gender:</strong><?= $gender2?></li>
	<li><strong>age:</strong><?= $age2?></li>
	<li><strong>type:</strong><?= $personality2?></li>
	<li><strong>OS:</strong><?= $os2?></li>
</ul>

</div>
	<?php 
	} #end of IF statement in FOREACH LOOP
} #end of FOREACH LOOP

?>

<?php include("bottom.html"); ?>