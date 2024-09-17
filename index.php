<?php
// include "conexao.php";

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lanche Control - Burguer Mestre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/estilo.css">
</head>

<body>

    <nav class="navbar d-flex justify-content-between  p-1 mw-20" style="background-color: #f97c00;">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img id="logo" src="src/images/logoE.png" width="150" height="150" alt="logo-sistema">
            </a>
            <div style="margin-left: 20px; color:#fff;">
                <h1>BURGUER MESTRE</h1>
                <h2>Lanche Control</h2>
            </div>
        </div>

        <div class="d-flex m-3">
            <img src="src/images/user-icon.png" width="50px" height="50px" style="margin-right:50px;">
            <button class="Btn">
                <div class="sign"><svg viewBox="0 0 512 512">
                        <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                        </path>
                    </svg></div>

                <div class="text">Logout</div>
            </button>
        </div>
    </nav>

    <!--Card filtro e adicionar produto-->
    <div class="container d-flex justify-content-left align-items-center p-1 m-2">

        <!--botao dropdown-->
        <div class="select m-2">
            <div class="selected" data-default="All" data-one="option-1" data-two="option-2" data-three="option-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512" class="arrow">
                    <path
                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z">
                    </path>
                </svg>
            </div>
            <div class="options">
                <div title="all">
                    <input id="all" name="option" type="radio" checked="" />
                    <label class="option" for="all" data-txt="Todos"></label>
                </div>
                <div title="option-1">
                    <input id="option-1" name="option" type="radio" />
                    <label class="option" for="option-1" data-txt="option-1"></label>
                </div>
                <div title="option-2">
                    <input id="option-2" name="option" type="radio" />
                    <label class="option" for="option-2" data-txt="option-2"></label>
                </div>
                <div title="option-3">
                    <input id="option-3" name="option" type="radio" />
                    <label class="option" for="option-3" data-txt="option-3"></label>
                </div>
            </div>
        </div>

        <!--BOTAO ADICIONAR-->
        <a href="cadastrar.php">
            <button id="botao-create-produto">
                Cadastrar Produto
            </button>
        </a>
    </div>

    <!-- Card Modelo -->
    <div class="d-flex justify-content-center cards-wrapper">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="produto">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        <div class="icone-area">
                            <img src="src/images/edit.png" alt="" class="icone">
                            <img src="src/images/delete.png" alt="" class="icone">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--test-->

    <!-- <div class="container m-5">
        <div class="card mb-1">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSz4gpYbEFXbSycIZfB0TR53WHb1ig2f1BKkg&s"
                        class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">X-Tudo - </h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>

                <div class="col-md-1 container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="editar.php?id=45">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                                </svg>
                            </a>

                        </div>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Fim Card Modelo -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>