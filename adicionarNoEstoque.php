<?php

    require "controleEstoque.php";

    class AdicionarEstoque extends Produtos{

        public function __getAdicinar($produto, $adicionar, $array){
            if(is_numeric($adicionar)){
                $array[$produto] += $adicionar;
                echo 'Produto adicionado ->'.$produto.': '.$array[$produto];
            }else{
                //echo '<span style="color: red;">O valor digitado não é um número!</span>';
                header('Location: adicionarEstoque.php?is_numeric=no');
            }
        }
    }

    $produtos = new Produtos();
    $produto = $_POST['produtos'];

    $add = new AdicionarEstoque();
    $adicionar = $_POST['adicionar'];
    $add->__getAdicinar($produto, $adicionar, $produtos->array);

?>