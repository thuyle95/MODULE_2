<?php
$pattern = '/^[_a-z0-9]{6,}$/';
$account1 = '123abc_';
$account2 = '_abc123';
$account3 = '______';
$account4 = '123456';
$account5 = 'abcdefg';
$account6 = '.@';
$account7 = '12345';
$account8 = '1234_';
$account9 = 'abcde';
if (preg_match($pattern, $account1)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account2)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account3)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account4)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account5)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account6)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account7)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account8)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
if (preg_match($pattern, $account9)) {
    echo 'Tên tài khoản hợp lệ<br>';
} else {
    echo 'Tên tài khoản không hợp lệ<br>';
}
?>