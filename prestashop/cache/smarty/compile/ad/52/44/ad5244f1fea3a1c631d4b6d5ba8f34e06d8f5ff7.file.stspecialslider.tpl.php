<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:24
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stspecialslider\views\templates\hook\stspecialslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8723734936172e3603e8672-92255621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5244f1fea3a1c631d4b6d5ba8f34e06d8f5ff7' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stspecialslider\\views\\templates\\hook\\stspecialslider.tpl',
      1 => 1633442189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8723734936172e3603e8672-92255621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aw_display' => 0,
    'products' => 0,
    'column_slider' => 0,
    'hook_hash' => 0,
    'hide_mob' => 0,
    'countdown_on' => 0,
    'homeverybottom' => 0,
    'display_as_grid' => 0,
    'link' => 0,
    'slider_easing' => 0,
    'slider_slideshow' => 0,
    'slider_s_speed' => 0,
    'slider_a_speed' => 0,
    'slider_pause_on_hover' => 0,
    'slider_loop' => 0,
    'direction_nav' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'slider_move' => 0,
    'has_background_img' => 0,
    'speed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e36044ab83_36825190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e36044ab83_36825190')) {function content_6172e36044ab83_36825190($_smarty_tpl) {?>

<!-- MODULE special slider -->
<?php if ($_smarty_tpl->tpl_vars['aw_display']->value||(isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value)) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("column_slider", null, null); ob_start(); ?><?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>_column<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<div id="special-products_block_center_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="special-products_block_center_container <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?> block<?php if ($_smarty_tpl->tpl_vars['countdown_on']->value) {?> s_countdown_block<?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="wide_container"><div class="container"><?php }?>
<section id="special-products_block_center_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
" class="special-products_block_center<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 products_block section <?php if (isset($_smarty_tpl->tpl_vars['display_as_grid']->value)&&$_smarty_tpl->tpl_vars['display_as_grid']->value) {?> display_as_grid <?php }?>">
	<h4 class="title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Price drops','mod'=>'stspecialslider'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'stspecialslider'),$_smarty_tpl);?>
</a></h4>
    <script type="text/javascript">
    //<![CDATA[
    var special_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
;
    //]]>
    </script>
	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <?php if (!isset($_smarty_tpl->tpl_vars['display_as_grid']->value)||!$_smarty_tpl->tpl_vars['display_as_grid']->value||(isset($_smarty_tpl->tpl_vars['display_as_grid']->value)&&$_smarty_tpl->tpl_vars['display_as_grid']->value&&isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value)) {?>
    <div id="special-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
" class="special-itemslider<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 flexslider">
    	<?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
    	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php }?>
	</div>
    
    <script type="text/javascript">
    //<![CDATA[
    
    jQuery(function($) {
        special_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 = {
    		easing: "<?php echo $_smarty_tpl->tpl_vars['slider_easing']->value;?>
",
            useCSS: false,
    		slideshow: <?php echo $_smarty_tpl->tpl_vars['slider_slideshow']->value;?>
,
            slideshowSpeed: <?php echo $_smarty_tpl->tpl_vars['slider_s_speed']->value;?>
,
    		animationSpeed: <?php echo $_smarty_tpl->tpl_vars['slider_a_speed']->value;?>
,
    		pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['slider_pause_on_hover']->value;?>
,
            direction: "horizontal",
            animation: "slide",
            animationLoop: <?php echo $_smarty_tpl->tpl_vars['slider_loop']->value;?>
,
    		controlNav: false,
    		controlsContainer: "#special-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>.nav_left_right<?php } else { ?>.nav_top_right<?php }?>",
    		itemWidth: 280,
            <?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
            minItems: getFlexSliderSize({'lg':1,'md':1,'sm':1,'xs':1,'xxs':1}),
            maxItems: getFlexSliderSize({'lg':1,'md':1,'sm':1,'xs':1,'xxs':1}),
            <?php } else { ?>
            minItems: getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
}),
            maxItems: getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
}),
            <?php }?>
    		move: <?php echo $_smarty_tpl->tpl_vars['slider_move']->value;?>
,
            prevText: '<i class="icon-left-open-3"></i>',
            nextText: '<i class="icon-right-open-3"></i>',
            productSlider:true,
            allowOneSlide:false
        };
        $('#special-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 .sliderwrap').flexslider(special_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
);

        var special_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
;
        $(window).resize(function(){
            clearTimeout(special_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
);
            var rand_s = parseInt(Math.random()*200 + 300);
            special_flexslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 = setTimeout(function() {
                <?php if (isset($_smarty_tpl->tpl_vars['column_slider']->value)&&$_smarty_tpl->tpl_vars['column_slider']->value) {?>
                var flexSliderSize = getFlexSliderSize({'lg':1,'md':1,'sm':1,'xs':1,'xxs':1});
                <?php } else { ?>
                var flexSliderSize = getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
});
                <?php }?>
                var flexslide_object = $('#special-itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
<?php echo Smarty::$_smarty_vars['capture']['column_slider'];?>
 .sliderwrap').data('flexslider');
                if(flexSliderSize && flexslide_object != null )
                    flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
        	}, rand_s);
        });
    });
     
    //]]>
    </script>
    <?php } elseif ($_smarty_tpl->tpl_vars['display_as_grid']->value==2) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list-simple.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'for_f'=>'special','id'=>'stspecial_grid'), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'class'=>'stspecial_grid','for_f'=>'special','id'=>'stspecial_grid'), 0);?>

    <?php }?>
	<?php } else { ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No Special products','mod'=>'stspecialslider'),$_smarty_tpl);?>
</p>
	<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div></div><?php }?>
</div>
<?php if (!Smarty::$_smarty_vars['capture']['column_slider']&&$_smarty_tpl->tpl_vars['has_background_img']->value&&$_smarty_tpl->tpl_vars['speed']->value) {?>
<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    $('#special-products_block_center_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
').parallax("50%", <?php echo floatval($_smarty_tpl->tpl_vars['speed']->value);?>
);
});
 
//]]>
</script>
<?php }?>
<?php }?>
<!-- /MODULE special slider  --><?php }} ?>
