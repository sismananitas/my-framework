<?php
/* Smarty version 3.1.33, created on 2019-06-03 02:03:53
  from 'C:\xampp\htdocs\framework-jesus\public\views\usuarios\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf463e9108f35_87562405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75392d742ae996a83764a0c2b40f826bb9ac757' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework-jesus\\public\\views\\usuarios\\main.html',
      1 => 1556689625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf463e9108f35_87562405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13478183825cf463e9105c29_33772704', 'titulo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9032806795cf463e9107da2_76625625', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public/templates/default-layout.html');
}
/* {block 'titulo'} */
class Block_13478183825cf463e9105c29_33772704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titulo' => 
  array (
    0 => 'Block_13478183825cf463e9105c29_33772704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Usuarios</h1>
<?php
}
}
/* {/block 'titulo'} */
/* {block 'main'} */
class Block_9032806795cf463e9107da2_76625625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_9032806795cf463e9107da2_76625625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>
        Lista de usuarios.
    </p>

    <ul>
        <li>Usuario - correo</li>
    </ul>
<?php
}
}
/* {/block 'main'} */
}
