<?php
$count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
echo $hits[0];
?>