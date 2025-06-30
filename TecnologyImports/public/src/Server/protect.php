<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_POST['id'])){
        die("Você não pode acessar esta página porque não está logado,<p><a href=\"\"></a></p>")
    }
?>
