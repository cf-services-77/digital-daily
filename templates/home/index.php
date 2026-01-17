<section id="home-app">
    <div class="services bg-light">
        <div class="row">
            <div class="col-sm-6">
                <h1>
                    <span>Dernière réalisation</span>
                </h1>
                <div class="service-item last-app-cls hover" data-link="<?= $lastAppKey ?>" style="background-image: url('<?= $lastApp ?>');">
            
                </div>
            </div>
            <div class="col-sm-6">
                <h1>
                    <span>Application sur-mesure</span>
                </h1>
                <div class="service-item app-custom-cls hover" data-link="service" style="background-image: url('<?= $service ?>');">
            
                </div>
            </div>
        </div>
    </div>
    <div class="about bg-light">
        <h1 class="about-title">Qui sommes-nous ?</h1>
        <div class="about-content">
            <div class="row">
                <div class="col-sm-6" style="position: relative;">
                    <div class="profile v-bottom">
                        <img src="<?= $profile ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-text-container">
                        <div class="about-text bg-white shadow-lg v-center">
                            <div class="canva">
                                <div id="chartContainer" style="height: 400px; width: 100%; font-size:30px;"></div>
                            </div>
                            <h1 class="mb-3">Ingénieur Développeur Applicatif</h1>
                            <p class="sz-22">
                                Après une licence de mathématiques fondamentales, j'ai choisi de continuer mon cursus en informatique 
                                entant qu'Ingénieur Développeur Applicatif. Je travaille sur les sujets de développement  d'applications Web 
                                avec des outils, des solutions technologiques modernes, et aussi l'exploitation dans les environnements Cloud. 
                                Mon but est de réaliser un parcours de DevSecOps afin d'arriver au niveau d'un Architecte entreprise.
                            </p>
                            <button class="btn btn-secondary learn-more-cls sz-22 mt-3" data-link="portfolio">En savoir plus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="commande" class="contact-container bg-light">
        <h1>Votre besoin</h1>
        <div class="contact-content row">
            <div class="col-sm-5 col-contact" style="position: relative;">
                <div class="contact-img v-center">
                    <img src="<?= $contact ?>">
                </div>
            </div>
            <div class="col-sm-7 col-contact">
                <div class="form bg-white shadow-sm">
                    <form action="<?= $contactFormPath ?>" method="POST">
                        <div class="form-check form-check-inline" style="margin-right: 100px;">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadioMale" value="Monsieur" checked>
                            <label class="form-check-label" for="inlineRadioMale">Monsieur</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadioFemale" value="Madame">
                            <label class="form-check-label" for="inlineRadioFemale">Madame</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-contact">
                                <div class="form-group">
                                    <label for="firstname-input">Prénom <span style="color: red;">*</span></label>
                                    <input type="text" name="firstname" id="firstname-input" class="form-control" placeholder="Prénom" required>
                                </div>
                            </div>
                            <div class="col-sm-6 col-contact">
                                <div class="form-group">
                                    <label for="lastname-input">Nom <span style="color: red;">*</span></label>
                                    <input type="text" name="lastname" id="lastname-input" class="form-control" placeholder="Nom" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email-input">E-mail <span style="color: red;">*</span></label>
                            <input type="email" name="email" id="email-input" class="form-control" placeholder="E-mail" required>
                        </div>
                        <div class="form-group">
                            <label for="subject-input">Objet <span style="color: red;">*</span></label>
                            <input type="text" name="subject" id="subject-input" class="form-control" placeholder="Objet" required>
                        </div>
                        <div class="form-group">
                            <label for="message-input">Votre demande <span style="color: red;">*</span></label>
                            <textarea rows="5" name="message" id="message-input" class="form-control" placeholder="Faites-nous part de votre projet" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-cmd">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>