<?php
include_once 'db.php';
include_once 'livro.php';


$database = new Database();
$db = $database->getConnection();


$livro = new livro($db);


if($_POST) {
    $livro->titulo = $_POST['titulo'];
    $livro->autor = $_POST['autor'];
    $livro->genero = $_POST['genero'];
    $livro->autor = $_POST['autor'];
    $livro->estado = $_POST['estado'];
    $livro->sinopse = $_POST['sinopse'];
    $livro->editora = $_POST['editora'];
    $livro->edicao = $_POST['edicao'];
    $livro->isbn_10 = $_POST['isbn_10'];
    $livro->quantidade = $_POST['quantidade'];
    $livro->ano = $_POST['ano'];
    $livro->idioma = $_POST['idioma'];
    $livro->dimensoes = $_POST['dimensoes'];
    $livro->paginas = $_POST['paginas'];


    if($livro->create()) {
        echo '<div class="alert alert-sucess">Usuário criado com sucesso.</div>'
    } else {
        echo '<div class="alert alert-danger">Erro ao criar usuário.</div>'
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Livro</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../js/script.js"></script>
</head>

<body>
   <div class="topo-div">
    <a href="" class="topo">Sobre a Getting books</a>
    <a href="" class="topo">Central de ajuda</a>
   </div>
    <header>
        

        <a href="logo" class="logo"><img src="/IMG/WhatsApp Image 2024-08-01 at 11.49.08.jpeg" alt=""></a>
        <form action="" id="form-buscar">
            <input type="search" name="buscar" id="buscar" placeholder="O que você está procurando ?">
            <button type="submit" id="btn-buscar"><img src="/IMG/search_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" width="30px"></button>

        </form>
        <a href="" class="icon-link"><img src="/IMG/favorite_24dp_FFFFFF_FILL0_wght400_GRAD0_opsz24.png" alt=""
                width="40px">Minha Lista</a>

        <a href="" class="icon-link"><img src="/IMG/sync_27dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""
                width="40px">Trocas</a>

        <a href="" class="icon-link"><img src="/IMG/person_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt=""
                width="40px">Usuário</a>
    </header>

    <nav>
        <a href="" class="icon-top">Categorias</a>
        <a href="" class="icon-top">Mais procurados</a>
        <a href="" class="icon-top">Principais autores</a>
        <a href="" class="icon-top">Obras de sucesso</a>
    </nav>
    <div class="container">
        <div class="image-section">
            <img src="../IMG/as 48 leis do poder.jpg" alt="" id="book-image">
            <button class="image-button"><input type="file" name="Img" id="img"></button>
            <
        </div>
        <div class="details-section">
            <form method="POST" id="book-details-form" >
                <label for="titulo"><strong>Título do livro :</strong></label>
                <input type="text" id="titulo" name="titulo"><br>

                <label for="autor"><strong>Autor :</strong></label>
                <input type="text" id="autor" name="autor"><br>

                <label for="genero"><strong>Gênero :</strong></label>
                <input type="text" id="genero" name="genero"><br>

                <label for="estado"><strong>Estado de conservação :</strong></label>
                <input type="text" id="estado" name="estado"><br>

                <label for="sinopse"><strong>Sinopse :</strong></label>
                <input type="text" id="sinopse" name="sinopse"><br>

                <label for="editora"><strong>Editora :</strong></label>
                <input type="editpra" id="editora" name="editora"><br>

                <label for="edicao"><strong>Edição :</strong></label>
                <input type="number" id="edicao" name="edicao"><br>

                <label for="isbn_10"><strong>ISBN :</strong></label>
                <input type="text" id="isbn_10" name="isbn_10"><br>

                

                <label for="quant_livro"><strong>Quantidade de livro :</strong></label>
                <input type="number" id="quantidade" name="quantidade"><br>

                <label for="ano"><strong>Ano :</strong></label>
                <input type="number" id="ano" name="ano"><br>

                <label for="idioma"><strong>Idioma :</strong></label>
                <input type="text" id="idioma" name="idioma"><br>

                <label for="dimensoes"><strong>Dimensões :</strong></label>
                <input type="text" id="dimensoes" name="dimensoes"><br>

                <label for="paginas"><strong>Páginas :</strong></label>
                <input type="number" id="paginas" name="paginas"><br>











                <button class="add-book-button">Adicionar livro</button>

            </form>
        </div>

    </div>

</body>

</html>

</body>

</html>