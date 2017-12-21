-- 
-- Baza danych: `iBank`
-- 

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `Accounts`
-- 

CREATE TABLE `Accounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Money` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

-- 
-- Struktura tabeli dla  `History`
-- 

CREATE TABLE `History` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `From` int(11) NOT NULL,
  `To` int(11) NOT NULL,
  `Amount` bigint(20) NOT NULL,
  `Date` date NOT NULL,
  `Title` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
INSERT INTO `Accounts` VALUES (0, 'iBank', 'pass', 0) ; 
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;
