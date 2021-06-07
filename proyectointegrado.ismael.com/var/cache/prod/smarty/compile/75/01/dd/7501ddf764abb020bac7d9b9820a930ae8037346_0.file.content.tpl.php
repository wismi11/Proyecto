<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:32:07
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/Backoffice/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74378de5b8_20634864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7501ddf764abb020bac7d9b9820a930ae8037346' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/Backoffice/themes/default/template/content.tpl',
      1 => 1620187654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74378de5b8_20634864 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
