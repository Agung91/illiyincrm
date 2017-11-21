-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2017 pada 06.29
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `illiyin_crm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`id_company` int(11) NOT NULL,
  `name_company` varchar(30) NOT NULL,
  `email_company` varchar(30) NOT NULL,
  `web_company` varchar(30) NOT NULL,
  `address_company` text NOT NULL,
  `description_company` text NOT NULL,
  `industry_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id_company`, `name_company`, `email_company`, `web_company`, `address_company`, `description_company`, `industry_id`) VALUES
(14, 'Bank Mayapada Internasional', 'bankmayapada@gmail.com', 'bankmayapada.co.id', '', '', 83),
(15, 'Sri Rejeki Isman', 'srirejeki@gmail.com', 'srirejeki.com', '', '', 84),
(16, 'Tiga Pilar Sejahtera Food', 'sejahterafood@gmail.com', 'sejahterahfood.com', '', '', 85),
(17, 'Sekar Laut', 'sekarlaut@gmail.com', 'sekarlaut.co.id', '', '', 86),
(18, 'Perdana Gapuraprim', 'perdanagapuraprim@gmail.com', 'perdanagapuraprim.com', '', '', 87),
(19, 'Metropolitan Land', 'metropolitanland@gmail.com', 'metropolitanland.com', '', '', 88),
(20, 'Nusa Raya Cipta', 'nusarayacipta@gmail.com', 'nusarayacipta.co.id', '', '', 89);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`id_customer` int(11) NOT NULL,
  `name_customer` varchar(30) NOT NULL,
  `email_customer` varchar(30) NOT NULL,
  `phone_customer` varchar(30) NOT NULL,
  `jobtitle_customer` varchar(30) NOT NULL,
  `upload_customer` text NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `email_customer`, `phone_customer`, `jobtitle_customer`, `upload_customer`, `company_id`) VALUES
(42, 'Agung Nurcahyo Rosian Dana', 'agung@gmail.com', '(+62) 87645353620', 'Siswa', 'indexdfghjk.jpg', 15),
(43, 'Dwi Amar Nurcahyo', 'dwiamar@gmail.com', '(+62) 8214232134', 'Meller', 'sejarah-os-windows-95.jpg', 16),
(44, 'M. Zainul Arifin', 'arifin@gmail.com', '(+62) 13313452', '-', 'swastika-01.JPG', 17),
(45, 'Rosian Dana', 'rosiand@gmail.com', '(+62) 8764323456', 'Siswa', 'logo lambang gambar tkj 1.PNG', 18),
(47, 'Ekki .A.W', 'ekki@gmail.com', '(+62) 034746372626', 'Siswa', 'sejarah-windows-7.png', 18),
(48, 'Agung', 'agung@gmail.com', '0293281338', '-', 'Sistem Virtual Mesin.png', 20),
(49, 'Bayu Kurniawan', 'kurniawan@gmail.com', '+(62) 8621416263', 'Teacher', 'Galaxy.jpg', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `industry`
--

CREATE TABLE IF NOT EXISTS `industry` (
`id_industry` int(11) NOT NULL,
  `name_industry` varchar(30) NOT NULL,
  `description_industry` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `industry`
--

INSERT INTO `industry` (`id_industry`, `name_industry`, `description_industry`) VALUES
(83, 'PT Bank Mayapada Internasional', 'Description'),
(84, 'PT Sri Rejeki Isman ', 'Description'),
(85, 'PT Tiga Pilar Sejahtera Food', 'Description'),
(86, 'PT Sekar Laut', 'Description'),
(87, ' PT Perdana Gapuraprim', 'Description'),
(88, 'PT Metropolitan Land', 'Description'),
(89, 'PT Nusa Raya Cipta', 'Description');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(6, 'agung91', 'pass123', 'Agung Nurcahyo Rosian Dana', 'agungnurcahyo91@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
 ADD PRIMARY KEY (`id_industry`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
MODIFY `id_industry` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
