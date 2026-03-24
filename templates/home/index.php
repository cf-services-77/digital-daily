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
                    <form id="contactForm">
                        <div id="companyBlock">
                            <div class="form-check form-check-inline" style="margin-right: 100px;">
                                <input class="form-check-input" type="radio" name="is_company" id="inlineRadioIndividual" value="Monsieur" checked>
                                <label class="form-check-label" for="inlineRadioIndividual">Particulier</label>
                            </div>
                            <div class="form-check form-check-inline mb-4">
                                <input class="form-check-input" type="radio" name="is_company" id="inlineRadioCompany" value="Madame">
                                <label class="form-check-label" for="inlineRadioCompany">Entreprise</label>
                            </div>
                        </div>
                        <div id="company" class="mb-4 none">
                            <div class="form-group mb-4">
                                <label for="company-input">Nom de l'entreprise <span style="color: red;">*</span></label>
                                <input type="text" name="company" id="company-input" class="form-control" placeholder="Nom de l'entreprise">
                            </div>
                            <h3>Personne de contact</h3>
                        </div>
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
                    <div id="message" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const individualRadio = document.getElementById('inlineRadioIndividual');
    const companyRadio = document.getElementById('inlineRadioCompany');
    const companyInput = document.getElementById('company-input');
    const companyBlock = document.getElementById('companyBlock');
    const company = document.getElementById('company');

    companyBlock.addEventListener('click', (e) => {        
        if (individualRadio.contains(e.target) && individualRadio.checked) {
            companyInput.removeAttribute('required');

            if (!company.classList.contains('none')) {
                company.classList.add('none');
            }
        }

        if (companyRadio.contains(e.target) && companyRadio.checked) {
            companyInput.setAttribute('required', '');
            company.classList.remove('none');
        }
    });

    document.getElementById('contactForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        const data = {
            is_company: !!document.getElementById('inlineRadioCompany').checked,
            company: document.getElementById('company-input').value,
            gender: document.getElementById('inlineRadioFemale').checked ? 'Madame' : 'Monsieur',
            firstname: document.getElementById('firstname-input').value,
            lastname: document.getElementById('lastname-input').value,
            email: document.getElementById('email-input').value,
            subject: document.getElementById('subject-input').value,
            message: document.getElementById('message-input').value
        };

        try {
            const response = await fetch('<?= $api ?>/api/commands', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });

            const result = await response.json();

            if (response.ok) {
                document.getElementById('message').innerHTML =
                    '<div class="alert alert-success">Message envoyé ✅</div>';
            } else {
                document.getElementById('message').innerHTML =
                    '<div class="alert alert-danger">' + (result.message || 'Erreur') + '</div>';
            }

        } catch (error) {
            console.error(error);
            document.getElementById('message').innerHTML =
                '<div class="alert alert-danger">Erreur serveur</div>';
        }

        setTimeout(() => {
            document.getElementById('message').innerHTML = '';
        }, 3000);
    });
</script>
