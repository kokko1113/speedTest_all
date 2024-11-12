<?php
function aaa($year) {
    for ($month = 1; $month <= 12; $month++) {
        $monthEnd = date("t", strtotime("$year-$month-01"));
        echo "$year 年 $month 月: $monthEnd 日\n";
    }
}

aaa(2022);
?>
