-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 05:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2017-01-24 16:21:18', '21-06-2018 08:27:55 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(7, 'Photography', 'A good snapshot keeps a moment that gone form running away.', '2022-02-04 04:21:04', NULL),
(8, 'Catering', 'Making you events more beautiful.', '2022-02-04 04:21:43', NULL),
(9, 'Videography', 'Add a little bit of spice to your life with a bit of help form these creative, short films.', '2022-02-04 04:23:35', NULL),
(10, 'Bands ', 'Rock n Roll is poison put to sound.', '2022-02-04 04:24:05', NULL),
(11, 'Decoration', 'Some people look for a beautiful place others make a place beautiful.', '2022-02-04 04:24:59', NULL),
(12, 'Magician', 'What the eyes see and the ears hear, the mind believes.', '2022-02-04 04:25:39', NULL),
(13, 'Cake', 'Let us celebrate our love with cake.', '2022-02-04 04:26:08', NULL),
(14, 'Florist', 'The function of design is letting design function', '2022-02-04 04:26:39', NULL),
(15, 'Drink', 'Keep clam and drink on.', '2022-02-04 04:27:07', NULL),
(16, 'DJ', 'The best thing about being a DJ is making people happy.', '2022-02-04 04:27:40', NULL),
(17, 'Makeup', 'Don t let today be a waste of makeup.', '2022-02-04 04:37:23', NULL),
(18, 'Chreographers', 'Dancers don t need wings to fly.', '2022-02-04 04:38:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(1, 1, '3', 1, '2017-03-07 19:32:57', 'COD', NULL),
(3, 1, '4', 1, '2017-03-10 19:43:04', 'Debit / Credit card', 'Delivered'),
(4, 1, '17', 1, '2017-03-08 16:14:17', 'COD', 'in Process'),
(5, 1, '3', 1, '2017-03-08 19:21:38', 'COD', NULL),
(6, 1, '4', 1, '2017-03-08 19:21:38', 'COD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(1, 3, 'in Process', 'Order has been Shipped.', '2017-03-10 19:36:45'),
(2, 1, 'Delivered', 'Order Has been delivered', '2017-03-10 19:37:31'),
(3, 3, 'Delivered', 'Product delivered successfully', '2017-03-10 19:43:04'),
(4, 4, 'in Process', 'Product ready for Shipping', '2017-03-10 19:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `productreviews`
--

CREATE TABLE `productreviews` (
  `id` int(11) NOT NULL,
  `productId` int(11) DEFAULT NULL,
  `quality` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productreviews`
--

INSERT INTO `productreviews` (`id`, `productId`, `quality`, `price`, `value`, `name`, `summary`, `review`, `reviewDate`) VALUES
(2, 3, 4, 5, 5, 'Anuj Kumar', 'BEST PRODUCT FOR ME :)', 'BEST PRODUCT FOR ME :)', '2017-02-26 20:43:57'),
(3, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:52:46'),
(4, 3, 3, 4, 3, 'Sarita pandey', 'Nice Product', 'Value for money', '2017-02-26 20:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(1, 4, 3, 'Micromax 81cm (32) HD Ready LED TV  (32T6175MHD, 2 x HDMI, 2 x USB)', 'Micromax test', 139900, 0, '<div class=\"HoUsOy\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; font-size: 18px; white-space: nowrap; line-height: 1.4; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif;\">General</div><ul style=\"box-sizing: border-box; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Sales Package</div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\">1 TV Unit, Remote Controller, Battery (For Remote Controller), Quick Installation Guide and User Manual: All in One, Wall Mount Support</li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Model Name</div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\">32T6175MHD</li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Display Size</div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\">81 cm (32)</li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">Screen Type</div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\">LED</li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\">HD Technology &amp; Resolutiontest</div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\">HD Ready, 1366 x 768</li></ul></li></ul>', 'micromax1.jpeg', 'micromax main image.jpg', 'micromax main image.jpg', 1200, 'In Stock', '2017-01-30 16:54:35', ''),
(2, 4, 4, 'Apple iPhone 6 (Silver, 16 GB)', 'Apple INC', 36990, 0, '<div class=\"_2PF8IO\" style=\"box-sizing: border-box; margin: 0px 0px 0px 110px; padding: 0px; flex: 1 1 0%; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><ul style=\"box-sizing: border-box; margin-bottom: 0px; margin-left: 0px;\"><li class=\"_1tMfkh\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\">1 GB RAM | 16 GB ROM |</li><li class=\"_1tMfkh\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\">4.7 inch Retina HD Display</li><li class=\"_1tMfkh\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\">8MP Primary Camera | 1.2MP Front</li><li class=\"_1tMfkh\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\">Li-Ion Battery</li><li class=\"_1tMfkh\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\">A8 Chip with 64-bit Architecture and M8 Motion Co-processor Processor</li></ul></div>', 'apple-iphone-6-1.jpeg', 'apple-iphone-6-2.jpeg', 'apple-iphone-6-3.jpeg', 0, 'In Stock', '2017-01-30 16:59:00', ''),
(3, 4, 4, 'Redmi Note 4 (Gold, 32 GB)  (With 3 GB RAM)', 'Redmi', 10999, 0, '<br><div><ol><li>3 GB RAM | 32 GB ROM | Expandable Upto 128 GB<br></li><li>5.5 inch Full HD Display<br></li><li>13MP Primary Camera | 5MP Front<br></li><li>4100 mAh Li-Polymer Battery<br></li><li>Qualcomm Snapdragon 625 64-bit Processor<br></li></ol></div>', 'mi-redmi-note-4-1.jpeg', 'mi-redmi-note-4-2.jpeg', 'mi-redmi-note-4-3.jpeg', 0, 'In Stock', '2017-02-04 04:03:15', ''),
(4, 4, 4, 'Lenovo K6 Power (Silver, 32 GB) ', 'Lenovo', 9999, 0, '<ul><li>3 GB RAM | 32 GB ROM | Expandable Upto 128 GB<br></li><li>5 inch Full HD Display<br></li><li>13MP Primary Camera | 8MP Front<br></li><li>4000 mAh Li-Polymer Battery<br></li><li>Qualcomm Snapdragon 430 Processor<br></li></ul>', 'lenovo-k6-power-k33a42-1.jpeg', 'lenovo-k6-power-k33a42-2.jpeg', 'lenovo-k6-power-k33a42-3.jpeg', 45, 'In Stock', '2017-02-04 04:04:43', ''),
(5, 4, 4, 'Lenovo Vibe K5 Note (Gold, 32 GB)  ', 'Lenovo', 11999, 0, '<ul><li>3 GB RAM | 32 GB ROM | Expandable Upto 128 GB<br></li><li>5.5 inch Full HD Display<br></li><li>13MP Primary Camera | 8MP Front<br></li><li>3500 mAh Li-Ion Polymer Battery<br></li><li>Helio P10 64-bit Processor<br></li></ul>', 'lenovo-k5-note-pa330010in-1.jpeg', 'lenovo-k5-note-pa330116in-2.jpeg', 'lenovo-k5-note-pa330116in-3.jpeg', 0, 'In Stock', '2017-02-04 04:06:17', ''),
(6, 4, 4, 'Micromax Canvas Mega 4G', 'Micromax', 6999, 0, '<ul><li>3 GB RAM | 16 GB ROM |<br></li><li>5.5 inch HD Display<br></li><li>13MP Primary Camera | 5MP Front<br></li><li>2500 mAh Battery<br></li><li>MT6735 Processor<br></li></ul>', 'micromax-canvas-mega-4g-1.jpeg', 'micromax-canvas-mega-4g-2.jpeg', 'micromax-canvas-mega-4g-3.jpeg', 35, 'In Stock', '2017-02-04 04:08:07', ''),
(7, 4, 4, 'SAMSUNG Galaxy On5', 'SAMSUNG', 7490, 0, '<ul><li>1.5 GB RAM | 8 GB ROM | Expandable Upto 128 GB<br></li><li>5 inch HD Display<br></li><li>8MP Primary Camera | 5MP Front<br></li><li>2600 mAh Li-Ion Battery<br></li><li>Exynos 3475 Processor<br></li></ul>', 'samsung-galaxy-on7-sm-1.jpeg', 'samsung-galaxy-on5-sm-2.jpeg', 'samsung-galaxy-on5-sm-3.jpeg', 20, 'In Stock', '2017-02-04 04:10:17', ''),
(8, 4, 4, 'OPPO A57', 'OPPO', 14990, 0, '<ul><li>3 GB RAM | 32 GB ROM | Expandable Upto 256 GB<br></li><li>5.2 inch HD Display<br></li><li>13MP Primary Camera | 16MP Front<br></li><li>2900 mAh Battery<br></li><li>Qualcomm MSM8940 64-bit Processor<br></li></ul>', 'oppo-a57-na-original-1.jpeg', 'oppo-a57-na-original-2.jpeg', 'oppo-a57-na-original-3.jpeg', 0, 'In Stock', '2017-02-04 04:11:54', ''),
(9, 4, 5, 'Affix Back Cover for Mi Redmi Note 4', 'Techguru', 259, 0, '<ul><li>Suitable For: Mobile<br></li><li>Material: Polyurethane<br></li><li>Theme: No Theme<br></li><li>Type: Back Cover<br></li><li>Waterproof<br></li></ul>', 'amzer-amz98947-original-1.jpeg', 'amzer-amz98947-original-2.jpeg', 'amzer-amz98947-original-3.jpeg', 10, 'In Stock', '2017-02-04 04:17:03', ''),
(11, 4, 6, 'Acer ES 15 Pentium Quad Core', 'Acer', 19990, 0, '<ul><li>Intel Pentium Quad Core Processor ( )<br></li><li>4 GB DDR3 RAM<br></li><li>Linux/Ubuntu Operating System<br></li><li>1 TB HDD<br></li><li>15.6 inch Display<br></li></ul>', 'acer-aspire-notebook-original-1.jpeg', 'acer-aspire-notebook-original-2.jpeg', 'acer-aspire-notebook-original-3.jpeg', 0, 'In Stock', '2017-02-04 04:26:17', ''),
(12, 4, 6, 'Micromax Canvas Laptab II (WIFI) Atom 4th Gen', 'Micromax', 10999, 0, '<ul><li>Intel Atom Processor ( 4th Gen )<br></li><li>2 GB DDR3 RAM<br></li><li>32 bit Windows 10 Operating System<br></li><li>11.6 inch Touchscreen Display<br></li></ul>', 'micromax-lt777w-2-in-1-laptop-original-1.jpeg', 'micromax-lt777w-2-in-1-laptop-original-2.jpeg', 'micromax-lt777w-2-in-1-laptop-original-3.jpeg', 0, 'In Stock', '2017-02-04 04:28:17', ''),
(13, 4, 6, 'HP Core i5 5th Gen', 'HP', 41990, 0, '<span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">HP Core i5 5th Gen - (4 GB/1 TB HDD/Windows 10 Home/2 GB Graphics) N8M28PA 15-ac123tx Notebook</span><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">&nbsp;&nbsp;(15.6 inch, Turbo SIlver, 2.19 kg)</span><br><div><ul><li>Intel Core i5 Processor ( 5th Gen )<br></li><li>4 GB DDR3 RAM<br></li><li>64 bit Windows 10 Operating System<br></li><li>1 TB HDD<br></li><li>15.6 inch Display<br></li></ul></div>', 'hp-notebook-original-1.jpeg', 'hp-notebook-original-2.jpeg', 'hp-notebook-original-3.jpeg', 0, 'In Stock', '2017-02-04 04:30:24', ''),
(14, 4, 6, 'Lenovo Ideapad 110 APU Quad Core A6 6th Gen', 'Lenovo', 22990, 0, '<span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">Lenovo Ideapad 110 APU Quad Core A6 6th Gen - (4 GB/500 GB HDD/Windows 10 Home) 80TJ00D2IH IP110 15ACL Notebook</span><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">&nbsp;&nbsp;(15.6 inch, Black, 2.2 kg)</span><br><div><ul><li>AMD APU Quad Core A6 Processor ( 6th Gen )<br></li><li>4 GB DDR3 RAM<br></li><li>64 bit Windows 10 Operating System<br></li><li>500 GB HDD<br></li><li>15.6 inch Display<br></li></ul></div>', 'lenovo-ideapad-notebook-original-1.jpeg', 'lenovo-ideapad-notebook-original-2.jpeg', 'lenovo-ideapad-notebook-3.jpeg', 0, 'In Stock', '2017-02-04 04:32:15', ''),
(15, 3, 8, 'The Wimpy Kid Do -It- Yourself Book', 'ABC', 205, 250, '<span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">The Wimpy Kid Do -It- Yourself Book</span><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">&nbsp;&nbsp;(English, Paperback, Jeff Kinney)</span><br><div><ul><li>Language: English<br></li><li>Binding: Paperback<br></li><li>Publisher: Penguin Books Ltd<br></li><li>ISBN: 9780141339665, 0141339667<br></li><li>Edition: 1<br></li></ul></div>', 'diary-of-a-wimpy-kid-do-it-yourself-book-original-1.jpeg', 'diary-of-a-wimpy-kid-do-it-yourself-book-original-1.jpeg', 'diary-of-a-wimpy-kid-do-it-yourself-book-original-1.jpeg', 50, 'In Stock', '2017-02-04 04:35:13', ''),
(16, 3, 8, 'Thea Stilton and the Tropical Treasure ', 'XYZ', 240, 0, '<ul><li>Language: English<br></li><li>Binding: Paperback<br></li><li>Publisher: Scholastic<br></li><li>ISBN: 9789351032083, 9351032086<br></li><li>Edition: 2015<br></li><li>Pages: 176<br></li></ul>', '22-thea-stilton-and-the-tropical-treasure-original-1.jpeg', '22-thea-stilton-and-the-tropical-treasure-original-1.jpeg', '22-thea-stilton-and-the-tropical-treasure-original-1.jpeg', 30, 'In Stock', '2017-02-04 04:36:23', ''),
(17, 5, 9, 'Induscraft Solid Wood King Bed With Storage', 'Induscraft', 32566, 0, '<span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">Induscraft Solid Wood King Bed With Storage</span><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">&nbsp;&nbsp;(Finish Color - Honey Brown)</span><br><div><ul><li>Material Subtype: Rosewood (Sheesham)<br></li><li>W x H x D: 1850 mm x 875 mm x 2057.5 mm<br></li><li>Floor Clearance: 8 mm<br></li><li>Delivery Condition: Knock Down<br></li></ul></div>', 'inaf245-queen-rosewood-sheesham-induscraft-na-honey-brown-original-1.jpeg', 'inaf245-queen-rosewood-sheesham-induscraft-na-honey-brown-original-2.jpeg', 'inaf245-queen-rosewood-sheesham-induscraft-na-honey-brown-original-3.jpeg', 0, 'In Stock', '2017-02-04 04:40:37', ''),
(18, 5, 10, 'Nilkamal Ursa Metal Queen Bed', 'Nilkamal', 6523, 0, '<span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">@home by Nilkamal Ursa Metal Queen Bed</span><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 18px;\">&nbsp;&nbsp;(Finish Color - NA)</span><br><div><ul><li>Material Subtype: Carbon Steel<br></li><li>W x H x D: 1590 mm x 910 mm x 2070 mm<br></li><li>Floor Clearance: 341 mm<br></li><li>Delivery Condition: Knock Down<br></li></ul></div>', 'flbdorsabrqbblk-queen-carbon-steel-home-by-nilkamal-na-na-original-1.jpeg', 'flbdorsabrqbblk-queen-carbon-steel-home-by-nilkamal-na-na-original-2.jpeg', 'flbdorsabrqbblk-queen-carbon-steel-home-by-nilkamal-na-na-original-3.jpeg', 0, 'In Stock', '2017-02-04 04:42:27', ''),
(19, 6, 12, 'Asian Casuals  (White, White)', 'Asian', 379, 0, '<ul style=\"box-sizing: border-box; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><li class=\"_2-riNZ\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\">Colour: White, White</li><li class=\"_2-riNZ\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 16px; list-style: none; position: relative;\">Outer Material: Denim</li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><br></div></li></ul>', '1.jpeg', '2.jpeg', '3.jpeg', 45, 'In Stock', '2017-03-10 20:16:03', ''),
(20, 6, 12, 'Adidas MESSI 16.3 TF Football turf Shoes  (Blue)', 'Adidas', 4129, 5000, '<ul style=\"box-sizing: border-box; margin-bottom: 0px; margin-left: 0px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><li class=\"_2-riNZ\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\">Colour: Blue</li><li class=\"_2-riNZ\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 0px 16px; list-style: none; position: relative;\">Closure: Laced</li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Weight</b></div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"><b>200 g (per single Shoe) - Weight of the product may vary depending on size.</b></li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Style</b></div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"><b>Panel and Stitch Detail, Textured Detail</b></li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Tip Shape</b></div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"><b>Round</b></li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 16px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Season</b></div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"><b>AW16</b></li></ul></li><li class=\"_1KuY3T row\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none; display: flex; flex-flow: row wrap; width: 731px;\"><div class=\"vmXPri col col-3-12\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px 8px 0px 0px; width: 182.75px; display: inline-block; vertical-align: top; color: rgb(135, 135, 135);\"><b>Closure</b></div><ul class=\"_3dG3ix col col-9-12\" style=\"box-sizing: border-box; margin-left: 0px; width: 548.25px; display: inline-block; vertical-align: top; line-height: 1.4;\"><li class=\"sNqDog\" style=\"text-align: left; box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\"><b>Laced</b></li></ul></li></ul>', '1.jpeg', '2.jpeg', '3.jpeg', 0, 'In Stock', '2017-03-10 20:19:22', ''),
(25, 7, 14, 'Visual Stories', 'Visual', 1000, 0, '<div>B-304, Keshav, Near Jayratna, Beside Reliance Petrol Pump, R.V.Desai Road, Vadodara, Gujarat 390001<br></div>', 'p2.jpeg', 'p2.jpeg', 'p2.jpeg', 0, 'In Stock', '2022-02-04 06:13:15', NULL),
(26, 7, 13, 'Memories Studio', 'Memories', 500, 0, 'House, 2nd Floor, Memories, 58, Sampatrao Colony, Alkapuri, Vadodara, Gujarat 390007<br>', 'p1.png', 'p1.png', 'p1.png', 0, 'In Stock', '2022-02-04 06:17:32', NULL),
(27, 7, 15, 'Avsar studio', 'Avsar studio', 1500, 0, 'Address: G-7, 8 Annapurna Complex, Makarpura Main Road, Near Bhavans School Three Way,Vadodara, Gujarat 390011<br>', 'p3.jpg', 'p3.jpg', 'p3.jpg', 0, 'In Stock', '2022-02-04 06:40:37', NULL),
(28, 7, 16, 'Momenttra', 'Momenttra', 1500, 0, '&nbsp;Address: 304 Shivalay Residency 2 Inside Bharat Petrol Pump, Dabhoi Waghodia Ring Rd, Vadodara, Gujarat 390025<br>', 'moment.png', 'moment.png', 'moment.png', 0, 'In Stock', '2022-02-04 06:43:48', NULL),
(29, 7, 17, 'Memory Bucket', 'Memory Bucket', 2000, 0, 'Address: 29, Atthar Society, near Nalanda 3, Opposite Water Tank, Vadodara, Gujarat 390025<br>', 'memory.png', 'memory.png', 'memory.png', 0, 'In Stock', '2022-02-04 06:46:53', NULL),
(30, 7, 19, 'Shivam Joshi', 'Shivam Joshi', 2000, 0, 'Address: 20 paras society , opposite harihar apartment, b/h Old R.T.O, Warasiya, Vadodara, Gujarat 390006<br>', 'shivam1.png', 'shivam1.png', 'shivam1.png', 0, 'In Stock', '2022-02-04 06:52:02', NULL),
(31, 7, 20, 'Bride Emotions', 'Bride Emotions', 2500, 0, 'Address: 405, Pinnacle Business Park, Tulshi Dham Rd, opp. Domminos Pizza, Vadodara, Gujarat 390011<br>', 'bride.png', 'bride.png', 'bride.png', 0, 'In Stock', '2022-02-04 06:54:26', NULL),
(32, 7, 21, 'Happy Studio', 'Happy Studio', 3000, 0, 'Address: Shop no. 1, Somnath villa appartment B/H govind bhuvan, Dandia Bazaar Rd, Vadodara, Gujarat 390001<br>', 'happy.jpg', 'happy.jpg', 'happy.jpg', 0, 'In Stock', '2022-02-04 06:55:10', NULL),
(33, 7, 18, 'Impress Digital Studio', 'Impress Digital Studio', 3000, 0, '&nbsp;Address: Madhu Malti Building, B H General post Office,Near Dr. Kaku R. Shah Hospital, Raopura, Vadodara, Gujarat 390001<br>', 'impress.jpg', 'impress.jpg', 'impress.jpg', 0, 'In Stock', '2022-02-04 06:59:11', NULL),
(34, 8, 22, 'Vraj Caterers', 'Vraj Caterers', 2600, 0, 'Address:24-b, Jashlok Society, Manjalpur, Near Deep Chamber, Manjalpur, Vadodara, Gujarat 390011<br>', 'download.jpg', 'download.jpg', 'download.jpg', 0, 'In Stock', '2022-02-04 08:40:53', NULL),
(35, 8, 23, 'Zaika Caterers', 'Zaika Caterers', 2400, 0, 'Address:&nbsp; Avesh Complex, Moghulwada, Gendi Gate Road, near Suleimani Bank, Vadodara, Gujarat 390017<br>', '123.jpg', '123.jpg', '123.jpg', 0, 'In Stock', '2022-02-04 08:41:33', NULL),
(36, 8, 24, 'Yash caterers', 'Yash caterers', 3800, 0, 'Address: Harni - Warasiya Ring Rd, opposite bankers hospital, Waghela Nagar, Bapunagar, Vadodara, Gujarat 390006<br>', '456.jpg', '456.jpg', '456.jpg', 0, 'In Stock', '2022-02-04 08:42:31', NULL),
(37, 8, 25, 'Harsh Catering ', 'Harsh Catering ', 3200, 0, 'Address: F/ 41, Bhagyalaxmi Society, Samta, Subhanpura, Vadodara, Gujarat 390023<br>', '256.jpg', '256.jpg', '256.jpg', 0, 'In Stock', '2022-02-04 08:43:16', NULL),
(38, 8, 26, 'Rudra Caterers', 'Rudra Caterers', 2500, 0, 'Address: FF-14 Shivalaya -1 Complex Near Raneshwar Temple Vasna Main Road, Vasna Rd, Vadodara, Gujarat 390007<br>', 'ttt.jpg', 'ttt.jpg', 'ttt.jpg', 0, 'In Stock', '2022-02-04 08:43:58', NULL),
(39, 8, 27, 'Sai Caterers', 'Sai Caterers', 2500, 0, 'Address: 2nd Floor Shagun Banquet,Harni Warashia Ring Road,opp.Premdas Jalaram Hospital, Vadodara, Gujarat 390006<br>', 'Sai.jpg', 'Sai.jpg', 'Sai.jpg', 0, 'In Stock', '2022-02-04 08:44:59', NULL),
(40, 8, 28, 'Raj Caterers', 'Raj Caterers', 2700, 0, '&nbsp;Address: Subhanpura, 197,Shiv Shakti Society, B/h. Anandvan Complex, Nr. I.P.C.L., New IPCL Rd, Vadodara, Gujarat 390023<br>', 'raj.jpg', 'raj.jpg', 'raj.jpg', 0, 'In Stock', '2022-02-04 08:45:45', NULL),
(41, 8, 29, 'Preet caterers', 'Preet caterers', 3800, 0, 'Address: 856, 5, Makarpura GIDC, Makarpura, Vadodara, Gujarat 390010, Near Bank Of Baroda&nbsp;<br>', '4141.jpg', '4141.jpg', '4141.jpg', 0, 'In Stock', '2022-02-04 08:46:43', NULL),
(42, 8, 30, 'Patel Catering', 'Patel Catering', 3100, 0, 'Address: 2, Sikkanagar Society, Alkapuri, Opposite Sardar Baug Atithi Gruh, Alkapuri, Vadodara, Gujarat 390007Address: 2, Sikkanagar Society, Alkapuri, Opposite Sardar Baug Atithi Gruh, Alkapuri, Vadodara, Gujarat 390007<br>', 'download1.png', 'download1.png', 'download1.png', 0, 'In Stock', '2022-02-04 08:47:33', NULL),
(43, 9, 31, 'Visual Stories', 'Visual Stories', 2500, 0, 'Address: B-304, Keshav, Near Jayratna, Beside Reliance Petrol Pump, R.V.Desai Road, Vadodara, Gujarat 390001&nbsp;<br>', 'visu.jpg', 'visu.jpg', 'visu.jpg', 0, 'In Stock', '2022-02-04 08:50:38', NULL),
(44, 9, 32, 'Avsar Photography Studio', 'Avsar Photography Studio', 2500, 0, 'Address: 8 Annapurna Complex, Beside Angan Tower, makarpura, main road, Manjalpur, Vadodara, Gujarat 390011<br>', 'avsar.jpg', 'avsar.jpg', 'avsar.jpg', 0, 'In Stock', '2022-02-04 08:51:18', NULL),
(45, 9, 33, 'Memories Photography Studio', 'Memories Photography Studio', 2000, 0, 'Address: House, 2nd Floor, Memories, 58, Sampatrao Colony, Alkapuri, Vadodara, Gujarat 390007<br>', 'memo.png', 'memo.png', 'memo.png', 0, 'In Stock', '2022-02-04 08:52:03', NULL),
(46, 9, 34, 'Maa Digital Studio', 'Maa Digital Studio', 2200, 0, 'Address: Suryadeep Apartment, 14, Harni Rd, Near Rupam Cinema, Vadodara, Gujarat 390006<br>', 'maa.jfif', 'maa.jfif', 'maa.jfif', 0, 'In Stock', '2022-02-04 08:52:56', NULL),
(47, 9, 35, 'Memory Bucket', 'Memory Bucket', 1500, 0, 'Address: 29, Atthar Society, near Nalanda 3, Opposite Water Tank, Vadodara, Gujarat 390025<br>', 'bucket.png', 'bucket.png', 'bucket.png', 0, 'In Stock', '2022-02-04 08:54:13', NULL),
(48, 9, 36, 'Freezing Moments', 'Freezing Moments', 2000, 0, 'Address: 36 Ayodhyapuri society, behind Nisarg apartments, Old Padra Rd, Diwalipura, Vadodara, Gujarat 390007<br>', 'freezing.jpg', 'freezing.jpg', 'freezing.jpg', 0, 'In Stock', '2022-02-04 08:55:10', NULL),
(49, 9, 37, 'Shivam Joshi', 'Shivam Joshi', 1500, 0, 'Address: 20 paras society , opposite harihar apartment, b/h Old R.T.O, Warasiya, Vadodara, Gujarat 390006<br>', 'shivam.jpg', 'shivam.jpg', 'shivam.jpg', 0, 'In Stock', '2022-02-04 08:56:09', NULL),
(50, 9, 38, 'Photo spectrum', 'Photo spectrum', 4000, 0, 'AddressG 15 Landmark Complex, , Race Course Circle, Race Course Road, Vadodara - 390007<br>', 'spect.png', 'spect.png', 'spect.png', 0, 'In Stock', '2022-02-04 08:57:09', NULL),
(51, 9, 115, 'Happy Studio', 'Happy Studio', 2000, 0, 'Address: Shop no. 1, Somnath villa appartment B/H govind bhuvan, Dandia Bazaar Rd, Vadodara, Gujarat 390001<br>', 'happy.png', 'happy.png', 'happy.png', 0, 'In Stock', '2022-02-04 09:00:12', NULL),
(52, 10, 39, 'Prasang Band', 'Prasang Band', 1500, 0, 'Address:Krishna Township, 212, Vadodara, Gujarat 390021<br>', 'pransang.jpg', 'pransang.jpg', 'pransang.jpg', 0, 'In Stock', '2022-02-04 09:02:26', NULL),
(53, 10, 40, 'Sayaji Music Band', 'Sayaji Music Band', 1500, 0, 'Address:&nbsp; Narshiji`s Pole Naka Mahatma, Gandhi Road, Vadodara, Gujarat 390001<br>', 'darbar.jpg', 'darbar.jpg', 'darbar.jpg', 0, 'In Stock', '2022-02-04 09:03:16', NULL),
(54, 10, 41, 'Sagar Band', 'Sagar Band', 3000, 0, 'Address:&nbsp; Atladra Bus Stop, Vadodara, Gujarat 390015<br>', 'sagar.jpg', 'sagar.jpg', 'sagar.jpg', 0, 'In Stock', '2022-02-04 09:04:00', NULL),
(55, 10, 42, 'Diamond Music Band', 'Diamond Music Band', 2500, 0, 'Address: Hathikhana Main Rd, Fatehpura, Mandvi, Vadodara, Gujarat 390006<br>', 'daimond.jpg', 'daimond.jpg', 'daimond.jpg', 0, 'In Stock', '2022-02-04 09:04:35', NULL),
(56, 10, 43, 'Maharaja Music Band', 'Maharaja Music Band', 3500, 0, 'Address:&nbsp; opposite Dargh, Fatehpura, Adaniyapul, Vadodara, Gujarat 390006<br>', 'maharaja.jpg', 'maharaja.jpg', 'maharaja.jpg', 0, 'In Stock', '2022-02-04 09:05:59', NULL),
(57, 10, 44, 'Jankar Band', 'Jankar Band', 2000, 0, 'Address:B/H Dina Clinic,, Gorwa, Vadodara, Gujarat 390016<br>', 'jhankar.jpg', 'jhankar.jpg', 'jhankar.jpg', 0, 'In Stock', '2022-02-04 09:06:38', NULL),
(58, 10, 45, 'Sangam Music Band', 'Sangam Music Band', 3000, 0, 'Address: 20, Hardwar Apartment, Wadi Rangmahal, Vadodara, Gujarat 390017<br>', 'jai.jpeg', 'jai.jpeg', 'jai.jpeg', 0, 'In Stock', '2022-02-04 09:07:24', NULL),
(59, 10, 46, 'Darbar Music Band ', 'Darbar Music Band ', 2000, 0, 'Address: Narshiji`s Pole Naka Mahatma, Gandhi Road, Vadodara, Gujarat 390001<br>', 'dar.png', 'dar.png', 'dar.png', 0, 'In Stock', '2022-02-04 09:08:18', NULL),
(60, 10, 47, 'Great Royal music band', 'Great Royal music band', 3000, 0, 'Address: Hathikhana Main Rd, Bajwada, Chhipwad, Vadodara, Gujarat 390006<br>', 'bar.jpg', 'bar.jpg', 'bar.jpg', 0, 'In Stock', '2022-02-04 09:09:02', NULL),
(61, 11, 48, 'Pradhan Decorators', 'Pradhan Decorators', 1500, 0, 'Address: 4, Prerna Complex,. Polo Ground, S.R.P. road, Navapura,, Vadodara, Gujarat 390009<br>', 'pdca.jpg', 'pdca.jpg', 'pdca.jpg', 0, 'In Stock', '2022-02-04 09:10:16', NULL),
(62, 11, 49, 'S. K. Decorators', 'S. K. Decorators', 1000, 0, 'Address: Shop no-30, Panchratna Complex Parivar Char Rasta, Dabhoi - Waghodia Ring Rd, Vadodara, Gujarat 390025<br>', 'sk.png', 'sk.png', 'sk.png', 0, 'In Stock', '2022-02-04 09:11:06', NULL),
(63, 11, 50, 'Jalaram Decorators', 'Jalaram Decorators', 3000, 0, 'Address: D/12 Anil Park, 3, VIP Rd, behind Bright School, Padmavati Nagar, Karelibagh, Vadodara, Gujarat 390018<br>', 'jalaram.jpg', 'jalaram.jpg', 'jalaram.jpg', 0, 'In Stock', '2022-02-04 09:11:42', NULL),
(64, 11, 50, 'Amber Decorators Faraskhana', 'Amber Decorators Faraskhana', 2000, 0, 'Address: B-11, Devkinandan Complex, Near, Near Susson G I D C, Makarpura Road, Makarpura Road, Vadodara, Gujarat 390010<br>', 'amber.jpg', 'amber.jpg', 'amber.jpg', 0, 'In Stock', '2022-02-04 09:12:37', NULL),
(65, 11, 52, 'Parvati Decoration', 'Parvati Decoration', 2500, 0, 'Address: B-23 NAMRATA PARK SOCIETY,NEAR ASHOK NAGAR COLONY,Makarpura Road, Danteshwar, Vadodara, Gujarat 390004<br>', 'parvati.jpg', 'parvati.jpg', 'parvati.jpg', 0, 'In Stock', '2022-02-04 09:13:18', NULL),
(66, 11, 53, 'Shiv Faraskhana Decorators', 'Shiv Faraskhana Decorators', 3000, 0, 'Address: Shop no-1, Ratnam Complex Opp Shivam Duplex Near D-mart, Waghodia Rd, Vadodara, Gujarat 390019<br>', 'shiv.jpeg', 'shiv.jpeg', 'shiv.jpeg', 0, 'In Stock', '2022-02-04 09:13:55', NULL),
(67, 11, 55, 'Prajapati Decorators', 'Prajapati Decorators', 1000, 0, 'Address: 47 Marutidham Socity, Gidc, Jason Main Rd,Vadodara, Gujarat 390010<br>', 'prajapati.png', 'prajapati.png', 'prajapati.png', 0, 'In Stock', '2022-02-04 09:14:32', NULL),
(68, 11, 56, 'Avsar Decorators', 'Avsar Decorators', 1500, 0, 'Address: Officers Railway Colony, Pratapgunj, Vadodara, Gujarat 390002<br>', 'avsar.jpg', 'avsar.jpg', 'avsar.jpg', 0, 'In Stock', '2022-02-04 09:15:19', NULL),
(69, 11, 57, 'Arunodaya Decorators', 'Arunodaya Decorators', 1000, 0, 'Address: Jamnadas Brahmapuri, Dandia Bazar, Vadodara, Gujarat 390001<br>', 'arunodaya.JPG', 'arunodaya.JPG', 'arunodaya.JPG', 0, 'In Stock', '2022-02-04 09:15:53', NULL),
(70, 12, 59, 'Magician Pappu', 'Magician Pappu', 1500, 0, '&nbsp;Address: shree Hari Complex, 7/A, society, Ajwa Rd, opp. Harish petrol pump, Vadodara, Gujarat 390019<br>', 'mm.jpg', 'mm.jpg', 'mm.jpg', 0, 'In Stock', '2022-02-04 09:18:56', NULL),
(71, 12, 60, 'Jadu Mantar', 'Jadu Mantar', 5000, 0, 'Address: SF-8, Prathmesh Plaza, Rajmahel Rd, Kirti Stambh, Kevdabaug, Vadodara, Gujarat 390001&nbsp;<br>', 'jj.jpg', 'jj.jpg', 'jj.jpg', 0, 'In Stock', '2022-02-04 09:19:38', NULL),
(72, 12, 61, 'Black magic expert ', 'Black magic expert ', 1000, 0, 'Address: Gujarat Vadodara area 113, Gujarat 391243<br>', 'bb.jpg', 'bb.jpg', 'bb.jpg', 0, 'In Stock', '2022-02-04 09:24:09', NULL),
(73, 12, 62, 'Magician R.d', 'Magician R.d', 2500, 0, 'Address:&nbsp; Riddhisiddhi Nagar Society, Manjalpur, Vadodara, Gujarat 390011<br>', '22.jpg', '22.jpg', '22.jpg', 0, 'In Stock', '2022-02-04 09:24:47', NULL),
(74, 12, 63, 'Oven Magic', 'Oven Magic', 2000, 0, 'Address:&nbsp; Ground Floor,Time Square Building, Fatehgunj Road, Vadodara, Gujarat 390007<br>', '85.jpg', '85.jpg', '85.jpg', 0, 'In Stock', '2022-02-04 09:25:36', NULL),
(75, 13, 64, 'Honeybee Cake', 'Honeybee Cake', 500, 0, 'Address: Shop 1, Popular bakery, RTO Road, Opposite G.N.V School, Patel Park Society, Warasiya, Vadodara, Gujarat 390006<br>', 'honeybee.jpg', 'honeybee.jpg', 'honeybee.jpg', 0, 'In Stock', '2022-02-04 09:27:45', NULL),
(76, 13, 65, 'Rose cakes', 'Rose cakes', 250, 0, 'Address: B/159, opp. Om nagar, Moti Nagar 2, Anand Baug Society, Tarsali, Vadodara, Gujarat 390009<br>', 'rose.jpg', 'rose.jpg', 'rose.jpg', 0, 'In Stock', '2022-02-04 09:28:23', NULL),
(77, 13, 66, 'Ganache Patisserie', 'Ganache Patisserie', 300, 0, 'Address: GF-10, Devpushp Complex, Tulsidham Char Rasta, Vadodara, Gujarat 390011<br>', 'ganache.png', 'ganache.png', 'ganache.png', 0, 'In Stock', '2022-02-04 09:29:02', NULL),
(78, 13, 67, 'Monginis Cake', 'Monginis Cake', 700, 0, 'Address: 14, LALBAUG SHOPPING CENTER, near Shreyas School, Manjalpur, Vadodara, Gujarat 390011<br>', 'monginis.png', 'monginis.png', 'monginis.png', 0, 'In Stock', '2022-02-04 09:29:40', NULL),
(79, 13, 68, 'Whisk with Nim', 'Whisk with Nim', 900, 0, 'Address: Maninagar Society, 19, Tulsidham Char Rasta, Diwalibanagar Society, Vadodara, Gujarat 390011<br>', 'whisk.png', 'whisk.png', 'whisk.png', 0, 'In Stock', '2022-02-04 09:30:21', NULL),
(80, 13, 69, 'The Cake Love', 'The Cake Love', 700, 0, 'The Cake Love<br>', 'thecake.jpg', 'thecake.jpg', 'thecake.jpg', 0, 'In Stock', '2022-02-04 09:30:55', NULL),
(81, 13, 71, 'M.M Cake Gallery', 'M.M Cake Gallery', 500, 0, 'Address: Jhulelal Mandir Rd, opp. JK Corner, Madar Mohalla, Patel Park Society, Warasiya, Vadodara, Gujarat 390006<br>', 'mm.jpg', 'mm.jpg', 'mm.jpg', 0, 'In Stock', '2022-02-04 09:34:05', NULL),
(82, 13, 72, 'Papa Cakes live ', 'Papa Cakes live ', 920, 0, 'Address: Papa cakes the live cake &amp; Bake studio Shop no 2 Shree Siddheshwar hub near Vaikunth,Vadodara, Gujarat 390022<br>', 'papa1.jpg', 'papa1.jpg', 'papa1.jpg', 0, 'In Stock', '2022-02-04 09:34:46', NULL),
(83, 12, 58, 'Teju mirror magic', 'Teju mirror magic', 3000, 0, 'Address:business hub, FF-6.Regency plaza, opp. Monalisha Complex, Vadodara, Gujarat 390011&nbsp;<br>', '96.jpg', '96.jpg', '96.jpg', 0, 'In Stock', '2022-02-04 09:38:50', NULL),
(84, 14, 73, 'Khodal Florist', 'Khodal Florist', 3000, 0, 'Address: Vraj Dham Society, Makarpura, Vadodara, Gujarat 390013<br>', '121.jpg', '121.jpg', '121.jpg', 0, 'In Stock', '2022-02-04 09:51:01', NULL),
(85, 14, 74, 'Sai Florist', 'Sai Florist', 2500, 0, 'Address:Tarsali Vegetable Market, Tarsali, Vadodara, Gujarat 390009<br>', 'p1.jpg', 'p1.jpg', 'p1.jpg', 0, 'In Stock', '2022-02-04 09:51:38', NULL),
(86, 14, 75, ' Malhar Florist', ' Malhar Florist', 3000, 0, 'Address: Old Padra Rd, Malhar Point, Punit Nagar, Akota, Vadodara, Gujarat 390015&nbsp;<br>', '888.jpg', '888.jpg', '888.jpg', 0, 'In Stock', '2022-02-04 09:52:13', NULL),
(87, 14, 76, 'Bagicha Florist ', 'Bagicha Florist ', 1000, 0, 'Address:Bagicha florist Fatehgunj char resta,beside sayoug restaurant, Fatehgunj, Vadodara, Gujarat 390002<br>', '3636.jpg', '3636.jpg', '3636.jpg', 0, 'In Stock', '2022-02-04 09:53:43', NULL),
(88, 14, 77, 'jk Florist', 'jk Florist', 1000, 0, 'Address:&nbsp; Shop No.41,42, Phoenix Complex Jetalpur Rd Near Suraj Plaza, Sayajiganj, Vadodara, Gujarat 390005<br>', '4747.jpg', '4747.jpg', '4747.jpg', 0, 'In Stock', '2022-02-04 09:55:00', NULL),
(89, 14, 78, 'Asson florist', 'Asson florist', 3000, 0, 'Address:&nbsp; 28,Asthapad SoC,B/s.Avkar Hall,Nr. Water Tank, Pani Tanki Rd, Karelibagh, Vadodara, Gujarat 390018<br>', '6565.jpg', '6565.jpg', '6565.jpg', 0, 'In Stock', '2022-02-04 09:55:38', NULL),
(90, 14, 79, 'Baroda  Florist ', 'Baroda  Florist ', 1000, 0, 'Address: Shop No.1, Akshay Complex, Jetalpur Rd, Sayajiganj, Vadodara, Gujarat 390005<br>', 'lp.jpg', 'lp.jpg', 'lp.jpg', 0, 'In Stock', '2022-02-04 09:56:15', NULL),
(91, 14, 80, 'Sandhya Florist', 'Sandhya Florist', 2000, 0, 'Address :&nbsp; B/s. Shreyas School, Nr. Reliance Circle,, Manjalpur, Vadodara,&nbsp; Gujarat-&nbsp; &nbsp; 390011<br>', 'oo.jpg', 'oo.jpg', 'oo.jpg', 0, 'In Stock', '2022-02-04 09:57:04', NULL),
(92, 14, 81, 'Decent Florist  ', 'Decent Florist  ', 3000, 0, 'Address: Decent Florist , Chitrakut society ,shop no 2 nr.Uma Vidhyalaya, Nikol - Naroda Rd, Ahmedabad, Gujarat 382350<br>', 'yz.jpg', 'yz.jpg', 'yz.jpg', 0, 'In Stock', '2022-02-04 09:57:39', NULL),
(93, 15, 82, 'Cold House Alkapuri', 'Cold House ', 150, 0, 'Bombay Shopping Centre, 25, RC Dutt Rd, Vadiwadi, Vadodara, Gujarat 3900201<br>', 'cold.jpg', 'cold.jpg', 'cold.jpg', 0, 'In Stock', '2022-02-04 10:10:44', NULL),
(94, 15, 83, 'Xomox Sun Bar Ltd', 'Xomox Sun Bar', 199, 0, 'Address: 701, B Tower, Alkapuri Arcade, R C Dutt Road, Vadodara, Gujarat 390007<br>', 'xomo.jpg', 'xomo.jpg', 'xomo.jpg', 0, 'In Stock', '2022-02-04 10:12:13', NULL),
(95, 15, 84, 'Saurashtra Cold Drinks', 'Saurashtra Cold Drinks', 159, 0, 'Address: Shop no-1, Shree Kunj Heights Opp Mahalaxmi Party Plot, Jupiter Rd, Vadodara, Gujarat 390011<br>', 'saura.jpg', 'saura.jpg', 'saura.jpg', 0, 'In Stock', '2022-02-04 10:13:06', NULL),
(96, 15, 85, 'Rajlaxmi Cold drinks', 'Rajlaxmi Cold drinks', 200, 0, 'Address: 76X2+2W3, Near Market Char Rasta, Sultanpura, Vadodara, Gujarat 390001<br>', 'rajlaxmi.jpg', 'rajlaxmi.jpg', 'rajlaxmi.jpg', 0, 'In Stock', '2022-02-04 10:13:54', NULL),
(97, 15, 86, 'Bogo Cafe', 'Bogo Cafe', 299, 0, 'Address: 7-A, Rajpath Society KTM Showroom Lane, Old Padra Rd, Vadodara, Gujarat 390007<br>', 'bogo.jpg', 'bogo.jpg', 'bogo.jpg', 0, 'In Stock', '2022-02-04 10:14:45', NULL),
(98, 15, 87, 'Juice Bar', 'Juice Bar', 180, 0, 'Address: Narayan School Rd, Goverdhan Twp, Kendranagar, Vadodara, Gujarat 390025<br>', 'juice.png', 'juice.png', 'juice.png', 0, 'In Stock', '2022-02-04 10:15:31', NULL),
(99, 15, 88, 'Happy Cold Drink House', 'Happy Cold Drink House', 200, 0, 'Address: Raopura Main Road, Raopura, Mandvi, Vadodara, Gujarat 390001<br>', 'happy.jpg', 'happy.jpg', 'happy.jpg', 0, 'In Stock', '2022-02-04 10:16:39', NULL),
(100, 15, 89, 'Super Fountain Soda', 'Super Fountain Soda', 150, 0, 'Address: Genti Gate, opp. Police Chowky Wadi, Wadi, Vadodara, Gujarat 390017<br>', 'super.jpg', 'super.jpg', 'super.jpg', 0, 'In Stock', '2022-02-04 10:17:29', NULL),
(101, 15, 90, 'Shiv Shakti Cold Drinks', 'Shiv Shakti Cold Drinks', 120, 0, 'Address: Dhanyavi Chokdi N H 8 Tarsali By Pass, Tarsali, Vadodara, Gujarat 390009<br>', 'shiv.jpg', 'shiv.jpg', 'shiv.jpg', 0, 'In Stock', '2022-02-04 10:18:40', NULL),
(102, 16, 91, 'VINAYAK SOUND', 'VINAYAK SOUND', 7000, 0, 'Address: Sayona Chamber, Palace Rd, Opp. Radio Light, Babajipura, Vadodara, Gujarat 390001&nbsp;<br>', 'vinayak.jpg', 'vinayak.jpg', 'vinayak.jpg', 0, 'In Stock', '2022-02-04 10:20:09', NULL),
(103, 16, 92, 'BLACKONE', 'BLACKONE', 7000, 0, 'Address: 49-Tulsi Vatiika , Maneja , Vadodra Gujrat , Behind Siemens Company<br>', 'black.jpg', 'black.jpg', 'black.jpg', 0, 'In Stock', '2022-02-04 10:21:47', NULL),
(104, 16, 93, 'DJ SHETH', 'DJ SHETH', 8000, 0, 'Address:&nbsp; 9/Giriraj Society Nr, Panigate Rd, Kidwai Nagar, Yakutpura, Vadodara, Gujarat 390006<br>', 'seth.jpg', 'seth.jpg', 'seth.jpg', 0, 'In Stock', '2022-02-04 10:22:39', NULL),
(105, 16, 94, 'MB SOUNDS & LIGHTS', 'MB SOUNDS & LIGHTS', 5000, 0, 'Address: GF B-4, Unaddeep Complex, Sussen Tarsali RD, Vadodara, Gujarat 390009&nbsp;<br>', 'mb.jpg', 'mb.jpg', 'mb.jpg', 0, 'In Stock', '2022-02-04 10:23:32', NULL),
(106, 16, 95, 'DJ WAR BROTHER', 'DJ WAR BROTHER', 6000, 0, 'Address: 13/196, Sampark Parivar MIG Colony, MIG FLATS, Karelibagh, Vadodara, Gujarat 390018<br>', 'war.jpg', 'war.jpg', 'war.jpg', 0, 'In Stock', '2022-02-04 10:24:20', NULL),
(107, 16, 96, 'DJ MEET SOUND', 'DJ MEET SOUND', 7500, 0, 'Address: Keshav Plaza, 202,2nd floor, near gorwa, Housing board, Gorwa, Vadodara, Gujarat 390016<br>', 'meet.jpg', 'meet.jpg', 'meet.jpg', 0, 'In Stock', '2022-02-04 10:25:05', NULL),
(108, 16, 116, 'DJ VED', 'DJ VED', 5000, 0, 'Address: A/304&nbsp; vora show room, Dabhoi Rd, Soma Talav, Vadodara, Gujarat 390025<br>', 'ved.jpg', 'ved.jpg', 'ved.jpg', 0, 'In Stock', '2022-02-04 10:27:03', NULL),
(109, 16, 117, 'DANNY SOUND', 'DANNY SOUND', 6500, 0, 'Address: Nr novino battries, Makarpura, Vadodara, Gujarat 390010&nbsp;<br>', 'ved.jfif', 'ved.jfif', 'ved.jfif', 0, 'In Stock', '2022-02-04 10:27:56', NULL),
(110, 16, 118, 'Accord Sounds', 'Accord Sounds', 7000, 0, 'Address: Samarpan Soc, Opp GIDC, Vadsar Road, Vadodara, Gujarat 390010<br>', 'accord.jpg', 'accord.jpg', 'accord.jpg', 0, 'In Stock', '2022-02-04 10:28:41', NULL),
(111, 17, 97, 'DD Makeup', 'DD Makeup', 10000, 0, 'Address: B-604, CLEBRITY LUXURIA Nr Sterling bio tech company, Gujarat 390012<br>', 'dd1.jpg', 'dd1.jpg', 'dd1.jpg', 0, 'In Stock', '2022-02-04 10:29:49', NULL),
(112, 17, 98, 'Blush n Blow', 'Blush n Blow', 8000, 0, 'Address:&nbsp; Radhe Flats, Near GMERS Medical College, Vadodara, Gujarat 390021<br>', 'bb3.jpg', 'bb3.jpg', 'bb3.jpg', 0, 'In Stock', '2022-02-04 10:30:32', NULL),
(113, 17, 99, 'Makeup Artist', 'Makeup Artist', 12000, 0, 'Address: A/27,Pancham park Society, Maneja,Vadodara,Gujarat 390013<br>', 'ss1.jpg', 'ss1.jpg', 'ss1.jpg', 0, 'In Stock', '2022-02-04 10:31:20', NULL),
(114, 17, 100, 'Parul Beauty Care', 'Parul Beauty Care', 25000, 0, 'Address: A/201, 2nd Floor, Nilkanth Residency, Nr Patcon House, 80 Feet Rd, Vivekanand Wadi, Anand, Gujarat 388001<br>', 'pp1.jpg', 'pp1.jpg', 'pp1.jpg', 0, 'In Stock', '2022-02-04 10:32:25', NULL),
(115, 17, 101, 'Brides by Bindiya', 'Brides by Bindiya', 15000, 0, 'Address: Shop No9 Ambe Avenue, opp. Ambaji Temple, Mandvi, Vadodara, Gujarat 390001<br>', 'bb1.jpg', 'bb1.jpg', 'bb1.jpg', 0, 'In Stock', '2022-02-04 10:33:08', NULL),
(116, 17, 102, 'Beyound Beauty', 'Beyound Beauty', 10000, 0, 'Address: shop No. 108/A, ananta trendz, near narayan garden, new alkapuri, gotri, Vadodara, Gujarat 390021<br>', 'bb2.jpg', 'bb2.jpg', 'bb2.jpg', 0, 'In Stock', '2022-02-04 10:33:54', NULL),
(117, 17, 103, 'VEE Glow Beauty', 'VEE Glow Beauty', 7000, 0, 'Address:&nbsp; FF 106, Ajwa Rd, Vadodara, Gujarat 390019&nbsp;<br>', 'vv1.jpg', 'vv1.jpg', 'vv1.jpg', 0, 'In Stock', '2022-02-04 10:34:43', NULL),
(118, 17, 104, 'Murtis Beauty Salon', 'Murtis Beauty Salon', 10000, 0, 'Address:&nbsp; Shashwat Residency,4,Tulsidham to GIDC Road,Manjalpur,Vadodara-390011<br>', 'mm1.jpg', 'mm1.jpg', 'mm1.jpg', 0, 'In Stock', '2022-02-04 10:35:42', NULL),
(119, 17, 105, 'Sapana Beauty', 'Sapana Beauty', 15000, 0, 'Address: A1 Shrusti Society, Keya Motors Ln, TP 13,Vadodara,Gujarat 390024<br>', 'ss3.jpg', 'ss3.jpg', 'ss3.jpg', 0, 'In Stock', '2022-02-04 10:36:29', NULL),
(120, 18, 106, 'Oceano Dance World', 'Oceano Dance World', 3500, 0, 'Address: Aura Pre School, 11 Yatrika Society, opp. Boys Hostel, near Ayyappa Ground, New Sama, Vadodara, Gujarat 390024<br>', '123.jpg', '123.jpg', '123.jpg', 0, 'In Stock', '2022-02-04 10:37:29', NULL),
(121, 18, 107, 'KingLeo Academy', 'KingLeo Academy', 6500, 0, 'Address: B-304, Keshav, Near Jayratna, Beside Reliance Petrol Pump, R.V.Desai Road, Vadodara, Gujarat 390001<br>', '456.png', '456.png', '456.png', 0, 'In Stock', '2022-02-04 10:38:15', NULL),
(122, 18, 108, 'Om Dance Crew', 'Om Dance Crew', 4500, 0, 'Address: FF-18,Shreeji Ashray Complex Near Amardeep Homes ,Karelibagh, Vadodara, Gujarat 390019<br>', '11.jpg', '11.jpg', '11.jpg', 0, 'In Stock', '2022-02-04 10:38:59', NULL),
(123, 18, 109, 'Misty Dance Studio', 'Misty Dance Studio', 7500, 0, 'Address: FF 7 Aditya Avenue, NR. Mahavir Hall, Ajwa Road, Ahinsha Circle, Vadodara, Gujarat 390019<br>', '22.png', '22.png', '22.png', 0, 'In Stock', '2022-02-04 10:39:42', NULL),
(124, 18, 110, 'Wow dance & events', 'Wow dance & events', 5500, 0, 'Address:&nbsp; F-17,18 Ratnam Heights 2, New VIP Rd, near vaikhunth-2, Khodiyar Nagar, Vadodara, Gujarat 390022<br>', '33.png', '33.png', '33.png', 0, 'In Stock', '2022-02-04 10:40:33', NULL),
(125, 18, 111, 'Universal  Academy', 'Universal  Academy', 5000, 0, 'Address: Basement, Yash Raj Complex, Gotri Road, near Union Bank, Vadodara, Gujarat 390021<br>', '55.jpg', '55.jpg', '55.jpg', 0, 'In Stock', '2022-02-04 10:41:25', NULL),
(126, 18, 112, 'NIK Dance Studio', 'NIK Dance Studio', 2500, 0, '<span style=\"font-size: 13px;\">Address:&nbsp; E/30 Shankar Park Soc Nr Ravipark Crossing, Tarsali, Vadodara, Gujarat 390009</span><br>', '66.png', '66.png', '66.png', 0, 'In Stock', '2022-02-04 10:42:06', NULL),
(127, 18, 113, 'Pace Creators Dance', 'Pace Creators Dance', 7500, 0, '<span style=\"font-size: 13px;\">Address: 217, 2nd Floor, Pujer Complex, New IPCL Road, Subhanpura, Vadodara, Gujarat 390023</span><br>', '77.jpg', '77.jpg', '77.jpg', 0, 'In Stock', '2022-02-04 10:42:49', NULL),
(128, 18, 114, 'Dream Academy', 'Dream Academy', 7000, 0, '<span style=\"font-size: 13px;\">Address:&nbsp; FF-14, Nilkhant Complex, Tarsali Rd, opp. UMA vidiyale school, Tarsali, Vadodara, Gujarat 390009</span><br>', '88.jpg', '88.jpg', '88.jpg', 0, 'In Stock', '2022-02-04 10:43:27', NULL),
(129, 13, 70, 'Shilpa Cake Zone', 'Shilpa Cake Zone', 499, 0, 'Address: B6/502, Samanvay Saptarshi, Old Mega More Campus, Nr. Monalisa, Manjalpur, Vadodara, Gujarat 390011<br>', 'shilpa.jpg', 'shilpa.jpg', 'shilpa.jpg', 0, 'In Stock', '2022-02-04 10:46:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(2, 4, 'Led Television', '2017-01-26 16:24:52', '26-01-2017 11:03:40 PM'),
(3, 4, 'Television', '2017-01-26 16:29:09', ''),
(4, 4, 'Mobiles', '2017-01-30 16:55:48', ''),
(5, 4, 'Mobile Accessories', '2017-02-04 04:12:40', ''),
(6, 4, 'Laptops', '2017-02-04 04:13:00', ''),
(7, 4, 'Computers', '2017-02-04 04:13:27', ''),
(8, 3, 'Comics', '2017-02-04 04:13:54', ''),
(9, 5, 'Beds', '2017-02-04 04:36:45', ''),
(10, 5, 'Sofas', '2017-02-04 04:37:02', ''),
(11, 5, 'Dining Tables', '2017-02-04 04:37:51', ''),
(12, 6, 'Men Footwears', '2017-03-10 20:12:59', ''),
(13, 7, 'Memories Studio', '2022-02-04 05:48:49', NULL),
(14, 7, 'Visual Stories', '2022-02-04 06:09:11', NULL),
(15, 7, 'Avsar studio', '2022-02-04 06:09:31', NULL),
(16, 7, 'Momenttra', '2022-02-04 06:09:46', NULL),
(17, 7, 'Memory Bucket', '2022-02-04 06:10:04', NULL),
(18, 7, 'Impress Digital Studio', '2022-02-04 06:10:27', NULL),
(19, 7, 'Shivam Joshi', '2022-02-04 06:10:43', NULL),
(20, 7, 'Bride Emotions', '2022-02-04 06:10:59', NULL),
(21, 7, 'Happy Studio', '2022-02-04 06:11:14', NULL),
(22, 8, 'Vraj Caterers', '2022-02-04 07:08:22', '04-02-2022 02:09:21 PM'),
(23, 8, 'Zaika Cateres', '2022-02-04 07:09:00', NULL),
(24, 8, 'Yash caterers', '2022-02-04 07:09:17', NULL),
(25, 8, 'Hash Catering', '2022-02-04 07:09:42', NULL),
(26, 8, 'Rudra Caterers', '2022-02-04 07:09:53', NULL),
(27, 8, 'Sai Caterers', '2022-02-04 07:10:25', NULL),
(28, 8, 'Raj Caterers', '2022-02-04 07:10:41', NULL),
(29, 8, 'Preet Caterers', '2022-02-04 07:10:56', NULL),
(30, 8, 'Patel Catering', '2022-02-04 07:11:12', NULL),
(31, 9, 'Visual Stories', '2022-02-04 07:12:04', '04-02-2022 12:42:25 PM'),
(32, 9, 'Avsar Photography studio', '2022-02-04 07:12:54', NULL),
(33, 9, 'Memories Studio', '2022-02-04 07:13:15', NULL),
(34, 9, 'Maa Digital Studio', '2022-02-04 07:13:31', NULL),
(35, 9, 'Memory Bucket', '2022-02-04 07:13:38', NULL),
(36, 9, 'Freezing Moments', '2022-02-04 07:13:53', NULL),
(37, 9, 'Shivam Joshi', '2022-02-04 07:14:07', NULL),
(38, 9, 'Photo Spectrum', '2022-02-04 07:14:34', NULL),
(39, 10, 'Prasang Band', '2022-02-04 07:15:01', NULL),
(40, 10, 'Sayaji Music Band', '2022-02-04 07:15:18', NULL),
(41, 10, 'Sagar Band', '2022-02-04 07:15:27', NULL),
(42, 10, 'Diamond Music Band', '2022-02-04 07:15:46', NULL),
(43, 10, 'Maharaja Music Band', '2022-02-04 07:16:03', NULL),
(44, 10, 'Jankar BAND', '2022-02-04 07:16:21', NULL),
(45, 10, 'Sangam Music Band', '2022-02-04 07:16:53', NULL),
(46, 10, 'Darbar Music Band', '2022-02-04 07:17:15', NULL),
(47, 10, 'Great Royal Music Band', '2022-02-04 07:17:30', NULL),
(48, 11, 'Pradhan Decorators', '2022-02-04 07:18:35', NULL),
(49, 11, 'S.K Decorators', '2022-02-04 07:18:46', NULL),
(50, 11, 'Jalaram Decorators', '2022-02-04 07:19:06', NULL),
(51, 11, 'Amber Decorators Faraskhana', '2022-02-04 07:19:34', NULL),
(52, 11, 'Parvat Decorators', '2022-02-04 07:19:46', NULL),
(53, 11, 'Shiv Farashana ', '2022-02-04 07:20:16', NULL),
(54, 11, 'Shiv Farashana  Decorators', '2022-02-04 07:20:38', NULL),
(55, 11, 'Prajapati Decorators', '2022-02-04 07:20:53', NULL),
(56, 11, 'Avsar Decorators', '2022-02-04 07:21:04', NULL),
(57, 11, 'Arunodaya Decorators', '2022-02-04 07:21:16', NULL),
(58, 12, 'Teju mirror magic', '2022-02-04 07:22:20', NULL),
(59, 12, 'Magician Pappu', '2022-02-04 07:22:33', NULL),
(60, 12, 'Jadu Mantar', '2022-02-04 07:22:46', NULL),
(61, 12, 'Black Magic Expert', '2022-02-04 07:23:14', NULL),
(62, 12, 'Magician R.D', '2022-02-04 07:23:34', NULL),
(63, 12, 'Oven Magic', '2022-02-04 07:23:48', NULL),
(64, 13, 'Honeybee Cake', '2022-02-04 07:24:18', NULL),
(65, 13, 'Rose Cakes', '2022-02-04 07:24:29', NULL),
(66, 13, 'Ganache Patisserie', '2022-02-04 07:24:48', NULL),
(67, 13, 'Monginis Cake', '2022-02-04 07:24:58', NULL),
(68, 13, 'Whisk With Nim', '2022-02-04 07:25:16', NULL),
(69, 13, 'The Cake Love', '2022-02-04 07:25:29', NULL),
(70, 13, 'Shilpa Cake Zone', '2022-02-04 07:25:59', NULL),
(71, 13, 'M.M Cake Gallery', '2022-02-04 07:26:14', NULL),
(72, 13, 'Papa Cake Live', '2022-02-04 07:26:27', NULL),
(73, 14, 'Khodal Florist', '2022-02-04 07:27:03', NULL),
(74, 14, 'Sai Florist', '2022-02-04 07:27:11', NULL),
(75, 14, 'Malhar Florist', '2022-02-04 07:27:22', NULL),
(76, 14, 'Bagicha Florist', '2022-02-04 07:27:32', NULL),
(77, 14, 'JK Florist', '2022-02-04 07:27:40', NULL),
(78, 14, 'Asson Florist', '2022-02-04 07:27:56', NULL),
(79, 14, 'Baroda Florist', '2022-02-04 07:28:10', NULL),
(80, 14, 'Sandhyan Florist', '2022-02-04 07:28:22', NULL),
(81, 14, 'Decent Florist', '2022-02-04 07:28:35', NULL),
(82, 15, 'Cold House Alkapuri', '2022-02-04 07:29:11', NULL),
(83, 15, 'Xomox Sun Bar Ltd', '2022-02-04 07:29:40', NULL),
(84, 15, 'Saurashtra Cold Drinks', '2022-02-04 07:30:01', NULL),
(85, 15, 'Rajlaxmi Cold Drinks', '2022-02-04 07:30:17', NULL),
(86, 15, 'Bogo Cafe', '2022-02-04 07:30:26', NULL),
(87, 15, 'Juice Bar', '2022-02-04 07:30:36', NULL),
(88, 15, 'Happy Cold Drinks House', '2022-02-04 07:30:57', NULL),
(89, 15, 'Super Fountain Soda', '2022-02-04 07:31:09', NULL),
(90, 15, 'Shiv Shakti Cold Drinks', '2022-02-04 07:31:24', NULL),
(91, 16, 'Vinayak Sound', '2022-02-04 07:31:55', NULL),
(92, 16, 'Blackone', '2022-02-04 07:32:02', NULL),
(93, 16, 'DJ Sheth', '2022-02-04 07:32:13', NULL),
(94, 16, 'MB Sounds & Lights', '2022-02-04 07:32:30', NULL),
(95, 16, 'DJ War Brother', '2022-02-04 07:32:45', NULL),
(96, 16, 'DJ Meet Sound', '2022-02-04 07:32:56', NULL),
(97, 17, 'DD Makeup', '2022-02-04 07:33:34', NULL),
(98, 17, 'Blush n Blow', '2022-02-04 07:33:47', NULL),
(99, 17, 'Makeup Arist', '2022-02-04 07:33:56', NULL),
(100, 17, 'Parul Beauty Care', '2022-02-04 07:34:18', NULL),
(101, 17, 'Brides Bindiya', '2022-02-04 07:34:33', NULL),
(102, 17, 'Beyound Beauty', '2022-02-04 07:34:52', NULL),
(103, 17, 'Vee Glow Beauty', '2022-02-04 07:35:12', NULL),
(104, 17, 'Murtis Beauty Salon', '2022-02-04 07:35:27', NULL),
(105, 17, 'Sapana Beauty', '2022-02-04 07:35:40', NULL),
(106, 18, 'Oceano Dance World', '2022-02-04 08:33:03', NULL),
(107, 18, 'Kingleo Academy', '2022-02-04 08:33:29', NULL),
(108, 18, 'Om Dance Crew', '2022-02-04 08:33:42', NULL),
(109, 18, 'Misty Dance Studio', '2022-02-04 08:34:02', NULL),
(110, 18, 'Wow Dance &Events', '2022-02-04 08:34:42', NULL),
(111, 18, 'Universal Academy', '2022-02-04 08:35:22', NULL),
(112, 18, 'Nik Dance Studio', '2022-02-04 08:35:35', NULL),
(113, 18, 'Pace Creators Dance', '2022-02-04 08:35:51', NULL),
(114, 18, 'Dream Academy', '2022-02-04 08:36:04', NULL),
(115, 9, 'Happy Studio', '2022-02-04 08:58:12', NULL),
(116, 16, 'DJ VED', '2022-02-04 10:25:34', NULL),
(117, 16, 'DANNY SOUND', '2022-02-04 10:25:45', NULL),
(118, 16, 'Accord Sounds', '2022-02-04 10:25:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(2, 'Amit ', 'amit@gmail.com', 8285703355, '5c428d8875d2948607f3e3fe134d71b4', '', '', '', 0, '', '', '', 0, '2017-03-15 17:21:22', ''),
(3, 'hg', 'hgfhgf@gmass.com', 1121312312, '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', 0, '', '', '', 0, '2018-04-29 09:30:32', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `userId`, `productId`, `postingDate`) VALUES
(1, 1, 0, '2017-02-27 18:53:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productreviews`
--
ALTER TABLE `productreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productreviews`
--
ALTER TABLE `productreviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;