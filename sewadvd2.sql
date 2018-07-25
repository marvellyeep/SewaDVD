-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 09:31 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewadvd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `ID_DENDA` varchar(5) NOT NULL,
  `JENIS_DENDA` varchar(25) DEFAULT NULL,
  `HARGA_DENDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`ID_DENDA`, `JENIS_DENDA`, `HARGA_DENDA`) VALUES
('DE00', 'tidak ada denda', 0),
('G01', 'game-telat', 1000),
('G02', 'game-rusak', 2000),
('G03', 'game-hilang', 4000),
('M01', 'movie-telat', 1000),
('M02', 'movie-rusak', 2000),
('M03', 'movie-hilang', 4000),
('S01', 'software-telat', 2000),
('S02', 'software-rusak', 3000),
('S03', 'software-hilang', 6000),
('SE01', 'series-telat', 1000),
('SE02', 'series-rusak', 1500),
('SE03', 'series-hilang', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID_FILM` varchar(5) NOT NULL,
  `ID_JENIS` varchar(5) DEFAULT NULL,
  `ID_KATEGORI` varchar(5) DEFAULT NULL,
  `COVER` varchar(255) NOT NULL,
  `JUDUL_FILM` varchar(50) DEFAULT NULL,
  `TAHUN_FILM` int(11) DEFAULT NULL,
  `HARGA_FILM` int(11) DEFAULT NULL,
  `STATUS_FILM` int(11) DEFAULT NULL,
  `JUMLAH_KALI_DIPINJAM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID_FILM`, `ID_JENIS`, `ID_KATEGORI`, `COVER`, `JUDUL_FILM`, `TAHUN_FILM`, `HARGA_FILM`, `STATUS_FILM`, `JUMLAH_KALI_DIPINJAM`) VALUES
('F111', 'J001', 'K001', 'https://www.goldenglobes.com/sites/default/files/styles/portrait_medium/public/films/finding_nemo.jpeg?itok=grIy9dHa&c=bce87a9e2fc72060ed86405504fbb373', 'finding nemo', 2003, 2580, 1, 100),
('F131', 'J003', 'K001', 'https://images-na.ssl-images-amazon.com/images/I/71W0PHrQpEL._SY550_.jpg', 'captain amerika', 2014, 3000, 1, 70),
('F234', 'J003', 'K002', 'https://images-na.ssl-images-amazon.com/images/I/91VKfyGGkYL._AC_SX215_.jpg', 'god of war', 2010, 7000, 1, 20),
('F314', 'J001', 'K004', 'https://s4.bukalapak.com/img/483125675/w-1000/Dvd_Doraemon.png', 'doraemon', 2007, 9000, 1, 360),
('F411', 'J003', 'K004', 'https://www.mwpcgame.com/wp-content/uploads/2017/01/Iron-Man-cover-260x280.jpg', 'iron man', 2011, 7000, 1, 301),
('F451', 'J003', 'K004', 'https://images-na.ssl-images-amazon.com/images/I/A1t8xCe9jwL._SY679_.jpg', 'Avengers: Infinity War', 2018, 3000, 1, 500),
('F484', 'J004', 'K001', 'https://upload.wikimedia.org/wikipedia/en/thumb/f/f5/HotelTransylvania.jpg/220px-HotelTransylvania.jpg', 'Hotel transilvania', 2012, 8000, 1, 50),
('F611', 'J001', 'K001', 'https://images-na.ssl-images-amazon.com/images/I/81PPGkrQpWL._SY445_.jpg', 'despicable me', 2009, 13000, 1, 268),
('F612', 'J003', 'K004', 'https://upload.wikimedia.org/wikipedia/en/thumb/8/84/The_Amazing_Spider-Man_2_cover.png/220px-The_Amazing_Spider-Man_2_cover.png', 'the amazing spiderman', 2010, 10000, 1, 289),
('F710', 'J001', 'K001', 'https://vignette.wikia.nocookie.net/spongebob/images/8/8c/Sponge-Bob-Squarepants-vcd-inlay-1-1.jpg/revision/latest?cb=20170409162407', 'spongebob', 2007, 8000, 1, 0),
('F918', 'J003', 'K002', 'https://vignette.wikia.nocookie.net/naruto/images/d/da/Ultimate_Ninja_5.jpg/revision/latest?cb=20130728020710', 'naruto ultimate ninja 5', 2009, 9000, 1, 70);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `ID_JENIS` varchar(5) NOT NULL,
  `NAMA_JENIS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`ID_JENIS`, `NAMA_JENIS`) VALUES
('J001', 'animasi'),
('J002', 'horror'),
('J003', 'action'),
('J004', 'comedy'),
('J005', 'romantic');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_KATEGORI` varchar(5) NOT NULL,
  `NAMA_KATEGORI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_KATEGORI`, `NAMA_KATEGORI`) VALUES
