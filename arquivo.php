<?php

    $obj = simplexml_load_file('./signos.xml');
    $ano = substr($_REQUEST['data'],0,4);
    $segundosAniversario = strtotime($_REQUEST['data']);
    $aniversaio = date('d/m',$segundosAniversario);

    foreach ($obj as $ob):
        $inicio = $ob->dataInicio."-".$ano;
        $fim = $ob->dataFim."-".$ano;

        if((strtotime($inicio) > $segundosAniversario) and (strtotime($fim) < $segundosAniversario)){
            echo "seu signo é ", $ob->signoNome, "<br>";
            echo "então você deve ser ", $ob->descricao;
            
        }
        // echo $ob->dataInicio,"/",$ano;
        // echo '<br>';
        // echo $ob->dataFim,"/",$ano;
        // echo '<br>';
    endforeach



?>