<?php
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 3/6/17
 * Time: 12:52 PM
 *  Delete a book. If the author of the book has not written other books, delete the author as well.
 *
 * Use this command to copy to htdocs
 * sudo cp -r . /opt/lampp/htdocs/Books
 */

$title = ($_POST['titles']);
echo "The words the user entered is: <b><u>$title</u></b> <br><br>";

$my_conn = mysqli_connect("localhost", "root", "", "bookdb");

if (!$my_conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/**
 *      First we need to get the book's ISBN13 number.
 *      Next we need to get the book author's aid number, and his or her name.
 *      Now we can count the author's books and if he or she has only written 1 book, we delete their
 *      entry in the People table, and in the Author table. We must delete the People row first, and THEN
 *      we can delete their Author table row.
 *      Finally, we can delete the book.
 */

// This query will get the book's ISBN13 number.
$query = "SELECT *
          FROM book
          WHERE book.title = '" . $title . "'";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

// See if the query failed
if (mysqli_num_rows($result) == 0) {
    echo "Sorry, I couldn't find any books containing the words $title :'(<br>";
    return 0;
}

// Results table
echo "<table><tr> <td><b>ISBN13</b></td>
<td><b>title</b></td></tr>";

// If the query worked, we can print out all the info for this book! Includes: title, year, category, pname, price
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr><td>" . $row["ISBN13"] . "</td>";
    echo "<td>" . $row["title"] . "</td></tr>";
    $ISBN13 = $row["ISBN13"];   // save the ISBN13 so we can run a query on it later.
}

echo '</table>';        // End of results table

// This query will get the author's AID and name
$query = "SELECT w.aid, a.name
          FROM writes w JOIN author a
          ON w.aid = a.aid
          WHERE w.aid IN (SELECT writes.aid
	                      FROM writes
                          WHERE writes.ISBN13 = '" . $ISBN13 . "')";
$result = mysqli_query($my_conn,$query) or die (mysqli_error($my_conn) . 'Query failed: ');

// Make sure the query worked
if (mysqli_num_rows($result) == 0) {
    echo "ERROR: unable to find the aid and author's name for ISBN13: $ISBN13 :'(<br>";
    return 0;
}

// Get the author's aid and name
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$aid = $row["aid"];
$author_name = $row["name"];

// Print aid
echo "<br><table>";
echo "<tr> <td><b>aid</b></td>    <td><b>name</b></td> </tr>";
echo "<tr> <td>" . $aid . "</td>  <td>" . $author_name . "</td> </tr></table>";

// This query will get a count of the author's book's
$query = "SELECT COUNT(b.ISBN13) 
          FROM book b 
          JOIN writes w 
          ON b.ISBN13 = w.ISBN13 
          WHERE w.aid = '" . $aid . "'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// Make sure the query worked
if (mysqli_num_rows($result) == 0) {
    echo "ERROR: unable to get book count for aid: $aid :'(<br>";
    return 0;
}

// Get the book count for the author
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$book_count = $row["COUNT(b.ISBN13)"];

// Print book count
echo "<br><table>";
echo "<tr> <td><b>Book count for aid " . $aid . "</b></td></tr>";
echo "<tr><td>" . $book_count . "</td></tr></table><br>";

// If book count < 2 delete author
if ($book_count < 2) {
    // First delete the author's person entry
    $query = "DELETE FROM people
              WHERE people.name = '" . $author_name . "'";
    $result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

    // Make sure the query was successful!
    if (!$result) {
        echo "ERROR: unable to delete the people entry for author: $author_name!";
        return 0;
    }

    // Now we can delete the author.
    $query = "DELETE FROM author 
              WHERE author.aid = '" . $aid ."'";
    $result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

    // Make sure the query was successful!
    if (!$result) {
        echo "ERROR: unable to delete the author entry for author: $author_name!";
        return 0;
    }

    // Author was deleted.
    echo "<b>$author_name</b>, author of <b>\"$title\"</b>, successfully deleted.<br>";
}

// Now we can delete the book by ISBN13 number
$query = "DELETE FROM book
          WHERE book.ISBN13 = '" . $ISBN13 .  "'";
$result = mysqli_query($my_conn, $query) or die (mysqli_error($my_conn) . 'Query failed: ');

// Make sure the query was successful!
if (!$result) {
    echo "ERROR: unable to delete book: $ISBN13!";
    return 0;
}

// Finally, we're done!
echo "The book <b>\"$title\"</b> was successfully deleted.<br>";

mysqli_close($my_conn);
