<?php
	session_start();
	
		//var_dump($_SESSION['userList'])	;

	$username = $_POST['username'];
	$password = $_POST['password'];
	$namebool=false;
	//$passbool=false;
	//header("location: dashboard.html");

	$file = fopen("Hello.txt", "r");
	
	

	while(!feof($file)){
		$content = fgets($file);
		$a=explode(" ",$content);
		
		//echo $a[1];
		if($a[0]==$username && $a[1]==$password)
	        {   
			$namebool=true;	
				
			break;	
			}
			
			
	}
	
	fclose($file);
	
	
	if ($namebool==true)
	{	
		$_SESSION['name']=$username;
		header("location: dashboard.php");
	}
	else 
	{
			header("location: login.html");
	}
?>