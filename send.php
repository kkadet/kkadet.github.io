<?php
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$name = urldecode($name);
$email = urldecode($email);
$message = urldecode($message);

$name = trim($name);
$email = trim($email);
$message = trim($message);

mail("doost-55@yandex.ru", "������ � �����", "���:".$name.". E-mail: ".$email.". �����: ".$message ,"From: example2@mail.ru \r\n");

if (mail("example@mail.ru", "����� � �����", "���:".$name.". E-mail: ".$email ". �����: ".$message ,"From: example2@mail.ru \r\n"))
 { 
    echo "��������� ������� ����������"; 
} else { 
    echo "��� �������� ��������� �������� ������"; 
}?>