('K001', 'movie'),
('K002', 'game'),
('K003', 'software'),
('K004', 'series');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `ID_PEMINJAM` varchar(5) NOT NULL,
  `NAMA_PEMINJAM` varchar(25) DEFAULT NULL,
  `STATUS_PEMINJAM` int(11) DEFAULT NULL,
  `ALAMAT_PEMINJAM` varchar(50) DEFAULT NULL,
  `NO_HP_PEMINJAM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`ID_PEMINJAM`, `NAMA_PEMINJAM`, `STATUS_PEMINJAM`, `ALAMAT_PEMINJAM`, `NO_HP_PEMINJAM`) VALUES
('US001', 'Dandy Raka', 0, 'Jl Peterongan', 62822167),
('US002', 'Arif Fathur', 0, 'Gresik', 628569182),
('US003', 'Maulana Shura', 0, 'Sidoarjo', 62622212);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `ID_PETUGAS` varchar(5) NOT NULL,
  `NAMA_PETUGAS` varchar(25) DEFAULT NULL,
  `ALAMAT_PETUGAS` varchar(50) DEFAULT NULL,
  `NO_HP_PETUGAS` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`ID_PETUGAS`, `NAMA_PETUGAS`, `ALAMAT_PETUGAS`, `NO_HP_PETUGAS`) VALUES
('PE001', 'Ronaldo', 'Jl Sepanjang Gang 5 no 4', '08574544545'),
('PE002', 'Messi', 'Jl Margomulyo no 18', '085744634346');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_denda`
--

