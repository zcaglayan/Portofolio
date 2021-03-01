<?php

require_once "Dier.php";

$servername = "database";
$username = "root";
$password = "";
$database = "Voorbeeld";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo '<pre>';
$result = $conn->query("SELECT pagina.id AS paginaId, pagina.title AS PaginaTitle, Content.Text AS Banaan FROM pagina LEFT JOIN Content ON Content.PaginaId = Pagina.Id WHERE Pagina.id = 1");
while ($row = $result->fetch_object()) {
    var_dump($row);             
}

// var_dump($_GET);

// $dieren = [];
// $result = $conn->query("SELECT * FROM Dieren");
// if ($result) {
//     // Cycle through results
//     while ($row = $result->fetch_object()) {
//         array_push($dieren, new Dier($row->Id, $row->Naam, $row->Type));
//     }
//     // Free result set
//     $result->close();
//     $conn->next_result();
// }


// $sql = "INSERT INTO Dieren (Naam,Type) VALUES ('Amerigo','Paard')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// ?>

// <html lang="nl">
// <body>

// <ul>
//     <?php
//     foreach ($dieren as $dier) {
//         echo '<li>' . $dier->name . '</li>';
//     } ?>
// </ul>

// </body>
// </html>