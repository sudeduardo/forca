<?php
include 'config.php';
$c= new Controller();
$c->index();
   ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Forca</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Jogo da Forca</a>
      <ul class="right hide-on-med-and-down">
          <li><a href="jogar.php">Jogar</a></li> 
          <li><a href="estatistica.php">Estaticas</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
          <li><a href="jogar.php">Jogar</a></li> 
          <li><a href="estatistica.php">Estaticas</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    <div class="row">
  <div class="section no-pad-bot" id="index-banner">
      
      <div class="col s4">
        <div class="container">
            
            <div id="base_cima"></div>
            <div id="haste">
                <div id="haste_abaixo"></div>   
                <div id="corpo">
                    <?php
                    if(isset($_SESSION['letra'])){
                     $acertos=0;
                  $palavra=$_SESSION["palavra"]['palavra'];
                $palavra=  str_split($palavra);
                $letra= $_SESSION['letra'];
        $exibir=array();
for ($index = 0; $index < count($palavra); $index++) {
  $exibir[$index]="__" ;
}

for ($index1 = 0; $index1 < count($palavra); $index1++) {
    for ($index2 = 0; $index2 < count($letra); $index2++) {
        if($palavra[$index1]===$letra[$index2]){
            $acertos=$acertos+1;
        }
    }
}                   
                   $erros= count($_SESSION['letra'])-$acertos;
                   if($erros>=8){
                       session_destroy();
                   
                    } } else {
$acertos=0;
$erros=0;    
}
                    if($erros==0){
                    echo "<div id='corte' style='display:none' >;
                    <div id='corte1' style='display:none'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' style='display:none'></div>
                    <div id='bracos'>
                    <div id='braco_esq' style='display:none'></div>
                    <div id='braco_dir' style='display:none'></div>
                    </div>
                     <div id='haste_corpo' style='display:none'></div>
                     <div id='pernas'>
                     <div id='perna_esq' style='display:none'>
                     </div><div id='perna_dir' style='display:none'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==1){
                        echo "<div id='corte' style='display:none' >;
                    <div id='corte1' style='display:none'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq' style='display:none'></div>
                    <div id='braco_dir' style='display:none'></div>
                    </div>
                     <div id='haste_corpo' style='display:none'></div>
                     <div id='pernas'>
                     <div id='perna_esq' style='display:none'>
                     </div><div id='perna_dir' style='display:none'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==2){
                        echo "<div id='corte' style='display:none' >;
                    <div id='corte1' style='display:none'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq'></div>
                    <div id='braco_dir' style='display:none'></div>
                    </div>
                     <div id='haste_corpo' style='display:none'></div>
                     <div id='pernas'>
                     <div id='perna_esq' style='display:none'>
                     </div><div id='perna_dir' style='display:none'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==3){
                        echo "<div id='corte' style='display:none' >;
                    <div id='corte1' style='display:none'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq'></div>
                    <div id='braco_dir'></div>
                    </div>
                     <div id='haste_corpo' style='display:none'></div>
                     <div id='pernas'>
                     <div id='perna_esq' style='display:none'>
                     </div><div id='perna_dir' style='display:none'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==4){
                        echo "<div id='corte' style='display:none' >;
                    <div id='corte1' style='display:none'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq'></div>
                    <div id='braco_dir'></div>
                    </div>
                     <div id='haste_corpo' ></div>
                     <div id='pernas'>
                     <div id='perna_esq' style='display:none'>
                     </div><div id='perna_dir' style='display:none'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==5){
                        echo "<div id='corte' style='display:none' >;
                    <div id='corte1' style='display:none'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq'></div>
                    <div id='braco_dir'></div>
                    </div>
                     <div id='haste_corpo' ></div>
                     <div id='pernas'>
                     <div id='perna_esq'>
                     </div><div id='perna_dir' style='display:none'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==6){
                        echo "<div id='corte' style='display:none' >;
                    <div id='corte1' style='display:none'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq'></div>
                    <div id='braco_dir'></div>
                    </div>
                     <div id='haste_corpo' ></div>
                     <div id='pernas'>
                     <div id='perna_esq'>
                     </div><div id='perna_dir'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==7){
                        echo "<div id='corte' >
                    <div id='corte1'></div>
                    <div id='corte2' style='display:none'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq'></div>
                    <div id='braco_dir'></div>
                    </div>
                     <div id='haste_corpo' ></div>
                     <div id='pernas'>
                     <div id='perna_esq'>
                     </div><div id='perna_dir'>
                     </div>
                     </div>
                    </div>";
                    }elseif($erros==8){
                        echo "<div id='corte' >
                    <div id='corte1'></div>
                    <div id='corte2'></div>
                    </div>
                    <div id='cabeca' ></div>
                    <div id='bracos'>
                    <div id='braco_esq'></div>
                    <div id='braco_dir'></div>
                    </div>
                     <div id='haste_corpo' ></div>
                     <div id='pernas'>
                     <div id='perna_esq'>
                     </div><div id='perna_dir'>
                     </div>
                     </div>
                    </div>";
                    }
                    if(isset($_GET['jogar'])){
    $nome=$_GET['nome'];
    $palavra1=$_SESSION["palavra"]['palavra'];
   session_destroy();
 $a= new Forca();
 $a->Pontucao($nome, $acertos, $erros, $palavra1);
header("Location:jogar.php");  
}elseif (isset($_POST['jogar'])) {
     session_destroy();
     header("Location:jogar.php"); 
}
                    
                    ?>
                    
               
                </div>
            </div>
            <div id="base"></div>
        </div>
        </div>
       <div class="col s8">
    <div class="container">
        <div class="row center">
            <div class="col s12">
            <h4 >Pontuação</h4>
            <h5>Acertos</h5>
            <h6><?php echo $acertos;?></h6>
            <h5>Erros</h5>
             <h6><?php echo $erros;?></h6>
            </div>
            
          
        </div>
 
        <div id="palavra" class="left-align">
         <?php
          $exibir=array();
