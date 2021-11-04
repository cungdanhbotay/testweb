<?php
    $conn = pg_connect("postgres://epcxrxdunczekr:01564fdcc92469ec4a4d6c5e346c2a0c9e817625dd6548d832a2fca0536f74ea@ec2-3-215-57-87.compute-1.amazonaws.com:5432/d9n65ptr1efl6j");

    if(!$conn){
        die("Can not connect database");
    } 
?>