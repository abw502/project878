<?php

$con = mysqli_connect('localhost' , 'root' , 'root' , 'fproject');

if(!$con)
{
    echo mysqli_connect_errno();
}

