
<?php
    include('database.php');
    $query = "SELECT * FROM Reservation";
    $result = mysqli_query(mysql: $db_con, query: $query);
    $counter = 1;
    echo"
    <div class='cont'>
    <div class='txt'><h1 class='retitle'>Reservations</h1></div>
    <div class='btn'><a href='reservation.php'><button class='logoutbut'> signout<signout></button></a></div>
    </div>    
    <table>
        <thead>
        
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Room Type</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Special Request</th>
            </tr>
       <thead>
       <tbody>
  ";
            
    while ($row = mysqli_fetch_assoc($result)) {

        echo "
                <tr >
                <td>{$counter}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['roomType']}</td>
                <td>{$row['checkIn']}</td>
                <td>{$row['CheckOut']}</td>
                <td>{$row['message']}</td>
              </tr>";

        $counter++;
    }

echo"
    </tbody>
    </table>";
    ?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reservation</title>
</head>
<style> 

.cont {
    display: flex; 
    align-items: center;
    justify-content: space-between;
    
}

.txt{
    flex: 6;
    display: flex;
    align-items: center; 
    justify-content: right;
    

}
.btn {
    flex: 4;
    display: flex;
    align-items: center; 
    justify-content: right;
    padding-right: 5%;
    
    
}
    .table_holder{

        display: flex;
        justify-content: center;

        flex-direction: column ;
    }

table{
            margin: 0 auto;
            overflow-x: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;      

        }

        table {
            width: 70%;
            border-collapse: collapse;
            text-align: center;
        }

        thead {
            background-color: #007bff;
            color: #fff;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
        }

        th {
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
            color: black;
        }
        .retitle{
            
            color : 007bff;
            font-family: 'montserrat', sans-serif;
           
            font-size: 3rem;
        }


        .logoutbut {
    font-size: 14px;
    width: 100px;
    height: 40px;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: color 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
    position: relative;
}

.logoutbut:hover {
    background-color: white;
    color: #111111;
    border:hsl(211, 100.00%, 50.00%) solid 1px;
}



</style>
<body>





</body>
</html>