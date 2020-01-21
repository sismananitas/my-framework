<?php
/* Smarty version 3.1.33, created on 2019-06-03 02:03:49
  from 'C:\xampp\htdocs\framework-jesus\public\includes\dependencies.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf463e53f2de8_29050871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2439199e1bc74700a39d88aa27af78792f82702e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework-jesus\\public\\includes\\dependencies.html',
      1 => 1556687453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf463e53f2de8_29050871 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Jquery y Moment -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/extra/jquery-moment/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/extra/jquery-moment/moment.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/extra/bootstrap/css/bootstrap.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/extra/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
<!-- Fontawesome -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/extra/fontawesome/all.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/extra/fontawesome/all.js"><?php echo '</script'; ?>
><?php }
}
