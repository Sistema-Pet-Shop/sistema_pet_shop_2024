<!--Inicio Alterar-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_financeiro_backend.php">
            <p><br>

            ID Financeiro: <select size="1" name="idfinanceiro">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from financeiro");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

            ID Atendimento:<select size="1" name="idatendimento">
                    <?php
                    include "../conexao.php";

                    $res = mysql_query("select * from atendimento");
                    while ($registro = mysql_fetch_row($res)) {
                        $cod = $registro[0];

                        echo "<option value=\"$cod\">$cod</option>\n";
                    }
                    ?>
                </select><br><br>

            ID Compra Venda:<select size="1" name="compra_venda">
                <?php
                include "../conexao.php";

                $res = mysql_query("select * from compra_venda");
                while ($registro = mysql_fetch_row($res)) {
                    $cod = $registro[0];

                    echo "<option value=\"$cod\">$cod</option>\n";
                }
                ?>
            </select><br><br>

            Valor: <input type="double" name="valor"><br><br>
            
            Data de Vencimento: <input type="datetime-local" name="data_vencimento"><br><br>

            Data de pagamento <input type="datetime-local" name="data_pagamento"><br><br>

            Status: <input type="text" name="status"><br><br>

            Tipo financeiro: <input type="int" name="financeiro_tipo"><br><br>
            
            <input type="submit" name="Submit" value="Alterar">

        </form>
</center>
<!--Fim Alterar-->