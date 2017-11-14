<?php
		
	session_start();
     
$name=$_SESSION['name'];
 //echo $name;
 //$gender;
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
		 
				
 <form action="edithandle.php">
 <table width="200">
 <tr>
 <td>
 <fieldset >
   
   <legend>Edit profile</legend>
   <table border="0" width="140" height="20" align="center" cellpadding="10">
<tr>
<td>
<table border="0" width="200"  align="center" cellpadding="10">
<tr>
<td >Name:             
</td>
<td >
<input name="name" value="<?php
echo $a[3];
?>"></input>
</td>

</tr>
</table>
<hr>
<table border="0" width="200"  align="center" cellpadding="10">
<tr>
<td>Email:             
</td>
<td >
<input name="email" value="<?php
echo $a[2];
?>"></input>
</td>

</tr>
</table>

<hr>
<table border="0"  valign="top" >
<tr>
<td width="10">Gender:
</td><td>
<input name="gender" type="radio" value="Male" <?php
if( $a[4]=='Male')
{echo "checked";}
?>/></td><td>Male
</td>
<td>
	<input name="gender" type="radio" value="Female"  <?php
if( $a[4]=='Female')
{echo "checked";}
?>/></td><td>Female</td>
	
	<td>
	<input name="gender" type="radio" value="Other" <?php
if( $a[4]=='Other')
{echo "checked";}
?> /></td><td>Other
	</td>



</tr>
</table>

<hr>

<table border="0"  valign="top" >
<tr>
<td >Date_of_birth 
</td><td>
<input name="bd" size="15" value="<?php
echo $a[5];
?>" ></input>(dd/mm/yyyy)
</td>


</tr>
</table>

</td>
</tr>
</table>
<hr>

<table border="0"  align="center" cellpadding="10">
<tr>

<td width="50">
 	 <input type="submit" value="submit">
   </input >

</td>



</tr>
</table>
 
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