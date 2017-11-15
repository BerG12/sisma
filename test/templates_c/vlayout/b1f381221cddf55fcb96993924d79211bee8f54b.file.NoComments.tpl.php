<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 22:02:49
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14754259005a0b68090cd7a2-86760279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1f381221cddf55fcb96993924d79211bee8f54b' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/NoComments.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14754259005a0b68090cd7a2-86760279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b68090d298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b68090d298')) {function content_5a0b68090d298($_smarty_tpl) {?>
<div class="summaryWidgetContainer noCommentsMsgContainer"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>