<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:39:17
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/catalog/_partials/product-discounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be83f51789f7_14072426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11eebeaa2bba7b98eea89d64e421bc48dcc3d6b4' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/catalog/_partials/product-discounts.tpl',
      1 => 1617704757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be83f51789f7_14072426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>
<section class="product-discounts">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_discounts']) {?>
    
    <p class="h6 product-discounts-title"><i class="material-icons">dashboard_customize</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Packs descuento','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
    <div class="product_packs_dto">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['quantity_discounts'], 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'percentage') {?>
          <?php echo smarty_function_math(array('assign'=>"dto",'equation'=>"x + 1",'x'=>$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']),$_smarty_tpl);?>

          <?php echo smarty_function_math(array('assign'=>"unit_price",'equation'=>"x / y",'x'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],'y'=>$_smarty_tpl->tpl_vars['dto']->value),$_smarty_tpl);?>

        <?php } else { ?>
          <?php echo smarty_function_math(array('assign'=>"unit_price",'equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'],'y'=>$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']),$_smarty_tpl);?>

        <?php }?>
        <div class="pack_dto" data-qty="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="qty"><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'unidades','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</strong></span>
          <span class="price"><?php echo htmlspecialchars(Tools::displayPrice($_smarty_tpl->tpl_vars['unit_price']->value), ENT_QUOTES, 'UTF-8');?>
/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'unidad','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }?>
</section>
<?php }
}
