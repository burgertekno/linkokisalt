-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 20 Oca 2018, 17:02:36
-- Sunucu sürümü: 5.7.20-log
-- PHP Sürümü: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kisa`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `linkler`
--

CREATE TABLE `linkler` (
  `url` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `veri` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `linkler`
--

INSERT INTO `linkler` (`url`, `tarih`, `id`, `veri`, `sifre`) VALUES
('https://www.google.com.tr', '12:53:13 - 20.01.2018', 36, '651z202', 'var');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `linkler`
--
ALTER TABLE `linkler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `linkler`
--
ALTER TABLE `linkler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
