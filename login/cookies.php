<?php
setcookie('nombreUsuario', 'Pedro', time() + 4800);
if (isset($_COOKIE['nombreUsuario'])){
    echo 'Valor de la Cookie:  '. $_COOKIE['nombreUsuario'];
}else{
    echo 'No hay Cookies';
}
?>
