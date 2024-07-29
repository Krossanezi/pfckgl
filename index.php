<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teste.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" type="img" href="img/EconoIF (1).png" />
   
    <title>EconoIF</title>
</head>
<body>
    <header>    
        <nav>

            <div class="logo">
                <a href="index.html"> EconoIF </a>
            </div>
    
            <ul>
                <li> <a href="nos.html"> Quem somos? </a> </li>
                <li><a href="teste.html">Página Inicial</a></li>
            </ul>
    
        </div>
    <br><br>
        </nav>
        <div class="flex gap-1 items-center">
            
        <?php
        if(!empty($_SESSION['ARTESDB_SESSION'])) {
           if($_SESSION['ARTESDB_SESSION']['logado']) {
          echo "
          <div id='p-login'></div>
          <button class='bg-gray-200 dark:bg-gray-900 dark:text-white p-2 rounded flex flex-row gap-2 items-center'>Olá, " . $usuario[0]['nome'] . "<br/><a href='./php/deslogar.php' class=' px-2 py-1 text-white bg-red-600 rounded-md hover:underline'>Deslogar</a></button>" . PHP_EOL;
        }   
      }
        ?>
        <i class=" trocartema !flex items-center fa-solid fa-sun fa-xl px-5 text-sky-900 align-middle rounded cursor-pointer dark:text-white" onclick="javascript:trocarTema();"></i>
        <i class=" flex p-3 fa fa-bars fa-xl cursor-pointer dark:text-white" onclick="javascript:abrirOffCanvas();"></i>
      </div>
    </ul>
</header>
<section class="banner">
        <div class="texto">
           <h1 class="titulo"></h1>
           <h2 class="sub_titulo"></h2>
           <div class="botoes">
            <figure><img src="img/econoif2.png"/></figure>
             <a href="sobre.html"> <button class="overlay">Sobre o EconoIF</button></a> 
               <a href="parceiros.html"><button class="overlay">Seja um Parceiro</button> </a>
           </div>
        </div>
    </section>
</body>
</html>