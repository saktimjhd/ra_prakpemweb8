CREATE DATABASE IF NOT EXISTS data_mahasiswa;
USE data_mahasiswa;

CREATE TABLE IF NOT EXISTS mahasiswa (
    nim VARCHAR(10) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    email VARCHAR(100)
);

INSERT INTO mahasiswa (nim, nama, jurusan, email) VALUES
('122130002', 'Tukul Arwana', 'Teknik Elektro', 'tukul.122130002@student.itera.ac.id'),
('122130006', 'Siti Nurhaliza', 'Teknik Elektro', 'siti.122130006@student.itera.ac.id'),
('122130010', 'Agus Picek', 'Teknik Elektro', 'agus.122130010@student.itera.ac.id'),
('122130014', 'Sigit Rendang', 'Teknik Elektro', 'sigit.122130014@student.itera.ac.id'),
('122140001', 'Michael Jackson Simanjuntak', 'Teknik Informatika', 'michael.122140001@student.itera.ac.id'),
('122140005', 'Abu Bakar Sinaga', 'Teknik Informatika', 'abu.122140005@student.itera.ac.id'),
('122140123', 'Sakti Mujahid Imani', 'Teknik Informatika', 'sakti.122140123@student.itera.ac.id'),
('122140013', 'Rafi Ahmad', 'Teknik Informatika', 'rafi.122140013@student.itera.ac.id'),
('122170003', 'Ahmad Dahlan', 'Teknik Mesin', 'ahmad.122170003@student.itera.ac.id'),
('122170007', 'Maman Suherman', 'Teknik Mesin', 'maman.122170007@student.itera.ac.id'),
('122170011', 'Budi Santoso', 'Teknik Mesin', 'budi.122170011@student.itera.ac.id'),
('122170015', 'Hadi Prasetyo', 'Teknik Mesin', 'hadi.122170015@student.itera.ac.id'),
('122280004', 'Endank Soekamnti', 'Teknik Kimia', 'endank.122280004@student.itera.ac.id'),
('122280008', 'Rina Putri Sari', 'Teknik Kimia', 'rina.122280008@student.itera.ac.id'),
('122280012', 'Pudidi Carlos', 'Teknik Kimia', 'pudidi.122280012@student.itera.ac.id');
