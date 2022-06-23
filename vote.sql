-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-06-23 02:52:14
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `vote`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `acc` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名稱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `log`
--

CREATE TABLE `log` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `user_id` int(11) UNSIGNED NOT NULL COMMENT '投票者',
  `subject_id` int(11) UNSIGNED NOT NULL COMMENT '投票項目',
  `option_id` int(11) UNSIGNED NOT NULL COMMENT '選項',
  `vote_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '投票時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL COMMENT '序號',
  `option` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '選項描述',
  `subject_id` int(11) NOT NULL COMMENT '主題',
  `total` int(11) NOT NULL DEFAULT 0 COMMENT '投票人數統計'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `options`
--

INSERT INTO `options` (`id`, `option`, `subject_id`, `total`) VALUES
(1, '美而美', 2, 0),
(2, 'Qbuger', 2, 0),
(3, '麥當勞', 2, 0),
(4, 'MOS', 2, 0),
(5, '豆漿店', 2, 0),
(6, '大腸麵線', 2, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `subject` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '主題描述',
  `type_id` int(11) NOT NULL COMMENT '主題類別',
  `multiple` tinyint(1) NOT NULL DEFAULT 0 COMMENT '單/複選',
  `mulit_limit` tinyint(4) NOT NULL DEFAULT 1 COMMENT '單/複選項目數',
  `start` date NOT NULL COMMENT '開始時間',
  `end` date NOT NULL COMMENT '結束時間',
  `total` int(11) UNSIGNED NOT NULL DEFAULT 0 COMMENT '投票人數統計'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `type_id`, `multiple`, `mulit_limit`, `start`, `end`, `total`) VALUES
(1, '午餐吃什麼', 1, 0, 1, '2022-06-22', '2022-07-02', 0),
(2, '今天早餐吃什麼', 1, 0, 1, '2022-06-22', '2022-07-02', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `type`
--

CREATE TABLE `type` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類名稱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '序號',
  `acc` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名稱',
  `birthday` date NOT NULL COMMENT '生日',
  `addr` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '住址',
  `email` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passnote` int(36) NOT NULL COMMENT '密碼提示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `acc`, `pw`, `name`, `birthday`, `addr`, `email`, `passnote`) VALUES
(2, 'hollie', '4321', 'hollie', '1989-10-13', '台北市', 'chaohongling1013@gmail.com', 0),
(3, 'mack', '1234', '阿明', '2000-02-03', '台北市', 'chaohongling1013@gmail.com', 0),
(4, 'baby', '4321', 'baby', '2000-08-11', '台北市', 'tsubasababy1013@gmail.com', 1234),
(5, 'mary', '81dc9bdb52d04dc2', 'mary', '1993-02-09', '新北市', 'tsubasababy1013@gmail.com', 0),
(6, 'aaaa', '65ba841e01d6db7733e90a5b7f9e6f80', 'cccc', '1234-12-31', '123151', 'tsubasababy1013@gmail.com', 23415);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
