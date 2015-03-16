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
	<form name="newpaper" method="post" onSubmit="">
    	<table width="75%"  border="0" align="center" style="padding-top:50px; ">
        	<tr height="10px;">
            	<td width="25%">SUBJECT CODE</td>
                <td width="25%"><select><option>5CS1</option></select></td>
                <td width="25%">BRANCH</td>
                <td width="25%"><select><option>CSE</option></select></td>                
            </tr>
            <tr height="0px;">
            	<td width="25%">SUBJECT NAME</td>
                <td width="25%"><select><option>DBMS</option></select></td>
                <td width="25%">DURATION</td>
                <td width="25%">
                	<select>
                    <option>0.5 hrs</option>
                    <option>1 hrs</option>
                    <option>1.5 hrs</option>
                    <option>2 hrs</option>
                    <option>2.5 hrs</option>
                    <option>3 hrs</option>
                    </select>
                 </td>                
            </tr>
        </table>
    </form>
</div>
</body>
</html>