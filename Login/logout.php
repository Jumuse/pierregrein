<?php

session_start();

session_destroy();

header("Location: ../Vues/index.php");
exit;