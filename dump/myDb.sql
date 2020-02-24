SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restcountries`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alpha2code` char(2) NOT NULL,
  `region` varchar(10) NOT NULL,
  `capital` varchar(200) NOT NULL,
  `callingcodes` varchar(5) NOT NULL,
  `timezones` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `languages` varchar(500) NOT NULL,
  `currencies` varchar(40) NOT NULL,
  `flag` varchar(200) NOT NULL,
  `index` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`name`, `alpha2code`, `region`, `capital`, `callingcodes`, `timezones`, `languages`, `currencies`, `flag`, `index`) VALUES
('Singapore', 'SG', 'Asia', 'Singapore', '65', '\"UTC+08:00\"', 'English;Malay;Tamil;Chinese;', 'BND;SGD;', 'https://restcountries.eu/data/sgp.svg', 1),
('United Kingdom of Great Britain and Northern Ireland', 'GB', 'Europe', 'London', '44', '\"UTC-08:00\",\"UTC-05:00\",\"UTC-04:00\",\"UTC-03:00\",\"UTC-02:00\",\"UTC\",\"UTC+01:00\",\"UTC+02:00\",\"UTC+06:00\"', 'English', 'GBP;', 'https://restcountries.eu/data/gbr.svg', 2),
('United States of America', 'US', 'Americas', 'Washington, D.C.', '1', '\"UTC-12:00\",\"UTC-11:00\",\"UTC-10:00\",\"UTC-09:00\",\"UTC-08:00\",\"UTC-07:00\",\"UTC-06:00\",\"UTC-05:00\",\"UTC-04:00\",\"UTC+10:00\",\"UTC+12:00\"', 'English', 'USD;', 'https://restcountries.eu/data/usa.svg', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD UNIQUE KEY `index` (`index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `index` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
