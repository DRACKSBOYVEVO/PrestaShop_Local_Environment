<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:25
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\themes\transformer\product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6940068926172e36143be16-21718408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1156a1603e197371ef3a768056430375547af64' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\themes\\transformer\\product-list.tpl',
      1 => 1633442184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6940068926172e36143be16-21718408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'st_columns_nbr' => 0,
    'products' => 0,
    'display_sd' => 0,
    'show_short_desc_on_grid' => 0,
    'for_f' => 0,
    'for_w' => 0,
    'nbLi' => 0,
    'id' => 0,
    'class' => 0,
    'totModuloDesktop' => 0,
    'totModulo' => 0,
    'totModuloTablet' => 0,
    'totModuloMobile' => 0,
    'totModuloPortrait' => 0,
    'product' => 0,
    'link' => 0,
    'pro_img_hover_scale' => 0,
    'pro_image' => 0,
    'new_sticker' => 0,
    'sale_sticker' => 0,
    'PS_CATALOG_MODE' => 0,
    'restricted_country_mode' => 0,
    'discount_percentage' => 0,
    'countdown_active' => 0,
    'countdown_v_alignment' => 0,
    'countdown_style' => 0,
    'sold_out_style' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'use_view_more_instead' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'st_display_add_to_cart' => 0,
    'fly_i' => 0,
    'flyout_comparison' => 0,
    'comparator_max_item' => 0,
    'flyout_wishlist' => 0,
    'flyout_quickview' => 0,
    'quick_view' => 0,
    'length_of_product_name' => 0,
    'pro_list_display_brand_name' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
    'st_yotpo_sart' => 0,
    'st_yotpoAppkey' => 0,
    'list_display_sd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e3618454b7_46349417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e3618454b7_46349417')) {function content_6172e3618454b7_46349417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\tools\\smarty\\plugins\\modifier.date_format.php';
?>
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='category'||$_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'||$_smarty_tpl->tpl_vars['page_name']->value=='best-sales'||$_smarty_tpl->tpl_vars['page_name']->value=='manufacturer'||$_smarty_tpl->tpl_vars['page_name']->value=='supplier'||$_smarty_tpl->tpl_vars['page_name']->value=='new-products'||$_smarty_tpl->tpl_vars['page_name']->value=='search') {?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)||isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['st_columns_nbr'] = new Smarty_variable(1, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)) {?><?php $_smarty_tpl->tpl_vars['st_columns_nbr'] = new Smarty_variable($_smarty_tpl->tpl_vars['st_columns_nbr']->value+1, null, 0);?><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)) {?><?php $_smarty_tpl->tpl_vars['st_columns_nbr'] = new Smarty_variable($_smarty_tpl->tpl_vars['st_columns_nbr']->value+1, null, 0);?><?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>'setColumnsNbr','columns_nbr'=>$_smarty_tpl->tpl_vars['st_columns_nbr']->value,'page_name'=>$_smarty_tpl->tpl_vars['page_name']->value,'mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("st_columns_nbr", null, null); ob_start(); ?><?php echo $_smarty_tpl->tpl_vars['st_columns_nbr']->value;?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("home_default_width", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getWidthSize'][0][0]->getWidth(array('type'=>'home_default'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("home_default_height", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getHeightSize'][0][0]->getHeight(array('type'=>'home_default'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->tpl_vars['list_display_sd'] = new Smarty_variable(0, null, 0);?>
	<?php $_smarty_tpl->tpl_vars['show_short_desc_on_grid'] = new Smarty_variable(Configuration::get('STSN_SHOW_SHORT_DESC_ON_GRID'), null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['display_sd']->value)&&$_smarty_tpl->tpl_vars['display_sd']->value) {?><?php $_smarty_tpl->tpl_vars['list_display_sd'] = new Smarty_variable($_smarty_tpl->tpl_vars['display_sd']->value, null, 0);?><?php } elseif (!isset($_smarty_tpl->tpl_vars['display_sd']->value)&&$_smarty_tpl->tpl_vars['show_short_desc_on_grid']->value) {?><?php $_smarty_tpl->tpl_vars['list_display_sd'] = new Smarty_variable($_smarty_tpl->tpl_vars['show_short_desc_on_grid']->value, null, 0);?><?php }?>
	

	<?php $_smarty_tpl->tpl_vars['for_w'] = new Smarty_variable('category', null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['for_f']->value)&&$_smarty_tpl->tpl_vars['for_f']->value) {?>
		<?php $_smarty_tpl->tpl_vars['for_w'] = new Smarty_variable($_smarty_tpl->tpl_vars['for_f']->value, null, 0);?>
	<?php }?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("display_color_list", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['for_w']->value!='category'||!Configuration::get('STSN_DISPLAY_COLOR_LIST')) {?> hidden <?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLineDesktop", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>'getProductsPerRow','for_w'=>$_smarty_tpl->tpl_vars['for_w']->value,'devices'=>'lg','mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLine", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>'getProductsPerRow','for_w'=>$_smarty_tpl->tpl_vars['for_w']->value,'devices'=>'md','mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLineTablet", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>'getProductsPerRow','for_w'=>$_smarty_tpl->tpl_vars['for_w']->value,'devices'=>'sm','mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLineMobile", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>'getProductsPerRow','for_w'=>$_smarty_tpl->tpl_vars['for_w']->value,'devices'=>'xs','mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("nbItemsPerLinePortrait", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>'getProductsPerRow','for_w'=>$_smarty_tpl->tpl_vars['for_w']->value,'devices'=>'xxs','mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	

	<?php $_smarty_tpl->tpl_vars['nbLi'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineDesktop",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineDesktop'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop'],'assign'=>'nbLinesDesktop'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLine'],'assign'=>'nbLines'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet'],'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineMobile",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineMobile'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile'],'assign'=>'nbLinesMobile'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLinePortrait",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLinePortrait'=>Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait'],'assign'=>'nbLinesPortrait'),$_smarty_tpl);?>


	<?php $_smarty_tpl->_capture_stack[0][] = array("isInstalledWishlist", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"isInstalledWishlist",'mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->tpl_vars['length_of_product_name'] = new Smarty_variable(Configuration::get('STSN_LENGTH_OF_PRODUCT_NAME'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['discount_percentage'] = new Smarty_variable(Configuration::get('STSN_DISCOUNT_PERCENTAGE'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sold_out_style'] = new Smarty_variable(Configuration::get('STSN_SOLD_OUT'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['st_yotpo_sart'] = new Smarty_variable(Configuration::get('STSN_YOTPO_SART'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['st_yotpoAppkey'] = new Smarty_variable(Configuration::get('yotpo_app_key'), null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("st_yotpoDomain", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"getYotpoDomain",'mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("st_yotpoLanguage", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"getYotpoLanguage",'mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->tpl_vars['new_sticker'] = new Smarty_variable(Configuration::get('STSN_NEW_STYLE'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sale_sticker'] = new Smarty_variable(Configuration::get('STSN_SALE_STYLE'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['pro_list_display_brand_name'] = new Smarty_variable(Configuration::get('STSN_PRO_LIST_DISPLAY_BRAND_NAME'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['st_display_add_to_cart'] = new Smarty_variable(Configuration::get('STSN_DISPLAY_ADD_TO_CART'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['use_view_more_instead'] = new Smarty_variable(Configuration::get('STSN_USE_VIEW_MORE_INSTEAD'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['flyout_wishlist'] = new Smarty_variable(Configuration::get('STSN_FLYOUT_WISHLIST'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['flyout_quickview'] = new Smarty_variable(Configuration::get('STSN_FLYOUT_QUICKVIEW'), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['flyout_comparison'] = new Smarty_variable(Configuration::get('STSN_FLYOUT_COMPARISON'), null, 0);?>  
	<?php $_smarty_tpl->tpl_vars['flyout_buttons'] = new Smarty_variable(Configuration::get('STSN_FLYOUT_BUTTONS'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['countdown_active'] = new Smarty_variable(Configuration::get('ST_COUNTDOWN_ACTIVE'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['countdown_style'] = new Smarty_variable(Configuration::get('ST_COUNTDOWN_STYLE'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['countdown_v_alignment'] = new Smarty_variable(Configuration::get('ST_COUNTDOWN_V_ALIGNMENT'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['countdown_title_aw_display'] = new Smarty_variable(Configuration::get('ST_COUNTDOWN_TITLE_AW_DISPLAY'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['pro_img_hover_scale'] = new Smarty_variable(Configuration::get('STSN_PRO_IMG_HOVER_SCALE'), null, 0);?>

	<!-- Products list -->
	<ul<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php }?> class="product_list grid row<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>" data-classnames="col-lg-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop']),'.','-');?>
 col-md-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLine']),'.','-');?>
 col-sm-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet']),'.','-');?>
 col-xs-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile']),'.','-');?>
 col-xxs-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait']),'.','-');?>
" data-default-view="<?php if ($_smarty_tpl->tpl_vars['for_w']->value=='category') {?><?php if (Configuration::get('STSN_PRODUCT_VIEW')=='list_view') {?> list <?php } else { ?> grid <?php }?><?php }?>">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['total'] = $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['index']++;
?>
		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop'],'assign'=>'totModuloDesktop'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLine'],'assign'=>'totModulo'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet'],'assign'=>'totModuloTablet'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile'],'assign'=>'totModuloMobile'),$_smarty_tpl);?>

		<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total'],'perLine'=>Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait'],'assign'=>'totModuloPortrait'),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['totModuloDesktop']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloDesktop'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModulo']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModulo'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLine'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloTablet'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloMobile'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile'], null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['totModuloPortrait']->value==0) {?><?php $_smarty_tpl->tpl_vars['totModuloPortrait'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait'], null, 0);?><?php }?>
		<li class="ajax_block_product col-lg-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop']),'.','-');?>
 col-md-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLine']),'.','-');?>
 col-sm-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet']),'.','-');?>
 col-xs-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile']),'.','-');?>
 col-xxs-<?php echo smarty_modifier_replace((12/Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait']),'.','-');?>

		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop']==0) {?> last-item-of-desktop-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop']==1) {?> first-item-of-desktop-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModuloDesktop']->value)) {?> last-desktop-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']<Smarty::$_smarty_vars['capture']['nbItemsPerLineDesktop']) {?> first-desktop-line<?php }?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLine']==0) {?> last-in-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLine']==1) {?> first-in-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']<Smarty::$_smarty_vars['capture']['nbItemsPerLine']) {?> first-line<?php }?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet']==0) {?> last-item-of-tablet-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet']==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?> last-tablet-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']<Smarty::$_smarty_vars['capture']['nbItemsPerLineTablet']) {?> first-tablet-line<?php }?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile']==0) {?> last-item-of-mobile-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile']==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']<Smarty::$_smarty_vars['capture']['nbItemsPerLineMobile']) {?> first-mobile-line<?php }?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait']==0) {?> last-item-of-portrait-line<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']%Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait']==1) {?> first-item-of-portrait-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['iteration']>($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['total']-$_smarty_tpl->tpl_vars['totModuloPortrait']->value)) {?> last-portrait-line<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['index']<Smarty::$_smarty_vars['capture']['nbItemsPerLinePortrait']) {?> first-portrait-line<?php }?>">
			<div class="product-container" itemscope itemtype="https://schema.org/Product">
            	<?php $_smarty_tpl->tpl_vars['pro_image'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), null, 0);?>
            	<?php $_smarty_tpl->_capture_stack[0][] = array("pro_count_down", null, null); ob_start(); ?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            	<div class="pro_outer_box">
				<div class="pro_first_box <?php if (Configuration::get('STSN_FLYOUT_BUTTONS')) {?> hover_fly_static<?php }?> ">
					<a class="product_img_link<?php if ($_smarty_tpl->tpl_vars['pro_img_hover_scale']->value) {?> pro_img_hover_scale<?php }?>"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
						<img class="replace-2x img-responsive front-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pro_image']->value, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" width="<?php echo Smarty::$_smarty_vars['capture']['home_default_width'];?>
