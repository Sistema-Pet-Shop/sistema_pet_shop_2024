<!--Inicio Alterar-->
<center>

    <body bgcolor="mediumturquoise">
        <form method="POST" action="alterar_servico_backend.php">
            <p><br>

                ID: <select size="1" name="idservico">
                        <?php
                        include "conexao.php";

                        $res = mysql_query("select * from servico");
                        while ($registro = mysql_fetch_row($res)) {
                            $cod = $registro[0];

                            echo "<option value=\"$cod\">$cod</option>\n";
                        }
                        ?>
                    </select><br><br>

                Serviço: <input type="text" name="nome"><br><br>
                

                <input type="submit" name="Submit" value="Alterar">
        </form>
</center>
<!--Fim Alterar-->