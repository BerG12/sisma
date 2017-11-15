<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 19:37:21
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2747784715a0b45f1b3fca4-27985204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a164bbdea130b6b83c34ad6af3b93f2dba53997' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2747784715a0b45f1b3fca4-27985204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b45f1b72f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b45f1b72f6')) {function content_5a0b45f1b72f6($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>