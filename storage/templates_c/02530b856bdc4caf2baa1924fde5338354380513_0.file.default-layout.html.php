<?php
/* Smarty version 3.1.33, created on 2020-01-21 11:18:59
  from 'C:\xampp\htdocs\framework-jesus\public\templates\default-layout.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2732836eb097_55611703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02530b856bdc4caf2baa1924fde5338354380513' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework-jesus\\public\\templates\\default-layout.html',
      1 => 1560958959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/includes/dependencies.html' => 1,
  ),
),false)) {
function content_5e2732836eb097_55611703 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20236591255e2732835291a5_59999204', "title");
?>
</title>
    <?php $_smarty_tpl->_subTemplateRender('file:public/includes/dependencies.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- Mis estilos -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/public/css/master.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3264592985e2732836e2575_65958205', "css");
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
                    <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4739614685e2732836e47b0_07778265', "before");
?>


        <section class="container pt-3 pb-3">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19772854535e2732836e5638_52968583', "main-header");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12811847235e2732836e7358_37206813', "main");
?>

        </section>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17001337395e2732836e81e9_45401054', "after");
?>

    </main>

    <footer class="mt-auto bg-dark text-light pt-4">
        <div class="container">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9960784355e2732836e8f46_04729093', "footer");
?>

        </div>

        <p class="small text-center w-100">Copyright <?php echo date('Y');?>
 &copy;</p>
    </footer>
</body>
</html><?php }
/* {block "title"} */
class Block_20236591255e2732835291a5_59999204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20236591255e2732835291a5_59999204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Mi Web<?php
}
}
/* {/block "title"} */
/* {block "css"} */
class Block_3264592985e2732836e2575_65958205 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_3264592985e2732836e2575_65958205',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "css"} */
/* {block "before"} */
class Block_4739614685e2732836e47b0_07778265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'before' => 
  array (
    0 => 'Block_4739614685e2732836e47b0_07778265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "before"} */
/* {block "h1"} */
class Block_20151518385e2732836e5fe1_27564046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Encabezados (main-header)<?php
}
}
/* {/block "h1"} */
/* {block "main-header"} */
class Block_19772854535e2732836e5638_52968583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main-header' => 
  array (
    0 => 'Block_19772854535e2732836e5638_52968583',
  ),
  'h1' => 
  array (
    0 => 'Block_20151518385e2732836e5fe1_27564046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <h1 class="mt-4"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20151518385e2732836e5fe1_27564046', "h1", $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block "main-header"} */
/* {block "main"} */
class Block_12811847235e2732836e7358_37206813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_12811847235e2732836e7358_37206813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Contenido (main)</p>
            <?php
}
}
/* {/block "main"} */
/* {block "after"} */
class Block_17001337395e2732836e81e9_45401054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_17001337395e2732836e81e9_45401054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "after"} */
/* {block "footer"} */
class Block_9960784355e2732836e8f46_04729093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9960784355e2732836e8f46_04729093',
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
