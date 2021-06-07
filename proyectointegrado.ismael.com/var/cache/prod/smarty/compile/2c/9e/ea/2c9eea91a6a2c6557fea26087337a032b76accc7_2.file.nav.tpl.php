<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbcontactinfo/views/templates/hook/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bce07234_84985741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c9eea91a6a2c6557fea26087337a032b76accc7' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbcontactinfo/views/templates/hook/nav.tpl',
      1 => 1617704756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bce07234_84985741 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dbcontactinfo_nav">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone orders','mod'=>'dbcontactinfo'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
</span>
</div><?php }
}
