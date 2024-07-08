<?php
include ('config.php');


$usr_name = $_POST['user-name'];
$usr_phone = $_POST['user-phone'];
$usr_email = $_POST['user-email'];
$usr_subject = $_POST['user-subject'];
$message = $_POST['user-message'];


$stmt = $connection->prepare('INSERT INTO contact_table (Name,Phone,email,Subject,Message) VALUES(?,?,?,?,?)');
$stmt->bind_param('sssss', $usr_name, $usr_phone, $usr_email, $usr_subject, $message);
$stmt->execute();

header('location: ../index.php');
