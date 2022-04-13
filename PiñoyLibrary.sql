CREATE DATABASE `PiñoyLibrary`;

CREATE TABLE `Category` (
  `Category_ID` INT(12) NOT NULL,
  `Class_Name` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`Category_ID`)
);

CREATE TABLE `Member` (
  `MemberID` INT(5) NOT NULL,
  `FirstName` VARCHAR(255) DEFAULT NULL,
  `LastName` VARCHAR(255) DEFAULT NULL,
  `Gender` VARCHAR(6) DEFAULT NULL,
  `Address` VARCHAR(255) DEFAULT NULL,
  `Contact` INT(40) DEFAULT NULL,
  `Type` VARCHAR(7) DEFAULT NULL,
  `YearLevel` VARCHAR(20) DEFAULT NULL,
  `Status` VARCHAR(64) DEFAULT NULL
);

CREATE TABLE `Users` ( 
  `User_ID` INT(2),
  `UserName` VARCHAR(10),
  `Password` VARCHAR(15),
  `FirstName` VARCHAR(10),
  `LastName` VARCHAR(10),
  PRIMARY KEY (`User_ID`)
);

CREATE TABLE `BorrowerType` (
  `BorrowType_ID` INT,
  `Borrower_Type` VARCHAR(255)
);

CREATE TABLE `BorrowDetails` (
  `Borrow_Details_ID` INT(3) NOT NULL,
  `Book_ID` INT(2) NOT NULL,
  `Borrow_ID` INT(3) NOT NULL,
  `Borrow_Status` VARCHAR(8) NOT NULL,
  `Date_Return` DATETIME DEFAULT NULL
);

CREATE TABLE `Borrow` (
  `Borrow_ID` INT(3) NOT NULL,
  `Member_ID` INT(2) NOT NULL,
  `Date_Borrow` DATETIME NOT NULL,
  `Due_Date` DATE NOT NULL
);

CREATE TABLE `Book` ( 
  `Book_ID` INT(2) NOT NULL,
  `Title` VARCHAR(255),
  `Category_ID` INT(12) NOT NULL,
  `Author` VARCHAR(255),
  `Copies` INT(5),
  `Publisher` VARCHAR(255),
  `Publisher_Name` VARCHAR(255),
  `ISBN` VARCHAR(20),
  `Copyright_Year` INT(4),
  `Date_Receive` DATE,
  `Date_Added` DATE,
  `Status` VARCHAR(7),
  PRIMARY KEY (`Book_ID`),
  FOREIGN KEY (`Category_ID`) REFERENCES Category(`Category_ID`)
);

INSERT INTO `Book` VALUES
(15, 'Natural Resources', 8, 'Robin Kerrod', 15, 'Marshall Cavendish Corporation', 'Marshall', '1-85435-628-3', 1997, NULL, '2013-12-11 06:34:27', 'New'),
(16, 'Encyclopedia Americana', 5, 'Grolier', 20, 'Connecticut', 'Grolier Incorporation', '0-7172-0119-8', 1988, NULL, '2013-12-11 06:36:23', 'Archive'),
(17, 'Algebra 1', 3, 'Carolyn Bradshaw, Michael Seals', 35, 'Pearson Education, Inc', 'Prentice Hall, New Jersey', '0-13-125087-6', 2004, NULL, '2013-12-11 06:39:17', 'Damage'),
(18, 'The Philippine Daily Inquirer', 7, '..', 3, 'Pasay City', '..', '..', 2013, NULL, '2013-12-11 06:41:53', 'New'),
(19, 'Science in our World', 4, 'Brian Knapp', 25, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 1996, NULL, '2013-12-11 06:44:44', 'Lost'),
(20, 'Literature', 9, 'Greg Glowka', 20, 'Regency Publishing Group', 'Prentice Hall, Inc', '0-13-050841-1', 2001, NULL, '2013-12-11 06:47:44', 'Old'),
(21, 'Lexicon Universal Encyclopedia', 5, 'Lexicon', 10, 'Lexicon Publication', 'Pulication Inc., Lexicon', '0-7172-2043-5', 1993, NULL, '2013-12-11 06:49:53', 'Old'),
(22, 'Science and Invention Encyclopedia', 5, 'Clarke Donald, Dartford Mark', 16, 'H.S. Stuttman inc. Publishing', 'Publisher , Westport Connecticut', '0-87475-450-x', 1992, NULL, '2013-12-11 06:52:58', 'New'),
(23, 'Integrated Science Textbook ', 4, 'Merde C. Tan', '15', 'Vibal Publishing House Inc.', '12536. Araneta Avenue Corner Ma. Clara St., Quezon City', '971-570-124-8', 2009, NULL, '2013-12-11 06:55:27', 'New'),
(24, 'Algebra 2', 3, 'Glencoe McGraw Hill', 15, 'The McGrawHill Companies Inc.', 'McGrawhill', '978-0-07-873830-2', 2008, NULL, '2013-12-11 06:57:35', 'New'),
(25, 'Wiki at Panitikan ', 7, 'Lorenza P. Avera', 28, 'JGM & S Corporation', 'JGM & S Corporation', '971-07-1574-7', 2000, NULL, '2013-12-11 06:59:24', 'Damage'),
(26, 'English Expressways TextBook for 4th year', 9, 'Virginia Bermudez Ed. O. et al', 23, 'SD Publications, Inc.', 'Gregorio Araneta Avenue, Quezon City', '978-971-0315-33-8', 2007, NULL, '2013-12-11 07:01:25', 'New'),
(27, 'Asya Pag-usbong Ng Kabihasnan ', 8, 'Ricardo T. Jose, Ph . D.', 21, 'Vibal Publishing House Inc.', 'Araneta Avenue . Cor. Maria Clara St., Quezon City', '971-07-2324-3', 2008, NULL, '2013-12-11 07:02:56', 'New'),
(28, 'Literature (the readers choice)', 9, 'Glencoe McGraw Hill', 20, '..', 'the McGrawHill Companies Inc', '0-02-817934-x', 2001, NULL, '2013-12-11 07:05:25', 'Damage'),
(29, 'Beloved a Novel', 9, 'Toni Morrison', 13, '..', 'Alfred A. Knoff, Inc', '0-394-53597-9', 1987, NULL, '2013-12-11 07:07:02', 'Old'),
(30, 'Silver Burdett Engish', 2, 'Judy Brim', 12, 'Silver Burdett Company', 'Silver', '0-382-03575-5', 1985, NULL, '2013-12-11 09:22:50', 'Old'),
(31, 'The Corporate Warriors (Six Classic Cases in American Business)', 8, 'Douglas K. Ramsey', 8, 'Houghton Miffin Company', '..', '0-395-35487-0', 1987, NULL, '2013-12-11 09:25:32', 'Old'),
(32, 'Introduction to Information System', 9, 'Cristine Redoblo', 10, 'CHMSC', 'Brian INC', '123-132', 2013, NULL, '2014-01-17 19:00:10', 'New');

