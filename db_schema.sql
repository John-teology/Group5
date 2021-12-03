CREATE TABLE Users (
    UserID int,
    LastName varchar(50),
    FirstName varchar(50),
    Username varchar(50),
    Pwd varchar(50),
    Email varchar(50),
    DOB varchar(50)
);

CREATE TABLE Establishment (
    EstablishmentID int,
    UserID int,
    ContactTracingID int,
    EstablishmentName varchar(50),
    EstablishmentLocation varchar(50),
    EstablishmentDescription text
);

CREATE TABLE ContactTracing (
    ContactTracingID int,
    UserID int,
    EstablishmentID int,
    StartTime timestamp,
    HomeAddress varchar(50),
    UserFullName varchar(50)
);

CREATE TABLE Report (
    ReportID int,
    ContactTracingID int,
    UserID int,
    EstablishmentID int
    
);