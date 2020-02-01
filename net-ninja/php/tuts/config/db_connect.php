<?php
// connect to database
$conn = mysqli_connect('localhost', 'ryan', 'Ryan100480', 'ninja_pizza');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
