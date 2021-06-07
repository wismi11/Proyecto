<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from 'module:dbbrandsliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bcd8bea7_94761290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cea7814480eeb36e5b618f84d775ab5d49b398cd' => 
    array (
      0 => 'module:dbbrandsliderviewstemplat',
      1 => 1617704756,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bcd8bea7_94761290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2226272060be74bcd88d69_50119291';
?>
<div class="dbbrandslide mt-3">
    <p class="h3 title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Principales marcas','mod'=>'dbbrandslide'),$_smarty_tpl ) );?>
</p>
    <div id="splide_dbbrandslide" class="splide">
        <div class="splide__track">
            <div class="splide__list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                    <div class="splide__slide">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                            <img src="//<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['img'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" width="125" height="125">
                        </a>
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
            new Splide( '#splide_dbbrandslide', {
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
                }
            } ).mount();
        } );
    <?php echo '</script'; ?>
>
</div><?php }
}
