-- ============================================
-- 1. MEMBUAT DATABASE
-- ============================================

CREATE DATABASE IF NOT EXISTS siakad_db;
USE siakad_db;


-- ============================================
-- 2. TABEL FAKULTAS
-- ============================================

CREATE TABLE IF NOT EXISTS fakultas (
    kode_fakultas VARCHAR(10) PRIMARY KEY,
    nama_fakultas VARCHAR(100) NOT NULL
) ENGINE=InnoDB;


-- ============================================
-- 3. TABEL PROGRAM STUDI
-- ============================================

CREATE TABLE IF NOT EXISTS program_studi (
    kode_prodi VARCHAR(10) PRIMARY KEY,
    kode_fakultas VARCHAR(10) NOT NULL,
    nama_prodi VARCHAR(100) NOT NULL,
    jenjang VARCHAR(10) NOT NULL,

    CONSTRAINT fk_prodi_fakultas
        FOREIGN KEY (kode_fakultas)
        REFERENCES fakultas(kode_fakultas)
) ENGINE=InnoDB;


-- ============================================
-- 4. TABEL MAHASISWA
-- ============================================

CREATE TABLE IF NOT EXISTS mahasiswa (
    nim VARCHAR(15) PRIMARY KEY,
    kode_prodi VARCHAR(10) NOT NULL,
    nama_lengkap VARCHAR(150) NOT NULL,
    angkatan INT NOT NULL,
    status_mahasiswa VARCHAR(20) DEFAULT 'Aktif',
    email VARCHAR(100) UNIQUE,
    no_telepon VARCHAR(20),
    alamat TEXT,

    CONSTRAINT fk_mahasiswa_prodi
        FOREIGN KEY (kode_prodi)
        REFERENCES program_studi(kode_prodi)
) ENGINE=InnoDB;


-- ============================================
-- 5. TABEL DOSEN
-- ============================================

CREATE TABLE IF NOT EXISTS dosen (
    nidn VARCHAR(20) PRIMARY KEY,
    kode_prodi VARCHAR(10) NOT NULL,
    nama_dosen VARCHAR(150) NOT NULL,
    email VARCHAR(100) UNIQUE,
    no_telepon VARCHAR(20),

    CONSTRAINT fk_dosen_prodi
        FOREIGN KEY (kode_prodi)
        REFERENCES program_studi(kode_prodi)
) ENGINE=InnoDB;


-- ============================================
-- 6. TABEL MATA KULIAH
-- ============================================

CREATE TABLE IF NOT EXISTS mata_kuliah (
    kode_mk VARCHAR(10) PRIMARY KEY,
    kode_prodi VARCHAR(10) NOT NULL,
    nidn VARCHAR(20) NOT NULL,
    nama_mk VARCHAR(100) NOT NULL,
    sks INT NOT NULL CHECK (sks > 0),
    semester INT NOT NULL CHECK (semester > 0),

    CONSTRAINT fk_mk_prodi
        FOREIGN KEY (kode_prodi)
        REFERENCES program_studi(kode_prodi),

    CONSTRAINT fk_mk_dosen
        FOREIGN KEY (nidn)
        REFERENCES dosen(nidn)
) ENGINE=InnoDB;


-- ============================================
-- 7. TABEL KRS
-- ============================================

CREATE TABLE IF NOT EXISTS krs (
    id_krs INT PRIMARY KEY AUTO_INCREMENT,
    nim VARCHAR(15) NOT NULL,
    kode_mk VARCHAR(10) NOT NULL,
    semester INT NOT NULL CHECK (semester > 0),
    tahun_akademik VARCHAR(9) NOT NULL,
    kelas CHAR(1),
    tanggal_ambil DATE NOT NULL,

    CONSTRAINT fk_krs_mahasiswa
        FOREIGN KEY (nim)
        REFERENCES mahasiswa(nim),

    CONSTRAINT fk_krs_mk
        FOREIGN KEY (kode_mk)
        REFERENCES mata_kuliah(kode_mk),

    CONSTRAINT uq_krs UNIQUE (nim, kode_mk, semester, tahun_akademik)
) ENGINE=InnoDB;


-- ============================================
-- 8. TABEL PRESENSI
-- ============================================

CREATE TABLE IF NOT EXISTS presensi (
    id_presensi INT PRIMARY KEY AUTO_INCREMENT,
    id_krs INT NOT NULL,
    pertemuan INT NOT NULL CHECK (pertemuan > 0),
    tanggal_presensi DATE NOT NULL,
    status_kehadiran VARCHAR(20) NOT NULL CHECK (status_kehadiran IN ('Hadir', 'Sakit', 'Izin', 'Alpha', 'Terlambat')),

    CONSTRAINT fk_presensi_krs
        FOREIGN KEY (id_krs)
        REFERENCES krs(id_krs),

    CONSTRAINT uq_presensi UNIQUE (id_krs, pertemuan)
) ENGINE=InnoDB;


-- ============================================
-- 9. TABEL TRANSKRIP NILAI
-- ============================================

CREATE TABLE IF NOT EXISTS transkrip_nilai (
    id_transkrip INT PRIMARY KEY AUTO_INCREMENT,
    nim VARCHAR(15) NOT NULL,
    total_sks INT NOT NULL CHECK (total_sks >= 0),
    ipk DECIMAL(3,2) NOT NULL CHECK (ipk >= 0.00 AND ipk <= 4.00),
    tanggal_cetak DATE,

    CONSTRAINT fk_transkrip_mahasiswa
        FOREIGN KEY (nim)
        REFERENCES mahasiswa(nim),

    CONSTRAINT uq_transkrip UNIQUE (nim)
) ENGINE=InnoDB;


-- ============================================
-- 10. SELESAI
-- ============================================
