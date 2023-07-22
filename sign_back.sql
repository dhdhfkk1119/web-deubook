-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-12-13 12:28
-- 서버 버전: 10.4.24-MariaDB
-- PHP 버전: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sign`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `num` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `name` varchar(16) NOT NULL,
  `data` datetime DEFAULT NULL,
  `hit` int(16) DEFAULT 0,
  `view` int(16) DEFAULT 0,
  `content` text DEFAULT NULL,
  `lock_write` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`num`, `title`, `name`, `data`, `hit`, `view`, `content`, `lock_write`) VALUES
(40, '글씀', 'a@a', '2022-12-12 14:57:44', 2, 9, '슬기', 0),
(41, '2번째 글쓰기444', '3@3.com', '2022-12-12 00:00:00', 1, 2, '내영입니다', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `favorite`
--

CREATE TABLE `favorite` (
  `num` int(11) NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `f_num` int(11) NOT NULL,
  `f_title` varchar(100) NOT NULL,
  `imgurl` varchar(512) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `favorite`
--

INSERT INTO `favorite` (`num`, `f_email`, `f_num`, `f_title`, `imgurl`) VALUES
(205, '11@1.com', 42, '상품등록하기', 'http://localhost//dbook//uploads/123131.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(102, 739183313, 1272695388, '이책사봄제시점'),
(103, 1272695388, 739183313, '내 사셈'),
(104, 953868501, 1272695388, '이책을 사고싶은대?'),
(105, 1272695388, 953868501, '어 어 사');

-- --------------------------------------------------------

--
-- 테이블 구조 `product`
--

CREATE TABLE `product` (
  `num` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `imgurl` varchar(512) NOT NULL,
  `size` int(11) NOT NULL,
  `p_title` varchar(100) DEFAULT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_unique_id` varchar(255) NOT NULL,
  `p_price` varchar(100) DEFAULT NULL,
  `p_content` text DEFAULT NULL,
  `p_fan` varchar(100) DEFAULT NULL,
  `p_grade` int(11) DEFAULT NULL,
  `p_major` varchar(100) DEFAULT NULL,
  `p_bu_major` varchar(100) DEFAULT NULL,
  `p_condition` varchar(100) DEFAULT NULL,
  `p_email` varchar(100) DEFAULT NULL,
  `p_nick` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `p_sell` varchar(100) NOT NULL,
  `like_cnt` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `product`
--

INSERT INTO `product` (`num`, `filename`, `imgurl`, `size`, `p_title`, `p_name`, `p_unique_id`, `p_price`, `p_content`, `p_fan`, `p_grade`, `p_major`, `p_bu_major`, `p_condition`, `p_email`, `p_nick`, `date`, `p_sell`, `like_cnt`) VALUES
(37, '12313.jpg', 'http://localhost//dbook//uploads/12313.jpg', 7799, '판매완료', '조정우', '1272695388', '20000원', '123456789', '완료', 2, '공과 대학', '바이오응용공학부', '새교재', '11@1.com', '정우조', '2022-12-12 14:51:00', '0', 0),
(41, 'download.jpg', 'http://localhost//dbook//uploads/download.jpg', 11503, '123213', '이름이다', '953868501', '1231', '31232', '312312', 3, '공과 대학', '', '새교재', '3@3.com', '123123', '2022-12-12 15:20:48', '1', 0),
(42, '123131.jpg', 'http://localhost//dbook//uploads/123131.jpg', 9209, '상품등록하기', '이름이다', '953868501', '20000원', '3131', '123131', 1, 'ICT공과 대학', '창의소프트웨어공학부', '중고교재', '3@3.com', '123123', '2022-12-12 15:31:02', '1', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `replay`
--

CREATE TABLE `replay` (
  `num` int(10) NOT NULL,
  `r_name` varchar(100) DEFAULT NULL,
  `r_content` text DEFAULT NULL,
  `r_date` datetime NOT NULL,
  `r_hit` int(11) NOT NULL,
  `cn_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `replay`
--

INSERT INTO `replay` (`num`, `r_name`, `r_content`, `r_date`, `r_hit`, `cn_num`) VALUES
(110, 'a@a', '댓글입니다.\r\n', '0000-00-00 00:00:00', 0, 39),
(111, 'a@a', '댓글\r\n', '0000-00-00 00:00:00', 0, 40);

-- --------------------------------------------------------

--
-- 테이블 구조 `sign_check`
--

CREATE TABLE `sign_check` (
  `name` varchar(100) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `pw` varchar(100) NOT NULL,
  `phonone` int(3) NOT NULL,
  `phontwo` int(4) NOT NULL,
  `phonthree` int(4) NOT NULL,
  `major` text NOT NULL,
  `nick` varchar(100) NOT NULL,
  `grade` int(11) NOT NULL,
  `bu_major` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `sign_check`
--

INSERT INTO `sign_check` (`name`, `unique_id`, `email`, `pw`, `phonone`, `phontwo`, `phonthree`, `major`, `nick`, `grade`, `bu_major`) VALUES
('우정조', '1272695388', '11@1.com', '$2y$10$ZemGJKUrsGZjX980oOPe6OzpKTRr2NfOTN/hLCFtggve/01V0v2de', 10, 2511, 4522, '예술디자인체육 대학', '정우조', 2, '디자인조형학과'),
('이름이다', '953868501', '3@3.com', '$2y$10$M1iw89gJ6bZFWBT1FrbcTuGSDxKasWZuxj/Sunbvrxr1Zfq.TH98i', 10, 1544, 1572, '예술디자인체육 대학', '123123', 2, '레저스포츠학과'),
('테스트입니다', '739183313', 'a@a', '$2y$10$Q0Lb2HxcdXbR01o6LYTjZOWi3E1rc9D2DZmWxjuvoyQl42.UCEfzW', 10, 2215, 1234, '예술디자인체육 대학', '테스트용', 2, '디자인조형학과');

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `name`, `nick`, `email`, `img`, `status`) VALUES
(52, '1272695388', '우정조', '정우조', '11@1.com', '1670855583다운로드.png', '활동 중'),
(53, '739183313', '테스트', '테스트용', 'a@a', '1670853263pngwing.com (1).png', '활동 중'),
(54, '953868501', '이름이다', '123123', '3@3.com', '1670854762pngwing.com (3).png', '활동 중 아님');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- 테이블의 인덱스 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `replay`
--
ALTER TABLE `replay`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `sign_check`
--
ALTER TABLE `sign_check`
  ADD PRIMARY KEY (`name`);

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- 테이블의 AUTO_INCREMENT `favorite`
--
ALTER TABLE `favorite`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- 테이블의 AUTO_INCREMENT `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- 테이블의 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- 테이블의 AUTO_INCREMENT `replay`
--
ALTER TABLE `replay`
  MODIFY `num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- 테이블의 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
