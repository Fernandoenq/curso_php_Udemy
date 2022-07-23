<?php
//esta dizendo onde é a raiz do sistema para que possa ser linkado imagens e estilos
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']. '?') . '/';
?>