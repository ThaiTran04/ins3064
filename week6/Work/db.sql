
-- Tạo DB mới
CREATE DATABASE IF NOT EXISTS LoginReg
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE LoginReg;

-- Tạo bảng userReg
CREATE TABLE table1 (
  id INT(11) NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  contact VARCHAR(20) NOT NULL,
  PRIMARY KEY (id)
);
