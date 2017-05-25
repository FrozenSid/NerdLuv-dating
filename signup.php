<?php include("top.html"); ?>

<!-- ALEX Homework 4 (NerdLuv)-->

<!--Form for signing up the users-->
<form action="signup-submit.php" method="post">
<fieldset>
<legend>New User Signup:</legend>

<ul>
<li> <!-- 1st field for Name-->
<strong>Name:</strong>
<input type="text" name="name" size="16" />
</li>


<li> <!-- 2nd Field for Gender-->
<strong>Gender:</strong>
<label><input type="radio" name="gender" value="M" />Male</label>
<label><input type="radio" name="gender" value="F" checked="checked" />Female</label>
</li>


<li> <!-- 3rd Field for Age-->
<strong>Age:</strong>
<input type="text" name="age" size="6" maxlength="2" />
</li>


<li> <!-- 4th field for Personality Type-->
<strong>Personality type:</strong>
<input type="text" name="persona" size="6" maxlength="4" />
<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">(Don't know your type?)</a>
</li>


<li> <!-- 5th field for Favorite OS-->
<strong>Favorite OS:</strong>
<select name="OS">
<option selected="selected">Windows</option>
<option>Mac OS X</option>
<option>Linux</option>
</select>
</li>


<li> <!-- 6th field for Seeking Age-->
<strong>Seeking age:</strong>
<input type="text" name="minage" size="6" maxlength="2" value="min" />to
<input type="text" name="maxage" size="6" maxlength="2" value="max" />
</li>
</ul>

<!--Submit Button for the form-->                        
<input type="submit" value="Sign Up">
</fieldset>
</form>

<?php include("bottom.html"); ?>