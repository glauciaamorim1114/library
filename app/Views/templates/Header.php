<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title><?php if (isset($title)) echo $title . ' | ';
			else echo ""; ?>Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <style>
    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    .nav {
        background-color: rgb(14, 165, 211);

    }

    body {
        background-color: #fff;
    }
    </style>
</head>

<body>
    <div class="container-fluid nav py-3 px-4">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href="/">Library</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link mx-2" href="/">Home</span></a>
                    <a class="nav-item nav-link mx-2" href="#">Empréstimo</span></a>
                    <?php if (session()->get('isLoggedIn')) : ?>
                    <a class="nav-item nav-link " href="/profile/<?= session()->get('id')  ?>">perfil</a>
                    <?php if (session()->get('is_staff')) : ?>
                    <a class=" nav-item nav-link mx-2" href="/create">Adcionar Livro</a>
                    <a class=" nav-item nav-link mx-2" href="/users">Usuarios</a>
                    <?php endif; ?>
                    <a class=" nav-item nav-link" style="margin-left:1200px" href="/logout">Logout</a>
                    <?php else : ?>
                    <a class="nav-item nav-link" style="margin-left:1400px" href="/login">Login</a>
                    <a class="mx-2 nav-item nav-link" href="/cadastro">Cadastro</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>