<?php
if(isset($_SESSION['logged_in_jobseeker']))
{
?>
<form  method="POST"  action="jslogout.php">
<?php echo "<p style='font-size:14px;'> Welcome, ".$_SESSION['logged_in_jobseeker']."</p>"; ?>
<input type="submit" class="button" value="Logout" />
</form>

<?php
}
else if(isset($_SESSION['logged_in_employer']))
{
?>

<form  method="POST"  action="emlogout.php">
<?php echo "<p style='font-size:14px;'> Welcome, ".$_SESSION['logged_in_employer']."</p>"; ?>
<input type="submit" class="button" value="Logout" />
</form>

<?php }
else{
?>

<form  method="POST"  action="login.php">
Username:
<input type="text" value="" name="user" size="28" />
<hr style="color:#f2f2f2;" noshade="noshade"/>
Password:
<input type="password" value="" name="pass" size="28" />
<div style="margin-top:10px;">Select:</div>
<select name="title" id="select1"><option value="employer">Employer</option><option value="jobseeker">Jobseeker</option></select>

<input type="submit" class="button" value="Login" />
</form>
<?php } ?>