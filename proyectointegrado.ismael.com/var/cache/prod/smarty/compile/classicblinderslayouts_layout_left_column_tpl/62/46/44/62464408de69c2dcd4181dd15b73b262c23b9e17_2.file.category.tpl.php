<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:06:26
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be7c42aa69c9_12910561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62464408de69c2dcd4181dd15b73b262c23b9e17' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/catalog/listing/category.tpl',
      1 => 1617704757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_60be7c42aa69c9_12910561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79734228160be7c42aa1378_28234927', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_79734228160be7c42aa1378_28234927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_79734228160be7c42aa1378_28234927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
}
