-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 05:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `idAkses` int(11) NOT NULL,
  `Nomor_Kode` int(11) DEFAULT NULL,
  `Nomor_Ruas` int(11) DEFAULT NULL,
  `Seksi_Ruas` int(11) DEFAULT NULL,
  `Deskripsi_Seksi` varchar(45) DEFAULT NULL,
  `Lokasi_Akses` varchar(45) DEFAULT NULL,
  `Titik_Ikat_Ledger` varchar(45) DEFAULT NULL,
  `Koordinat_X_Titik_Ikat_Ledger` float DEFAULT NULL,
  `Koordinat_Y_Titik_Ikat_Ledger` float DEFAULT NULL,
  `Koordinat_Z_Titik_Ikat_Ledger` float DEFAULT NULL,
  `Deskripsi_Titik_Ikat_Ledger` varchar(45) DEFAULT NULL,
  `Titik_Ikat_Patok` varchar(45) DEFAULT NULL,
  `Koordinat_X_Titik_Ikat_Patok` float DEFAULT NULL,
  `Koordinat_Y_Titik_Ikat_Patok` float DEFAULT NULL,
  `Koordinat_Z_Titik_Ikat_Patok` float DEFAULT NULL,
  `Deskripsi_Titik_Ikat_Patok` varchar(45) DEFAULT NULL,
  `Lokasi_Titik_Awal_Segmen` varchar(45) DEFAULT NULL,
  `KM_Titik_Awal_Segmen` varchar(45) DEFAULT NULL,
  `Koordinat_X_Titik_Awal_Segmen` float DEFAULT NULL,
  `Koordinat_Y_Titik_Awal_Segmen` float DEFAULT NULL,
  `Koordinat_Z_Titik_Awal_Segmen` float DEFAULT NULL,
  `Deskripsi_Titik_Awal_Segmen` varchar(45) DEFAULT NULL,
  `Lokasi_Titik_Akhir_Segmen` varchar(45) DEFAULT NULL,
  `KM_Titik_Akhir_Segmen` varchar(45) DEFAULT NULL,
  `Koordinat_X_Titik_Akhir_Segmen` float DEFAULT NULL,
  `Koordinat_Y_Titik_Akhir_Segmen` float DEFAULT NULL,
  `Koordinat_Z_Titik_Akhir_Segmen` float DEFAULT NULL,
  `Deskripsi_Titik_Akhir_Segmen` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data1`
--

CREATE TABLE `data1` (
  `idData1` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Uraian` varchar(50) NOT NULL,
  `Luas` float DEFAULT NULL,
  `Data_Perolehan` varchar(45) DEFAULT NULL,
  `Nilai_Perolehan` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data teknik satu';

--
-- Dumping data for table `data1`
--

