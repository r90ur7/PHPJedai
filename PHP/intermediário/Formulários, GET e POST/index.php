<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
    <body>
        <header></header>
        <main>
            <form method="POST">
                <select name="sexo" id="">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
                <input type="text" name="nome" id="">
                <input type="text" name="email">

                <h3>quiz</h3>

                <input type="checkbox" name="trabalha?" value="sim" id="">trabalha
                <input type="checkbox" name="estuda?" value="sim" id="">estuda
                <input type="checkbox" name="malha??" value="sim" id="">malha
                <input type="checkbox" name="Lazer?" value="sim" id="">Lazer


                <input type="checkbox" name="valor[]" value="10" id="">10
                <input type="checkbox" name="valor[]" value="20" id="">20
                <input type="checkbox" name="valor[]" value="30" id="">30
                <input type="checkbox" name="valor[]" value="40" id="">40


                <input type="submit" name="ação" value="Enviar">
            </form>
        </main>
        <footer></footer>
        <?php
        // $nome = @$_GET['nome'];
        // $email = @$_GET['email'];
        // if(isset($_GET['ação'])){
        //     $nome = $_GET['nome'];
        //     $email = $_GET['email'];
        //     echo "Seu nome é $nome e seu email é $email";
        // }
        // if (isset($_POST['ação'])) {
        //     $nome = $_POST['nome'];
        //     $email = $_POST['email'];
        //     $sexo = $_POST['sexo'];
        //     echo "Seu nome é $nome e seu email é $email e seu sexo é $sexo";
        // }
        if (isset($_POST['ação'])) {
            foreach($_POST['valor'] as $key => $value){
                echo $key;
                echo " => ";
                echo $value;
                echo"<br>";

                echo '<hr>';
            }
        }
        ?>
    </body>

</html>