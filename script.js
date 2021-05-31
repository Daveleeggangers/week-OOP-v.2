var HPPokemonPika = document.getElementById('HPPokemonPika').value;
var HPPokemonChar = document.getElementById('HPPokemonChar').value;
var WeaknessPika = document.getElementById('WeaknessPika').value;
var WeaknessChar = document.getElementById('WeaknessChar').value;
var ResistancePika = document.getElementById('ResistancePika').value;
var ResistanceChar = document.getElementById('ResistanceChar').value;
var Weaknessmultiplier = 0;


$(document).on('click','.Attackbtn', function(){
    var damage = $(this).data('damage')
    var pokemonnmbr = $(this).data('pokemon')
    console.log(damage);
    console.log(pokemonnmbr);
    if (pokemonnmbr === "pika"){
        Weaknessmultiplier = 2.5;

        }
        else {
        Weaknessmultiplier = 1;
        }
        var damagetotal = damage * Weaknessmultiplier;
    console.log(damagetotal);
    var yeet = HPPokemonChar - damagetotal;
    console.log(yeet);
})