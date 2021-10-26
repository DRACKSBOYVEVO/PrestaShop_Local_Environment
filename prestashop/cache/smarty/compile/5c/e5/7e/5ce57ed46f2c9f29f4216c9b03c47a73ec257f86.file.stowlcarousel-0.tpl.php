<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:26
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stowlcarousel\views\templates\hook\stowlcarousel-0.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2777197586172e362351a87-40398390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce57ed46f2c9f29f4216c9b03c47a73ec257f86' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stowlcarousel\\views\\templates\\hook\\stowlcarousel-0.tpl',
      1 => 1633442188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2777197586172e362351a87-40398390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e36235efd0_84389805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e36235efd0_84389805')) {function content_6172e36235efd0_84389805($_smarty_tpl) {?><!-- MODULE stowlcarousel -->
<?php if (isset($_smarty_tpl->tpl_vars['slides']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['slides']->value['slide'])&&count($_smarty_tpl->tpl_vars['slides']->value['slide'])) {?>
        <div id="st_owl_carousel-<?php echo $_smarty_tpl->tpl_vars['slides']->value['id_st_owl_carousel_group'];?>
" class="<?php if (count($_smarty_tpl->tpl_vars['slides']->value['slide'])>1) {?> owl-carousel owl-theme owl-navigation-lr <?php if ($_smarty_tpl->tpl_vars['slides']->value['prev_next']==2) {?> owl-navigation-rectangle <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['prev_next']==3) {?> owl-navigation-circle <?php } elseif ($_smarty_tpl->tpl_vars['slides']->value['prev_next']==4) {?> owl-navigation-square <?php }?><?php }?>">
            <?php  $_smarty_tpl->tpl_vars['banner'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['banner']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value['slide']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['banner']->key => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("./stowlcarousel-block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('banner_data'=>$_smarty_tpl->tpl_vars['banner']->value), 0);?>

            <?php } ?>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("./stowlcarousel-script.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('js_data'=>$_smarty_tpl->tpl_vars['slides']->value), 0);?>

    <?php }?>
<?php }?>
<!--/ MODULE stowlcarousel --><?php }} ?>
