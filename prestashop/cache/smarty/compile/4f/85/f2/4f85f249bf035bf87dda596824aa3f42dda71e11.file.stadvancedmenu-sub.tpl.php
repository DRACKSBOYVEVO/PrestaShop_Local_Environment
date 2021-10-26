<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:22
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stadvancedmenu\views\templates\hook\stadvancedmenu-sub.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9597518606172e35e89efe6-64500915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f85f249bf035bf87dda596824aa3f42dda71e11' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stadvancedmenu\\views\\templates\\hook\\stadvancedmenu-sub.tpl',
      1 => 1633442185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9597518606172e35e89efe6-64500915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mm' => 0,
    'is_mega_menu_vertical' => 0,
    'column' => 0,
    't_width_tpl' => 0,
    'block' => 0,
    'adv_menu_title' => 0,
    'product' => 0,
    'menu' => 0,
    'granditem' => 0,
    'link' => 0,
    'homeSize' => 0,
    'new_sticker' => 0,
    'sale_sticker' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'brand' => 0,
    'img_manu_dir' => 0,
    'manufacturerSize' => 0,
    'has_children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35e9d1161_77526820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35e9d1161_77526820')) {function content_6172e35e9d1161_77526820($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?><?php if ($_smarty_tpl->tpl_vars['mm']->value['is_mega']) {?>
<div class="<?php if (!isset($_smarty_tpl->tpl_vars['is_mega_menu_vertical']->value)) {?>stadvancedmenu_sub<?php } else { ?>stadvancedmenu_vs<?php }?> advanced_style_wide col-md-<?php echo smarty_modifier_replace(($_smarty_tpl->tpl_vars['mm']->value['width']*10/10),'.','-');?>
">
	<div class="row advanced_m_column_row">
	<?php $_smarty_tpl->tpl_vars['t_width_tpl'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mm']->value['column']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile']==2) {?><?php continue 1?><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['column']->value['children'])&&count($_smarty_tpl->tpl_vars['column']->value['children'])) {?>
		<?php $_smarty_tpl->tpl_vars["t_width_tpl"] = new Smarty_variable($_smarty_tpl->tpl_vars['t_width_tpl']->value+$_smarty_tpl->tpl_vars['column']->value['width'], null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['t_width_tpl']->value>$_smarty_tpl->tpl_vars['mm']->value['t_width']) {?>
			<?php $_smarty_tpl->tpl_vars["t_width_tpl"] = new Smarty_variable($_smarty_tpl->tpl_vars['column']->value['width'], null, 0);?>
			</div><div class="row advanced_m_column_row">
		<?php }?>
		<div id="st_advanced_menu_column_<?php echo $_smarty_tpl->tpl_vars['column']->value['id_st_advanced_column'];?>
" class="col-md-<?php echo smarty_modifier_replace(($_smarty_tpl->tpl_vars['column']->value['width']*10/10),'.','-');?>
">
			<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile']==2) {?><?php continue 1?><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['block']->value['item_t']==1) {?>
					<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype']==2&&isset($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
						<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
			                    <?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_cate'=>$_smarty_tpl->tpl_vars['block']->value['children'],'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0);?>

							<?php }?>
							<ul class="advanced_mu_level_1">
								<li class="advanced_ml_level_1">
									<a id="st_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
									<?php if (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&is_array($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
										<ul class="advanced_mu_level_2">
										<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
										<li class="advanced_ml_level_2"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_2 advanced_ma_item"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
										<?php } ?>
										</ul>	
									<?php }?>
								</li>
							</ul>	
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype']==0&&isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
						<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
">
						<div class="row">
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
 $_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
?>
							<div class="col-md-<?php echo smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-');?>
