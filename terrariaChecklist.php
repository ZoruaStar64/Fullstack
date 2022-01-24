<?php
include_once('functions.php');
include_once('creds.php');
$userId = $_SESSION['user']['userId'];
$query = "SELECT * FROM Trackers INNER JOIN Trackers_has_Users ON Trackers.idTrackers = Trackers_has_Users.Trackers_idTrackers WHERE Trackers_has_Users.Users_userId = '$userId'";
$result = $link->query($query);

while ($arraytable = $result->fetch_assoc()) {

    $trackerId = $arraytable['Trackers.idTrackers'];
    $checked = $arraytable['checked'];

    if ($checked == 0) {
        $class = 'grayscale';
        echo "the check is 0";
    } elseif ($checked == 1) {
        $class = 'ungrayscale';
        echo "the check is 1";
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/terraria.css">
    <link rel="shortcut icon" href="img/ColoredStar.png">
    <title>Star Game Tracker</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
</head>
<body>

<div id="navbar">
    <div class="Shine">
        <div><a href='index.php'><figure><img class="linkButtons" src='img/HomeButton.png' alt='Home button'></figure></a></div>
        <div><a href='profile.php?id=<?php echo $userId ?>'><figure><img class="linkButtons" src='img/ProfileButton.png' alt='main menu button'></figure></a></div>
        <div><a href='index.php?logout'><figure><img class="linkButtons" src='img/LogoutButton.png' alt='Logout button'></figure></a></div>
    </div>
</div>

<div class="pageContainer1">

    <div class="Terraspark">
        <h1 id="terraSparkTitle" >Terraspark</h1>

        <div id="itemCraftGuideBar1" class="craftGuideStyle">

        </div>
        <div id="createFrostspark">
            <p>

                 <img id="tracker1" src="terrariaImg/Spectre_Boots.png" alt="Spectre Boots"> <br>

                 <img id="tracker2" src="terrariaImg/Lightning_Boots.png" alt="Lightning Boots"> <br>

                 <img id="tracker3" src="terrariaImg/Frostspark_Boots.png" alt="Frostspark Boots">

            </p>
        </div>

        <div id="createTerraSpark">
            <p>
                <img class="grayscale" id="tracker7" src="terrariaImg/Terraspark_Boots.png" alt="Terraspark Boots">
            </p>
        </div>

    <div id="createLavaWaders">
        <p>
            <img id="tracker4" src="terrariaImg/Obsidian_Skull.png" alt="Obsidian Skull">
            <br>
            <img id="tracker5" src="terrariaImg/Molten_Charm.png" alt="Molten Charm">
            <br>
            <img id="tracker6" src="terrariaImg/Lava_Waders.png" alt="Lava Waders">
        </p>
    </div>


</div>


</div>
<div class="pageContainer2">
    <div class="Cellphone">
        <h1 id="cellphoneTitle">Cellphone</h1>
        <div id="itemCraftGuideBar2" class="craftGuideStyle">

        </div>
        <div id="createGPS">
            <p>
                <img id="tracker8" src="terrariaImg/Platinum_Watch.png" alt="Platinum Watch">
                <img id="tracker9" src="terrariaImg/Gold_Watch.png" alt="Gold Watch">
                <br>
                <img id="tracker10" src="terrariaImg/GPS.png" alt="GPS">
            </p>
        </div>

        <div id="createREK3K">
            <p>
            <img class="grayscale" id="tracker11" src="terrariaImg/R.E.K._3000.png" alt="R.E.K.3000">
            </p>
        </div>

        <div id="createGoblinTech">
        <p>
            <img class="grayscale" id="tracker12" src="terrariaImg/Goblin_Tech.png" alt="Goblin Tech">
        </p>
        </div>

        <div id="createFishFinder">
            <p>
                <img class="grayscale" id="tracker13" src="terrariaImg/Fish_Finder.png" alt="Fish Finder">
            </p>
        </div>

        <div id="createPhone">
            <p>
            <img id="tracker14" src="terrariaImg/PDA.png" alt="PDA">
            <img id="tracker15" src="terrariaImg/Cell_Phone.png" alt="Cellphone">
            </p>
        </div>

    </div>
</div>

<div class="pageContainer3">
    <div class="AnkhShield">
        <h1 id="ankhShieldTitle">Ankh Shield</h1>
        <div id="itemCraftGuideBar3" class="craftGuideStyle">

        </div>

        <div id="createArmorBracing">
            <p>
                <img class="grayscale" id="tracker16" src="terrariaImg/Armor_Bracing.png" alt="Armor Bracing">
            </p>
        </div>

        <div id="createMedicatedBandage">
            <p>
                <img class="grayscale" id="tracker17" src="terrariaImg/Medicated_Bandage.png" alt="Medicated Bandage">
            </p>
        </div>

        <div id="createCounterCurse">
            <p>
                <img class="grayscale" id="tracker18" src="terrariaImg/Countercurse_Mantra.png" alt="Countercurse Mantra">
            </p>
        </div>

        <div id="createThePlan">
            <p>
                <img class="grayscale" id="tracker19" src="terrariaImg/The_Plan.png" alt="The Plan">
            </p>
        </div>

        <div id="createAnkhShield">
            <p>
                <img id="tracker20" src="terrariaImg/Obsidian_Skull.png" alt="Obsidian Skull">
                <img id="tracker22" src="terrariaImg/Blindfold.png" alt="Blindfold">
                <br>
                <img id="tracker21" src="terrariaImg/Obsidian_Shield.png" alt="Obsidian Shield">
                <img id="tracker23" src="terrariaImg/Ankh_Charm.png" alt="Ankh Charm">
                <br>
                <img id="tracker24" src="terrariaImg/Ankh_Shield.png" alt="Ankh Shield">
            </p>
        </div>
    </div>
</div>

<div class="pageContainer4">
    <div class="Zenith">
        <h1 id="zenithTitle">Zenith</h1>
        <div id="itemCraftGuideBar4" class="craftGuideStyle">

        </div>

        <div id="createNightsEdge">
            <img id="tracker25" src="terrariaImg/Blade_of_Grass.png" alt="Blade of Grass">
            <img id="tracker26" src="terrariaImg/Muramasa.png" alt="Muramasa">
            <img id="tracker27" src="terrariaImg/Fiery_Greatsword.png" alt="Fiery Greatsword">
            <img id="tracker28" src="terrariaImg/Lights_Bane.png" alt="Lights Bane">
            <img id="tracker29" src="terrariaImg/Blood_Butcherer.png" alt="Blood Butcherer">
        </div>

        <div id="createTerrablade">
            <img id="tracker31" src="terrariaImg/Chlorophyte_Bar.png" alt="Chlorophyte Bar">
            <img id="tracker32" src="terrariaImg/Excalibur.png" alt="Excalibur">
            <img id="tracker30" src="terrariaImg/Nights_Edge.png" alt="Nights Edge">
            <br>
            <img id="tracker33" src="terrariaImg/True_Excalibur.png" alt="True Excalibur">
            <img id="tracker34" src="terrariaImg/True_Nights_Edge.png" alt="True Nights Edge">
            <br>
            <img id="tracker35" src="terrariaImg/Terra_Blade.png" alt="Terra Blade">
        </div>

        <div id="createZenith">
            <img id="tracker36" src="terrariaImg/Copper_Shortsword.png" alt="Copper Shortsword">
            <img id="tracker37" src="terrariaImg/Starfury.png" alt="Starfury">
            <img id="tracker38" src="terrariaImg/Enchanted_Sword.png" alt="Enchanted Sword">
            <img id="tracker39" src="terrariaImg/Bee_Keeper.png" alt="Bee Keeper">
            <img id="tracker40" src="terrariaImg/Seedler.png" alt="Seedler">
            <img id="tracker41" src="terrariaImg/The_Horsemans_Blade.png" alt="The Horsemans Blade">
            <img id="tracker42" src="terrariaImg/Influx_Waver.png" alt="Influx Waver">
            <img id="tracker43" src="terrariaImg/Star_Wrath.png" alt="Star Wrath">
            <img id="tracker44" src="terrariaImg/Meowmere.png" alt="Meowmere">
            <br>
            <img id="tracker45" src="terrariaImg/Zenith.png" alt="Zenith">
        </div>

    </div>
</div>

<script src="JS/terraria.js"></script>
</body>
</html>