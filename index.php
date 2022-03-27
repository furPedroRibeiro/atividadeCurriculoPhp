<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beazika esteve aqui</title>
</head>
<body>
    <div class="divForm">
        <br>
        <center><span style="font-size: 22px;">Faça seu currículo :p</span></center>
        <br>
        <form action="" method="POST">
            <span>Nome:</span>
            <br><br>
            <input type="text" name="name" id="name" placeholder="Digite seu nome completo:" class="input">
            <br><br>
            <span>Data de nascimento:</span>
            <br><br>
            <input class="input" type="date" name="dataNasc" id="dataNasc">
            <br><br>
            <span>Experiência:</span>
            <br><br>
            <textarea class="input" name="experience" id="experience" cols="30" rows="10"></textarea>
            <br><br>
            <span>Responsabilidades:</span>
            <br><br>
            <textarea class="input" name="responsabilidades" id="responsabilidades" cols="30" rows="10"></textarea>
            <br><br>
            <span>Conquistas:</span>
            <br><br>
            <textarea class="input" name="conquistas" id="conquistas" cols="30" rows="10"></textarea>
            <br><br>
            <span>Idiomas:</span>
            <select name="idioma" id="idioma">
                <option value="Língua nativa">Apenas língua nativa</option>
                <option value="Língua nativa e mais uma">Língua nativa e +1</option>
                <option value="Língua nativa e mais duas">Língua nativa e +2</option>
            </select>
            <br><br>
            <span>Cursos e habilidades:</span>
            <br><br>
            <textarea class="input" name="cursesHabilityes" id="cursesHabilityes" cols="30" rows="10"></textarea>
            <br><br>
            <span>Formação acadêmica:</span>
            <select name="formacao" id="formacao">
                <option value="Primeiro grau">Primeiro grau</option>
                <option value="Segundo grau">Segundo grau</option>
                <option value="Pós-graduação">Pós-graduação</option>
                <option value="Mestrado">Mestrado</option>
                <option value="Doutorado">Doutorado</option>
            </select>
            <br><br>
            <span>Telefone:</span>
            <br><br>
            <input class="input" type="number" name="telefone" id="telefone" placeholder="Telefone com DDD">
            <br><br>
            <span>E-mail:</span>
            <br><br>
            <input class="input" type="email" name="email" id="email" placeholder="Digite seu email:">
            <br><br>
            <span>Texto adicional:</span>
            <br><br>
            <textarea class="input" name="adicionalText" id="adicionalText" cols="30" rows="10"></textarea>
            <br><br>
            <span>Selecione uma foto:</span>
            <br><br>
            <label for="inputFile" id="labelFile">Selecionar foto</label>
            <input class="input" type="file" name="inputFile" id="inputFile" accept="image/png, image/jpeg, image/jpg">
            <br><br>
            <button id="button" onclick="enviar()">Enviar</button>
        </form>
        <br>
        <br>
        <br>
    </div>
    <?php
        if($_POST['name']){
        $name = $_POST['name'];
        $dataNasc = $_POST['dataNasc'];
        $experience = $_POST['experience'];
        $responsabilidades = $_POST['responsabilidades'];
        $conquistas = $_POST['conquistas'];
        $idioma = $_POST['idioma'];
        $cursesHabilityes =$_POST['cursesHabilityes'];
        $formacao = $_POST['formacao'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $adicionalText = $_POST['adicionalText'];
        $Anton = "Anton";
        $RedHatText = "Red Hat Text";

        echo ('<!DOCTYPE html>
        <html lang="pt-br">
          <head>
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
              href="https://fonts.googleapis.com/css2?family=Anton&display=swap"
              rel="stylesheet"
            />
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>teste da beazika</title>
            <style>
              * {
                margin: 0;
              }
              .divCurriculo {
                margin-left: 25vw;
                height: 110vh;
                width: 53vw;
                border: 1px solid #ca72e0;
              }
              .headerCurriculo {
                width: 53vw;
                height: 5vh;
                background-color: rgb(161, 93, 224);
              }
              .nome {
                padding-top: 0.5vh;
              }
              .title {
                font-family: '.$Anton.', sans-serif;
                font-size: 25px;
                margin-left: 3vw;
                color: black;
              }
              .bodyOne {
                margin-top: 0.6vh;
                width: 40vw;
                height: 105vh;
                background-color: whitesmoke;
              }
              .bodyTwo {
                margin-top: -105vh;
                margin-left: 40vw;
                width: 13vw;
                height: 105vh;
                background-color: #ca72e0;
              }
              #img {
                margin-left: 3vw;
                margin-top: 1.5vh;
                width: 7vw;
                height: 15vh;
                border: 1px solid rgb(161, 93, 224);
              }
              .textBodyTwo {
                font-family: '.$RedHatText.', sans-serif;
                margin-left: 0.5vw;
                color: black;
              }
              .textBody {
                font-family: '.$RedHatText.', sans-serif;
                margin-left: 3vw;
                color: black;
              }
            </style>
          </head>
          <body>
            <br>
            <br>
            <div class="divCurriculo">
              <div class="headerCurriculo">
                <div class="nome">
                  <span class="title">'.$name.' </span>
                </div>
                <div class="bodyOne">
                  <br />
                  <span class="title nome">Experiência</span>
                  <br />
                  <br />
                  <p class="textBody">'.$experience.'</p>
                  <br />
                  <br />
                  <span class="title">Responsabilidades</span>
                  <br />
                  <br />
                  <p class="textBody">
                      
                    </p>
                  <br />
                  <br />
                  <span class="title">Conquistas</span>
                  <br />
                  <br />
                  <p class="textBody"
                    ></p>
                  <br />
                  <br />
                  <span class="title">Idiomas</span>
                  <br />
                  <br />
                  <p class="textBody">'.$idioma.'</p>
                  <br />
                  <br />
                  <span class="title">Cursos e habilidades</span>
                  <br />
                  <br />
                  <p class="textBody"
                    >'.$cursesHabilityes.'</p>
                  <br />
                  <br />
                  <span class="title">Formação acadêmica</span>
                  <br />
                  <br />
                  <p class="textBody">'.$formacao.'</p>
                  <br />
                  <br />
                  <span class="title">Adicional</span>
                  <br />
                  <br />
                  <p class="textBody">'.$adicionalText.'</p>
                  <br />
                  <br />
                </div>
                <div class="bodyTwo">
                  <img src="img/imagem.jpg" alt="" id="img" />
                  <br /><br />
                  <p class="textBodyTwo"> Data de nascimento: </p>
                  <br />
                  <br />
                  <span class="textBodyTwo">'.$dataNasc.' </p>
                  <br />
                  <br />
                  <p class="textBodyTwo"> Telefone: </p>
                  <br />
                  <br />
                  <p class="textBodyTwo">'.$telefone.'</p>
                  <br />
                  <br />
                  <p class="textBodyTwo">E-mail:</p>
                  <br />
                  <br />
                  <p class="textBodyTwo">'.$email.' </p>
                </div>
              </div>
            </div>
          </body>
        </html>');
            } else{
                echo '<script>alert("Formulário não foi preenchido ainda");</script>';
            }
    ?>
</body>
</html>