<?php 

include("Flores.php");
include("Margarida.php");
include("Lirio.php");
include("Plumeria.php");
include("Girassol.php");
include("Tulipa.php");


$margarida = new Margarida("Totó", "Vira-lata", 3, "Caramelo");
$lirio = new Lirio("Mingau", "Vira-lata", 2, "Branco");
$plumeria = new Plumeria("Tartaruga", "Jabuti", 100, "Verde");
$girassol = new Girassol("Girassol", "Helianthus annuus", " suave e leve", "média", "ensolarado", "suvinil");
$tulipa = new Tulipa("Leticia", "Python", 5, "Preto");

echo "Nome: " . $margarida->getNome() . " <br>";
echo "Espécie: " . $margarida->getEspecie() . " <br>";
echo "Aroma: " . $margarida->getAroma() . " <br>";
echo "Tamanho: " . $margarida->getTamanho() . " <br>";
echo "Ambiente: " . $margarida->getAmbiente() . " <br>";
echo "Cor: " . $margarida->getCor() . " <br>";

echo "<hr>";

echo "Nome: " . $lirio->getNome() . " <br>";
echo "Espécie: " . $lirio->getEspecie() . " <br>";
echo "Aroma: " . $lirio->getAroma() . " <br>";
echo "Tamanho: " . $lirio->getTamanho() . " <br>";
echo "Ambiente: " . $lirio->getAmbiente() . " <br>";
echo "Cor: " . $lirio->getCor() . " <br>";

echo "<hr>";

echo "Nome: " . $plumeria->getNome() . " <br>";
echo "Espécie: " . $plumeria->getEspecie() . " <br>";
echo "Aroma: " . $plumeria->getAroma() . " <br>";
echo "Tamanho: " . $plumeria->getTamanho() . " <br>";
echo "Ambiente: " . $plumeria->getAmbiente() . " <br>";
echo "Cor: " . $plumeria->getCor() . " <br>";

echo "<hr>";

echo "Nome: " . $girassol->getNome() . " <br>";
echo "Espécie: " . $girassol->getEspecie() . " <br>";
echo "Aroma: " . $girassol->getAroma() . " <br>";
echo "Tamanho: " . $girassol->getTamanho() . " <br>";
echo "Ambiente: " . $girassol->getAmbiente() . " <br>";
echo "Cor: " . $girassol->getCor() . " <br>";

echo "<hr>";

echo "Nome: " . $tulipa->getNome() . " <br>";
echo "Espécie: " . $tulipa->getEspecie() . " <br>";
echo "Aroma: " . $tulipa->getAroma() . " <br>";
echo "Tamanho: " . $tulipa->getTamanho() . " <br>";
echo "Ambiente: " . $tulipa->getAmbiente() . " <br>";
echo "Cor: " . $tulipa->getCor() . " <br>";