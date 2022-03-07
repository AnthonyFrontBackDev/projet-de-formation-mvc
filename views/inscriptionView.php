<?php

ob_start() ?>

<form method="post" action="">
    <table>

        <th>Inscription</th>

        <tr>
            <td><input type="text" name="pseudo" placeholder=" Exemple: Senôr eL Pato "></td>
        </tr>

        <tr>
            <td><input type="text" name="email" placeholder="Exemple: google@google.fr"></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="*******"></td>
        </tr>
        <tr>
            <td><input type="password" name="password-confirm" placeholder="Confirmez votre Mot de passe"></td>
        </tr>
    </table>
    <button type="submit"> S'inscrire </button>
</form>
<?php
$content = ob_get_clean();
require("base.php");

?>