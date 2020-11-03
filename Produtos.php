<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";
$conn = mysqli_connect($servername,$username,$password,$database);
  if(!$conn){
      die("A conexão falhou".mysqli_connect_error());
  }
$sql = "select * from produtos";
$result = $conn->query($sql);
 if($result->num_rows > 0 ){
     while($rows = $result ->fetch_assoc()){
        

     }
 }else{
     echo "Nenhum produto cadastrado!";
 }

?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    
</head>

<body>

    <!--MENU-->
<?php
include('menu.html');

?>

    <hr>
   
   <main id="main-produto"> 
    <div class="filtro">
        <h3><font face="arial">Categorias</font></h3>
        <ul>
            <li onclick="exibir_todos()"> Todos (9) </li>

            <li onclick="exibir_categoria('geladeira')">Geladeiras (2)</li>
            <li onclick="exibir_categoria('fogoes')">Fogões (2)</li>
            <li onclick="exibir_categoria('microondas')">Micro-ondas (2)</li>
            <li onclick="exibir_categoria('lavaloucas')">Lava-louças (2)</li>
            <li onclick="exibir_categoria('lavaeseca')">Lava e seca (1)</li>
        </ul>

       </div>

            <div class="produto">
                <div id="geladeira" class="boxproduto" style="display:block;">
                <img src="./imagem/refrigerador-panasonic.webp" onclick="destaque(this)">
                <br>
                <p class="nome">Refrigerador Panasonic NR-BB53GV3B Frost Free com Porta de Vidro Preto - 425L</p>
                <hr>
                <p class="descricao"><strike>R$ 4.999,00</strike></p>
                <p class="preco">R$4.679,00</p>
                </div>

                
                <div id="geladeira"  class="boxproduto" style="display:block;">
                <img src="./imagem/geladeirainverter.webp" width="120px" onclick="destaque(this)">
                <br>
                <p class="no.e">Geladeira Inverter Frost Free Smart French Door Family Hub com Twin Cooling Plus™ RF265BEAESG 582L Black Inox</p>
                <hr>
                <p class="descricao"><strike>R$ 23.869,00</strike></p>
                <p class="preco">R$ 20.272,05</p>
                </div>
                
                <div id="fogao"  class="boxproduto" style="display:block;">
                <img  src="./imagem/fogao4bocas.jpg" width="120px" onclick="destaque(this)">
                <br>
                <p class="nome">Fogão 4 Bocas Consul CFO4VAR com Mesa em Vidro - Inox</p>
                <hr>
                <pclass="descricao"><strike>R$ 1.399,00</strike></p>
                <p class="preco">R$ 1.269,00</p>
                </div>

                
                <div id="fogao" class="boxproduto" style="display:block;" onclick="destaque(this)">
                <img src="./imagem/fogaodepiso.webp" width="120px">
                <br>
                <p class="nome">Fogão 5 Bocas Electrolux Prata Automático com Mesa de Vidro e Tripla Chama"</p>
                <hr>
                <p class="descricao"><strike>R$ 2.500,00</strike></p>
                <p class="preco">R$ 2.099,00</p>
                </div>
                  
                
                <div id="microondas" class="boxproduto" style="display:block;" onclick="destaque(this)">
                <img src="./imagem/microondaseletrolux.webp" width="120px">
                <br>
                <p class="nome">Forno de Micro-ondas Electrolux ME41X com Painel Blue Touch 31 Litros</p>
                <hr>
                <p class="descricao"><strike>R$ 1.259,00</strike></p>
                <p class="preco">R$ 999,00</p>
                </div>
                                  
                
                <div id="microondas" class="boxproduto" style="display:block;" onclick="destaque(this)">
                <img src="./imagem/microondaspanasonic.webp" width="120px">
                <br>
                <p class="nome">Micro-ondas Panasonic Style Grill, 1000W, 30 Litros, Inox - NNGT68HSRU</p>
                <hr>
                <p class="descricao"><strike>R$ 829,00</strike></p>
                <p class="preco">R$ 746,10</p>
                </div>

                
                <div id="lavalouca" class="boxproduto" style="display:block;" onclick="destaque(this)">
                <img src="./imagem/lavalouca.webp" width="120px">
                <br>
                <p class="nome">Lava Louças 14 Serviços Brastemp com Ciclo Pesado - BLF14AR</p>
                <hr>
                <p class="descricao"><strike>R$ 5.299,00</strike></p>
                <p class="preco">R$ 3.798,00</p>
                </div>

                
                <div id="lavalouca" class="boxproduto" style="display:block;" onclick="destaque(this)">
                <img src="./imagem/lavalouca8serviços.jpg" width="120px">
                <br>
                <p class="nome">Lava-louças Brastemp BLF08AS Ative! 8 Serviços - Prata</p>
                <hr>
                <p class="descricao"><strike>R$ 2.159,00</strike></p>
                <p class="preco">R$ 1.999,00</p>
                </div>
                 
                
                <div id="lavaeseca" class="boxproduto" style="display:block;" onclick="destaque(this)">
                <img src="./imagem/lava e seca.webp" width="120px">
                <br>
                <p class="nome">Lava e Seca Samsung WD4000 com Ecobubble™ e Lavagem a Seco WD11M4453JX Inox Look - 11kg</p>
                <hr>
                <p class="descricao"><strike>R$ 4.359,00</strike></p>
                <p class="preco">R$ 3.799,05</p>
                </div>
                
                </div>
                
            </main>
                
                
 
   



            
  
           
          <footer>
              <center>
            <h4 id="formasdepagamento">Formas de Pagamento</h4>
            <img src="./imagem/formadepagamento.jpg" width="300" alt="formas de pagamento">
            </center>
            <center><font face="arial" size="2" color="#C0C0C0">&copy;Thamiris Silva</font></center>
        </footer>
        <script src="funcoes.js"></script>
</body>
</html>