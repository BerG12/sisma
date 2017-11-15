<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 20:42:26
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3057333255a0b55329c5dd8-36940016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4b4fe9ad52ceb6a96c8891e820101cee5cb25d3' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditView.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3057333255a0b55329c5dd8-36940016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b55329d96a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b55329d96a')) {function content_5a0b55329d96a($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>