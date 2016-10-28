-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 04:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_oap`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `day_id` int(10) UNSIGNED NOT NULL,
  `slot_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `day_id`, `slot_id`, `name`, `age`, `gender`, `phone`, `date`, `created_at`, `updated_at`) VALUES
(3, 2, 5, 41, 'Md. Emtiaz Zahid2', 24, 'male', '01763777585', '0000-00-00', '2016-10-24 14:11:29', '2016-10-24 14:11:29'),
(4, 2, 5, 41, 'Md. Emtiaz Zahid2', 24, 'male', '01763777585', '0000-00-00', '2016-10-24 14:12:35', '2016-10-24 14:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SQUARE Hospital Ltd. Dhaka', NULL, NULL),
(2, 'SQUARE Hospital Ltd. Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name`) VALUES
(6, 'Friday'),
(2, 'Monday'),
(7, 'Saturday'),
(1, 'Sunday'),
(5, 'Thursday'),
(3, 'Tuesday'),
(4, 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `speciality_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `branch_id`, `speciality_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Dr. ABC', NULL, NULL),
(2, 1, 2, 'Dr. XYZ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `day_id` int(10) UNSIGNED NOT NULL,
  `entry_time` time NOT NULL,
  `leave_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor_schedules`
--

INSERT INTO `doctor_schedules` (`id`, `doctor_id`, `day_id`, `entry_time`, `leave_time`) VALUES
(1, 1, 3, '09:00:00', '13:00:00'),
(2, 1, 3, '17:00:00', '20:00:00'),
(3, 1, 5, '09:00:00', '13:00:00'),
(4, 1, 1, '17:00:00', '20:00:00'),
(5, 2, 4, '09:00:00', '13:00:00'),
(6, 2, 5, '17:00:00', '20:00:00'),
(7, 2, 7, '09:00:00', '13:00:00'),
(8, 2, 1, '17:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_22_183331_create_branches_table', 1),
('2016_10_22_185057_create_specialities_table', 1),
('2016_10_22_190140_create_doctors_table', 1),
('2016_10_23_082215_create_slots_table', 1),
('2016_10_23_094956_create_days_table', 1),
('2016_10_23_111331_create_doctor_schedules_table', 1),
('2016_10_23_152831_create_appointments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, '08:00:00', '08:15:00', NULL, NULL),
(2, '08:15:00', '08:30:00', NULL, NULL),
(3, '08:30:00', '08:45:00', NULL, NULL),
(4, '08:45:00', '09:00:00', NULL, NULL),
(5, '09:00:00', '09:15:00', NULL, NULL),
(6, '09:15:00', '09:30:00', NULL, NULL),
(7, '09:30:00', '09:45:00', NULL, NULL),
(8, '09:45:00', '10:00:00', NULL, NULL),
(9, '10:00:00', '10:15:00', NULL, NULL),
(10, '10:15:00', '10:30:00', NULL, NULL),
(11, '10:30:00', '10:45:00', NULL, NULL),
(12, '10:45:00', '11:00:00', NULL, NULL),
(13, '11:00:00', '11:15:00', NULL, NULL),
(14, '11:15:00', '11:30:00', NULL, NULL),
(15, '11:30:00', '11:45:00', NULL, NULL),
(16, '11:45:00', '12:00:00', NULL, NULL),
(17, '12:00:00', '12:15:00', NULL, NULL),
(18, '12:15:00', '12:30:00', NULL, NULL),
(19, '12:30:00', '12:45:00', NULL, NULL),
(20, '12:45:00', '13:00:00', NULL, NULL),
(21, '13:00:00', '13:15:00', NULL, NULL),
(22, '13:15:00', '13:30:00', NULL, NULL),
(23, '13:30:00', '13:45:00', NULL, NULL),
(24, '13:45:00', '14:00:00', NULL, NULL),
(25, '14:00:00', '14:15:00', NULL, NULL),
(26, '14:15:00', '14:30:00', NULL, NULL),
(27, '14:30:00', '14:45:00', NULL, NULL),
(28, '14:45:00', '15:00:00', NULL, NULL),
(29, '15:00:00', '15:15:00', NULL, NULL),
(30, '15:15:00', '15:30:00', NULL, NULL),
(31, '15:30:00', '15:45:00', NULL, NULL),
(32, '15:45:00', '16:00:00', NULL, NULL),
(33, '16:00:00', '16:15:00', NULL, NULL),
(34, '16:15:00', '16:30:00', NULL, NULL),
(35, '16:30:00', '16:45:00', NULL, NULL),
(36, '16:45:00', '17:00:00', NULL, NULL),
(37, '17:00:00', '17:15:00', NULL, NULL),
(38, '17:15:00', '17:30:00', NULL, NULL),
(39, '17:30:00', '17:45:00', NULL, NULL),
(40, '17:45:00', '18:00:00', NULL, NULL),
(41, '18:00:00', '18:15:00', NULL, NULL),
(42, '18:15:00', '18:30:00', NULL, NULL),
(43, '18:30:00', '18:45:00', NULL, NULL),
(44, '18:45:00', '19:00:00', NULL, NULL),
(45, '19:00:00', '19:15:00', NULL, NULL),
(46, '19:15:00', '19:30:00', NULL, NULL),
(47, '19:30:00', '19:45:00', NULL, NULL),
(48, '19:45:00', '20:00:00', NULL, NULL),
(49, '20:00:00', '20:15:00', NULL, NULL),
(50, '20:15:00', '20:30:00', NULL, NULL),
(51, '20:30:00', '20:45:00', NULL, NULL),
(52, '20:45:00', '21:00:00', NULL, NULL),
(53, '21:00:00', '21:15:00', NULL, NULL),
(54, '21:15:00', '21:30:00', NULL, NULL),
(55, '21:30:00', '21:45:00', NULL, NULL),
(56, '21:45:00', '22:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Anesthesiology', NULL, NULL, NULL),
(2, 'Cardiac Surgery', NULL, NULL, NULL),
(3, 'Cardiology', NULL, NULL, NULL),
(4, 'Dental', NULL, NULL, NULL),
(5, 'Emergency', NULL, NULL, NULL),
(6, 'Neurology', NULL, NULL, NULL),
(7, 'ICU', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 't@mail.com', '$2y$10$WLt4MXQEaTnedZ4y/Zd26ee2n/oxmVbplQX6k6O6ZglF0SmUqiibe', 'dGCDYXzmE0G15Z2VZCKeKoCOl2qTa1kaWc18bzgNmFQKcihDNaRMvwV7rHHl', NULL, '2016-10-25 08:24:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doctor_id_index` (`doctor_id`),
  ADD KEY `appointments_day_id_index` (`day_id`),
  ADD KEY `appointments_slot_id_index` (`slot_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branches_name_unique` (`name`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `days_name_unique` (`name`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_branch_id_index` (`branch_id`),
  ADD KEY `doctors_speciality_id_index` (`speciality_id`);

--
-- Indexes for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_schedules_doctor_id_index` (`doctor_id`),
  ADD KEY `doctor_schedules_day_id_index` (`day_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `specialities_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_slot_id_foreign` FOREIGN KEY (`slot_id`) REFERENCES `slots` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `doctors_speciality_id_foreign` FOREIGN KEY (`speciality_id`) REFERENCES `specialities` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD CONSTRAINT `doctor_schedules_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_schedules_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
