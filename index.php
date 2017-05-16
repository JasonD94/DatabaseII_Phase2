<!--
    HTML File for the Database II Project
    Created by Jason Downing and Chris Pearce
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DB2 Project</title>
</head>
<body>
<h1>Database II Project</h1>

<p>We need to implement the following queries in PHP:</p>

<ol>
    <!-- Query 1 -->
    <li>Find the names of authors who have purchased a book written by themselves. (aid and cid will not be the same).
    </li>
    <ul>
        <li>No UI is required for this query, just click the submit button for the query results.</li>
    </ul>
    <form action="php/1_author_purch.php" method="post">
        <input type="submit">
    </form>

    <br>
    <!-- Query 2 -->
    <li>User input one author name, find all the books written by the author(s).</li>
    <ul>
        <li>Take user input, e.g. 'Dan Brown'.</li>
        <li>Find all books written by 'Dan Brown'.</li>
    </ul>

    <form action="php/2_input_authors.php" method="post">
        <select name="name" id="name">
            <?php include('php/dropdown_menu_authors.php'); ?>
        </select><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 3 -->
    <li>User input one customer name, find purchase history of the customer(s).</li>
    <ul>
        <li>Take user input, e.g. 'Stephen King'.</li>
        <li>Find all purchases by 'Stephen King'.</li>
    </ul>
    <form action="php/3_input_cust_name.php" method="post">
        <select name="customer" id="customer">
            <?php include('php/dropdown_menu_customers.php'); ?>
        </select><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 4 -->
    <li>User input one or more words of a book title, find all information of the books whose titles contain those
        words.
    </li>
    <ul>
        <li>Take user input, e.g. 'Inferno'</li>
        <li>Print book info (title, year, category, publisher, and price)</li>
    </ul>

    <form action="php/4_input_title.php" method="post">
        Words of a book title: <input type="text" name="title"><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 5 -->
    <li>Design a drop down menu so user can use it to select a year and find the title of the best selling book of that
        year.
        <ul>
            <li>Take user input, the selected option of a dynamically populated dropdown menu</li>
            <li>prints the name of the best selling book in that year</li>
        </ul>
    </li>

    <form action="php/5_dropdown.php" method="post">
        <select name="years" id="years">
            <?php include('php/dropdown_menu_years.php'); ?>
        </select><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 6 -->
    <li>Record the information that a CUSTOMER has purchased a book.</li>
    <ul>
        <li>Customer selects the book title, e.g. "The Little Prince"</li>
        <li>They also select their name, e.g. "Stephen King"</li>
    </ul>
    <form action="php/6_record_purchase.php" method="post">
        <select name="titles" id="titles">
            <?php include('php/dropdown_menu_titles_prices.php'); ?>
        </select>
        <select name="names" id="names">
            <?php include('php/dropdown_menu_customers.php'); ?>
        </select><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 7 -->
    <li>Add a new customer to the database.</li>
    <ul>
        <li>Take user input, e.g. "John Snow", "1 Uni Ave, Lowell, MA, USA", "9784554300", "jsnow@aol.com"</li>
        <li>Inserts a new row into the customer table</li>
    </ul>
    <form action="php/7_new_customer.php" method="post">
        Enter new customer name: <input type="text" name="name"><br>
        Enter new customer address: <input type="text" name="address"><br>
        Enter new customer telephone: <input type="text" name="telephone"><br>
        Enter new customer email: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 8 -->
    <li>User input one name and address, update the address in people, and author or customer table if applicable.</li>
    <ul>
        <li>Take user input, e.g. "Dan Brown", "1 Uni Ave, Lowell, MA, USA"</li>
        <li>or "Daniel Fuentes", "Lowell, MA""</li>
        <li>Update the address in the People table, as well as the author or customer table.</li>
    </ul>

    <form action="php/8_input_name.php" method="post">
        <select name="name" id="name">
            <?php include('php/dropdown_menu_customers.php'); ?>
        </select><br>
        Enter an address: <input type="text" name="address"><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 9 -->
    <li>Add a new book to the database. If the author and/or the publisher of the new book is not in the database,
        insert all information about the author and/or publisher as well.</li>
    <ul>
        <li>Sample ISBN13: 9780007117116</li>
        <li>Sample Title: The Fellowship of the Ring the Lord of the Rings</li>
        <li>Sample Year entered: 1955</li>
        <li>Sample Category: Epic High Fantasy</li>
        <li>Sample Publisher: George Allen & Unwin</li>
        <li>Sample Price: 199.99</li>
        <li>Sample Auth Name: J. R. R. Tolkien</li>
        <li>Sample Auth addre: UK</li>
        <li>Sample Auth phone: 5555555555</li>
        <li>Sample Auth email: jrr_tolkien@gmail.com</li>
        <li>Sample Pub city: South West England</li>
        <li>Sample Pub state: UK</li>
    </ul>

    <form action="php/9_new_book.php" method="post">
        Enter the ISBN13 of the book: <input type="text" name="isbn13"><br>
        Enter the title of the book: <input type="text" name="title"><br>
        Enter the year the book was published: <input type="text" name="year"><br>
        Enter the category for the book: <input type="text" name="category"><br>
        Enter the publisher of the book: <input type="text" name="pname"><br>
        Enter the price of the book: <input type="text" name="price"><br>

        Enter the author's name: <input type="text" name="name"><br>
        Enter the author's address: <input type="text" name="address"><br>

        Enter the author's telephone: <input type="text" name="telephone"><br>
        Enter the author's email: <input type="text" name="email"><br>

        Enter the publisher's city: <input type="text" name="city"><br>
        Enter the publisher's state: <input type="text" name="state"><br>
        <input type="submit">
    </form>

    <br>
    <!-- Query 10 -->
    <li>Delete a book. If the author of the book has not written other books, delete the author as well.</li>
    <ul>
        <li>Enter the title of a book, e.g. "The Little Prince"</li>
        <li>Find the book's author, count how many books he has. If == 1, then we need delete the author too.</li>
        <li>However, before we delete the author, we must check to see if he has purchased any books. If he
            has, we will only delete his author table entry.</li>
        <li>If the author has not made any purchases, we will delete his person table entry as this will completely
            delete him from the database, as our people table will cascade delete, which will also delete the
            author's author table entry as well.</li>
        <li>Delete the book now that we've searched the for the author.</li>
    </ul>

    <form action="php/10_delete_book.php" method="post">
        <select name="titles" id="titles">
            <?php include('php/dropdown_menu_titles.php'); ?>
        </select>
        <br>
        <input type="submit">
    </form>
</ol>
</body>
</html>
