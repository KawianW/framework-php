<?php
require(ROOT . "model/raceModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $getAllRaces = getAllRaces();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('race/index', array('races' => $getAllRaces));
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('race/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    createRace($_POST['name'], $_POST['height']);
    //2. Bouw een url op en redirect hierheen
    header("location:".URL."race/index");
}

function edit($id){
    $getRace = getRace($id);
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    updateRace($id, $_POST['name'], $_POST['height']);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    header("location:".URL."race/index");
}

function update($id){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $getRace = getRace($id);
    //2. Bouw een url en redirect hierheen
    render('race/update', array('race' => $getRace));
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $getRace = getRace($id);

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('race/delete', array('race' => $getRace));
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteRace($id);
    //2. Bouw een url en redirect hierheen
    header("Location: ../index");
    
}