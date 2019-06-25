<?php
require(ROOT . "model/reservationModel.php");
require(ROOT . "model/horseModel.php");
require(ROOT . "model/customerModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $getAllReservations = getAllReservations();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('reservation/index', array('reservations' => $getAllReservations));
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('reservation/create');
}

function store(){
    var_dump('hallooo');
    die();
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    createReservation($_POST['customer_id'], $_POST['horse_id'], $_POST['start_time']);
    //2. Bouw een url op en redirect hierheen
    header("location:".URL."reservation/index");
}

function edit($id){
    $getReservation = getReservation($id);
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    updateReservation($id,$_POST['customer_id'], $_POST['horse_id'], $_POST['start_time'], $_POST['rides']);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    header("location:".URL."reservation/index");
}

function update($id){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $getReservation = getDataReservation($id);
    //2. Bouw een url en redirect hierheen
    $customers = getAllCustomers();
    $horses = getAllHorses();
    render('reservation/update', array('reservations' => $getReservation, 'customers'=> $customers, 'horses'=> $horses));

}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $getReservation = getReservation($id);

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('reservation/delete', array('reservation' => $getReservation));
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteReservation($id);
    
    //2. Bouw een url en redirect hierheen
    header("Location: ../index");
    
}