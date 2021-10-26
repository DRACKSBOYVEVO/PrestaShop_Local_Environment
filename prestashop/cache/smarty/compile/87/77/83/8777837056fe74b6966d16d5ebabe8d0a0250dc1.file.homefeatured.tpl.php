<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:25
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\themes\transformer\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5529409266172e3618cfd12-69525709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8777837056fe74b6966d16d5ebabe8d0a0250dc1' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\themes\\transformer\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1633442184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5529409266172e3618cfd12-69525709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e3618d7367_14085537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e3618d7367_14085537')) {function content_6172e3618d7367_14085537($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php if (Configuration::get('ST_COUNTDOWN_BLKFEATURED')) {?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane s_countdown_block','for_f'=>'hometab','id'=>'homefeatured'), 0);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','for_f'=>'hometab','id'=>'homefeatured'), 0);?>

	<?php }?>
<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="warning"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
