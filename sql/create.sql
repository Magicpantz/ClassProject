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
