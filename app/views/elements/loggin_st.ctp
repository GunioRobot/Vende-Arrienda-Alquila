<div id="login_buttons">
<?php
if ($authak3->isLogged()) {
    echo $html->link('Salir', '/authake/user/logout');
} else {
    echo $html->link('Entrar', '/authake/user/login');
}
?>
</div>
