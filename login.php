<!DOCTYPE html>
<html lang="en">

<body background="celebration.jpg">
<form class="form-horizontal" action='check_login.php' method="POST">

<style type="text/css">
    .control-group  {
        width: 500px;
        clear: both;
    }
    .conntrol-group input {
        width: 100%;
        clear: both;
    }
    </style>
<center>
<div id="legend">
<font size="22">
<font face="sans-serif">
<br>
<legend class="" background color="white"><h2>Occasion planner</h2></legend></font>
<br>
<legend class="">Login</legend></font>
</div>
<br>
<font size="8">
<div class="control-group">
<!-- Username -->
<label class="control-label"  for="username"> Username:  <input type="text" id="username" name="username"  width="100" height="100" placeholder="" class="input-xlarge"></label>
<div class="controls">
</div>
</div>
        
<div class="control-group">
<!-- Password -->
<label class="control-label"  for="password">   Password:  <input type="password" id="password" name="password" placeholder="" class="input-xlarge"></label>
<div class="controls">
</div>
</div>
<div class="controls">
<br>
<horizontal>
<input style="font-size : 20px; width: 15%; height: 25px;" type="submit" value="Sign-in">
<input style="font-size : 20px; width: 15%; height: 25px;" type=button onClick="parent.location='signup.php'" name="name" value='Sign-up'>
</div>
</div>

</font>
</center>

</form>
</form>
</body>
</html>