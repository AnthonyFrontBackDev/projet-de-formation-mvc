<?php
ob_start()
?>

<form method="post" action="">
    <table>
        <th>Poster un nouvel article</th>
        <tr>
            <td>Titre du nouvel article :</td>
            <td><input type="text" name="title" placeholder="titre de l'article"></td>
        </tr>
        <tr>
            <td>
                <textarea type="text" name="article" cols="30" rows="10" placeholder="tapez votre article ici.."></textarea>
            </td>
        </tr>
    </table>
    <button type='submit'>Poster l'article</button>
</form>

<?php
$content = ob_get_clean();
require('base.php');
?>


