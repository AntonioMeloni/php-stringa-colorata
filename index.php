<?php

    $password = $_GET['pass'];
    var_dump($password);

    if ($password == 'Boolean') {
        echo '<p style="color:green">La password è Boolean</p>';
    }else {
        echo '<p style="color:red">La password non è Boolean</p>';
    }

 ?>