for ($index = 0; $index < count(str_split($_SESSION["palavra"]['palavra'])); $index++) {
  $exibir[$index]="_ " ;
}
          echo "<br>";
          if(isset($_SESSION['letra'])){
                $palavra=$_SESSION["palavra"]['palavra'];
                $palavra=  str_split($palavra);
                $letra= $_SESSION['letra'];
       

for ($index1 = 0; $index1 < count($palavra); $index1++) {
    for ($index2 = 0; $index2 < count($letra); $index2++) {
        if($palavra[$index1]===$letra[$index2]){
            $exibir[$index1]=$palavra[$index1];
        }
    }
}
         
                
                
          }
                      
              echo "<h3>";
for($i=0;$i<count($exibir);$i++){
    echo $exibir[$i]." ";
}
echo "</h3>";         
                
          
                
               

         ?>
            
            
        </div>
    </div>
  </div>
  </div>
  </div>

        
 
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s10 m6">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">create</i></h2>
            <h5 class="center">Dicas</h5>

            <div class="light"><?php foreach ($_SESSION['dicas'] as $value){
                echo "<p class='flow-text center valign'>".$value['dica']."</p>";
                
            }?></div>
          </div>
        </div>

        <div class="col s10 m6">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">sort_by_alpha</i></h2>
            <br>
            <?php if($acertos== count(str_split($_SESSION["palavra"]['palavra']))){
        
            
                  echo '<form class="col s12 center" method="GET">
                      <h4>Veja seu resultado em Estatiscas</h4>
                      <h6>Nome</h6><br>
                        <input id="letra" name="nome" type="text" required class="validate">'.'<h3  class="light flow-text center valign" >Você Ganhou!<br> <button class="btn-large waves-effect waves-light orange" type="submit" name="jogar" >Jogar novamente?</button></h3>'.
                 '</form>';
                 
                          
                             
                     }elseif ($erros>=8) {
                        echo '<form class="col s12 center" method="POST"><h3  class="light flow-text center valign" >Você Perdeu!<br> <button class="btn-large waves-effect waves-light orange" type="submit" name="jogar" >Jogar novamente?</button></h3>'.
                 '</form>';  
                         
                     }else{
                         echo ' <div class="row">
      <form class="col s12 center" method="POST">
          <input id="letra" name="letra" type="text" maxlength="1"   class="validate"><br><br>
          <button class="waves-effect waves-light btn" id="jogar" type="submit">Jogar</button>
  
    </form>  <br>';
                     }
                     
                     ?>
            
            <h5 class="center">Letras</h5>
 
  </div>
            <div class="light flow-text center valign"><?php
            if(isset($_SESSION['letra'])){
                foreach ( $_SESSION['letra'] as  $valores) {
                     echo $valores." ";
                }
            }
                     
          
            ?></div>
          </div>
        </div>

      </div>

    </div>
    <br><br>

    <div class="section">


  </div>
     




  <!--  Scripts-->

  <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="js/materialize.js" type="text/javascript" ></script>
  <script src="js/init.js" type="text/javascript" ></script>

  </body>
</html>
