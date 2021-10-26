<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:22
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stadvancedmenu\views\templates\hook\stadvancedmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1370543876172e35e72ee21-47320278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a1b0e7c4c6a54fb0a9ba225510089b419981a3' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu.tpl',
      1 => 1633442186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1370543876172e35e72ee21-47320278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stmenu' => 0,
    'header_bottom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35e76f863_30365037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35e76f863_30365037')) {function content_6172e35e76f863_30365037($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['stmenu']->value)&&is_array($_smarty_tpl->tpl_vars['stmenu']->value)&&count($_smarty_tpl->tpl_vars['stmenu']->value)) {?>
<!-- Menu -->
<?php if (isset($_smarty_tpl->tpl_vars['header_bottom']->value)&&$_smarty_tpl->tpl_vars['header_bottom']->value) {?>
<div id="st_advanced_menu_container" class="animated fast">
	<div class="container">
<?php }?>
		<nav id="st_advanced_menu_wrap" role="navigation">
	    	<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-ul.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</nav>
<?php if (isset($_smarty_tpl->tpl_vars['header_bottom']->value)&&$_smarty_tpl->tpl_vars['header_bottom']->value) {?>
	</div>
</div>
<?php }?>
<!--/ Menu -->
<?php }?><?php }} ?>
