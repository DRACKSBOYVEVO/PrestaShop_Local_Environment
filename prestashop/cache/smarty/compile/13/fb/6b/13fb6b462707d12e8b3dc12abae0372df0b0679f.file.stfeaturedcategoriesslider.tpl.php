<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:24
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stfeaturedcategoriesslider\views\templates\hook\stfeaturedcategoriesslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6460756406172e360aee7b0-33888813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13fb6b462707d12e8b3dc12abae0372df0b0679f' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stfeaturedcategoriesslider\\views\\templates\\hook\\stfeaturedcategoriesslider.tpl',
      1 => 1633442187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6460756406172e360aee7b0-33888813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aw_display' => 0,
    'fc_slider' => 0,
    'hook_hash' => 0,
    'hide_mob' => 0,
    'homeverybottom' => 0,
    'display_as_grid' => 0,
    'direction_nav' => 0,
    'category' => 0,
    'link' => 0,
    'homeSize' => 0,
    'img_cat_dir' => 0,
    'lang_iso' => 0,
    'slider_easing' => 0,
    'slider_slideshow' => 0,
    'slider_s_speed' => 0,
    'slider_a_speed' => 0,
    'slider_pause_on_hover' => 0,
    'slider_loop' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'slider_move' => 0,
    'mediumSize' => 0,
    'has_background_img' => 0,
    'speed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e360b877f0_59785622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e360b877f0_59785622')) {function content_6172e360b877f0_59785622($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>
<!-- Featured categories -->
<?php if ($_smarty_tpl->tpl_vars['aw_display']->value||(isset($_smarty_tpl->tpl_vars['fc_slider']->value)&&$_smarty_tpl->tpl_vars['fc_slider']->value)) {?>
<div id="fc_slider_block_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="fc_slider_block_container block <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="wide_container"><div class="container"><?php }?>
<section id="fc_slider_block_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="fc_slider_block block products_block section <?php if ($_smarty_tpl->tpl_vars['hide_mob']->value) {?> hidden-xs <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['display_as_grid']->value)&&$_smarty_tpl->tpl_vars['display_as_grid']->value) {?> display_as_grid <?php }?>">
    <h3 class="title_block"><span><?php echo smartyTranslate(array('s'=>'Featured categories','mod'=>'stfeaturedcategoriesslider'),$_smarty_tpl);?>
</span></h3>
    <script type="text/javascript">
    //<![CDATA[
    var fc_slider_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
;
    //]]>
    </script>
    <?php if (isset($_smarty_tpl->tpl_vars['fc_slider']->value)&&is_array($_smarty_tpl->tpl_vars['fc_slider']->value)&&count($_smarty_tpl->tpl_vars['fc_slider']->value)) {?>
        <?php if (!isset($_smarty_tpl->tpl_vars['display_as_grid']->value)||!$_smarty_tpl->tpl_vars['display_as_grid']->value) {?>
        <div id="fc_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="fc_itemslider flexslider">
            <div class="<?php if (isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>nav_left_right<?php } else { ?>nav_top_right<?php }?>"></div>
            <div class="sliderwrap products_slider">
                <ul class="slides">
                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fc_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['category']->iteration=0;
 $_smarty_tpl->tpl_vars['category']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->iteration++;
 $_smarty_tpl->tpl_vars['category']->index++;
 $_smarty_tpl->tpl_vars['category']->first = $_smarty_tpl->tpl_vars['category']->index === 0;
 $_smarty_tpl->tpl_vars['category']->last = $_smarty_tpl->tpl_vars['category']->iteration === $_smarty_tpl->tpl_vars['category']->total;
?>
                    <li class="ajax_block_product <?php if ($_smarty_tpl->tpl_vars['category']->first) {?>first_item<?php } elseif ($_smarty_tpl->tpl_vars['category']->last) {?>last_item<?php } else { ?>item<?php }?>">
                        <div class="pro_outer_box">
                            <div class="pro_first_box">
                                <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->tpl_vars['category']->value['id_image']) {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value['link_rewrite'],$_smarty_tpl->tpl_vars['category']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
" class="replace-2x img-responsive" />
                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-home_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
" class="replace-2x img-responsive" />
                                <?php }?>
                                </a>
                            </div>
                            <div class="pro_second_box">
                                <p class="s_title_block"><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['category']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></p>
                            </div>
                        </div>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
        //<![CDATA[
        
        jQuery(function($) {
            fc_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
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
                controlsContainer: "#fc_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['direction_nav']->value)&&$_smarty_tpl->tpl_vars['direction_nav']->value) {?>.nav_left_right<?php } else { ?>.nav_top_right<?php }?>",
                itemWidth: 260,
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
                move: <?php echo $_smarty_tpl->tpl_vars['slider_move']->value;?>
,
                prevText: '<i class="icon-left-open-3"></i>',
                nextText: '<i class="icon-right-open-3"></i>',
                productSlider:true,
                allowOneSlide:false
            };
            $('#fc_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 .sliderwrap').flexslider(fc_itemslider_options<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
);
            
            var fc_itemslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
;
            $(window).resize(function(){
                clearTimeout(fc_itemslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
);
                var rand_s = parseInt(Math.random()*200 + 300);
                fc_itemslider_rs<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 = setTimeout(function() {
                    var flexSliderSize = getFlexSliderSize({'lg':<?php echo $_smarty_tpl->tpl_vars['pro_per_lg']->value;?>
,'md':<?php echo $_smarty_tpl->tpl_vars['pro_per_md']->value;?>
,'sm':<?php echo $_smarty_tpl->tpl_vars['pro_per_sm']->value;?>
,'xs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xs']->value;?>
,'xxs':<?php echo $_smarty_tpl->tpl_vars['pro_per_xxs']->value;?>
});
                    var flexslide_object = $('#fc_itemslider-<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
 .sliderwrap').data('flexslider');
                    if(flexSliderSize && flexslide_object != null )
                        flexslide_object.setVars({'minItems': flexSliderSize, 'maxItems': flexSliderSize});
                }, rand_s);
            });
        });
         
        //]]>
        </script>
        <?php } else { ?>
            <ul class="fc_slider_list row">
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fc_slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['category']->iteration=0;
 $_smarty_tpl->tpl_vars['category']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['category']->iteration++;
 $_smarty_tpl->tpl_vars['category']->index++;
 $_smarty_tpl->tpl_vars['category']->first = $_smarty_tpl->tpl_vars['category']->index === 0;
 $_smarty_tpl->tpl_vars['category']->last = $_smarty_tpl->tpl_vars['category']->iteration === $_smarty_tpl->tpl_vars['category']->total;
?>
                <li class="col-lg-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-');?>
 col-md-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-');?>
 col-sm-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-');?>
 col-xs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-');?>
 col-xxs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxs']->value),'.','-');?>
  <?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_lg']->value==1) {?> first-item-of-desktop-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_md']->value==1) {?> first-item-of-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_sm']->value==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_xs']->value==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->tpl_vars['category']->iteration%$_smarty_tpl->tpl_vars['pro_per_xxs']->value==1) {?> first-item-of-portrait-line<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['display_as_grid']->value==2) {?>
                    <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="fc_slider_image">
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['id_image']) {?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value['link_rewrite'],$_smarty_tpl->tpl_vars['category']->value['id_image'],'medium_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" class="replace-2x img-responsive" />
                    <?php } else { ?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.jpg" alt="" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" class="replace-2x img-responsive" />
                    <?php }?>
                    </a>
                    <?php }?>
                    <div class="fc_slider_name">
                        <p class="s_title_block"><a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['category']->value['name'],35,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a></p>
                    </div>
                </li>
            <?php } ?>
            </ul>
        <?php }?>
    <?php } else { ?>
        <p class="warning"><?php echo smartyTranslate(array('s'=>'No featured categories','mod'=>'stfeaturedcategoriesslider'),$_smarty_tpl);?>
</p>
    <?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div></div><?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['has_background_img']->value&&$_smarty_tpl->tpl_vars['speed']->value) {?>
<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    $('#fc_slider_block_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
').parallax("50%", <?php echo floatval($_smarty_tpl->tpl_vars['speed']->value);?>
);
});
 
//]]>
</script>
<?php }?>
<?php }?>
<!--/ Featured categories --><?php }} ?>
