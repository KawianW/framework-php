<?php
require(ROOT . "model/customerModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $customers = getAllCustomers();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('customer/index', array('customers' => getAllCustomers()));
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('customer/create');
}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    createCustomer($_POST['name'], $_POST['address'], $_POST['postalcode'], $_POST['city'], $_POST['phone'], $_POST['email']);
    //2. Bouw een url op en redirect hierheen
    header("location:".URL."customer/index");
}

function edit($id){
    $getCustomer = getCustomer($id);
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    updateCustomer($id, $_POST['name'], $_POST['address'], $_POST['postalcode'], $_POST['city'], $_POST['phone'], $_POST['email']);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    header("location:".URL."customer/index");
}

function update($id){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database
    $getCustomer = getCustomer($id);
    //2. Bouw een url en redirect hierheen
    render('customer/update', array('customer' => $getCustomer));
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    $getCustomer = getCustomer($id);

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee
    render('customer/delete', array('customer' => $getCustomer));
}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteCustomer($id);
    //2. Bouw een url en redirect hierheen
    header("Location: ../index");
    
}