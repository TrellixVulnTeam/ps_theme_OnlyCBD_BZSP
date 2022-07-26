<?php
/* Smarty version 3.1.43, created on 2022-07-26 11:11:30
  from '/Applications/MAMP/htdocs/onlycbd.fr/themes/onlycbd/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62dfafc2b745a3_98381626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05707b2a7c5416dc5cb99e2aca861690c15e4266' => 
    array (
      0 => '/Applications/MAMP/htdocs/onlycbd.fr/themes/onlycbd/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1658589911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:catalog/_partials/product-flags.tpl' => 1,
  ),
),false)) {
function content_62dfafc2b745a3_98381626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71337229262dfafc2b40398_44263794', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_63305552462dfafc2b46de1_42701965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                    loading="lazy" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
" />
                </a>
              <?php } else { ?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"
                    width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                    height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
" />
                </a>
              <?php }?>
            <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_11368655862dfafc2b5e4b4_63199329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a class="quick-view js-quick-view" href="#" data-link-action="quickview">
                  <i class="material-icons search">&#xE8B6;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </a>
              <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_variants'} */
class Block_38635441262dfafc2b613c5_16368534 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                <?php }?>
              <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_name'} */
class Block_122638276562dfafc2b662a1_42985148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
                <h3 class="h3 product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                    content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
              <?php } else { ?>
                <h2 class="h3 product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                    content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h2>
              <?php }?>
            <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_87444677962dfafc2b71222_96719288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_item'} */
class Block_71337229262dfafc2b40398_44263794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_71337229262dfafc2b40398_44263794',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_63305552462dfafc2b46de1_42701965',
  ),
  'quick_view' => 
  array (
    0 => 'Block_11368655862dfafc2b5e4b4_63199329',
  ),
  'product_variants' => 
  array (
    0 => 'Block_38635441262dfafc2b613c5_16368534',
  ),
  'product_name' => 
  array (
    0 => 'Block_122638276562dfafc2b662a1_42985148',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_87444677962dfafc2b71222_96719288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-product product<?php if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <article class="<?php if ((isset($_COOKIE['show_list']))) {?>product_show_list <?php }?>product-miniature js-product-miniature"
      data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
      <div class="productMiniatureContainer">
        <div class="thumbnail-container">
          <div class="thumbnail-top">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63305552462dfafc2b46de1_42701965', 'product_thumbnail', $this->tplIndex);
?>


            <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?>">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11368655862dfafc2b5e4b4_63199329', 'quick_view', $this->tplIndex);
?>


              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38635441262dfafc2b613c5_16368534', 'product_variants', $this->tplIndex);
?>

            </div>
          </div>

          <div class="product-description">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122638276562dfafc2b662a1_42985148', 'product_name', $this->tplIndex);
?>


            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87444677962dfafc2b71222_96719288', 'product_reviews', $this->tplIndex);
?>

          </div>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </div>
    </article>
  </div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}