<?php
echo $javascript->link('buscador')."\n";
?>
<h2>Bienvenido al Sistema Vende.net</h2>

<div id="banners">
<?php
echo $html->image('vendelog.gif', array(
        'alt' => 'Vende.NET', 
        'url' => array('controller' => 'vendenet')));

echo $html->image('alquila.gif', array(
        'alt' => 'Alquila.NET', 
        'url' => array('controller' => 'alquilanet')));

echo $html->image('arrienda.gif', array(
        'alt' => 'Arrienda.NET', 
        'url' => array('controller' => 'arriendanet')));
?>
</div>

<?php echo $form->create('Buscador', array('action' => 'search')); ?>

<div id="box" style="width:450px;">
Busqueda por Codigo 
<input id="BuscadorQcode" type="text" value="" name="data[Buscador][qcode]" />
<input type="submit" value="Buscar!" />
</div>

<div id="box" style="width:350px;">
Busqueda Detallada
<p>Tipo de Negocio: 
<select name="data[Buscador][site_id]">
    <option value="0">---</option>
    <option value="1">Vende</option>
    <option value="2">Arrienda</option>
    <option value="3">Alquila/Temporadas</option>
</select></p>
<?php

array_unshift($ciudades, ' ');

$img = $html->image('loader.gif', array('class' => 'loader'));

echo $form->input('subcat', array('label' => 'Subcategorias', 'options' => $subcats));
echo $form->input('ciudad', array('id' => 'ciudad', 'options' => $ciudades, 'after' => $img));
echo $form->input('zona', array('id' => 'zonas', 'options' => array('...'), 'div' => array('id' => 'szona')));
?>
<input type="submit" value="Buscar!" />
</div>
</form>
<div id="login_box">
<?php

/**
 * Codigo para la posteridad

if ($authak3->isLogged()) {
    echo "<i>Identificado como: <strong>".$authak3->getLogin()."</strong> que pertenece a los grupos <strong>".implode(', ', $authak3->getGroupNames())."</strong></i><br/><br/>";
    
    echo $html->link("Centro de Administracion de Usuarios", "/authake")."<br /><br />";
	echo $html->link("Administracion de Estados de Inmueble", "/statuses")."<br /><br />";
    //echo $html->tag('hr', null, array('style' => 'width: 20%;'));
    echo $html->link("Gestion de Zonas", "/zonas")."<br /><br />";
    echo $html->link("Gestion de Ciudades", "/ciudades")."<br /><br />";
    echo $html->link("Gestion de Departamentos", "/departamentos")."<br /><br />";
    echo $html->link("Gestion de Paises", "/paises")."<br /><br />";
    echo $html->link("Gestion de Monedas", "/monedas")."<br /><br />";
    echo $html->link("Gestion de Climas", "/climas")."<br /><br />";
    echo $html->link("Perfil de Usuario", "/authake/user/")."<br/>";
    echo $html->link("Mis Inmuebles", "/inmuebles/misinmuebles")."<br />";
    echo $html->link("Salir del Sistema", "/authake/user/logout")."<br/>";
} else {
    //echo $html->link("Entrar al Sistema", "/authake/user/login")."<br/>";
    echo $html->link("Registrarse", "/authake/user/register")."<br/>";
    //echo $html->link("Confirmar Registro", "/authake/user/confirmregister")."<br/>";
}
        
*/
?>

<!-- 
<h3>Usuarios de Demostracion</h3>
<ul>
    <li>admin/admin : Administrator</li>
    <li>acluser/acluser : Gestor de Acceso (puede ver usuarios/grupos/reglas, y podra editar/borrar)</li>
    <li>otheruser/otheruser : Usuario de prueba en grupo 'Other test group'</li>
    <li>simpleuser/simpleuser : Usuario de prueba sin grupos (guest)</li>
</ul>
<?php        

echo "<h3>Algunas Pruebas...</h3>";
echo $html->link("Lista de Reglas", "/authake/rules/index")." (Permitido a cualquiera)<br/>";
echo $html->link("Lista de Usuarios", "/authake/users/index")." (Permitido solo para los Gestores de Acceso)<br/>";
echo $html->link("Ver usuario n°1", "/authake/users/view/1")." (idem)<br/>";
echo $html->link("Editar usuario n°1", "/authake/users/edit/1")." (Solamente para el Administrador)<br/>";

?>
-->
