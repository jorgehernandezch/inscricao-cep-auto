<?php 
    $query = "SELECT mail FROM registro WHERE mail='$_POST[mail]'";
    $mailbase = mysqli_query($link, $query);
    //var_dump($mailbase); echo "<br>";	
    $query1 = "SELECT cpf FROM registro WHERE cpf='$_POST[cpf]'";
    $cpfbase =  mysqli_query($link, $query1);
    //var_dump($cpfbase);	
    if($mailbase2 = mysqli_fetch_array($mailbase))
    {
        echo "<div align='center'>";
        echo "<span>O email $_POST[mail] já esta registrado. <br>Tente novomente.</span><br>";
        echo "</div>";
        echo "<br>";
        echo "<div align='center'>";
        echo "<span>Se o problema continuar (Persistir), mande um mail para suporte@galpha.co</span><br>";
        echo "</div>";
        echo "<br>";
        echo "<div align='center' class='boton'>";
        echo "<a href='../index.php'><button type='submit'>Volver</button></a>";
        echo "</div>";
        mysqli_free_result($mailbase);
    }
    else
    {
        if ($_POST['mail'] != $_POST['mail2'])
        {
            echo "<div align='center'>";
            echo "<span>Os campos do email não concordam. <br>Tente novomente.</span><br>";
            echo "</div>";
            echo "<br>";
            echo "<div align='center'>";
            echo "<span>Se o problema continuar (Persistir), mande um mail para suporte@galpha.co</span><br>";
            echo "</div>";
            echo "<br>";
            echo "<div align='center' class='boton'>";
            echo "<a href='../index.php'><button type='submit'>Volver</button></a>";
            echo "</div>";
        }
        else
        {
            if($cpfbase2 = mysqli_fetch_array($cpfbase))
            {
                echo "<div align='center'>";
                echo "<span>O CPF $_POST[cpf] já esta registrado. <br>Tente novomente.</span><br>";
                echo "</div>";
                echo "<br>";
                echo "<div align='center'>";
                echo "<span>Se o problema continuar (Persistir), mande um mail para suporte@galpha.co</span><br>";
                echo "</div>";
                echo "<br>";
                echo "<div align='center' class='boton'>";
                echo "<a href='../index.php'><button type='submit'>Volver</button></a>";
                echo "</div>";
                mysqli_free_result($cpfbase);
            }
            else 
            {
                $query2 = "INSERT INTO registro (nome, cpf, email, telefone, cep, rua, bairro, cidade, estado, cidadesem) values ('$_POST[nome]', '$_POST[cpf]', '$_POST[mail]', '$_POST[telefone]', '$_POST[cep]', '$_POST[rua]', '$_POST[bairro]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cidadesem]')";
                $result2 = mysqli_query($link, $query2); 
                //var_dump($result2);
                //echo "<br>";
                //var_dump($_POST);
                if($result2)
                {
                    echo "<div align='center'>";
                    echo "<span>Cadastro finalizado com Succeso</span>.<br>";
                    echo "</div>";
                    echo "<br>";
                    echo "<div align='center' class='boton'>";
                    echo "<a href='../index.php'><button type='submit'>Volver</button></a>";
                    echo "</div>";
                }
                else
                {	
                    echo "<div align='center'>";
                    echo "Sue cadastro não finalizou com Succeso. <br>Tente novamente.<br>";
                    echo "</div>";
                    echo "<br>";
                    echo "<div align='center'>";
                    echo "<span>Se o problema continuar (Persistir), mande um mail para  suporte@galpha.co</span><br>";
                    echo "</div>";
                    echo "<br>";
                    echo "<div align='center' class='boton'>";
                    echo "<a href='../index.php'><button type='submit'>Volver</button></a>";
                    echo "</div>";
                }
            }	
        }
    }
?>