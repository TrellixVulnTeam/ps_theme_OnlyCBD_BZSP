<?php
/* Smarty version 3.1.43, created on 2022-07-20 17:27:39
  from '/Applications/MAMP/htdocs/onlycbd.fr/themes/childClassic/templates/_partials/pagination-seo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62d81eeb04bbb5_65740307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b802a9dcd0ccd7175b7b81982e1a2f3834002d6a' => 
    array (
      0 => '/Applications/MAMP/htdocs/onlycbd.fr/themes/childClassic/templates/_partials/pagination-seo.tpl',
      1 => 1658243268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d81eeb04bbb5_65740307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/onlycbd.fr/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['pagination'])) && $_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>
    <?php $_smarty_tpl->_assignInScope('page_nb', 1);?>
    <?php if ((isset($_GET['page']))) {?>
        <?php $_smarty_tpl->_assignInScope('page_nb', (($tmp = @intval($_GET['page']))===null||$tmp==='' ? 1 : $tmp));?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('queryPage', ('?page=').($_smarty_tpl->tpl_vars['page_nb']->value));?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['canonical'] = smarty_modifier_replace($_smarty_tpl->tpl_vars['page']->value['canonical'],$_smarty_tpl->tpl_vars['queryPage']->value,'');
$_smarty_tpl->_assignInScope('page', $_tmp_array);?>

    <?php $_smarty_tpl->_assignInScope('prev', false);?>
    <?php $_smarty_tpl->_assignInScope('next', false);?>
    <?php if (($_smarty_tpl->tpl_vars['page_nb']->value-1) == 1) {?>
        <?php $_smarty_tpl->_assignInScope('prev', $_smarty_tpl->tpl_vars['page']->value['canonical']);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['page_nb']->value > 2) {?>
        <?php $_smarty_tpl->_assignInScope('prev', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value-1))));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to']) {?>
        <?php $_smarty_tpl->_assignInScope('next', ((($_smarty_tpl->tpl_vars['page']->value['canonical']).('?page=')).(($_smarty_tpl->tpl_vars['page_nb']->value+1))));?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['prev']->value) {?><link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prev']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['next']->value) {?><link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['next']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
}
}
}
