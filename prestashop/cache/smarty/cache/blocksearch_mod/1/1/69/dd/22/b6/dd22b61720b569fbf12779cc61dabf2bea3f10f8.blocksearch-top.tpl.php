<?php /*%%SmartyHeaderCode:1998651236166f1bf403821-76104422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1998651236166f1bf403821-76104422',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_616ec85b762786_34242173',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_616ec85b762786_34242173')) {function content_616ec85b762786_34242173($_smarty_tpl) {?><div id="search_block_top" class="search_block_mod quick_search_simple clearfix"><form id="searchbox" method="get" action="//prestashop_1.6.1.24.test/prestashop/buscar" ><div class="searchbox_inner"> <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar Aquí" value="" autocomplete="off" /><a href="javascript:;" title="Search" rel="nofollow" id="submit_searchbox" class="submit_searchbox icon_wrap"><i class="icon-search-1 icon-0x"></i><span class="icon_text">Search</span></a><div class="hidden" id="more_prod_string">More products »</div></div></form> <script type="text/javascript">/* <![CDATA[ */;jQuery(function($){$('#submit_searchbox').click(function(){var search_query_top_val=$.trim($('#search_query_top').val());if(search_query_top_val==''||search_query_top_val==$.trim($('#search_query_top').attr('placeholder')))
{$('#search_query_top').focusout();return false;}
$('#searchbox').submit();});if(!isPlaceholer())
{$('#search_query_top').focusin(function(){if($(this).val()==$(this).attr('placeholder'))
$(this).val('');}).focusout(function(){if($(this).val()=='')
$(this).val($(this).attr('placeholder'));});}});/* ]]> */</script> </div><?php }} ?>
