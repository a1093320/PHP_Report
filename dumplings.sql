-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-06 12:15:57
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `dumplings`
--

-- --------------------------------------------------------

--
-- 資料表結構 `car`
--

CREATE TABLE `car` (
  `cNo` int(255) NOT NULL,
  `uName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `utype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `unumber` int(20) NOT NULL,
  `umoney` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `item`
--

CREATE TABLE `item` (
  `uNo` int(255) NOT NULL,
  `uName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Ulocal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Utel` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `utype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `unumber` int(20) NOT NULL,
  `ustate` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `umoney` int(255) NOT NULL,
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `uNo` int(255) NOT NULL,
  `uName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uPwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Uemail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Utel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`uNo`, `uName`, `uPwd`, `Uemail`, `Utel`, `role`) VALUES
(8, 'admin', 'fuckuharry7414', 'a1093320@mail.nuk.edu.tw', '0918709987', 'admin'),
(9, '123', '1234', 'kenlu88858@yahoo.com.tw', '1111', 'user');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`cNo`);

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`uNo`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uNo`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `car`
--
ALTER TABLE `car`
  MODIFY `cNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `item`
--
ALTER TABLE `item`
  MODIFY `uNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `uNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
