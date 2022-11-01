-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2022 at 01:30 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u828663829_mctrans`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(111) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `about_text_geo` text DEFAULT NULL,
  `about_text_eng` text DEFAULT NULL,
  `about_text_rus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `image`, `about_text_geo`, `about_text_eng`, `about_text_rus`) VALUES
(2, 'about/WtaeXX52FT3x3bv29SAWimWmbomyHfGQGEU5xYfz.jpg', '<p>ავტოიმპორტიორი კომპანია Mc Trans- ბაზარზე წარმოდგენილია 2020 წლიდან. კომპანია დილერებს და კერძო პირებს სთავაზობს ავტომობილების&nbsp; მოძიებას, შეძენას და ტრანსპორტირებას&nbsp;მსოფლიოს ნებისმიერი წერტილიდან. კომპანია წარმოდგენილია ფილიალების ფართო ქსელით, როგორც საქართველოში, ასევე მის საზღვრებს გარეთ. კომპანიაში დასაქმებულია&nbsp; 250 ადამაინი, რომელიც მუდმივად ორიენტირებულია&nbsp;როგორც არსებულ, ასევე&nbsp; ახალ მომხმარებელზე. კომპანია MC Trans გამოირჩევა საუკეთესო პირობებით ბაზარზე როგორიცაა, ავტომობილების ტრანსპორტირების ტარიფები და დაზღვევა.</p>', '<p>Automotive company Mc Trans has been present in the market since 2020. The company offers dealers and individuals to find, purchase and transport cars from anywhere in the world. The company is represented by a wide network of branches, both in Georgia and abroad. The company employs 250 people, which is constantly focused on both existing and new customers. MC Trans is distinguished by the best conditions in the market such as vehicle transportation tariffs and insurance.</p>', '<p>Автомобильная компания Mc Trans присутствует на рынке с 2020 года. Компания предлагает дилерам и частным лицам найти, приобрести и перевезти автомобили из любой точки мира. Компания представлена ​​широкой сетью филиалов как в Грузии, так и за рубежом. В компании работает 250 человек, которая постоянно ориентирована как на существующих, так и на новых клиентов. MC Trans отличается лучшими условиями на рынке, такими как тарифы на перевозку автотранспорта и страхование.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(111) NOT NULL,
  `contact_youtube` text DEFAULT NULL,
  `contact_instagram` text DEFAULT NULL,
  `contact_facebook` text DEFAULT NULL,
  `contact_address_geo` text DEFAULT NULL,
  `contact_address_eng` text DEFAULT NULL,
  `contact_address_rus` text DEFAULT NULL,
  `contact_phone_one` text DEFAULT NULL,
  `contact_phone_two` text DEFAULT NULL,
  `contact_email_one` text DEFAULT NULL,
  `contact_email_two` text DEFAULT NULL,
  `contact_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_youtube`, `contact_instagram`, `contact_facebook`, `contact_address_geo`, `contact_address_eng`, `contact_address_rus`, `contact_phone_one`, `contact_phone_two`, `contact_email_one`, `contact_email_two`, `contact_time`) VALUES
