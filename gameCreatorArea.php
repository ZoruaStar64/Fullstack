<?php
require_once('creds.php');
require_once('functions.php');



?>
<form id="createGame" action='includes/inc.createGame.php' method='POST' enctype="multipart/form-data">

    <div>
        <!--<input type="hidden" name="hiddenId" value="<?php /*echo $userId */?>">-->
        Game name : <input type='text' name='gameName' value='' required>
        Game cover (Image): <input type="file" name="gameCover" value="" required>
    </div>
    <input id="gameCreationButton" type='submit' name='createGame' value='Create Game'>

</form>

