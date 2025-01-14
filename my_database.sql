-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2025 at 12:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('pending','completed') DEFAULT 'pending',
  `start_time` datetime DEFAULT NULL,
  `duration` int(11) DEFAULT 0 COMMENT 'Duration in seconds',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `title`, `description`, `status`, `start_time`, `duration`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'wyhrfhnfh', 'hwwrhgwfsth', 'pending', '2025-01-15 16:38:06', 15, '2025-01-14 16:38:53', '2025-01-14 16:38:53', NULL),
(4, 'rrywtfy', 'euwtyfe', 'pending', '2025-01-15 18:53:50', 5, '2025-01-14 18:54:09', '2025-01-14 18:54:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `foto`) VALUES
(1, 'mahas', 'baba@gmail.com', '$2y$10$u95NJPzNyYjK7Obd3kvDRehUONiwOheVx5z0ntCNPQghrPU21pDvO', '1732609497_959de9955faf8d571ea7.webp'),
(4, 'sfboo', 'afanuqgpo@gmail.com', '$2y$10$rgtVsJ8hVgbPoL4Jnt5nGuLWhDgMtankfp9wMZVwyWPpwZ2ul5kAi', '1732611613_ef4bfbfe6be533a42259.png'),
(5, 'nufld', 'afanuqgpo@gmail.com', '$2y$10$OE0UOUZZT5CN8fWEaXWTN.LK43NjiVT2k3yjniNy/N7eb3kc.YzuC', '1732613252_8e01558a6aee73b5cd7e.png'),
(6, 'alfa', 'baba@gmail.com', '$2y$10$vmmWbHKzPmFjl6Gdigx8FOKubBggbGqPcv1fJUiVXIRc90InyCxBe', '1733216927_5e4c404b1de079ae7896.png'),
(7, 'admin', 'admin@gmail.com', '$2y$10$8idfdfWenzDCh.w0LkRiyuU2U91Up6KpGcTUqpuq9gNOkdPjwYZHi', '1734423910_9015f5ce3fc3e88be37e.webp'),
(8, 'bobi', 'Bobi@gmail.com', 'Bobi123', ''),
(9, 'user', 'user@gmail.com', '$2y$10$y.huUN16pTm1ykMckOUuDuajWNptoJ9oJqSTvt9fS0axzp4xqWTXm', '1736836458_f87b61ac4a6bcd0b7fee.png'),
(11, 'Asu', 'asu@gmail.com', '$2y$10$ePkWlKFCNQ6YS8k1w0OrrOFiJ4ND/PFuFQAkupJIogyFg1.FKpBDC', '1736837091_341a2aa7040439fc5e5b.png'),
(12, 'Bobi', 'bobi@gmail.com', '$2y$10$0KW.OWdt3nkUlzBZv4Nfq.kUXUPOj0ne7m1VzVmBZjNMj4yyPCt9.', '1736852253_ced573ea5e4bdd780afa.webp'),
(13, 'bobi', 'bobi@gmail.com', '$2y$10$4GS1S02Bu6sLLXuhIpMpjOmwScZGT2dUzTai0cD6U/EIytR0jXslS', '1736852349_35248e6c9813353e8777.webp'),
(14, 'Asu', 'asu@gmail.com', '$2y$10$A3o9cEnxFfjF2rQvdF9dx.8ep/WMKPopNrEd30rrqy0AbrqvHDLfy', '1736852529_663cc492ba1b2d995c9c.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
