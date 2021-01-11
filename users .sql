-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 07, 2021 la 02:25 PM
-- Versiune server: 10.4.14-MariaDB
-- Versiune PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `users`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `Nume si Prenume` varchar(40) NOT NULL,
  `Telefon` int(12) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Parola` varchar(25) NOT NULL,
  `Type` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`Nume si Prenume`, `Telefon`, `Email`, `Parola`, `Type`) VALUES
('Sabau Ionut', 772095466, 'ionut.sabau98@e-uvt.ro', 'facultate', 0),
('Socaci David', 772095463, 'david.socaci99@e-uvt.ro', 'masina', 0),
('Lenut Razvan', 772095469, 'razvan.lenut98@e-uvt.ro', 'motocicleta', 0),
('Beatrice Clepcea', 734283452, 'beatrice.clepcea98@yahoo.', 'machiaje', 0),
('Sabau Andreea', 774567892, 'sabauandreea@gmail.com', 'produs', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
