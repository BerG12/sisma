<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 20:42:22
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/FieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20533576235a0b552e8a0576-57729408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf25bbdcff5587648c3476400ec0c4537de56f6d' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/uitypes/FieldSearchView.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20533576235a0b552e8a0576-57729408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b552e91932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b552e91932')) {function content_5a0b552e91932($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?><div class="row-fluid"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" class="span9 listSearchContributor" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue'];?>
" data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'/></div><?php }} ?>