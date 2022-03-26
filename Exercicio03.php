<html>
    <head>

        <title>
            <h1>Média por Aluno</h1>
        </title>
    <head>

            <body>
                <h3>Calculadora média Aluno</h3>


            <form action='Exercicio03.php' method="post">
                Aluno : <input type="text" name="nome"><br>
                Nota 1: <input type="number" name="num1"><br>
                Nota 2: <input type="number" name="num2"><br>
                Nota 3: <input type="number" name="num3"><br>
                Nota 4: <input type="number" name="num4"><br>
                <input type="submit">
            </form>
               
            <?php
            if (isset($_POST["num1"])) {
                # code...
                
            
                $nota1= $_POST["num1"];
                $nota2=$_POST["num2"];
                $nota3=$_POST["num3"];
                $nota4=$_POST["num4"];
                $aluno=$_POST["nome"];
                

                $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

                if($media>=6){
                    echo "Aluno " .$aluno. " Aprovado <br>";
                }
                else {
                    echo "Aluno " .$aluno. " Reprovado <br>";
                }
                } 
            ?>
            </body>
</html>