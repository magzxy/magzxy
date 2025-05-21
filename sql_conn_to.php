<?php

$servername="localhost";

$username="root";

$password="";

$data_base="database1";

$conn = new mysqli($servername, $username, $password, $data_base);

$query="select * from table";

$result=$conn->query($query);

if($result->num_rows==0){
echo "no data";
}

else{

while($table=$result->fetch_assoc()){

echo $table['name'];

}

$conn->close();

?>