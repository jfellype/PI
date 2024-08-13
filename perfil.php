<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <link rel="stylesheet" href="/CSS/style.css"> 
    <script src="/js/script.js"></script>
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

    <div class="user-profile">
        <div class="profile-info">
            

            <img src="/IMG/perfil.jpg" alt="Foto de perfil" class="profile-image">
            
           
            <div class="inf-perfil">
                <h2>Username</h2> 
                <p>@Username1234</p> 

                <input type="file" name="perfil" id="perfil">
                 
            </div>
        </div>
        <div class="contact-info">
            <form action="contact">
                <label for="nome">Nome :</label>
                <input type="text" name="nome" id="nome"><br>

                <label for="nome-usu">Nome de usuário :</label>
                <input type="text" name="nome-usu" id="nome-usu"><br>

                <label for="senha">Senha :</label>
                <input type="password" name="senha" id="senha"><br>

                <label for="telefone">Telefone :</label>
                <input type="text" name="telefone" id="telefone"><br>

                <label for="cpf">CPF :</label>
                <input type="text" name="cpf" id="cpf"><br>


            </form>
            <button class="edit-profile-button">Editar perfil</button> 
        </div>
    </div>

    
</body>
</html>