<div id="authake">

<div class="login form">
<?php echo $form->create(null, array('action'=>'login'));?>
    <fieldset>
<!--        <legend><?php __('Login');?></legend>   -->
        <div class="campotexto">
    <?php
       
    echo $form->input('login', array('label'=>__('Username', true), 'size'=>'14'));
    ?>
    </div>
    <div class="campotexto">
    <?php
    echo $form->input('password', array('label'=>__('Password', true), 'value' => '', 'size'=>'14'));
    ?>
    </div>
    </fieldset>
</div>
    <div class="validacion-login">
        
    <div class="boton-enviar">
    <?php echo $form->end(__('Login', true))  ?>
    </div>
        <div class="olvido-pass">
            <p class="lostpassword"><?php echo $html->link(__("I forgot my password...", true), array('action'=>'mypassword'))."<br/>"; ?></p>
        </div>
</div>
</div>
