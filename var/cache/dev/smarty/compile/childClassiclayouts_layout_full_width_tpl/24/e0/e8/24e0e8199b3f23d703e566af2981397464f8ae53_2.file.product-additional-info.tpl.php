<?php
/* Smarty version 3.1.43, created on 2022-07-20 13:37:44
  from '/Applications/MAMP/htdocs/onlycbd.fr/themes/childClassic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62d7e90811cf93_29560464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24e0e8199b3f23d703e566af2981397464f8ae53' => 
    array (
      0 => '/Applications/MAMP/htdocs/onlycbd.fr/themes/childClassic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1658243268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d7e90811cf93_29560464 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
