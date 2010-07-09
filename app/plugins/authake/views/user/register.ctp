<div id="authake" >
<div class="register form">
<?php echo $form->create(null, array('action'=>'register'));?>
	<fieldset style="width:600px;">
 		<legend><?php __('Registration');?></legend>
                <div class="campotexto">
                <?php
                    echo $form->input('login', array('label'=>__('Username', true), 'size'=>'12'));
                 ?>
                 </div>
                 <div class="campotexto">
                <?php
                    echo $form->input('email', array('label'=>__('Email', true), 'size'=>'40'));
                 ?>
                 </div>
                <div class="campotexto">
                <?php
                    echo $form->input('password1', array('type'=>'password', 'label'=>__('Password', true), 'value' => '', 'size'=>'12'));
                 ?>
                </div>
                <div class="campotexto">
                <?php
                    echo $form->input('password2', array('type'=>'password', 'label'=>__('Please, re-enter password', true), 'value' => '', 'size'=>'12'));
                 ?>
                    </div>
                
	</fieldset>
    </div>
    <div class="boton-enviar">
                <?php
                    echo $form->end(__('Register', true));
                 ?>
                    </div>
</div>




