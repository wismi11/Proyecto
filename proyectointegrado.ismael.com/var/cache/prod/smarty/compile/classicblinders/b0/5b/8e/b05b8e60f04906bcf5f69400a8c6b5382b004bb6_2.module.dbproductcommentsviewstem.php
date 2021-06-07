<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from 'module:dbproductcommentsviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bce0e983_78634504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b05b8e60f04906bcf5f69400a8c6b5382b004bb6' => 
    array (
      0 => 'module:dbproductcommentsviewstem',
      1 => 1617704756,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:dbproductcomments/views/templates/hook/_partials/rating.tpl' => 1,
  ),
),false)) {
function content_60be74bce0e983_78634504 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dbproductcomments_nav">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Opiniones verificadas','mod'=>'dbproductcomments'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media_comments']->value, ENT_QUOTES, 'UTF-8');?>
/5</span>
    <?php $_smarty_tpl->_subTemplateRender('module:dbproductcomments/views/templates/hook/_partials/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('grade'=>$_smarty_tpl->tpl_vars['media_comments']->value,'small'=>true), 0, false);
?>
</div><?php }
}
