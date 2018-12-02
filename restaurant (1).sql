-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 05:51 AM
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(10) NOT NULL,
  `admin_fname` varchar(100) NOT NULL,
  `admin_lname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `user_type` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_fname`, `admin_lname`, `username`, `password`, `email`, `mobile`, `user_type`) VALUES
(1, 'admin', 'lastname', 'admin', 'admin', 'admin@gmail.com', 777588654, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_no` int(11) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_amount` int(200) NOT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(100) NOT NULL,
  `cus_fname` varchar(30) NOT NULL,
  `cus_lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_fname`, `cus_lname`, `username`, `password`, `nic`, `country`, `mobile`, `email`, `dob`, `status`) VALUES
(5, 'archchana', 'sivarajah', 'archchu', 'badulla18', '956771544v', 'SriLanka', 756767882, 'archchu95@gmail.com', '0000-00-00', 0),
(7, 'roch', 'danistan', 'roch', 'badulla23', '954546672v', 'srilanka', 756456777, 'roch23@gmail.com', '0000-00-00', 1),
(6, 'shiyani', 'kirupa', 'shiyani', 'colombo12', '956784948v', 'australia', 756788778, 'shiyani56@gmail.com', '0000-00-00', 1),
(8, 'theepak', 'ghhgjh', 'bjhv', 'badulla12', '436457447v', 'gfhgj', 56748, 'vgc', '0000-00-00', 1),
(9, 'theepak', 'ghhgjh', 'bjhv', 'as', '436457447v', 'gfhgj', 56748, 'vgc', '0000-00-00', 1),
(10, 'dnjfk', 'sjdbks', 'archchu', 'badulla12', '3728673v', 'smdcnsl', 276378153, ',nmvlsvn', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_foods`
--

CREATE TABLE `customer_foods` (
  `customer_id` int(100) NOT NULL,
  `food_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `customer_id` int(100) NOT NULL,
  `order_no` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_reservations`
--

CREATE TABLE `customer_reservations` (
  `customer_id` int(100) NOT NULL,
  `reservation_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_tables`
--

CREATE TABLE `customer_tables` (
  `customer_id` int(100) NOT NULL,
  `table_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_staff`
--

CREATE TABLE `delivery_staff` (
  `del_staff_id` int(100) NOT NULL,
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  `address` varchar(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `pri_staff_id` int(100) NOT NULL,
  `admin_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(100) NOT NULL,
  `feedback_msg` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `admin_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(20) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_desc` varchar(500) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `unit_price1` varchar(100) NOT NULL,
  `gallery_link` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `food_name`, `food_desc`, `category_name`, `unit_price1`, `gallery_link`) VALUES
