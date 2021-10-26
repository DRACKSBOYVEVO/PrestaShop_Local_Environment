<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:22
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stadvancedmenu\views\templates\hook\stadvancedmenu-category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10950534286172e35eb20a53-27062674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59e4895fd74745ad124dfed1e12cc5c1a5e5f7e3' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu-category.tpl',
      1 => 1633442185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10950534286172e35eb20a53-27062674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menus' => 0,
    'granditem' => 0,
    'ismobilemenu' => 0,
    'm_level' => 0,
    'menu' => 0,
    'adv_menu_title' => 0,
    'nofollow' => 0,
    'new_window' => 0,
    'has_children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35ebb4428_47686533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35ebb4428_47686533')) {function content_6172e35ebb4428_47686533($_smarty_tpl) {?>
<?php if (is_array($_smarty_tpl->tpl_vars['menus']->value)&&count($_smarty_tpl->tpl_vars['menus']->value)) {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['granditem']->value)) {?><?php $_smarty_tpl->tpl_vars['granditem'] = new Smarty_variable(0, null, 0);?><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['ismobilemenu']->value)) {?><span class="opener">&nbsp;</span><?php }?>
	<ul class="<?php if (isset($_smarty_tpl->tpl_vars['ismobilemenu']->value)) {?>mo_advanced_sub_ul mo_<?php }?>advanced_mu_level_<?php echo $_smarty_tpl->tpl_vars['m_level']->value;?>
 p_granditem_<?php if ($_smarty_tpl->tpl_vars['m_level']->value>2) {?><?php echo $_smarty_tpl->tpl_vars['granditem']->value;?>
<?php } else { ?>1<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['has_children'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['menu']->value['children'])&&is_array($_smarty_tpl->tpl_vars['menu']->value['children'])&&count($_smarty_tpl->tpl_vars['menu']->value['children'])), null, 0);?>
		<li class="<?php if (isset($_smarty_tpl->tpl_vars['ismobilemenu']->value)) {?>mo_advanced_sub_li mo_<?php }?>advanced_ml_level_<?php echo $_smarty_tpl->tpl_vars['m_level']->value;?>
 granditem_<?php echo $_smarty_tpl->tpl_vars['granditem']->value;?>
 p_granditem_<?php if ($_smarty_tpl->tpl_vars['m_level']->value>2) {?><?php echo $_smarty_tpl->tpl_vars['granditem']->value;?>
<?php } else { ?>1<?php }?>">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['nofollow']->value) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['new_window']->value) {?> target="_blank"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['ismobilemenu']->value)) {?>mo_advanced_sub_a mo_<?php }?>advanced_ma_level_<?php echo $_smarty_tpl->tpl_vars['m_level']->value;?>
 advanced_ma_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['has_children']->value&&!isset($_smarty_tpl->tpl_vars['ismobilemenu']->value)&&(!isset($_smarty_tpl->tpl_vars['granditem']->value)||!$_smarty_tpl->tpl_vars['granditem']->value)) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }?></a>
		<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>($_smarty_tpl->tpl_vars['m_level']->value+1)), 0);?>

		<?php }?>
		</li>
	<?php } ?>
	</ul>
<?php }?><?php }} ?>
