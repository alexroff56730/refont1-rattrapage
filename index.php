<?php
    include('header.php')
?>
        <main id="index">
            <section id="index-content">
                <article class="post-index">
                    <img src="images/equipe.jpg" alt="photo équipe kercode basketball">
                    <h1>kercode-basketball</h1>
                    <p>
                        Voici l'équipe kercode, ce groupe d'éléve du greta du lycée Lesage de Vannes
                        à récement fonder une équipe de basketball, pour se détendre aprés une dur journée 
                        de code intensif !
                    </p>
                </article>
                <article class="post-index">
                    <img src="images/corona.jpg" alt="représentation COVID-19 planéte terre masqué">
                    <h1>Lorem, ipsum.</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias rerum similique ipsa quo esse earum! Autem a aut, molestiae iste magnam, deserunt aliquam aliquid voluptates id commodi cumque voluptatem temporibus.
                    </p>
                </article>
            </section>
            <section id="patnerslide">
                <div id="slider">
                    <input type="radio" id="show_slide1" name="slider_commands">
                    <input type="radio" id="show_slide2" name="slider_commands">
                    <input type="radio" id="show_slide3" name="slider_commands">
                    <input type="radio" id="play_slider" name="slider_commands">

                    <div id="slides">
                        <figure id="slide1">
                            <img src="images/PassGen.png">
                            <figcaption>Premier Partenaire !!!</figcaption>
                        </figure>
                        <figure id="slide2">
                            <img src="images/PassGenBeta.png" alt="Paysage de montagne">
                            <figcaption>Aperçu BETA 0.0.3</figcaption>
                        </figure>
                        <figure id="slide3">
                            <img src="images/corona.jpg" alt="Forêt en automne">
                            <figcaption>Retard suite au COVID-19</figcaption>
                        </figure>
                    </div>
                <nav>
                    <ul class="dots_commands">
                        <li><label for="show_slide1">Slide 1</label></li>
                        <li><label for="show_slide2">Slide 2</label></li>
                        <li><label for="show_slide3">Slide 3</label></li>
                    </ul>
                    <label for="play_slider" aria-label="Play" id="play" title="Play">Play</label>
                </nav>
            </div>
        </section>                
        </main>
<?php
    include('footer.php')
?>