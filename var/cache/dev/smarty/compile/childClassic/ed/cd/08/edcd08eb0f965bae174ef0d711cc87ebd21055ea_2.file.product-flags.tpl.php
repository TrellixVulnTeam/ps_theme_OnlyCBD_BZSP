<?php
/* Smarty version 3.1.43, created on 2022-07-20 17:27:36
  from '/Applications/MAMP/htdocs/onlycbd.fr/themes/childClassic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62d81ee860c710_97812129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edcd08eb0f965bae174ef0d711cc87ebd21055ea' => 
    array (
      0 => '/Applications/MAMP/htdocs/onlycbd.fr/themes/childClassic/templates/catalog/_partials/product-flags.tpl',
      1 => 1658243269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d81ee860c710_97812129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209476156762d81ee8606dc3_70079453', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_209476156762d81ee8606dc3_70079453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_209476156762d81ee8606dc3_70079453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
