<?php

$alunos = array(
    array(
        "nome"=>"Felipe",
        "idade"=>16,
        "cursos"=>array(
            array(
                "nome"=>"PHP"
            ),
            array(
                "nome"=>"JS"
            )
        )
    ),
    array(
        "nome"=>"Cleyton",
        "idade"=>18,
        "cursos"=>array(
            array(
                "nome"=>"HTML"
            ),
            array(
                "nome"=>"JS"
            ),
            array(
                "nome"=>"CSS"
            ),
            array(
                "nome"=>"PHP"
            )
        )
    )
);

echo json_encode($alunos); 