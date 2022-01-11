<?php
require_once('creds.php');
require_once('functions.php');



?>
<form id="createGame" action='includes/inc.createGame.php' method='POST' enctype="multipart/form-data">

    <div>
        Game name : <input type='text' name='gameName' value='' required>
        <br>
        Game cover (Image): <input type="file" name="gameCover" value="" required>
        <br>
        Page link: <input type="text" name="pageLink" value="" required>
    </div>
    <input id="gameCreationButton" type='submit' name='createGame' value='Create Game'>

</form>

