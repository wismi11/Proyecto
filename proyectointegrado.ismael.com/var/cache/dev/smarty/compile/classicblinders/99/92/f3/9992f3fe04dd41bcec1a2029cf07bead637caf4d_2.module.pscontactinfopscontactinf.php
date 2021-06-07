<?php
/* Smarty version 3.1.39, created on 2021-06-07 19:31:22
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be57eaf2eca6_72221963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1617704756,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be57eaf2eca6_72221963 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/modules/ps_contactinfo/ps_contactinfo.tpl -->
<div class="block-contact col-md-4 links wrapper">
    <div class="title clearfix hidden-md-up" data-target="#footer_contactinfo" data-toggle="collapse">
        <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
    </div>
    <div id="footer_contactinfo" class="collapse">
        <p class="h3 block-contact-title hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

        <div class="content_contactinfo">
            <p>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
">
                    <i class="material-icons">email</i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Form','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

                </a>
            </p>
            <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
                <p>
                    <i class="material-icons">phone</i>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>

                </p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted']) {?>
                <p class="contact_infos_address">
                    <i class="material-icons">location_on</i>
                    <span><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</span>
                </p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
                <p>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                </p>
            <?php }?>
                    </div>

    </div>
</div>
<!-- end /var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/modules/ps_contactinfo/ps_contactinfo.tpl --><?php }
}
