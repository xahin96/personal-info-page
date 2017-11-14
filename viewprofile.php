<?php
		
	session_start();
     
$name=$_SESSION['name'];
 //echo $name;
 $file = fopen("Hello.txt", "r");
	
 while(!feof($file)){
		$content = fgets($file);
		$a=explode(" ",$content);
		
		//echo $a[1];
		if($a[0]==$name )
	        {   
			$namebool=true;	
				
			break;	
			}
			
			
	}
 
fclose($file);
?>






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
		 
				
 <form>
 <table width="100">
 <tr>
 <td>
 <fieldset >
   
   <legend>profile</legend>
   <table border="0" width="140" height="20" align="center" cellpadding="10">
<tr>
<td width="83">Name: <?php
echo $a[3];
?> <hr>
 
Email: <?php
echo $a[2];
?>
<hr>
Gender: <?php
echo $a[4];
?>
<hr>
Date of Birth:<?php
echo $a[5];
?>
          
</td>
<td >
<img  width="130" valign="top" src="propic.jpg"/>
<a href = "dashboard.html">Change</a>

</td>

</tr>
</table>
<hr>
<a href = "dashboard.php">Edit Profile</a>
 
	</fieldset>
	
 
 
 

 </form>
 </td>
 </tr>
 </table>
		 
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
