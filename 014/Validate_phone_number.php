<?php
// (xx)-(0xxxxxxxxx)
$pattern = '/^\([0-9]{2}\)\-\([0]{1}[0-9]{9}\)/';
$phone_number = '(84)-(0975848484)';
function check_phone_number($pattern, $phone_number) {
    if (preg_match($pattern, $phone_number)) {
        return 'SDT đúng rồi bạn ơi!!';
    } else {
        return 'SDT này sai rồi bạn ơii!!';
    }
}
echo check_phone_number($pattern, $phone_number);
?>