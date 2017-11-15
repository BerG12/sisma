<?php /* Smarty version Smarty-3.1.7, created on 2017-11-15 21:29:45
         compiled from "/home/martin/lampstack-5.6.32-1/apache2/htdocs/sisma/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2491465345a0cb1c9c44810-64857568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1a8dff9dc607b038c9beb9dcbdd4691fdf7c5ab' => 
    array (
      0 => '/home/martin/lampstack-5.6.32-1/apache2/htdocs/sisma/includes/runtime/../../layouts/vlayout/modules/Vtiger/BasicHeader.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2491465345a0cb1c9c44810-64857568',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0cb1c9c4b74',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0cb1c9c4b74')) {function content_5a0cb1c9c4b74($_smarty_tpl) {?>
<div class="navbar navbar-fixed-top  navbar-inverse noprint"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MenuBar.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CommonActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>