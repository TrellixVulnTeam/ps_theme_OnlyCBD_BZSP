<?php
/* Smarty version 3.1.43, created on 2022-07-25 20:40:18
  from '/Applications/MAMP/htdocs/onlycbd.fr/admin456gk9jee/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62dee3929b9970_43725651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91de405a1d484017ceabf69af9a172c6a237f625' => 
    array (
      0 => '/Applications/MAMP/htdocs/onlycbd.fr/admin456gk9jee/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1658235183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dee3929b9970_43725651 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}