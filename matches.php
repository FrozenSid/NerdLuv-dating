<?php include("top.html"); ?>

<!-- ALEX Homework 4 (NerdLuv)-->

<form action="matches-submit.php" method="get">
<fieldset>
<legend>Returning User:</legend>


<ul>
<li> <!-- 1st field for Name-->
<strong>Name:</strong>
<input type="text" name="name" size="16" />
</li>
</ul>


<!--Submit button to view the matches-->                       
<input type="submit" value="View My Matches">
</fieldset>
</form>
<!--When user presses "VIEW MY MATCHES", the form
submits its data as a GET request to matches-submit.php-->

<?php include("bottom.html"); ?>