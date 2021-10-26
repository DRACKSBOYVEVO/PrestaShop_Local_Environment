<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:26
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\themes\transformer\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17164282656172e362544268-29442516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4589fbdfcdc19c1d3b6b6a002ac783c494f18898' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\themes\\transformer\\footer.tpl',
      1 => 1633442183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17164282656172e362544268-29442516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'slide_lr_column' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER_TOP' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTER_SECONDARY' => 0,
    'HOOK_FOOTER_BOTTOM_LEFT' => 0,
    'HOOK_FOOTER_BOTTOM_RIGHT' => 0,
    'sttheme' => 0,
    'page_name' => 0,
    'rightbar_i' => 0,
    'left_column_size' => 0,
    'HOOK_SIDE_BAR' => 0,
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e3625c6947_78346100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e3625c6947_78346100')) {function content_6172e3625c6947_78346100($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>
<?php $_smarty_tpl->tpl_vars['slide_lr_column'] = new Smarty_variable(Configuration::get('STSN_SLIDE_LR_COLUMN'), null, 0);?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="<?php if ($_smarty_tpl->tpl_vars['slide_lr_column']->value) {?> col-xxs-8 col-xs-6<?php } else { ?> col-xs-12<?php }?> col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
					<?php $_smarty_tpl->_capture_stack[0][] = array("displayBottomColumn", null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBottomColumn"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if (isset(Smarty::$_smarty_vars['capture']['displayBottomColumn'])&&trim(Smarty::$_smarty_vars['capture']['displayBottomColumn'])) {?>
						<div id="bottom_row" class="row">
							<div id="bottom_column" class="col-xs-12 col-sm-12"><?php echo Smarty::$_smarty_vars['capture']['displayBottomColumn'];?>
</div>
						</div>
	            	<?php }?>
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayHomeVeryBottom"),$_smarty_tpl);?>

			<div class="main_content_area_footer"><div class="wide_container"></div></div>
			</div><!-- #main_content_area -->
			<!-- Footer -->
			<footer id="footer" class="footer-container">
				<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER_TOP']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_FOOTER_TOP']->value)) {?>
	            <section id="footer-top">
					<div class="wide_container">
			            <div class="container">
			                <div class="row">
			                    <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER_TOP']->value;?>

			                </div>
						</div>
		            </div>
	            </section>
	            <?php }?>
	            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
	            <section id="footer-primary">
					<div class="wide_container">
						<div class="container">
			                <div class="row">
							    <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

			                </div>
						</div>
		            </div>
	            </section>
	            <?php }?>
	            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER_SECONDARY']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_FOOTER_SECONDARY']->value)) {?>
	            <section id="footer-secondary">
					<div class="wide_container">
						<div class="container">
			                <div class="row">
							    <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER_SECONDARY']->value;?>

			                </div>
						</div>
		            </div>
	            </section>
	            <?php }?>

	            <?php $_smarty_tpl->_capture_stack[0][] = array("st_footer_bottom_left", null, null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER_BOTTOM_LEFT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_FOOTER_BOTTOM_LEFT']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER_BOTTOM_LEFT']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBottomLeft'),$_smarty_tpl);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	            <?php $_smarty_tpl->_capture_stack[0][] = array("st_footer_bottom_right", null, null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER_BOTTOM_RIGHT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_FOOTER_BOTTOM_RIGHT']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER_BOTTOM_RIGHT']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBottomRight'),$_smarty_tpl);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

	            <?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['copyright_text'])&&$_smarty_tpl->tpl_vars['sttheme']->value['copyright_text'])||trim(Smarty::$_smarty_vars['capture']['st_footer_bottom_left'])||trim(Smarty::$_smarty_vars['capture']['st_footer_bottom_right'])||(isset($_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'])&&$_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'])||(isset($_smarty_tpl->tpl_vars['sttheme']->value['responsive'])&&$_smarty_tpl->tpl_vars['sttheme']->value['responsive']&&isset($_smarty_tpl->tpl_vars['sttheme']->value['enabled_version_swithing'])&&$_smarty_tpl->tpl_vars['sttheme']->value['enabled_version_swithing'])) {?>
	            <div id="footer_info" class="bottom-footer <?php if (Configuration::get('STSN_F_INFO_CENTER')) {?> fotter_bottom_center <?php }?>">
					<div class="wide_container">
		    			<div class="container">
		                    <div class="row" data-version="<?php echo smarty_modifier_replace(@constant('_PS_VERSION_'),'.','-');?>
<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['theme_version'])) {?>-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['sttheme']->value['theme_version'],'.','-');?>
<?php }?>">
		                        <div class="col-xs-12 col-sm-12 clearfix">  
		                        	<?php if ((isset($_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'])&&$_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'])||trim(Smarty::$_smarty_vars['capture']['st_footer_bottom_right'])) {?> 
			                        <aside id="footer_bottom_right">
			                        	<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'])&&$_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src']) {?>    
				                            <img id="paymants_logos" src="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['footer_img_src'];?>
" alt="<?php echo smartyTranslate(array('s'=>'Payment methods'),$_smarty_tpl);?>
" />
				                        <?php }?>
			                            <?php echo Smarty::$_smarty_vars['capture']['st_footer_bottom_right'];?>
 
			                        </aside>
			                        <?php }?>
			                        <aside id="footer_bottom_left">
			                        <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['copyright_text'])) {?><span id="copyright_text"><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['copyright_text'];?>
</span><?php }?>
	            					<?php echo Smarty::$_smarty_vars['capture']['st_footer_bottom_left'];?>
 
	            					</aside>     
		                        </div>
		                    </div>
		                    <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['responsive'])&&$_smarty_tpl->tpl_vars['sttheme']->value['responsive']&&isset($_smarty_tpl->tpl_vars['sttheme']->value['enabled_version_swithing'])&&$_smarty_tpl->tpl_vars['sttheme']->value['enabled_version_swithing']) {?>
		                    <div id="version_switching" class="row">
		                        <div class="col-xs-12 col-sm-12">
		                            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['version_switching']==0) {?><a href="javascript:;" rel="nofollow" class="version_switching vs_desktop <?php if (!$_smarty_tpl->tpl_vars['sttheme']->value['version_switching']) {?> active <?php }?>" title="<?php echo smartyTranslate(array('s'=>'Switch to Desktop Version'),$_smarty_tpl);?>
"><i class="icon-monitor icon-mar-lr2"></i><?php echo smartyTranslate(array('s'=>'Desktop'),$_smarty_tpl);?>
</a><?php }?>
		                            <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['version_switching']==1) {?><a href="javascript:;" rel="nofollow" class="version_switching vs_mobile <?php if ($_smarty_tpl->tpl_vars['sttheme']->value['version_switching']) {?> active <?php }?>" title="<?php echo smartyTranslate(array('s'=>'Switch to Mobile Version'),$_smarty_tpl);?>
"><i class="icon-mobile icon-mar-lr2"></i><?php echo smartyTranslate(array('s'=>'Mobile'),$_smarty_tpl);?>
</a><?php }?>
		                        </div>
		                    </div>
		                    <?php }?>
		                </div>
		            </div>
	            </div>
	            <?php }?>
			</footer><!-- #footer -->
			<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['boxstyle'])&&$_smarty_tpl->tpl_vars['sttheme']->value['boxstyle']==2) {?></div><?php }?><!-- #page_wrapper -->
		</div><!-- #page -->
  
		<?php $_smarty_tpl->_capture_stack[0][] = array("rightbar_strightbarcart", null, null); ob_start(); ?>
		    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'strightbarcart','caller'=>'strightbarcart'),$_smarty_tpl);?>
 
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array("rightbar_stcompare", null, null); ob_start(); ?>
		    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'stcompare','caller'=>'stcompare'),$_smarty_tpl);?>

		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array("rightbar_productlinknav_prev", null, null); ob_start(); ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'stproductlinknav','nav'=>'prev','caller'=>'stproductlinknav'),$_smarty_tpl);?>

		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array("rightbar_productlinknav_next", null, null); ob_start(); ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'stproductlinknav','nav'=>'next','caller'=>'stproductlinknav'),$_smarty_tpl);?>

		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array("rightbar_bloglinknav_prev", null, null); ob_start(); ?>
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='module-stblog-article') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'stbloglinknav','nav'=>'prev','caller'=>'stbloglinknav'),$_smarty_tpl);?>

		<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array("rightbar_bloglinknav_next", null, null); ob_start(); ?>
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='module-stblog-article') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'stbloglinknav','nav'=>'next','caller'=>'stbloglinknav'),$_smarty_tpl);?>

		<?php }?>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable(0, null, 0);?>
		<?php if (trim(Smarty::$_smarty_vars['capture']['rightbar_stcompare'])) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>
		<?php if (trim(Smarty::$_smarty_vars['capture']['rightbar_productlinknav_prev'])) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>
		<?php if (trim(Smarty::$_smarty_vars['capture']['rightbar_productlinknav_next'])) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>
		<?php if (trim(Smarty::$_smarty_vars['capture']['rightbar_bloglinknav_prev'])) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>
		<?php if (trim(Smarty::$_smarty_vars['capture']['rightbar_bloglinknav_next'])) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['slide_lr_column']->value&&isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&$_smarty_tpl->tpl_vars['left_column_size']->value) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['slide_lr_column']->value&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&$_smarty_tpl->tpl_vars['right_column_size']->value) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>
		<?php if ((!isset($_smarty_tpl->tpl_vars['sttheme']->value['scroll_to_top'])||(isset($_smarty_tpl->tpl_vars['sttheme']->value['scroll_to_top'])&&$_smarty_tpl->tpl_vars['sttheme']->value['scroll_to_top']))) {?><?php $_smarty_tpl->tpl_vars["rightbar_i"] = new Smarty_variable($_smarty_tpl->tpl_vars['rightbar_i']->value+1, null, 0);?><?php }?>

		<div id="rightbar" class="<?php if (!$_smarty_tpl->tpl_vars['rightbar_i']->value) {?> hidden <?php }?>"> 
		    <div id="rightbar_inner" class="clearfix rightbar_<?php echo $_smarty_tpl->tpl_vars['rightbar_i']->value;?>
