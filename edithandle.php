<?php
		
		$user['name']=$_REQUEST['name'];
$user['email']=$_REQUEST['email'];

$user['gender']=$_REQUEST['gender'];
$user['bd']=$_REQUEST['bd'];


	session_start();
     
$name=$_SESSION['name'];
 $file = fopen("Hello.txt", "r");
	
 while(!feof($file)){
		$content = fgets($file);
		$a=explode(" ",$content);
		
		//echo $a[1];
		if($a[0]==$name )
	        { 
		//echo "$a[0]";  
			//$namebool=true;
$user[password]=$a[1];
$user[username]=$a[0];
	$note=<<<XML
<user>
<name>$user[name]</name>
<email>$user[email]</email>
<username>$user[username]</username>
<password>$user[password]</password>
<gender>$user[gender]</gender>
<bd>$user[bd]</bd>
</user>
XML;
		$xml=simplexml_load_string($note);	
		$file1 = fopen("Hello.txt", "w+");
fwrite($file1, "\r\n$xml->username $xml->password $xml->email $xml->name $xml->gender $xml->bd");		
		fclose(file1);
			}
			
			
	}
 
fclose($file);
header("location: editprofile.php");
	

?>
