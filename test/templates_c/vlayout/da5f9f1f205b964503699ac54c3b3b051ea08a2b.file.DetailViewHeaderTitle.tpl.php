<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 19:37:26
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369387665a0b45f6eb1590-06212488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da5f9f1f205b964503699ac54c3b3b051ea08a2b' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/EmailTemplates/DetailViewHeaderTitle.tpl',
      1 => 1510687898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '369387665a0b45f6eb1590-06212488',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b45f6ede7c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b45f6ede7c')) {function content_5a0b45f6ede7c($_smarty_tpl) {?>
<span class="span10 margin0px"><span class="row-fluid"><span class="recordLabel font-x-x-large textOverflowEllipsis span pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><span class="templatename"><?php echo decode_html($_smarty_tpl->tpl_vars['RECORD']->value->get('templatename'));?>
</span>&nbsp;</span></span></span><?php }} ?>