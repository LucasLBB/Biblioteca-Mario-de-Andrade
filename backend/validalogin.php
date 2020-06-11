<?php
ob_start();
if((!$_SESSION['email']) || (!$_SESSION['nomeCompleto'])){
    header('Location:../frontend/loginht.php');
    exit();
}