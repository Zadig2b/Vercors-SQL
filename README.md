# Vercors-SQL
Le music vercors festival vous confie la réalisation de la V2 de son système de reservation.
Assigné

Le festival Music Vercors est extrêmement content de votre performance. Les ventes ont augmenté de manière significative, dépassant les capacités du système actuel qui utilise un simple fichier CSV comme base de données. Vous êtes donc chargé de développer la version 2 de ce système de réservation, avec une vraie base de données relationnelle. Vous créerez la base de données résultant de votre MCD, qui remplacera le CSV utilisé jusque-là.

HTML5
PHP
MySQL
Algorithmique
JavaScript
CSS3
Référentiels
[2023] Développeur web et web mobile

# Contexte du projet
En tant que développeur web & web mobile, installer et configurer son environnement de travail en fonction du projet

Analyse des besoins métier.

Maquetter des interfaces utilisateur

Conception d'un modèle conceptuel de données.

Mettre en place une base de données relationnelle

Développement de composants métier.

Développement de composants dans le language d'une base de données.

Réaliser des interfaces utilisateur statiques web ou web mobile

Développer la partie dynamique des interfaces utilisateur web ou web mobile

Modalités pédagogiques
Dans ce projet, vous serez en binôme.

Vous devez vous partager les tâches équitablement et fournir le projet le plus qualitatif possible.

L'application doit être testée fonctionellement, ne créez pas une pull request si vous n'êtes pas sur que le code est parfait.

La mise en ligne est prévue le 5 avril.

Des nouveautés seront apportées au projet.

​

# Modalités d'évaluation
Vous serez évaluer sur la cohérence du MCD, sur la qualité de traitement du formulaire et du code.
Vous serez également évaluer sur l'application d'un Git flow dans votre démarche de versioning.
Des injections SQL pourraient être tentées lors de la présentation et vous devrez donc préparer votre application à cela.
De la même manière, le hashage des  mots de passe et la conservation de la date d'acceptation des RGPD devront être appliquées.


# Conseil :  
La partie " conception " est plus importante que la partie développement dans la réalisation d'une application.
Une application bien conçue et réfléchie sera facile à mettre en place et à faire évoluer.
Ne vous précipitez surtout pas dans un éditeur de code, prennez le temps de penser, de réfléchir, de concevoir le MCD et d'imaginer  ses évolutions possibles.
C'est la mission la plus importante dans votre futur métier, car des erreurs stratégiques dues à une conception baclée vous feront perdre un temps précieux et pourraient entrainer une cascade d'ennuis à quelques jours de la livraison ( oui , les gros problèmes arrivent toujours au pire moment possible.)

Livrables
Vous serez évalué sur la cohérence du MCD, que vous expliquerez lors de la remise, sur la qualité de traitement du formulaire et sur la qualité du code. Vous serez également évalué sur l'application d'un Git flow dans votre démarche de versioning. 
Des injections SQL pourraient être tentées lors de la présentation et vous devrez donc préparer votre application à cela.
De même, le hachage des mots de passe et la conservation de la date d'acceptation des RGPD devront être appliqués.

Vous ferez une courte présentation pour montrer la partie fonctionnelle des modifications (les écrans, pas le code). Vous aborderez les difficultés rencontrées, l'avancée du projet et les tâches réalisées par chacun.

Vous devrez réaliser un MCD cohérent pour la réservation (par exemple : existe-t-il des tables annexes comme catégorie, jours de festival, activités, etc.). 

Vous pouvez maquetter tout ou partie des éventuelles nouvelles pages de l'application. Votre application est protégée contre les injections SQL. Un email devra être envoyé au client à chaque réservation. Le mot de passe est hashé, et la date d'acceptation des RGPD se remplit avec la date du jour lors de l'inscription. Votre application respecte le pattern MVC et vos fichiers de code non publics ne sont pas visibles grâce au fichier .htaccess. Un administrateur peut voir toutes les réservations, modifier ou supprimer une réservation. Les visiteurs peuvent consulter uniquement leurs réservations.

Vous respectez le Gitflow suivant : 
Une branche main qui contient la version stable en ligne.
Une branche de dev qui contient votre dernière feature testée par vous, et qui va être testé par votre binôme avant merge sur la branche main. 
Une branche par feature.

Autrement dit :

Avant de commencer une fonctionnalité (par exemple : l'envoi d'e-mails), vous créez une branche. Une fois la fonctionnalité terminée et testée, vous la poussez sur la branche "dev" en créant une pull request. Après que votre binôme a relu le code et testé la fonctionnalité dans un navigateur, vous pouvez fusionner cette branche avec la branche principale qui sera votre branche en ligne. Comme le disent de nombreux développeurs, une fonctionnalité non testée n'est pas une fonctionnalité terminée. Ce système de versioning est largement utilisé par de nombreuses entreprises pour maintenir une orchestration logique et éviter de déployer des fonctionnalités non terminées ou susceptibles de générer des failles de sécurité.

Rappelez-vous que votre binôme est autant dans l'inconfort que vous, et que la bienveillance mutuelle et la rigueur dans le travail fourni sont les clés du succès. Le niveau de ce brief se rapproche de plus en plus des missions de base qui vous seront confiées dans votre carrière. Amusez-vous, apprenez, et surtout, ayez confiance en vous, vous pouvez toutes et tous y arriver.

Ps: Il y a beaucoup de fichiers et de contexte, ChatGpt sera inefficace et vous fera perdre du temps que vous ne pouvez pas perdre.



# Critères de performance
L'application est organisée en couche et respecte notamment le design pattern MVC.
Chaque réservation doit déclencher l'envoi d'un email de confirmation au visiteur et à l'administrateur.
Toutes les informations doivent être persistées en base de données. 
Les visiteurs doivent pouvoir s'inscrire, se connecter, et voir leurs réservations. 
Les administrateurs doivent pouvoir voir toutes les réservations, les modifier et les supprimer.
Le MCD est cohérent et doit permettre des évolutions d'une année sur l'autre ( dates en bdd ? ) 
Les champs sont nettoyés et protégées contre les injections SQL.
Un git flow est suivi ( oui c'est facilement vérifiable ).
Le site est en ligne,  et surtout : 
Le formulaire fonctionne, ou renvoi des messages d'erreurs sans faire s'arrêter l'application avec des codes http ou des var dump.
Pensez a enlever les var dump et console.log du code.