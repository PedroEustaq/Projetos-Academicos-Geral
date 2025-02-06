<html>
    <head>
        <meta charset="UTF-8">
        <title>Programa Principal</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Funcionario.php';
        require_once 'Professor.php';
        
        $P1 = new Pessoa();
        $P2 = new Aluno();
        $P3 = new Funcionario();
        $P4 = new Professor();
        $P1->setNome("Pedroca");
        $P1->setSexo("Masc");
        $P2->setNome("Jorgin");
        $P2->cancelarMatr();
        $P3->mudarTrabalho();
        print_r($P1);
        ?>
</pre>
    </body>
</html>
