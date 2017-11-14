<?php
session_start();

$user['name']=$_REQUEST['name'];
$user['email']=$_REQUEST['email'];
$user['username']=$_REQUEST['username'];
$user['password']=$_REQUEST['password'];
$user['gender']=$_REQUEST['gender'];
$user['bd']=$_REQUEST['dd'];



	
	//var_dump($user);
	
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
//echo $xml->from;
//$xml1=simplexml_load_file("in.xml");
//$xml->savexml("hello.txt");
//echo $xml->name;
//$xml->/*
$file = fopen("Hello.txt", "a");
	fwrite($file, "\r\n$xml->username $xml->password $xml->email $xml->name $xml->gender $xml->bd");
	fclose($file);
	
	header("location: home.html");
	
?>