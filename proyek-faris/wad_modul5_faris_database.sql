-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 02:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul5_faris`
--

-- --------------------------------------------------------

--
-- Table structure for table `showrooms`
--

CREATE TABLE `showrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Lunas,Belum-Lunas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showrooms`
--

INSERT INTO `showrooms` (`id`, `user_id`, `name`, `owner`, `brand`, `purchase_date`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'freed', 'Dr. Eldridge Medhurst', 'honda', '1972-03-08', 'Expedita iure totam cum ducimus consequatur. Eum asperiores rerum omnis nam. Id et aliquid cum nam cum. Tenetur consectetur explicabo voluptatem.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(2, 0, 'freed', 'Milo Fahey', 'honda', '1987-04-04', 'Omnis omnis sunt eos modi et ipsum iure. Architecto ratione commodi eius corrupti eos. Sunt harum dolor quo dolores. Cupiditate molestias quo iure.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(3, 0, 'freed', 'Edna Cronin', 'honda', '2014-05-24', 'Est quas esse quibusdam quasi velit ea facilis. Et maiores reiciendis nisi beatae et. Itaque minus et harum quis iure quibusdam.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(4, 0, 'freed', 'Wilton Kulas II', 'honda', '1992-03-30', 'Voluptatem ut sint est qui. Molestias dolor et qui ratione sint. Tempore incidunt consequatur sunt consequatur nemo.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(5, 0, 'freed', 'Josiah Pagac', 'honda', '2007-04-01', 'Iure eligendi excepturi quaerat ea repellat sunt quisquam. Accusamus quam possimus aliquid ipsam assumenda in natus. Qui excepturi exercitationem similique voluptate eius et.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(6, 0, 'freed', 'Zackary Schaden', 'honda', '1976-11-28', 'Sequi et dolores accusamus repellat. Pariatur est at ut dolor voluptas. Rerum similique excepturi non vel sint corporis.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(7, 0, 'freed', 'Raymond Hudson', 'honda', '1974-09-19', 'Minus nihil fugiat vel. Pariatur ab velit reprehenderit aut. Pariatur dicta facilis et. Voluptate nam at perferendis veniam vel sapiente doloremque.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(8, 0, 'freed', 'Lance Greenholt', 'honda', '1976-06-30', 'Repellat amet unde dolores tempora. Et dolorem eaque velit aspernatur nostrum eveniet corporis voluptatem.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(9, 0, 'freed', 'Patrick Deckow', 'honda', '2015-11-30', 'Vel quasi at ea quibusdam debitis. Similique provident dolor voluptatem molestiae porro exercitationem.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(10, 0, 'freed', 'Lura Ullrich', 'honda', '1976-01-01', 'Minima corporis sit enim vero molestias. Dolorem qui expedita est assumenda. Voluptates in esse sed maxime ea fugiat voluptas.', 'images/IMG_3861.jpg', '', '2022-12-10 08:54:09', '2022-12-10 08:54:09'),
(11, 0, 'abcd', 'abcd', 'abcd', '2022-12-22', 'a', 'C:\\xampp\\tmp\\phpE87A.tmp', '', '2022-12-11 05:53:55', '2022-12-11 05:53:55'),
(12, 0, 'adv', 'dadadada', 'honda', '2022-12-07', 'abcd', 'C:\\xampp\\tmp\\php37CE.tmp', '', '2022-12-11 05:59:43', '2022-12-11 05:59:43'),
(13, 0, 'assalam', 'alfa', 'honda', '2022-12-14', 'hondaaaaaaaaaaaa', 'C:\\xampp\\tmp\\php2B3B.tmp', '', '2022-12-11 06:10:35', '2022-12-11 06:10:35'),
(14, 0, 'assiiapppp', 'riissss', 'honda', '2022-12-23', 'APA AJA', 'C:\\xampp\\tmp\\php25AA.tmp', '', '2022-12-11 06:11:39', '2022-12-11 06:11:39'),
(15, 0, 'bismillah', 'tolongg', 'honda', '2022-12-21', 'pleaseeee', 'C:\\xampp\\tmp\\php7FEB.tmp', '', '2022-12-11 06:13:08', '2022-12-11 06:13:08'),
(16, 0, 'brio', 'salman', 'apa aja', '2022-12-29', 'abcd', 'C:\\xampp\\tmp\\php191F.tmp', '', '2022-12-11 06:13:47', '2022-12-11 06:13:47'),
(17, 0, 'briyo', 'ulll', 'honda', '2022-12-15', 'abcddddd', 'C:\\xampp\\tmp\\php4656.tmp', '', '2022-12-11 06:28:10', '2022-12-11 06:28:10'),
(18, 0, 'briooo', 'salmananan', 'hondaaa', '2022-12-22', 'abncdcdcdcd', 'C:\\xampp\\tmp\\php8AC9.tmp', '', '2022-12-11 06:30:39', '2022-12-11 06:30:39'),
(19, 0, 'halooo', 'bismillah', 'honda', '2022-12-15', 'haloooo', 'C:\\xampp\\tmp\\php3E38.tmp', '', '2022-12-11 06:35:47', '2022-12-11 06:35:47'),
(20, 0, 'pajerp', 'faris salmanan', 'mitsubishi', '2022-12-17', 'pajero ini kencang', 'C:\\xampp\\tmp\\php6D64.tmp', '', '2022-12-11 06:40:21', '2022-12-11 06:40:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showrooms`
--
ALTER TABLE `showrooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showrooms`
--
ALTER TABLE `showrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
