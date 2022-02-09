<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="La Manu-mérique, agrégateur de contenus. Toute l'actu du numérique sur Amiens, la Somme et les Hauts de France">
    <link href="<?= URLROOT;?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= URLROOT;?>/css/style.css">
    <title><?=SITENAME?></title>
</head>

<body>
    <body id="top">
        <header>
            <nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
                <div class="container">
                    <a class="navbar-brand mx-auto d-lg-none" href="/accueil.html">
                        <img src="<?= URLROOT;?>/img/logo-la-manu.png" class="logo" alt="Logo La Manumérique">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <a class="navbar-brand d-none d-lg-block" href="/accueil.html">
                            <img src="<?= URLROOT;?>/img/logo-la-manu.png" class="logo" alt="Logo La Manumérique">
                        </a>
                        <ul class="navbar-nav mx-auto">
                            <!-- <?php foreach($subjects as $key=>$subject) { ?>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="/sujet-<?=$key?>.html"><?=$subject?></a>
                                </li>
                            <?php } ?> -->

							<!-- Afficher les sujetsZ -->
                        </ul>
                    </div>

                </div>
            </nav>

        </header>

        <main>
            <div class="container">
                <div class="text-center website-title mb-3"> La manumérique</div>
                