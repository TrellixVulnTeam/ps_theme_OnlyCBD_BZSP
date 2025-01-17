<?php
/* Smarty version 3.1.43, created on 2022-07-27 14:28:31
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62e12f6f0dff69_32498459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1658924899,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e12f6f0dff69_32498459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/onlycbd.fr/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>

<div class="block-contact col-md-3 links wrapper">
  <p class="h4 text-uppercase block-contact-title hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
  <div class="title clearfix hidden-md-up" data-target="#contact-infos" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">keyboard_arrow_down</i>
        <i class="material-icons remove">keyboard_arrow_up</i>
      </span>
    </span>
  </div>


  <div id="contact-infos" class="collapse">
    <i class="material-icons miFooter">room</i>
    <span class="adressFooter">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      <p>
        <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['city'];?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['country'];?>

      </p>
    </span>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
      <br>
            <i class="material-icons miFooter">phone</i>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<p>','[/1]'=>'</p>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
      <br>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<p>','[/1]'=>'</p>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
      <br>
      <i class="material-icons miFooter">email</i>
      <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email us:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      <br>
      <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

    <?php }?>
  </div>
</div><?php }
}
