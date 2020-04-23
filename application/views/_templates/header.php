<div class="container">
<a href="<?=base_url() ?>hdu/anonymous/login">LOGIN</a>
<?php if ($header['persona']!=null):?>
	Hola <?=$header['persona']->nombre?>
<?php else:?>
	<a href="<?=base_url() ?>hdu/anonymous/registrar">RESGISTRO</a>
	<a href="<?=base_url()?>hdu/user/logout">Logout</a>
<?php endif;?>
</div>