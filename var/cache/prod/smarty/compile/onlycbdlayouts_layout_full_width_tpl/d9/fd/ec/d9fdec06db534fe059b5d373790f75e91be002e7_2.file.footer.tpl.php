<?php
/* Smarty version 3.1.43, created on 2022-07-26 14:12:12
  from '/Applications/MAMP/htdocs/onlycbd.fr/themes/onlycbd/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62dfda1c91bac8_63129686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9fdec06db534fe059b5d373790f75e91be002e7' => 
    array (
      0 => '/Applications/MAMP/htdocs/onlycbd.fr/themes/onlycbd/templates/_partials/footer.tpl',
      1 => 1658766594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dfda1c91bac8_63129686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container-fluid blockNewsletterFooter hidden-sm-down">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34029479462dfda1c90c536_80702512', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container-fluid-footer">
    <div class="row customContainer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206124304462dfda1c90f516_97621359', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153541043862dfda1c9136b7_36293340', 'hook_footer_after');
?>

    </div>
    <div class="row lastRowFooter">
      <div class="text-sm-center lastRowFooterContainer col-sm-12">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166679910062dfda1c915a94_70665139', 'copyright_link');
?>

      </div>
    </div>
</div><?php }
/* {block 'hook_footer_before'} */
class Block_34029479462dfda1c90c536_80702512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_34029479462dfda1c90c536_80702512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_206124304462dfda1c90f516_97621359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_206124304462dfda1c90f516_97621359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class='displayHookCustomBlocks_852 hidden-sm-down'>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHookCustomBlocks','idHookCustomblocks'=>'852'),$_smarty_tpl ) );?>
</div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_153541043862dfda1c9136b7_36293340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_153541043862dfda1c9136b7_36293340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_166679910062dfda1c915a94_70665139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_166679910062dfda1c915a94_70665139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright%Copyright %year% ','sprintf'=>array('%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          <a href="https://www.onlycbd.fr" target="_blank" rel="noopener noreferrer nofollow">
            wwww.onlycbd.fr
          </a>
          <span>|</span>
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tous droits réservés','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <?php
}
}
/* {/block 'copyright_link'} */
}
