<?php /* Smarty version Smarty-3.1.19, created on 2021-10-22 11:14:23
         compiled from "C:\laragon\www\prestashop_1.6.1.24\prestashop\modules\blocksearch_mod\views\templates\hook\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6673159906172e35f090953-54417738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd22b61720b569fbf12779cc61dabf2bea3f10f8' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop_1.6.1.24\\prestashop\\modules\\blocksearch_mod\\views\\templates\\hook\\blocksearch-top.tpl',
      1 => 1633442184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6673159906172e35f090953-54417738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'quick_search_simple' => 0,
    'link' => 0,
    'sttheme' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6172e35f09bb07_06103084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6172e35f09bb07_06103084')) {function content_6172e35f09bb07_06103084($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="search_block_mod <?php if ($_smarty_tpl->tpl_vars['quick_search_simple']->value) {?> quick_search_simple <?php }?> clearfix">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<div class="searchbox_inner">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['sttheme']->value['search_label'])&&$_smarty_tpl->tpl_vars['sttheme']->value['search_label']) {?><?php echo $_smarty_tpl->tpl_vars['sttheme']->value['search_label'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
<?php }?>" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" autocomplete="off" /><a href="javascript:;" title="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
" rel="nofollow" id="submit_searchbox" class="submit_searchbox icon_wrap"><i class="icon-search-1 icon-0x"></i><span class="icon_text"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</span></a>
			<div class="hidden" id="more_prod_string"><?php echo smartyTranslate(array('s'=>'More products »','mod'=>'blocksearch_mod'),$_smarty_tpl);?>
</div>
		</div>
	</form>
    <script type="text/javascript">
    // <![CDATA[
    
    jQuery(function($){
        $('#submit_searchbox').click(function(){
            var search_query_top_val = $.trim($('#search_query_top').val());
            if(search_query_top_val=='' || search_query_top_val==$.trim($('#search_query_top').attr('placeholder')))
            {
                $('#search_query_top').focusout();
                return false;
            }
            $('#searchbox').submit();
        });
        if(!isPlaceholer())
        {
            $('#search_query_top').focusin(function(){
                if ($(this).val()==$(this).attr('placeholder'))
                    $(this).val('');
            }).focusout(function(){
                if ($(this).val()=='')
                    $(this).val($(this).attr('placeholder'));
            });
        }
    });
    
    //]]>
    </script>
</div>
<!-- /Block search module TOP --><?php }} ?>
