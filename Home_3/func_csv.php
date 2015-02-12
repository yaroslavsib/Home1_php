<?php

$open_csv = fopen('categories.csv', 'r');

while ( ($data = fgetcsv($open_csv, 1000, ";") ) !== false) {
    print_r($data);
}

fclose($open_csv);