-- Active: 1670736991972@@127.0.0.1@3306@data

CREATE TABLE
    mahasiswa (
        nim int(12) NOT NULL AUTO_INCREMENT,
        nama char(23) NOT NULL,
        prodi varchar(23) NOT NULL,
        primary key (nim)
    )engine = innoDB;

ALTER TABLE mahasiswa AUTO_INCREMENT=100;

INSERT INTO mahasiswa (nim, nama, prodi) VALUES
        (190345, 'Jackky', 'Teknik Kelautan'),
        (199432, 'Muhammad Luffy', 'Teknik Kelautan'),
        (180345, 'Ahmad Akainu', 'Teknik Kelautan'),
        (120423, 'Goro', 'Teknik Kelautan'), 
        (120535, 'Mr.Robot', 'Teknik Informatika'),
        (139546, 'Riki', 'Teknik Informatika'), 
        (120585, 'Cessar', 'Biomedis'), 
        (190535, 'Verronica', 'Biomedis'), 
        (185054, 'Gino', 'Fisika'), 
        (120546, 'Tom', 'Fisika'), 
        (195067, 'Taher', 'Fisika'),
        (190567, 'Chichi', 'Fisika'), 
        (190356, 'Mekar', 'Teknik Industri'), 
        (190575, 'Inul',  'Teknik Industri');

