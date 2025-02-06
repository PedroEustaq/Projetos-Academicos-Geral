<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Final</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        $v[0] = new Video("aula 1 de poo");
        $v[1] = new Video("aula 2 de poo");
        $v[2] = new Video("aula 3 de poo");
        $v[3] = new Video("aula 4 de poo");
        
        print_r($v);
        
        $gafa = new Gafanhoto("LucasGameplay","Jorge",25, "M");
        
        $view = new Visualizacao($gafa,$v[0]);
        $v[0]->setReproduzindo(true);
        print_r($view);
        $view->avaliarPadrao();
        $view->avaliarPadrao();
        $view->avaliarPadrao();
        $view->avaliarPadrao();
        $view->avaliarPadrao();
        $view->avaliarNota(87);
         $view->avaliarPorc(87);
        
        print_r($view);
        print_r($gafa);
        ?>
</pre>
    </body>
</html>
