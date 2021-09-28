const craftGuide1 = document.getElementById("itemCraftGuideBar1");
const spectreBoots = document.getElementById("spectreBoots");
const lightningBoots = document.getElementById("lightningBoots")
const frostsparkBoots = document.getElementById("frostsparkBoots")
const obsidianSkull = document.getElementById("obsidianSkull")
const moltenCharm = document.getElementById("moltenCharm")
const lavaWaders = document.getElementById("lavaWaders")
const terraSpark = document.getElementById("terraSpark")

spectreBoots.addEventListener('click', showSpectreRecipe);
lightningBoots.addEventListener('click', showLightningRecipe)
frostsparkBoots.addEventListener('click', showFrostsparkRecipe)
obsidianSkull.addEventListener('click', showObsidianskullRecipe)
moltenCharm.addEventListener('click', showMoltencharmRecipe)
lavaWaders.addEventListener('click', showLavawadersRecipe)
terraSpark.addEventListener('click', showTerrasparkRecipe)

let guide1Active = false;
function showSpectreRecipe() {
        craftGuide1.innerHTML = "";
        craftGuide1.innerHTML += "<div style='margin: 10px 0 0 10px'><img style='transform: scale(2)' src='../terrariaImg/Spectre_Boots.png' alt='Spectre Boots'><p style='float: right; margin: 10px 35% 0 0; font-size: 20px'>Made with</p> " +
            " <br><br><img src='../terrariaImg/Hermes_Boots.png' alt='Hermes Boots'><p style='float: right; margin: 10px 18% 0 0'>Obtained from <img style='transform: scale(1.3); float: right; margin: 0 0 0 0' src='../terrariaImg/Gold_Chest.png' alt='Gold Chest'></p><p style='margin-left: 15px'>or</p>" +
            "<img style='float: left' src='../terrariaImg/Flurry_Boots.png' alt='Flurry Boots'><p style='float: left; margin: 10px 0 0 0'>Obtained from <div style='float: right; margin-right: 10%' class='alignTriangle'><div id='triangleP1'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Frozen_Crate.png' alt='Frozen Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Boreal_Crate.png' alt='Boreal Crate'></div><div id='triangleP2'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Frozen_Chest.png' alt='Frozen Chest'></div></div></p><br><br><br><p style='margin-left: 15px;'>or</p>" +
            "<img style='float: left' src='../terrariaImg/Dunerider_Boots.png' alt='Dunerider Boots'><p style='float: left; margin: 10px 0 0 0'>Obtained from <div style='float: right; margin-right: 10%' class='alignTriangle'><div id='triangleP1'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Mirage_Crate.png' alt='Mirage Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Oasis_Crate.png' alt='Oasis Crate'></div><div id='triangleP2'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Sandstone_Chest.png' alt='Sandstone Chest'></div></div></p><br><br><br><p style='margin-left: 15px;'>or</p>" +
            "<img style='float: left' src='../terrariaImg/Sailfish_Boots.png' alt='Sailfish Boots'><p style='float: left; margin: 10px 0 0 0'>Obtained from <div style='float: right; margin-right: 10%' class='alignSquare'><div id='squareP1'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Wooden_Crate.png' alt='Wooden Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Pearlwood_Crate.png' alt='Pearlwood Crate'></div><div id='squareP2'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Iron_Crate.png' alt='Iron Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Mythril_Crate.png' alt='Mythril Crate'></div></div></p><br><br><br><p style='margin-left: 15px;'>Combined With</p>" +
            "<img style='float: left' src='../terrariaImg/Rocket_Boots.png' alt='Rocket Boots'><p style='float: left; margin: 10px 0 0 0'>Bought from <img src='../terrariaImg/Goblin_Tinkerer.png' alt='Goblin Tinkerer Map icon'></p><br><br><br>" +
            "<p>At <img src='../terrariaImg/Tinkerers_Workshop.png' alt='Tinkerers Workshop'>Bought from <img src='../terrariaImg/Goblin_Tinkerer.png' alt='Goblin Tinkerer Map icon'></p></div>"
}

