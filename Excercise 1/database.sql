-- Database: LoginReg
CREATE DATABASE IF NOT EXISTS `LoginReg` DEFAULT CHARACTER SET utf8mb4 COLLATE=utf8mb4_unicode_ci;
USE `LoginReg`;

-- Create table for laptop data
CREATE TABLE IF NOT EXISTS `Laptops` (
  `LaptopID` INT(11) NOT NULL AUTO_INCREMENT,
  `Brand` VARCHAR(50) NOT NULL,
  `Model` VARCHAR(100) NOT NULL,
  `Processor` VARCHAR(50) DEFAULT NULL,
  `RAM` INT(11) DEFAULT NULL,
  `Storage` VARCHAR(50) DEFAULT NULL,
  `Graphics` VARCHAR(50) DEFAULT NULL,
  `DisplaySize` DECIMAL(4,1) DEFAULT NULL,
  `Price` DECIMAL(10,2) DEFAULT NULL,
  `StockQuantity` INT(11) DEFAULT NULL,
  `ReleaseYear` YEAR DEFAULT NULL,
  PRIMARY KEY (`LaptopID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data
INSERT INTO `Laptops` (`Brand`, `Model`, `Processor`, `RAM`, `Storage`, `Graphics`, `DisplaySize`, `Price`, `StockQuantity`, `ReleaseYear`) VALUES
('Dell', 'Inspiron 15', 'Intel i5', 8, '512GB SSD', 'Intel UHD', 15.6, 750.00, 10, 2022),
('HP', 'Pavilion 14', 'Intel i7', 16, '1TB SSD', 'NVIDIA MX450', 14.0, 1200.00, 5, 2023),
('ASUS', 'ROG Strix', 'AMD Ryzen 7', 16, '512GB SSD', 'NVIDIA RTX 3060', 15.6, 1500.00, 3, 2023),
('Lenovo', 'ThinkPad X1', 'Intel i5', 8, '256GB SSD', 'Intel Iris Xe', 14.0, 950.00, 8, 2021);