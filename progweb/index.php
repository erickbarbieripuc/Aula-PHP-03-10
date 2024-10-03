<?php
    $pessoa[0] = array("nome" => "Giulio Domenico Bordin",
    "idade" => 41,
    "sexo" => "Masculino",
    "profissao" => "Professor");

    $pessoa[1] = array("nome" => "Laura Guillarducci",
    "idade" => 17,
    "sexo" => "Feminino",
    "profissao" => "Ninguem");

    $pessoa[2] = array("nome" => "Joao Davi",
    "idade" => 19,
    "sexo" => "Masculino",
    "profissao" => "DEV");

    $pessoa[3] = array("nome" => "Luan Alberti",
    "idade" => 18,
    "sexo" => "Masculino",
    "profissao" => "Puta");

    function debug($var){
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
?>

<html>
    <head>
        <title> Main Page </title>
    </head>
    <body>
        <table border = 1 width = 600>
            <thead>
                <tr>
                    <th>#</th>
                <?php
                   $chaves = array_keys($pessoa[0]);
                   foreach($chaves as $chave){
                    echo "<th>".$chave;
                   }
                ?>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach($pessoa as $c => $p){
                        echo "<tr>";
                        echo "<td>".$c;
                        echo "<td>".$p['nome'];
                        echo "<td>".$p['idade'];
                        echo "<td>".$p['sexo'];
                        echo "<td>".$p['profissao'];
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <select>
            
        </select>
    </body>
</html>