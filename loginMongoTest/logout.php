<?php
session_start();

// descoloco todas la variables de la sesión
session_unset();

// Destruyo la sesión
session_destroy();

//Y me voy al inicio
header("Location: index.html");

?> 