INSERT INTO `data1` (`idData1`, `idAkses`, `Tahun`, `Uraian`, `Luas`, `Data_Perolehan`, `Nilai_Perolehan`) VALUES
(2, NULL, NULL, 'LAHAN RUMIJA', NULL, NULL, NULL),
(3, NULL, NULL, 'PERKERASAN JALAN', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data2_bahujalan`
--

CREATE TABLE `data2_bahujalan` (
  `idData2_Bahu` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `KI_Dalam` varchar(45) DEFAULT NULL,
  `KI_Luar` varchar(45) DEFAULT NULL,
  `KA_Dalam` varchar(45) DEFAULT NULL,
  `KA_Luar` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data dua bagian Bahu Jalan';

--
-- Dumping data for table `data2_bahujalan`
--

INSERT INTO `data2_bahujalan` (`idData2_Bahu`, `idAkses`, `Uraian`, `KI_Dalam`, `KI_Luar`, `KA_Dalam`, `KA_Luar`) VALUES
(1, NULL, 'LEBAR (M)', NULL, NULL, NULL, NULL),
(2, NULL, 'TEBAL (M)', NULL, NULL, NULL, NULL),
(3, NULL, 'JENIS', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data2_lapis`
--

CREATE TABLE `data2_lapis` (
  `idData2_Lapis` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Tipe_Lapis` varchar(50) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `KI_Jalur_1` varchar(45) DEFAULT NULL,
  `KI_Jalur_2` varchar(45) DEFAULT NULL,
  `KA_Jalur_1` varchar(45) DEFAULT NULL,
  `KA_Jalur_2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan informasi data dua mengenai lapis';

--
-- Dumping data for table `data2_lapis`
--

INSERT INTO `data2_lapis` (`idData2_Lapis`, `idAkses`, `Tahun`, `Tipe_Lapis`, `Uraian`, `KI_Jalur_1`, `KI_Jalur_2`, `KA_Jalur_1`, `KA_Jalur_2`) VALUES
(1, NULL, NULL, '1', 'LEBAR (M)', NULL, NULL, NULL, NULL),
(2, NULL, NULL, '1', 'TEBAL (M)', NULL, NULL, NULL, NULL),
(3, NULL, NULL, '1', 'JENIS', NULL, NULL, NULL, NULL),
(4, NULL, NULL, '1', 'KONDISI', NULL, NULL, NULL, NULL),
(5, NULL, NULL, '1', 'INDEKS KONDISI/IRI', NULL, NULL, NULL, NULL),
(6, NULL, NULL, '2', 'LEBAR (M)', NULL, NULL, NULL, NULL),
(7, NULL, NULL, '2', 'TEBAL (M)', NULL, NULL, NULL, NULL),
(8, NULL, NULL, '2', 'JENIS', NULL, NULL, NULL, NULL),
(9, NULL, NULL, '3', 'LEBAR (M)', NULL, NULL, NULL, NULL),
(10, NULL, NULL, '3', 'TEBAL (M)', NULL, NULL, NULL, NULL),
(11, NULL, NULL, '3', 'JENIS', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data2_median`
--

CREATE TABLE `data2_median` (
  `idData2_Median` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Median` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data dua bagian Median';

--
-- Dumping data for table `data2_median`
--

INSERT INTO `data2_median` (`idData2_Median`, `idAkses`, `Uraian`, `Median`) VALUES
(1, NULL, 'LEBAR (M)', NULL),
(2, NULL, 'TEBAL (M)', NULL),
(3, NULL, 'JENIS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data3_gorong`
--

CREATE TABLE `data3_gorong` (
  `idData3_Gorong` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Ke-1` varchar(45) DEFAULT NULL,
  `Ke-2` varchar(45) DEFAULT NULL,
  `Ke-3` varchar(45) DEFAULT NULL,
  `Ke-4` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data tiga bagian Gorong gorong';

--
-- Dumping data for table `data3_gorong`
--

INSERT INTO `data3_gorong` (`idData3_Gorong`, `idAkses`, `Tahun`, `Uraian`, `Ke-1`, `Ke-2`, `Ke-3`, `Ke-4`) VALUES
(1, NULL, NULL, 'JENIS MATERIAL', NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'UKURAN PANJANG (M)', NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'KONDISI', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data3_penahantanah`
--

CREATE TABLE `data3_penahantanah` (
  `idData3_Penahan` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Jenis_Bangunan` varchar(50) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Ke_1_KI` varchar(45) DEFAULT NULL,
  `Ke_1_KA` varchar(45) DEFAULT NULL,
  `Ke_2_KI` varchar(45) DEFAULT NULL,
  `Ke_2_KA` varchar(45) DEFAULT NULL,
  `Ke_3_KI` varchar(45) DEFAULT NULL,
  `Ke_3_KA` varchar(45) DEFAULT NULL,
  `Ke_4_KI` varchar(45) DEFAULT NULL,
  `Ke_4_KA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data tiga bagian Bangunan Penahan Tanah\n';

--
-- Dumping data for table `data3_penahantanah`
--

INSERT INTO `data3_penahantanah` (`idData3_Penahan`, `idAkses`, `Tahun`, `Jenis_Bangunan`, `Uraian`, `Ke_1_KI`, `Ke_1_KA`, `Ke_2_KI`, `Ke_2_KA`, `Ke_3_KI`, `Ke_3_KA`, `Ke_4_KI`, `Ke_4_KA`) VALUES
(1, NULL, NULL, '1', 'JENIS MATERIAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, '1', 'UKURAN POKOK (BH/M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, '1', 'KONDISI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, '2', 'JENIS MATERIAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, '2', 'UKURAN POKOK (BH/M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, '2', 'KONDISI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data3_saluran`
--

CREATE TABLE `data3_saluran` (
  `idData3_Saluran` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Jenis_Saluran` varchar(50) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Ke_1_KI` varchar(45) DEFAULT NULL,
  `Ke_1_MID` varchar(45) DEFAULT NULL,
  `Ke_1_KA` varchar(45) DEFAULT NULL,
  `Ke_2_KI` varchar(45) DEFAULT NULL,
  `Ke_2_MID` varchar(45) DEFAULT NULL,
  `Ke_2_KA` varchar(45) DEFAULT NULL,
  `Ke_3_KI` varchar(45) DEFAULT NULL,
  `Ke_3_MID` varchar(45) DEFAULT NULL,
  `Ke_3_KA` varchar(45) DEFAULT NULL,
  `Ke_4_KI` varchar(45) DEFAULT NULL,
  `Ke_4_MID` varchar(45) DEFAULT NULL,
  `Ke_4_KA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data tiga bagian Saluran(Manhole, Riol, dll).';

--
-- Dumping data for table `data3_saluran`
--

INSERT INTO `data3_saluran` (`idData3_Saluran`, `idAkses`, `Tahun`, `Jenis_Saluran`, `Uraian`, `Ke_1_KI`, `Ke_1_MID`, `Ke_1_KA`, `Ke_2_KI`, `Ke_2_MID`, `Ke_2_KA`, `Ke_3_KI`, `Ke_3_MID`, `Ke_3_KA`, `Ke_4_KI`, `Ke_4_MID`, `Ke_4_KA`) VALUES
(1, NULL, NULL, '1', 'UKURAN POKOK (BH/M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, '1', 'KONDISI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, '1', 'DALAM (M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, '2', 'JENIS MATERIAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, '2', 'UKURAN POKOK (BH/M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, '2', 'KONDISI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, '3', 'JENIS MATERIAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, '3', 'UKURAN POKOK (BH/M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, '3', 'KONDISI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, '4', 'JENIS MATERIAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, '4', 'UKURAN POKOK (BH/M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, '4', 'KONDISI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, '5', 'JENIS MATERIAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, '5', 'UKURAN POKOK (BH/M)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, '5', 'KONDISI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data4`
--

CREATE TABLE `data4` (
  `idData4` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `KI` varchar(45) DEFAULT NULL,
  `MID` varchar(45) DEFAULT NULL,
  `KA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data4`
--

INSERT INTO `data4` (`idData4`, `idAkses`, `Tahun`, `Uraian`, `KI`, `MID`, `KA`) VALUES
(1, NULL, NULL, 'PAGAR PENGAMAN', NULL, NULL, NULL),
(2, NULL, NULL, 'GUARDRAIL (BH/M)', NULL, NULL, NULL),
(3, NULL, NULL, 'WIREROPE (BH/M)', NULL, NULL, NULL),
(4, NULL, NULL, 'CONCRETE BARRIER (BH/M)', NULL, NULL, NULL),
(5, NULL, NULL, 'PAGAR BATAS OPERASIONAL (BH/M)', NULL, NULL, NULL),
(6, NULL, NULL, 'DINDING PENGAMAN (BH/M)', NULL, NULL, NULL),
(7, NULL, NULL, 'PATOK PEMANDU (BH)', NULL, NULL, NULL),
(8, NULL, NULL, 'PATOK HEKTOMETER (BH)', NULL, NULL, NULL),
(9, NULL, NULL, 'PATOK LEGER JALAN (BH)', NULL, NULL, NULL),
(10, NULL, NULL, 'PATOK RUMIJA (BH)', NULL, NULL, NULL),
(11, NULL, NULL, 'MARKA JALAN (BH/M)', NULL, NULL, NULL),
(12, NULL, NULL, 'RAMBU LAMPU LINTAS (BH)', NULL, NULL, NULL),
(13, NULL, NULL, 'RAMBU PENUNJUK ARAH (BH)', NULL, NULL, NULL),
(14, NULL, NULL, 'LAMPU LALU LINTAS (BH)', NULL, NULL, NULL),
(15, NULL, NULL, 'LAMPU PENERANGAN (BH)', NULL, NULL, NULL),
(16, NULL, NULL, 'JEMBATAN PENYEBRANGAN ORANG (BH/M)', NULL, NULL, NULL),
(17, NULL, NULL, 'CERMIN JALAN (BH)', NULL, NULL, NULL),
(18, NULL, NULL, 'CCTV (BH)', NULL, NULL, NULL),
(19, NULL, NULL, 'VARIABLE MESSAGE SIGN (BH)', NULL, NULL, NULL),
(20, NULL, NULL, 'REFLEKTOR GUARDRAIL (BH)', NULL, NULL, NULL),
(21, NULL, NULL, 'INFO TOL (BH)', NULL, NULL, NULL),
(22, NULL, NULL, 'ANTI SILAU (BH)', NULL, NULL, NULL),
(23, NULL, NULL, 'MANIK JALAN / MATA KUCING (BH)', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data5_bangunan`
--

CREATE TABLE `data5_bangunan` (
  `idData5_Bangunan` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Luas_Lahan` float DEFAULT NULL,
  `Luas_Bangunan` float DEFAULT NULL,
  `Nilai_Lahan` int(11) DEFAULT NULL,
  `Nilai_Bangunan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Mentimpan data teknik lima bagian Bangunan operasional tol\n';

--
-- Dumping data for table `data5_bangunan`
--

INSERT INTO `data5_bangunan` (`idData5_Bangunan`, `idAkses`, `Uraian`, `Luas_Lahan`, `Luas_Bangunan`, `Nilai_Lahan`, `Nilai_Bangunan`) VALUES
(1, NULL, 'GERBANG TOL', NULL, NULL, NULL, NULL),
(2, NULL, 'KANTOR', NULL, NULL, NULL, NULL),
(3, NULL, 'TEMPAT PERISTIRAHATAN', NULL, NULL, NULL, NULL),
(4, NULL, 'LAINNYA', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data5_publikfacility`
--

CREATE TABLE `data5_publikfacility` (
  `idData5_Publik` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Jenis_Sarana` varchar(50) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `KI` varchar(45) DEFAULT NULL,
  `MID` varchar(45) DEFAULT NULL,
  `KA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data lima bagian fasilitas publik';

--
-- Dumping data for table `data5_publikfacility`
--

INSERT INTO `data5_publikfacility` (`idData5_Publik`, `idAkses`, `Jenis_Sarana`, `Uraian`, `KI`, `MID`, `KA`) VALUES
(1, NULL, 'PRASARANA', 'AIR (BH/M)', NULL, NULL, NULL),
(2, NULL, 'PRASARANA', 'LISTRIK (BH/M)', NULL, NULL, NULL),
(3, NULL, 'PRASARANA', 'LISTRIK DALAM TANAH (BH/M)', NULL, NULL, NULL),
(4, NULL, 'PRASARANA', 'TELPON (BH/M)', NULL, NULL, NULL),
(5, NULL, 'PRASARANA', 'TELPON DALAM TANAH (BH/M)', NULL, NULL, NULL),
(6, NULL, 'PRASARANA', 'MINYAK (BH/M)', NULL, NULL, NULL),
(7, NULL, 'PRASARANA', 'GAS (BH/M)', NULL, NULL, NULL),
(8, NULL, 'PRASARANA', 'RUMAH KABEL (BH)', NULL, NULL, NULL),
(9, NULL, 'PRASARANA', 'HIDRAN (BH)', NULL, NULL, NULL),
(10, NULL, 'PRASARANA', 'TRAFO (BH)', NULL, NULL, NULL),
(11, NULL, 'SARANA', 'AIR (BH/M)', NULL, NULL, NULL),
(12, NULL, 'SARANA', 'LISTRIK (BH/M)', NULL, NULL, NULL),
(13, NULL, 'SARANA', 'LISTRIK DALAM TANAH (BH/M)', NULL, NULL, NULL),
(14, NULL, 'SARANA', 'TELPON (BH/M)', NULL, NULL, NULL),
(15, NULL, 'SARANA', 'TELPON DALAM TANAH (BH/M)', NULL, NULL, NULL),
(16, NULL, 'SARANA', 'MINYAK (BH/M)', NULL, NULL, NULL),
(17, NULL, 'SARANA', 'GAS (BH/M)', NULL, NULL, NULL),
(18, NULL, 'SARANA', 'RUMAH KABEL (BH)', NULL, NULL, NULL),
(19, NULL, 'SARANA', 'HIDRAN (BH)', NULL, NULL, NULL),
(20, NULL, 'SARANA', 'TRAFO (BH)', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datalainnya`
--

CREATE TABLE `datalainnya` (
  `idDataL` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Tanggal_Pemanfaatan` date DEFAULT NULL,
  `Nilai` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datalainnya`
--

INSERT INTO `datalainnya` (`idDataL`, `idAkses`, `Uraian`, `Tanggal_Pemanfaatan`, `Nilai`) VALUES
(1, NULL, 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datalingkunganjalan1`
--

CREATE TABLE `datalingkunganjalan1` (
  `idDataLing1` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Jenis_Lingkungan` varchar(50) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Tahun` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Untuk data terrain dan Tata Guna Lahan';

--
-- Dumping data for table `datalingkunganjalan1`
--

INSERT INTO `datalingkunganjalan1` (`idDataLing1`, `idAkses`, `Jenis_Lingkungan`, `Uraian`, `Tahun`) VALUES
(1, NULL, 'TERRAIN', 'KIRI', NULL),
(2, NULL, 'TERRAIN', 'KANAN', NULL),
(3, NULL, 'TATA GUNA LAHAN', 'KIRI', NULL),
(4, NULL, 'TATA GUNA LAHAN', 'KANAN', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `datalingkunganjalan2`
--

CREATE TABLE `datalingkunganjalan2` (
  `idDataLing2` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Jenis_Lingkungan` varchar(50) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Untuk menyimpan data underpass dan overpass';

--
-- Dumping data for table `datalingkunganjalan2`
--

INSERT INTO `datalingkunganjalan2` (`idDataLing2`, `idAkses`, `Jenis_Lingkungan`, `Uraian`, `Tahun`) VALUES
(1, NULL, 'UNDERPASS', 'KM', NULL),
(2, NULL, 'UNDERPASS', 'X', NULL),
(3, NULL, 'UNDERPASS', 'Y', NULL),
(4, NULL, 'OVERPASS', 'KM', NULL),
(5, NULL, 'OVERPASS', 'X', NULL),
(6, NULL, 'OVERPASS', 'Y', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ident`
--

CREATE TABLE `ident` (
  `id` int(2) NOT NULL,
  `id_leger` varchar(5) DEFAULT NULL,
  `km` varchar(7) DEFAULT NULL,
  `kode_prov` int(2) DEFAULT NULL,
  `nama_prov` varchar(7) DEFAULT NULL,
  `kode_kab` int(1) DEFAULT NULL,
  `nama_kab` varchar(14) DEFAULT NULL,
  `kode_kec` int(2) DEFAULT NULL,
  `nama_kec` varchar(15) DEFAULT NULL,
  `kode_desa` int(2) DEFAULT NULL,
  `nama_desa` varchar(18) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ident`
--

INSERT INTO `ident` (`id`, `id_leger`, `km`, `kode_prov`, `nama_prov`, `kode_kab`, `nama_kab`, `kode_kec`, `nama_kec`, `kode_desa`, `nama_desa`, `tahun`) VALUES
(1, 'M.001', '108+982', 17, 'LAMPUNG', 9, 'PESAWARAN', 3, 'TEGINENENG', 4, 'NEGARA RATU WATES', 2019),
(2, 'M.002', '109+500', 17, 'LAMPUNG', 9, 'PESAWARAN', 3, 'TEGINENENG', 4, 'NEGARA RATU WATES', 2019),
(3, 'M.004', '111+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 2, 'SIDOKERTO', 2019),
(4, 'M.005', '111+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 2, 'SIDOKERTO', 2019),
(5, 'M.006', '112+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 2, 'SIDOKERTO', 2019),
(6, 'M.007', '113+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 3, 'SUKA JADI', 2019),
(7, 'M.008', '114+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 3, 'SUKA JADI', 2019),
(8, 'M.009', '114+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 3, 'SUKA JADI', 2019),
(9, 'M.010', '115+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 10, 'BUMI RATU', 2019),
(10, 'M.011', '116+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 10, 'BUMI RATU', 2019),
(11, 'M.012', '117+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 10, 'BUMI RATU', 2019),
(12, 'M.013', '117+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 9, 'TULUNG KAKAN', 2019),
(13, 'M.014', '118+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 9, 'TULUNG KAKAN', 2019),
(14, 'M.015', '119+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 9, 'TULUNG KAKAN', 2019),
(15, 'M.016', '120+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 9, 'TULUNG KAKAN', 2019),
(16, 'M.017', '120+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 1, 'SIDOWARAS', 2019),
(17, 'M.018', '121+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 1, 'SIDOWARAS', 2019),
(18, 'M.019', '122+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 14, 'BUMI RATU NUBAN', 1, 'SIDOWARAS', 2019),
(19, 'M.020', '123+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 14, 'TERBANGGI SUBING', 2019),
(20, 'M.021', '123+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 5, 'GUNUNG SARI', 2019),
(21, 'M.022', '124+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 5, 'GUNUNG SARI', 2019),
(22, 'M.023', '125+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 5, 'GUNUNG SARI', 2019),
(23, 'M.024', '126+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 5, 'GUNUNG SARI', 2019),
(24, 'M.025', '126+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 5, 'GUNUNG SARI', 2019),
(25, 'M.026', '127+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 5, 'GUNUNG SARI', 2019),
(26, 'M.027', '128+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 8, 'GUNUNG SUGIH', 2019),
(27, 'M.028', '129+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 8, 'GUNUNG SUGIH', 2019),
(28, 'M.029', '129+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 8, 'GUNUNG SUGIH', 2019),
(29, 'R.005', '130+887', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 8, 'GUNUNG SUGIH', 2019),
(30, 'R.001', '131+113', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(31, 'R.004', '132+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(32, 'R.006', '131+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(33, 'A.001', '131+784', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(34, 'A.002', '132+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(35, 'R.003', '131+923', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(36, 'M.031', '131+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(37, 'R.002', '131+979', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 2, 'SEPUTIH JAYA', 2019),
(38, 'M.032', '132+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'BANDAR JAYA TIMUR', 2019),
(39, 'M.033', '132+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'BANDAR JAYA TIMUR', 2019),
(40, 'M.034', '133+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'BANDAR JAYA TIMUR', 2019),
(41, 'M.035', '134+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 6, 'INDRA PUTRA SUBING', 2019),
(42, 'M.036', '135+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 9, 'KARANG ENDAH', 2019),
(43, 'M.037', '135+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 9, 'KARANG ENDAH', 2019),
(44, 'M.038', '136+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 4, 'YAKUM JAYA', 2019),
(45, 'M.039', '137+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 4, 'YAKUM JAYA', 2019),
(46, 'M.040', '138+000', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 4, 'YAKUM JAYA', 2019),
(47, 'M.041', '138+750', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(48, 'M.042', '139+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(49, 'A.004', '141+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(50, 'R.010', '141+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(51, 'R.011', '139+785', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(52, 'R.012', '140+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(53, 'R.007', '140+014', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(54, 'A.003', '140+625', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(55, 'R.009', '140+785', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(56, 'R.008', '140+863', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(57, 'M.043', '140+250', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 7, 'TERBANGGI BESAR', 5, 'TERBANGGI BESAR', 2019),
(58, 'M.030', '130+500', 17, 'LAMPUNG', 2, 'LAMPUNG TENGAH', 4, 'GUNUNG SUGIH', 8, 'GUNUNG SUGIH', 2019),
(59, 'M.003', '110+250', 17, 'LAMPUNG', 9, 'PESAWARAN', 3, 'TEGINENENG', 5, 'GUNUNG SUGIH BARU', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `jenisbangunan`
--

CREATE TABLE `jenisbangunan` (
  `idJenisBangunan` int(11) NOT NULL,
  `Jenis_Bangunan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan Jenis bangunan (Penahan Tanah dan Penutup Lereng)';

--
-- Dumping data for table `jenisbangunan`
--

INSERT INTO `jenisbangunan` (`idJenisBangunan`, `Jenis_Bangunan`) VALUES
(1, 'BANGUNAN PENAHAN TANAH'),
(2, 'PENUTUP LERENG'),
(3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenislingkungan`
--

CREATE TABLE `jenislingkungan` (
  `idJenisLingkungan` int(11) NOT NULL,
  `Jenis_Lingkungan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan uraian jenis lingkungan jalan';

-- --------------------------------------------------------

--
-- Table structure for table `jenissaluran`
--

CREATE TABLE `jenissaluran` (
  `idJenisSaluran` int(11) NOT NULL,
  `Jenis_Saluran` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan Jenis Saluran(Saluran Permanen, Drainase, Manhole, Riol, KERB)';

--
-- Dumping data for table `jenissaluran`
--

INSERT INTO `jenissaluran` (`idJenisSaluran`, `Jenis_Saluran`) VALUES
(1, 'JENIS MATERIAL'),
(2, 'DRAINASE BAWAH TANAH'),
(3, 'MANHOLE'),
(4, 'R I O L'),
(5, 'K E R B'),
(6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenissarana`
--

CREATE TABLE `jenissarana` (
  `idJenisSarana` int(11) NOT NULL,
  `Jenis_Sarana` varchar(45) DEFAULT NULL COMMENT 'Sarana/Prasarana\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='menyimpan atribut sarana/prasarana';

-- --------------------------------------------------------

--
-- Table structure for table `kodenama`
--

CREATE TABLE `kodenama` (
  `Nomor_Kode` int(11) NOT NULL,
  `Provinsi` varchar(45) DEFAULT NULL,
  `Kabupaten` varchar(45) DEFAULT NULL,
  `Kecamatan` varchar(45) DEFAULT NULL,
  `Desa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lintasharian`
--

CREATE TABLE `lintasharian` (
  `idLintas` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Golongan` varchar(45) DEFAULT NULL,
  `LHR_KI` int(11) DEFAULT NULL,
  `Tarif_KI` int(11) DEFAULT NULL,
  `LHR_KA` int(11) DEFAULT NULL,
  `Tarif_KA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lintasharian`
--

INSERT INTO `lintasharian` (`idLintas`, `idAkses`, `Tahun`, `Golongan`, `LHR_KI`, `Tarif_KI`, `LHR_KA`, `Tarif_KA`) VALUES
(1, NULL, NULL, 'GOLONGAN I (SEDAN, JIP, PICK UP, BUS)', NULL, NULL, NULL, NULL),
(2, NULL, NULL, 'GOLONGAN II (TRUK DENGAN 2 GANDAR)', NULL, NULL, NULL, NULL),
(3, NULL, NULL, 'GOLONGAN III (TRUK DENGAN 3 GANDAR)', NULL, NULL, NULL, NULL),
(4, NULL, NULL, 'GOLONGAN IV (TRUK DENGAN 4 GANDAR)', NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'GOLONGAN V (TRUK 5 GANDAR ATAU LEBIH)', NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'GOLONGAN VI (KENDARAAN RODA DUA )', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori_hotspot`
--

CREATE TABLE `m_kategori_hotspot` (
  `id_kategori_hotspot` int(11) NOT NULL,
  `kd_kategori_hotspot` varchar(10) DEFAULT 'NULL',
  `nm_kategori_hotspot` varchar(50) NOT NULL,
  `marker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kategori_hotspot`
--

INSERT INTO `m_kategori_hotspot` (`id_kategori_hotspot`, `kd_kategori_hotspot`, `nm_kategori_hotspot`, `marker`) VALUES
(1, '001', 'Ringan', 'ringan.png'),
(2, '002', 'Sedang', 'sedang.png'),
(3, '003', 'Berat/Parah', 'parah.png');

-- --------------------------------------------------------

--
-- Table structure for table `m_spasial`
--

CREATE TABLE `m_spasial` (
  `id_atribut` int(11) NOT NULL,
  `nama_atribut` varchar(30) NOT NULL,
  `geojson_atribut` varchar(30) NOT NULL,
  `warna_atribut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_spasial`
--

INSERT INTO `m_spasial` (`id_atribut`, `nama_atribut`, `geojson_atribut`, `warna_atribut`) VALUES
(3, 'IDENTIFIKASI', '25061219081252.geojson', '#969696'),
(4, 'gorong gorong', 'gorong gorong.geojson', '#880000'),
(5, 'guardrail', 'guardrail.geojson', '#000099'),
(6, 'listrik dalam tanah', 'listrik dalam tanah.geojson', '#DD9900'),
(8, 'Administratif', 'gerbang_point.geojson', '#000000'),
(3001, 'Konstruksi', 'lapis_permukaan1.geojson', '#3bce45'),
(3002, 'misal apa kek gituuu', 'coba.geojson', ''),
(3003, 'dsdas', 'coba1.geojson', ''),
(3005, 'KONSTRUKSI', 'BPT2.geojson', '#00ff8c');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nm_pengguna` varchar(20) NOT NULL,
  `kt_sandi` varchar(150) NOT NULL,
  `level` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_pengguna`, `kt_sandi`, `level`) VALUES
(1, 'admin', '$2y$10$oNX.X8jgLhNclHBeI8ytT.1vODlml8.AN1Ieb.rSIChhCa1e7cS0S', 'Admin'),
(2, 'user', '$2y$10$oNX.X8jgLhNclHBeI8ytT.1vODlml8.AN1Ieb.rSIChhCa1e7cS0S', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `petageometrik`
--

CREATE TABLE `petageometrik` (
  `idPeta` int(11) NOT NULL,
  `idAkses` int(11) DEFAULT NULL,
  `Uraian` varchar(45) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petageometrik`
--

INSERT INTO `petageometrik` (`idPeta`, `idAkses`, `Uraian`, `Tahun`) VALUES
(1, NULL, 'LEBAR RUMIJA (M)', NULL),
(2, NULL, 'GRADIEN (%)', NULL),
(3, NULL, 'CROSS FALL (%)', NULL),
(4, NULL, 'SUPERELEVASI (%)', NULL),
(5, NULL, 'RADIUS (%)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `segmen_seksi`
--

CREATE TABLE `segmen_seksi` (
  `id` int(1) NOT NULL,
  `ruas` varchar(27) DEFAULT NULL,
  `seksi` varchar(7) DEFAULT NULL,
  `sta_awal` varchar(7) DEFAULT NULL,
  `sta_akhir` varchar(7) DEFAULT NULL,
  `x_awal` varchar(10) DEFAULT NULL,
  `y_awal` varchar(11) DEFAULT NULL,
  `z_awal` varchar(6) DEFAULT NULL,
  `deskripsi_awal` varchar(40) DEFAULT NULL,
  `x_akhir` varchar(10) DEFAULT NULL,
  `y_akhir` varchar(11) DEFAULT NULL,
  `z_akhir` varchar(6) DEFAULT NULL,
  `deskripsi_akhir` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `segmen_seksi`
--

INSERT INTO `segmen_seksi` (`id`, `ruas`, `seksi`, `sta_awal`, `sta_akhir`, `x_awal`, `y_awal`, `z_awal`, `deskripsi_awal`, `x_akhir`, `y_akhir`, `z_akhir`, `deskripsi_akhir`) VALUES
(1, 'BAKAUHENI - TERBANGGI BESAR', '108+892', '140+892', '109+000', '522825,146', '9430234,102', '77,734', '400 METER SETELAH INTERCHANGE TEGINENENG', '525626,860', '9460898,902', '39,063', '9 METER SETELAH BOX CULVERT KM 140+883');

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE `sheet1` (
  `A` varchar(108) DEFAULT NULL,
  `B` varchar(9) DEFAULT NULL,
  `C` varchar(5) DEFAULT NULL,
  `D` varchar(38) DEFAULT NULL,
  `E` int(4) DEFAULT NULL,
  `F` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`A`, `B`, `C`, `D`, `E`, `F`) VALUES
('Jakarta - Bogor - Ciawi', '50,00', '9,00', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Semarang Seksi A,B,C', '24,75', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Jakarta - Tangerang', '27,00', '6,00', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Prof.Dr.Ir.Soedijatmo', '14,30', '0,00', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Cawang - Tomang - Pluit (CTC / Lingkar Dalam Kota Jakarta)', '23,55', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Surabaya - Gempol', '46,55', '6,00', 'PT Jasa Marga (Persero) Tbk.', 2018, '40 Tahun'),
('Jakarta - Cikampek', '72,00', '11,00', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Belawan - Medan - Tanjung Morawa', '33,70', '9,00', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Padalarang - Cileunyi', '35,63', '28,77', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Cikampek - Padalarang', '58,50', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Palimanan - Kanci', '26,30', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Pondok Aren - Bintaro Viaduct - Ulujami', '5,55', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('JORR E1U (Hankam - Cikunir)', '8,10', '0,30', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('JORR E1S (Taman Mini IC - Hankam Raya)', '4,00', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('JORR E2 (Cikunir - Cakung)', '9,07', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('JORR E3 (Cakung - Cilincing)', '3,75', NULL, 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('JORR W2S (Pondok Pinang - Ulujami)', '5,72', '0,48', 'PT Jasa Marga (Persero) Tbk.', 1905, '40 Tahun'),
('Cawang - Tj.Priok - Ancol Timur - Jembatan Tiga Pluit (Wiyoto Wiyono)', '27,05', NULL, 'PT. Citra Marga Nusaphala Persada, Tbk', 1905, '31 Tahun'),
('Surabaya - Gresik', '20,70', NULL, 'PT. Margabumi Matraraya', 1905, '49 Tahun'),
('JORR S', '14,83', NULL, 'PT Hutama Karya', 1905, '36 Tahun'),
('Ujung Pandang Seksi 1 dan 2', '6,05', NULL, 'PT. Bosowa Marga Nusantara', 1905, '49 Tahun'),
('Pondok Aren - Serpong', '7,25', NULL, 'PT. Bintaro Serpong Damai', 1905, '31 Tahun'),
('Tangerang - Merak', '72,29', '5,59', 'PT. Marga Mandala Sakti', 1905, '50 Tahun'),
('Makassar Seksi IV', '11,60', NULL, 'PT. Jalan Tol Seksi Empat', 1905, '35 Tahun'),
('Simpang Susun Waru - Bandara Juanda', '12,80', NULL, 'PT. Citra Margatama Surabaya', 1905, '35 Tahun'),
('Kanci - Pejagan', '35,00', NULL, 'PT. Semesta Marga Raya', 1905, '35 Tahun'),
('JORR W1 (Kebon Jeruk - Penjaringan)', '9,85', '0,55', 'PT. Jakarta Lingkar Baratsatu', 1905, '35 Tahun'),
('Semarang - Solo', '72,94', NULL, 'PT. Trans Marga Jateng', 2014, '45 Tahun'),
('Surabaya - Mojokerto', '36,27', NULL, 'PT Jasamarga Surabaya Mojokerto', 2018, '42 Tahun'),
('Bogor Ring Road Seksi I, IIA dan IIB', '7,85', NULL, 'PT. Marga Sarana Jabar', 2018, '45 Tahun'),
('Cinere - Jagorawi', '3,50', NULL, 'PT. Translingkar Kita Jaya', 1905, '40 Tahun'),
('Nusa Dua - Ngurah Rai - Benoa (Bali Mandara)', '10,00', NULL, 'PT Jasamarga Bali Tol', 1905, '45 Tahun'),
('JORR W2 Utara (Kebon Jeruk - Ulujami)', '7,87', NULL, 'PT. Marga Lingkar Jakarta', 2014, '40 Tahun'),
('Kertosono - Mojokerto Seksi I, II dan III', '39,6', NULL, 'PT Marga Harjaya Infrastruktur', 2017, '45 Tahun'),
('Gempol - Pandaan', '12,05', '1,56', 'PT Jasamarga Pandaan Tol', 1905, '37 Tahun'),
('Cikampek - Palimanan', '116,75', NULL, 'PT Lintas Marga Sedaya', 1905, '35 Tahun'),
('Pejagan - Pemalang', '57,5', NULL, 'PT Pejagan Pemalang Tol Road', 2018, '45 Tahun'),
('Gempol - Pasuruan', '34,15', NULL, 'PT Transmarga Jatim Pasuruan', 2018, '45 Tahun'),
('Akses Tanjung Priuk', '11,40', NULL, 'Satker Tanjung Priuk', 1905, '40 Tahun'),
('Palembang - Simpang Indralaya Seksi I', '7,75+14,2', NULL, 'PT Hutama Karya', 1905, '40 Tahun'),
('Medan - Kualanamu - Tebing Tinggi II, III, IV, V dan VI', '41,65', NULL, 'PT Jasamarga Kualanamu Tol', 1905, '40 Tahun'),
('Medan - Binjai Seksi II dan III', '10,46', NULL, 'PT Hutama Karya', 1905, '40 Tahun'),
('Bekasi - Cawang - Kampung Melayu Seksi 1B dan 1C (Becakayu)', '8,4', NULL, 'PT. Kresna Kusuma Dyandra Marga', 1905, '40 Tahun'),
('Soreang - Pasir Koja', '8, 15', NULL, 'PT Citra Marga Lintas Jabar', 1905, '40 Tahun'),
('Bakauheni - Terbanggi Besar (Segmen Pelabuhan Bakauheni - SS Bakauheni dan Segmen SS Lematang - SS Kotabaru)', '13,9', NULL, 'PT. Hutama Karya', 1905, '40 Tahun'),
('Ngawi - Kertosono', '86,7', NULL, 'PT. Ngawi Kertosono Jaya', 1905, '35 Tahun'),
('Solo - Ngawi', '35,2', NULL, 'PT. Jasamarga Solo Ngawi', 1905, '40 Tahun'),
('Depok - Antasari Seksi I dan II', '12,1', NULL, 'PT. Citra Waspphutowa', 2020, '40 Tahun'),
('Pemalang - Batang', '39,2', NULL, 'PT. Pemalang Batang Tol Road', 1905, '40 Tahun'),
('Ciawi-Sukabumi Seksi I', '15,35', NULL, 'PT. Trans Jabar Tol', 1905, '45 Tahun'),
('Semarang-Batang', '74,2', NULL, 'PT. Jasamarga Semarang Batang', 1905, '45 Tahun'),
('Relokasi Porong-Gempol', '6,3', NULL, 'PT. Jasa Marga (Persero) Tbk', 1905, '40 Tahun'),
('Pandaan-Malang', '38,48', NULL, 'PT. Jasamarga Pandaan Malang', 2020, '35 Tahun'),
('Terbanggi Besar - Pematang Panggang - Kayu Agung', '189', NULL, 'PT. Hutama Karya', 1905, '40 Tahun'),
('Kunciran-Serpong', '11,4', NULL, 'PT. Marga Trans Nusantara', 1905, '35 Tahun'),
('Jakarta-Cikampek II Elevated', '38', NULL, 'PT. Jasamarga Jalanlayang Cikampek', 1905, '45 Tahun'),
('Balikpapan - Samarinda Seksi 2 dan 4', '64,87', NULL, 'PT. Jasamarga Balikpapan Samarinda', 1905, '40 Tahun'),
('Kayu Agung-Palembang-Betung Seksi 1 Tahap 1A', '29,39', NULL, 'PT. Waskita Sriwijaya Tol', 1905, '40 Tahun'),
('Sigli Banda - Aceh', '13,5', NULL, 'PT. Hutama Karya', 1905, '40 Tahun'),
('Manado - Bitung', '26,35', NULL, 'PT. Jasamarga Manado Bitung', 1905, '40 Tahun'),
('Pekanbaru - Dumai', '131,69', NULL, 'PT. Hutama Karya', 1905, '40 Tahun'),
('Cimanggis - Cibitung Seksi 1', '2,75', NULL, 'PT. Cimanggis Cibitung Tollways', 1905, '45 Tahun'),
('AP Pettarani Makasar Ujung Pandang Seksi 3', '4,03', NULL, 'PT. Bosowa Marga Nusantara', 1905, '49 Tahun'),
('Krian - Legundi - Bunder - Manyar Seksi 1 - 3', '29', NULL, 'PT. Waskita Bumi Wira', 1905, '50 Tahun'),
(NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timestamps`
--

CREATE TABLE `timestamps` (
  `create_time` timestamp NULL DEFAULT current_timestamp(),
  `update_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tipelapis`
--

CREATE TABLE `tipelapis` (
  `idTipeLapis` int(11) NOT NULL,
  `TipeLapis` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan tipe dari lapis. (Contoh Lapis Atas, Lapis Bawah)';

--
-- Dumping data for table `tipelapis`
--

INSERT INTO `tipelapis` (`idTipeLapis`, `TipeLapis`) VALUES
(1, 'LAPIS PERMUKAAN'),
(2, 'LAPIS PONDASI ATAS'),
(3, 'LAPIS PONDASI BAWAH');

-- --------------------------------------------------------

--
-- Table structure for table `t_hotspot`
--

CREATE TABLE `t_hotspot` (
  `id_hotspot` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kategori_hotspot` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `lat` float(9,6) NOT NULL,
  `lng` float(9,6) NOT NULL,
  `tanggal` date NOT NULL,
  `polygon` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_hotspot`
--

INSERT INTO `t_hotspot` (`id_hotspot`, `id_kecamatan`, `id_kategori_hotspot`, `lokasi`, `keterangan`, `lat`, `lng`, `tanggal`, `polygon`) VALUES
(69, 8, 3, 'Gunung Makmur, South Kalimantan, Indonesia', 'Kebakaran Parah sekali; tes', -3.888232, 114.650726, '2020-08-01', ''),
(70, 18, 2, 'Telaga Biru, Sungai Jelai, South Kalimantan, Indon', 'Kebakaran Parah sekali', -3.699476, 114.757561, '2020-08-01', ''),
(71, 21, 1, 'Jl. Raya', 'Rusak parah', -3.816000, 114.796997, '2020-08-01', NULL),
(72, 16, 3, 'Martadah Baru, South Kalimantan, Indonesia', 'Rusak parah', -3.614505, 114.808754, '2020-08-01', ''),
(73, 21, 2, 'Jl. Sepeda', '-', -364.101013, 114.675003, '2020-08-01', NULL),
(74, 21, 1, 'Rumah Saiful', '-', -366.101013, 114.775002, '2020-08-01', NULL),
(75, 21, 3, 'Rmah Jakaria', '-', -3.846000, 1.148000, '2020-08-01', NULL),
(76, 21, 2, 'HUtan Rawa Merawa', '-', -376.101013, 114.857002, '2020-08-01', NULL),
(77, 21, 1, 'Gang Jambu', 'Rumah Terbakar', -381.713013, 114.801003, '2020-08-01', NULL),
(78, 19, 3, 'Kurau, South Kalimantan, Indonesia', 'Lantai 4 terbakars', -3.590178, 114.620934, '2020-08-01', ''),
(79, 21, 2, 'Pasar Kaki Lima', '4 Loket terbakar', -36.553001, 114.685997, '2020-08-01', NULL),
(80, 21, 1, 'Jl. Peganggas gas amat', 'tes', -36.553001, 114.775002, '2020-08-01', NULL),
(81, 21, 3, 'South Kalimantan, Indonesia', 'tes', -3.811844, 115.026558, '2020-08-01', ''),
(82, 18, 2, 'RW. 07; Kel. Angsau; Angsau; South Kalimantan; 708', 'dfdf', -3.808418, 114.775429, '2020-08-01', ''),
(83, 21, 1, 'Mushola Nurul Ibadah; Jalan Samudera; RT 10 Desa P', 'tes', -3.803000, 114.762001, '2020-08-01', NULL),
(84, 18, 3, 'Jalan Trans Kalimantan, RT 06, KEL. SARANG HALANG,', 'dfdf', -3.853636, 114.797073, '2020-08-01', ''),
(85, 21, 2, 'Matah; RT 27 Desa Pelaihari; Karang Taruna; South', 'tes', -3.802000, 114.758003, '2020-08-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(60) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:admin 2:user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `email`, `image`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', NULL, 'logo.png', 2),
(2, 'user', '12dea96fec20593566ab75692c9949596833adc9', 'User', NULL, 'default.png', 4),
(3, 'petugas', '670489f94b6997a870b148f74744ee5676304925', 'Petugas', NULL, 'default.png', 3),
(4, 'superadmin', '889a3a791b3875cfae413574b53da4bb8a90d53e', 'Superadmin', NULL, 'default1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_1`
--

CREATE TABLE `user_1` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`idAkses`),
  ADD KEY `fk_KodeNama_idx` (`Nomor_Kode`);

--
-- Indexes for table `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`idData1`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `data2_bahujalan`
--
ALTER TABLE `data2_bahujalan`
  ADD PRIMARY KEY (`idData2_Bahu`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `data2_lapis`
--
ALTER TABLE `data2_lapis`
  ADD PRIMARY KEY (`idData2_Lapis`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `data2_median`
--
ALTER TABLE `data2_median`
  ADD PRIMARY KEY (`idData2_Median`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `data3_gorong`
--
ALTER TABLE `data3_gorong`
  ADD PRIMARY KEY (`idData3_Gorong`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `data3_penahantanah`
--
ALTER TABLE `data3_penahantanah`
  ADD PRIMARY KEY (`idData3_Penahan`),
  ADD KEY `fk_Akses_idx` (`idAkses`),
  ADD KEY `fk_JenisBangunan_idx` (`Jenis_Bangunan`);

--
-- Indexes for table `data3_saluran`
--
ALTER TABLE `data3_saluran`
  ADD PRIMARY KEY (`idData3_Saluran`),
  ADD KEY `fk_Akses_idx` (`idAkses`),
  ADD KEY `fk_JenisSaluran_idx` (`Jenis_Saluran`);

--
-- Indexes for table `data4`
--
ALTER TABLE `data4`
  ADD PRIMARY KEY (`idData4`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `data5_bangunan`
--
ALTER TABLE `data5_bangunan`
  ADD PRIMARY KEY (`idData5_Bangunan`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `data5_publikfacility`
--
ALTER TABLE `data5_publikfacility`
  ADD PRIMARY KEY (`idData5_Publik`),
  ADD KEY `fk_Akses_idx` (`idAkses`),
  ADD KEY `fk_JenisSarana_idx` (`Jenis_Sarana`);

--
-- Indexes for table `datalainnya`
--
ALTER TABLE `datalainnya`
  ADD PRIMARY KEY (`idDataL`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `datalingkunganjalan1`
--
ALTER TABLE `datalingkunganjalan1`
  ADD PRIMARY KEY (`idDataLing1`),
  ADD KEY `fk_Akses_idx` (`idAkses`),
  ADD KEY `fk_JenisLingkungan_idx` (`Jenis_Lingkungan`);

--
-- Indexes for table `datalingkunganjalan2`
--
ALTER TABLE `datalingkunganjalan2`
  ADD PRIMARY KEY (`idDataLing2`),
  ADD KEY `fk_Akses_idx` (`idAkses`),
  ADD KEY `fk_JenisLingkungan_idx` (`Jenis_Lingkungan`);

--
-- Indexes for table `ident`
--
ALTER TABLE `ident`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_leger` (`id_leger`);

--
-- Indexes for table `jenisbangunan`
--
ALTER TABLE `jenisbangunan`
  ADD PRIMARY KEY (`idJenisBangunan`);

--
-- Indexes for table `jenislingkungan`
--
ALTER TABLE `jenislingkungan`
  ADD PRIMARY KEY (`idJenisLingkungan`);

--
-- Indexes for table `jenissaluran`
--
ALTER TABLE `jenissaluran`
  ADD PRIMARY KEY (`idJenisSaluran`);

--
-- Indexes for table `jenissarana`
--
ALTER TABLE `jenissarana`
  ADD PRIMARY KEY (`idJenisSarana`);

--
-- Indexes for table `kodenama`
--
ALTER TABLE `kodenama`
  ADD PRIMARY KEY (`Nomor_Kode`);

--
-- Indexes for table `lintasharian`
--
ALTER TABLE `lintasharian`
  ADD PRIMARY KEY (`idLintas`),
  ADD KEY `fk_DataLainnya_1_idx` (`idAkses`);

--
-- Indexes for table `m_kategori_hotspot`
--
ALTER TABLE `m_kategori_hotspot`
  ADD PRIMARY KEY (`id_kategori_hotspot`);

--
-- Indexes for table `m_spasial`
--
ALTER TABLE `m_spasial`
  ADD PRIMARY KEY (`id_atribut`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `petageometrik`
--
ALTER TABLE `petageometrik`
  ADD PRIMARY KEY (`idPeta`),
  ADD KEY `fk_Akses_idx` (`idAkses`);

--
-- Indexes for table `segmen_seksi`
--
ALTER TABLE `segmen_seksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipelapis`
--
ALTER TABLE `tipelapis`
  ADD PRIMARY KEY (`idTipeLapis`);

--
-- Indexes for table `t_hotspot`
--
ALTER TABLE `t_hotspot`
  ADD PRIMARY KEY (`id_hotspot`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data1`
--
ALTER TABLE `data1`
  MODIFY `idData1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data2_bahujalan`
--
ALTER TABLE `data2_bahujalan`
  MODIFY `idData2_Bahu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data2_lapis`
--
ALTER TABLE `data2_lapis`
  MODIFY `idData2_Lapis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data2_median`
--
ALTER TABLE `data2_median`
  MODIFY `idData2_Median` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data3_gorong`
--
ALTER TABLE `data3_gorong`
  MODIFY `idData3_Gorong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data3_penahantanah`
--
ALTER TABLE `data3_penahantanah`
  MODIFY `idData3_Penahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data3_saluran`
--
ALTER TABLE `data3_saluran`
  MODIFY `idData3_Saluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data4`
--
ALTER TABLE `data4`
  MODIFY `idData4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data5_bangunan`
--
ALTER TABLE `data5_bangunan`
  MODIFY `idData5_Bangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data5_publikfacility`
--
ALTER TABLE `data5_publikfacility`
  MODIFY `idData5_Publik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `datalainnya`
--
ALTER TABLE `datalainnya`
  MODIFY `idDataL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datalingkunganjalan1`
--
ALTER TABLE `datalingkunganjalan1`
  MODIFY `idDataLing1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datalingkunganjalan2`
--
ALTER TABLE `datalingkunganjalan2`
  MODIFY `idDataLing2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenisbangunan`
--
ALTER TABLE `jenisbangunan`
  MODIFY `idJenisBangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenissaluran`
--
ALTER TABLE `jenissaluran`
  MODIFY `idJenisSaluran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lintasharian`
--
ALTER TABLE `lintasharian`
  MODIFY `idLintas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `m_kategori_hotspot`
--
ALTER TABLE `m_kategori_hotspot`
  MODIFY `id_kategori_hotspot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_spasial`
--
ALTER TABLE `m_spasial`
  MODIFY `id_atribut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3008;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petageometrik`
--
ALTER TABLE `petageometrik`
  MODIFY `idPeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipelapis`
--
ALTER TABLE `tipelapis`
  MODIFY `idTipeLapis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_hotspot`
--
ALTER TABLE `t_hotspot`
  MODIFY `id_hotspot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
