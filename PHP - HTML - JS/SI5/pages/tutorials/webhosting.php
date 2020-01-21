<!DOCTYPE html>
<html>
<head>
	<title>Web Hosting</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/8f41d5a85e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../style/webhosting.css">
    <link rel="stylesheet" href="../../style/headerAndFooter.css">
</head>
<body>

	<div class="header-text">
		<h1>Développemment d'un site Internet <i class="fas fa-desktop"></i></h1>
	</div>

	<header>
		<nav>
			<ul class="nav">
				<div class="col-xs-12 col-sm-6 col-md-2">
					<li><a href="#"><i class="fas fa-home"></i> Accueil</a></li>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<li><a href="#"><i class="fas fa-book"></i> Portfolio</a></li>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<li><a href="#"><i class="fas fa-project-diagram"></i> Projets</a></li>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<li> </li>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<li><a href="#"><i class="fab fa-connectdevelop"></i> Connexion</a></li>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2">
					<li><a href="#"><i class="fas fa-connectdevelop"></i> Inscription</a></li>
				</div>
			</ul>
			<div class="col-xs-12 col-sm-6 col-md-2">
				<div class="line"></div>
			</div>
		</nav>
	</header>

	<!--<div class="border"></div>-->

	<div class="feature1">
		<h1>Prérequis</h1>
        <p> </p>
        <h1>Ce que vous devez savoir</h1>
        <p> </p>
        <p><i class="fab fa-connectdevelop"></i> Avoir des notions d’administration Linux. </p>
        <p><i class="fab fa-connectdevelop"></i> Se connecter en SSH. </p>
        <p><i class="fab fa-connectdevelop"></i> Éditer un fichier texte en ligne de commande (Vim, nano, Emacs par exemple). </p>
        <p><i class="fab fa-connectdevelop"></i> Installer une distribution Linux (nous utilisons ici Debian, mais les étapes du tutoriel sont identiques sous Ubuntu) </p>
        <p> </p>
        <h1>Ce que vous devez avoir</h1>
        <p> </p>
        <p><i class="fab fa-connectdevelop"></i> Un serveur ou une machine virtuelle sous Linux (un VPS, un serveur dédié ou une instance Public Cloud).</p>
        <p><i class="fab fa-connectdevelop"></i> Les droits administrateur sur ce serveur (être « root »).</p>
        <p> </p>
        <h1>En pratique</h1>
        <p> </p>
        <h1>Étape 1 : mettez votre système à jour</h1>
        <p> </p>
        <p>Sur une distribution Debian ou Ubuntu récente, je conseil de réinstaller totalement votre serveur si cela est possible </p>
        <p>sur votre machine. Attention, cette action effacera totalement vos données. </p>
        <p> </p>
        <p> </p>
        <p>Connectez-vous en SSH en tant qu’administrateur « root ».</p>
        <p>Une fois le système installé, il convient de le mettre à jour : </p>
        <img src="../../screens/Screenshot_6.png">
        <p>Vous partez ainsi sur une base saine et totalement à jour. </p>
        <p> </p>
        <h1>Étape 2 : créez un nouvel utilisateur avec les privilèges « sudo » </h1>
        <p> </p>
        <p>Pour des raisons de sécurité et pour suivre les bonnes pratiques, il est préférable d’installer et gérer un serveur LAMP avec un </p>
        <p>utilisateur séparé, ne possédant pas les privilèges « root ». Si vous disposez déjà d’un utilisateur avec les privilèges « sudo », sans </p>
        <p>pour autant être « root », vous pouvez vous rendre directement à la deuxième étape. Ce type de fonctionnement est déjà en </p>
        <p>vigueur pour les dernières versions d’Ubuntu. </p>
        <p> </p>
        <p>Dans le cas où vous ne possédez que l’utilisateur « root », il convient de créer un nouvel utilisateur : </p>
        <img src="../../screens/Screenshot_7.png">
        <p>Diverses informations seront obligatoires, comme un mot de passe. D’autres seront optionnelles : le nom ou le numéro de </p>
        <p>téléphone, par exemple. </p>
        <p> </p>
        <p>Il faut ensuite rajouter cet utilisateur au groupe « sudo » : </p>
        <img src="../../screens/Screenshot_8.png">
        <p> </p>
        <p>Et enfin, connectez-vous sur ce nouveau compte utilisateur : </p>
        <img src="../../screens/Screenshot_9.png">
        <p> </p>
        <h1>Étape 3 : installation du serveur web Apache 2</h1>
        <p> </p>
        <p>La première brique du stack LAMP, le système d’exploitation Linux, a été installée lors des étapes précédentes. </p>
        <p>Nous allons installer ici la deuxième brique, le serveur web Apache 2, ainsi que sa documentation : </p>
        <img src="../../screens/Screenshot_10.png">
        <p> </p>
        <p>Si l’installation s’est effectuée correctement, vous devriez pouvoir accéder à la page par défaut d’Apache en joignant l’adresse IP </p>
        <p>(ou le nom du service) de votre serveur dans le navigateur, comme suit : http://IP_du_serveur. N’essayez pas de vous connecter en </p>
        <p>HTTPS, car à ce stade aucun certificat SSL n’est encore installé. </p>
        <p> </p>
        <p>Il est possible de vérifier que le service Apache fonctionne correctement en utilisant la commande suivante : </p>
        <img src="../../screens/Screenshot_11.png">
        <p> </p>
        <p>La procédure Apache peut se gérer comme suit : </p>
        <img src="../../screens/Screenshot_12.png">
        <p> </p>
        <h1>Étape 4 : installez PHP </h1>
        <p> </p>
        <p>Nous passons ensuite à l’installation de la troisième brique, le langage de programmation PHP. </p>
        <p>Pour installer le paquet PHP, tapez cette commande : </p>
        <img src="../../screens/Screenshot_13.png">
        <p> </p>
        <p>Pour tester l’installation, dans le répertoire /var/www/html, le fichier index.php suivant : </p>
        <p>Accédez ensuite au fichier via le navigateur : http://IP_du_serveur/index.php. </p>
        <p> </p>
        <h1>Étape 5 : installez le système de base de données MySQL/MariaDB </h1>
        <p> </p>
        <p>Nous arrivons à la quatrième et dernière brique, le système de bases de données. </p>
        <p> </p>
        <img src="../../screens/Screenshot_14.png">
        <p> </p>
        <p>Voici la commande à utiliser (votre mot de passe de compte utilisateur Linux vous sera demandé) : </p>
        <img src="../../screens/Screenshot_15.png">
        <p> </p>
        <p>Par défaut, le mot de passe administrateur MySQL/MariaDB sera le même que celui de votre utilisateur système. Pour </p>
        <p>personnaliser la sécurisation de votre base de données, voici la commande à effectuer :</p>
        <img src="../../screens/Screenshot_16.png">
        <p> </p>
        <p>Entrez votre mot de passe « root », puis changez le mot de passe : </p>
        <img src="../../screens/Screenshot_17.png">
        <p> </p>
        <p>Désactivez ensuite les connexions anonymes : </p>
        <img src="../../screens/Screenshot_18.png">
        <p> </p>
        <p>Désactivez la connexion en « root » depuis une connexion distante : </p>
        <img src="../../screens/Screenshot_19.png">
        <p> </p>
        <p>Il faut maintenant effacer la base de données de test créée par défaut : </p>
        <img src="../../screens/Screenshot_20.png">
        <p> </p>
        <p>Il reste à charger les nouveaux paramètres : </p>
        <img src="../../screens/Screenshot_21.png">
        <p> </p>
        <p>Pour tester l’accès à votre base de données, voici la commande à utiliser dans votre terminal : </p>
        <img src="../../screens/Screenshot_22.png">
        <p> </p>
        <h1>Étape 6 : installez phpMyAdmin (optionnel)</h1>
        <p> </p>
        <p>Cette étape est optionnelle. L’interface open source phpMyAdmin va vous permettre de gérer plus facilement vos bases de données via une interface web. </p>
        <p>Pour l’installer voici la commande à entrer : </p>
        <img src="../../screens/Screenshot_23.png">
        <p> </p>
        <p>Dans les choix proposés, sélectionnez un serveur web à reconfigurer automatiquement pour exécuter phpMyAdmin : </p>
        <p>.     - cochez '()apache2', puis 'Entrée' </p>
        <p>.     - acceptez l’aide à la configuration, puis rentrez un mot de passe administrateur MySQL. </p>
        <p> </p>
        <p>Afin d’accéder à l’interface de gestion de phpMyAdmin, vous devrez finaliser la configuration votre serveur Apache. Pour cela, </p>
        <p>éditez le fichier de configuration Apache : </p>
        <img src="../../screens/Screenshot_24.png">
        <p> </p>
        <p>À la fin du fichier, rajoutez : </p>
        <img src="../../screens/Screenshot_25.png">
        <p> </p>
        <p>Le service Apache doit ensuite être relancé grâce à cette commande : </p>
        <img src="../../screens/Screenshot_26.png">
        <p> </p>
        <p>Afin de vous connecter, vous devrez au préalable créer un utilisateur possédant les droits administrateur pour phpMyAdmin : </p>
        <img src="../../screens/Screenshot_27.png">
        <p>Accédez ensuite à l’interface via http://IP_du_serveur/phpmyadmin/ </p>
        <p> </p>
        <p> </p>
        <h1>A présent notre serveur Web est accessible</h1>
        <p>Il manquera plus qu'a la configuration des DNS / Firewall / Redirections & sécurité</p>
        <p> </p>
        <p>Voilà quelques screens :</p>

	</div>

	<div class="container">
        <div class="col-xs-12 col-sm-6 col-md-3">

            <div class="box">
                <div class="glass"></div>
                <div class="content">
                    <div class="screens">
                        <img src="../../screens/Screenshot_1.png" height="460" width="660">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="glass"></div>
                <div class="content">
                    <div class="screens">
                        <img src="../../screens/Screenshot_2.png" height="460" width="660">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="glass"></div>
                <div class="content">
                    <div class="screens">
                        <img src="../../screens/Screenshot_3.png" height="460" width="660">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="glass"></div>
                <div class="content">
                    <div class="screens">
                        <img src="../../screens/Screenshot_4.png" height="460" width="660">
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="glass"></div>
                <div class="content">
                    <div class="screens">
                        <img src="../../screens/Screenshot_5.png" height="460" width="660">
                    </div>
                </div>
            </div>
        </div>
	</div>


	<footer>
		<div class="footer-container">
			<div class="left-col">
				<div class="social-media">
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
					<a href="#"><i class="fab fa-github"></i></a>
					<a href="#"><i class="fab fa-gitlab"></i></a>
				</div>
				<p class="rights-text">© 2020 | Créé par Rémy JAMMET - Tous droits réservés</p>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.css"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.css"></script>
</body>
</html>