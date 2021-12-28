<?php
$pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
$email1 = 'a@gmail.com';
$email2 = 'ab@yahoo.com';
$email3 = 'abc@hotmail.com';
$email4 = '@gmail.com';
$email5 = 'ab@gmail.';
$email6 = '@#abc@gmail.com';

if(preg_match($pattern, $email1)) {
    echo 'email hợp lệ<br>';
} else {
    echo 'email không hợp lệ<br>';
}
if(preg_match($pattern, $email2)) {
    echo 'email hợp lệ<br>';
} else {
    echo 'email không hợp lệ<br>';
}
if(preg_match($pattern, $email3)) {
    echo 'email hợp lệ<br>';
} else {
    echo 'email không hợp lệ<br>';
}
if(preg_match($pattern, $email4)) {
    echo 'email hợp lệ<br>';
} else {
    echo 'email không hợp lệ<br>';
}
if(preg_match($pattern, $email5)) {
    echo 'email hợp lệ<br>';
} else {
    echo 'email không hợp lệ<br>';
}
if(preg_match($pattern, $email6)) {
    echo 'email hợp lệ<br>';
} else {
    echo 'email không hợp lệ<br>';
}
