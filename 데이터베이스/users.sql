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
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `user_number` char(10) NOT NULL,
  `user_password` char(255) NOT NULL,
  `user_name` char(255) DEFAULT NULL,
  `user_birthday` char(255) DEFAULT NULL,
  `user_grade` char(255) NOT NULL,
  `user_status` char(255) NOT NULL,
  `user_affiliation` char(255) NOT NULL,
  `user_major` char(255) NOT NULL,
  `user_minor` char(255) DEFAULT NULL,
  `user_double_major` char(255) DEFAULT NULL,
  `user_admission` char(255) NOT NULL,
  `user_semester` int(11) NOT NULL,
  `user_class` int(11) NOT NULL,
  `user_teacher` char(255) NOT NULL,
  `user_address` char(255) DEFAULT NULL,
  `user_address_number` char(255) DEFAULT NULL,
  `user_pnumber` char(255) DEFAULT NULL,
  `user_hnumber` char(255) DEFAULT NULL,
  `user_email` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`user_number`, `user_password`, `user_name`, `user_birthday`, `user_grade`, `user_status`, `user_affiliation`, `user_major`, `user_minor`, `user_double_major`, `user_admission`, `user_semester`, `user_class`, `user_teacher`, `user_address`, `user_address_number`, `user_pnumber`, `user_hnumber`, `user_email`) VALUES
('1154321', '1234', '홍길동', '19890428', '3.9', '신입생', '신학대학', '가수', '하리', 'ㅇ', '수시', 1, 1, '박기홍', '서울 강남구 선릉로 8', '03900', '01026449798', '01045874326', 'guy@naver.com'),
('1951029', '1234', NULL, NULL, '학생', '재학생', '공과대학', '컴퓨터공학과', '', '', '신입', 5, 3, '강희조', NULL, NULL, NULL, NULL, NULL),
('1951034', '1234', '유은영', '20000218', '학생', '재학생', '공과대학', '컴퓨터공학과', '', '', '신입', 5, 3, '최재명', '경기 오산시 가수로 9', '18125', '01045874326', '0313225687', '1951034@gmail.com'),
('1951040', 'dlthal', '이소미', '20000713', '학생', '재학생', '공과대학', '컴퓨터공학과', '', '', '신입', 6, 4, '박기홍', '대전 서구', '51444', '01012343845', '01012343845', NULL),
('1951048', 'dlatjswn', '임선주', '', '학생', '재학생', '공과대학', '컴퓨터공학과', '', '', '신입', 5, 3, '성경', '', '', '', '', ''),
('admin', '1234', '관리자', NULL, '관리자', '관리자', '기타', '관리자', '관리자', '관리자', '관리자', 0, 0, '관리자', NULL, NULL, NULL, NULL, NULL);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
