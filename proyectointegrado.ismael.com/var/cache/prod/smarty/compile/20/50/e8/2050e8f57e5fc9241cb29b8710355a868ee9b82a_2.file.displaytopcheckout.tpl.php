<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:48:32
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbcontactinfo/views/templates/hook/displaytopcheckout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be8620a2e7f8_24603844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2050e8f57e5fc9241cb29b8710355a868ee9b82a' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbcontactinfo/views/templates/hook/displaytopcheckout.tpl',
      1 => 1617704756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be8620a2e7f8_24603844 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dbcontactinfo_checkout">
    <div class="content_contactinfo">
        <i class="material-icons">support_agent</i>
        <span class="text_contactinfo">
            <span class="hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone orders','mod'=>'dbcontactinfo'),$_smarty_tpl ) );?>
:</span>
            <span class="phone"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </span>
    </div>
</div><?php }
}