(2, 'Chicken Devilled', 'Sweet, sour, devilishly hot but full of complex flavours. I ate quite a few of these in Sri Lanka and this one just about measures up. It took me quite a few goes to get it right because it’s all about the balance.', 'CHICKEN', '250', ''),
(3, 'Fried Chicken', 'Fried chicken  is a dish consisting of chicken pieces usually from broiler chickens which have been floured or battered and then pan-fried, deep fried, or pressure fried. The breading adds a crisp coating or crust to the exterior of the chicken. What separates fried chicken from other fried forms of chicken is that generally the chicken is cut at the joints, and the bones and skin are left intact. Crisp well-seasoned skin, rendered of excess fat, is a hallmark of well made fried chicken.', 'Chicken', '300', ''),
(4, 'Chicken in lemon sauce', '\r\nLemon chicken is the name of several dishes found in cuisines around the world which include chicken and lemon.In Canadian Chinese cuisine it usually consists of pieces of chicken meat that are sautéed or deep-fried and coated with a thick, sweet lemon-flavored sauce.', 'Chicken', '250', ''),
(5, 'Crispy Chicken', ' fried pieces of boneless chicken which you can dip into a garlic sauce or serve covered in the sauce. Its a simple recipe and one guaranteed to keep the Vampires out of the house during Halloween', 'Chicken', '350', ''),
(6, 'Vegetable fried rice', '\"This dish combines the nutty flavor of brown rice with the fresh taste of bell peppers, baby peas, and other vegetables.\"', 'Fried Rice', '100', ''),
(7, 'Chicken Fried Rice', 'Instead of tough, over-cooked chicken, with the fried rice as an afterthought, the dish was cooked fresh from scratch. The cooking time was literally minutes and the result was delicious. I have created a version that comes very close to the original. It is quick and easy and makes a meal in itself. The rice to be fried is cooked beforehand.', 'Fried Rice', '300', ''),
(8, 'Egg Fried Rice', 'This easy egg fried rice is something that I cook every other week. It’s a no-fuss meal, made with seven key ingredients: rice, eggs, olive oil, onions, frozen vegetables, scallions, and soy sauce (option to add sesame oil). The fried rice is great with my Chinese Garlic Cucumber Salad, Sambal Potatoes, Honey Chili Garlic Shrimp.', 'Fried Rice', '200', ''),
(9, 'Sausages Fried rice', 'Sausage fried rice is a savoury egg fried rice dish that’s quick and easy to make and can be on the table in less than half an hour. We’ve used pouches of express cooked rice which just need heating through for a few minutes. You can add some canned sweetcorn or frozen mixed vegetables to make the dish go further. Serve with extra soy sauce or a drizzle of sweet chilli sauce and some crisp prawn crackers, if liked.', 'Fried Rice', '300', ''),
(10, 'Vegetable Kottu', '. Kottu literally means “chop”. It’s made with flat bread called “Gothamba roti” mixed with meat, spicy gravy, and vegetables.  Kottu is blended together in a heated iron sheet using blunt metal blades. Clashing of metal creates a distinctive sound. This sound and aroma of kottu will invite any passerby to stop and indulge in this mouthwatering meal.', 'Kottu Rotti', '120', ''),
(11, 'Egg Kottu', 'Sri Lankan dish made from godhamba roti (a type of Sri Lankan roti) and vegetables, egg  and spices. The bread is described as similar to the type found in the south Indian kothu parotta and roti canai, with the former dish overall being very similar to the Koththu Rotti. A common dinner dish, kottu has become popular in cities with a significant Sri Lankan diaspora population, such as Toronto and New York City\'s Little Sri Lanka neighborhood.', 'Kottu Rotti', '200', ''),
(12, 'Chicken kottu', 'Chicken Kottu Roti is insanely popular in Sri Lanka! Chopped flatbread mixed and mashed together with chicken and vegetables and lots of aromatic spices, this chicken kottu roti recipe is as delicious as it is comforting, and it also works splendidly as an anti-hangover meal! ', 'Kottu Rotti', '300', ''),
(13, 'Seafood Kottu', 'The roti is normally fried at the beginning of the day, piled into stacks and served as it\'s ordered. When you place an order, the kottu chef will fry and chop the roti with a selection of ingredients you choose. The result is a tasty mixture of salty pieces of fried dough, lightly spiced and extremely comforting.', 'Kottu Rotti', '400', ''),
(14, 'Vegetable Briyani', 'Vegetable Biryani is a bold and flavorful Indian rice dish with bell peppers, peas, carrots and potatoes in a spiced rice dish made with turmeric, garam masala and other warm spices.', 'Briyani', '150', ''),
(15, 'Egg Briyani', 'Hyderabadi Egg Biryani is an authentic egg dum biryani where you get wonderfully fragrant and so fluffy long grain rice with aromatic and spicy onion tomato masala, and boiled and sautéed eggs. This flavourful biryani can also be made in a pressure cooker or in an Instant Pot.', 'Briyani', '200', ''),
(16, 'Chicken Briyani', 'The meat is usually marinated before being cooked, and the most common marinade is yogurt-spiced based as the acid in the yogurt helps to tenderize the meat. It is the layers of spices that give a biryani its complex flavor, and these spices can be whole or ground, or individual or a spice mix (such as garam masala). Herbs and seeds may also be a part of the dish, which is often topped with caramelized onion, dried or fresh fruit, nuts, and fresh herbs.', 'Briyani', '350', ''),
(17, 'Mutton Briyani', 'Hyderabadi Mutton Biryani is an authentic biryani recipe which can be prepared using some easily available ingredients at home. Here’s an easy way to make this dish at home by following some simple steps. Drain and wash the mutton under cold running water. Pat dry and add garam masala, salt, ginger-garlic paste, red chilli powder and two cups of curd.', 'Briyani', '400', ''),
(18, 'Nasi goreng', 'i Goreng | There are as many versions of this Indonesian fried rice as there are cooks. My version has chicken and prawns, and a variety of garnishes.\r\n\r\nShrimp paste and crispy fried shallots can be found in the Asian section of large supermarkets, otherwise in Asian grocery stores. As always, chilli heat can be adjusted to your taste.', 'Nasi goreng', '500', ''),
(555, 'swlm', ' wsded', '5000', '', ''),
(212, 'bkbdk', ' efwef', '', '0', ''),
(789, 'theepag', 'sdcnadlnkdf ', '2', '456', ''),
(790, 'Vegetable fried rice', '\"This dish combines the nutty flavor of brown rice with the fresh taste of bell peppers, baby peas, and other vegetables.\"', 'Fried Rice new ', '100', ''),
(791, 'Mix rice', 'Rice', 'Rice', '400', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_del_date` date NOT NULL,
  `order_del_time` time NOT NULL,
  `ordered_date` date NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `order_no` int(100) NOT NULL,
  `delivery_status` varchar(100) NOT NULL DEFAULT 'Not Accepted',
  `delivery_staff` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_del_date`, `order_del_time`, `ordered_date`, `cus_email`, `admin_id`, `customer_id`, `order_no`, `delivery_status`, `delivery_staff`) VALUES
