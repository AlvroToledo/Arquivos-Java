<?php
require_once 'ClassesInf.php';
$d = new aluno;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Avaliação do Curso Básico Informática</title>
    <link rel="shortcut icon" href="sicoob.png">
    <link rel="stylesheet" href="EstiloInfo.css">
</head>
<body>
<div  id="imagem1">
    <img class="img2" src="alvaro2.png"/><br/>
    <div class="img1"></div>
    <img  src="alvaro5.png"/><br/>
</div>
    <img  src="minion.png"/><br/>
<div id="corpo-form">
    <h1>Responda o questionário abaixo:</h1>
    <form action="ObrigadoInf.php" method="POST">
           Nome: <input type="text" required id="esseS" name="nome" placeholder="Digite seu nome" maxlength="50"><br/>
        <br/>
           Data de nascimento: <input required id="esseS" type="date" name="nasc"> <br/>
        <br/>
           Turma:
        <select required name="turma" id="esseSS">
            <option value="nada"class="opc">Selecione sua turma</option>
            <option value="Turma1"class="opc">Turma 1 (SEG e QUA - 07:30 às 08:30)</option>
            <option value="Turma2"class="opc">Turma 2 (SEG e QUA - 08:30 às 09:30)</option>
            <option value="Turma3"class="opc">Turma 3 (SEG e QUA - 09:30 às 10:30)</option>
            <option value="Turma4"class="opc">Turma 4 (SEG e QUA - 13:00 às 14:00)</option>
            <option value="Turma5"class="opc">Turma 5 (SEG e QUA - 14:00 às 15:00)</option>
            <option value="Turma6"class="opc">Turma 6 (SEG e QUA - 15:00 às 16:00)</option>
            <option value="Turma7"class="opc">Turma 7 (TER e QUI - 07:30 às 08:30)</option>
            <option value="Turma8"class="opc">Turma 8 (TER e QUI - 08:30 às 09:30)</option>
            <option value="Turma9"class="opc">Turma 9 (TER e QUI - 09:30 às 10:30)</option>
            <option value="Turm10"class="opc">Turma 10 (TER e QUI - 13:00 às 14:00)</option>
            <option value="Turm11"class="opc">Turma 11 (TER e QUI - 14:00 às 15:00)</option>
            <option value="Turm12"class="opc">Turma 12 (TER e QUI - 15:00 às 16:00)</option>
            <option value="Turm13"class="opc">Turma 13 (SEXTA - 07:30 às 09:30)</option>
            <option value="Turm14"class="opc">Turma 14 (SEXTA - 09:30 às 11:30)</option>
        </select> <br/>
        <br/>
        <div class="teste">
            <legend>   Qual a sua avaliação do curso?</legend>
            <div class="radio">
            <input required type="radio" name="notac" value="pessimo"/>
            <label>Péssimo</label><br/>
            <input type="radio" name="notac" value="ruim"/>
            <label>Ruim</label><br/>
            <input type="radio" name="notac" value="bom"/>
            <label>Bom</label><br/>
            <input type="radio" name="notac" value="muito bom"/>
            <label>Muito Bom</label><br/>
            <input type="radio" name="notac" value="excelente"/>
            <label>Excelente</label><br/>
        </div>
        </div><br/>
        <div id="escolhe" class="teste">
            <legend>   Qual a sua avaliação do professor?</legend>
            <div class="radio">
            <input required type="radio" name="notap" value="pessimo"/>
            <label>Péssimo</label><br/>
            <input type="radio" name="notap" value="ruim"/>
            <label>Ruim</label><br/>
            <input type="radio" name="notap" value="bom"/>
            <label>Bom</label><br/>
            <input type="radio" name="notap" value="muito bom"/>
            <label>Muito Bom</label><br/>
            <input type="radio" name="notap" value="excelente"/>
            <label>Excelente</label><br/>
            </div>
            </div><br/>
        <div class="teste">
            <legend>   Você indicaria o curso para outra pessoa fazer?</legend>
            <div class="radio">
            <input required type="radio" name="indica" value="S"/>
            <label for="S">Sim</label>
            <input type="radio" name="indica" value="N"/>
            <label for="N">Não</label>
            </div>
        </div><br/>
        <div class="teste">
            <legend>   Você se considera apto a utilizar: Windows, Word, Excel e PowerPoint?</legend>
            <div class="radio">
            <input required type="radio" name="apto" value="S"/>
            <label for="S">Sim</label>
            <input type="radio" name="apto" value="N"/>
            <label for="N">Não</label>
            </div>
        </div><br/>
        <div class="teste">
            <legend>Você gostaria de trabalhar no Sicoob Copermec?</legend>
            <div class="radio">
            <input required type="radio" name="trampo" value="S"/>
            <label for="S">Sim</label>
            <input type="radio" name="trampo" value="N"/>
            <label for="N">Não</label>
            </div>
        </div><br/>
        <input id="esseS" type="text" name="coment" placeholder="Faça um comentário sobre o instrutor do curso" maxlength="140" required>
        <br/>
        <br/><input id="esse" type="submit" value="Enviar minhas respostas" class="efeito">
    </form>
