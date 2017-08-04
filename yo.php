<?php
if (isset($_GET['text'])){
echo 'Yo!' . $_GET['formu'];
}else {
    http_response_code(400) {
    echo "expect a text parameter";

    }