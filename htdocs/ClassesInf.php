<?php

Class aluno
{
    private $pdo;
    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

    }
    public function enviardados($nome, $nasc, $turma, $notac, $notap, $indica, $apto, $trampo, $coment){
        global $pdo;
        $sql = $pdo->prepare("INSERT INTO alunos (nome, nasc, turma, avaliacurso, avaliaprof, indica, apto, trampo, coment) VALUES (:nome, :nasc, :turma, :avaliacurso, :avaliaprof, :indica, :apto, :trampo, :coment)");
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":nasc",$nasc);
        $sql->bindValue(":turma",$turma);
        $sql->bindValue(":avaliacurso",$notac);
        $sql->bindValue(":avaliaprof",$notap);
        $sql->bindValue(":indica",$indica);
        $sql->bindValue(":apto",$apto);
        $sql->bindValue(":trampo",$trampo);
        $sql->bindValue(":coment",$coment);
        $sql->execute();
        return true;

    }
}
?>