CREATE TABLE `transaksi_denda` (
  `ID_TRANSAKSI` varchar(5) NOT NULL,
  `JENIS_DENDA` varchar(5) DEFAULT NULL,
  `TANGGAL_KEMBALI` date DEFAULT NULL,
  `LAMA_TELAT` int(11) DEFAULT NULL,
  `JUMLAH_KEPING_KEMBALI` int(11) DEFAULT NULL,
  `TOTAL_BAYAR` int(11) DEFAULT NULL,
  `JUMLAH_DENDA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_denda`
--

INSERT INTO `transaksi_denda` (`ID_TRANSAKSI`, `JENIS_DENDA`, `TANGGAL_KEMBALI`, `LAMA_TELAT`, `JUMLAH_KEPING_KEMBALI`, `TOTAL_BAYAR`, `JUMLAH_DENDA`) VALUES
('TRA04', 'M01', '2018-06-07', 1, 2, 8000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kembali`
--

CREATE TABLE `transaksi_kembali` (
  `ID_TRANSAKSI` varchar(5) NOT NULL,
  `TANGGAL_KEMBALI` date DEFAULT NULL,
  `JUMLAH_KEPING_KEMBALI` int(11) DEFAULT NULL,
  `TOTAL_BAYAR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_kembali`
--

INSERT INTO `transaksi_kembali` (`ID_TRANSAKSI`, `TANGGAL_KEMBALI`, `JUMLAH_KEPING_KEMBALI`, `TOTAL_BAYAR`) VALUES
('TRA01', '2018-06-03', 1, 3000),
('TRA02', '2018-06-05', 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pinjam`
--

CREATE TABLE `transaksi_pinjam` (
  `ID_TRANSAKSI` varchar(5) NOT NULL,
  `ID_FILM` varchar(5) DEFAULT NULL,
  `ID_PEMINJAM` varchar(5) DEFAULT NULL,
  `ID_PETUGAS` varchar(5) DEFAULT NULL,
  `TANGGAL_PINJAM` date DEFAULT NULL,
  `TANGGAL_KEMBALI` date NOT NULL,
  `LAMA_PINJAM` int(11) DEFAULT NULL,
  `JAMINAN` varchar(10) DEFAULT NULL,
  `BAYAR_PINJAM` int(11) DEFAULT NULL,
  `JUMLAH_KEPING_PINJAM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_pinjam`
--

INSERT INTO `transaksi_pinjam` (`ID_TRANSAKSI`, `ID_FILM`, `ID_PEMINJAM`, `ID_PETUGAS`, `TANGGAL_PINJAM`, `TANGGAL_KEMBALI`, `LAMA_PINJAM`, `JAMINAN`, `BAYAR_PINJAM`, `JUMLAH_KEPING_PINJAM`) VALUES
('TRA01', 'F111', 'US001', 'PE001', '2018-06-01', '2018-06-03', 2, 'KTP', 2500, 1),
('TRA02', 'F131', 'US002', 'PE001', '2018-06-01', '2018-06-05', 4, 'KTP', 3000, 1),
('TRA04', 'F451', 'US003', 'PE002', '2018-06-05', '2018-06-06', 1, 'KTP', 6000, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`ID_DENDA`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_FILM`),
  ADD KEY `FK_MENGISI_1` (`ID_KATEGORI`),
  ADD KEY `FK_MENGISI_2` (`ID_JENIS`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`ID_JENIS`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_KATEGORI`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`ID_PEMINJAM`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`ID_PETUGAS`);

--
-- Indexes for table `transaksi_denda`
--
ALTER TABLE `transaksi_denda`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_MENGAKSES` (`JENIS_DENDA`);

--
-- Indexes for table `transaksi_kembali`
--
ALTER TABLE `transaksi_kembali`
  ADD PRIMARY KEY (`ID_TRANSAKSI`);

--
-- Indexes for table `transaksi_pinjam`
--
ALTER TABLE `transaksi_pinjam`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_DILAKUKAN_OLEH` (`ID_PEMINJAM`),
  ADD KEY `FK_DILAYANI_OLEH` (`ID_PETUGAS`),
  ADD KEY `FK_MEMILIKI_1` (`ID_FILM`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `FK_MENGISI_1` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategori` (`ID_KATEGORI`),
  ADD CONSTRAINT `FK_MENGISI_2` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis` (`ID_JENIS`);

--
-- Constraints for table `transaksi_denda`
--
ALTER TABLE `transaksi_denda`
  ADD CONSTRAINT `FK_BACA` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `transaksi_pinjam` (`ID_TRANSAKSI`),
  ADD CONSTRAINT `FK_MENGAKSES` FOREIGN KEY (`JENIS_DENDA`) REFERENCES `denda` (`ID_DENDA`);

--
-- Constraints for table `transaksi_kembali`
--
ALTER TABLE `transaksi_kembali`
  ADD CONSTRAINT `FK_MEMBACA` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `transaksi_pinjam` (`ID_TRANSAKSI`);

--
-- Constraints for table `transaksi_pinjam`
--
ALTER TABLE `transaksi_pinjam`
  ADD CONSTRAINT `FK_DILAKUKAN_OLEH` FOREIGN KEY (`ID_PEMINJAM`) REFERENCES `peminjam` (`ID_PEMINJAM`),
  ADD CONSTRAINT `FK_DILAYANI_OLEH` FOREIGN KEY (`ID_PETUGAS`) REFERENCES `petugas` (`ID_PETUGAS`),
  ADD CONSTRAINT `FK_MEMILIKI_1` FOREIGN KEY (`ID_FILM`) REFERENCES `film` (`ID_FILM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
