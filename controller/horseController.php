<?php
require(ROOT . "model/horseModel.php");

require(ROOT . "model/RaceModel.php");

function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $horse = getAllHorses();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('horse/index', array('horses' => getAllHorses()));
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('horse/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    createHorse($_POST['race_id'], $_POST['name'], $_POST['age']);
    //2. Bouw een url op en redirect hierheen
    header("location:".URL."horse/index");
}

function edit($id){
    $getHorse = getHorse($id);
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    updateHorse($id, $_POST['race_id'], $_POST['name'], $_POST['age']);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    header("location:".URL."horse/index");
}

function update($id){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $getHorse = getHorse($id);
    //2. Bouw een url en redirect hierheen
    render('horse/update', array('horse' => $getHorse));
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $getHorse = getHorse($id);

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('horse/delete', array('horse' => $getHorse));
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteHorse($id);
    //2. Bouw een url en redirect hierheen
    header("Location: ../index");
    
}