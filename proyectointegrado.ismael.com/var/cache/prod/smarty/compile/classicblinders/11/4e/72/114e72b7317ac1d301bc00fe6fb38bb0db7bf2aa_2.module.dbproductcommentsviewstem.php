<?php
/* Smarty version 3.1.39, created on 2021-06-07 21:34:20
  from 'module:dbproductcommentsviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60be74bce18847_96832681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '114e72b7317ac1d301bc00fe6fb38bb0db7bf2aa' => 
    array (
      0 => 'module:dbproductcommentsviewstem',
      1 => 1617704756,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60be74bce18847_96832681 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="grade-stars <?php if ($_smarty_tpl->tpl_vars['small']->value == true) {?>small-stars<?php }?>" data-grade="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?>
        <div class="star-content star-empty clearfix">
            <div class="star" style="visibility: hidden;"></div>
            <div class="star" <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 2) {?>style="visibility: hidden;"<?php }?>></div>
            <div class="star" <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 3) {?>style="visibility: hidden;"<?php }?>></div>
            <div class="star" <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 4) {?>style="visibility: hidden;"<?php }?>></div>
            <div class="star" <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 5) {?>style="visibility: hidden;"<?php }?>></div>
        </div>
        <div class="star-content star-full clearfix">
            <div class="star-on"></div>
            <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 2) {?><div class="star-on"></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 3) {?><div class="star-on"></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 4) {?><div class="star-on"></div><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['grade']->value >= 5) {?><div class="star-on"></div><?php }?>
        </div>
    <?php }?>
</div><?php }
}