('2018-11-16', '14:19:00', '2018-11-06', 'theepag@live.com', 3001, 2001, 111, 'Not Accepted', ''),
('2018-11-16', '14:19:00', '2018-11-06', 'theepag@live.com', 3001, 2001, 11, 'Accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_foods`
--

CREATE TABLE `orders_foods` (
  `order_no` int(100) NOT NULL,
  `food_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_bill`
--

CREATE TABLE `order_bill` (
  `order_no` int(100) NOT NULL,
  `bill_no` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rat_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` tinyint(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `reservation_date` date NOT NULL,
  `reserv_status` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `username`, `password`, `nic`, `mobile`, `email`, `type`, `salary`) VALUES
(11, 'Ajith', 'Kumar', 'ajith', 'sadqsd', '22222', 212122, 'sdjsjd', 'primary', '100000'),
(12, 'Theepag', 'Atputhalingam', 'theepag', '12345', '950292873V', 777588654, 'theepag@live.com', 'primary', '10000'),
(13, 'aJ', 'aP', 'USEE', 'jadfss', '014445', 5555, 'TRHAS', 'table_res', '01255'),
(14, 'zxzx', 'AS', 'as', 'as', 'zx', 0, 'As', 'delivery', 'as'),
(15, 'sd', 'sad', '', '', '', 0, '', 'primary', '');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `table_id` int(100) NOT NULL,
  `availability` enum('1','0') NOT NULL DEFAULT '0',
  `no_of_chairs` int(11) NOT NULL,
  `pri_staff_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_reservation_staff`
--

CREATE TABLE `table_reservation_staff` (
  `tab_res_staff_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `activated` enum('yes','no') NOT NULL DEFAULT 'no',
  `pri_staff_id` int(100) NOT NULL,
  `admin_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type` int(100) NOT NULL,
  `user_type_name` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_no` (`order_no`);

--
-- Indexes for table `delivery_staff`
--
ALTER TABLE `delivery_staff`
  ADD PRIMARY KEY (`del_staff_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `pri_staff_id` (`pri_staff_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rat_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`table_id`),
  ADD KEY `pri_staff_id` (`pri_staff_id`);

--
-- Indexes for table `table_reservation_staff`
--
ALTER TABLE `table_reservation_staff`
  ADD PRIMARY KEY (`tab_res_staff_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `pri_staff_id` (`pri_staff_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery_staff`
--
ALTER TABLE `delivery_staff`
  MODIFY `del_staff_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=792;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `table_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_reservation_staff`
--
ALTER TABLE `table_reservation_staff`
  MODIFY `tab_res_staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