">
								<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
				                    <?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_cate'=>$_smarty_tpl->tpl_vars['menu']->value,'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0);?>

								<?php }?>
								<ul class="advanced_mu_level_1">
									<li class="advanced_ml_level_1">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
										<?php if (isset($_smarty_tpl->tpl_vars['menu']->value['children'])&&is_array($_smarty_tpl->tpl_vars['menu']->value['children'])&&count($_smarty_tpl->tpl_vars['menu']->value['children'])) {?>
											<?php $_smarty_tpl->tpl_vars['granditem'] = new Smarty_variable(0, null, 0);?>
											<?php if (isset($_smarty_tpl->tpl_vars['block']->value['granditem'])&&$_smarty_tpl->tpl_vars['block']->value['granditem']) {?><?php $_smarty_tpl->tpl_vars['granditem'] = new Smarty_variable(1, null, 0);?><?php }?>
											<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>2), 0);?>

										<?php }?>
									</li>
								</ul>	
							</div>
							<?php if ($_smarty_tpl->tpl_vars['menu']->iteration%$_smarty_tpl->tpl_vars['block']->value['items_md']==0&&!$_smarty_tpl->tpl_vars['menu']->last) {?>
							</div><div class="row">
							<?php }?>
						<?php } ?>
						</div>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype']==1||$_smarty_tpl->tpl_vars['block']->value['subtype']==3) {?>
						<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
">
							<?php if ($_smarty_tpl->tpl_vars['block']->value['show_cate_img']) {?>
			                    <?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-cate-img.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('menu_cate'=>$_smarty_tpl->tpl_vars['block']->value['children'],'nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window']), 0);?>

							<?php }?>
							<ul class="advanced_mu_level_1">
								<li class="advanced_ml_level_1">
									<a id="st_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
									<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype']==1&&isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&is_array($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
										<?php $_smarty_tpl->tpl_vars['granditem'] = new Smarty_variable(0, null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['block']->value['granditem'])&&$_smarty_tpl->tpl_vars['block']->value['granditem']) {?><?php $_smarty_tpl->tpl_vars['granditem'] = new Smarty_variable(1, null, 0);?><?php }?>
										<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'granditem'=>$_smarty_tpl->tpl_vars['granditem']->value,'m_level'=>2), 0);?>

									<?php }?>
								</li>
							</ul>	
						</div>
					<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==2&&isset($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
					<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" class="row">
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<div class="col-md-<?php echo smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-');?>
">
							<div class="pro_outer_box">
							<div class="pro_first_box">
								<a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->category), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> itemprop="url"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> >
									<img class="replace-2x img-responsive menu_pro_img" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->legend)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->legend)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
									<?php if ($_smarty_tpl->tpl_vars['new_sticker']->value!=2&&$_smarty_tpl->tpl_vars['product']->value->is_new) {?><span class="new"><i><?php echo smartyTranslate(array('s'=>'New','mod'=>'stadvancedmenu'),$_smarty_tpl);?>
</i></span><?php }?>
									<?php if ($_smarty_tpl->tpl_vars['sale_sticker']->value!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&isset($_smarty_tpl->tpl_vars['product']->value->on_sale)&&$_smarty_tpl->tpl_vars['product']->value->on_sale&&isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price) {?><span class="on_sale"><i><?php echo smartyTranslate(array('s'=>'Sale','mod'=>'stadvancedmenu'),$_smarty_tpl);?>
</i></span><?php }?>
								</a>
							</div>
							<div class="pro_second_box">
								<p class="s_title_block">
								<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value->id,$_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->category), ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> itemprop="url"<?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?> >
									<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,45,'...'), ENT_QUOTES, 'UTF-8', true);?>

								</a>
								</p>
								<div class="price_container" >
									<?php if (isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><span class="price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->displayed_price),$_smarty_tpl);?>
</span><?php if (isset($_smarty_tpl->tpl_vars['product']->value->specificPrice)&&$_smarty_tpl->tpl_vars['product']->value->specificPrice&&isset($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']>0&&isset($_smarty_tpl->tpl_vars['product']->value->price_without_reduction)&&$_smarty_tpl->tpl_vars['product']->value->price_without_reduction) {?><span class="old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->price_without_reduction),$_smarty_tpl);?>
</span><?php }?>
				                    <?php }?>
								</div>
							</div>
							</div>
						</div>
					<?php } ?>
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==3&&isset($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['block']->value['subtype'])&&$_smarty_tpl->tpl_vars['block']->value['subtype']) {?>
						<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
">
						<div class="row">
						<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['brand']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['brand']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['brand']->iteration++;
 $_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
?>
							<div class="col-md-<?php echo smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-');?>
">
								<ul class="advanced_mu_level_1">
									<li class="advanced_ml_level_1">
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
									</li>
								</ul>	
							</div>
							<?php if ($_smarty_tpl->tpl_vars['brand']->iteration%$_smarty_tpl->tpl_vars['block']->value['items_md']==0&&!$_smarty_tpl->tpl_vars['brand']->last) {?>
							</div><div class="row">
							<?php }?>
						<?php } ?>
						</div>
						</div>
					<?php } else { ?>
						<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" class="row">
						<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['brand']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['brand']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['brand']->iteration++;
 $_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
?>
							<div class="col-md-<?php echo smarty_modifier_replace(((12/$_smarty_tpl->tpl_vars['block']->value['items_md'])*10/10),'.','-');?>
">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="st_advanced_menu_brand">
				                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-manufacturer_default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
" class="replace-2x img-responsive" />
				                </a>
							</div>
						<?php } ?>
						</div>
					<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==4) {?>
					<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
">
						<ul class="advanced_mu_level_1">
							<li class="advanced_ml_level_1">
								<a id="st_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>javascript:;<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item <?php if (!$_smarty_tpl->tpl_vars['block']->value['m_link']) {?> advanced_ma_span<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['block']->value['icon_class'];?>
"></i><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
								<?php if (isset($_smarty_tpl->tpl_vars['block']->value['children'])&&is_array($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
									<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
 $_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
?>
										<?php if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile']==2) {?><?php continue 1?><?php }?>
										<ul class="advanced_mu_level_2 granditem">
										<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2), 0);?>

										</ul>
									<?php } ?>
								<?php }?>
							</li>
						</ul>	
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==5&&$_smarty_tpl->tpl_vars['block']->value['html']) {?>
					<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" class="style_content">
						<?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>

					</div>
				<?php }?>
			<?php } ?>
		</div>
		<?php }?>
	<?php } ?>
	</div>
