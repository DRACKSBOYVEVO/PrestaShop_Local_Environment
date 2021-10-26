<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:20
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stadvancedmenu\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21172925836172e35ceea805-13722592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1e61365147dd35eff1a305a9b52a674d25ad2bd' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stadvancedmenu\\views\\templates\\hook\\header.tpl',
      1 => 1633442185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21172925836172e35ceea805-13722592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'advancedmenu_custom_css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35cf1a982_91871553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35cf1a982_91871553')) {function content_6172e35cf1a982_91871553($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['advancedmenu_custom_css']->value)&&$_smarty_tpl->tpl_vars['advancedmenu_custom_css']->value) {?>
<style type="text/css">
<?php echo $_smarty_tpl->tpl_vars['advancedmenu_custom_css']->value;?>

</style>
<?php }?>
<?php }} ?>
