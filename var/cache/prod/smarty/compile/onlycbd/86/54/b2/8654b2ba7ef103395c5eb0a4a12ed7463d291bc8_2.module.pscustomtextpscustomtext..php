<?php
/* Smarty version 3.1.43, created on 2022-07-26 13:48:30
  from 'module:pscustomtextpscustomtext.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62dfd48ea33156_27560349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:pscustomtextpscustomtext.',
      1 => 1658667457,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/categoryHome.tpl' => 1,
  ),
),false)) {
function content_62dfd48ea33156_27560349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div id="custom-text">
  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4716726062dfd48ea30db8_36001270', 'customCategory');
?>

</div><?php }
/* {block 'customCategory'} */
class Block_4716726062dfd48ea30db8_36001270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customCategory' => 
  array (
    0 => 'Block_4716726062dfd48ea30db8_36001270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/categoryHome.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'customCategory'} */
}