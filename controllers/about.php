<?php

$_SESSION['name'] = "Nathaniel";

view("about.view.php", [
    'heading' => 'About Us',
]);