" height="<?php echo Smarty::$_smarty_vars['capture']['home_default_height'];?>
" itemprop="image" />
						<?php if ($_smarty_tpl->tpl_vars['for_w']->value!='hometab') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>'getHoverImage','id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'product_link_rewrite'=>$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],'home_default_height'=>Smarty::$_smarty_vars['capture']['home_default_height'],'home_default_width'=>Smarty::$_smarty_vars['capture']['home_default_width'],'product_name'=>$_smarty_tpl->tpl_vars['product']->value['name'],'mod'=>'sthoverimage','caller'=>'sthoverimage'),$_smarty_tpl);?>
<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['new_sticker']->value!=2&&isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?><span class="new"><i><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</i></span><?php }?><?php if ($_smarty_tpl->tpl_vars['sale_sticker']->value!=2&&isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><span class="on_sale"><i><?php echo smartyTranslate(array('s'=>'Sale'),$_smarty_tpl);?>
</i></span><?php }?>						
	                    <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>0&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
		                            <?php if ($_smarty_tpl->tpl_vars['discount_percentage']->value==2) {?>
			                            <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
			                            	<span class="sale_percentage_sticker img-circle">
										        <?php echo round(($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100),2);?>
%<br /><?php echo smartyTranslate(array('s'=>'Off'),$_smarty_tpl);?>

											</span>
			                            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount'&&floatval($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])!=0) {?>
			                            	<span class="sale_percentage_sticker img-circle">
			                            		<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
<br /><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']-floatval($_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl);?>

			                            	</span>
			                            <?php }?>
		                            <?php }?>
		                            <?php if ($_smarty_tpl->tpl_vars['countdown_active']->value) {?>
			                            <?php $_smarty_tpl->_capture_stack[0][] = array("pro_count_down", null, null); ob_start(); ?>
						                    <?php if ((smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<$_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'])) {?>
						                    	<?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value!=2) {?>
						                    		<div class="countdown_wrap countdown_timer countdown_style_<?php echo (($tmp = @$_smarty_tpl->tpl_vars['countdown_style']->value)===null||$tmp==='' ? 0 : $tmp);?>
 <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value) {?> v_middle<?php }?> <?php if ($_smarty_tpl->tpl_vars['for_w']->value=='category') {?> c_countdown_timer<?php } else { ?> s_countdown_timer<?php }?>" data-countdown="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'%Y/%m/%d %H:%M:%S');?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"></div>
					                    		<?php } else { ?>
								                    <div class="countdown_outer_box">
									                    <div class="countdown_box">
									                    	<i class="icon-clock"></i><span class="countdown_pro c_countdown_timer" data-countdown="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to'],'%Y/%m/%d %H:%M:%S');?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"></span>
									                    </div>
								                    </div>
							                    <?php }?>
						                    <?php } elseif (($_smarty_tpl->tpl_vars['product']->value['specific_prices']['to']=='0000-00-00 00:00:00')&&($_smarty_tpl->tpl_vars['product']->value['specific_prices']['from']=='0000-00-00 00:00:00')&&$_smarty_tpl->tpl_vars['pro_img_hover_scale']->value) {?>
						                    	<?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value!=2) {?>
							                    	<div class="countdown_wrap <?php if ($_smarty_tpl->tpl_vars['for_w']->value=='category') {?> c_countdown_perm<?php } else { ?> s_countdown_perm<?php }?> <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value) {?> v_middle<?php }?>" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
							                    		<div class="countdown_title"><?php echo smartyTranslate(array('s'=>'Limited special offer'),$_smarty_tpl);?>
</div>
							                    	</div>
							                    <?php } else { ?>
								                    <div class="countdown_outer_box countdown_pro_perm" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
								                    	<div class="countdown_box">
								                    		<i class="icon-clock"></i><span><?php echo smartyTranslate(array('s'=>'Limited special offer'),$_smarty_tpl);?>
</span>
								                    	</div>
							                    	</div>
							                    <?php }?>
						                    <?php }?>
						                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					                <?php }?>
		                        <?php }?>
	                        <?php }?>
	                    <?php }?>

	                    <?php if (($_smarty_tpl->tpl_vars['for_w']->value=='category'&&$_smarty_tpl->tpl_vars['sold_out_style']->value>0&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
							<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
								<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
									<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php } else { ?><span class="sold_out"><?php echo smartyTranslate(array('s'=>'- Sold out -'),$_smarty_tpl);?>
</span><?php }?><?php }?>
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
								<?php } else { ?>
									<span class="sold_out"><?php echo smartyTranslate(array('s'=>'- Sold out -'),$_smarty_tpl);?>
</span>
								<?php }?>
							<?php }?>
						<?php }?>
					</a>
					<?php $_smarty_tpl->tpl_vars["fly_i"] = new Smarty_variable(0, null, 0);?>
	                <?php $_smarty_tpl->_capture_stack[0][] = array("pro_a_cart", null, null); ob_start(); ?>
	                	<?php if (isset($_smarty_tpl->tpl_vars['use_view_more_instead']->value)&&$_smarty_tpl->tpl_vars['use_view_more_instead']->value==1) {?>
	                		 <a class="view_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View more'),$_smarty_tpl);?>
" rel="nofollow"><div><i class="icon-eye-2 icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'View more'),$_smarty_tpl);?>
</span></div></a>
	                	<?php } else { ?>
							<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
		    					<?php if ((!isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])||!$_smarty_tpl->tpl_vars['product']->value['customization_required'])&&($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
		        					<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?>add=1&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'])&&$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {?>&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
									<a class="ajax_add_to_cart_button btn btn-default btn_primary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,Smarty::$_smarty_vars['capture']['default'],false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product-attribute="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-minimal_quantity="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']>=1) {?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
<?php }?>"><div><i class="icon-basket icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span></div></a>
									<?php if (isset($_smarty_tpl->tpl_vars['use_view_more_instead']->value)&&$_smarty_tpl->tpl_vars['use_view_more_instead']->value==2) {?>
		                                <a class="view_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View more'),$_smarty_tpl);?>
" rel="nofollow"><div><i class="icon-eye-2 icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'View more'),$_smarty_tpl);?>
</span></div></a>
		                                <?php if (!$_smarty_tpl->tpl_vars['st_display_add_to_cart']->value) {?><?php $_smarty_tpl->tpl_vars["fly_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['fly_i']->value+1, null, 0);?><?php }?>
		                            <?php }?>	
		    					<?php } else { ?>
		                            <a class="view_button btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
" rel="nofollow"><div><i class="icon-eye-2 icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
</span></div></a>
		    					<?php }?>
	    					<?php }?>
	    				<?php }?>
	                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                <?php $_smarty_tpl->_capture_stack[0][] = array("pro_a_compare", null, null); ob_start(); ?>
                		<?php if (!$_smarty_tpl->tpl_vars['flyout_comparison']->value&&isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
							<a class="add_to_compare" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" rel="nofollow" data-product-cover="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'thumb_default'), ENT_QUOTES, 'UTF-8', true);?>
