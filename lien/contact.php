<?php require 'contact-post.php'; ?>
<?php
$title = "Contact";
$description = "Ceci est une page de contact";
include 'includes/inc_top.php';
?>



<h1 class="contact">Formulaire de contact</h1>

<div class="form">


    <form action="contact-post.php" method="post">

        <table class="table">
            <tr>
                <td><label for="">Nom :</label></td>
                <td><input type="email" name="Email" id="" placeholder="@mail"></td>
            </tr>
            <tr>
                <td><label for="">Message :</label></td>
                <td><textarea name="Message" id="" cols="20" rows="5" placeholder="Message...."></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Envoyer" class="bouton">
                </td>
            </tr>
        </table>
    </form>
</div>



<?php if (!empty($_GET['erreurEmail'])) : ?>
    <p class="avert">Veuillez renseigner votre Email </p>
<?php endif; ?>


<?php if (!empty($_GET['erreurMessage'])) : ?>
    <p class="avert">Merci de bien rédiger en détails votre message</p>
<?php endif; ?>


<!-- <?php if (empty($_GET['erreurEmail']) && empty($_GET['erreurMessage']) && !empty($_GET['submit'])) : ?>
    <p class="reussi">Merci pour votre message</p>
<?php endif; ?> -->

<?php if (!empty($_GET['sucess'])) : ?>
    <p class="reussi">Merci de votre prise de contact</p>
<?php endif; ?>



</body>

</html>