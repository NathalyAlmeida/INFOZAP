<?php
    require('conexao.php');

    $consulta_dos_moveis = $pdo->query("SELECT id FROM moveis");
    $ids = $consulta_dos_moveis->fetchAll();

            foreach ($ids as $key => $value) {
                
                $idz = $pdo->query("SELECT * FROM moveis WHERE id = ".$ids[$key][0]);
                $idz->execute();
                $resultado_idz = $idz->fetchObject();
                
                $zap_movel = $resultado_idz->movel;
                $zap_nome = $resultado_idz->nome;
                $zap_sobrenome = $resultado_idz->sobrenome;
                $zap_data = $resultado_idz->data;
                $zap_id = $resultado_idz->id;
                require('movel.php');
            }
            
            $consulta = $pdo->query("SELECT * FROM moveis");
            $numero_de_moveis = $consulta->rowCount();
            for ($i=0; $i <= $numero_de_moveis; $i++) {
            }
    ?>