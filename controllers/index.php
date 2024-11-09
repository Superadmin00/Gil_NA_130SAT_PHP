<?php

$_SESSION['name'] = "Nathaniel";

view("index.view.php", [
    'heading' => 'Home',
]);