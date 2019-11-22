-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 01:16 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_details`
--

CREATE TABLE `add_details` (
  `car_code` varchar(100) NOT NULL,
  `listing_title` varchar(200) NOT NULL,
  `engine_type` varchar(100) NOT NULL,
  `cylinder` varchar(100) NOT NULL,
  `engine_size` double NOT NULL,
  `fuel_capacity` varchar(100) NOT NULL,
  `wheel_base` double NOT NULL,
  `overall_length` double NOT NULL,
  `width` double NOT NULL,
  `height` double NOT NULL,
  `curb_weight` double NOT NULL,
  `leg_room` varchar(100) NOT NULL,
  `head_room` varchar(100) NOT NULL,
  `seating_capacity` varchar(100) NOT NULL,
  `features` varchar(400) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_details`
--

INSERT INTO `add_details` (`car_code`, `listing_title`, `engine_type`, `cylinder`, `engine_size`, `fuel_capacity`, `wheel_base`, `overall_length`, `width`, `height`, `curb_weight`, `leg_room`, `head_room`, `seating_capacity`, `features`, `description`, `status`) VALUES
('B_3G_3H_34_39_3', 'brand new', 'gas', '6', 5, 'not avaliable', 102.3, 182.1, 30, 23, 3838, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks ,', 'The interior of the new Boxster delivers exactly what the exterior promisesâ€”a light, uncluttered, and defined design, existing to fulfill one single aim: the perfect drive.\r\n\r\nThe entire conceptâ€”from the power and contour to the driverâ€™s visionâ€”are all drawn in the direction of travel.\r\nThe Boxster driverâ€™s concentration is kept purely on the road, thanks to the intelligent operating concept and the logical arrangement of the controls. The elevated center console cocoons the driver and reduces the\r\n\r\ndistance from the steering wheel to the shift lever for fast and ergonomic gearshifts. Itâ€™s just one of many ways that Porsche transfers its experience from the racetrack to the road.\r\n\r\nThe door styling is similarly dynamic. The door pulls mirror the lines of the center console and blend seamlessly into the overall design. The door storage compartments are sweeping and practical.', 1),
('L_2a_2b_2k_26_2', 'brand new', 'gas', '6', 5, '50', 102.3, 182.1, 30, 23, 3838, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks', 'It may be, as has been suggested, that the Audi A5 is a polarizing vehicle. Then again, magnets are like that. Of course, we know what draws people in.\r\n\r\nThe unmistakable look, to start, but the power too. LED daytime running lights introduce inviting illumination, and the tapered SingleframeÂ® grille adds a bold sense of daring and an iconic look to the front fascia.\r\n\r\nBut one gathers the pos- sibility of more, such as the power distributed by the impressive 2.0-liter turbocharged TFSIÂ® engine and optimized by the quattroÂ® all-wheel drive system.\r\n\r\nThe details tell the storyâ€”sharpened design lines streamline the body, continually pushing the envelope of style while embracing the spirit of our Audi SportÂ® heritage. In short, the more we tried to thrill onlookers, the greater thrill we experienced ourselves.', 1),
('N_1P_1R_1i_1m_1', 'ready for summer', 'gas', '6', 5, 'not avaliable', 102.3, 182.1, 30, 23, 3838, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks', 'It may be, as has been suggested, that the Audi A5 is a polarizing vehicle. Then again, magnets are like that. Of course, we know what draws people in.\r\n\r\nThe unmistakable look, to start, but the power too. LED daytime running lights introduce inviting illumination, and the tapered SingleframeÂ® grille adds a bold sense of daring and an iconic look to the front fascia.\r\n\r\nBut one gathers the pos- sibility of more, such as the power distributed by the impressive 2.0-liter turbocharged TFSIÂ® engine and optimized by the quattroÂ® all-wheel drive system.\r\n\r\nThe details tell the storyâ€”sharpened design lines streamline the body, continually pushing the envelope of style while embracing the spirit of our Audi SportÂ® heritage. In short, the more we tried to thrill onlookers, the greater thrill we experienced ourselves.', 1),
('G_4L_4i_42_48_4', 'one owner only', 'gas', '8', 4, 'not avaliable', 102.3, 190.5, 34, 25, 3838, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks ,', 'The interior of the new Boxster delivers exactly what the exterior promisesâ€”a light, uncluttered, and defined design, existing to fulfill one single aim: the perfect drive.\r\n\r\nThe entire conceptâ€”from the power and contour to the driverâ€™s visionâ€”are all drawn in the direction of travel.\r\nThe Boxster driverâ€™s concentration is kept purely on the road, thanks to the intelligent operating concept and the logical arrangement of the controls. The elevated center console cocoons the driver and reduces the\r\n\r\ndistance from the steering wheel to the shift lever for fast and ergonomic gearshifts. Itâ€™s just one of many ways that Porsche transfers its experience from the racetrack to the road.\r\n\r\nThe door styling is similarly dynamic. The door pulls mirror the lines of the center console and blend seamlessly into the overall design. The door storage compartments are sweeping and practical.', 1),
('F_5G_5f_51_54_5', 'Low Miles', 'petrol', '0', 4, '50', 120.4, 190.5, 30, 23, 3838, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks', 'No detail overlooked. From its signature LED lighting to its ingenious, lightweight aluminum doors to its remarkably powerful engines, every gram of material in the CTS had to justify its existence.\r\nCreated in turn is a beautifully crafted vehicle that stands out among the worldâ€™s nest on the road.\r\n\r\nLess is more powerful. As the lightest Rear-Wheel-Drive car in its class, CTS is 240 pounds lighter than the previous-generation CTS.\r\nTo validate its credentials, we pushed CTS to its limit on Germanyâ€™s famed NÃ¼rburgring track.\r\nThen we brought it back home to ne-tune its dynamic ride. The outcome of such a tough regimen? Impressive acceleration, precise handling and brake feel worthy of a title.', 1),
('D_6E_6Q_6e_6v_6', 'Top of the line', 'gas', '6', 3, 'not avaliable', 102.3, 182.1, 30, 23, 3838, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks', 'The heart of an SL 63 or SL 65 AMG is its engine â€” a work of modern art crafted by the hands of its own master engine builder, and crowned by a plaque bearing his signature.\r\n\r\nThe soul of AMG traces to an old German mill in1967, where two former Mercedes-Benz engineers set out to handcraft champion racecars.\r\n\r\nSuccess on the track led them to apply their performance pedigree and â€œOne man, one engineâ€ principle to streetgoing Mercedes-Benz models. Decades later, virtually every facet of design, development and assembly â€” from transmissions, suspensions and brakes to distinctive cockpit appointments â€” remains a seamless alignment of hands-on experience and high-tech engineering.\r\n\r\nThe result is an automobile that can satisfy both the highest demands of driving and the deepest desires of its driver.', 1),
('p_7q_7r_71_72_7', 'ready for summer', 'gas', '6', 3, 'not avaliable', 120.4, 182.1, 30, 23, 2133, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks', 'aaa', 1),
('K_8c_8x_80_82_8', 'Low Miles', 'gas', '6', 3, 'not avaliable', 102.3, 182.1, 30, 23, 2133, 'n/r', '39.1', '4/4', '3rd rear seat , 4WD/AWD , ABS breaks', 'vvvv', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `email_id` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile_no` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`email_id`, `password`, `mobile_no`) VALUES
('mahendrariyad88@gmail.com', 'Riyad123', '9694795031');

-- --------------------------------------------------------

--
-- Table structure for table `car_short_details`
--

CREATE TABLE `car_short_details` (
  `sn` int(11) NOT NULL,
  `car_code` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `car_name` varchar(200) NOT NULL,
  `car_modal` varchar(100) NOT NULL,
  `dollar` varchar(200) NOT NULL,
  `miles` varchar(200) NOT NULL,
  `modal` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `drive` varchar(100) NOT NULL,
  `transmission` varchar(100) NOT NULL,
  `exterior` varchar(100) NOT NULL,
  `inerior` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `vin` varchar(100) NOT NULL,
  `user_code` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_short_details`
--

INSERT INTO `car_short_details` (`sn`, `car_code`, `year`, `car_name`, `car_modal`, `dollar`, `miles`, `modal`, `state`, `city`, `drive`, `transmission`, `exterior`, `inerior`, `stock`, `vin`, `user_code`, `status`) VALUES
(3, 'B_3G_3H_34_39_3', '2018', 'mercedez benz', 'sl-550', '70000', '2000', 'old', 'Texas', 'Austin', 'sports cars', 'automatic', 'white', 'brown', '250', 'aaqq12z', 'x_', 1),
(2, 'L_2a_2b_2k_26_2', '2017', 'acura', 'mdx', '56000', '1000', 'new', 'Tennessee', 'Nashville', 'luxury vehicles', 'automatic', 'gray', 'brown', '200', 'aaa123aa1', 'x_', 1),
(1, 'N_1P_1R_1i_1m_1', '2016', 'audi', 'a5', '46000', '200', 'new', 'Tennessee', 'Oak Ridge', 'luxury vehicles', 'automatic', 'white', 'black', '250', 'aaa123aa', 'x_', 1),
(4, 'G_4L_4i_42_48_4', '2015', 'nissan', '370z', '60000', '0', 'new', 'Texas', 'San Antonio', 'sedans and couples', 'semi-auto', 'red', 'black', '300', 'aaa123aaa', 'x_', 1),
(5, 'F_5G_5f_51_54_5', '2014', 'chevrolet', 'equinex', '120000', '0', 'new', 'Virginia', ' Richmond', 'diesel engines', 'manual', 'blue', 'black', '200', 'aaqq12x', 'x_', 1),
(6, 'D_6E_6Q_6e_6v_6', '2018', 'mercedez benz', 'sl-770', '64,500', '0', 'new', ' Tennessee', 'Oak Ridge', 'sports utilities', 'automatic', 'white', 'brown', '250', 'aaqq122', 'x_', 1),
(7, 'p_7q_7r_71_72_7', '2015', 'honda', 'accord', '46000', '0', 'new', 'georgia', 'atlanta', 'sedans and couples', 'other', 'red', 'brown', '250', 'sy232433333333333', 'C_2Z_2a_2l_28_2', 1),
(8, 'K_8c_8x_80_82_8', '2018', 'bmw', 'x6', '56000', '1000', 'old', 'new jersey', 'atlantic', 'diesel engines', 'manual', 'black', 'brown', '250', 'esee2334', 'C_2Z_2a_2l_28_2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `email_sender` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` double NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`email_sender`, `name`, `phone`, `message`) VALUES
('qq@gmail.com', 'mahendra', 11111111, '  cdvjnsdv uehhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhr'),
('qq@gmail.com', 'mahendra', 2333333333333, '  vhsf gyefwooooooooooooooooooooooooooooo fyoyoooooooy yf');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `car_code` varchar(200) NOT NULL,
  `user_code` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourite`
--

INSERT INTO `favourite` (`car_code`, `user_code`) VALUES
('K_8c_8x_80_82_8', 'C_2Z_2a_2l_28_2'),
('N_1P_1R_1i_1m_1', 'C_2Z_2a_2l_28_2'),
('L_2a_2b_2k_26_2', 'C_2Z_2a_2l_28_2');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `email_reciver` varchar(400) NOT NULL,
  `email_sender` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` double NOT NULL,
  `comment` varchar(500) NOT NULL,
  `car_code` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`email_reciver`, `email_sender`, `name`, `phone`, `comment`, `car_code`) VALUES
('x_', 'qq@gmail.com', 'mahendra', 1111111111, '	I would like to request more information about your 2018 sl-550 mercedez benz with Stock Number #250	', 'B_3G_3H_34_39_3'),
('x_', 'qq@gmail.com', 'mahendra', 111111111111, '	I would like to request more information about your 2018 sl-550 mercedez benz with Stock Number #250	', 'B_3G_3H_34_39_3'),
('C_2Z_2a_2l_28_2', 'aa@gmail.com', 'mahendra', 222222222222, '	I would like to request more information about your 2018 x6 bmw with Stock Number #250	', 'K_8c_8x_80_82_8'),
('x_', 'qq@gmail.com', 'mahendra', 111111111111, '	I would like to request more information about your 2018 sl-550 mercedez benz with Stock Number #250	', 'B_3G_3H_34_39_3'),
('x_', 'qq@gmail.com', 'mahendra', 11111111, '	I would like to request more information about your 2018 sl-550 mercedez benz with Stock Number #250	', 'B_3G_3H_34_39_3'),
('x_', 'qq@gmail.com', 'mahendra', 111111111, '	I would like to request more information about your 2018 sl-550 mercedez benz with Stock Number #250	', 'B_3G_3H_34_39_3');

-- --------------------------------------------------------

--
-- Table structure for table `new_car`
--

CREATE TABLE `new_car` (
  `sn` int(11) NOT NULL,
  `car_code` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_car`
--

INSERT INTO `new_car` (`sn`, `car_code`, `company`) VALUES
(1, 'B_1C_1O_1b_1t_1', 'gysd'),
(2, 'D_2K_2L_2O_2f_2', 'shfd');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state`) VALUES
('Rajasthan'),
('Gujarat'),
('Bihar'),
('Goa'),
('Assam');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `sn` int(11) NOT NULL,
  `user_code` varchar(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`sn`, `user_code`, `user_name`, `email_id`, `password`, `status`) VALUES
(1, 'P_1r_1x_1z_12_1', 'mahendra', 'aa@gmail.com', '1234', 0),
(2, 'C_2Z_2a_2l_28_2', 'mahendra', 'qq@gmail.com', '1', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
