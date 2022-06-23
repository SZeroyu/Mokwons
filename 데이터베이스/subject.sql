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
-- 테이블 구조 `subject`
--

CREATE TABLE `subject` (
  `class_semester` char(10) NOT NULL,
  `class_code` int(7) NOT NULL,
  `user_class` int(11) NOT NULL,
  `class_name` char(255) DEFAULT NULL,
  `class_division` int(5) DEFAULT NULL,
  `class_professor` char(255) DEFAULT NULL,
  `class_point` char(5) DEFAULT NULL,
  `class_time` int(5) DEFAULT NULL,
  `t1_start` char(11) NOT NULL,
  `t1_finish` char(11) NOT NULL,
  `t2_start` char(11) NOT NULL,
  `t2_finish` char(11) NOT NULL,
  `day1` char(255) NOT NULL,
  `day2` char(255) NOT NULL,
  `class_room` char(255) DEFAULT NULL,
  `class_type` char(255) DEFAULT NULL,
  `class_complete` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `subject`
--

INSERT INTO `subject` (`class_semester`, `class_code`, `user_class`, `class_name`, `class_division`, `class_professor`, `class_point`, `class_time`, `t1_start`, `t1_finish`, `t2_start`, `t2_finish`, `day1`, `day2`, `class_room`, `class_type`, `class_complete`) VALUES
('2021년 2학기', 1206583, 3, '데이터베이스', 12, '정성재', '3', 4, '14', '18', '', '', '월', '', 'D432', '이론 및 실습', '전필'),
('', 1208883, 3, '데이터통신', 11, '최재명', '3', 3, '14', '14', '11', '12', '월', '화', 'D426', '이론', '전필'),
('', 1507232, 3, '디지털사운드디자인2', 12, '송재은', '2', 3, '13', '16', '', '', '금', '', 'D428', '이론 및 실습', '전공'),
('', 1507693, 3, '디지털음향', 12, '이소미', '3', 3, '12', '15', '', '', '월', '', 'D427', '이론', '전선'),
('', 1580493, 3, '마이크로컴퓨터설계', 11, '유은영', '3', 4, '10', '12', '13', '15', '수', '목', 'D428', '이론 및 실습', '전선'),
('', 1608593, 3, '모바일컴퓨터프로그래밍', 11, '강성윤', '3', 4, '9', '13', '', '', '금', '', 'D432', '이론 및 실습', '전선'),
('', 1608693, 3, '모바일프로그래밍2', 12, '임선주', '3', 4, '9', '11', '9', '11', '목', '금', 'D428', '이론 및 실습', '전선'),
('', 3103683, 3, '운영체제', 11, '정성재', '3', 3, '13', '17', '', '', '수', '', 'D426', '이론', '전필'),
('', 3129193, 3, '웹디자인', 12, '이재웅', '3', 3, '15', '18', '', '', '금', '', 'D428', '이론 및 실습', '전선'),
('', 3190993, 3, '융합미디어응용', 12, '이소미', '3', 3, '9', '12', '', '', '수', '', 'D432', '이론', '전선'),
('', 3258893, 3, '응용xml프로그래밍', 11, '송특섭', '3', 4, '9', '11', '11', '13', '화', '수', 'D428', '이론 및 실습', '전선'),
('', 3336993, 3, '인터넷프로그래밍', 11, '손정혜', '3', 4, '9', '13', '', '', '월', '', 'D432', '이론 및 실습', '전선'),
('', 4085583, 3, '컴퓨터구조학', 11, '김윤호', '3', 3, '17', '18', '11', '13', '수', '목', 'D426', '이론', '전선'),
('', 4101883, 3, '캡스톤디자인1', 11, '박기홍', '3', 4, '13', '15', '11', '13', '화', '목', 'D429', '이론 및 실습', '전필'),
('', 4116283, 3, '컴퓨터알고리즘', 12, '서의현', '3', 3, '10', '11', '9', '11', '화', '목', 'D432', '이론', '전필');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`class_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
