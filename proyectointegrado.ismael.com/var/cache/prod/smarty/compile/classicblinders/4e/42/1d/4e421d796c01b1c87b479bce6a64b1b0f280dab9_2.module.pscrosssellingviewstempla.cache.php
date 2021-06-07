<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:39:17
  from 'module:pscrosssellingviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be83f52a2490_09016792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e421d796c01b1c87b479bce6a64b1b0f280dab9' => 
    array (
      0 => 'module:pscrosssellingviewstempla',
      1 => 1617704757,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_60be83f52a2490_09016792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '204911174560be83f529f942_16176462';
?>

<section class="featured-products clearfix mt-3">
  <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Productos relacionados','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
  <div id="splide_crossselling" class="splide">
    <div class="splide__track">
      <div class="splide__list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
          <div class="splide__slide">
            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
</section>


<?php echo '<script'; ?>
>
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#splide_crossselling', {
      perPage     : 5,
      pagination: false,
      lazyLoad: 'sequential',
      arrows: true,
      breakpoints: {
        600: {
          perPage: 2,
          padding: {
            right: '2rem',
          },
          arrows: false,
        },
        800: {
          perPage: 2,
          padding: {
            right: '2rem',
          },
          arrows: false,
        },
        1200: {
          perPage: 4,
        }
      },
    } ).mount();
  } );
<?php echo '</script'; ?>
>
<?php }
}
