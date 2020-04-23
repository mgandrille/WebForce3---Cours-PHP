<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div>
                    <h1>Article</h1>
                </div>
                <div>
                    <h2>Retrouver l'id du lien sur lequel on vient de cliquer</h2>
                    <p>Essai 1 : <?php echo session_id(); ?></p>
                    <p>Essai 2 : <?php echo session_name(); ?></p>
                    <p>Essai 3 : <?php echo $_GET["id"]; ?></p>
                </div>
            </div>
            </div>
        </div>

    </body>

</html>

