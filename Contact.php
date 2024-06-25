<?php 
$title = 'contact';
include 'Header.php';?>
    <div class="contact">
        <div id="container">
            <h1>Contactez-nous</h1>
            <form action="envoi_formulaire.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="sujet">Sujet :</label>
                    <input type="text" id="sujet" name="sujet" required>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php';?>
 
