<div id="authake">

<div class="envoltura-caja" style ="width:950px;">
    <div class="envoltura-caja-header">
        <h1 class="caja-titulo"><?php __('Authake administration page');?></h1>
    </div>

<div class="tabs-admin">
    <ul>
        <li><a href="#"> Usuarios</a></li>
        <li><a href="#"> Grupos</a></li>
        <li><a href="#"> Reglas</a></li>
    </ul>
</div>
    <div class="seleccion-caja">
        <div style="display:block;">
<h3><?php __('Users');?></h3>
<?php echo $this->requestAction('authake/users/index/tableonly', array('return')); ?>
<div class="actions">
    <ul>
        <li class="icon add"><?php echo $html->link(__('New user', true), array('controller'=> 'users', 'action'=>'add')); ?></li>
        <li class="icon user"><?php echo $html->link(__('Manage users', true), array('controller'=> 'users', 'action'=>'index')); ?> </li>
    </ul>
</div>
   </div>
    
  
        <div style="display: block;">
<h3><?php __('Groups');?></h3>
<?php echo $this->requestAction('authake/groups/index/tableonly', array('return')); ?>
<div class="actions">
    <ul>
        <li class="icon add"><?php echo $html->link(__('New group', true), array('controller'=> 'groups', 'action'=>'add')); ?></li>
        <li class="icon group"><?php echo $html->link(__('Manage groups', true), array('controller'=> 'groups', 'action'=>'index')); ?> </li>
    </ul>
</div>
    </div>
       
    
        <div style="display: block;">
            <h3><?php __('Rules');?></h3>
                <?php echo $this->requestAction('authake/rules/index/tableonly', array('return')); ?>
            <div class="actions">
    <ul>
        <li class="icon add"><?php echo $html->link(__('New rule', true), array('controller'=> 'rules', 'action'=>'add')); ?></li>
        <li class="icon lock"><?php echo $html->link(__('Manage rules', true), array('controller'=> 'rules', 'action'=>'index')); ?> </li>
    </ul>
  </div>
</div>
    </div>
    <script type="text/javascript">
      $(function() {
          $("div.tabs-admin").tabs("div.seleccion-caja > div");
      })
    </script>
</div>
</div>