(1, 'https://www.youtube.com/watch?v=TkhkU326ADw&t=7s', 'https://www.instagram.com/mctrans_autoimport/', 'https://www.facebook.com/Mc-Trans-%E1%83%90%E1%83%95%E1%83%A2%E1%83%9D%E1%83%98%E1%83%9B%E1%83%9E%E1%83%9D%E1%83%A0%E1%83%A2%E1%83%98-%E1%83%90%E1%83%9B%E1%83%94%E1%83%A0%E1%83%98%E1%83%99%E1%83%98%E1%83%93%E1%83%90%E1%83%9C-103885862087334', 'თბილისი, შალვა ნუცუბიძის 129ა', 'Tbilisi , 129 Shalva Nutsubidze St', 'Тбилиси, ул. Шалва Нуцубидзе 129', '0322 12 17 71', '599276776', 'tamunagurgenashvili@yahoo.com', 'mctrans07@gmail.com', '11:00 - 18:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filialebi`
--

CREATE TABLE `filialebi` (
  `filialebi_id` int(111) NOT NULL,
  `filialebi_title_geo` text DEFAULT NULL,
  `filialebi_title_eng` text DEFAULT NULL,
  `filialebi_title_rus` text DEFAULT NULL,
  `filialebi_text_geo` text DEFAULT NULL,
  `filialebi_text_eng` text DEFAULT NULL,
  `filialebi_text_rus` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `filialebi`
--

INSERT INTO `filialebi` (`filialebi_id`, `filialebi_title_geo`, `filialebi_title_eng`, `filialebi_title_rus`, `filialebi_text_geo`, `filialebi_text_eng`, `filialebi_text_rus`, `image`) VALUES
(6, 'თბილისი, შალვა ნუცუბიძის 129 ა', 'Tbilisi , 129 Shalva Nutsubidze St', 'Тбилиси, ул. Шалва Нуцубидзе 129', NULL, NULL, NULL, 'filialebi/HOfPMoLrelcpJnLBt2qSQH06inetiabRodwj59PA.jpg'),
(7, 'გორი, ამილახვრის 32', 'Gori , 32  Amilakhvari St', 'Гори, ул. Амилахвари 32', NULL, NULL, NULL, NULL),
(8, 'კახეთი, საგარეჯო, დავით აღმაშენებლის 56', 'Kakheti,Sagarejo,   56 Davit Agmashenebeli St', 'Кахети, Сагареджо, ул. Давид Агмашенебели 56', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_page`
--

CREATE TABLE `main_page` (
  `id` int(111) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_page`
--

INSERT INTO `main_page` (`id`, `image`) VALUES
(1, 'mtavari/PRDX2dytMib87j7tgG2dujsNj7tYBtLpDKUeHoYt.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mxileba`
--

CREATE TABLE `mxileba` (
  `id` int(111) NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` int(111) NOT NULL DEFAULT 0 COMMENT '0 - არ უნახავს / 1 - ნახა',
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mxileba`
--

INSERT INTO `mxileba` (`id`, `ip`, `agent`, `message`, `seen`, `date`) VALUES
(2, '212.58.102.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 'სატესტო 2', 1, ''),
(3, '212.58.102.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 'mxilebuli 2222', 1, '2021-10-12 23:48:09'),
(5, '31.146.216.35', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/96.0.4664.116 Mobile/15E148 Safari/604.1', 'KMHD84LF2JU473762', 0, '2022-01-14 04:19:09'),
(6, '212.58.120.44', 'Mozilla/5.0 (Linux; Android 12; SM-A525F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.58 Mobile Safari/537.36', 'Kak mojna uznat gde moy mashina', 0, '2022-03-12 12:03:11'),
(7, '31.146.10.18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'მესიჯ ბოქსი მაგარი დაგიკოპირებიათ :)))', 0, '2022-03-17 00:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(111) NOT NULL,
  `news_title_geo` text DEFAULT NULL,
  `news_title_eng` text DEFAULT NULL,
  `news_title_rus` text DEFAULT NULL,
  `news_text_geo` text DEFAULT NULL,
  `news_text_eng` text DEFAULT NULL,
  `news_text_rus` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title_geo`, `news_title_eng`, `news_title_rus`, `news_text_geo`, `news_text_eng`, `news_text_rus`, `image`) VALUES
(3, '2021 Volkswagen Jetta Se', '2021 Volkswagen Jetta Se', '2021 Volkswagen Jetta Se', '<p>ძრავის მოცულობა: 1.4T</p>\r\n\r\n<p>ცხენის ძალა: 147HP</p>\r\n\r\n<p>საწვავის ტიპი: ბენზინი</p>\r\n\r\n<p>საშუალო წვა: 7.4 ლიტრი</p>', '<p>Engine capacity: 1.4T</p>\r\n\r\n<p>Horsepower: 147HP</p>\r\n\r\n<p>Fuel type: Petrol</p>\r\n\r\n<p>Average combustion: 7.4 liters</p>', '<p>Объем двигателя: 1.4T</p>\r\n\r\n<p>Мощность: 147 л.с.</p>\r\n\r\n<p>Тип топлива:Бензин</p>\r\n\r\n<p>Среднее сгорание: 7,4 литра</p>', 'blogs/7Hs23TRFoSBBWJbC3ZHIjLHibXa5tyRBaKwCk93P.jpg'),
(4, 'BMW ///M4', 'BMW ///M4', 'BMW ///M4', '<p>ძრავის მოცულობა: 3.0 twin turbo</p>\r\n\r\n<p>ცხენის ძალა: 425HP</p>', '<p>Engine capacity: 3.0 twin turbo</p>\r\n\r\n<p>Horsepower: 425HP</p>', '<p>Объем двигателя: 3.0 твин турбо</p>\r\n\r\n<p>Мощность: 425 л.с.</p>', 'blogs/TR7SCPsBlWjOOGlrDafIub9GRiE9SWlcVTADtE5D.jpg'),
(5, 'LEXUS RX 350', 'LEXUS RX 350', 'LEXUS RX 350', '<p>ძრავის მოცულობა: 3.5ლ</p>\r\n\r\n<p>ცხენის ძალა: 295 HP</p>\r\n\r\n<p>საწვავის ტიპი: ბენზინი</p>', '<p>Engine capacity: 3.5 l</p>\r\n\r\n<p>Horsepower: 295 HP</p>\r\n\r\n<p>Fuel type: Petrol</p>', '<p>Объем двигателя: 3.5 л</p>\r\n\r\n<p>Мощность: 295 л.с.</p>\r\n\r\n<p>Тип топлива:&nbsp;Бензин</p>', 'blogs/0T9TrQu4LPwzeJONXP2uSgnWYdjXQhhU6kqZBtKT.jpg'),
(6, 'BMW X5M', 'BMW X5M', 'BMW X5M', '<p>ცხენის ძალა 575hp, ძრავის მოცულობა- 4.4 Bi-Turbo</p>', '<p>Horsepower 575hp, Engine capacity- 4.4 Bi-Turbo</p>', '<p>575 л.с., объем двигателя - 4.4 Bi-Turbo</p>', 'blogs/XSb1HXNHsVnSY69TDDCdtHYS47RwN2C6iXgdip14.jpg'),
(7, '2021 Hyundai Elantra', '2021 Hyundai Elantra', '2021 Hyundai Elantra', NULL, NULL, NULL, 'blogs/b9xrOKObcoauJe6NPtVvhra6t3GYNj6FYyxBKUm6.jpg'),
(8, 'Fiat 500', 'Fiat 500', 'Fiat 500', NULL, NULL, NULL, 'blogs/FNIgKII85uiJgNtKLbJOfF4cu20d4EFYIiVpvxpC.jpg'),
(9, '2020 Kia Optima', '2020 Kia Optima', '2020 Kia Optima', NULL, NULL, NULL, 'blogs/wfxjPjovMgGWq1XFcICqLE2gz4xcs3Oiiod4twnL.jpg'),
(10, 'Mini Cooper', 'Mini Cooper', 'Mini Cooper', NULL, NULL, NULL, 'blogs/xafzmjBKHr0xA3lC46SePWwtU0DQfFBkjlK3GS6p.jpg'),
(11, 'LEXUS NX 300', 'LEXUS NX 300', 'LEXUS NX 300', NULL, NULL, NULL, 'blogs/yNhnFvtFhSZl9OEMRLsa2N7gtghFNUC0PiFQ2Kbn.jpg'),
(12, '2013 Porsche Panamera GTS', '2013 Porsche Panamera GTS', '2013 Porsche Panamera GTS', NULL, NULL, NULL, 'blogs/ZWruNUJp02TgcHQ8fh7UiDbJEpHut76GfEWsy7SJ.jpg'),
(13, 'Mazda CX3', 'Mazda CX3', 'Mazda CX3', NULL, NULL, NULL, 'blogs/MW4LLBfHZZw4z5jb4B5JkzZv9SbnZCExuqufhRZf.jpg'),
(14, 'Mercedes G63 AMG', 'Mercedes G63 AMG', 'Mercedes G63 AMG', NULL, NULL, NULL, 'blogs/qk02ZEcjm7dk82AWJaJnimdPd67UbHwKqBFmpHTj.jpg'),
(15, '2021 Toyota Camry Hybrid', '2021 Toyota Camry Hybrid', '2021 Toyota Camry Hybrid', NULL, NULL, NULL, 'blogs/yoyON8ckL9eIeeP0QTNXgZkSugXPK1y3TQCPUi7x.jpg'),
(16, 'TESLA Model X', 'TESLA Model X', 'TESLA Model X', NULL, NULL, NULL, 'blogs/UaHHVM0HPEeTZTtYdork3PbwTlEJue2wv49KuNur.jpg'),
(17, 'Hyundai Tucson', 'Hyundai Tucson', 'Hyundai Tucson', NULL, NULL, NULL, 'blogs/QkEiEwpKkybeVkEXBD1KZ4nSeulIIo1KEc0uKi5w.jpg'),
(18, '2021 Kia Sorento', '2021 Kia Sorento', '2021 Kia Sorento', NULL, NULL, NULL, 'blogs/nHMA2dnxDiXbk6LwcIaJ0uJ9K1BddhWSXpNAcPIu.jpg'),
(19, 'LEXUS LX 570', 'LEXUS LX 570', 'LEXUS LX 570', NULL, NULL, NULL, 'blogs/NbZPxIMFayMQhwv4pihapsUhXJZ3GwYqhDLCY56p.jpg'),
(20, 'Volkswagen', 'Volkswagen', 'Volkswagen', NULL, NULL, NULL, 'blogs/Gs4tYLkg35apVxCmHLwsIjNgKdrzfqAVthPAtGNf.jpg'),
(21, '2020 Audi A4', '2020 Audi A4', '2020 Audi A4', NULL, NULL, NULL, 'blogs/16gtnDZRrAWgXQExTjyCy24Jua0Fk4HIvL1lvL6p.jpg'),
(22, 'MC Trans Georgia', 'MC Trans Georgia', 'MC Trans Georgia', NULL, NULL, NULL, 'blogs/45u3xAvwuTMjGfb8chItTFitHqXQV6pSUDInm4AP.jpg'),
(23, 'Acura ILX', 'Acura ILX', 'Acura ILX', NULL, NULL, NULL, 'blogs/ljckimcYoki0DkLp5LwEJRxQRp3NWndDPcibFKjS.jpg'),
(24, 'Volkswagen Jetta GLI', 'Volkswagen Jetta GLI', 'Volkswagen Jetta GLI', NULL, NULL, NULL, 'blogs/I6LX3mf98xAuhlWESR6cRCvPHCZBdMb8XFNVEAx7.jpg'),
(25, 'ახალი სერვისი ავტომობილების შეფუთვა', 'New service for car packaging', 'Новая услуга по упаковке автомобилей', NULL, NULL, NULL, 'blogs/GQDy5knshXmDkyY077ATciB7ZKd1XxwJAPIVlpzu.jpg'),
(26, 'ახალი სერვისი ავტომობილების შეფუთვა', 'New service for car packaging', 'Новая услуга по упаковке автомобилей', NULL, NULL, NULL, 'blogs/CMetkYSUWti46JmJhyiPmi21AHHZ7H4FZOX0B6gg.jpg'),
(27, '2020 Honda Accord', '2020 Honda Accord', '2020 Honda Accord', NULL, NULL, NULL, 'blogs/qmzGG8u2PdGk2nKmT4Rdm3axwH3MnYcQeWib7afr.jpg'),
(28, 'Acura ILX', 'Acura ILX', 'Acura ILX', NULL, NULL, NULL, 'blogs/0Cp22utHHWluWzMlvpozHnZDdf0tBU5YfyWJzgtf.jpg'),
(29, '2020 Nissan Rogue', '2020 Nissan Rogue', '2020 Nissan Rogue', NULL, NULL, NULL, 'blogs/FsnB14HBQW3LRKTbvxctDCajl3B8Kzxmlnzi6Nej.jpg'),
(30, 'ისარგებლე ახალი სერვისით- ავტომობილების შეფუთვა', 'Take advantage of a new service - car packaging', 'Воспользуйтесь новой услугой - упаковка автомобилей', NULL, NULL, NULL, 'blogs/pphQn18EJxmbvOvyHoZvJZgGeMDndb0v93zg2yWC.jpg'),
(32, 'Mazda 6', 'Mazda 6', 'Mazda 6', NULL, NULL, NULL, 'blogs/yc8YroFJt7xTtRyWRl8Um9pFSOCsxLCuRDtuhkeQ.jpg'),
(34, 'Ford Fusion', 'Ford Fusion', 'Ford Fusion', NULL, NULL, NULL, 'blogs/83SmeJ2I1pQaBj2lnYrKggQpWangfjhmqymKM2wj.jpg'),
(35, 'Fiat 500', 'Fiat 500', 'Fiat 500', NULL, NULL, NULL, 'blogs/UyLrAlXCNSEnEN3Zzkx1UThDvpQy3uVNXDPKPFtW.jpg'),
(37, 'Honda Accord', 'Honda Accord', 'Honda Accord', NULL, NULL, NULL, 'blogs/yO7C6bwACiCemOKCgl819C2SNLifI0AJlWLCIxB2.jpg'),
(39, 'Lexus UX250', 'Lexus UX250', 'Lexus UX250', NULL, NULL, NULL, 'blogs/1LR2viM2cgpEfC4mkGYpxp7PkSaQkYMnlVCZYiSF.jpg'),
(46, 'Hyundai Tucson', 'Hyundai Tucson', 'Hyundai Tucson', NULL, NULL, NULL, 'blogs/q5rBLdUOgH7FEAVPj5XEid8pB3e6iz5dURrTB75h.png'),
(48, 'LEXUS UX 300e', 'LEXUS UX 300e', 'LEXUS UX 300e', NULL, NULL, NULL, 'blogs/oLPeHUDu6pj88Hky16NT8rm1ZnhAl7EUAZGwjyjI.png'),
(50, '2020 Toyota Corolla LE', '2020 Toyota Corolla LE', '2020 Toyota Corolla LE', NULL, NULL, NULL, 'blogs/plMZddvqivfHscLDRzy1KYtBOoMkwCOq8SHUuIrF.png'),
(56, 'BMW IM2', 'BMW IM2', 'BMW IM2', NULL, NULL, NULL, 'blogs/NvyM6vY7g9tUkNunFOVeIR8F4TOH3lyjJogsoqT0.png'),
(58, 'NISSAN JUKE', 'NISSAN JUKE', 'NISSAN JUKE', NULL, NULL, NULL, 'blogs/TaeFCXxQRFEqZNKe1q0Eje2rqkJbdlndzWaOA4NH.png'),
(66, 'HYUNDAI ELANTRA', 'HYUNDAI ELANTRA', 'HYUNDAI ELANTRA', NULL, NULL, NULL, 'blogs/e2hMZcth99k93CRBZLYUjQpOrKNcYuFmx97emUIy.png'),
(67, 'TOYOTA PRIUS', 'TOYOTA PRIUS', 'TOYOTA PRIUS', NULL, NULL, NULL, 'blogs/PThgAPNmlLqFRzNw9ERxBTebDtRil78qCgaIACr2.png'),
(68, 'TOYOTA  C-HR', 'TOYOTA  C-HR', 'TOYOTA  C-HR', NULL, NULL, NULL, 'blogs/Mx8dt5AAWfDpbVblKaJciFUlCWzSRlQs0REjRMQU.png'),
(69, 'MINI COOPER S', 'MINI COOPER S', 'MINI COOPER S', NULL, NULL, NULL, 'blogs/ibwkrhD90LFVBdrAAFDmXE4IxAlkYcep0Vz42Dht.png'),
(72, 'NISSAN ALTIMA 2015', 'NISSAN ALTIMA 2015', 'NISSAN ALTIMA 2015', NULL, NULL, NULL, 'blogs/JDXFFbZgyZ5UUx72NDaVz1tryWjnzIBwHWIeisVP.png'),
(73, 'TOYOTA', 'TOYOTA', 'TOYOTA', NULL, NULL, NULL, 'blogs/2UFkffNLM5nfLUexOBSXZJgD95ilpSgFlgYzA6kl.png'),
(74, 'TOYOTA  RAV 4', 'TOYOTA  RAV 4', 'TOYOTA  RAV 4', NULL, NULL, NULL, 'blogs/1Yf8FbQQoPotd60Px3Qmol3G7i7yrbGDr8WGPdVR.png'),
(75, 'LEXUS GX 460', 'LEXUS GX 460', 'LEXUS GX 460', NULL, NULL, NULL, 'blogs/KqBV2uekBrrtc9eSp1Q6nZq0LltVPIeVDpi66ioP.png'),
(76, '2020 NISSAN VERSA', '2020 NISSAN VERSA', '2020 NISSAN VERSA', NULL, NULL, NULL, 'blogs/UJJYn6plDAoNYtrDe2yGteJVtYpwh2jP5Rmaq3MF.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `photo_gallery_id` int(111) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`photo_gallery_id`, `image`) VALUES
(27, 'public/photogallery/8Lkai8CwBgjyDC7zLT5XhS7btunxGYHym44G3eeF.jpg'),
(28, 'public/photogallery/JtmVesFJ92ThvP7xVTHqti8klszNmtjDhwGUjlPp.jpg'),
(29, 'public/photogallery/jmdAUd7F9ND9l1rRMPgQGdyqq61zyFy9ZaALsVIz.jpg'),
(30, 'public/photogallery/SrBL5qdk4x6QZqcc9b8qXmR5Uz5WgJ4bceyD2lQD.jpg'),
(31, 'public/photogallery/7HfWSNs55qnvlZkzzS2j5aOFzUzfMwIv0az0i4Pe.jpg'),
(32, 'public/photogallery/iFgg307epcVKU72ajA7fEgEpVhkotPATv5xsPcS9.jpg'),
(33, 'public/photogallery/YFKyWaU3jkbf48mWFVvvpw1hHLtIelv05h3TJATS.jpg'),
(34, 'public/photogallery/SWaU8ehryaqZ09ScduS0uombpM0xvv4cHTyH8lZs.jpg'),
(35, 'public/photogallery/bKlrFGzxJPZ5RtkZaDNUHkILIZI59wv6Jt2sVUVq.jpg'),
(36, 'public/photogallery/rQDWCputVpnUG3Z8pL3bHiUmmDHuPZatLAYI2KhR.jpg'),
(37, 'public/photogallery/8k4AnChqPgZOuEaHcsCootEDAfkiPzj553KYTO6r.jpg'),
(38, 'public/photogallery/7TURkJ9rfYHF9FbfCyyYOoloVOTotXE8JQUE5T7z.jpg'),
(39, 'public/photogallery/J0hpn3dBgp90qAH6RQPLpe0lViEDfeL3YXyNyWAz.jpg'),
(40, 'public/photogallery/AQhhph66P2NY0SPtruQUloWcSBXJYwbv9U7QXds7.jpg'),
(41, 'public/photogallery/y60ccYq4Nxv4Dkbi88jdBVykQZS2hgeXXao6Udo4.png');

-- --------------------------------------------------------

--
-- Table structure for table `ratom_chven`
--

CREATE TABLE `ratom_chven` (
  `ratom_chven_id` int(111) NOT NULL,
  `ratom_chven_text_geo` text DEFAULT NULL,
  `ratom_chven_text_eng` text DEFAULT NULL,
  `ratom_chven_text_rus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratom_chven`
--

INSERT INTO `ratom_chven` (`ratom_chven_id`, `ratom_chven_text_geo`, `ratom_chven_text_eng`, `ratom_chven_text_rus`) VALUES
(0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE `service_list` (
  `service_list_id` int(111) NOT NULL,
  `service_list_title_geo` text DEFAULT NULL,
  `service_list_title_eng` text DEFAULT NULL,
  `service_list_title_rus` text DEFAULT NULL,
  `service_list_text_geo` text DEFAULT NULL,
  `service_list_text_eng` text DEFAULT NULL,
  `service_list_text_rus` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`service_list_id`, `service_list_title_geo`, `service_list_title_eng`, `service_list_title_rus`, `service_list_text_geo`, `service_list_text_eng`, `service_list_text_rus`, `image`) VALUES
(10, 'ავტომობილების მოძიება, შეძენა და ტრანსპორტირება  ამერიკის წამყვანი ავტო აუქციონებიდან', 'Find, buy and transport cars from leading USA auto auctions', 'Находите, покупайте и перевозите автомобили с ведущих автоаукционов США.', NULL, NULL, NULL, 'services/PtRdcWmHjTlEcOjVAjQvVm1lVwPskyKzjRXAhPG8.jpg'),
(11, 'კომპანია  გთავაზობთ ავტომობილების შეფუთვის სერვისს', 'The company offers car packaging service', 'Компания предлагает услугу упаковки автомобилей', NULL, NULL, NULL, 'services/93iRIUD50MjR46Dq4uDfAhFkw7anBNSQ8phmc7fv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'admin@gmail.com', NULL, '$2a$12$grjEVcTejQPzAuY467y5/u6Qw7x.LYUhqA99g4.OTVhMfCU9jiO8.', NULL, NULL, '2021-10-13 11:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `video_gallery_id` int(111) NOT NULL,
  `video_gallery_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`video_gallery_id`, `video_gallery_url`) VALUES
(15, 'KzYV4cS18M4'),
(16, 'skj7j1mc5Pg'),
(17, 'TkhkU326ADw'),
(18, 'yxMYnKN9w6Q'),
(19, 'nb0rl4g19rA'),
(20, '0dB1Fw7Zwr4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filialebi`
--
ALTER TABLE `filialebi`
  ADD PRIMARY KEY (`filialebi_id`);

--
-- Indexes for table `main_page`
--
ALTER TABLE `main_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mxileba`
--
ALTER TABLE `mxileba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`photo_gallery_id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`service_list_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`video_gallery_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filialebi`
--
ALTER TABLE `filialebi`
  MODIFY `filialebi_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `main_page`
--
ALTER TABLE `main_page`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mxileba`
--
ALTER TABLE `mxileba`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `photo_gallery_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
  MODIFY `service_list_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `video_gallery_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
