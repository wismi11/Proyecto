<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:23
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/diccionario/views/templates/front/paginacion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bf854161_39428589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22c09795275ee3283d7b987d5e5f409c7fb7cee' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/modules/diccionario/views/templates/front/paginacion.tpl',
      1 => 1623094313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bf854161_39428589 (Smarty_Internal_Template $_smarty_tpl) {
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

<style type="text/css">
body {
    background-color:#f6f6f6;
}

a {
    color: #404040;
    text-decoration: none;
    background-color: transparent;
}
.list-group-item {
    z-index: 2;
    color: black;
    width: auto;
}
.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: rgb(255 113 0 / 43%);
    border-color: rgb(255 113 0 / 43%);
    width: auto;
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
.list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: .25rem;
    border-bottom-left-radius: .25rem;
    width: auto;
}
</style>


<?php if (count($_smarty_tpl->tpl_vars['alphabet']->value)) {?>
    <div class="list-group">
        <ul class="pagination">
            <?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alphabet']->value, 'char');
$_smarty_tpl->tpl_vars['char']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['char']->value == $_smarty_tpl->tpl_vars['current']->value) {?>
                        <li class="active list-group-item list-group-item-action"><a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
                    <?php } else { ?>
                        <li class="list-group-item list-group-item-action"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('diccionario','diccipage'), ENT_QUOTES, 'UTF-8');?>
?k=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alphabet']->value, 'char');
$_smarty_tpl->tpl_vars['char']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['char']->value) {
$_smarty_tpl->tpl_vars['char']->do_else = false;
?>
                    <li class="list-group-item list-group-item-action"><a href="#k_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['char']->value, ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </ul>
    </div>
<?php }
}
}
