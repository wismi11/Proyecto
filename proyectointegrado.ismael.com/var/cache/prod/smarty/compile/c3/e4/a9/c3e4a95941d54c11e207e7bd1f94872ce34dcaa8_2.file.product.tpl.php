<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:39:17
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbfreeshipping/views/templates/hook/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be83f51d6874_11643750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3e4a95941d54c11e207e7bd1f94872ce34dcaa8' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbfreeshipping/views/templates/hook/product.tpl',
      1 => 1617704756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be83f51d6874_11643750 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['is_free']->value) {?>
    <p class="dbfreeshipping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ya tienes el','mod'=>'dbfreeshipping'),$_smarty_tpl ) );?>
 <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'envío gratuito','mod'=>'dbfreeshipping'),$_smarty_tpl ) );?>
</strong></p>
<?php } else { ?>
    <p class="dbfreeshipping">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Te quedan','mod'=>'dbfreeshipping'),$_smarty_tpl ) );?>

        <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['remains']->value, ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'para el envío gratis','mod'=>'dbfreeshipping'),$_smarty_tpl ) );?>

    </p>
<?php }
}
}
