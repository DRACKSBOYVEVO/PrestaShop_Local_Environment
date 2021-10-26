<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:22
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stadvancedmenu\views\templates\hook\stadvancedmenu-mobile-tri.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13422048806172e35ec3afd6-22624759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6407d7684f14c8a36ac868a92ccf4c0336e18df' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu-mobile-tri.tpl',
      1 => 1633442185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13422048806172e35ec3afd6-22624759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_icon_with_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35ec8cf76_58330338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35ec8cf76_58330338')) {function content_6172e35ec8cf76_58330338($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['menu_icon_with_text'] = new Smarty_variable(Configuration::get('STSN_MENU_ICON_WITH_TEXT'), null, 0);?>
<a id="stmobileadvancedmenu_tri" class="mobile_bar_tri<?php if ($_smarty_tpl->tpl_vars['menu_icon_with_text']->value&&$_smarty_tpl->tpl_vars['menu_icon_with_text']->value==1) {?> with_text<?php }?>" href="javascript:;" title="<?php echo smartyTranslate(array('s'=>'Menu','mod'=>'stadvancedmenu'),$_smarty_tpl);?>
">
    <i class="icon-menu icon-1x"></i>
    <span class="mobile_bar_tri_text"><?php echo smartyTranslate(array('s'=>"Menu",'mod'=>'stadvancedmenu'),$_smarty_tpl);?>
</span>
</a><?php }} ?>
