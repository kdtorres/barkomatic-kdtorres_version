CREATE DATABASE vg_shippingDB;

CREATE TABLE `vg_shippingdb`.`Administrator` (
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `Username` VARCHAR(25) NOT NULL , 
    `Password` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

CREATE TABLE `vg_shippingdb`.`Administrator_Details` ( 
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `Firstname` VARCHAR(25) NOT NULL , 
    `Lastname` VARCHAR(25) NOT NULL , 
    `MI` VARCHAR(25) NOT NULL , 
    `RoleType` VARCHAR(25) NOT NULL , 
    `RoleDescription` TEXT(200) NOT NULL , 
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

INSERT INTO administrator (Username, Password) VALUES ('kimdavetorres', 'ctu2020');
INSERT INTO administrator_details (Firstname, Lastname, MI, RoleType, RoleDescription) VALUES ('Kim Dave', 'Torres', 'O', 'Admin', 'Manage customer');

CREATE TABLE `vg_shippingdb`.`Ticket` ( 
    `TicketID` INT NOT NULL AUTO_INCREMENT , 
    `TicketNo` VARCHAR(6) NOT NULL , 
    `Status` VARCHAR(25) NOT NULL , 
    PRIMARY KEY (`TicketID`)
) ENGINE = InnoDB;

CREATE TABLE `vg_shippingdb`.`Customer` (
    `CustomerID` INT NOT NULL AUTO_INCREMENT ,
    `Name` VARCHAR(25) NOT NULL , 
    `Age` INT NOT NULL , 
    `Sex` VARCHAR(10) NOT NULL ,
    `Email` VARCHAR(45) NOT NULL ,  
    PRIMARY KEY (`CustomerID`)
) ENGINE = InnoDB;

CREATE TABLE `vg_shippingdb`.`Reservation_Details` (
    `ReservationID` INT NOT NULL AUTO_INCREMENT ,
    `ReservationDate` DATE NOT NULL , 
    `DepartureTime` VARCHAR(25) NOT NULL , 
    `Destination` VARCHAR(25) NOT NULL , 
    `Accommodation` VARCHAR(25) NOT NULL , 
    `NameOfVessel` VARCHAR(25) NOT NULL , 
    PRIMARY KEY (`ReservationID`)
) ENGINE = InnoDB;

CREATE TABLE `vg_shippingdb`.`Approved_Customer` (
    `ApID` INT NOT NULL AUTO_INCREMENT , 
    `TicketNo` VARCHAR(25) NOT NULL , 
    `Name` VARCHAR(25) NOT NULL , 
    `Age` INT NOT NULL , 
    `Sex` VARCHAR(10) NOT NULL ,
    `Email` VARCHAR(45) NOT NULL ,  
    `ReservationDate` DATE NOT NULL , 
    `DepartureTime` VARCHAR(25) NOT NULL , 
    `Destination` VARCHAR(25) NOT NULL , 
    `Accommodation` VARCHAR(25) NOT NULL , 
    `NameOfVessel` VARCHAR(25) NOT NULL , 
    PRIMARY KEY (`ApID`)
) ENGINE = InnoDB;

CREATE TABLE `vg_shippingdb`.`Admin_Notification` (
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `NotificationStatus` VARCHAR(10) NOT NULL , 
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

CREATE TABLE `vg_shippingdb`.`TIC_Notification` (
    `ID` INT NOT NULL AUTO_INCREMENT , 
    `NotificationStatus` VARCHAR(10) NOT NULL , 
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;


