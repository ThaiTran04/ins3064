
-- Tạo DB mới
CREATE DATABASE IF NOT EXISTS LoginReg
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE LoginReg;

-- Tạo bảng userReg
CREATE TABLE IF NOT EXISTS userReg (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,        -- 👈 đổi lại từ password_hash → password
  student_id VARCHAR(50),
  class_name VARCHAR(100),
  country VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