</div>
<span id="opcao_escolhida"></span>
<img id="minhaimagemM" src="minitriste.png"/>
<!--<img id="minhaimagemM" src="minifeliz.png"/>-->
<?php
if (isset($_POST['nome'])) {
    $nome = ($_POST['nome']);
    $nasc = ($_POST['nasc']);
    $turma = ($_POST['turma']);
    $notac = ($_POST['notac']);
    $notap = ($_POST['notap']);
    $indica = ($_POST['indica']);
    $trampo = ($_POST['trampo']);
    $coment = ($_POST['coment']);

    if (!empty($nome) && !empty($nasc) && !empty($nasc) && !empty($turma) && !empty($notac) && !empty($notap) && !empty($indica) && !empty($apto) && !empty($trampo && !empty($coment))) {
        $d->conectar("avaliacurso", "localhost", "root", "");
        $d->enviardados($nome, $nasc, $turma, $notac, $notap, $indica, $apto, $trampo, $coment);
        echo "Dados enviados com sucesso";
    } else {
        echo "Preencha todos os campos!";
    }

}

?>
<script>

    // executa as somente apos o carregamento total da pagina
    window.onload = function() {
        var opcao = document.getElementsByName('notap');

        // percorro os elementos (radiobuttons) e adiciono o evento de click
        opcao.forEach(function (item) {
            item.addEventListener('click', function () {


                if (this.value == 'excelente' || this.value == 'muito bom') {
                    // alterando a propriedade paga visivel
                    document.getElementById('minhaimagemM').style.display = 'block';
                    // trocando a imagem
                    document.getElementById('minhaimagemM').src = 'minifeliz.png';
                } else {
                    // alterando a propriedade paga visivel
                    document.getElementById('minhaimagemM').style.display = 'block';
                    // alterando a imagem
                    document.getElementById('minhaimagemM').src = 'minitriste.png';
                }
            })

        });
        var opcao1 = document.getElementsByName('notac');

        // percorro os elementos (radiobuttons) e adiciono o evento de click
        opcao1.forEach(function (item) {
            item.addEventListener('click', function () {
                console.log('notac ');
                if (this.value == 'excelente' || this.value == 'muito bom') {
                    // alterando a propriedade paga visivel
                    document.getElementById('minhaimagemM').style.display = 'block';
                    // trocando a imagem
                    document.getElementById('minhaimagemM').src = 'minifeliz.png';
                } else {
                    // alterando a propriedade paga visivel
                    document.getElementById('minhaimagemM').style.display = 'block';
                    // alterando a imagem
                    document.getElementById('minhaimagemM').src = 'minitriste.png';
                }
            })
        });
    };
</script>
</body>
</html>