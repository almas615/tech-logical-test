<?php
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 and $i % 5 == 0) {
        echo $i . " = fooBar <br>";
    } elseif ($i % 3 == 0) {
        echo $i .  "= foo <br>";
    } elseif ($i % 5 == 0) {
        echo $i . "= bar <br>";
    } else {
        echo $i . "<br>";
    }
}
