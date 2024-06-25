<?php 
$title = 'Contact';?>
    <div class="contact">
        <div id="container">
            <h1>Contactez-nous</h1>
            <form action="submit.php" method="POST">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required="">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" required="">
                </div>
                <div class="form-group">
                <label>Raison du contact</label>
                <div class="radio-group">
                    <label><input type="radio" name="contact_reason" value="service_comptable" required> Service Comptable</label>
                    <label><input type="radio" name="contact_reason" value="service_technique"> Service Technique</label>
                    <label><input type="radio" name="contact_reason" value="service_client"> Service Client</label>
                    <label><input type="radio" name="contact_reason" value="autre"> Autre</label>
                </div>
            </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="4" required=""></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
   
 
