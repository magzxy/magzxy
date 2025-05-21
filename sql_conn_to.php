<?php

$servername="localhost";

$username="root";

$password="";

$data_base="database1";

$conn = new mysqli($servername, $username, $password, $data_base);

$query="select * from table";

$result=$conn->query($query);

if($result->num_rows==0){

echo "brak danych w bazie";
}

else{

while($table=$result->fetch_assoc()){

echo $tablica['name'];

}

$conn->close();

?>