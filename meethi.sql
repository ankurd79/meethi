-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 01:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meethi`
--

-- --------------------------------------------------------

--
-- Table structure for table `met_admin`
--

CREATE TABLE `met_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `met_admin`
--

INSERT INTO `met_admin` (`id`, `email`, `password`, `is_active`) VALUES
(1, 'admin@meethi.com', '$2y$10$eAgIR1ZPGWELWRcD/DiuNu.Lduzy0/7CEs3sfsiOpWZTZa3GI7N3S', 1);

-- --------------------------------------------------------

--
-- Table structure for table `met_cart_items`
--

CREATE TABLE `met_cart_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `logged_in_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `met_custom_box`
--

CREATE TABLE `met_custom_box` (
  `id` int(11) NOT NULL,
  `box_title` varchar(255) NOT NULL,
  `box_dimension_width` char(4) DEFAULT NULL,
  `width_unit` char(6) NOT NULL,
  `box_dimension_height` char(5) NOT NULL,
  `height_unit` char(6) NOT NULL,
  `box_description` text NOT NULL,
  `box_weight` char(6) NOT NULL,
  `weight_unit` char(6) NOT NULL,
  `listing_image` varchar(70) NOT NULL,
  `detail_image` varchar(70) NOT NULL,
  `box_cost` double NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `is_signature` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `met_custom_box`
--

INSERT INTO `met_custom_box` (`id`, `box_title`, `box_dimension_width`, `width_unit`, `box_dimension_height`, `height_unit`, `box_description`, `box_weight`, `weight_unit`, `listing_image`, `detail_image`, `box_cost`, `meta_title`, `meta_description`, `meta_keywords`, `is_signature`, `is_active`, `in_stock`, `added_on`, `added_by`, `updated_on`, `updated_by`) VALUES
(1, 'Choco Box', '210', 'Inches', '300', 'Inches', '&lt;p&gt;good assorted chocos&lt;/p&gt;', '550', 'Grams', '1616323937_box-img2.jpg', '1617531819_signature-box.jpg', 970, 'meta title', 'meta desc', 'meta keywords', 0, 1, 1, '2021-03-11 01:02:45', 1, '2021-04-04 15:53:39', 1),
(2, 'Signature Choice Box ', '300', 'Inches', '550', 'Inches', '&lt;p&gt;Incredibly delicious, htese ladoos are an ode to the goodness of best quality desi ghee, honey and dry fruits. Tantalising the taste buds with intoxicating flavours, these guilt-free traets are perfect for all occasions.&lt;/p&gt;&lt;p&gt;Incredibly delicious, htese ladoos are an ode to the goodness of best quality desi ghee, honey and dry fruits. Tantalising the taste buds with intoxicating flavours, these guilt-free traets are perfect for all occasions.&lt;br&gt;&lt;/p&gt;', '2400', 'Grams', '1616322315_signature-box.jpg', '1617531728_signature-box.jpg', 1500, 'meta titlee', 'description of meta', 'keywords in meta', 1, 1, 1, '2021-03-11 16:29:01', 1, '2021-04-04 15:52:08', 1),
(3, 'box variant two', '300', 'Inches', '350', 'Inches', '&lt;p&gt;Details will be here&lt;/p&gt;', '670', 'Grams', '1616323960_box-img3.jpg', '1617531796_signature-box.jpg', 300, '', '', '', 0, 1, 1, '2021-03-11 16:32:23', 1, '2021-04-04 15:53:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `met_discount_coupons`
--

CREATE TABLE `met_discount_coupons` (
  `id` int(11) NOT NULL,
  `coupon_name` varchar(20) NOT NULL,
  `coupon_value` char(2) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `met_hampers`
--

CREATE TABLE `met_hampers` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `hamper_title` varchar(300) NOT NULL,
  `hamper_cost` char(4) NOT NULL,
  `hamper_description` text DEFAULT NULL,
  `listing_image` varchar(60) NOT NULL,
  `detail_image` varchar(60) NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `met_hampers`
--

INSERT INTO `met_hampers` (`id`, `category_id`, `hamper_title`, `hamper_cost`, `hamper_description`, `listing_image`, `detail_image`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `in_stock`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(2, 1, 'Specially for you', '1200', '&lt;p&gt;&lt;b&gt;In this hamper we have&lt;/b&gt;:&lt;/p&gt;&lt;p&gt;250 gms of Besan Burfi&lt;/p&gt;&lt;p&gt;250 gms of Honey Ladoos&lt;/p&gt;&lt;p&gt;400 gms of Kacha Golla Sandesh&lt;/p&gt;&lt;p&gt;1 Packet of Gulal&lt;/p&gt;&lt;p&gt;1 Wooden tray&lt;/p&gt;', '1616749207_hampers-img.jpg', '1616749207_hampers-img.jpg', '', '', '', 1, 1, 1, '2021-03-26 14:30:07', 1, '2021-04-04 15:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `met_hamper_category`
--

CREATE TABLE `met_hamper_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(300) NOT NULL,
  `image` varchar(60) NOT NULL,
  `category_description` text NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `met_hamper_category`
--

INSERT INTO `met_hamper_category` (`id`, `category_name`, `image`, `category_description`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 'Christmas special', '1615739141_indiapl.png', '&lt;p&gt;sdsfdfd&lt;/p&gt;', 'aaa', 'ddd', 'eee', 1, 1, '2021-03-14 21:55:41', NULL, NULL),
(2, 'pppp', '1616735923_16jonny.jpg', '&lt;p&gt;treee and pudding&lt;/p&gt;', 'meta title', 'meta desc', 'meta keywords', 1, 1, '2021-03-26 10:48:43', 1, '2021-03-26 11:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `met_products`
--

CREATE TABLE `met_products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_cost` double NOT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `listing_image` varchar(70) NOT NULL,
  `detail_image` varchar(70) NOT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `met_products`
--

INSERT INTO `met_products` (`id`, `category_id`, `product_name`, `product_description`, `product_cost`, `in_stock`, `listing_image`, `detail_image`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 1, 'Milk Cake', '&lt;p&gt;Our Signature milk cake is not only pretty and decadent but also pure and natural.&lt;/p&gt;', 1100, 1, '1617524365_milk-cake.jpg', '1617524086_milk-cake.jpg', 'Milk Cake', 'Milk Cake', 'Milk Cake', 1, 1, '2021-03-07 00:00:17', 1, '2021-04-04 13:51:51'),
(4, 1, 'Kaju Katli', '&lt;p&gt;The quintessential Indian sweet of festival and celebratory occasions, Kaju Katli is a delicious sweet of a delectable blend of cashew nuts and milk topped by silver leaf.&lt;/p&gt;', 1350, 1, '1617524656_kaju-katli.jpg', '1617524656_kaju-katli-det.jpg', 'Kaju Katli', '  Kaju Katli', 'Kaju Katli', 1, 1, '2021-03-07 00:12:07', 1, '2021-04-04 13:54:16'),
(5, 1, 'Honey Dry Fruit Ladoo', '&lt;p&gt;Incredibly delicious, these ladoos are an ode to the goodness of best quality desi ghee, honey and dry fruits. Tantalising the taste buds with intoxicating flavours, these guilt-free treats are perfect for all occasions.&lt;br&gt;&lt;/p&gt;', 1900, 1, '1617524829_honey-dry-fruit-laddo.jpg', '1617524829_honey_ladoo.jpg', 'Honey Dry fruits ladoo', 'Honey Dry fruits ladoo', 'Honey Dry fruits ladoo', 1, 1, '2021-04-04 13:57:09', NULL, NULL),
(6, 1, 'Khajur Barfi', '&lt;p&gt;Khajur Barfi is a completely sugarless barfi with dry fruits which are soft in texture and chewy in nature.&lt;br&gt;&lt;/p&gt;', 1800, 1, '1617524970_khajur-burfi-p.jpg', '1617524970_khajur-barfi.jpg', 'Khajur Barfi', 'Khajur Barfi', 'Khajur Barfi', 1, 1, '2021-04-04 13:59:30', NULL, NULL),
(7, 1, 'Mango Coconut Barfi', '&lt;p&gt;A creamy, rich, flavoured and moist coconut fudge, perfect tropical flavour combination that everyone loves.&lt;br&gt;&lt;/p&gt;', 1200, 1, '1617525124_mango-coconut-burfi.jpg', '1617525124_mango-coconut-barfi-det.jpg', 'Mango Coconut Barfi', 'Mango Coconut Barfi', 'Mango Coconut Barfi', 1, 1, '2021-04-04 14:02:04', NULL, NULL),
(8, 1, 'Ajneer Kalakand', '&lt;p&gt;A delectable Indian milk fudge is a popular festive sweet prepared with milk, sugar and figs where figs impart a grainy texture on it and enhance the flavour too.&lt;br&gt;&lt;/p&gt;', 1650, 1, '1617525277_ajneer-kalakand11.jpg', '1617525277_ajneer-kalakand.jpg', 'Ajneer Kalakand', 'Ajneer Kalakand', 'Ajneer Kalakand', 1, 1, '2021-04-04 14:04:37', NULL, NULL),
(9, 1, 'Chocolate Nuts Bite', '&lt;p&gt;These Chocolate Nuts Bite are to die for. They are sweet, nutty and a perfect ending to any meal.&lt;br&gt;&lt;/p&gt;', 1200, 1, '1617525386_chocolate-nuts.jpg', '1617525386_chocolate-nuts-b.jpg', 'Chocolate Nuts Bite', 'Chocolate Nuts Bite', 'Chocolate Nuts Bite', 1, 1, '2021-04-04 14:06:26', NULL, NULL),
(10, 1, 'Besan Barfi', '&lt;p&gt;Besan Barfi is a popular melt in mouth Indian sweet made with gram flour, ghee and flavoured with cardamom.&lt;br&gt;&lt;/p&gt;', 1100, 1, '1617525519_besan-burfi1.jpg', '1617525519_besan-barfi.jpg', 'Besan Barfi', 'Besan Barfi', 'Besan Barfi', 1, 1, '2021-04-04 14:08:39', NULL, NULL),
(11, 1, 'Kaccha Gola Sandesh', '&lt;p&gt;Kaccha Gola is a very famous sweet from West Bengal which is made of fresh paneer or chenna and flavoured with cardamom and rose water.&lt;br&gt;&lt;/p&gt;', 1100, 1, '1617525662_kacha-gola.jpg', '1617525662_kaccha-gola-sandesh.jpg', 'Kaccha Gola', 'Kaccha Gola', 'Kaccha Gola', 1, 1, '2021-04-04 14:11:02', NULL, NULL),
(12, 1, 'Badam Sev Barfi', '&lt;p&gt;A Sindhi favourite, Singhar ji Mithai as it is tradionally known, is popular with just about everyone else as well.&lt;br&gt;&lt;/p&gt;', 1100, 1, '1617525899_badam-sev-burfi1.jpg', '1617525899_badam-sev-barfi.jpg', 'Badam Sev Barfi', 'Badam Sev Barfi', 'Badam Sev Barfi', 1, 1, '2021-04-04 14:14:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `met_product_category`
--

CREATE TABLE `met_product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(70) NOT NULL,
  `category_description` text DEFAULT NULL,
  `image` varchar(70) DEFAULT NULL,
  `meta_title` text NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `met_product_category`
--

INSERT INTO `met_product_category` (`id`, `category_name`, `category_description`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `is_active`, `added_by`, `added_on`, `updated_by`, `updated_on`) VALUES
(1, 'Sweets', '&lt;p&gt;sds sdsdsdsd sdsdsfdf dfdsf&lt;/p&gt;', '1615029847_16virat-kohli.jpg', 'meta title', 'meta info', 'meta keywords', 1, 1, '2021-03-06 16:54:07', 1, '2021-04-04 13:42:27'),
(2, 'Bhaji', '&lt;p&gt;dfd&lt;/p&gt;', '1615031053_16jonny.jpg', '', '', '', 1, 1, '2021-03-06 17:14:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `met_product_images`
--

CREATE TABLE `met_product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `added_on` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `met_transactions`
--

CREATE TABLE `met_transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `total_cost` double NOT NULL,
  `instructions` text DEFAULT NULL,
  `trans_date` datetime NOT NULL,
  `trans_status` tinyint(1) NOT NULL COMMENT '1=success,2=cancelled,0=incomplete',
  `cancel_date` datetime DEFAULT NULL,
  `payment_gateway_used` varchar(30) DEFAULT NULL,
  `pg_txid` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `met_transactions_products`
--

CREATE TABLE `met_transactions_products` (
  `id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_type` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL COMMENT 'total quantity ordrered',
  `product_cost` double NOT NULL,
  `discount_applied` double NOT NULL DEFAULT 0,
  `final_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `met_users`
--

CREATE TABLE `met_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` char(10) DEFAULT NULL,
  `registered_on` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `met_users`
--

INSERT INTO `met_users` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `registered_on`, `updated_on`) VALUES
(1, 'Ankur', 'Datta', 'datta.ankur79@gmail.com', '$2y$10$30yu82305aGWo1U6LsNO5eqJ0KsjINyBTqyKrUZkW29awWC7NVbPy', '9911885423', '2021-03-23 15:40:22', '2021-04-06 18:51:41'),
(2, 'sugata', 'de', 'paul@nobonita.com', '$2y$10$vJg6xa17lTRJ8F9L492h3O7FxJlxoTN6ZRfJlfOLLfI6J9Z/lPP7K', NULL, '2021-03-23 15:52:08', NULL),
(11, 'abcrestr', 'def', 'p@gmail.com', '$2y$10$I0KgDTCAloZXafZyDQHPaO9pPdYEdmWtEJdZiLwhDg7Esz4gs6N8a', NULL, '2021-04-05 17:23:57', NULL),
(9, 'abcrestr', 'def', 'abcdeffffg@gmail.com', '$2y$10$ST23LwrgIX85hInk5ikahuj5EERsDFE3OmkyZ.i1sSd1lTfFDL.uW', NULL, '2021-04-05 16:57:17', NULL),
(10, 'abcrestr', 'def', 'abcdeffffgt@gmail.com', '$2y$10$A5WBc9GIWwZg1fgCPn5HoO6Q6vr1wiwnPFG5aPXUYhAP.jaci94/2', NULL, '2021-04-05 17:21:29', NULL),
(12, 'abcrestr', 'def', 'pb@gmail.com', '$2y$10$r0WTYxFJlHhVapdA0D3vlODLklWxxiz04mI6nur6tihC.mY33/JDu', NULL, '2021-04-05 17:27:19', NULL),
(13, 'abcrestr', 'def', 'gpb@gmail.com', '$2y$10$/zleQExnlMVDKcDOi9KuQub9SzPjsOrSTfl3nxxyvJwY0jpyVkNB.', NULL, '2021-04-05 17:28:47', NULL),
(14, 'abcrestr', 'def', 'hgpb@gmail.com', '$2y$10$N3WSnNc3L0Znmjw70UnW7e3fBlgRH2H/PqdLfnaH9YHBK5V.hWwOC', NULL, '2021-04-05 17:31:20', NULL),
(15, 'abcrestr', 'def', 'lhgpb@gmail.com', '$2y$10$xOsonDh2d.ICnSnskdRjaOibmzkeCRpxPp.FZxVPIXim8MgVd/9Rq', NULL, '2021-04-05 17:32:16', NULL),
(16, 'abcrestr', 'def', 'klhgpb@gmail.com', '$2y$10$.6I8zZB7sh0hC45TryuNbe/BMwNous2m4Z2p58X9tleXrNYQMeUcS', NULL, '2021-04-05 17:34:27', NULL),
(17, 'abcrestr', 'def', 'iklhgpb@gmail.com', '$2y$10$PihuLhrYqwtfqkkIjz3kZ.HY90k18KyHUe7afqQk9DompZQLLJB2y', NULL, '2021-04-05 17:38:48', NULL),
(18, 'abcrestr', 'def', 'mili@gmail.com', '$2y$10$J2tt6rGxCBTemh1TawKLr.JkX3lGhvccaBFNUFR5Y9k4hXqboHzdW', NULL, '2021-04-05 17:56:13', NULL),
(19, 'abcrestr', 'def', 'kmili@gmail.com', '$2y$10$mdZ7XbX2fTnd7yax2TyVR..JERYtYPTxPq807EfQiYkVzut1RgjBa', NULL, '2021-04-05 17:57:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `met_user_delivery_address`
--

CREATE TABLE `met_user_delivery_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_line_1` text NOT NULL,
  `address_line_2` text DEFAULT NULL,
  `city` varchar(70) NOT NULL,
  `state` int(11) NOT NULL,
  `pincode` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `met_admin`
--
ALTER TABLE `met_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `met_cart_items`
--
ALTER TABLE `met_cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`,`logged_in_id`);

--
-- Indexes for table `met_custom_box`
--
ALTER TABLE `met_custom_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `met_discount_coupons`
--
ALTER TABLE `met_discount_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `met_hampers`
--
ALTER TABLE `met_hampers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hamper_category_id` (`category_id`);

--
-- Indexes for table `met_hamper_category`
--
ALTER TABLE `met_hamper_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `met_products`
--
ALTER TABLE `met_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `met_product_category`
--
ALTER TABLE `met_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `met_product_images`
--
ALTER TABLE `met_product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `met_transactions`
--
ALTER TABLE `met_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans_id` (`trans_id`,`trans_date`,`trans_status`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `met_transactions_products`
--
ALTER TABLE `met_transactions_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trans_id` (`trans_id`,`product_id`);

--
-- Indexes for table `met_users`
--
ALTER TABLE `met_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `met_user_delivery_address`
--
ALTER TABLE `met_user_delivery_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `met_admin`
--
ALTER TABLE `met_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `met_cart_items`
--
ALTER TABLE `met_cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `met_custom_box`
--
ALTER TABLE `met_custom_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `met_hampers`
--
ALTER TABLE `met_hampers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `met_hamper_category`
--
ALTER TABLE `met_hamper_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `met_products`
--
ALTER TABLE `met_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `met_product_category`
--
ALTER TABLE `met_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `met_product_images`
--
ALTER TABLE `met_product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `met_transactions`
--
ALTER TABLE `met_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `met_transactions_products`
--
ALTER TABLE `met_transactions_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `met_users`
--
ALTER TABLE `met_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `met_user_delivery_address`
--
ALTER TABLE `met_user_delivery_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
