-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-04-13 16:46
-- 서버 버전: 10.4.21-MariaDB
-- PHP 버전: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `project`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `subject_data`
--

CREATE TABLE `subject_data` (
  `user_number` char(10) NOT NULL,
  `class_code` int(7) DEFAULT NULL,
  `class_name` char(255) DEFAULT NULL,
  `user_class` char(11) NOT NULL,
  `class_division` int(5) DEFAULT NULL,
  `class_complete` char(5) NOT NULL,
  `class_point` int(5) DEFAULT NULL,
  `class_time` int(5) DEFAULT NULL,
  `class_room` char(255) DEFAULT NULL,
  `class_professor` char(255) DEFAULT NULL,
  `professor_number` char(255) DEFAULT NULL,
  `class_type` char(255) DEFAULT NULL,
  `apply_date` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `subject_data`
--
ALTER TABLE `subject_data`
  ADD KEY `class_code` (`class_code`),
  ADD KEY `user_number` (`user_number`),
  ADD KEY `class_professor` (`class_professor`);

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `subject_data`
--
ALTER TABLE `subject_data`
  ADD CONSTRAINT `subject_data_ibfk_1` FOREIGN KEY (`user_number`) REFERENCES `professor` (`professor_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
