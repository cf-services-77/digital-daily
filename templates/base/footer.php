        <section id="footer-app">
            <div class="content row">
                <div class="col-sm-6 text-center-footer">
                    <a href="<?= $host ?>/templates/home/">
                        <div class="logo-footer text-center-footer">
                            <img src="<?= $logoTrans ?>">
                        </div>
                    </a>
                    <p>
                        Optimisez votre travail avec une bonne intégrité des données, laissez nous un message.
                    </p>
                    <a href="../home/#commande">
                        <button type="button" class="btn btn-primary btn-cmd">Prendre contact</button>
                    </a>
                    <hr class="line-footer">
                    <div class="icons">
                        <a href="https://www.linkedin.com/in/hassane-toiwilou-6b13811a0?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                            <img src="<?= $linkedin ?>">
                        </a>
                        <a href="#">
                            <img src="<?= $twitter ?>">
                        </a>
                        <a href="#">
                            <img src="<?= $facebook ?>">
                        </a>
                        <a href="#">
                            <img src="<?= $instagram ?>">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 references">
                    <h1>Références</h1>
                    <hr class="line-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul>
                                <li>
                                    Icon par <a href="https://fontawesome.com/icons" target="_blank">Fontawesome</a>
                                </li>
                                <li>
                                    Icon par <a href="https://www.flaticon.com/fr/" target="_blank">Flaticon</a>
                                </li>
                                <li>
                                    Image par <a href="https://www.free../../public/images.com/fr" target="_blank">Free../../public/images</a>
                                </li>
                                <li>
                                    Image par <a href="https://www.free../../public/images.com/fr" target="_blank">Free../../public/images</a>
                                </li>
                                <li>
                                    Image par <a href="https://fr.freepik.com/" target="_blank">Freepik</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li>
                                    Logo par <a href="https://www.canva.com/" target="_blank">Canva</a>
                                </li>
                                <li>
                                    Graphe par <a href="https://canvasjs.com/javascript-charts/pie-chart-legends/" target="_blank">Canvajs</a>
                                </li>
                                <li>
                                    Editeur par <a href="https://www.photoroom.com/fr/outils/detourer-une-image" target="_blank">Photoroom</a>
                                </li>
                                <li>
                                    Design par <a href="https://blog.hubspot.com/website/website-footer" target="_blank">HubSpot</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom text-center">
                <small>&copy; Digital daily 2025</small>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <?php
            foreach ($jsPaths as $path) { ?>
                <script src="<?= $path ?>"></script>
            <?php }
        ?>
    </body>
</html>