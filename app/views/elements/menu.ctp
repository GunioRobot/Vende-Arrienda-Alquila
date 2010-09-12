<?php

echo $javascript->link('jquery/jquery-1.3.2.min.js')."\n";
echo $javascript->link('menu')."\n";

if (!isset($site))
    $site = '';

if ($authak3->isLogged()) {

    if ($authak3->isMemberOf(1)) {
        $menuAdmin = $html->tag('li', $html->link('Administrar', '#').$html->tag('ul', 
            $html->tag('li', $html->link('Usuarios', '/authake')).
            $html->tag('li', $html->link('Estados', '/statuses')).
            $html->tag('li', $html->link('Categorias', '/categorias')).
            $html->tag('li', $html->link('Subcategorias', '/subcategorias')).
            $html->tag('li', $html->link('Monedas', '/monedas')).
            $html->tag('li', $html->link('Pais', '/paises')).
            $html->tag('li', $html->link('Departamento', '/departamentos')).
            $html->tag('li', $html->link('Ciudad', '/ciudades')).
            $html->tag('li', $html->link('Zona', '/zonas')).
            $html->tag('li', $html->link('Inmuebles', '/admin/inmuebles')),
            array('id' => 'jsddmL2'))
        );
    } else {
        $menuAdmin = '';
    }

    echo $html->tag('ul',
        $html->tag('li', $html->link('Inicio', '/')).
        $html->tag('li', $html->link('Mi Perfil', '/'.$site.'/authake/user/')).
            //$html->tag('ul', $html->tag('li', 'Alguna Otra cosa'))).
        $html->tag('li', $html->link('Mis Inmuebles', '/'.$site.'/inmuebles/misinmuebles')).
        $html->tag('li', $html->tag('ul', 'Favoritos')).
        $menuAdmin.
        $html->tag('li', $html->link('Salir', '/authake/user/logout')),
        array('id' => 'jsddm'));

} else {
    echo $html->tag('ul',  $html->tag('li', $html->link('Inicio', '/')).
        $html->tag('li', $html->link('Entrar', '/authake/user/login')).
        $html->tag('li', $html->link('Registrarse', '/authake/user/register')), array('id' => 'jsddm'));
}
?>
