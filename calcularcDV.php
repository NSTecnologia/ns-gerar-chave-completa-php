<?php
    function criarChaveAcesso($cUF, $ano, $mes, $cnpj, $mod, $serie, $numero, $tpEmis, $codigo)
    {
        /*Forma = Formato que a chave vai ser criada, conforme a libguagem PHP. */
        $forma = "%s%02d%02d%s%02d%03d%09d%01d%08d";
        /*Parametros da função. */
        $chave = sprintf(
            $forma,
            $cUF,
            $ano,
            $mes,
            $cnpj,
            $mod,
            $serie,
            $numero,
            $tpEmis,
            $codigo
        );
        return $chave;
    }

    /*O CNPJ É PASSADO COMO STRING ENTRE ASPAS NA CHAMADA DA FUNÇÃO. */
    $chaveAcesso = criarChaveAcesso(cUF, Ano, Mes, "CNPJ Emit", Modelo, serie, numero DFe, tpEmis, codigo numerico);

 function calcula_dv($chave43) {
        $multiplicadores = array(2,3,4,5,6,7,8,9);
        $i = 42;
        $soma_ponderada = 0;
        while ($i >= 0) {
            for ($m=0; $m<count($multiplicadores) && $i>=0; $m++) {
                $soma_ponderada+= $chave43[$i] * $multiplicadores[$m];
                $i--;
            }
        }
        $resto = $soma_ponderada % 11;
        if ($resto == '0' || $resto == '1') {
            return 0;
        } else {
            return (11 - $resto);
       }
    }
    
    $chaveCompleta = $chaveAcesso;
    $chaveCompleta.=calcula_dv($chaveCompleta);
    
    var_dump($chaveCompleta);
    
?> 