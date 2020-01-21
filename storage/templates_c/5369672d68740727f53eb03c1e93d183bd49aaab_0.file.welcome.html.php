<?php
/* Smarty version 3.1.33, created on 2019-06-03 03:58:49
  from 'C:\xampp\htdocs\framework-jesus\public\views\home\welcome.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf47ed93d8d63_30392061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5369672d68740727f53eb03c1e93d183bd49aaab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\framework-jesus\\public\\views\\home\\welcome.html',
      1 => 1559527122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf47ed93d8d63_30392061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9207425245cf47ed93d17c8_85622484', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4348982925cf47ed93d3073_16304399', "before");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21359453785cf47ed93d3ab1_27804755', 'titulo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2575435805cf47ed93d7722_65708699', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12144746335cf47ed93d8134_80794492', "after");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'public/templates/default-layout.html');
}
/* {block "css"} */
class Block_9207425245cf47ed93d17c8_85622484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_9207425245cf47ed93d17c8_85622484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 2rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 32rem;
        background-color: #777;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }

    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }

    /* CUSTOMIZE CLOSTER
    ------------------------------------------------- */
    .closter {
        background: #c1c1c1;
        padding: 2rem;
        margin: 0%;
    }

    .closter img {
        width: 100%;
        transition: .3s;
    }

    .closter img:hover {
        transform: scale(1.2);
    }

    .closter .item {
        padding: 0%;
        margin: 1rem;
        overflow: hidden;
        box-shadow: 0rem .5rem 2rem #000000;
    }
</style>
<?php
}
}
/* {/block "css"} */
/* {block "before"} */
class Block_4348982925cf47ed93d3073_16304399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'before' => 
  array (
    0 => 'Block_4348982925cf47ed93d3073_16304399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                            at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php
}
}
/* {/block "before"} */
/* {block 'titulo'} */
class Block_21359453785cf47ed93d3ab1_27804755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'titulo' => 
  array (
    0 => 'Block_21359453785cf47ed93d3ab1_27804755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="jumbotron display-4"><?php echo $_smarty_tpl->tpl_vars['saludo']->value;?>
</h1>
    <h3 class="pb-3">Página de prueba</h3>
<?php
}
}
/* {/block 'titulo'} */
/* {block 'main'} */
class Block_2575435805cf47ed93d7722_65708699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_2575435805cf47ed93d7722_65708699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>
        Contenido principal Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis illo ipsam vero, delectus
        minima ipsum odit deleniti sit? Quam nisi dolor corporis error eos adipisci sint molestiae laboriosam recusandae?
        Aspernatur!
    </p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet modi deleniti esse quisquam possimus quo, omnis et
        a exercitationem eum! Neque reprehenderit nulla ea eaque laboriosam? Accusamus vero odio ipsam!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nesciunt non sequi nemo facilis voluptate hic quas
        labore laborum at totam sint reprehenderit aliquid, aliquam omnis voluptatem dignissimos blanditiis expedita!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi enim ipsam voluptates provident repudiandae impedit
        officiis. Dicta maiores ratione provident, debitis odit, ea, aperiam blanditiis numquam accusamus recusandae eveniet
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptatem a dolor voluptatum temporibus nemo.
        Fugiat labore soluta consequatur optio, a sed consectetur eius quisquam dolorem suscipit, eveniet tempora earum!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, repellat quibusdam perspiciatis asperiores
        laudantium consequuntur magni non quidem omnis magnam aspernatur? Sequi architecto ducimus ab eveniet deleniti,
        voluptatum aut.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro modi molestiae alias tenetur vel, soluta laudantium
        assumenda labore quas quo, doloribus quasi similique suscipit voluptatibus iusto, dolorum cum accusamus cumque.
    </p>
<?php
}
}
/* {/block 'main'} */
/* {block "after"} */
class Block_12144746335cf47ed93d8134_80794492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_12144746335cf47ed93d8134_80794492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="closter">
        <div class="container">
            <h3>Otra Sección con Closter</h3>

            <div class="row justify-content-between">
                <div class="item col-3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/storage/icons/fondo-textura-lino.jpg" alt="">
                </div>

                <div class="item col-3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/storage/icons/fondo-textura-lino.jpg" alt="">
                </div>

                <div class="item col-3">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/storage/icons/fondo-textura-lino.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block "after"} */
}
