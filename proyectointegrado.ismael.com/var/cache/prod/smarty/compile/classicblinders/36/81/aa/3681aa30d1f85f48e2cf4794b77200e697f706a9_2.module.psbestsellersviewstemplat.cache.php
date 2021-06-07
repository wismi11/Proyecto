<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from 'module:psbestsellersviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bcca6e39_24983255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:psbestsellersviewstemplat',
      1 => 1617704757,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_60be74bcca6e39_24983255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '147624027260be74bcc9fc22_67813989';
?>

<?php if (count($_smarty_tpl->tpl_vars['products']->value) > 0) {?>
<section class="featured-products clearfix mt-3">
  <p class="h3 products-section-title">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </p>

  <div id="splide_bestseller" class="splide">
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

    <?php echo '<script'; ?>
>
        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '#splide_bestseller', {
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
</section>
<?php }
}
}
