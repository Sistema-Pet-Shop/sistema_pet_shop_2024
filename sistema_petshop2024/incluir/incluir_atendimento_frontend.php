<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/Icon.png">

    <title>Incluir Atendimento</title>

    <script src="https://kit.fontawesome.com/0df5057ab7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>

<body>
    <header>

    <div class="navbar navbar-dark bg-dark shadow p-3 fixed-top">
        <div class="container d-flex justify-content-between">
            <a href="../index.html" class="navbar-brand d-flex align-items-center">
                <i class="fa-solid fa-paw" style="color:rgb(13,110,253); margin: 5px;"></i>
                <strong>Sistema Pet Shop</strong>
            </a>
            <a href="../incluir.html">Voltar</a>
        </div>
    </div>

    </header>

    <main role="main" class="container">
        <div class="my-5 col-md-8 p-5 bg-white rounded shadow-sm mx-auto">
            <form method="POST" action="incluir_atendimento_backend.php">

                <div class="row">
                    <div class="col-md mb-3 mx-auto">
                        <label for="idatendimento">ID Atendimento</label>
                        <input type="text" class="form-control" id="idatendimento" name="idatendimento" required>
                    </div>
                    <div class="col-md mb-3 mx-auto">
                        <label for="pet_idpet">ID Pet</label>
                        <select class="form-control" id="pet_idpet" name="pet_idpet" required>
                            <?php
                            include "../conexao.php";
                            $res = mysql_query("select * from pet");
                            while ($registro = mysql_fetch_row($res)) {
                                $cod = $registro[0];
                                echo "<option value=\"$cod\">$cod</option>\n";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-3 mx-auto">
                        <label for="idcliente">ID Cliente</label>
                        <select class="form-control" id="idcliente" name="idcliente" required>
                            <?php
                            include "../conexao.php";
                            $res = mysql_query("select * from cliente");
                            while ($registro = mysql_fetch_row($res)) {
                                $cod = $registro[0];
                                echo "<option value=\"$cod\">$cod</option>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md mb-3 mx-auto">
                        <label for="funcionario_veterinario">ID Funcionário Veterinário</label>
                        <select class="form-control" id="funcionario_veterinario" name="funcionario_veterinario" required>
                            <?php
                            include "../conexao.php";
                            $res = mysql_query("select * from funcionario");
                            while ($registro = mysql_fetch_row($res)) {
                                $cod = $registro[0];
                                echo "<option value=\"$cod\">$cod</option>\n";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-3 mx-auto">
                        <label for="funcionario_entrada">ID Funcionário Admissão</label>
                        <select class="form-control" id="funcionario_entrada" name="funcionario_entrada" required>
                            <?php
                            include "../conexao.php";
                            $res = mysql_query("select * from funcionario");
                            while ($registro = mysql_fetch_row($res)) {
                                $cod = $registro[0];
                                echo "<option value=\"$cod\">$cod</option>\n";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md mb-3 mx-auto">
                        <label for="funcionario_saida">ID Funcionário Demissão</label>
                        <select class="form-control" id="funcionario_saida" name="funcionario_saida" required>
                            <?php
                            include "../conexao.php";
                            $res = mysql_query("select * from funcionario");
                            while ($registro = mysql_fetch_row($res)) {
                                $cod = $registro[0];
                                echo "<option value=\"$cod\">$cod</option>\n";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md mb-3 mx-auto">
                        <label for="data_hora_entrada">Data e Hora de Entrada</label>
                        <input type="datetime-local" class="form-control" id="data_hora_entrada" name="data_hora_entrada" required>
                    </div>
                    <div class="col-md mb-3 mx-auto">
                        <label for="data_hora_saida">Data e Hora de Saída</label>
                        <input type="datetime-local" class="form-control" id="data_hora_saida" name="data_hora_saida" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao">
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit" name="Submit" value="Incluir">Incluir</button>

            </form>
        </div>

    </main>

</body>

</html>


