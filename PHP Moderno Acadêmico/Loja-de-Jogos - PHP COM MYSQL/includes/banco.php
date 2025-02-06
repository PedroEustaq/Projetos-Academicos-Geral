<pre>
<?php 

$banco = new mysqli("localhost", "root", "","sitejogos");
if ($banco->connect_errno) {
    echo "<p> Encontrei um erro $banco->errno</p>";
    die();
}
$busca = $banco->query("select * from generos");
if (!$busca) {
    echo "Falha na busca";
} else {
    while ($reg = $busca->fetch_object()) {

    
}
}
function thumb($arq) {
    $caminho  = "fotos/$arq";
    if (is_null($arq) || !file_exists($caminho)) {
        return "fotos/indisponivel.png";
    } else {
        return $caminho;
    }
}
?>
</pre>