<section id="erp-transport-app" class="none">
    <div class="container">
        <h1>ERP-TRANSPORT</h1>
        <p>
            ERP-TRANSPORT est une application web dont le besoin principale est la 
            gestion des tournées de marchandises pour un transporteur. Il s'agit d'un 
            outil sur-mesure pour le besoin d'un client spécifique mais dont les 
            fonctionnalités de base restent tout à fait compatibles à d'éventuels 
            besoins pour un client similaire. Pour celui-ci, le besoin s'étend 
            jusqu’à la gestion des chauffeurs (et bien d’autres) et la 
            génération des factures.
        </p>
        <h3>Le Dashboard</h3>
        <p>
            Après authentification, l’utilisateur accède au Dashboard où sont représentés 
            les différents diagrammes de l’évolution des différentes demandes.
        </p>
        <div class="img-item">
            <img src="<?= $dashboard ?>">
        </div>
        <h3>Le Planning</h3>
        <p>
            Comme le nom l’indique, c’est sur le planning qu’on visualise quel chauffeur 
            est attribué à quelle tournée, et à quelles heures débute et se termine 
            celle-ci. Il est aussi possible d’attribuer directement une tournée 
            à un chauffeur sur le planning, ou même voir les détails d’une 
            tournée en la survolant avec le curseur.
        </p>
        <div class="img-item">
            <img src="<?= $planning ?>">
        </div>
        <h3>Le Puits de tournées</h3>
        <p>
            Le “puits de tournées” est un abus de langage qui signifie la liste des tournées. 
            Sur cette page on retrouve toutes les tournées du jour J, celles de la veille, 
            ainsi que celles du lendemain. Les tournées peuvent être filtrées par statut, 
            catégorisé par un code couleur au niveau des cases à cocher, ou à partir de 
            la liste des différentes colonnes d’une tournée.
        </p>
        <div class="img-item">
            <img src="<?= $tours ?>">
        </div>
        <h3>L'Administration</h3>
        <p>
            Pour accéder à toute gestion de l’application, il faut, bien évidemment, passer 
            par l’administration. Certaines gestions sont plus parlantes comme les 
            gestions des chauffeurs, des clients (où on génère les factures), des 
            utilisateurs, et d’autres sont spécifiques au besoin du client.
        </p>
        <div class="img-item">
            <img src="<?= $admin ?>">
        </div>
        <h3>La Flotte</h3>
        <p>
            Tous les véhicules sont répertoriés ici en spécifiant le type, la plaque 
            d’immatriculation ainsi que toute information jugée nécessaire. 
        </p>
        <div class="img-item">
            <img src="<?= $flotte ?>">
        </div>
        <h3>Les congés</h3>
        <p>
            Il y a aussi les congés qui sont gérés dans l’application, représentés tout 
            au long du mois sous forme de block sur lequel est mentionné les nom et 
            prénom de l’utilisateur concerné.
        </p>
        <div class="img-item">
            <img src="<?= $leave ?>">
        </div>
        <p>
            Voici les fonctionnalités clés de l’application <strong>ERP-TRANSPORT</strong>. 
            Il y a, bien entendu, d’autres fonctionnalités que vous pouvez découvrir si 
            cela vous intéresse. N’hésitez pas à nous 
            <span class="contact-erp-transport-cls hover" data-link="home">contacter</span> si vous souhaitez 
            avoir plus d’informations.
        </p>
    </div>
</section>