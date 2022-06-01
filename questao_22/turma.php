<?php
    $alunos[0]["nome"] = "Ana";
    $alunos[0]["nota"] = "7.2";
    $alunos[0]["sexo"] = "f";
    $alunos[1]["nome"] = "Aninha";
    $alunos[1]["nota"] = "5.5";
    $alunos[1]["sexo"] = "f";
    $alunos[2]["nome"] = "Zezinho";
    $alunos[2]["nota"] = "4.8";
    $alunos[2]["sexo"] = "m";
    $alunos[3]["nome"] = "Paula";
    $alunos[3]["nota"] = "4.5";
    $alunos[3]["sexo"] = "f";
    $alunos[4]["nome"] = "Joao";
    $alunos[4]["nota"] = "9.8";
    $alunos[4]["sexo"] = "m";

    foreach($alunos as $aluno){
            if($aluno["nota"]){
                $nota = floatval($aluno["nota"]);
                $qtd = count($nota);
            }
         }
?>