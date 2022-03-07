<?php ob_start() ?>

<form method="post" action="">
    <table>

        <th>Connection</th>

        <tr>
            <td><input type="text" name="email" placeholder="Exemple: google@google.fr"></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="*******"></td>
        </tr>
    </table>
    <button type='submit'> Se connecter </button>
</form>

<?php
$content = ob_get_clean();
require('base.php');
?>