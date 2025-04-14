---
title: Task C Creating and Loading Relations
date: \today{}
---

*This is preliminary report* In this report are the `.dat` files as well as the
`load` and `create` sql files.

# Create

```sql
CREATE TABLE User (
    UserLibraryID INT PRIMARY KEY NOT NULL,
    UserFName VARCHAR(255),
    UserMName VARCHAR(255),
    UserLName VARCHAR(255)
);

CREATE TABLE Patron (
    UserLibraryID INT NOT NULL,
    FOREIGN KEY (UserLibraryID) REFERENCES User(UserLibraryID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Staff (
    UserLibraryID INT NOT NULL,
    FOREIGN KEY (UserLibraryID) REFERENCES User(UserLibraryID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);

CREATE TABLE Book (
    BookID INT PRIMARY KEY NOT NULL,
    BookTitle VARCHAR(255),
    Author VARCHAR(255),
    Genre VARCHAR(255),
    LocationID VARCHAR(255) DEFAULT 'New Arrivals',
    ISBN INT NOT NULL
);

CREATE TABLE Fines (
    FineID INT PRIMARY KEY NOT NULL,
    UserLibraryID INT NOT NULL,
    BookID INT,
    Amount DOUBLE NOT NULL,
    FOREIGN KEY (UserLibraryID) REFERENCES Patron(UserLibraryID)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (BookID) REFERENCES Book(BookID)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);

CREATE TABLE Checkouts (
    CheckOutID INT PRIMARY KEY NOT NULL,
    UserLibraryID INT,
    BookID INT NOT NULL,
    CheckedOutDate DATE NOT NULL,
    DueDate DATE,
    ReturnedDate DATE DEFAULT NULL,
    FOREIGN KEY (UserLibraryID) REFERENCES Patron(UserLibraryID)
        ON DELETE SET NULL
        ON UPDATE CASCADE,
    FOREIGN KEY (BookID) REFERENCES Book(BookID)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);
```

# Load

```sql
LOAD DATA INFILE '/User.dat' 
INTO TABLE User
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n'
(UserLibraryID, UserFName, UserMName, UserLName);

LOAD DATA INFILE '/Patron.dat' 
INTO TABLE Patron
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n'
(UserLibraryID);

LOAD DATA INFILE '/Staff.dat' 
INTO TABLE Staff
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n'
(UserLibraryID);

LOAD DATA INFILE '/Book.dat' 
INTO TABLE Book
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n'
(BookID, BookTitle, Author, Genre, LocationID, ISBN);

LOAD DATA INFILE '/Fines.csv'
INTO TABLE Fines
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n'
(UserLibraryID, BookID, FineID, Amount);

LOAD DATA INFILE '/Checkouts.csv'
INTO TABLE Checkouts
FIELDS TERMINATED BY ',' 
OPTIONALLY ENCLOSED BY '"' 
LINES TERMINATED BY '\n'
(UserLibraryID, BookID, CheckOutID, CheckedOutDate, DueDate, ReturnedDate);
```


# Dat

## Books

```csv
1001,"The Secret Garden","Frances Hodgson Burnett","Children's Literature,Classics",9780140367884
1002,"Pride and Prejudice","Jane Austen","Romance","Fiction",9780141439518
2005,"Foundation","Isaac Asimov","Science Fiction","Sci-Fi",9780553803717
3010,"To Kill a Mockingbird","Harper Lee","Fiction","Classics",9780061120084
```

## Checkouts 

```csv
1,13579,1001,2024-01-15,2024-01-29,2024-01-28
2,24680,1002,2024-02-01,2024-02-15,
3,13579,2005,2024-02-20,2024-03-05,2024-03-10
4,98765,3010,2024-03-10,2024-03-24,
5,24680,1001,2024-03-15,2024-03-29,2024-04-05
```

## Fines

```csv
1,13579,1001,2.50
2,13579,1002,1.00
3,24680,2005,5.00
4,24680,,3.75
5,98765,3010,0.50
```

## Patron

```csv
67890
13579
24680
98765
```

## Users

```csv
12345,John,Michael,Doe
67890,Jane,,Smith
13579,Peter,Alan,Jones
24680,Mary,,Williams
98765,Robert,Lee,Brown
```

## Staff

```csv
12345
```
