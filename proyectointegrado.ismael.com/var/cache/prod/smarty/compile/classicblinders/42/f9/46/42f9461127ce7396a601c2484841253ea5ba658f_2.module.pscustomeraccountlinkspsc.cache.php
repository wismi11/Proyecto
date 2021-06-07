<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bcf05d30_53837833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1617704757,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bcf05d30_53837833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '148331183960be74bcf00052_50179221';
?>

<div id="block_myaccount_infos" class="col-md-4 links wrapper">
  <p class="myaccount-title hidden-sm-down h3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
        <li>
      <span class="item datatext" datatext="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'] )), ENT_QUOTES, 'UTF-8');?>
">
        <i class="material-icons">&#xE8B0;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </span>
    </li>
    <li>
      <span class="item datatext" datatext="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['history'] )), ENT_QUOTES, 'UTF-8');?>
">
        <i class="material-icons">widgets</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My orders','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </span>
    </li>
    <li>
      <span class="item datatext" datatext="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['discount'] )), ENT_QUOTES, 'UTF-8');?>
">
        <i class="material-icons">content_cut</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount coupons','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </span>
    </li>
    <li>
      <span class="item datatext" datatext="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['identity'] )), ENT_QUOTES, 'UTF-8');?>
">
        <i class="material-icons">account_box</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal information','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </span>
    </li>
    <li>
      <span class="item datatext" datatext="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'base64_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['pages']['addresses'] )), ENT_QUOTES, 'UTF-8');?>
">
        <i class="material-icons">location_on</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Addresses','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

      </span>
    </li>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyAccountBlock'),$_smarty_tpl ) );?>

	</ul>
</div>
<?php }
}
