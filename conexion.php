<?php
 $conectado = @mysql_connect("127.0.0.1:3306","root","n0m3l0");
    if ($conectado){
        //mysql_select_db("courshop_bdcourshop", $conectado);
        echo "conectado";
    }else{
        die('Error: '.mysql_errno(). ' - ' . mysql_error());
    }
?>