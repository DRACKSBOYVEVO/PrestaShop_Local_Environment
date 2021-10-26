<?php /* Smarty version Smarty-3.1.19, created on 2021-10-21 09:56:49
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\admin708xbke3k\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9748443461717fb1a5e295-06224756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79a08c5550ccd1da62127205f0a120c9b0ac1dea' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\admin708xbke3k\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1556660532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9748443461717fb1a5e295-06224756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61717fb1a62584_39353220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61717fb1a62584_39353220')) {function content_61717fb1a62584_39353220($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
