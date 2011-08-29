<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'			=>	'Le fichier \'config.php\' n\'existe pas ou est corrompu. Cela veut dire que FluxBB n\'a pas encore été installé. Pour l\'installer, veuillez suivre les instructions ci-dessous.',
'Choose install language'		=>	'Choisir la langue du script d\'installation',
'Choose install language info'	        =>	'La langue utilisée pour ce script d\'installation. La langue par défaut utilisée pour les forums peut être définie ci-dessous.',
'Install language'			=>	'Installer la langue',
'Change language'                       =>      'Changer de langue',
'Next'					=>	'Suivante',
'Already installed'			=>	'Il semble que FluxBB soit déjà installé. Veuillez vous rendre <a href="index.php">ici</a> plutôt.',
'You are running error'			=>	'Vous utilisez la version %2$s de %1$s. FluxBB %3$s nécessite au moins %1$s %4$s pour fonctionner correctement. Vous devez mettre à niveau votre installation %1$s avant de poursuivre.',
'My FluxBB Forum'			=>	'Mon Forum FluxBB',
'Description'				=>	'Malheureusement, on ne peut pas vous expliquer ce qu\'est FluxBB - vous devrez vous en rendre compte par vous-même.',
'Username 1'				=>	'Les noms d\'utilisateurs doivent comporter au moins 2 caractères.',
'Username 2'				=>	'Les noms d\'utilisateurs ne doivent pas comporter plus de 25 caractères.',
'Username 3'				=>	'Le nom d\'utilisateur « guest » est réservé.',
'Username 4'				=>	'Les noms d\'utilisateurs ne doivent pas ressembler à une adresse IP.',
'Username 5'				=>	'Les noms d\'utilisateurs ne doivent pas comporter tous les caractères \', " et [ ou ] en même temps.',
'Username 6'				=>	'Les noms d\'utilisateurs ne doivent pas comporter de balises de formatage de texte (BBCode) utilisés par les forums.',
'Short password'			=>	'Les mots de passe doivent comporter au moins 4 caractères.',
'Passwords not match'			=>	'Les mots de passe ne coïncident pas.',
'Wrong email'				=>	'L\'e-mail d\'administrateur que vous avez indiqué est invalide.',
'No board title'			=>	'Vous devez indiquer un titre pour les forums.',
'Error default language'		=>	'La langue par défaut choisie semble ne pas exister.',
'Error default style'			=>	'Le style par défaut choisi semble ne pas exister.',
'No DB extensions'			=>	'Cet environnement PHP n\'est compatible avec aucune des bases de données prises en charge par FluxBB. PHP doit prendre en charge MySQL, PostgreSQL ou SQLite pour pouvoir installer FluxBB.',
'Administrator username'		=>	'Nom d\'utilisateur de l\'administrateur',
'Administrator password 1'		=>	'Mot de passe de l\'administarteur',
'Administrator password 2'		=>	'Confirmation du mot de passe de l\'administrateur',
'Administrator email'			=>	'E-mail de l\'administrateur',
'Board title'				=>	'Titre des forums',
'Base URL'				=>	'URL de base',
'Required field'			=>	'est un champ obligatoire dans ce formulaire.',
'FluxBB Installation'			=>	'Installation de FluxBB',
'Welcome'				=>	'Vous allez installer FluxBB. Pour ce faire, vous devez remplir le formulaire ci-dessous. Si vous rencontrez des difficultés concernant cette installation, veuillez vous référer à la documentation.',
'Install'				=>	'Installer FluxBB 1.4',
'Errors'				=>	'Les erreurs suivantes doivent être corrigées :',
'Database setup'			=>	'Paramétrage de la base de données',
'Info 1'				=>	'Veuillez renseigner les informations demandées pour paramétrer votre base de données FluxBB. Vous devez connaître toutes les informations demandées avant de procéder à l\'installation.',
'Select database'			=>	'Choisir votre type de base de données',
'Info 2'				=>	'FluxBB prend actuellement en charge MySQL, PostgreSQL et SQLite. Si la base de données que vous avez choisie ne figure pas dans le menu déroulant ci-dessous, cela signifie que votre environnement PHP n\'est pas compatible avec cette base de données-ci. Vous pourrez trouver davantage d\'informations concernant la prise en charge de base de données particulières dans la FAQ.',
'Dual MySQL'				=>	'FluxBB a détecté que votre environnement PHP prend en charge 2 moyens différents de communication avec MySQL. Les deux options sont nommées « standard » et « improved ». Si vous ne savez pas trop lequel utiliser, commencez par essayer avec « improved » et si cela ne fonctionne pas, essayez « standard ».',
'InnoDB'				=>	'FluxBB a détecté que votre serveur devrait prendre en charge <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Cela serait un bon choix si vous avez l\'intention de mettre à disposition une grande plate-forme de discussion. Si vous n\'êtes pas sûr de vous, il est recommandé de ne pas utiliser InnoDB.',
'Database type'				=>	'Type de base de données',
'Required'				=>	'(Obligatoire)',
'Database hostname'			=>	'Indiquer le nom d\'hôte de votre serveur de base de données',
'Info 3'				=>	'L\'adresse du serveur de base de données (exemple : localhost, db.monhote.com ou 192.168.0.15). Vous pouvez spécifier un numéro de port si votre base de données n\'utilise pas le port par défaut (exemple : localhost:3580). Pour la prise en charge de SQLite, indiquer n\'importe quoi ou laisser \'localhost\'.',
'Database server hostname'		=>      'Nom d\'hôte du serveur de base de données',
'Database enter name'			=>	'Indiquer le nom de votre base de données',
'Info 4'				=>	'Le nom de la base de données dans laquelle FluxBB sera installé. La base de donnée doit exister. Pour SQLite, indiquer le chemin relatif vers le fichier de base de données. Pour des raisons de sécurité, il est fortement recommandé de placer la base de données SQLite dans un dossier privé (non accessible par le Web) tant que possible. Si le fichier de base de données SQLite n\'existe pas, FluxBB tentera de le créer.',
'Database name'				=>	'Nom de la base de données',
'Database enter informations'	        =>	'Indiquer le nom d\'utilisateur et le mot de passe de votre base de données',
'Database username'			=>	'Nom d\'utilisateur de base de données',
'Info 5'				=>	'Indiquer le nom d\'utilisateur et le mot de passe avec lesquels vous vous connectez à la base de données. À ignorer pour SQLite.',
'Database password'			=>	'Mot de passe de base de données',
'Database enter prefix'			=>	'Indiquer le préfixe de table de la base de données',
'Info 6'				=>	'Si vous le souhaitez, vous pouvez spécifier un préfixe de table. Ainsi vous pourrez faire fonctionner plusieurs copies de FluxBB dans la même base de données (exemple : foo_).',
'Table prefix'				=>	'Préfixe de table',
'Administration setup'			=>	'Paramétrage de l\'administration',
'Info 7'				=>	'Veuillez renseigner les informations demandées afin de paramétrer un administrateur pour votre installation FluxBB.',
'Admin enter username'			=>	'Indiquer le nom d\'utilisateur de l\'administrateur',
'Info 8'				=>	'Le nom d\'utilisateur de l\'administrateur des forums. Vous pourrez créer davantage d\'administrateurs et de modérateurs plus tard. Les noms d\'utilisateur peuvent comporter de 2 à 25 caractères.',
'Admin enter password'			=>	'Indiquer et confirmer le mot de passe administrateur',
'Info 9'				=>	'Les mots de passe doivent comporter au moins 4 caractères. Ils sont sensibles à la casse.',
'Password'				=>	'Mot de passe',
'Confirm password'			=>	'Confirmation du mot de passe',
'Admin enter email'			=>	'Indiquer l\'e-mail de l\'administrateur',
'Info 10'				=>	'L\'e-mail de l\'administrateur des forums.',
'Board setup'				=>	'Paramétrage des forums',
'Info 11'				=>	'Veuillez renseigner les informations demandées afin de paramétrer vos forums FluxBB.',
'Enter board title'			=>	'Indiquer le titre des forums',
'Info 12'				=>	'Le titre de cette plate-forme de discussion (Affiché en haut de chaque page).',
'Enter board description'		=>	'Indiquer la description des forums',
'Info 13'				=>	'Une brève description de cette plate-forme de discussion (Affiché en haut de chaque page). Ce champ peut contenir des balises HTML.',
'Board description'			=>	'Description des forums',
'Enter base URL'			=>	'Indiquer l\'URL de base de votre installation FluxBB',
'Info 14'				=>	'L\'URL (sans barre oblique à la fin) de vos forums FluxBB (exemple : http://forum.mondomaine.com ou http://mondomaine.com/~monutilisateur). Ceci <strong>doit</strong> être juste, sinon, les administrateurs et les modérateurs ne pourront pas soumettre de formulaires. Veuillez prendre note que la valeur prédéfinie ci-dessous n\'est qu\'une suggestion de FluxBB.',
'Choose the default language'	        =>	'Choisir la langue par défaut',
'Info 15'				=>	'La langue par défaut utilisée pour les invités et les utilisateurs qui n\'ont pas opté pour une autre langue dans leur profil.',
'Default language'			=>	'Langue par défaut',
'Choose the default style'		=>	'Choisir le style par défaut',
'Info 16'				=>	'Le style par défaut utilisé pour les invités et les utilisateurs qui n\'ont pas opté pour un autre style dans leur profil.',
'Default style'				=>	'Style par défaut',
'Start install'				=>	'Démarrage de l\'installation',
'DB type not valid'			=>	'«&#160;%s&#160;» n\'est pas un type de base de données valide',
'Table prefix error'			=>	'Le préfixe de table «&#160;%s&#160;» comporte des cacactères interdits ou est trop long. Le préfixe peut contenir les lettres de a à z, tout nombre et le caractère de soulignement (underscore). Mais il ne doit pas commencer par un nombre. La taille maximale est de 40 caractères. Veuillez choisir un autre préfixe.',
'Prefix reserved'			=>	'Le préfixe de table «&#160;sqlite_&#160;» est réservé pour être utilisé par le moteur SQLite. Veuillez choisir un autre préfixe.',
'Existing table error'			=>	'Une table nommée «&#160;%susers&#160;» est déjà présente dans la base de données «&#160;%s&#160;». Cela pourrait signifier que FluxBB est déjà installé ou qu\'une autre application utilise le nom d\'une ou plusieures tables nécessaires à FluxBB. Si vous souhaitez installer plusieurs copies de FluxBB dans la même base de données, vous devez choisir un préfixe de table différent.',
'InnoDB off'				=>	'InnoDB semble ne pas être activé. Veuillez choisir une base de données qui ne prend pas en charge InnoDB ou activez InnoDB sur votre serveur MySQL.',
'Administrators'			=>	'Administrateurs',
'Administrator'				=>	'Administrateur',
'Moderators'				=>	'Modérateurs',
'Moderator'				=>	'Modérateur',
'Guests'                                =>      'Invités',
'Guest'					=>	'Invité',
'New member'				=>	'Nouveau membre',
'Members'                               =>      'Membres',
'Member'				=>	'Membre',
'Announcement'				=>	'Indiquer votre annonce ici.',
'Rules'					=>	'Indiquer vos règles ici',
'Maintenance message'			=>	'Les forums sont temporairement inaccessibles pour maintenance. Veuillez essayer à nouveau dans quelques minutes.',
'Test post'				=>	'Message de test',
'Message'				=>	'Si vous lisez ceci (ce que vous faites probablement), l\'installation de FluxBB semble avoir fonctionné ! A présent, identifiez-vous et rendez-vous au panneau d\'administration pour paramétrer vos forums.',
'Test category'				=>	'Catégorie de test',
'Test forum'				=>	'Forum de test',
'This is just a test forum'		=>	'Ceci n\'est qu\'un forum de test.',
'Alert cache'				=>	'<strong>Le répertoire cache n\'est pas modifiable actuellement !</strong> Pour que FluxBB fonctionne correctement, le répertoire nommé <em>%s</em> doit être modifiable par PHP. Utilisez chmod pour spécifier les permissions appropriées au répertoire. Si vous avez un doute, passez le chmod à 0777.',
'Alert avatar'				=>	'<strong>Le répertoire avatar n\'est pas modifiable actuellement !</strong> Si vous souhaitez que les utilisateurs puissent envoyer vers le serveur leur propre image avatar, vous devez vérifier que le répertoire nommé <em>%s</em> soit modifiable par PHP. Vous pourrez plus tard choisir d\'enregistrer les images avatar dans un autre répertoire (rendez-vous à Admin/Options). Utilisez chmod pour spécifier les permissions appropriées au répertoire. Si vous avez un doute, passez le chmod à 0777.',
'Alert upload'				=>	'<strong>L\'envoi de fichier semble être interdit sur ce serveur !</strong> Si vous souhaitez que les utilisateurs puissent envoyer leur propre image avatar vous devez activer le paramètre de configuration file_uploads dans PHP. Une fois que l\'envoi (upload) de fichiers a été activé, l\'envoi d\'avatars peut être activé dans Administration/Options/Fonctionnalités.',
'FluxBB has been installed'		=>	'FluxBB a été installé. Pour finaliser l\'installation veuillez suivre les instructions ci-dessous.',
'Final instructions'			=>	'Instructions finales',
'Info 17'				=>	'Pour finaliser l\'installation, vous devez cliquer sur le bouton ci-dessous afin de télécharger un fichier nommé config.php. Vous devrez ensuite envoyer ce fichier vers le répertoire racine de votre installation FluxBB.',
'Info 18'				=>	'Une fois que vous aurez envoyé config.php vers le serveur, FluxBB sera complètement installé ! A ce moment-là vous pourrez <a href="index.php">vous rendre à la page d\'accueil des forums</a>.',
'Download config.php file'		=>	'Télécharger le fichier config.php',
'FluxBB fully installed'		=>	'FluxBB a été complètement installé ! Vous pouvez à présent <a href="index.php">vous rendre à la page d\'accueil des forums</a>.',

);