">
		    <?php echo Smarty::$_smarty_vars['capture']['rightbar_strightbarcart'];?>

		    <?php echo Smarty::$_smarty_vars['capture']['rightbar_stcompare'];?>

		    <?php echo Smarty::$_smarty_vars['capture']['rightbar_productlinknav_prev'];?>

		    <?php echo Smarty::$_smarty_vars['capture']['rightbar_productlinknav_next'];?>

		    <?php echo Smarty::$_smarty_vars['capture']['rightbar_bloglinknav_prev'];?>

		    <?php echo Smarty::$_smarty_vars['capture']['rightbar_bloglinknav_next'];?>

		    <?php if ($_smarty_tpl->tpl_vars['slide_lr_column']->value&&isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
		    <div id="switch_left_column_wrap" class="visible-xs">
		        <a href="javascript:;" id="switch_left_column" data-column="left_column" class="icon_wrap" title="<?php echo smartyTranslate(array('s'=>"Display left column"),$_smarty_tpl);?>
"><i class="icon-right-open-1 icon-0x"></i><span class="icon_text"><?php echo smartyTranslate(array('s'=>"Left"),$_smarty_tpl);?>
</span></a>   
		    </div>
		    <?php }?>
		    <?php if ($_smarty_tpl->tpl_vars['slide_lr_column']->value&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
		    <div id="switch_right_column_wrap" class="visible-xs">
		        <a href="javascript:;" id="switch_right_column" data-column="right_column" class="icon_wrap" title="<?php echo smartyTranslate(array('s'=>"Display right column"),$_smarty_tpl);?>
"><i class="icon-left-open-1 icon-0x"></i><span class="icon_text"><?php echo smartyTranslate(array('s'=>"Right"),$_smarty_tpl);?>
</span></a>   
		    </div>
		    <?php }?>
		    <?php if ((!isset($_smarty_tpl->tpl_vars['sttheme']->value['scroll_to_top'])||(isset($_smarty_tpl->tpl_vars['sttheme']->value['scroll_to_top'])&&$_smarty_tpl->tpl_vars['sttheme']->value['scroll_to_top']))) {?>
		    <div id="to_top_wrap">
		        <div id="to_top"><a href="#top_bar" class="icon_wrap disabled" title="<?php echo smartyTranslate(array('s'=>"Back to top"),$_smarty_tpl);?>
"><i class="icon-up-open-2 icon-0x"></i><span class="icon_text"><?php echo smartyTranslate(array('s'=>"Top"),$_smarty_tpl);?>
</span></a></div>
		    </div>
		    <?php }?>
		    </div>  
		</div><!-- #rightbar -->
		<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAnywhere','mod'=>'stnewsletter','caller'=>'stnewsletter'),$_smarty_tpl);?>

		<?php }?>
		<div class="st-side">
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_SIDE_BAR']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_SIDE_BAR']->value)) {?><?php echo $_smarty_tpl->tpl_vars['HOOK_SIDE_BAR']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySideBar'),$_smarty_tpl);?>
<?php }?>
		</div>
		<div id="st-side-close"><i class="icon-cancel-2 close-st-side"></i></div>
		<div id="st-side-overlay"></div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
    <div id="layer_compare" class="layer_box">
		<div class="layer_inner_box">
			<div class="layer_product clearfix mar_b10">
				<span class="cross" title="<?php echo smartyTranslate(array('s'=>'Close window'),$_smarty_tpl);?>
"></span>
				<div class="product-image-container layer_compare_img">
				</div>
				<div class="layer_product_info">
					<span id="layer_compare_product_title" class="product-name"></span>
				</div>
			</div>
	        <div id="compare_add_success" class="success hidden"><?php echo smartyTranslate(array('s'=>'has been added to compare.'),$_smarty_tpl);?>
</div>
	        <div id="compare_remove_success" class="success hidden"><?php echo smartyTranslate(array('s'=>'has been removed from compare.'),$_smarty_tpl);?>
</div>
			<div class="button-container clearfix">	
				<a class="continue pull-left btn btn-default" href="javascript:;" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>
</a>
            	<a class="pull-right btn btn-default layer_compare_btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
</a>
			</div>
		</div>
	</div> <!-- #layer_compare -->
	<div class="layer_compare_overlay layer_overlay"></div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['custom_js'])&&$_smarty_tpl->tpl_vars['sttheme']->value['custom_js']) {?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['sttheme']->value['custom_js'];?>
"></script>
	<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['tracking_code'])&&$_smarty_tpl->tpl_vars['sttheme']->value['tracking_code']) {?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['tracking_code'];?>
<?php }?>
	</body>
</html><?php }} ?>
