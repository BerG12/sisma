<?php /* Smarty version Smarty-3.1.7, created on 2017-11-14 19:37:31
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9433326725a0b45fb060f99-81989663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e202a2645149ca3e1e4b728af6e044785b79f1c' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/EditViewActions.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9433326725a0b45fb060f99-81989663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b45fb0694c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b45fb0694c')) {function content_5a0b45fb0694c($_smarty_tpl) {?>

<div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><div class="clearfix"></div></div><br></form></div><?php }} ?>