<?php
/* Smarty version 3.1.39, created on 2021-06-07 19:31:22
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be57eae2a015_62907372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1617704757,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be57eae2a015_62907372 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info">
  <div class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <span
        class="open_account"
        data-toggle="modal"
        data-target="#userinfo_modal"
      >
        <i class="material-icons">person</i>
      </span>
    <?php } else { ?>
      <span
        datatext="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value )), ENT_QUOTES, 'UTF-8');?>
"
        class="datatext"
      >
        <i class="material-icons">person</i>
      </span>
    <?php }?>
  </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
<!-- Modal My Account -->
<div class="modal fade right" id="userinfo_modal" tabindex="-1" role="dialog" aria-labelledby="userinfo_modal_Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="userinfo_modal_Label"><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hi %customerName%','sprintf'=>array('%customerName%'=>$_prefixVariable1),'d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal_item">
                    <span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account summary','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
                    <a class="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="material-icons">&#xE8B0;</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <div class="modal_item">
                    <span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
                    <a class="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['history'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="material-icons">widgets</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                    <a class="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['discount'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="material-icons">content_cut</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount coupons','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <div class="modal_item">
                    <span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
                    <a class="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['identity'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="material-icons">account_box</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                    <a class="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'], ENT_QUOTES, 'UTF-8');?>
">
                        <i class="material-icons">location_on</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <a class="close_session" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign off','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a>
            </div>
        </div>
    </div>
</div>
<?php }?><!-- end /var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
