<?php

function getAllCustomers() {
    
  // Met het try statement kunnen we code proberen uit te voeren. Wanneer deze
  // mislukt kunnen we de foutmelding afvangen en eventueel de gebruiker een
  // nette foutmelding laten zien. In het catch statement wordt de fout afgevangen
   try {
       // Open de verbinding met de database
       $conn=openDatabaseConnection();
   
       // Zet de query klaar door middel van de prepare method
       $stmt = $conn->prepare("SELECT * FROM customers");

       // Voer de query uit
       $stmt->execute();

       // Haal alle resultaten op en maak deze op in een array
       // In dit geval is het mogelijk dat we meedere medewerkers ophalen, daarom gebruiken we
       // hier de fetchAll functie.
       $result = $stmt->fetchAll();

   }
   // Vang de foutmelding af
   catch(PDOException $e){
       // Zet de foutmelding op het scherm
       echo "Connection failed: " . $e->getMessage();
   }

   // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
   // van de server opgeschoond blijft
   $conn = null;

   // Geef het resultaat terug aan de controller
   return $result;
}

function getCustomer($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM customers WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }

 function createCustomer($name, $address, $postalcode, $city, $phone, $email) {
 	try {
       // Open de verbinding met de database
       $conn=openDatabaseConnection();

       $sql = "INSERT INTO `customers` (name, address, postalcode, city, phone, email) VALUES (:name, :address, :postalcode, :city, :phone, :email)";
       $query = $conn->prepare($sql);

        $query->bindParam("name", $_POST['name']);
        $query->bindParam("address", $_POST['address']);
        $query->bindParam("postalcode", $_POST['postalcode']);
        $query->bindParam("city", $_POST['city']);
        $query->bindParam("phone", $_POST['phone']);
        $query->bindParam("email", $_POST['email']);
        $query->execute();
      }
   // Vang de foutmelding af
   catch(PDOException $e){
       // Zet de foutmelding op het scherm
       echo "Connection failed: " . $e->getMessage();
   }
 }
 function deleteCustomer($id){
    // Maak hier de code om een medewerker te verwijderen
    try {
        // Maak hier de code om een medewerker toe te voegen
        $conn=openDatabaseConnection();
        $stmt = $conn->prepare("DELETE FROM customers WHERE id = :id");
       
        $stmt->bindParam(":id", $id);

        $stmt-> execute();
    }

    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;

}

function updateCustomer($id, $name, $address, $postalcode, $city, $phone, $email){
    try {
        // Maak hier de code om een medewerker te bewerken
        $conn=openDatabaseConnection();
        $stmt = "UPDATE customers SET name = :name, address = :address, postalcode = :postalcode, city = :city, phone = :phone, email = :email WHERE id = :id";
        $query = $conn->prepare($stmt);
        $query->bindParam(":id", $id);
        $query->bindParam(":name", $name);
        $query->bindParam(":address", $address);
        $query->bindParam(":postalcode", $postalcode);
        $query->bindParam(":city", $city);
        $query->bindParam(":phone", $phone);
        $query->bindParam(":email", $email);
        $query-> execute();
    }
    
    catch(PDOException $e){
    
        echo "Connection failed: " . $e->getMessage();
    }
    $conn = null;
    
    // header('location: ../index');
    }



?>