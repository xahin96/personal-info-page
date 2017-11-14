
<table border="1" height="80" width="600"  align="center" >
<tr>
<td> 
<table     align="center">	
 
	 <tr  >
	     <td width="410">
		 <b>Xcompany</b>
	    </td>
		<td width="190">
		
		Logged in as:  
		<a href = "dashboard.php"><?php
		
		session_start();
     
$name=$_SESSION['name'];
 echo $name;

?></a>|
		<a href = "home.html">Logout </a>
		
		
		</td>
		
	  </tr>
	  
	  </table>
	  </td>
	  </tr>
	  </table>
<table border="1" width="600" height="200" align="center" >	  
	  <tr>
	  <td align="top">
		 
		 <table border="0"  >	  
	  <tr>
	  <td >
	  Account
	  <hr>
	  <ul >
<li><a href = "dashboard.php">Dashboard</a></li>

<li><a href = "viewprofile.php">View Profile</a></li>

<li><a href = "editprofile.php">Edit Profile</a></li>


<li><a href = "strength.html">Change Profile Picture</a></li>
		

<li><a href = "additional.html">Change Password</a></li>
	
		
<li><a href = "personal.html">Log Out</a></li>
		

			

	
	</ul>
		
		</td>
</tr>	
</table>	
		</td> 
		 <td align="center" width="350">
		 
		<b>Welcome <?php
		
	
     
$name=$_SESSION['name'];
 echo $name;

?></b>
		 
		 </td>
		 
		 </tr>
	  
	</table>
	
<table border="1" width="600"  align="center" >
	<tr   align="center">
	     <td>
		 copyright 2017
		 
		 </td>
		 </tr>
	</table>