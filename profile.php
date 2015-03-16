<?php include("faculty_panel_header.php");?>
<div style="width:15%; float:left; background-color:#d4d5d8; height:500px; ">
	<ul id="nav" >
		<li><a href="faculty_panel.php">Home</a></li>
		<li><a href="#">My paper</a></li>
        <li><a href="new_paper.php">New paper</a></li>
        <li><a href="profile.php">My profile</a></li>
        <li><a href="#">Logout</a></li>
	</ul>
</div>
<div style="width:75%; float: right; height:500px; ">
	<div>
	<br />
	<br />
	<div style="width:30%; float:left;"><label for="name">FULL NAME</label></div>
    <div style="width:70%; float:right;" align="left"><input type="text" name="name" /></div>
	</div>
    
    <div>
	<br />
	<br />
	<div style="width:30%; float:left;"><label for="email">E-MAIL</label></div>
    <div style="width:70%; float:right;" align="left"><input type="email" name="email" /></div>
	</div>
    
    <div>
	<br />
	<br />
	<div style="width:30%; float:left;"><label for="npassword">NEW PASSWORD</label></div>
    <div style="width:70%; float:right;" align="left"><input type="password" name="password" /></div>
	</div>
    
    <div>
	<br />
	<br />
	<div style="width:30%; float:left;"><label for="cpassword">CONFIRM PASSWORD</label></div>
    <div style="width:70%; float:right;" align="left"><input type="password" name="cpassword" /></div>
	</div>
    
    <div style="width:50%; padding-top:40px;" align="center">
		<input type="submit" value="CHANGE PASSWORD" />
		<input type="reset" value="CANCEL" />
	</div>
</div>

</body>
</html>