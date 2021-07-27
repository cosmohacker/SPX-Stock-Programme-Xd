<?php
session_start();
session_destroy();
echo '<script>window.location.assign("../../../home/master.php");</script>';