</div>
<?php } else { ?>
	<ul id="st_advanced_menu_multi_level_<?php echo $_smarty_tpl->tpl_vars['mm']->value['id_st_advanced_menu'];?>
" class="<?php if (!isset($_smarty_tpl->tpl_vars['is_mega_menu_vertical']->value)) {?>stadvancedmenu_sub<?php } else { ?>stadvancedmenu_vs<?php }?> stadvancedmenu_multi_level">
	<?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mm']->value['column']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['column']->value['hide_on_mobile']==2) {?><?php continue 1?><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['column']->value['children'])&&count($_smarty_tpl->tpl_vars['column']->value['children'])) {?>
			<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['block']->value['hide_on_mobile']==2) {?><?php continue 1?><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['block']->value['item_t']==1) {?>
					<?php if ($_smarty_tpl->tpl_vars['block']->value['subtype']==2&&isset($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&is_array($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<li class="advanced_ml_level_1"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></li>
							<?php } ?>
						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype']==0&&isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])) {?>
						<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
 $_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
?> 
							<li class="advanced_ml_level_1">
								<?php $_smarty_tpl->tpl_vars['has_children'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['menu']->value['children'])&&is_array($_smarty_tpl->tpl_vars['menu']->value['children'])&&count($_smarty_tpl->tpl_vars['menu']->value['children'])), null, 0);?>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }?></a>
								<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
									<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value['children'],'m_level'=>2), 0);?>

								<?php }?>
							</li>
						<?php } ?>
					<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['subtype']==1||$_smarty_tpl->tpl_vars['block']->value['subtype']==3) {?>
						<li class="advanced_ml_level_1">
							<?php $_smarty_tpl->tpl_vars['has_children'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['block']->value['children']['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children']['children'])), null, 0);?>
							<a id="st_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['link'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['children']['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
							<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
								<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['block']->value['children']['children'],'m_level'=>2), 0);?>

							<?php }?>
						</li>
					<?php }?>
				<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==3&&isset($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])) {?>
					<li class="advanced_ml_level_1">
					<?php if (isset($_smarty_tpl->tpl_vars['block']->value['subtype'])&&$_smarty_tpl->tpl_vars['block']->value['subtype']) {?>
						<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['brand']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['brand']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['brand']->iteration++;
 $_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						<?php } ?>
					<?php } else { ?>
						<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['brand']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['brand']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['brand']->iteration++;
 $_smarty_tpl->tpl_vars['brand']->last = $_smarty_tpl->tpl_vars['brand']->iteration === $_smarty_tpl->tpl_vars['brand']->total;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']);?>
" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="st_advanced_menu_brand">
			                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-manufacturer_default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
" class="replace-2x img-responsive" />
			                </a>
						<?php } ?>
					<?php }?>
					</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==4) {?>
					<li class="advanced_ml_level_1">
						<?php $_smarty_tpl->tpl_vars['has_children'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['block']->value['children'])&&is_array($_smarty_tpl->tpl_vars['block']->value['children'])&&count($_smarty_tpl->tpl_vars['block']->value['children'])), null, 0);?>
						<a id="st_advanced_ma_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" href="<?php if ($_smarty_tpl->tpl_vars['block']->value['m_link']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_link'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>javascript:;<?php }?>" <?php if (!$_smarty_tpl->tpl_vars['adv_menu_title']->value) {?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_title'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['new_window']) {?> target="_blank"<?php }?>  class="advanced_ma_level_1 advanced_ma_item <?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?> has_children <?php }?><?php if (!$_smarty_tpl->tpl_vars['block']->value['m_link']) {?> advanced_ma_span<?php }?>"><?php if ($_smarty_tpl->tpl_vars['block']->value['icon_class']) {?><i class="<?php echo $_smarty_tpl->tpl_vars['block']->value['icon_class'];?>
"></i><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?><span class="is_parent_icon"><b class="is_parent_icon_h"></b><b class="is_parent_icon_v"></b></span><?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['cate_label']) {?><span class="cate_label"><?php echo $_smarty_tpl->tpl_vars['block']->value['cate_label'];?>
</span><?php }?></a>
						<?php if ($_smarty_tpl->tpl_vars['has_children']->value) {?>
							<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
 $_smarty_tpl->tpl_vars['menu']->last = $_smarty_tpl->tpl_vars['menu']->iteration === $_smarty_tpl->tpl_vars['menu']->total;
?>
								<?php if ($_smarty_tpl->tpl_vars['menu']->value['hide_on_mobile']==2) {?><?php continue 1?><?php }?>
								<ul class="advanced_mu_level_2">
								<?php echo $_smarty_tpl->getSubTemplate ("./stadvancedmenu-link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('nofollow'=>$_smarty_tpl->tpl_vars['block']->value['nofollow'],'new_window'=>$_smarty_tpl->tpl_vars['block']->value['new_window'],'menus'=>$_smarty_tpl->tpl_vars['menu']->value,'m_level'=>2), 0);?>

								</ul>
							<?php } ?>
						<?php }?>
					</li>
				<?php } elseif ($_smarty_tpl->tpl_vars['block']->value['item_t']==5&&$_smarty_tpl->tpl_vars['block']->value['html']) {?>
					<li class="advanced_ml_level_1">
						<div id="st_advanced_menu_block_<?php echo $_smarty_tpl->tpl_vars['block']->value['id_st_advanced_menu'];?>
" class="style_content">
							<?php echo $_smarty_tpl->tpl_vars['block']->value['html'];?>

						</div>
					</li>
				<?php } else { ?>
					
				<?php }?>
			<?php } ?>
		<?php }?>
	<?php } ?>
	</ul>
<?php }?><?php }} ?>
