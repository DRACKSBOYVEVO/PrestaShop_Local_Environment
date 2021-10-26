<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:22
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stadvancedmenu\views\templates\hook\stadvancedmenu-ul.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32285276172e35e78d8e8-62953108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33b6ad8e4b5eec9e386531bae6d921d35568d696' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu-ul.tpl',
      1 => 1633442185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32285276172e35e78d8e8-62953108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stvertical' => 0,
    'responsive_max' => 0,
    'mm' => 0,
    'adv_menu_title' => 0,
    'stmenu' => 0,
    'iscolumnmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35e81cfc7_26509639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35e81cfc7_26509639')) {function content_6172e35e81cfc7_26509639($_smarty_tpl) {?><ul class="st_advanced_menu clearfix advanced_mu_level_0">
	<?php if (isset($_smarty_tpl->tpl_vars['stvertical']->value)&&count($_smarty_tpl->tpl_vars['stvertical']->value)) {?>
		<?php $_smarty_tpl->tpl_vars['responsive_max'] = new Smarty_variable(Configuration::get('STSN_RESPONSIVE_MAX'), null, 0);?>
		<li id="st_advanced_menu_0" class="advanced_ml_level_0 <?php if (Configuration::get('STSN_ADV_MENU_VER_OPEN')) {?>menu_ver_open_<?php if ($_smarty_tpl->tpl_vars['responsive_max']->value==1) {?>lg<?php } else { ?>md<?php }?><?php }?>">
			<a id="st_advanced_ma_0" href="javascript:;" class="advanced_ma_level_0 is_parent" title="<?php echo smartyTranslate(array('s'=>'Categories','mod'=>'stadvancedmenu'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-menu"></i><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'stmegamenu'),$_smarty_tpl);?>
</a>
			<ul class="stadvancedmenu_sub stadvancedmenu_vertical col-md-3">
				<?php  $_smarty_tpl->tpl_vars['mm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stvertical']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mm']->key => $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->_loop = true;
?>
					<li id="st_advanced_menu_<?php echo $_smarty_tpl->tpl_vars['mm']->value['id_st_advanced_menu'];?>
" class="advanced_mv_level_1"><a id="st_advanced_ma<?php echo $_smarty_tpl->tpl_vars['mm']->value['id_st_advanced_menu'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>javascript:;<?php }?>" class="advanced_mv_item"<?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['new_window']) {?> target="_blank"<?php }?>><?php if ($_smarty_tpl->tpl_vars['mm']->value['icon_class']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['mm']->value['icon_class'];?>
"></i><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['mm']->value['column'])&&count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?><i class="icon-right-dir-2"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['mm']->value['cate_label'];?>
</span><?php }?></a>
						<?php if (isset($_smarty_tpl->tpl_vars['mm']->value['column'])&&count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?>
							<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-sub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_mega_menu_vertical'=>1), 0);?>

						<?php }?>
					</li>
				<?php } ?>
			</ul>
		</li>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['mm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mm']->key => $_smarty_tpl->tpl_vars['mm']->value) {
$_smarty_tpl->tpl_vars['mm']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['mm']->value['hide_on_mobile']==2) {?><?php continue 1?><?php }?>
		<li id="st_advanced_menu_<?php echo $_smarty_tpl->tpl_vars['mm']->value['id_st_advanced_menu'];?>
" class="advanced_ml_level_0 m_alignment_<?php echo $_smarty_tpl->tpl_vars['mm']->value['alignment'];?>
">
			<a id="st_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['mm']->value['id_st_advanced_menu'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['mm']->value['m_link']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_link'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>javascript:;<?php }?>" class="advanced_ma_level_0<?php if (isset($_smarty_tpl->tpl_vars['mm']->value['column'])&&count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?> is_parent<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['m_icon']) {?> ma_icon<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['new_window']) {?> target="_blank"<?php }?>><?php if ($_smarty_tpl->tpl_vars['mm']->value['m_icon']) {?><?php echo $_smarty_tpl->tpl_vars['mm']->value['m_icon'];?>
<?php } else { ?><?php if ($_smarty_tpl->tpl_vars['mm']->value['icon_class']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['mm']->value['icon_class'];?>
"></i><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mm']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['mm']->value['column'])&&count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?><?php if (isset($_smarty_tpl->tpl_vars['iscolumnmenu']->value)&&$_smarty_tpl->tpl_vars['iscolumnmenu']->value) {?><i class="icon-right-dir-2"></i><?php } else { ?><i class="icon-down-dir-2"></i><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['mm']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['mm']->value['cate_label'];?>
</span><?php }?></a>
			<?php if (isset($_smarty_tpl->tpl_vars['mm']->value['column'])&&count($_smarty_tpl->tpl_vars['mm']->value['column'])) {?>
				<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-sub.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
		</li>
	<?php } ?>
</ul><?php }} ?>
