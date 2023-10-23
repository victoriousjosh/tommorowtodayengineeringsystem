<?php
    $Conn = new mysqli("localhost", "root","","ttesdatabase");
    if($Conn->connect_error){
        die("Connection unsucessfull". $Conn->connect_error);
        }else{
            echo" ";
        }
    ?>