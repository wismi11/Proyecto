<?php
/* Smarty version 3.1.39, created on 2021-06-07 22:48:32
  from '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/checkout/_partials/steps/checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be8620a58c43_21707826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd94c95f7b5f2f1b4443c43facad05844749ddbb8' => 
    array (
      0 => '/var/www/vhosts/pruebas.devblinders.com/proyectointegrado.ismael.com/themes/classicblinders/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1617704757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be8620a58c43_21707826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181079307760be8620a52556_66614948', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_161270930360be8620a58351_84117230 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_181079307760be8620a52556_66614948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_181079307760be8620a52556_66614948',
  ),
  'step_content' => 
  array (
    0 => 'Block_161270930360be8620a58351_84117230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <?php if ($_smarty_tpl->tpl_vars['position']->value > 1) {?>
        <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value-1, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['position']->value == 1 && $_smarty_tpl->tpl_vars['customer']->value['is_logged'] && !$_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hi %firstname% [1]you can now complete your purchase[/1]','d'=>'Shop.Theme.Customeraccount','sprintf'=>array('%firstname%'=>$_smarty_tpl->tpl_vars['customer']->value['firstname'],'%lastname%'=>$_smarty_tpl->tpl_vars['customer']->value['lastname'],'[1]'=>"<span>",'[/1]'=>"</span>")),$_smarty_tpl ) );?>

      <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['position']->value > 1) {?>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

          <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        <?php }?>
      <?php }?>

    </h1>

    <div class="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161270930360be8620a58351_84117230', 'step_content', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
