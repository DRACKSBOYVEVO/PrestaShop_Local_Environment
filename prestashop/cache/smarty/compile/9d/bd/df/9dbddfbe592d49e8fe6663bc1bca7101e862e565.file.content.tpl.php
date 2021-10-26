<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:13
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\admin708xbke3k\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7736834266172e3553ba8d9-27188594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dbddfbe592d49e8fe6663bc1bca7101e862e565' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\admin708xbke3k\\themes\\default\\template\\content.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7736834266172e3553ba8d9-27188594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e3553ec247_01757954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e3553ec247_01757954')) {function content_6172e3553ec247_01757954($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
