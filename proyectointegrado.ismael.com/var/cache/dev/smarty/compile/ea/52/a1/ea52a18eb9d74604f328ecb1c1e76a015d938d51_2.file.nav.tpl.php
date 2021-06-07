<?php
/* Smarty version 3.1.39, created on 2021-06-07 19:31:22
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbfreeshipping/views/templates/hook/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be57eae088b3_64795587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea52a18eb9d74604f328ecb1c1e76a015d938d51' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbfreeshipping/views/templates/hook/nav.tpl',
      1 => 1617704756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be57eae088b3_64795587 (Smarty_Internal_Template $_smarty_tpl) {
?><p class="dbfreeshipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Envios gratis a partir de'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['free']->value, ENT_QUOTES, 'UTF-8');?>
</p><?php }
}
