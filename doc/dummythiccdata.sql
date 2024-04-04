use ledelidb;

-- Klanten
INSERT INTO Klanten (klant_naam, email, wachtwoord)
VALUES ('John Doe', 'john@example.com', '$2y$10$Lq5KwyylfId/xwHujvT6bOic0cXWx9aA0qYKsP1EoXyf3tzg82F2K'), -- password123
        ('Jane Smith', 'jane@example.com', '$2y$10$pDcdcmIzpyOZJ/3c/fjAtuNcBsSR0WWhbL0/X5J7.BhFjFCJXF5Du'); -- qwerty123

-- Tafels
INSERT INTO Tafels (klant_id)
VALUES (1), (2), (1);

-- Producten
INSERT INTO Producten (omschrijving, prijs)
VALUES ('Product A', 10.99),
        ('Product B', 15.50),
        ('Product C', 20.25);

-- Reserveringen
INSERT INTO Reserveringen (klant_id, tafel_id, reserverings_datum, begin_tijd, eind_tijd)
VALUES (1, 1, '2024-04-07', '12:00:00', '14:00:00'),
        (2, 2, '2024-04-08', '13:00:00', '15:00:00'),
        (1, 3, '2024-04-09', '14:00:00', '16:00:00');

-- Rekeningen
INSERT INTO Rekeningen (klant_id, product_id, aantal)
VALUES (1, 1, 2),
        (2, 2, 1),
        (1, 3, 3);