" data-product-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to compare'),$_smarty_tpl);?>
"><div><i class="icon-ajust icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'Add to compare'),$_smarty_tpl);?>
</span></div></a>
	        			<?php }?> 
	                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                <?php $_smarty_tpl->_capture_stack[0][] = array("pro_a_wishlist", null, null); ob_start(); ?>
	                    <?php if (!$_smarty_tpl->tpl_vars['flyout_wishlist']->value&&Smarty::$_smarty_vars['capture']['isInstalledWishlist']) {?>
	                    	<a class="addToWishlist wishlistProd_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" href="#" rel="nofollow" data-pid="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', false, 1, this); return false;"><div><i class="icon-heart icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'Add to Wishlist'),$_smarty_tpl);?>
</span></div></a>
	                    <?php }?>
	                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                <?php $_smarty_tpl->_capture_stack[0][] = array("pro_quick_view", null, null); ob_start(); ?>
	                    <?php if (!$_smarty_tpl->tpl_vars['flyout_quickview']->value&&isset($_smarty_tpl->tpl_vars['quick_view']->value)&&$_smarty_tpl->tpl_vars['quick_view']->value) {?>
	                        <a class="quick-view" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
"><div><i class="icon-search-1 icon-0x icon_btn icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
</span></div></a>
	                    <?php }?>
	                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                	<?php if (!$_smarty_tpl->tpl_vars['st_display_add_to_cart']->value&&trim(Smarty::$_smarty_vars['capture']['pro_a_cart'])) {?><?php $_smarty_tpl->tpl_vars["fly_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['fly_i']->value+1, null, 0);?><?php }?>
	                <?php if (trim(Smarty::$_smarty_vars['capture']['pro_a_compare'])) {?><?php $_smarty_tpl->tpl_vars["fly_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['fly_i']->value+1, null, 0);?><?php }?>
	                <?php if (trim(Smarty::$_smarty_vars['capture']['pro_quick_view'])) {?><?php $_smarty_tpl->tpl_vars["fly_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['fly_i']->value+1, null, 0);?><?php }?>
	                <?php if (trim(Smarty::$_smarty_vars['capture']['pro_a_wishlist'])) {?><?php $_smarty_tpl->tpl_vars["fly_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['fly_i']->value+1, null, 0);?><?php }?>
	                <div class="hover_fly fly_<?php echo $_smarty_tpl->tpl_vars['fly_i']->value;?>
 clearfix">
	                    <?php if (!$_smarty_tpl->tpl_vars['st_display_add_to_cart']->value) {?><?php echo Smarty::$_smarty_vars['capture']['pro_a_cart'];?>
<?php }?>
	                    <?php echo Smarty::$_smarty_vars['capture']['pro_quick_view'];?>

	                    <?php echo Smarty::$_smarty_vars['capture']['pro_a_compare'];?>

	                    <?php echo Smarty::$_smarty_vars['capture']['pro_a_wishlist'];?>

	                </div>
	                <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value!=2&&isset(Smarty::$_smarty_vars['capture']['pro_count_down'])) {?><?php echo Smarty::$_smarty_vars['capture']['pro_count_down'];?>
<?php }?>
				</div>
	        	<div class="pro_second_box">
	        		<h5 itemprop="name" class="s_title_block <?php if ($_smarty_tpl->tpl_vars['length_of_product_name']->value) {?> nohidden<?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?><a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url" ><?php if ($_smarty_tpl->tpl_vars['length_of_product_name']->value==2) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php } elseif ($_smarty_tpl->tpl_vars['length_of_product_name']->value==1) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),75,'...');?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'),35,'...');?>
<?php }?></a></h5>
	        		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

	        		<?php if ($_smarty_tpl->tpl_vars['pro_list_display_brand_name']->value&&$_smarty_tpl->tpl_vars['product']->value['id_manufacturer']) {?><p class="pro_list_manufacturer"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'],60,'...'), ENT_QUOTES, 'UTF-8', true);?>
</p><?php }?>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
					<div class="price_container" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>
<span itemprop="price" class="price product-price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>
						<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
	                    <?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>0&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
	                    	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

	                        <span class="old-price product-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span>
	                        <?php if ($_smarty_tpl->tpl_vars['discount_percentage']->value==1) {?>
		                        <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?>
		                        	<span class="sale_percentage">
									    <i class="icon-tag"></i>-<?php echo round(($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*100),2);?>
%
									</span>
		                        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['specific_prices']&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount'&&floatval($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])!=0) {?>
		                        	<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
		                        	<span class="sale_percentage">
									    <i class="icon-tag"></i>-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']-floatval($_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl);?>

									</span>
		                        	<?php } else { ?>
		                        	<span class="sale_percentage">
									    <i class="icon-tag"></i>-<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']-floatval($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl);?>

									</span>
		                        	<?php }?>
		                        <?php }?>
	                        <?php }?>
	                    <?php }?>
	                    <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
	                    	<span class="unvisible">
							<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
								<link itemprop="availability" href="https://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later'])&&$_smarty_tpl->tpl_vars['product']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now'])&&$_smarty_tpl->tpl_vars['product']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
							<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
								<link itemprop="availability" href="https://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>

							<?php } else { ?>
								<link itemprop="availability" href="https://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>

							<?php }?>
							</span>
						<?php }?>
	                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'after_price'),$_smarty_tpl);?>

	                    <?php }?>
					</div>
	                <?php if ($_smarty_tpl->tpl_vars['countdown_v_alignment']->value==2&&isset(Smarty::$_smarty_vars['capture']['pro_count_down'])) {?><?php echo Smarty::$_smarty_vars['capture']['pro_count_down'];?>
<?php }?>
				    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']) {?><div class="mar_b6 product_online_only_flags"><span class="online_only sm_lable"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span></div><?php }?>
					<?php }?>					
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
						<div class="mar_b6 product_discount_flags"><span class="discount sm_lable"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span></div>
					<?php }?>
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
							<div class="availability product_stock_info mar_b6">
								<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
									<span class="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0&&isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])&&!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>out-of-stock<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?>available-dif<?php } else { ?>available-now<?php }?> hidden sm_lable">
										<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later'])&&$_smarty_tpl->tpl_vars['product']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['sold_out_style']->value==0) {?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now'])&&$_smarty_tpl->tpl_vars['product']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
									</span>
								<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
									<span class="available-dif sm_lable">
										<?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>

									</span>
								<?php } else { ?>
									<span class="out-of-stock sm_lable<?php if ($_smarty_tpl->tpl_vars['sold_out_style']->value>0) {?> hidden<?php }?>">
										<?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>

									</span>
								<?php }?>
							</div>
						<?php }?>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['color_list'])) {?>
						<div class="color-list-container <?php echo Smarty::$_smarty_vars['capture']['display_color_list'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['color_list'];?>
</div>
					<?php }?>
	                <?php if ($_smarty_tpl->tpl_vars['for_w']->value!='hometab') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"getProductRatingAverage",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php }?>
	                <?php if (isset($_smarty_tpl->tpl_vars['st_yotpo_sart']->value)&&$_smarty_tpl->tpl_vars['st_yotpo_sart']->value&&isset($_smarty_tpl->tpl_vars['st_yotpoAppkey']->value)&&$_smarty_tpl->tpl_vars['st_yotpoAppkey']->value&&Smarty::$_smarty_vars['capture']['st_yotpoDomain']&&Smarty::$_smarty_vars['capture']['st_yotpoLanguage']) {?>
		                <div class="yotpo bottomLine"
						data-appkey="<?php echo $_smarty_tpl->tpl_vars['st_yotpoAppkey']->value;?>
"
						data-domain="<?php echo Smarty::$_smarty_vars['capture']['st_yotpoDomain'];?>
"
						data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"
						data-product-models=""
						data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
						data-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"
						data-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pro_image']->value, ENT_QUOTES, 'UTF-8', true);?>
"
						data-description="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>
"
						data-lang="<?php echo htmlspecialchars(Smarty::$_smarty_vars['capture']['st_yotpoLanguage'], ENT_QUOTES, 'UTF-8', true);?>
"
						data-bread-crumbs="">
						</div>
					<?php }?>
	                <?php if ($_smarty_tpl->tpl_vars['for_w']->value=='category') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','function'=>"getProductAttributes",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'mod'=>'stthemeeditor','caller'=>'stthemeeditor'),$_smarty_tpl);?>
