<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from 'module:dbhomecategoriesviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bcba2df6_73029051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1a99901d376396a4f6ffec139da9f5dba432ad' => 
    array (
      0 => 'module:dbhomecategoriesviewstemp',
      1 => 1617704756,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bcba2df6_73029051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '53698862360be74bcba02c6_40312176';
?>
<div class="dbhomecategories">
    <p class="h3 title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categorias','mod'=>'dbhomecategories'),$_smarty_tpl ) );?>
</p>
    <ul class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
            <li class="col-md-2 col-xs-6">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="home_cat">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['img'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="141" height="180">
                    <span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<?php }
}
