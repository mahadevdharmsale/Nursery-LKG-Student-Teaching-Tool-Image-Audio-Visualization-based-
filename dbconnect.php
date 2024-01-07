<?php
$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="narsary";
$DBcon=new MYSQli($DBhost,$DBuser,$DBpass,$DBname);
if($DBcon->connect_errno){
    die("ERROR :->".$DBcon->connect_error);
}
?>