function showLightningRecipe() {
    craftGuide1.innerHTML = "";
        craftGuide1.innerHTML += "<div style='margin: 10px 0 0 10px'><img style='transform: scale(2)' src='../terrariaImg/Lightning_Boots.png' alt='Lightning Boots'><p style='float: right; margin: 10px 35% 0 0; font-size: 20px'>Made with</p><br><br>" +
            "<img style='float: left' src='../terrariaImg/Aglet.png' alt='Aglet'><p style='float: left; margin: 10px 0 0 0'>Obtained from <div style='float: right; margin-right: 10%' class='alignTriangle'><div id='triangleP1'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Wooden_Crate.png' alt='Wooden Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Pearlwood_Crate.png' alt='Pearlwood Crate'></div><div id='triangleP2'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Chest.png' alt='Regular Chest'></div></div></p><br><br><br><p style='margin-left: 15px;'>Combined with</p>" +
            "<img style='float: left' src='../terrariaImg/Anklet_of_the_Wind.png' alt='Anklet of the Wind'><p style='float: left; margin: 10px 0 0 0'>Obtained from <div style='float: right; margin-right: 10%' class='alignTriangle'><div id='triangleP1'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Jungle_Crate.png' alt='Jungle Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Bramble_Crate.png' alt='Bramble Crate'></div><div id='triangleP2'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Ivy_Chest.png' alt='Ivy Chest'></div></div></p><br><br><br><p style='margin-left: 15px;'>Combined with</p>" +
            "<img style='float: left' src='../terrariaImg/Spectre_Boots.png' alt='Spectre Boots'><br><br><br>" +
            "<p>At <img src='../terrariaImg/Tinkerers_Workshop.png' alt='Tinkerers Workshop'>Bought from <img src='../terrariaImg/Goblin_Tinkerer.png' alt='Goblin Tinkerer Map icon'></p></div>"

}
function showFrostsparkRecipe() {
    craftGuide1.innerHTML = "";
        craftGuide1.innerHTML += "<div style='margin: 10px 0 0 10px'><img style='transform: scale(2)' src='../terrariaImg/Frostspark_Boots.png' alt='Frostspark Boots'><p style='float: right; margin: 10px 35% 0 0; font-size: 20px'>Made with</p><br><br>" +
            "<img style='float: left' src='../terrariaImg/Ice_Skates.png' alt='Ice Skates'><p style='float: left; margin: 10px 0 0 0'>Obtained from <div style='float: right; margin-right: 10%' class='alignTriangle'><div id='triangleP1'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Boreal_Crate.png' alt='Boreal Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Frozen_Crate.png' alt='Frozen Crate'></div><div id='triangleP2'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Frozen_Chest.png' alt='Frozen Chest'></div></div></p><br><br><br><p style='margin-left: 15px;'>Combined with</p>" +
            "<img style='float: left' src='../terrariaImg/Lightning_Boots.png' alt='Lightning Boots'><br><br><br>" +
            "<p>At <img src='../terrariaImg/Tinkerers_Workshop.png' alt='Tinkerers Workshop'>Bought from <img src='../terrariaImg/Goblin_Tinkerer.png' alt='Goblin Tinkerer Map icon'></p></div>"

}
function showObsidianskullRecipe() {
    craftGuide1.innerHTML = "";
        craftGuide1.innerHTML += "<div style='margin: 10px 0 0 10px'><img style='transform: scale(2)' src='../terrariaImg/Obsidian_Skull.png' alt='Obsidian Skull'><p style='float: right; margin: 10px 35% 0 0; font-size: 20px'>Made with</p><br><br>" +
            "<img style='float: left' src='../terrariaImg/Obsidian.png' alt='Obsidian'><p>Obtained from <img src='../terrariaImg/Water.png' alt='Water'> + <img src='../terrariaImg/Lava.png' alt='Lava'></p>" +
            "<img style='float: left' src='../terrariaImg/Obsidian.png' alt='Obsidian'><p>X 20 at <img src='../terrariaImg/Furnace.png' alt='Furnace'></p></div>"

}
function showMoltencharmRecipe() {
    craftGuide1.innerHTML = "";
        craftGuide1.innerHTML += "<div style='margin: 10px 0 0 10px'><img style='transform: scale(2)' src='../terrariaImg/Molten_Charm.png' alt='Molten Charm'><p style='float: right; margin: 10px 35% 0 0; font-size: 20px'>Made with</p><br><br>" +
            "<img style='float: left' src='../terrariaImg/Obsidian_Skull.png' alt='Obsidian Skull'><br><br><br><p style='margin-left: 15px;'>Combined with</p>" +
            "<img style='float: left' src='../terrariaImg/Lava_Charm.png' alt='Lava Charm'><p>Obtained from <img src='../terrariaImg/Fire_Imp.png' alt='Fire Imp'></p><br>" +
            "<p>At <img src='../terrariaImg/Tinkerers_Workshop.png' alt='Tinkerers Workshop'>Bought from <img src='../terrariaImg/Goblin_Tinkerer.png' alt='Goblin Tinkerer Map icon'></p></div>"

}
function showLavawadersRecipe() {
    craftGuide1.innerHTML = "";
        craftGuide1.innerHTML += "<div style='margin: 10px 0 0 10px'><img style='transform: scale(2)' src='../terrariaImg/Lava_Waders.png' alt='Lava Waders'><p style='float: right; margin: 10px 35% 0 0; font-size: 20px'>Made with</p><br><br>" +
            "<img style='float: left' src='../terrariaImg/Obsidian_Rose.png' alt='Obsidian Rose'><p>Obtained from <img src='../terrariaImg/Fire_Imp.png' alt='Fire Imp'></p><br><p style='margin-left: 15px;'>Combined with</p><br>" +
            "<img style='float: left' src='../terrariaImg/Water_Walking_Boots.png' alt='Water walking boots'><p style='float: left;margin: 10px 0 0 0'>Obtained from <div style='float: right; margin: 0 10% 0 0' class='alignTriangle'><div id='triangleP1'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Ocean_Crate.png' alt='Ocean Crate'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Seaside_Crate.png' alt='Seaside Crate'></div><div id='triangleP2'><img style='transform: scale(1.2); padding: 5px' src='../terrariaImg/Water_Chest.png' alt='Water Chest'></div></div></p><br><br>" +
            "<p style='float: left'>At <img src='../terrariaImg/Tinkerers_Workshop.png' alt='Tinkerers Workshop'>Bought from <img src='../terrariaImg/Goblin_Tinkerer.png' alt='Goblin Tinkerer Map icon'></p></div>"

}
function showTerrasparkRecipe() {
    craftGuide1.innerHTML = "";
        craftGuide1.innerHTML += "<div style='margin: 10px 0 0 10px'><img style='transform: scale(2)' src='../terrariaImg/Terraspark_Boots.png' alt='Terraspark Boots'><p style='float: right; margin: 10px 35% 0 0; font-size: 20px'>Made with</p><br><br>" +
            "<img style='float: left' src='../terrariaImg/Frostspark_Boots.png' alt='Frostspark Boots'><br><br><br><p style='margin-left: 15px;'>Combined with</p>" +
            "<img style='float: left' src='../terrariaImg/Lava_Waders.png' alt='Lava Waders'><br><br><br>" +
            "<p>At <img src='../terrariaImg/Tinkerers_Workshop.png' alt='Tinkerers Workshop'>Bought from <img src='../terrariaImg/Goblin_Tinkerer.png' alt='Goblin Tinkerer Map icon'></p></div>"

}
/*
                                <img src="terrariaImg/Aglet.png" alt="Aglet">
                 <img src="terrariaImg/Anklet_of_the_Wind.png" alt="Anklet of the Wind">

                 <img src="terrariaImg/Ice_Skates.png" alt="Ice Skates">

                 <img src="terrariaImg/Obsidian.png" alt="Obsidian"> x 20

                     <img src="terrariaImg/Obsidian_Rose.png" alt="Obsidian Rose">
             <img src="terrariaImg/Water_Walking_Boots.png" alt="Water Walking Boots">

                             <img src="terrariaImg/Frostspark_Boots.png" alt="Frostspark Boots">
                <img src="terrariaImg/Lava_Waders.png" alt="Lava Waders">
                 */
