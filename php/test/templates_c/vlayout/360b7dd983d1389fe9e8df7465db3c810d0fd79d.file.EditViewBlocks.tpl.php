<?php /* Smarty version Smarty-3.1.7, created on 2016-02-01 20:57:57
         compiled from "/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Events/EditViewBlocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124508589756afc6d502fbc9-79502648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '360b7dd983d1389fe9e8df7465db3c810d0fd79d' => 
    array (
      0 => '/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Events/EditViewBlocks.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124508589756afc6d502fbc9-79502648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_CHANGED_END_DATE_TIME' => 0,
    'MODULE' => 0,
    'ACCESSIBLE_USERS' => 0,
    'USER_ID' => 0,
    'CURRENT_USER' => 0,
    'INVITIES_SELECTED' => 0,
    'USER_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56afc6d50da0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56afc6d50da0b')) {function content_56afc6d50da0b($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<input type="hidden" name="userChangedEndDateTime" value="<?php echo $_smarty_tpl->tpl_vars['USER_CHANGED_END_DATE_TIME']->value;?>
" /><table class="table table-bordered blockContainer showInlineTable"><tr><th class="blockHeader" colspan="4"><?php echo vtranslate('LBL_INVITE_USER_BLOCK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr><tr><td class="fieldLabel"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_INVITE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue"><select id="selectedUsers" class="select2" multiple name="selectedusers[]" style="width:200px;"><?php  $_smarty_tpl->tpl_vars['USER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['USER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['USER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCESSIBLE_USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['USER_NAME']->key => $_smarty_tpl->tpl_vars['USER_NAME']->value){
$_smarty_tpl->tpl_vars['USER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['USER_ID']->value = $_smarty_tpl->tpl_vars['USER_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['USER_ID']->value==$_smarty_tpl->tpl_vars['CURRENT_USER']->value->getId()){?><?php continue 1?><?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['USER_ID']->value,$_smarty_tpl->tpl_vars['INVITIES_SELECTED']->value)){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
</option><?php } ?><select></td></tr></table><br><?php }} ?>