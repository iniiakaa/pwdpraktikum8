-- Buat database
CREATE DATABASE IF NOT EXISTS toko_buku;
USE toko_buku;

-- Buat tabel buku
CREATE TABLE IF NOT EXISTS buku (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(255) NOT NULL,
    penulis VARCHAR(255) NOT NULL,
    tahun_terbit INT,
    harga DECIMAL(10,2)
);

-- Insert sample data
INSERT INTO buku (judul, penulis, tahun_terbit, harga) VALUES
('Laskar Pelangi', 'Andrea Hirata', 2005, 85000.00),
('Bumi Manusia', 'Pramoedya Ananta Toer', 1980, 95000.50),
('Dilan 1990', 'Pidi Baiq', 2014, 75000.75);