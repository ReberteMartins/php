<?php

function trataNome($name){
    if (!$name) {

        throw new Exception("Nenhum nome foi encontrado.", 1);
    
    }

    echo ucfirst($name)."<br>";

}

try {
    
    trataNome("Reberte");
    trataNome("");

} catch (Exception $e) {

    echo $e->getMessage();

} finally {

    echo "executou o Try!!!";

}
?>