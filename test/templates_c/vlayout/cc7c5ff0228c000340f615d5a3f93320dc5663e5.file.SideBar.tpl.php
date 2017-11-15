<?php /* Smarty version Smarty-3.1.7, created on 2017-11-15 21:29:46
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/sisma/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7511483445a0cb1ca019c29-31389414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7c5ff0228c000340f615d5a3f93320dc5663e5' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/sisma/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBar.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7511483445a0cb1ca019c29-31389414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0cb1ca02617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0cb1ca02617')) {function content_5a0cb1ca02617($_smarty_tpl) {?>
<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>