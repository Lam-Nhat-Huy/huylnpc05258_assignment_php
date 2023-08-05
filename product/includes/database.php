<?php

$conn = mysqli_connect('localhost', 'root', 'kalosonits14', 'assignmentdb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
