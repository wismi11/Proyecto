<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:06:26
  from 'module:psfacetedsearchpsfaceteds' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be7c42bb1f39_30502119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:psfacetedsearchpsfaceteds',
      1 => 1617704757,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be7c42bb1f39_30502119 (Smarty_Internal_Template $_smarty_tpl) {
if (Context::getContext()->isMobile() == 1 || Context::getContext()->isTablet() == 1) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']))) {?>

        <div class="modal fade right" id="filters_category" tabindex="-1" role="dialog" aria-labelledby="filters_category_Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title" id="filters_category_Label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

                        <div id="search_filter_controls">
                            <span id="_mobile_search_filters_clear_all"></span>
                            <button class="btn btn-secondary ok" data-dismiss="modal" aria-label="Close">
                                <i class="material-icons">done</i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php }?>

<?php } else { ?>

    <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters']))) {?>
        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']))) {?>
        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

    <?php }?>

<?php }
}
}
