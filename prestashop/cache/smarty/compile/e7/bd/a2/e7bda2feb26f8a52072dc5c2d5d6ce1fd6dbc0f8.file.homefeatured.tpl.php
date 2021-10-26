<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:25
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\homefeatured_mod\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5935576366172e3619e8648-96396608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7bda2feb26f8a52072dc5c2d5d6ce1fd6dbc0f8' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\homefeatured_mod\\homefeatured.tpl',
      1 => 1633442184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5935576366172e3619e8648-96396608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_hash' => 0,
    'homeverybottom' => 0,
    'products' => 0,
    'pro_per_lg' => 0,
    'pro_per_md' => 0,
    'pro_per_sm' => 0,
    'pro_per_xs' => 0,
    'pro_per_xxs' => 0,
    'product' => 0,
    'link' => 0,
    'mediumSize' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'sttheme' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'has_background_img' => 0,
    'speed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e361ab3f40_74627905',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e361ab3f40_74627905')) {function content_6172e361ab3f40_74627905($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\tools\\smarty\\plugins\\modifier.replace.php';
?>

<!-- MODULE Home Featured Products -->
<div id="featured-products_block_center_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="featured-products_block_center_container block">
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?><div class="wide_container"><div class="container"><?php }?>
<section id="featured-products_block_center_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="products_block section">
	<h4 class="title_block mar_b1"><span><?php echo smartyTranslate(array('s'=>'Featured Products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
</span></h4>
	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <ul id="featured_itemlist_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
" class="pro_itemlist row">
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
		<li class="ajax_block_product col-lg-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_lg']->value),'.','-');?>
 col-md-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_md']->value),'.','-');?>
 col-sm-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_sm']->value),'.','-');?>
 col-xs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xs']->value),'.','-');?>
 col-xxs-<?php echo smarty_modifier_replace((12/$_smarty_tpl->tpl_vars['pro_per_xxs']->value),'.','-');?>
  <?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_lg']->value==1) {?> first-item-of-desktop-line<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_md']->value==1) {?> first-item-of-line<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_sm']->value==1) {?> first-item-of-tablet-line<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_xs']->value==1) {?> first-item-of-mobile-line<?php }?><?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['pro_per_xxs']->value==1) {?> first-item-of-portrait-line<?php }?>">
			<div class="itemlist_left">
                <a class="product_image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><img class="replace-2x img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'medium_default');?>
" height="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['mediumSize']->value['width'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
            </div>
            <div class="itemlist_right">
    			<p class="s_title_block"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],40,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></p>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                    <div class="price_container mar_b10">
                        <span class="price">
                        <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>

                        <?php } else { ?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>

                        <?php }?>
                        </span>
                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']) {?>
                            <span class="old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</span>
                            <?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['discount_percentage'])&&$_smarty_tpl->tpl_vars['sttheme']->value['discount_percentage']) {?>
                            <span class="sale_percentage">
                                <i class="icon-tag"></i>-<?php if ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='percentage') {?><?php echo $_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']*floatval(100);?>
%<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction_type']=='amount') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']-floatval($_smarty_tpl->tpl_vars['product']->value['price'])),$_smarty_tpl);?>
<?php }?>
                            </span>
                            <?php }?>
                        <?php }?>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

                    </div>
                <?php } else { ?>
                    <!--<div style="height:21px;"></div>-->
                <?php }?>  
                <div class="itemlist_action">
                    <?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['minimal_quantity']<=1&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>          
						<?php if (($_smarty_tpl->tpl_vars['product']->value['quantity']>0||$_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
						<a class="exclusive ajax_add_to_cart_button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
?qty=1&amp;id_product=<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
&amp;add" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" ><i class="icon-basket icon_btn icon-1x icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'Add to Cart','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
</span></a>
						<?php } else { ?>
                        <a class="button exclusive view_button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-eye-2 icon_btn icon-1x icon-mar-lr2"></i><span><?php echo smartyTranslate(array('s'=>'View','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
</span></a>
						<?php }?>
					<?php } else { ?>
						<!--<div style="height:23px;"></div>-->
                    <?php }?>
                </div>
            </div>
        </li>
        <?php } ?>
	</ul>
	<?php } else { ?>
		<p class="warning"><?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
</p>
	<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['homeverybottom']->value)&&$_smarty_tpl->tpl_vars['homeverybottom']->value) {?></div></div><?php }?>
</div>
<?php if ($_smarty_tpl->tpl_vars['has_background_img']->value&&$_smarty_tpl->tpl_vars['speed']->value) {?>
<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    $('#featured-products_block_center_container_<?php echo $_smarty_tpl->tpl_vars['hook_hash']->value;?>
').parallax("50%", <?php echo floatval($_smarty_tpl->tpl_vars['speed']->value);?>
);
});
 
//]]>
</script>
<?php }?>
<!-- /MODULE Home Featured Products --><?php }} ?>
