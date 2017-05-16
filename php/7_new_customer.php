<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * Time: 11:34 AM
 * Add a new customer to the database.
 */

$name = ($_POST['name']);
$address = ($_POST['address']);
$telephone = ($_POST['telephone']);
$email = ($_POST['email']);
echo "The words the user entered is: <b><u>$name</u></b> <b><u>$address</u></b><br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// check if new customer is already in the people database, if not create entry
$people_check = "SELECT name, address
                 FROM people 
                 WHERE name = '" . $name . "'";
$people_result = mysqli_query($my_conn, $people_check) or die (mysqli_error($my_conn) . 'People Query failed: ');

// if empty, create a new people entry first
if (mysqli_num_rows($people_result) == 0) {
    $insert_people = "INSERT INTO `people` (`name`, `address`, `telephone`, `email`)
                      VALUES  ('" . $name . "', '" . $address . "', '" . $telephone . "',  '" . $email . "')";
    $people_insert_result = mysqli_query($my_conn, $insert_people) or die (mysqli_error($my_conn) . 'Customer insert Query failed: ');
    echo "New person $name successfully entered into person table.<br>";
} else {
    echo "This person is already on the people , no need to insert into the person table.<br>";
}

// check if customer entry already exists
$customer_check = "SELECT name 
                   FROM customer 
                   WHERE name = '$name'";
$customer_result = mysqli_query($my_conn, $customer_check) or die (mysqli_error($my_conn) . 'People Query failed: ');
// Then insert into customer if no rows are returned here
if (mysqli_num_rows($customer_result) == 0) {

    // if the person is already on people, use the address on the people table instead of user input
    if (mysqli_num_rows($people_result) == 1) {
        $address = mysqli_fetch_row($people_result)[1];
        echo "$address<br>";
    }
    $cust_insert = "INSERT INTO `customer` (`name`, `address`) VALUES ('$name', '$address')";
    $cust_insert_result = mysqli_query($my_conn, $cust_insert) or die (mysqli_error($my_conn) . '<br>Customer insert Query failed! ');
    echo "New customer $name successfully entered into customer table.<br>";
} else {
    echo "New customer insert failed. If the person already exists on people table, make sure their information matches 
          the people table<br>";
}
mysqli_close($my_conn);
