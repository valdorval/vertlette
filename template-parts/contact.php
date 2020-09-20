<main>

     <section class="contact container-big u-margin-top-big">
          <header class="contact__header">
               <img src="<?php echo get_template_directory_uri(); ?>/img/photo-magasin.jpg" alt="Photo du magasin">
          </header>
          <div class="contact__content flex u-margin-bottom-big">
               <div class="contact__coordonne u-margin-top-big">
                    <div class="contact__details center">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2800.4209773974276!2d-71.85357258423423!3d45.42101454434476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb7b248528e0669%3A0xf2e252f931b28a0b!2s999%20Rue%20des%20Valets%2C%20Sherbrooke%2C%20QC!5e0!3m2!1sfr!2sca!4v1600286224055!5m2!1sfr!2sca" class="contact__map u-margin-top-normal" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                         <p class="center u-margin-top-normal">999, rue des Valets, Sherbrooke, QC. Canada J1E 3G1<br />
                              Téléphone: 999-999-9999
                         </p>
                         <p class="center u-margin-top-normal u-margin-bottom-xsmall"><strong>Heures d'ouverture</strong></p>
                         <div class="flex contact__details--hours center">
                              <p>Lundi au mercredi</p>
                              <p>9 h 00 à 17 h 00</p>
                         </div>
                         <div class="flex contact__details--hours center">
                              <p>Jeudi et vendredi</p>
                              <p>9 h 00 à 21 h 00</p>
                         </div>
                         <div class="flex contact__details--hours center">
                              <p>Samedi</p>
                              <p>9 h 00 à 17 h 00</p>
                         </div>
                         <div class="flex contact__details--hours center">
                              <p>Dimanche</p>
                              <p class="u-margin-bottom-big">10 h 00 à 17 h 00</p>
                         </div>
                    </div>

               </div>
               <div class="contact__form-section u-margin-top-normal">
                    <form class="u-margin-top-big contact__form">
                         <div class="flex contact__form--item">
                              <div>
                                   <label for="prenom" class="p-dark">Prénom</label>
                                   <input type="text" placeholder="Entrez votre prénom" id="prenom" class="form-input contact__input">
                              </div>
                              <div>
                                   <label for="nom" class="p-dark">Nom</label>
                                   <input type="text" placeholder="Entrez votre nom" id=" nom" class="form-input contact__input">
                              </div>
                         </div>
                         <div class="flex contact__form--item u-margin-top-normal">
                              <div>
                                   <label for="courriel" class="p-dark">Courriel</label>
                                   <input type="text" placeholder="Entrez votre adresse courriel" id="courriel" class="form-input contact__input">
                              </div>
                              <div>
                                   <label for="sujet" class="p-dark">Sujet du message</label>
                                   <select id="sujet" class="form-input contact__input">
                                        <option value="selection" disabled selected>Sélectionner</option>
                                        <option value="question">Question</option>
                                        <option value="suggestion">Suggestion</option>
                                        <option value="question">Réparation</option>
                                   </select>
                              </div>


                         </div>

                         <label for="message" class="p-dark u-margin-top-normal">Message</label>
                         <textarea placeholder="Entrez votre texte" id="message" class="form-input form-input--textarea contact__textarea"></textarea>
                         <div class="recup__button-right u-margin-top-big">
                              <button class="btn btn__dark u-margin-top-small u-margin-bottom-big"><a href="#"></a>Envoyer</a></button>
                         </div>
                    </form>
               </div>
          </div>
     </section>

</main>