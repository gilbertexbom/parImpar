<html>
    <head>
        <title>Par ou Impar</title>
        <meta utf="utf8_decode">
    </head>
    <body>
        <h1> Escolha um número: </h1>
        <form method="GET" action="/parImpar/">
            <label for="num">Número: </label>
            <input type="number" name='num'><br>
            <input type='submit' value='Testar'>            
        </form>
        <?php
            //Verifica se o método de envio do form é get
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                //Verifica se um número foi definido
                if(isset($_GET['num'])){
                    //Atribuir o número a uma variável
                    $num = $_GET['num'];
                    //Verificar se o número dividido por dois é igual a 0
                    if(($num%2) == 0){
                        //Sim: Então é par!
                        echo "<h2> Número $num é par. </h2>";                    
                    } else {
                        //Não: Então é ímpar!
                        echo "<h2> Número $num é ímpar. </h2>";
                    }
                }
            }
        ?>
    </body>
</html>