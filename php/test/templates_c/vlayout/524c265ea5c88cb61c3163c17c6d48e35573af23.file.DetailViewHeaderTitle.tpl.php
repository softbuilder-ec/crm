<?php /* Smarty version Smarty-3.1.7, created on 2016-02-22 17:06:56
         compiled from "/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Project/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150353646156cb4030285cc6-45608685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524c265ea5c88cb61c3163c17c6d48e35573af23' => 
    array (
      0 => '/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Project/DetailViewHeaderTitle.tpl',
      1 => 1453409077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150353646156cb4030285cc6-45608685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'NAME_FIELD' => 0,
    'FIELD_MODEL' => 0,
    'RELATED_TO' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56cb403034974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cb403034974')) {function content_56cb403034974($_smarty_tpl) {?>
<span class="span2"><img src="<?php echo vimage_path('summary_Projects.png');?>
" class="summaryImg" /></span><span class="span8 margin0px"><span class="row-fluid"><h4 class="recordLabel pushDown" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['NAME_FIELD']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPermissions()){?><span class="<?php echo $_smarty_tpl->tpl_vars['NAME_FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
</span>&nbsp;<?php }?><?php } ?></h4></span><?php $_smarty_tpl->tpl_vars['RELATED_TO'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('linktoaccountscontacts'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['RELATED_TO']->value)){?><span class="row-fluid"><span class="muted"><?php echo vtranslate('Related to',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 - </span><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('linktoaccountscontacts');?>
</span><?php }?></span><?php }} ?>