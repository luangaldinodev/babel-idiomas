<?php

session_destroy();
// session_reset();
// session_abort();
// session_cache_expire();

header("Location: ../../index.php");

?>