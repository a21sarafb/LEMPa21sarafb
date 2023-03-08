<?php
/* Smarty version 4.2.1, created on 2023-03-08 13:56:23
  from '/var/www/html/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640885f7a8c5a6_52238084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2ec845035306bd0a8acd0c8f1f744850894226' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/index.tpl',
      1 => 1671894450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640885f7a8c5a6_52238084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_621656334640885f7a8a5e1_53662702', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1908750044640885f7a8aa80_81621157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1246699277640885f7a8b547_14738105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1822328669640885f7a8b1b3_00493110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1246699277640885f7a8b547_14738105', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_621656334640885f7a8a5e1_53662702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_621656334640885f7a8a5e1_53662702',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1908750044640885f7a8aa80_81621157',
  ),
  'page_content' => 
  array (
    0 => 'Block_1822328669640885f7a8b1b3_00493110',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1246699277640885f7a8b547_14738105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1908750044640885f7a8aa80_81621157', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1822328669640885f7a8b1b3_00493110', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
