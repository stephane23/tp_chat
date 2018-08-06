<?php session_start();?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>Mini-chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <script src="../js/mini_chat.js" type="text/javascript" language="javascript"></script>
</head>

<style>
    form {
        text-align: center;
    }
</style>

<body>
    <style>
        body {
            background: url("https://www.e-ppo.fr/images/fond-ecran-informatique-divers-033.jpg");
            background-size: cover;
        }

        .aside {
            text-align: center;
            background: #00000025;
            height: 100vh;
        }

        .flow-msg {
            background: #ffd7005;
            border-radius: 15px;
            width: 100%;
            padding: 25px;
            min-height: 75vh;
            max-height: 75vh;
            overflow: auto;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 aside">
                <a href="../accueil.php">
                    <br>
                    <button type="button" class="btn-block btn-lg btn btn-outline-success">Accueil</Mine-Chat>
                    </button>
                </a>
                <br>
                <a href="../minichat_post.php">
                    <button type="button" class="btn-lg btn-block btn btn-outline-dark">Rafraichir</button>
                </a>
                <br>
                <a href="../page/error.php">
                    <button type="button" class="btn-lg btn-block btn btn-outline-danger">Error</button>
                </a>
                <br>
                <a href="../page/profil.php">
                    <button type="button" class="btn-lg btn-block btn btn-outline-black">Profil</button>
                </a>
            </div>
            <div class="col-10">
                <br>
                <div class="flow-msg">
                    <?php include "../messages.php"; ?>
                </div>
                <div>
                    <form action="../minichat_post.php" method="post">
                        <div class="form-group">
                            <textarea type="textarea" class="form-control" id="MessageText" name="msg" placeholder="Message"></textarea>
                            <button type="submit" class="btn btn-primary btn-block">Envoyez</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
</body>

</html>