<?php
/**
 * Created by PhpStorm.
 * User: cpmacbook
 * Date: 2/23/17
 * Time: 11:34 AM
 * Add a new book to the database. If the author and/or the publisher of the new book is not in the database, insert
 * all information about the author and/or publisher as well.
 *
 */

//echo "</b>Sample ISBN13 : 9780007117116<br>";
//     Title entered: The Fellowship of the Ring the Lord of the Rings
//      Year entered: 1955
//  Category entered: Epic High Fantasy
//Publisher  entered: George Allen & Unwin
//     Price entered: 199.99
// Auth Name entered: J. R. R. Tolkien
//Auth addre entered: UK
//Auth phone entered: 5555555555
//Auth email entered: jrr_tolkien@gmail.com
//  Pub city entered: South West England
// Pub state entered: UK

$isbn13 = ($_POST['isbn13']);
echo "ISBN13 entered: <b><u>$isbn13</u></b><br>";

$title = ($_POST['title']);
echo "title entered: <b><u>$title</u></b><br>";

$year = ($_POST['year']);
echo "year entered: <b><u>$year</u></b><br>";

$category = ($_POST['category']);
echo "category entered: <b><u>$category</u></b><br>";

$pname = ($_POST['pname']);
echo "pname entered: <b><u>$pname</u></b><br>";

$price = ($_POST['price']);
echo "price entered: <b><u>$price</u></b><br>";

$name = ($_POST['name']);
echo "author name entered: <b><u>$name</u></b><br>";

$address = ($_POST['address']);
echo "author address entered: <b><u>auth_address</u></b><br>";

$telephone = ($_POST['telephone']);
echo "telephone entered: <b><u>$telephone</u></b><br><br>";

$eamil = ($_POST['email']);
echo "email entered: <b><u>$eamil</u></b><br><br>";

$city = ($_POST['city']);
echo "publisher address entered: <b><u>$city</u></b><br>";

$state = ($_POST['state']);
echo "publisher state entered: <b><u>$state</u></b><br>";


$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// this collects all of purchase history of the name provided

$people_insert = "INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('$name', '$address', '$telephone', '$eamil')";

$pub_insert = "INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('$pname', '$state', '$city')";

$auth_insert = "INSERT INTO `author` (`name`, `address`) VALUES ('$name', '$address')";

$book_insert = "INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('$isbn13', '$title', '$year', '$category', '$pname', '$price')";

// check if new author is already in the people database, if not create entry
$people_check = "SELECT name 
                 FROM people 
                 WHERE name = '" . $name . "'";

$auth_check = "SELECT name 
               FROM author 
               WHERE name = '" . $name . "'";

$publisher_check = "SELECT pname 
                    FROM publisher 
                    WHERE pname = '" . $pname . "'";

$book_check = "SELECT title 
                    FROM book 
                    WHERE title = '" . $title . "'";

$people_result = mysqli_query($my_conn, $people_check) or die (mysqli_error($my_conn) . 'People check failed: ');
$auth_result = mysqli_query($my_conn, $auth_check) or die (mysqli_error($my_conn) . 'Author check failed: ');
$pub_result = mysqli_query($my_conn, $publisher_check) or die (mysqli_error($my_conn) . 'Publisher check failed: ');
$book_result = mysqli_query($my_conn, $book_check) or die (mysqli_error($my_conn) . 'Book check failed: ');

// if empty, create a new people entry first
if (mysqli_num_rows($people_result) == 0) {
    $people_insert_result = mysqli_query($my_conn, $people_insert)
    or die (mysqli_error($my_conn) . 'people insert Query failed: ');
    echo "New people entry created for $name.<br>";
}

// check if author already exists, if not create an entry
if (mysqli_num_rows($auth_result) == 0) {
    //create author entry
    $auth_insert_result = mysqli_query($my_conn, $auth_insert)
    or die (mysqli_error($my_conn) . 'author insert Query failed: ');
    echo "New author entry created for $name.<br>";
}

// check if publisher exists, if not create an entry
if (mysqli_num_rows($pub_result) == 0) {
    //create author entry
    $pub_insert_result = mysqli_query($my_conn, $pub_insert)
    or die (mysqli_error($my_conn) . 'Publisher insert Query failed: ');
    echo "New publisher entry for $pname.<br>";
}

if (mysqli_num_rows($book_result) == 0) {
    //create author entry
    $book_insert_result = mysqli_query($my_conn, $book_insert)
    or die (mysqli_error($my_conn) . 'Book insert Query failed: ');
    // finally add relevant writes entry
    $aid_query = "SELECT aid
                  FROM author
                  WHERE name = '$name'";
    $aid_result = mysqli_query($my_conn, $aid_query) or die (mysqli_error($my_conn) . 'Book check failed: ');
    $aid_result = mysqli_fetch_row($aid_result)[0];
    $write_insert = "INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('$isbn13', '$aid_result')";
    $write_result = mysqli_query($my_conn, $write_insert) or die (mysqli_error($my_conn) . 'Book insert failed: ');
    echo "New book entry created for $title.<br>";
    } else {
        echo "This '" . $title . "' already exists";
    }

mysqli_close($my_conn);
