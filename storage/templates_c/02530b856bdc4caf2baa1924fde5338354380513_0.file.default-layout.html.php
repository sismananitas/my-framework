<?php
/* Smarty version 3.1.33, created on 2019-06-03 03:34:53
  from 'C:\xampp\htdocs\framework-jesus\public\templates\default-layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf4793d3e8227_41057754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02530b856bdc4caf2baa1924fde5338354380513' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework-jesus\\public\\templates\\default-layout.html',
      1 => 1559525692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/includes/dependencies.html' => 1,
  ),
),false)) {
function content_5cf4793d3e8227_41057754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19633690255cf4793d3d7ee4_41605132', 'title');
?>
</title>
    <?php $_smarty_tpl->_subTemplateRender('file:public/includes/dependencies.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Mis estilos -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/css/master.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16212361835cf4793d3e3fd9_43396991', "css");
?>

</head>

<body class="d-flex flex-column">
    <header class="text-center bg-light">
        <div class="container mt-2 justify-content-end">
            <div class="d-flex justify-content-end px-2 py-1 rounded" style="background: #dbdbdb">
                <a class="btn btn-primary btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><i class="fas fa-sign-in-alt"></i> Login</a>
            </div>

            <h1 class="display-4">Mi Web</h1>
        </div>
    </header>

    <nav class="sticky-top navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">MENU</a>
            <button class="navbar-toggler left-0" type="button" data-toggle="collapse" data-target="#main-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div id="main-menu" class="collapse navbar-collapse"><br>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
usuarios">Users</a></li>
                </ul>

                <form class="form-inline my-1 my-sm-0" action="#" method="post">
                    <input class="form-control mr-2 my-2 my-sm-0" type="text" name="buscar" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Enviar</button>
                </form>                   
            </div>
        </div>
    </nav>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4169502645cf4793d3e52e9_46337513', "before");
?>


        <section class="container pt-3 pb-3">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5977644755cf4793d3e5997_80356818', 'titulo');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4269254005cf4793d3e6063_39636589', 'main');
?>

        </section>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19504718755cf4793d3e6828_81472106', "after");
?>

    </main>

    <footer class="mt-auto bg-dark text-light pt-4">
        <div class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11935860215cf4793d3e6f73_30973962', "footer");
?>

        </div>

        <p class="small text-center w-100">Copyright <?php echo date('Y');?>
 &copy;</p>
    </footer>
</body>
</html><?php }
/* {block 'title'} */
class Block_19633690255cf4793d3d7ee4_41605132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19633690255cf4793d3d7ee4_41605132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mi Web<?php
}
}
/* {/block 'title'} */
/* {block "css"} */
class Block_16212361835cf4793d3e3fd9_43396991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_16212361835cf4793d3e3fd9_43396991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "before"} */
class Block_4169502645cf4793d3e52e9_46337513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'before' => 
  array (
    0 => 'Block_4169502645cf4793d3e52e9_46337513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "before"} */
/* {block 'titulo'} */
class Block_5977644755cf4793d3e5997_80356818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titulo' => 
  array (
    0 => 'Block_5977644755cf4793d3e5997_80356818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="mt-4">Encabezados (titulo)</h1>
            <?php
}
}
/* {/block 'titulo'} */
/* {block 'main'} */
class Block_4269254005cf4793d3e6063_39636589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_4269254005cf4793d3e6063_39636589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Contenido (main)</p>
            <?php
}
}
/* {/block 'main'} */
/* {block "after"} */
class Block_19504718755cf4793d3e6828_81472106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_19504718755cf4793d3e6828_81472106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "after"} */
/* {block "footer"} */
class Block_11935860215cf4793d3e6f73_30973962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11935860215cf4793d3e6f73_30973962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="w-50 text-light">
                    <ul>
                        <li><a class="text-light" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a></li>
                        <li><a class="text-light" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
usuarios">Users</a></li>
                    </ul>
                </div>
            <?php
}
}
/* {/block "footer"} */
}
