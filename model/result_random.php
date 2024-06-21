<?php

if (isset($_SESSION['random'])) {
    echo $_SESSION['random'];
    session_destroy();
}
