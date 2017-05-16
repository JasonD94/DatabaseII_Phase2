# This file will contain all the finished insert statements after they have been tested.

# First, insert all the People
# Insert statements for the People table
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Jeffrey Brown', 'Grand Rapids, Michigan', '6165555555', 'jeffrey_brown@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Paula Hawkins', 'London, UK', '0205555555', 'paula_hawkins@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Stephen King', 'Portland, Maine', '2075555555', 'steven_king@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Donna Tartt', 'Greenwood, Mississippi', '6625555555', 'donna_tartt@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Dan Brown', 'Exeter, New Hampshire', '6035555555', 'dan_brown@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('John Grisham', 'Jonesboro, Arkansas', '8705555555', 'John_Grisham@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Antoine de Saint-Exupery', 'Lyon, France', '1595555555', 'Antoine_Saint-Exupery@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('George Orwell', 'London, United Kingdom', '1115555555', 'George_Orwell@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Elena Ferrante', 'Naples, Italy', '1265555555', 'Elena_Ferrante@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('J.K. Rowling', 'London, UK', '9895555555', 'JK_Rowling@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Agatha Christie', 'Paris, France', '4855555555', 'Agatha_Christie@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Muriel Barbery', 'Lowell, MA', '9785555555', 'Muriel_Barbery@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Jane Doe', 'Bolton, MA', '9785559999', 'Jane_Doe@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('John Doe', 'Andover, MA', '9785556666', 'John_Doe@gmail.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Daniel Fuentes', 'Cologne, MN', '5554669107', 'DanielJFuentes@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Ida J. Young', '4464 Irish Lane Madison, WI 53703', '6087282439', 'IdaJYoung@dayrep.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Ted S. Solt', '3218 Juniper Drive Mount Pleasant, MI 48858', '9898149209', 'TedSSolt@dayrep.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Ida B. Kohn', '2097 Old House Drive Worthington, OH 43085', '7408910156', 'IdaBKohn@teleworm.us');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Tiffanie H. Birdsall', '3891 Strother Street Birmingham, AL 35209', '2056922322', 'TiffanieHBirdsall@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Leonard B. Cornish', '1661 Sugarfoot Lane Kokomo, IN 46901', '7654579912', 'LeonardBCornish@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Cathy S. Castillo', '4 Crummit Lane Mahaska, NE 66955', '4022472428', 'CathySCastillo@teleworm.us');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Roger J. Weber', '3189 Lynn Street Cambridge, MA 02138', '6173093838', 'RogerJWeber@jourrapide.com');
INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES ('Levi P. Olsen', '756 Hemlock Lane Edinburg, TX 78539', '9563862962', 'LeviPOlsen@dayrep.com');

# Then, insert all the Publishers
# Insert statements for the Publisher table
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Top Shelf Productions', 'Marietta', 'GA');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Riverhead Books', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Scribner', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Little, Brown and Company', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Doubleday', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Knopf', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Random House', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Pearson', 'Upper Saddle River', 'NJ');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('ThomsonReuters', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Scholastic', 'New York City', 'NY');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Wiley', 'Hoboken', 'NJ');
INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES ('Cengage Learning', 'Boston', 'MA');

# Now we can insert Authors
# Insert statements for Authors table
INSERT INTO `author` (`name`, `address`) VALUES ('Jeffrey Brown', 'Grand Rapids, Michigan');
INSERT INTO `author` (`name`, `address`) VALUES ('Paula Hawkins', 'London, UK');
INSERT INTO `author` (`name`, `address`) VALUES ('Stephen King', 'Portland, Maine');
INSERT INTO `author` (`name`, `address`) VALUES ('Donna Tartt', 'Greenwood, Mississippi');
INSERT INTO `author` (`name`, `address`) VALUES ('Dan Brown', 'Exeter, New Hampshire');
INSERT INTO `author` (`name`, `address`) VALUES ('Agatha Christie', 'Paris, France');
INSERT INTO `author` (`name`, `address`) VALUES ('Muriel Barbery', 'Lowell, MA');
INSERT INTO `author` (`name`, `address`) VALUES ('J.K. Rowling', 'London, UK');
INSERT INTO `author` (`name`, `address`) VALUES ('Antoine de Saint-Exupery', 'Lyon, France');
INSERT INTO `author` (`name`, `address`) VALUES ('George Orwell', 'London, United Kingdom');
INSERT INTO `author` (`name`, `address`) VALUES ('Elena Ferrante', 'Naples, Italy');


