<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:20
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\stblog\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4874161516172e35c97c277-64666671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84703ed9a76a54cfec30217d72dacfad76ee5806' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\stblog\\views\\templates\\hook\\header.tpl',
      1 => 1633442186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4874161516172e35c97c277-64666671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ss_slideshow' => 0,
    'ss_s_speed' => 0,
    'ss_a_speed' => 0,
    'ss_pause' => 0,
    'ss_loop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35c9cfca6_52971115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35c9cfca6_52971115')) {function content_6172e35c9cfca6_52971115($_smarty_tpl) {?>
<script type="text/javascript">
// <![CDATA[

blog_flexslider_options = {
    slideshow: <?php echo $_smarty_tpl->tpl_vars['ss_slideshow']->value;?>
,
    slideshowSpeed: <?php if (!$_smarty_tpl->tpl_vars['ss_s_speed']->value) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['ss_s_speed']->value;?>
<?php }?>,
    animationSpeed: <?php if (!$_smarty_tpl->tpl_vars['ss_a_speed']->value) {?>0<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['ss_a_speed']->value;?>
<?php }?>,
    pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['ss_pause']->value;?>
,
    animationLoop: <?php echo $_smarty_tpl->tpl_vars['ss_loop']->value;?>

};
//]]>
</script>
<?php }} ?>
