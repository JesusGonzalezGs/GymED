<?php
session_start();
session_destroy();
header('Location:' . getenv('HTTP_REFERER'));
?>