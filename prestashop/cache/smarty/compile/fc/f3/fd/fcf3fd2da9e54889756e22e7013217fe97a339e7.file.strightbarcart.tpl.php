<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:26
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\strightbarcart\views\templates\hook\strightbarcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17440335126172e362739d91-34690413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcf3fd2da9e54889756e22e7013217fe97a339e7' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\strightbarcart\\views\\templates\\hook\\strightbarcart.tpl',
      1 => 1633442188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17440335126172e362739d91-34690413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_process' => 0,
    'link' => 0,
    'cart_qties' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e362825731_34622636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e362825731_34622636')) {function content_6172e362825731_34622636($_smarty_tpl) {?>
<!-- /MODULE Rightbar cart -->
<div id="rightbar_cart" class="rightbar_wrap">
    <a id="rightbar-shopping_cart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" class="rightbar_tri icon_wrap" title="<?php echo smartyTranslate(array('s'=>'View my shopping cart','mod'=>'strightbarcart'),$_smarty_tpl);?>
">
        <i class="icon-basket icon_btn icon-0x"></i>
        <span class="icon_text"><?php echo smartyTranslate(array('s'=>'Cart','mod'=>'strightbarcart'),$_smarty_tpl);?>
</span>
        <span class="ajax_cart_quantity amount_circle <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0) {?> simple_hidden <?php }?><?php if ($_smarty_tpl->tpl_vars['cart_qties']->value>9) {?> dozens <?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span>
    </a>
</div>
<!-- /MODULE Rightbar cart --><?php }} ?>
