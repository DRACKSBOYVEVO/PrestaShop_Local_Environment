<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:26
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stcompare\views\templates\hook\stcompare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7745974706172e36291d561-19859816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968cf6e656f58249bee8fc74f4c3b2d1592aa04e' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stcompare\\views\\templates\\hook\\stcompare.tpl',
      1 => 1633442187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7745974706172e36291d561-19859816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e362957fe4_29185653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e362957fe4_29185653')) {function content_6172e362957fe4_29185653($_smarty_tpl) {?>
<!-- MODULE st compare -->
<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
<section id="rightbar_compare" class="rightbar_wrap">
    <a id="rightbar-product_compare" class="rightbar_tri icon_wrap" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>"Compare Products",'mod'=>'stcompare'),$_smarty_tpl);?>
">
        <i class="icon-ajust icon-0x icon_btn"></i>
        <span class="icon_text"><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'stcompare'),$_smarty_tpl);?>
</span>
        <span class="compare_quantity amount_circle <?php if (!count($_smarty_tpl->tpl_vars['compared_products']->value)) {?> simple_hidden <?php }?><?php if (count($_smarty_tpl->tpl_vars['compared_products']->value)>9) {?> dozens <?php }?>"><?php echo count($_smarty_tpl->tpl_vars['compared_products']->value);?>
</span>
    </a>
</section>
<?php }?>
<!-- /MODULE st compare --><?php }} ?>
