<?php

include "conexao.php";

$buscar_cadastros = "SELECT * FROM clientes-fazenda ORDER BY nome asc ";

$query_cadastros =mysqli_query($conx, $buscar_cadastros) or die (mysqli_error($conx));

?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Listagem de Cadastros</title>

        <!--Required Meta Tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1, shirink-to-fit=no">
        <meta author="Maciel Oliveira">
        
        <!--Bootstrap CSS-->
        <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">

    </head>

<body>
    <table class="table">
        <?php
            while ($receber_dados = mysqli_fetch_array($query_cadastros)) {
            $id = $receber_dados['id'];
            $nome = $receber_dados['nome'];
            $email = $receber_dados['email'];
            $telefone = $receber_dados['telefone'];
            }
?>
    <tr class="">
        <form action="editar.php" method="POST" enctype="multipart/form-data">
        <!--<td><img src="<?php echo $link_imagem; ?>" widht="150"></td> >-->
            <td class=""><input type="text" name= "nome" value="<?php echo $nome; ?>"></td>
            <td class=""><input type="text" name= "email" value="<?php echo $email; ?>"></td>
            <td class=""><input type="text" name= "telefone" value="<?php echo $telefone; ?>"></td>
            <td class="">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="Editar">
        </td>
        </form>
        <td>

        <form action="excluir.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Excluir">
        </form>
        </td>
    </tr>
</table>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>

