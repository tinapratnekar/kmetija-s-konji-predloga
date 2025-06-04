DROP DATABASE IF EXISTS konjeniski_center;
CREATE DATABASE konjeniski_center;
USE konjeniski_center;

CREATE TABLE rezervacije (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(100),
    email VARCHAR(100),
    telefon VARCHAR(20),
    ponudba VARCHAR(100),
    osebe INT,
    datum DATE,
    ura TIME
);

INSERT INTO rezervacije (ime, email, telefon, ponudba, osebe, datum, ura) VALUES
('Ana Novak', 'ana@example.com', '041123456', 'Jahalne ure', 2, '2025-06-10', '10:00:00'),
('Boris Kralj', 'boris@example.com', '031234567', 'Konjska terapija', 1, '2025-06-11', '11:00:00'),
('Cvetka Zupan', 'cvetka@example.com', '051987654', 'Program za otroke', 3, '2025-06-12', '09:30:00'),
('David Turk', 'david@example.com', '070456789', 'Terensko jahanje', 2, '2025-06-13', '13:00:00'),
('Eva Horvat', 'eva@example.com', '068333222', 'Namestitev konja in reja', 1, '2025-06-14', '15:00:00');
