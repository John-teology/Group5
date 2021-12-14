CREATE TABLE Users (
    UserID int,
    Username varchar(50),
    Pwd varchar(300),
);

CREATE TABLE Establishment (
    EstablishmentID int,
    UserID int,
    con_tra_ID int,
    EstablishmentName varchar(50),
    EstablishmentLocation varchar(50),
    EstablishmentDescription text
);

CREATE TABLE ContactTracing (
    Con_tra_ID int,
    UserID int,
    EstablishmentID int,
    first_name varchar(50)
    last_name varchar(50)
    email varchar(50)
    DOB varchar(50),

);

CREATE TABLE Report (
    ReportID int,
    Con_Tra_ID int,
    EstablishmentID int
    
);