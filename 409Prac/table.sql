-- put this into your phpMyAdmin to create the table you will use for the practical!
--
-- Host: localhost
-- Generation Time: Nov 05, 2009 at 02:17 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `dsbics`
--

-- --------------------------------------------------------

--
-- Table structure for table `prac`
--

CREATE TABLE IF NOT EXISTS `prac` (
  `id` int(1) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prac`
--

INSERT INTO `prac` (`id`, `name`, `feedback`) VALUES
(1, 'Dan', 'Cool!');
