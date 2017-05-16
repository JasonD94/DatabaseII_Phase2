-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 10:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `aid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`aid`, `name`, `address`) VALUES
(30005, 'Agatha Christie', 'Paris, France'),
(30008, 'Antoine de Saint-Exupery', 'Lyon, France'),
(30004, 'Dan Brown', 'Exeter, New Hampshire'),
(30003, 'Donna Tartt', 'Greenwood, Mississippi'),
(30010, 'Elena Ferrante', 'Naples, Italy'),
(30009, 'George Orwell', 'London, United Kingdom'),
(30007, 'J.K. Rowling', 'London, UK'),
(30000, 'Jeffrey Brown', 'Grand Rapids, Michigan'),
(30006, 'Muriel Barbery', 'Lowell, MA'),
(30001, 'Paula Hawkins', 'London, UK'),
(30002, 'Stephen King', 'Portland, Maine');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ISBN13` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `year` year(4) NOT NULL,
  `category` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ISBN13`, `title`, `year`, `category`, `pname`, `price`) VALUES
(9780007527502, 'Murder on the Orient Express', 2013, 'Thriller', 'Wiley', '9.87'),
(9780156012195, 'The Little Prince', 2000, 'Fiction', 'Random House', '12.76'),
(9780385537858, 'Inferno', 2013, 'mystery thriller', 'Doubleday', '4.99'),
(9780385537859, 'Inferno 2', 2014, 'mystery thriller', 'Doubleday', '8.99'),
(9780385537860, 'Inferno 3: the empire strikes back', 2015, 'mystery thriller', 'Doubleday', '9.99'),
(9780385537861, 'Inferno 4: a new hope', 2016, 'mystery thriller', 'Doubleday', '19.99'),
(9780385537862, 'Inferno 5: return of the jedi', 2017, 'mystery thriller', 'Doubleday', '29.99'),
(9780452284234, '1984', 2003, 'Fiction', 'ThomsonReuters', '4.99'),
(9780545010221, 'Harry Potter and the Deathly Hallows', 2007, 'Fantasy', 'Scholastic', '15.98'),
(9781408704950, 'The Goldfinch', 2013, 'Graphic Novel', 'Little, Brown and Company', '8.99'),
(9781476754451, 'Mr. Mercedes', 2014, 'Hardboiled', 'Scribner', '9.99'),
(9781594633669, 'The Girl on the Train', 2015, 'Psychological Thriller', 'Riverhead Books', '11.04'),
(9781603092661, 'A Matter of Life', 2013, 'Graphic Novels', 'Top Shelf Productions', '14.95'),
(9781609450786, 'My Brilliant Friend', 2012, 'Fiction', 'Wiley', '7.99'),
(9781933372600, 'The Elegance of the Hedgehog', 2008, 'Fiction', 'Random House', '7.89');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `name`, `address`) VALUES
(10007, 'Cathy S. Castillo', '4 Crummit Lane Mahaska, NE 66955'),
(10002, 'Daniel Fuentes', 'Cologne, MN'),
(10004, 'Ida B. Kohn', '2097 Old House Drive Worthington, OH 43085'),
(10003, 'Ida J. Young', '4464 Irish Lane Madison, WI 53703'),
(10000, 'Jane Doe', 'Bolton, MA'),
(10001, 'John Doe', 'Andover, MA'),
(10008, 'Leonard B. Cornish', '1661 Sugarfoot Lane Kokomo, IN 46901'),
(10010, 'Levi P. Olsen', '756 Hemlock Lane Edinburg, TX 78539'),
(10009, 'Roger J. Weber', '3189 Lynn Street Cambridge, MA 02138'),
(10011, 'Stephen King', 'Portland, Maine'),
(10005, 'Ted S. Solt', '3218 Juniper Drive Mount Pleasant, MI 48858'),
(10006, 'Tiffanie H. Birdsall', '3891 Strother Street Birmingham, AL 35209');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`name`, `address`, `telephone`, `email`) VALUES
('Agatha Christie', 'Paris, France', 4855555555, 'Agatha_Christie@gmail.com'),
('Antoine de Saint-Exupery', 'Lyon, France', 1595555555, 'Antoine_Saint-Exupery@gmail.com'),
('Cathy S. Castillo', '4 Crummit Lane Mahaska, NE 66955', 4022472428, 'CathySCastillo@teleworm.us'),
('Dan Brown', 'Exeter, New Hampshire', 6035555555, 'dan_brown@gmail.com'),
('Daniel Fuentes', 'Cologne, MN', 5554669107, 'DanielJFuentes@jourrapide.com'),
('Donna Tartt', 'Greenwood, Mississippi', 6625555555, 'donna_tartt@gmail.com'),
('Elena Ferrante', 'Naples, Italy', 1265555555, 'Elena_Ferrante@gmail.com'),
('George Orwell', 'London, United Kingdom', 1115555555, 'George_Orwell@gmail.com'),
('Ida B. Kohn', '2097 Old House Drive Worthington, OH 43085', 7408910156, 'IdaBKohn@teleworm.us'),
('Ida J. Young', '4464 Irish Lane Madison, WI 53703', 6087282439, 'IdaJYoung@dayrep.com'),
('J.K. Rowling', 'London, UK', 9895555555, 'JK_Rowling@gmail.com'),
('Jane Doe', 'Bolton, MA', 9785559999, 'Jane_Doe@gmail.com'),
('Jeffrey Brown', 'Grand Rapids, Michigan', 6165555555, 'jeffrey_brown@gmail.com'),
('John Doe', 'Andover, MA', 9785556666, 'John_Doe@gmail.com'),
('John Grisham', 'Jonesboro, Arkansas', 8705555555, 'John_Grisham@gmail.com'),
('Leonard B. Cornish', '1661 Sugarfoot Lane Kokomo, IN 46901', 7654579912, 'LeonardBCornish@jourrapide.com'),
('Levi P. Olsen', '756 Hemlock Lane Edinburg, TX 78539', 9563862962, 'LeviPOlsen@dayrep.com'),
('Muriel Barbery', 'Lowell, MA', 9785555555, 'Muriel_Barbery@gmail.com'),
('Paula Hawkins', 'London, UK', 205555555, 'paula_hawkins@gmail.com'),
('Roger J. Weber', '3189 Lynn Street Cambridge, MA 02138', 6173093838, 'RogerJWeber@jourrapide.com'),
('Stephen King', 'Portland, Maine', 2075555555, 'steven_king@gmail.com'),
('Ted S. Solt', '3218 Juniper Drive Mount Pleasant, MI 48858', 9898149209, 'TedSSolt@dayrep.com'),
('Tiffanie H. Birdsall', '3891 Strother Street Birmingham, AL 35209', 2056922322, 'TiffanieHBirdsall@jourrapide.com');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pname` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pname`, `city`, `state`) VALUES
('Cengage Learning', 'Boston', 'MA'),
('Doubleday', 'New York City', 'NY'),
('Knopf', 'New York City', 'NY'),
('Little, Brown and Company', 'New York City', 'NY'),
('Pearson', 'Upper Saddle River', 'NJ'),
('Random House', 'New York City', 'NY'),
('Riverhead Books', 'New York City', 'NY'),
('Scholastic', 'New York City', 'NY'),
('Scribner', 'New York City', 'NY'),
('ThomsonReuters', 'New York City', 'NY'),
('Top Shelf Productions', 'Marietta', 'GA'),
('Wiley', 'Hoboken', 'NJ');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `ISBN13` bigint(20) NOT NULL,
  `cid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`ISBN13`, `cid`, `datetime`) VALUES
