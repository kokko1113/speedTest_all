<?php
if (isset($_GET["num"])) {
    $num = $_GET["num"];
    if ($num < 50) {
        print_r("小さすぎます");
    } else if ($num > 50) {
        print_r("大きすぎます");
    } else {
        print_r("５０です");
    }
}
