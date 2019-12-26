<?php
    require('conexao.php');
    
/*
    Obtendo valores passados no input
*/

    if(isset($_POST['submit'])){

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data = $_POST['data'];
        $movel = $_POST['movel'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

    if(empty($nome) || empty($sobrenome) || empty($data) || empty($movel) || empty($preco) || empty($decricao)){
        $data = [$nome, $sobrenome, $data, $movel, $preco, $descricao];
        $upUser = $pdo->prepare("INSERT INTO moveis(nome, sobrenome, data, movel, preco, descricao) VALUES (?,?,?,?,?,?)");
        $upUser->execute($data);

    }
    }
    ?>
        <form method="post">

                <input type="text" name="nome" class="form_input" placeholder="Nome">
                <input type="text" name="sobrenome" class="form_input" placeholder="Sobrenome">
                <input type="date" name="data" class="form_input"> <br>
                <input type="text" name="movel" class="form_input" placeholder="Móvel">
                <input type="text" name="preco" class="form_input" placeholder="Preço" style="padding: 15px 207px 15px 15px;"> <br>
                <input type="text" name="descricao" class="form_input" placeholder="Descrição" style="padding: 15px 449px 15px 15px"> <br>

                <button type="submit" class="btn_form btn_envia" name="submit" value="submit" id="submit" style="background-color: #04678a;padding: 15px 317px;color: #fff; border-radius: 10px" >Enviar</button>
            
            </div>
            </div>
        <span>
        </span>

        </form>