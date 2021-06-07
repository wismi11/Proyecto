<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:23
  from 'module:diccionarioviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bf8471a5_09890110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3817c6dbb472893a862f0d3f34c034b1da08ff9a' => 
    array (
      0 => 'module:diccionarioviewstemplates',
      1 => 1623094313,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bf8471a5_09890110 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>

<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h1>

<style type="text/css">
h1 {
    color: #404040;
    text-align: left;
    margin-top: 47px !important;
    margin-left: 56px;
    font-size: 50px;
}
.list-group {
    display: -ms-flexbox;
    display: block;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 50px;
    padding-right: 60px;
    margin-bottom: 0;
}
</style>

<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pagination_templates']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
    <div class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filtered_list']->value, 'glossary');
$_smarty_tpl->tpl_vars['glossary']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['glossary']->value) {
$_smarty_tpl->tpl_vars['glossary']->do_else = false;
?>
            <div class="list-group-item">
                <p class="list-group-item-heading"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['glossary']->value['name'], ENT_QUOTES, 'UTF-8');?>
</b></p>

                <p class="list-group-item-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['glossary']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