INSERT INTO `Member` VALUES
(52, 'Mark', 'Sanchez', 'Male', 'Talisay', 212010, 'Teacher', 'Faculty', 'Active'),
(53, 'April Joy', 'Aguilar', 'Female', 'E.B. Magalona', 0, 'Student', 'Second Year', 'Banned'),
(54, 'Alfonso', 'Pancho', 'Male', 'E.B. Magalona', 9, 'Student', 'First Year', 'Active'),
(55, 'Jonathan ', 'Antanilla', 'Male', 'E.B. Magalona', 32, 'Student', 'Fourth Year', 'Active'),
(56, 'Renzo Bryan', 'Pedroso', 'Male', 'Silay City', 3030, 'Student', 'Third Year', 'Active'),
(57, 'Eleazar', 'Duterte', 'Male', 'E.B. Magalona', 90902, 'Student', 'Second Year', 'Active'),
(58, 'Ellen Mae', 'Espino', 'Female', 'E.B. Magalona', 123, 'Student', 'First Year', 'Active'),
(59, 'Ruth', 'Magbanua', 'Female', 'E.B. Magalona', 9340, 'Student', 'Second Year', 'Active'),
(60, 'Shaina Marie', 'Gabino', 'Female', 'Silay City', 132134, 'Student', 'Second Year', 'Active'),
(62, 'Chairty Joy', 'Punzalan', 'Female', 'E.B. Magalona', 12423, 'Teacher', 'Faculty', 'Active'),
(63, 'Kristine May', 'Dela Rosa', 'Female', 'Silay City', 1321, 'Student', 'Second Year', 'Active'),
(64, 'Chinie marie', 'Laborosa', 'Female', 'E.B. Magalona', 902101, 'Student', 'Second Year', 'Active'),
(65, 'Ruby', 'Morante', 'Female', 'E.B. Magalona', 0, 'Teacher', 'Faculty', 'Active');

INSERT INTO `Category` VALUES
(1, 'Periodical'),
(2, 'English'),
(3, 'Math'),
(4, 'Science'),
(5, 'Encyclopedia'),
(6, 'Filipiniana'),
(7, 'Newspaper'),
(8, 'General'),
(9, 'References');

INSERT INTO `BorrowerType` VALUES
(2, 'Teacher'),
(20, 'Employee'),
(21, 'Non-Teaching'),
(22, 'Student'),
(32, 'Conruction');

INSERT INTO `Borrow` VALUES
(482, 52, '2014-03-20 23:50:00', '2014-01-03'),
(483, 55, '2014-03-21 23:49:00', '2014-03-21'),
(484, 55, '2014-03-20 23:50:00', '2014-03-21');

INSERT INTO `BorrowDetails` VALUES
(162, 15, 482, 'pending', NULL),
(163, 15, 483, 'returned', '2014-03-21 12:30:51'),
(164, 16, 484, 'pending', NULL);

INSERT INTO `Users` VALUES
(2, 'admin', 'admin', 'john', 'smith');

--lknlkjl -s-uck