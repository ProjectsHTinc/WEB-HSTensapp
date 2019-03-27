-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 11:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lilamore`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_master`
--

CREATE TABLE `address_master` (
  `id` int(11) NOT NULL,
  `address_type` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_master`
--

INSERT INTO `address_master` (`id`, `address_type`, `status`) VALUES
(1, 'Home', 'Active'),
(2, 'Office', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_type_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `login_count` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `name`, `user_name`, `password`, `role_type_id`, `email`, `phone_number`, `last_login`, `login_count`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Super admin', 'superadmin', '21232f297a57a5a743894a0e4a801fc3', 1, 'superadmin@admin.com', '9789108810', 0, 0, 'Active', '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 1),
(2, 'admin123', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 'admin@admin.com', '9789108819', 0, 0, 'Active', '0000-00-00 00:00:00', 0, '2018-07-14 16:20:17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ads_master`
--

CREATE TABLE `ads_master` (
  `id` int(11) NOT NULL,
  `ad_title` varchar(100) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `ad_img` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads_master`
--

INSERT INTO `ads_master` (`id`, `ad_title`, `sub_cat_id`, `ad_img`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Without promotion, something terrible happens... nothing!', 6, 'Ad_1533099049.jpg', 'Active', '2018-08-01 10:20:48', 2, '2018-08-01 10:52:05', 2);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_masters`
--

CREATE TABLE `attribute_masters` (
  `id` int(11) NOT NULL,
  `attribute_type` int(11) NOT NULL,
  `attribute_name` varchar(20) NOT NULL,
  `attribute_value` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attribute_masters`
--

INSERT INTO `attribute_masters` (`id`, `attribute_type`, `attribute_name`, `attribute_value`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, '', 'Small', 'Active', '2018-07-25 14:57:56', 2, '0000-00-00 00:00:00', 0),
(2, 1, '', 'Big', 'Active', '2018-07-25 14:58:11', 2, '0000-00-00 00:00:00', 0),
(3, 2, 'Red', '#e20202', 'Active', '2018-07-25 15:03:54', 2, '0000-00-00 00:00:00', 0),
(4, 2, 'Green', '#13cd00', 'Active', '2018-07-25 15:04:19', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_type_master`
--

CREATE TABLE `attribute_type_master` (
  `id` int(11) NOT NULL,
  `attribute_type_name` varchar(10) NOT NULL,
  `status` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner_title` varchar(100) NOT NULL,
  `banner_desc` varchar(100) NOT NULL,
  `banner_image` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_title`, `banner_desc`, `banner_image`, `product_id`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'HOME DECOR SHOPPING  MADE EASY', 'Register now and get 10% off', 'B_1533033108.jpg', 1, 'Active', '2018-07-31 16:01:47', 2, '0000-00-00 00:00:00', 0),
(2, 'SHELVES WITH HOME DECOR  IN MODERN ROOM', 'We’ll give you a FREE delivery!', 'B_1533033160.jpg', 3, 'Active', '2018-07-31 16:02:27', 2, '2018-07-31 16:02:39', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category_masters`
--

CREATE TABLE `category_masters` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_image` varchar(50) NOT NULL,
  `category_thumbnail` varchar(50) NOT NULL,
  `category_desc` varchar(100) NOT NULL,
  `category_meta_title` varchar(50) NOT NULL,
  `category_meta_desc` varchar(100) NOT NULL,
  `category_keywords` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_masters`
--

INSERT INTO `category_masters` (`id`, `parent_id`, `category_name`, `category_image`, `category_thumbnail`, `category_desc`, `category_meta_title`, `category_meta_desc`, `category_keywords`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Home', '', '', 'Home', '', '', '', 'Active', '2018-07-17 15:49:45', 1, '0000-00-00 00:00:00', 0),
(2, 1, 'Mens', 'C_1531823015.jpg', 'T_1531823015.jpg', 'Category 1', '', '', '', 'Active', '2018-07-17 15:51:21', 1, '2018-07-17 15:53:35', 1),
(3, 2, 'Decorative Accessories', 'C_1531823064.jpg', 'T_1531823064.jpg', 'Decorative Accessories', '', '', '', 'Active', '2018-07-17 15:54:23', 1, '2018-07-18 11:10:48', 2),
(4, 1, 'Womens', 'C_1531823116.jpg', 'T_1531823116.jpg', '', '', '', '', 'Active', '2018-07-17 15:55:16', 1, '0000-00-00 00:00:00', 0),
(5, 2, 'Window Treatments', 'C_1531823141.jpg', 'T_1531823141.jpg', 'Window Treatments', '', '', '', 'Active', '2018-07-17 15:55:41', 1, '2018-07-18 11:07:25', 2),
(6, 4, 'Coffee & Accent Tables', 'C_1531823185.jpg', 'T_1531823185.jpg', 'Coffee & Accent Tables', '', '', '', 'Active', '2018-07-17 15:56:25', 1, '2018-07-18 11:11:49', 2),
(7, 1, 'Kids', '', 'T_1531890846.jpg', 'Kids', '', '', '', 'Active', '2018-07-18 10:44:06', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`id`, `country_name`, `status`) VALUES
(1, 'India', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `login_count` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone_number`, `email`, `password`, `login_count`, `last_login`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Senthil', '9942297930', 'senmaran@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 106, '2018-11-28 16:13:07', 'Active', '2018-07-17 11:03:37', 1, '2018-08-13 17:45:20', 1),
(2, 'Naren', '9566883430', 'varvn86@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2018-07-27 10:51:40', 'Active', '2018-07-27 10:50:29', 2, '0000-00-00 00:00:00', 0),
(3, 'aa', '1234567890', 'aa@aa.com', '827ccb0eea8a706c4c34a16891f84e7b', 6, '2018-07-28 17:20:05', 'Active', '2018-07-28 17:00:13', 3, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `birth_date` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `newsletter_status` int(11) NOT NULL,
  `profile_picture` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_id`, `first_name`, `last_name`, `birth_date`, `gender`, `newsletter_status`, `profile_picture`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 'Senthil', 'Maran', '11-02-1976', 'Male', 1, '1534134794110.jpg', '', '0000-00-00 00:00:00', 0, '2018-08-13 17:45:20', 1),
(2, 2, 'Naren', '', '', '', 0, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(3, 3, 'aa', '', '', '', 0, '', '', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cus_address`
--

CREATE TABLE `cus_address` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `house_no` varchar(30) NOT NULL,
  `street` varchar(100) NOT NULL,
  `landmark` varchar(30) NOT NULL,
  `full_name` varchar(25) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `alternative_mobile_number` varchar(15) NOT NULL,
  `address_type_id` int(11) NOT NULL,
  `address_mode` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_address`
--

INSERT INTO `cus_address` (`id`, `cus_id`, `country_id`, `state`, `city`, `pincode`, `house_no`, `street`, `landmark`, `full_name`, `mobile_number`, `email_address`, `alternative_mobile_number`, `address_type_id`, `address_mode`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(8, 1, 1, 'Tamilnadu', 'Madurai', 625014, '4/318', 'Yamuna Street', 'Devi hospital back side', 'Senthil', '9942297930', 'senmaran@gmail.com', '9090909090', 1, 1, 'Active', '2018-08-13 12:26:23', 1, '2018-08-13 12:27:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cus_notification_master`
--

CREATE TABLE `cus_notification_master` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `mob_key` varchar(150) NOT NULL,
  `mobile_type` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cus_wishlist`
--

CREATE TABLE `cus_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deal_for_period`
--

CREATE TABLE `deal_for_period` (
  `id` int(11) NOT NULL,
  `from_date` int(11) NOT NULL,
  `to_date` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `featured_product`
--

CREATE TABLE `featured_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offer_for_day`
--

CREATE TABLE `offer_for_day` (
  `id` int(11) NOT NULL,
  `offer_date` int(11) NOT NULL,
  `offer_desc` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `purchase_order_id` int(11) NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `sent_msg` varchar(150) NOT NULL,
  `old_status` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `purchase_order_id`, `order_id`, `sent_msg`, `old_status`, `status`, `updated_at`, `updated_by`) VALUES
(1, 0, 'Lil2018080365302', 'Your Order is confirmed.Thank you for shopping with us on  littleamore.in!We will inform you once the items in your order have been shipped', 'Success', 'Processing', '2018-08-04 12:46:30', 2),
(2, 0, 'Lil2018080365302', 'Your Order has been shipped.Thank you for shopping with us on littleamore.in!You can track your shipment using the below details.', 'Processing', 'Shipped', '2018-08-04 12:47:32', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order_msg_master`
--

CREATE TABLE `order_msg_master` (
  `id` int(11) NOT NULL,
  `status_name` varchar(15) NOT NULL,
  `msg` varchar(150) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_msg_master`
--

INSERT INTO `order_msg_master` (`id`, `status_name`, `msg`, `status`, `created_at`, `created_by`) VALUES
(1, 'Processing', 'Your Order is confirmed.Thank you for shopping with us on  littleamore.in!We will inform you once the items in your order have been shipped', 'Active', '0000-00-00 00:00:00', 0),
(2, 'Shipped', 'Your Order has been shipped.Thank you for shopping with us on littleamore.in!You can track your shipment using the below details.', 'Active', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `product_name` varchar(70) NOT NULL,
  `sku_code` varchar(50) NOT NULL,
  `product_cover_img` varchar(50) NOT NULL,
  `prod_size_chart` varchar(50) NOT NULL,
  `product_description` varchar(150) NOT NULL,
  `offer_status` int(11) NOT NULL,
  `specification_status` int(11) NOT NULL,
  `combined_status` int(11) NOT NULL,
  `prod_actual_price` float(10,2) NOT NULL,
  `prod_mrp_price` float(10,2) NOT NULL,
  `offer_percentage` int(11) NOT NULL,
  `delivery_fee_status` varchar(15) NOT NULL,
  `prod_return_policy` varchar(100) NOT NULL,
  `prod_cod` varchar(15) NOT NULL,
  `product_meta_title` varchar(50) NOT NULL,
  `product_meta_desc` varchar(100) NOT NULL,
  `product_meta_keywords` varchar(100) NOT NULL,
  `tax_percentage` varchar(50) NOT NULL,
  `min_stocks_status` int(11) NOT NULL,
  `total_stocks` int(11) NOT NULL,
  `stocks_left` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `sub_cat_id`, `product_name`, `sku_code`, `product_cover_img`, `prod_size_chart`, `product_description`, `offer_status`, `specification_status`, `combined_status`, `prod_actual_price`, `prod_mrp_price`, `offer_percentage`, `delivery_fee_status`, `prod_return_policy`, `prod_cod`, `product_meta_title`, `product_meta_desc`, `product_meta_keywords`, `tax_percentage`, `min_stocks_status`, `total_stocks`, `stocks_left`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 3, 'Muslin Swaddle', 'MSW1', 'CH_1533030900.jpg', 'CH_1533286666.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500', 0, 1, 0, 599.00, 500.00, 0, 'Not Available', 'No Return Policy', 'Not Available', 'Muslin Swaddle', 'Muslin Swaddle', 'Muslin Swaddle', '', 0, 100, 100, 'Active', '2018-07-25 14:55:43', 2, '2018-08-31 13:18:57', 2),
(2, 4, 0, 'Receiving Blanket', 'RB0001', 'PC_1532511098.jpg', '', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the melo', 1, 0, 1, 399.00, 450.00, 10, 'Not Available', 'No Return Policy', 'Not Available', 'Receiving Blanket', 'Receiving Blanket', 'Receiving Blanket', '', 0, 100, 18, 'Active', '2018-07-25 15:01:38', 2, '2018-08-01 13:28:16', 2),
(3, 2, 0, 'Muslin Towel (Pack of 2)', 'MT0001', 'PC_1532511759.jpg', '', 'This handy tool helps you create dummy text for all your layout needs.\r\nWe are gradually adding new functionality and we welcome your suggestions and ', 0, 0, 0, 500.00, 450.00, 0, 'Not Available', '10 Days return policy', 'Available', 'Muslin Towel', 'Muslin Towel', 'Muslin Towel', '', 0, 100, 100, 'Active', '2018-07-25 15:12:38', 2, '2018-08-14 17:15:23', 2),
(4, 2, 3, 'Muslin Wipes (Pack of 5)', 'MSW2', 'PC_1532512711.jpg', '', 'We are gradually adding new functionality and we welcome your suggestions and feedback.', 0, 0, 0, 199.00, 210.00, 0, 'Not Available', 'No Return Policy', 'Not Available', 'Muslin Wipes', 'Muslin Wipes', 'Muslin Wipes', '', 5, 199, 0, 'Active', '2018-07-09 15:28:31', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `id` int(11) NOT NULL,
  `order_id` varchar(25) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_combined_id` int(11) NOT NULL,
  `browser_sess_id` varchar(100) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `total_amount` float(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cart`
--

INSERT INTO `product_cart` (`id`, `order_id`, `product_id`, `product_combined_id`, `browser_sess_id`, `cus_id`, `quantity`, `price`, `total_amount`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Lil201808132B891', 3, 0, 'lil1534162142', 1, 1, 299.25, 299.25, 'Pending', '2018-08-13 18:14:55', 1, '0000-00-00 00:00:00', 0),
(2, 'Lil201808132B891', 1, 0, 'lil1534162142', 1, 1, 399.00, 399.00, 'Pending', '2018-08-13 18:15:48', 1, '0000-00-00 00:00:00', 0),
(3, 'Lil201808132B891', 2, 1, 'lil1534162142', 1, 2, 270.00, 540.00, 'Pending', '2018-08-13 18:16:19', 1, '0000-00-00 00:00:00', 0),
(16, 'Lil20180827B8AB2', 1, 0, 'lil1534247423', 1, 1, 499.00, 499.00, 'Pending', '2018-08-14 18:06:45', 1, '2018-08-27 12:36:57', 1),
(17, 'Lil20180827B8AB2', 2, 1, 'lil1534251369', 1, 3, 270.00, 810.00, 'Pending', '2018-08-16 15:06:26', 1, '2018-08-27 12:36:57', 1),
(20, '', 1, 0, 'lil1543401061', 0, 1, 599.00, 599.00, 'Pending', '2018-11-28 16:01:23', 0, '2018-11-28 16:01:48', 0),
(21, 'Lil2018112898483', 3, 0, 'lil1543401352', 1, 1, 500.00, 500.00, 'Pending', '2018-11-28 16:12:51', 0, '2018-11-28 16:13:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_combined`
--

CREATE TABLE `product_combined` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `mas_size_id` int(11) NOT NULL,
  `mas_color_id` int(11) NOT NULL,
  `prod_mrp_price` float(10,2) NOT NULL,
  `prod_actual_price` float(10,2) NOT NULL,
  `prod_default` int(11) NOT NULL,
  `stocks_left` int(11) NOT NULL,
  `total_stocks` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_combined`
--

INSERT INTO `product_combined` (`id`, `product_id`, `mas_size_id`, `mas_color_id`, `prod_mrp_price`, `prod_actual_price`, `prod_default`, `stocks_left`, `total_stocks`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 2, 1, 4, 249.00, 300.00, 0, 4, 4, 'Active', '2018-07-25 15:01:38', 2, '2018-07-25 15:07:12', 2),
(2, 2, 2, 4, 449.00, 500.00, 0, 11, 11, 'Active', '2018-07-25 15:01:38', 2, '2018-07-25 15:05:25', 2),
(3, 2, 1, 3, 210.00, 399.00, 1, 10, 5, 'Active', '2018-07-26 10:17:04', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `prod_combined_id` int(11) NOT NULL,
  `gallery_img` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `prod_combined_id`, `gallery_img`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 0, '15330311400.jpg', 'Active', '2018-07-31 15:29:00', 2, '0000-00-00 00:00:00', 0),
(2, 1, 0, '15330311730.jpg', 'Active', '2018-07-31 15:29:33', 2, '0000-00-00 00:00:00', 0),
(3, 1, 0, '15330311731.jpg', 'Active', '2018-07-31 15:29:33', 2, '0000-00-00 00:00:00', 0),
(4, 1, 0, '15330311732.jpg', 'Active', '2018-07-31 15:29:33', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_offer`
--

CREATE TABLE `product_offer` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `offer_name` varchar(100) NOT NULL,
  `offer_price` float(10,2) NOT NULL,
  `prod_actual_price` float(10,2) NOT NULL,
  `offer_percentage` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_offer`
--

INSERT INTO `product_offer` (`id`, `product_id`, `offer_name`, `offer_price`, `prod_actual_price`, `offer_percentage`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 3, 'Summer Discount Offer 25%', 299.25, 399.00, '25', 'Inactive', '2018-08-01 11:08:04', 2, '2018-08-14 17:14:17', 2),
(2, 2, '10% Seasonal Offer', 404.10, 449.00, '10', 'Active', '2018-08-01 11:21:50', 2, '2018-08-14 17:18:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_offer_history`
--

CREATE TABLE `product_offer_history` (
  `id` int(11) NOT NULL,
  `offer_prod_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `offer_percentage` varchar(3) NOT NULL,
  `offer_name` varchar(100) NOT NULL,
  `prod_actual_price` float(10,2) NOT NULL,
  `offer_price` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_offer_history`
--

INSERT INTO `product_offer_history` (`id`, `offer_prod_id`, `product_id`, `offer_percentage`, `offer_name`, `prod_actual_price`, `offer_price`, `status`, `created_at`, `created_by`) VALUES
(1, 1, 3, '25', 'Summer Offer', 0.00, 299.25, 'Active', '2018-08-01 11:08:04', 2),
(2, 2, 2, '10', 'Seasonal Offer', 0.00, 404.10, 'Active', '2018-08-01 11:21:50', 2),
(3, 1, 3, '25', 'Summer Discount Offer 25%', 399.00, 299.25, 'Inactive', '2018-08-14 17:14:17', 2),
(4, 2, 2, '10', '10% Seasonal Offer', 449.00, 404.10, 'Inactive', '2018-08-14 17:17:10', 2),
(5, 2, 2, '10', '10% Seasonal Offer', 449.00, 404.10, 'Active', '2018-08-14 17:18:30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `cus_id`, `product_id`, `rating`, `comment`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 4, 1, 'ZxZxZXZxZxZxZX', 'Active', '2018-08-06 17:04:32', 1, '2018-08-06 17:07:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_specification`
--

CREATE TABLE `product_specification` (
  `id` int(11) NOT NULL,
  `spec_id` int(11) NOT NULL,
  `spec_value` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_specification`
--

INSERT INTO `product_specification` (`id`, `spec_id`, `spec_value`, `product_id`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, '95% Viscose / 5% Elastane', 1, 'Active', '2018-08-03 14:26:18', 2, '0000-00-00 00:00:00', 0),
(2, 2, 'Softer / Shinier / More comfortable than Cotton', 1, 'Active', '2018-08-03 14:26:32', 2, '0000-00-00 00:00:00', 0),
(3, 3, 'Solid', 1, 'Active', '2018-08-03 14:26:47', 2, '0000-00-00 00:00:00', 0),
(4, 4, 'Casual', 1, 'Active', '2018-08-03 14:26:57', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 3, 1, 'Active', '2018-07-25 14:47:51', 2, '0000-00-00 00:00:00', 0),
(2, 3, 2, 'Active', '2018-07-25 14:47:51', 2, '0000-00-00 00:00:00', 0),
(3, 3, 3, 'Active', '2018-07-25 14:47:51', 2, '0000-00-00 00:00:00', 0),
(5, 1, 2, 'Active', '2018-07-25 14:55:43', 2, '0000-00-00 00:00:00', 0),
(6, 1, 3, 'Active', '2018-07-25 14:55:43', 2, '0000-00-00 00:00:00', 0),
(7, 2, 1, 'Active', '2018-07-25 15:01:38', 2, '0000-00-00 00:00:00', 0),
(8, 2, 2, 'Active', '2018-07-25 15:01:38', 2, '0000-00-00 00:00:00', 0),
(9, 2, 3, 'Active', '2018-07-25 15:01:38', 2, '0000-00-00 00:00:00', 0),
(10, 4, 1, 'Active', '2018-07-25 15:28:31', 2, '0000-00-00 00:00:00', 0),
(11, 4, 2, 'Active', '2018-07-25 15:28:31', 2, '0000-00-00 00:00:00', 0),
(12, 4, 3, 'Active', '2018-07-25 15:28:31', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_view_count`
--

CREATE TABLE `product_view_count` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `view_count` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_view_count`
--

INSERT INTO `product_view_count` (`id`, `product_id`, `view_count`, `updated_at`) VALUES
(1, 3, 131, '2018-07-25 14:47:51'),
(2, 1, 340, '2018-07-25 14:55:43'),
(3, 2, 256, '2018-07-25 15:01:38'),
(4, 4, 109, '2018-07-25 15:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `order_id` varchar(25) NOT NULL,
  `browser_sess_id` varchar(25) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL,
  `cus_address_id` int(11) NOT NULL,
  `total_amount` float(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `cus_notes` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`id`, `order_id`, `browser_sess_id`, `cus_id`, `purchase_date`, `cus_address_id`, `total_amount`, `status`, `cus_notes`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Lil201808132B891', 'lil1534162142', 1, '2018-08-13 18:16:32', 8, 1238.25, 'Pending', '', '2018-08-13 18:16:32', 1, '0000-00-00 00:00:00', 0),
(2, 'Lil20180827B8AB2', 'lil1535006995', 1, '2018-08-27 12:36:08', 8, 1309.00, 'Pending', 'Testing from Maran', '2018-08-27 12:36:08', 1, '0000-00-00 00:00:00', 0),
(3, 'Lil2018112898483', 'lil1543401352', 1, '2018-11-28 16:13:49', 8, 500.00, 'Pending', '', '2018-11-28 16:13:49', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_masters`
--

CREATE TABLE `role_masters` (
  `id` int(11) NOT NULL,
  `role_name` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_by` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `site_email` varchar(40) NOT NULL,
  `site_description` varchar(100) NOT NULL,
  `site_keywords` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_meta_tb`
--

CREATE TABLE `site_meta_tb` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(50) NOT NULL,
  `meta_desc` varchar(100) NOT NULL,
  `meta_keywords` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specification_masters`
--

CREATE TABLE `specification_masters` (
  `id` int(11) NOT NULL,
  `spec_name` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specification_masters`
--

INSERT INTO `specification_masters` (`id`, `spec_name`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Fabric', 'Active', '2018-08-03 14:25:27', 2, '0000-00-00 00:00:00', 0),
(2, 'Speciality', 'Active', '2018-08-03 14:25:33', 2, '0000-00-00 00:00:00', 0),
(3, 'Pattern', 'Active', '2018-08-03 14:25:40', 2, '0000-00-00 00:00:00', 0),
(4, 'Occasion', 'Active', '2018-08-03 14:25:47', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tag_masters`
--

CREATE TABLE `tag_masters` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_masters`
--

INSERT INTO `tag_masters` (`id`, `tag_name`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Cloths', 'Active', '2018-07-25 14:41:59', 2, '0000-00-00 00:00:00', 0),
(2, 'Muslin', 'Active', '2018-07-25 14:42:14', 2, '0000-00-00 00:00:00', 0),
(3, 'Swaddle', 'Active', '2018-07-25 14:42:26', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zipcode_masters`
--

CREATE TABLE `zipcode_masters` (
  `id` int(11) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `zip_desc` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipcode_masters`
--

INSERT INTO `zipcode_masters` (`id`, `zip_code`, `zip_desc`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 641201, 'Delivery in 10 days', 'Active', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(2, 625014, 'Delivery in 15 days', 'Active', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_master`
--
ALTER TABLE `address_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_master`
--
ALTER TABLE `ads_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_masters`
--
ALTER TABLE `attribute_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_type_master`
--
ALTER TABLE `attribute_type_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_masters`
--
ALTER TABLE `category_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus_address`
--
ALTER TABLE `cus_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus_notification_master`
--
ALTER TABLE `cus_notification_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus_wishlist`
--
ALTER TABLE `cus_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deal_for_period`
--
ALTER TABLE `deal_for_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_product`
--
ALTER TABLE `featured_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_for_day`
--
ALTER TABLE `offer_for_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_msg_master`
--
ALTER TABLE `order_msg_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_combined`
--
ALTER TABLE `product_combined`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_offer`
--
ALTER TABLE `product_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_offer_history`
--
ALTER TABLE `product_offer_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_review`
--
ALTER TABLE `product_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_specification`
--
ALTER TABLE `product_specification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_view_count`
--
ALTER TABLE `product_view_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_masters`
--
ALTER TABLE `role_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_meta_tb`
--
ALTER TABLE `site_meta_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification_masters`
--
ALTER TABLE `specification_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_masters`
--
ALTER TABLE `tag_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zipcode_masters`
--
ALTER TABLE `zipcode_masters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_master`
--
ALTER TABLE `address_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ads_master`
--
ALTER TABLE `ads_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attribute_masters`
--
ALTER TABLE `attribute_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `attribute_type_master`
--
ALTER TABLE `attribute_type_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_masters`
--
ALTER TABLE `category_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cus_address`
--
ALTER TABLE `cus_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cus_notification_master`
--
ALTER TABLE `cus_notification_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cus_wishlist`
--
ALTER TABLE `cus_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deal_for_period`
--
ALTER TABLE `deal_for_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `featured_product`
--
ALTER TABLE `featured_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offer_for_day`
--
ALTER TABLE `offer_for_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `order_msg_master`
--
ALTER TABLE `order_msg_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product_combined`
--
ALTER TABLE `product_combined`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_offer`
--
ALTER TABLE `product_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_offer_history`
--
ALTER TABLE `product_offer_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_review`
--
ALTER TABLE `product_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_specification`
--
ALTER TABLE `product_specification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_view_count`
--
ALTER TABLE `product_view_count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_masters`
--
ALTER TABLE `role_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_meta_tb`
--
ALTER TABLE `site_meta_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specification_masters`
--
ALTER TABLE `specification_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tag_masters`
--
ALTER TABLE `tag_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `zipcode_masters`
--
ALTER TABLE `zipcode_masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
