<?php /* Smarty version Smarty-3.1.7, created on 2016-05-12 18:06:07
         compiled from "/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Vtiger/AddCommentForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8189155255734c60f7f11d2-08613042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a423b23fb6515e86964d8f16137fbce773b5d1ba' => 
    array (
      0 => '/var/lib/openshift/56a0faf389f5cf82c30001e5/app-root/runtime/repo/php/includes/runtime/../../layouts/vlayout/modules/Vtiger/AddCommentForm.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8189155255734c60f7f11d2-08613042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SOURCE_MODULE' => 0,
    'CVID' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'SEARCH_KEY' => 0,
    'OPERATOR' => 0,
    'ALPHABET_VALUE' => 0,
    'SEARCH_PARAMS' => 0,
    'COMMENT_TEXTAREA_DEFAULT_ROWS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5734c60f873ba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5734c60f873ba')) {function content_5734c60f873ba($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["COMMENT_TEXTAREA_DEFAULT_ROWS"] = new Smarty_variable("2", null, 0);?><div id="addCommentContainer" class='modelContainer'><div class="modal-header contentsBackground"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">&times;</button><h3><?php echo vtranslate('LBL_ADDING_COMMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal" id="massSave" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="action" value="MassSaveAjax" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
><input type="hidden" name="search_key" value= "<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" name="search_params" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value);?>
' /><div class="modal-body tabbable"><textarea class="input-xxlarge" name="commentcontent" id="commentcontent" rows="<?php echo $_smarty_tpl->tpl_vars['COMMENT_TEXTAREA_DEFAULT_ROWS']->value;?>
" placeholder="<?php echo vtranslate('LBL_WRITE_YOUR_COMMENT_HERE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..."></textarea></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>