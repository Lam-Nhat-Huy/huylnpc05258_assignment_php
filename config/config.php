<?php
$conn = mysqli_connect('localhost', 'root', 'kalosonits14', 'assignmentdb') or die('Failed to connect to database' . mysqli_connect_error());
session_start();
$user_id = $_SESSION['user_id'];
