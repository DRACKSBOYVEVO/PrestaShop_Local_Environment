<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:20
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\staddthisbutton\views\templates\hook\staddthisbutton-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20831074966172e35c58ac26-89589158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc20c9dac393c45f6b437601e676edc4cac45ec9' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\staddthisbutton\\views\\templates\\hook\\staddthisbutton-header.tpl',
      1 => 1633442185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20831074966172e35c58ac26-89589158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'page_name' => 0,
    'product' => 0,
    'cover' => 0,
    'link' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'category' => 0,
    'img_manu_dir' => 0,
    'img_sup_dir' => 0,
    'blog' => 0,
    'galleries' => 0,
    'gallery' => 0,
    'fb_image_link' => 0,
    'logo_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35c627576_46092366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35c627576_46092366')) {function content_6172e35c627576_46092366($_smarty_tpl) {?>
<!-- AddThis Header BEGIN -->
<meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
" />
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
<meta property="og:type" content="product" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo strip_tags($_smarty_tpl->tpl_vars['product']->value->description_short);?>
" />
<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['page_name']->value=='category') {?>
<meta property="og:type" content="product" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['category']->value->link_rewrite,$_smarty_tpl->tpl_vars['category']->value->id_image,'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['page_name']->value=='manufacturer'&&isset($_GET['id_manufacturer'])&&$_GET['id_manufacturer']) {?>
<meta property="og:type" content="product" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_GET['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-big_default.jpg" />
<?php } elseif ($_smarty_tpl->tpl_vars['page_name']->value=='supplier'&&isset($_GET['id_supplier'])&&$_GET['id_supplier']) {?>
<meta property="og:type" content="product" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['img_sup_dir']->value;?>
<?php echo htmlspecialchars($_GET['id_supplier'], ENT_QUOTES, 'UTF-8', true);?>
-big_default.jpg" />
<?php } elseif ($_smarty_tpl->tpl_vars['page_name']->value=='module-stblog-article') {?>
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if ($_smarty_tpl->tpl_vars['blog']->value->type==1&&isset($_smarty_tpl->tpl_vars['cover']->value)) {?>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['cover']->value['links']['large'];?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['blog']->value->type==2&&isset($_smarty_tpl->tpl_vars['galleries']->value)&&count($_smarty_tpl->tpl_vars['galleries']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gallery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['galleries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['gallery']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->key => $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
 $_smarty_tpl->tpl_vars['gallery']->index++;
 $_smarty_tpl->tpl_vars['gallery']->first = $_smarty_tpl->tpl_vars['gallery']->index === 0;
?>
        <?php if ($_smarty_tpl->tpl_vars['gallery']->first) {?><meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['links']['large'];?>
" /><?php }?>
    <?php } ?>
<?php } elseif ($_smarty_tpl->tpl_vars['blog']->value->type==2&&isset($_smarty_tpl->tpl_vars['cover']->value)) {?>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['cover']->value['links']['large'];?>
" />
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['blog']->value->type==3&&isset($_smarty_tpl->tpl_vars['cover']->value)) {?>
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['cover']->value['links']['large'];?>
" />
<?php }?>
<?php } else { ?>
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php if (isset($_smarty_tpl->tpl_vars['fb_image_link']->value)&&$_smarty_tpl->tpl_vars['fb_image_link']->value) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['fb_image_link']->value;?>
" />
<?php } elseif (isset($_smarty_tpl->tpl_vars['logo_url']->value)&&$_smarty_tpl->tpl_vars['logo_url']->value) {?>
<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" />
<?php }?>
<?php }?>

<!-- AddThis Header END --><?php }} ?>
