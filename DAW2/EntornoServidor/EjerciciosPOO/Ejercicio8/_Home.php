<?php

echo '¡Hola ' . htmlspecialchars(@$_COOKIE["loginUsuario"]["Usuario"]) . '!<br>';

function logout() {
    if (isset($_COOKIE['loginUsuario'])) {
        unset($_COOKIE['loginUsuario']); 
        setcookie('loginUsuario', null, -1, '/'); 
        return true;
    } else {
        return false;
    }
}

echo '<input type="submit" value="logout" onsubmit="logout()"/>';