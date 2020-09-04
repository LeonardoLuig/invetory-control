<?php

    require "controleEstoque.php";

    class ComprarEstoque extends Produtos{

        public function __getComprar($produto, $comprar, $array){

            if(is_numeric($comprar)){
                if($array[$produto] >= $comprar){
                    $array[$produto] -= $comprar;
                    echo $produto.': '.$array[$produto];
                }else{
                    //echo '<span style="color: red;">Impossivel comprar, a quantidade pedida está acima da quantidade armazenada no estoque</span>';
                    header('Location: frontEstoque.php?compra=no');
                }
            }else{
                //echo '<span style="color: red;">O valor digitado não é um número!</span>';
                header('Location: frontEstoque.php?is_numeric=no');
            }
        }

    }

    $produtos = new Produtos();
    $produto = $_POST['produtos'];

    $compra = new ComprarEstoque();
    $comprar = $_POST['comprar'];
    $compra->__getComprar($produto, $comprar, $produtos->array);

?>