<?php
session_start();

echo 'You have cleaned session';
session_destroy();
header('location: ../Homepage.php');
exit();
