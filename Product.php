<?php
class Product{
    private $nome_prodotto;
    private $prezzo_prodotto;
    private $genere_prodotto;

    public function __construct($_nome_prodotto,$_prezzo_prodotto,$_genere_prodotto){
        $this->nome = $_nome_prodotto ;
        $this->prezzo = $_prezzo_prodotto;
        $this->genere = $_genere_prodotto;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }

    public function getGenere(){
        return $this->genere;
    }
}

$product_1 = new Product("croccantini",20,"alimenti per animali");
$product_2 = new Product("guinzaglio",15,"oggetti per cani");
var_dump($product_2);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Prodotto: <?php echo $product_1->getNome()?></h2>
    <h3> Prezzo: <?php echo $product_1->getPrezzo()?> euro</h3>
    <h4>Genere Prodotto : <?php echo $product_1-> getGenere()?></h4>
</body>
</html>