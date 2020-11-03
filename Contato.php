<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";
$conn = mysqli_connect($servername,$username,$password,$database);
  if(!$conn){
      die("A conexão falhou".mysqli_connect_error());
  }

  if(isset ($_POST['nome']) && isset($_POST['msg'])){
      $nome = $_POST['nome'];
      $msg = $_POST['msg'];
    
      $sql= "insert into comentarios (nome,msg) values('$nome','$msg')";
      $result = $conn->query($sql);



      $sql = "select * from comentarios";
$result = $conn->query($sql);

 if($result->num_rows > 0 ){
     while($rows = $result ->fetch_assoc()){
         echo "data:", $rows['data'],"<br>";
         echo "nome:", $rows['nome'],"<br>";
         echo "mensagem", $rows['msg'],"<br>";
        

     }
 }else{
     echo "Nenhum comentarios ainda!";
 }
  }

?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
</head>

<body>

    <!--MENU-->

    <?php
include('menu.html');

?>
    
        <h2>Contato</h2>
        <hr>
       

        <table border="0" witdh="50%" cellpadding="20">
        <tr>
            <td width="10%" aling="center">
                <img src="./imagem/Logonovo.png" witdh="10px"><br>
                <font face="arial" size="4">contato@fullstackeletro.com</font>
            </td>
           
            <td width="10%" align="center">
                <img src="./imagem/Whastnovo.png" witdh="50px"><br>
                <font face="arial" size="4">(21)4444-4444</font>

            </td>
        </tr>
 
        </table>

        <form>
            <h4>Nome:</h4>
            <input type="text">
            <h4>Mensagem:</h4>
            <textarea></textarea>
            <br>

            <input type="submit" value="Enviar">

        </form>

    <br><br><br><br><br>
    <br><br><br><br>

  
    <footer>
        <center>
        <h4 id="formasdepagamento">Formas de Pagamento</h4>
        <img src="./imagem/formadepagamento.jpg" width="300" alt="formas de pagamento">
        </center>
        <center><font size="2" color="#C0C0C0">&copy;Thamiris Silva</font></center>
    </footer>

</body>
</html>