# Insert statements for Books table
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781603092661', 'A Matter of Life', '2013', 'Graphic Novels', 'Top Shelf Productions', '14.95');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781594633669', 'The Girl on the Train', '2015', 'Psychological Thriller', 'Riverhead Books', '11.04');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781476754451', 'Mr. Mercedes', '2014', 'Hardboiled', 'Scribner', '9.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781408704950', 'The Goldfinch', '2013', 'Graphic Novel', 'Little, Brown and Company', '8.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780385537858', 'Inferno', '2013', 'mystery thriller', 'Doubleday', '4.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780385537859', 'Inferno 2', '2014', 'mystery thriller', 'Doubleday', '8.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780385537860', 'Inferno 3: the empire strikes back', '2015', 'mystery thriller', 'Doubleday', '9.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780385537861', 'Inferno 4: a new hope', '2016', 'mystery thriller', 'Doubleday', '19.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780385537862', 'Inferno 5: return of the jedi', '2017', 'mystery thriller', 'Doubleday', '29.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781933372600', 'The Elegance of the Hedgehog', '2008', 'Fiction', 'Random House', '7.89');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780007527502', 'Murder on the Orient Express', '2013', 'Thriller', 'Wiley', '9.87');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780545010221', 'Harry Potter and the Deathly Hallows', '2007', 'Fantasy', 'Scholastic', '15.98');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780156012195', 'The Little Prince', '2000', 'Fiction', 'Random House', '12.76');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9780452284234', '1984', '2003', 'Fiction', 'ThomsonReuters', '4.99');
INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES ('9781609450786', 'My Brilliant Friend', '2012', 'Fiction', 'Wiley', '7.99');

# Insert statements for the customer table
INSERT INTO `customer` (`name`, `address`) VALUES ('Jane Doe', 'Bolton, MA');
INSERT INTO `customer` (`name`, `address`) VALUES ('John Doe', 'Andover, MA');
INSERT INTO `customer` (`name`, `address`) VALUES ('Daniel Fuentes', 'Cologne, MN');
INSERT INTO `customer` (`name`, `address`) VALUES ('Ida J. Young', '4464 Irish Lane Madison, WI 53703');
INSERT INTO `customer` (`name`, `address`) VALUES ('Ida B. Kohn', '2097 Old House Drive Worthington, OH 43085');
INSERT INTO `customer` (`name`, `address`) VALUES ('Ted S. Solt', '3218 Juniper Drive Mount Pleasant, MI 48858');
INSERT INTO `customer` (`name`, `address`) VALUES ('Tiffanie H. Birdsall', '3891 Strother Street Birmingham, AL 35209');
INSERT INTO `customer` (`name`, `address`) VALUES ('Cathy S. Castillo', '4 Crummit Lane Mahaska, NE 66955');
INSERT INTO `customer` (`name`, `address`) VALUES ('Leonard B. Cornish', '1661 Sugarfoot Lane Kokomo, IN 46901');
INSERT INTO `customer` (`name`, `address`) VALUES ('Roger J. Weber', '3189 Lynn Street Cambridge, MA 02138');
INSERT INTO `customer` (`name`, `address`) VALUES ('Levi P. Olsen', '756 Hemlock Lane Edinburg, TX 78539');
INSERT INTO `customer` (`name`, `address`) VALUES ('Stephen King',	'Portland, Maine');

# Insert statements for the Purchase table
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537858', '10001', '2017-02-06 00:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781603092661', '10002', '2017-01-04 00:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780007527502', '10003', '2017-02-03 08:22:45');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780156012195', '10004', '2017-02-05 00:31:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537858', '10005', '2017-02-07 07:32:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780452284234', '10006', '2017-02-06 18:24:39');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780545010221', '10007', '2017-02-04 12:19:29');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781408704950', '10008', '2017-02-15 06:35:21');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781476754451', '10009', '2017-02-21 20:40:30');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781594633669', '10001', '2017-02-17 07:43:56');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781603092661', '10002', '2017-02-16 12:05:43');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781476754451', '10003', '2017-02-21 03:28:59');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537860', '10004', '2016-09-07 00:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537860', '10005', '2016-09-22 00:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537860', '10007', '2016-06-07 08:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537861', '10008', '2015-09-08 05:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9780385537862', '10011', '2015-09-17 06:00:00');
INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES ('9781476754451', '10011', '2015-02-21 20:40:30');

# Insert statements for the Write table
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781603092661', '30000');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781594633669', '30001');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781476754451', '30002');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781408704950', '30003');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780385537858', '30004');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780385537859', '30004');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780385537860', '30004');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780385537861', '30004');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780385537862', '30004');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780007527502', '30005');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781933372600', '30006');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780545010221', '30007');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780156012195', '30008');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9780452284234', '30009');
INSERT INTO `writes` (`ISBN13`, `aid`) VALUES ('9781609450786', '30010');