(9780007527502, 10003, '2017-02-03 08:22:45'),
(9780156012195, 10004, '2017-02-05 00:31:00'),
(9780385537858, 10001, '2017-02-06 00:00:00'),
(9780385537858, 10005, '2017-02-07 07:32:00'),
(9780385537860, 10004, '2016-09-07 00:00:00'),
(9780385537860, 10005, '2016-09-22 00:00:00'),
(9780385537860, 10007, '2016-06-07 08:00:00'),
(9780385537861, 10008, '2015-09-08 05:00:00'),
(9780385537862, 10011, '2015-09-17 06:00:00'),
(9780452284234, 10006, '2017-02-06 18:24:39'),
(9780545010221, 10007, '2017-02-04 12:19:29'),
(9781408704950, 10008, '2017-02-15 06:35:21'),
(9781476754451, 10003, '2017-02-21 03:28:59'),
(9781476754451, 10009, '2017-02-21 20:40:30'),
(9781476754451, 10011, '2015-02-21 20:40:30'),
(9781594633669, 10001, '2017-02-17 07:43:56'),
(9781603092661, 10002, '2017-01-04 00:00:00'),
(9781603092661, 10002, '2017-02-16 12:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `writes`
--

CREATE TABLE `writes` (
  `ISBN13` bigint(20) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writes`
--

INSERT INTO `writes` (`ISBN13`, `aid`) VALUES
(9780007527502, 30005),
(9780156012195, 30008),
(9780385537858, 30004),
(9780385537859, 30004),
(9780385537860, 30004),
(9780385537861, 30004),
(9780385537862, 30004),
(9780452284234, 30009),
(9780545010221, 30007),
(9781408704950, 30003),
(9781476754451, 30002),
(9781594633669, 30001),
(9781603092661, 30000),
(9781609450786, 30010),
(9781933372600, 30006);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `fk_people` (`name`,`address`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ISBN13`),
  ADD KEY `fk_book` (`pname`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `fk_cust` (`name`,`address`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`name`,`address`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pname`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`ISBN13`,`cid`,`datetime`),
  ADD KEY `fk_pur_cust` (`cid`);

--
-- Indexes for table `writes`
--
ALTER TABLE `writes`
  ADD PRIMARY KEY (`ISBN13`,`aid`),
  ADD KEY `fk_write_author` (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30011;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10012;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `fk_people` FOREIGN KEY (`name`,`address`) REFERENCES `people` (`name`, `address`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_book` FOREIGN KEY (`pname`) REFERENCES `publisher` (`pname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_cust` FOREIGN KEY (`name`,`address`) REFERENCES `people` (`name`, `address`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `fk_pur_bk` FOREIGN KEY (`ISBN13`) REFERENCES `book` (`ISBN13`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pur_cust` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `writes`
--
ALTER TABLE `writes`
  ADD CONSTRAINT `fk_write_author` FOREIGN KEY (`aid`) REFERENCES `author` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_write_book` FOREIGN KEY (`ISBN13`) REFERENCES `book` (`ISBN13`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
