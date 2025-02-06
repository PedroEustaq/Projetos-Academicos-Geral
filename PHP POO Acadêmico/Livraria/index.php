<html>
    <head>
        <meta charset="UTF-8">
        <title>Livraria</title>
    </head>
    <body>
        
        <?php
        require_once 'Livro.php';
        require_once 'Pessoa.php';
        $P1 = new Pessoa("Jozezin",24,"M");
        $L1 = new Livro(
    "O Senhor dos Anéis",  // título
    "J.R.R. Tolkien",       // autor
    1200,                   // total de páginas
    350,                    // página atual
    true,                   // livro está aberto
    $P1       // leitor
);

        $L1->detalhes();
        $L1->folhear(3456);
        $L1->detalhes();
        ?>
    </body>
</html>
