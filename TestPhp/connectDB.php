<?php
    echo 'test for connection',
	$connection = oci_connect($username = 'yuzhou',
        $password = '921217LYz',
        $connection_string = '//oracle.cise.ufl.edu/orcl');

 if($connection){
       echo 'hahaha';
        echo 'success';}
	