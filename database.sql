-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2025 pada 13.26
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anime_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `judul_en` varchar(255) NOT NULL,
  `judul_jpn` varchar(255) DEFAULT NULL,
  `skor` decimal(3,1) DEFAULT NULL,
  `status` enum('Ongoing','Completed','Upcoming') NOT NULL,
  `total_episode` int(11) DEFAULT NULL,
  `tanggal_rilis` date DEFAULT NULL,
  `produser` varchar(255) DEFAULT NULL,
  `studio` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `sinopsis` text DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `judul_en`, `judul_jpn`, `skor`, `status`, `total_episode`, `tanggal_rilis`, `produser`, `studio`, `genre`, `sinopsis`, `cover`) VALUES
(1, 'Attack on Titan', '進撃の巨人', 8.6, 'Completed', 25, '2013-04-07', 'Production I.G, Dentsu, Mainichi Broadcasting System, Pony Canyon, Kodansha, Pony Canyon Enterprises', 'Wit Studio', 'Action, Drama, Fantasy, Military, Shounen, Super Power', 'Berabad-abad lalu, umat manusia hampir punah setelah dibantai oleh makhluk humanoid raksasa yang dikenal sebagai Titan. Rasa takut membuat manusia berlindung di balik tembok-tembok konsentris raksasa. Yang paling menakutkan dari Titan bukanlah ukurannya, melainkan kenyataan bahwa mereka memakan manusia bukan karena lapar—melainkan karena kesenangan semata.\r\n\r\nDemi bertahan hidup, sisa umat manusia hidup di balik tembok pertahanan itu selama seratus tahun tanpa satu pun serangan Titan. Namun kedamaian rapuh itu hancur seketika ketika Titan kolosal muncul dan menembus tembok terluar—mengawali kembali perang berdarah demi kelangsungan hidup manusia.\r\n\r\nSetelah menyaksikan sendiri kehilangan tragis akibat serangan tersebut, Eren Yeager bersumpah untuk memusnahkan semua Titan. Ia pun bergabung dengan Survey Corps, pasukan elit yang bertarung melawan para raksasa di luar tembok. Bersama Mikasa Ackerman, saudari angkatnya, dan sahabat masa kecilnya, Armin Arlert, Eren menapaki jalan penuh penderitaan untuk mencari cara mengakhiri teror para Titan sebelum tembok terakhir runtuh.\r\n', 'aot.jpg\r\n'),
(2, 'Spy X Family Season 3', 'SPY×FAMILY Season 3', 8.2, 'Ongoing', 13, '2025-10-04', 'TV Tokyo, Shogakukan-Shueisha Productions, TOHO animation, Sound Team Don Juan, Shueisha, Toho Music, Verygoo', 'Wit Studio, CloverWorks', 'Action, Childcare, Comedy, Shounen, Super Power', 'Meskipun sempat menghadapi beberapa rintangan, Operation Strix masih terus berjalan sesuai rencana untuk menggali informasi penting dari politisi misterius Donovan Desmond. Demi misi itu, mata-mata bernama Loid Forger tetap mempertahankan keluarga palsunya yang terdiri dari putrinya yang bisa membaca pikiran, Anya; istrinya yang ternyata pembunuh bayaran, Yor; serta anjing mereka yang bisa melihat masa depan, Bond.\r\n\r\nSatu-satunya yang mengetahui rahasia masing-masing anggota keluarga itu hanyalah Anya. Ia berusaha keras menjaga keharmonisan keluarga mereka sambil berupaya berteman dengan Damian Desmond, anak dari Donovan dan teman sekelasnya di Eden Academy. Namun, bukannya berhasil, usaha Anya malah berujung dengan tambahan satu Tonitrus Bolt lagi—mendekatkannya pada ancaman dikeluarkan dari sekolah dan menggagalkan seluruh misi ayahnya.\r\n\r\nMendengar kabar itu, Loid sampai pingsan karena syok. Dalam ketidaksadarannya, ia mengenang masa lalunya yang kelam dan perjalanan panjangnya hingga menjadi mata-mata. Menyadari betapa pentingnya Operation Strix—bukan hanya untuk dirinya tapi juga untuk dunia—Loid mendapatkan kembali semangatnya. Meski masing-masing punya tujuan tersembunyi, keluarga Forger terus berusaha menikmati kehidupan mereka yang kacau namun penuh kebahagiaan.', 'spyxfamilys3.jpg'),
(3, 'The Angel Next Door Spoils Me Rotten Season 2', 'お隣の天使様にいつの間にか駄目人間にされていた件 2期制', NULL, 'Upcoming', 0, '2026-04-30', 'Unknown', 'Unknown', 'Comedy, Romance', 'Musim kedua dari The Angel Next Door Spoils Me Rotten', 'Angelnextdoors2jpg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
