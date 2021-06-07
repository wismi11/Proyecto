<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbcontactinfo/views/templates/hook/displaytop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bce2eb27_12594802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8070d1e18a556c73ccafd893af6498f9d181353' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/dbcontactinfo/views/templates/hook/displaytop.tpl',
      1 => 1617704756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bce2eb27_12594802 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dbcontactinfo_top hidden-sm-down">
    <?php if ($_smarty_tpl->tpl_vars['ofuscador']->value == 1) {?>
        <span class="link_contact datatext" datatext="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['contact'] )), ENT_QUOTES, 'UTF-8');?>
">
    <?php } else { ?>
        <a class="link_contact datatext" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
        <i class="material-icons">contact_support</i>
    <?php if ($_smarty_tpl->tpl_vars['ofuscador']->value == 1) {?>
        </span>
    <?php } else { ?>
        </a>
    <?php }?>
</div><?php }
}