<?php }?>
	                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_virtual'])&&!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
	                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl);?>

	                <div class="product-desc <?php if ($_smarty_tpl->tpl_vars['list_display_sd']->value) {?> display_sd<?php }?> " itemprop="description"><?php if ($_smarty_tpl->tpl_vars['list_display_sd']->value==2) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>
<?php }?></div>
	                <div class="act_box <?php if ($_smarty_tpl->tpl_vars['st_display_add_to_cart']->value==1) {?> display_when_hover <?php } elseif ($_smarty_tpl->tpl_vars['st_display_add_to_cart']->value==2) {?> display_normal <?php }?>">
	                    <?php if ($_smarty_tpl->tpl_vars['st_display_add_to_cart']->value!=3) {?><?php echo Smarty::$_smarty_vars['capture']['pro_a_cart'];?>
<?php }?>
	                    <div class="act_box_inner">
	                    <?php echo Smarty::$_smarty_vars['capture']['pro_a_compare'];?>

	                    <?php echo Smarty::$_smarty_vars['capture']['pro_a_wishlist'];?>

	                    <?php if (trim(Smarty::$_smarty_vars['capture']['pro_quick_view'])) {?>
	                        <?php echo Smarty::$_smarty_vars['capture']['pro_quick_view'];?>

	                    <?php }?>
	                    </div>
	                </div>
	                <!-- 2016 if enable this hook, an extra Wishlist button would show up -->
	                <?php if (0&&$_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
						<div class="functional-buttons clearfix">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

						</div>
					<?php }?>
	        	</div>
	        	</div>
	        </div>
		</li>
	<?php } ?>
	</ul>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
