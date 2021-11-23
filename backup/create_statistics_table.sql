-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: db
-- 生成日時: 2021 年 11 月 23 日 08:06
-- サーバのバージョン： 5.7.35
-- PHP のバージョン: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `wordpress_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `statistics`
--

CREATE TABLE `statistics` (
  `id` int(16) NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `value` int(128) NOT NULL,
  `options` text NOT NULL,
  `remark` text CHARACTER SET utf8mb4 NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `statistics`
--

INSERT INTO `statistics` (`id`, `name`, `value`, `options`, `remark`, `create_at`, `update_at`) VALUES
(1, 'access', 1729, '', '簡易アクセスカウント', '2021-10-24', '2021-10-24'),
(2, 'posts', 23, '', '記事数', '2021-10-25', '2021-10-25');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
