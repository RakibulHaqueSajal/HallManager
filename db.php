<?php 
    
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="hallma";
    

        
    $connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if($connection==true)
    {
        //echo 'db connected';
    }
    else
    {
       
    }
        
         
 ?>