<?php /* Smarty version Smarty-3.1.7, created on 2017-11-15 21:29:46
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/sisma/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13230750465a0cb1cab8ec58-97243083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6d4facef5bceac80babab2ce279cc83b1d87162' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/sisma/includes/runtime/../../layouts/vlayout/modules/Vtiger/RecordNamesList.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13230750465a0cb1cab8ec58-97243083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORDS' => 0,
    'recordsModel' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0cb1cabba54',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0cb1cabba54')) {function content_5a0cb1cabba54($_smarty_tpl) {?>
<div class="recordNamesList"><div class="row-fluid"><div class=""><ul class="nav nav-list"><?php  $_smarty_tpl->tpl_vars['recordsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recordsModel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recordsModel']->key => $_smarty_tpl->tpl_vars['recordsModel']->value){
$_smarty_tpl->tpl_vars['recordsModel']->_loop = true;
?><li><a data-id=<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->getId();?>
 href="<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->getDetailViewUrl();?>
" title="<?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
</a></li><?php }
if (!$_smarty_tpl->tpl_vars['recordsModel']->_loop) {
?><li style="text-align:center"><?php echo vtranslate('LBL_NO_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</li><?php } ?></ul></div></div></div>
<?php }} ?>