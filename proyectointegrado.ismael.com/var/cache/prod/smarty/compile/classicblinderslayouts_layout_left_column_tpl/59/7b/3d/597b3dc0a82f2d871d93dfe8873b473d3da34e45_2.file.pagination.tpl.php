<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:06:26
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be7c42c5cea7_65877660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '597b3dc0a82f2d871d93dfe8873b473d3da34e45' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/_partials/pagination.tpl',
      1 => 1617704757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be7c42c5cea7_65877660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199117314160be7c42c58502_08159857', 'pagination_summary');
?>


</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_199117314160be7c42c58502_08159857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_199117314160be7c42c58502_08159857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <p class="text__infinitescroll">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Has visto %to% de %total% productos','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

        </p>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['items_shown_to']*100/$_smarty_tpl->tpl_vars['pagination']->value['total_items'], ENT_QUOTES, 'UTF-8');?>
%" aria-valuenow="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pagination']->value['items_shown_to']*100/$_smarty_tpl->tpl_vars['pagination']->value['total_items'], ENT_QUOTES, 'UTF-8');?>
" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <?php if (($_smarty_tpl->tpl_vars['pagination']->value['items_shown_to']*100/$_smarty_tpl->tpl_vars['pagination']->value['total_items']) < 100) {?>
            <div id="btn_inifinitescroll" class="btn btn__primary btn_inifinitescroll" data-pag="2">
                <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cargar más','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
            </div>
        <?php }?>

    <?php
}
}
/* {/block 'pagination_summary'} */
}
