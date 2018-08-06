<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <title>Mini-chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <a href="index.html"></a>
</head>

<style>
    form {
        text-align: center;
    }
</style>

<body>
    <style>
        body {
            background: url("https://media3.giphy.com/media/qQdL532ZANbjy/giphy.gif");
        }

        .jumbotron {
            text-align: center;
            background-color:
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6">
                <div class="jumbotron">
                    <h1 class="display-4">
                        <span class="Erreurr">Erreur </span>
                        <span class="sur_le">sur le</span>
                        <span class="mot de passe">mot de passe ou le pseudo!!! <br><br>
                            &#9940; 
                        </span>
                    </h1>
                    <br>
                    <?php echo $_GET["error"]; ?>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
</body>
</html>