# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Installation

It's just like any other Laravel project. Basically here is how you use it for yourself. (it's not completed yet)

    Instructions for running the project:

    download the repo git clone https://github.com/SubhadeepChoudhuri/laravel_dynamic_tables.git as zip folder and place the
    extracted project folder in the htdocs folder of xampp.
    Open command prompt and cd to project folder.
    Run composer install
    Your necessary files like vendor folder,.env file will be generated.and set your database information with the help of
    product.sql given below.Just create .sql file and copy the below content into it.Then import this file into your database
    i,e phpMyadmin.)
    
    product.sql:
    
    -- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 05:21 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Input Tables'),
(2, 'Output Tables');

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
('2018_01_27_130254_create_products_table', 2),
('2018_01_27_130331_create_categories_table', 2),
('2018_01_27_130405_create_subcategories_table', 2),
('2018_01_28_015433_create_nodes1_table', 3),
('2018_01_28_020223_create_nodes2_table', 3),
('2018_01_28_020327_create_nodes3_table', 3),
('2018_01_28_020405_create_nodes4_table', 3),
('2018_01_28_025236_nodes1_table', 4),
('2018_01_28_025341_nodes2_table', 4),
('2018_01_28_025408_nodes3_table', 4),
('2018_01_28_025436_nodes4_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `node1`
--

CREATE TABLE `node1` (
  `node1_id` int(10) UNSIGNED NOT NULL,
  `node1_sourcenode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node1_destinationnode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node1_reorderperiod` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `node1`
--

INSERT INTO `node1` (`node1_id`, `node1_sourcenode`, `node1_destinationnode`, `node1_reorderperiod`, `created_at`, `updated_at`) VALUES
(259, 'ttudu', 'vvu', 6, NULL, NULL),
(261, 's4s4', 'haha', 45, NULL, NULL),
(264, 'tf6', 'yh8', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `node2`
--

CREATE TABLE `node2` (
  `node2_id` int(10) UNSIGNED NOT NULL,
  `node2_sourcenode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node2_destinationnode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node2_reorderperiod` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `node2`
--

INSERT INTO `node2` (`node2_id`, `node2_sourcenode`, `node2_destinationnode`, `node2_reorderperiod`, `created_at`, `updated_at`) VALUES
(2, 'la', 'hyf', 99, NULL, NULL),
(3, 'tutu', 'gch', 89, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `node3`
--

CREATE TABLE `node3` (
  `node3_id` int(10) UNSIGNED NOT NULL,
  `node3_sourcenode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node3_destinationnode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node3_reorderperiod` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `node3`
--

INSERT INTO `node3` (`node3_id`, `node3_sourcenode`, `node3_destinationnode`, `node3_reorderperiod`, `created_at`, `updated_at`) VALUES
(1, 'ss', 'xxxg', 89, NULL, NULL),
(2, 'sf', 'jhb', 86, NULL, NULL),
(3, 'bv', 'sd', 89, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `node4`
--

CREATE TABLE `node4` (
  `node4_id` int(10) UNSIGNED NOT NULL,
  `node4_sourcenode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node4_destinationnode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `node4_reorderperiod` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `node4`
--

INSERT INTO `node4` (`node4_id`, `node4_sourcenode`, `node4_destinationnode`, `node4_reorderperiod`, `created_at`, `updated_at`) VALUES
(1, 'subho', 'hkh', 90, NULL, NULL),
(2, 'ss', 'gh', 5, NULL, NULL),
(3, 'hj9', 'uy8', 66, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `cat_id`, `subcat_title`) VALUES
(1, 1, 'Network Details'),
(2, 1, 'Lead Time'),
(3, 1, 'Demand'),
(4, 2, 'Inventory Norms');

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
(1, 'Subhadeep Choudhuri', 'subhochoudhuri000@gmail.com', '$2y$10$F9DiI.A2a/V7m0o9PP1QAOTJIJDZontowKyS9mDIigxLQLD07Jv6S', 'YmBz2XM028VLEKJaLLjSbo6qOPHiBffCqBCw4XOx0AukNR3RZM1K5kxcQMIh', '2018-01-27 07:12:10', '2018-12-08 09:48:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `node1`
--
ALTER TABLE `node1`
  ADD PRIMARY KEY (`node1_id`);

--
-- Indexes for table `node2`
--
ALTER TABLE `node2`
  ADD PRIMARY KEY (`node2_id`);

--
-- Indexes for table `node3`
--
ALTER TABLE `node3`
  ADD PRIMARY KEY (`node3_id`);

--
-- Indexes for table `node4`
--
ALTER TABLE `node4`
  ADD PRIMARY KEY (`node4_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `node1`
--
ALTER TABLE `node1`
  MODIFY `node1_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- AUTO_INCREMENT for table `node2`
--
ALTER TABLE `node2`
  MODIFY `node2_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `node3`
--
ALTER TABLE `node3`
  MODIFY `node3_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `node4`
--
ALTER TABLE `node4`
  MODIFY `node4_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

    
    

