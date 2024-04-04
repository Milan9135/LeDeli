CREATE DATABASE LeDeliDB;

use LeDeliDB;

-- Producten
CREATE TABLE Producten (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    omschrijving VARCHAR(255),
    prijs DECIMAL(10, 2)
);

-- Klanten
CREATE TABLE Klanten (
    klant_id INT PRIMARY KEY AUTO_INCREMENT,
    klant_naam VARCHAR(255),
    email VARCHAR(255),
    wachtwoord VARCHAR(255)
);

-- Tafels
CREATE TABLE Tafels (
    tafel_id INT AUTO_INCREMENT PRIMARY KEY,
    klant_id INT,
    FOREIGN KEY (klant_id) REFERENCES Klanten(klant_id) ON DELETE CASCADE
);

-- Reserveringen
CREATE TABLE Reserveringen (
    reservering_id INT AUTO_INCREMENT PRIMARY KEY,
    klant_id INT,
    tafel_id INT,
    reserverings_datum DATE, -- Alleen de datum van de reservering
    begin_tijd TIME, -- Begin tijd van de reservering op de dag
    eind_tijd TIME, -- Eind tijd van de reservering op de dag
    FOREIGN KEY (klant_id) REFERENCES Klanten(klant_id) ON DELETE CASCADE,
    FOREIGN KEY (tafel_id) REFERENCES Tafels(tafel_id) ON DELETE CASCADE
);

-- Rekeningen
CREATE TABLE Rekeningen (
    rekening_id INT AUTO_INCREMENT PRIMARY KEY,
    klant_id INT,
    product_id INT,
    aantal INT,
    FOREIGN KEY (klant_id) REFERENCES Klanten(klant_id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES Producten(product_id) ON DELETE CASCADE
);