<?php 
$pessoas = array(
    ["Nome","Idade","Cidade"],
    ["Guto",39,"Santa Bárbara"],
    ["Bárbara",28,"Americana"]
);

$arquivo = fopen("dados.csv", "a+");

foreach ($pessoas as $uma_pessoa) { 
    fputcsv($arquivo,$uma_pessoa,";");
}

fclose($arquivo);
?>