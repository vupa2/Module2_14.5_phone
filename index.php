<?php
$data = ['(84)-(0978489648)', '(a8)-(22222222)'];

function checkPhone($str)
{
    $regexp = '/^\(\d{2}\)-\(0\d{9}\)$/';
    if (preg_match($regexp, $str)) {
        echo ("$str is a valid phone number.") . '<br>';
    } else {
        echo ("$str is a invalid phone number.") . '<br>';
    }
}

foreach ($data as $phone) {
    checkPhone($phone);
}
