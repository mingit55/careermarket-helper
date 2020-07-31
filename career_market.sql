-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 20-07-31 03:13
-- 서버 버전: 10.1.30-MariaDB
-- PHP 버전: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `career_market`
--
CREATE DATABASE IF NOT EXISTS `career_market` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `career_market`;

-- --------------------------------------------------------

--
-- 테이블 구조 `applications`
--

CREATE TABLE `applications` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) UNSIGNED NOT NULL,
  `company_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `applications`
--

INSERT INTO `applications` (`id`, `student_id`, `company_id`, `created_at`) VALUES
(24, 5, 1, '2020-07-30 08:28:27'),
(25, 5, 2, '2020-07-30 12:34:43');

-- --------------------------------------------------------

--
-- 테이블 구조 `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(16) NOT NULL,
  `logo` varchar(30) NOT NULL,
  `field` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `companies`
--

INSERT INTO `companies` (`id`, `email`, `password`, `name`, `logo`, `field`, `category`, `description`, `created_at`) VALUES
(1, 'nexon@gmail.com', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '넥슨', '1595905301.jpg', 'IT·웹·통신', '게임', '게임을 사랑하는 사람들이 모여 즐겁게 게임을 만드는 곳, 넥슨\r\n이 곳에서 전세계 게이머들에게 최고의 재미와 경험을 선사하기 위한 도전은 계속됩니다.', '2020-07-28 03:01:41'),
(2, 'beesflow@gmail.com', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '비즈플로우', '1595920004.jpg', 'IT·웹·통신', '웹에이젼시', '부지런하고 성실한 움직임으로 세상 여기저기를 날아다니며 새로운 생명을 탄생시키는 꿀벌의 모습은 비즈플로우가 가고자하는 길과 닮아있습니다. 온라인 이라는 새로운 세상 속 모든 파트너들의 꿈을 연결하여 새로운 비전과 희망을 창조하고 불가능을 가능으로 바꿀 집념으로 고객의 비즈니스를 성공으로 이끄는것, 급변하는 비즈니스 환경 속 트랜드를 이끌고 INSIGHT를 제시하는 솔루션 파트너이자 크리에이터그룹. \r\n끊임없는 탐구와 진화를 통해 트렌드를 리드하며 최고의 결과를 창조하겠습니다.', '2020-07-28 07:06:44'),
(3, 'fromthered@gmail.com', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '프롬더레드', '1595926208.jpg', 'IT·웹·통신', '게임', '사람의 기술과 사람의 노력으로\r\n만들어지는 것이 소프트웨어라는 것을 알기에,\r\n\r\n모두가 행복한 게임 개발사가 되기 위해서\r\n빨간색 열정부터 하나씩 채워 나가겠습니다.\r\n\r\n우리만의 무지개를 완성하는 그 날까지.', '2020-07-28 08:50:08'),
(4, 'samsung@gmail.com', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '삼성전자', '1595994673.png', '제조·화학', '전기·전자·제어', '삼성전자는 사람과 사회를 생각하는 글로벌 일류기업을 추구합니다. ‘경영이념, 핵심가치, 경영원칙’의 가치체계를 경영의 나침반으로 삼고, 인재와 기술을 바탕으로 최고의 제품과 서비스를 창출하여 인류사회에 공헌하는 것을 궁극적인 목표로 삼고 있습니다. 이를 위해 삼성전자가 지켜나갈 약속인 5가지 경영원칙을 세부원칙과 행동지침으로 구체화하여 삼성전자 임직원이 지켜야 할 행동규범(Global Code of Conduct)으로 제정하였으며, 모든 임직원의 사고와 행동에 5가지 핵심가치를 내재화하여 삼성전자의 지속적인 성장을 견인하고 미래 방향성을 제시하고자 합니다.', '2020-07-29 03:51:13'),
(5, 'naver@gmail.com', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '네이버', '1595994953.png', 'IT·웹·통신', '포털·인터넷·컨텐츠', '네이버(주)는 한국 최대 검색포털 네이버 뿐만 아니라, 전 세계 2억 명이 사용하고 있는 모바일 메신저 라인, 동영상 카메라 스노우, 디지털 만화 서비스 네이버웹툰 등을 서비스하고 있는 글로벌 ICT 기업입니다. 네이버는 인공지능, 로보틱스, 모빌리티 등 미래 기술에 대한 지속적인 연구개발을 통해 기술 플랫폼의 변화와 혁신을 추구하며 세계 각국의 수많은 이용자와 다양한 파트너들이 함께 성장할 수 있도록 노력하고 있습니다.', '2020-07-29 03:55:53'),
(6, 'kakao@gmail.com', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '카카오', '1595995131.jpg', 'IT·웹·통신', '포털·인터넷·컨텐츠', '카카오스럽나요? 카카오 크루는 종종 이렇게 묻곤 합니다.\r\n우리의 관점, 행동하는 방법, 지향하는 목표까지 카카오스러움은\r\n이미 우리 안에 스며들어 있습니다. 우리가 더 나은 세상을 만들기 위해\r\n고민하면서 자연스럽게 체득한 태도이자 본질이기 때문입니다.\r\n앞으로도 우리는 카카오스러움에서 고민을 시작하고, 답을 찾을 것입니다.', '2020-07-29 03:58:51'),
(7, 'artiwealth@gmail.com', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '아티웰스', '1595999814.png', 'IT·웹·통신', '기타', '“(주) 아티웰스는 전국 부동산정보조회, 재산평가 및 세금계산 서비스를\r\n제공하는 셀리몬(sellymon.com)을 운영하고 있습니다.”\r\n방대한 부동산 빅데이터와 IT기술을 접목하여 투자결정과 상속증여 절세전략 수립을 위한 최적의 솔루션을 제공하고 있습니다.\r\n현재 국민은행, KB생명보험, 공인중개사 전용 매물 거래망에 부동산정보조회, 세금계산기, 세금신고 대리인 연결 서비스 등의 서비스를 제공하고 있습니다.', '2020-07-29 05:16:54');

-- --------------------------------------------------------

--
-- 테이블 구조 `resumes`
--

CREATE TABLE `resumes` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `apply_id` int(10) UNSIGNED NOT NULL,
  `personal_data` text NOT NULL,
  `school_data` text NOT NULL,
  `act_data` text NOT NULL,
  `license_data` text NOT NULL,
  `award_data` text NOT NULL,
  `growth_text` text NOT NULL,
  `character_text` text NOT NULL,
  `reason_text` text NOT NULL,
  `plan_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `resumes`
--

INSERT INTO `resumes` (`id`, `student_id`, `company_id`, `apply_id`, `personal_data`, `school_data`, `act_data`, `license_data`, `award_data`, `growth_text`, `character_text`, `reason_text`, `plan_text`) VALUES
(22, 5, 1, 24, '{\"image\":\"\\/resources\\/uploads\\/1596154966.jpeg\",\"name\":\"\\uae40\\ubbfc\\uc7ac\",\"birthday\":\"\\u3142\\u3148\\u3137\\u3142\\u3148\\u3137\",\"phone\":\"\",\"email\":\"\"}', '[]', '[]', '[]', '[]', 'Hello Every One!\nMy name is Minjae Kim!', '', '', ''),
(23, 5, 2, 25, '{}', '[]', '[]', '[]', '[]', '', '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(16) NOT NULL,
  `school_field` enum('컴퓨터전자','디지털네트워크','IT산업디자인','IT경영정보','IT소프트웨어') NOT NULL,
  `school_grade` int(11) NOT NULL,
  `school_class` int(11) NOT NULL,
  `school_number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `students`
--

INSERT INTO `students` (`id`, `email`, `password`, `name`, `school_field`, `school_grade`, `school_class`, `school_number`, `created_at`) VALUES
(5, 'mingit55@gmail.com', 'fe47f9938e84e94866c3c780021174f4a66daed1fe4f87914c5c1fcadcd633b6', '김민재', 'IT소프트웨어', 3, 1, 3, '2020-07-27 10:45:07'),
(6, '30901@swjb.hs.kr', '20504cdfddaad0b590ca53c4861edd4f5f5cf9c348c38295bd2dbf0e91bca4c3', '강태욱', 'IT소프트웨어', 3, 1, 1, '2020-07-28 01:20:14');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `student_id` (`student_id`);

--
-- 테이블의 인덱스 `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apply_id` (`apply_id`),
  ADD KEY `student_id` (`student_id`);

--
-- 테이블의 인덱스 `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 테이블의 AUTO_INCREMENT `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 테이블의 AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 덤프된 테이블의 제약사항
--

--
-- 테이블의 제약사항 `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 테이블의 제약사항 `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_ibfk_1` FOREIGN KEY (`apply_id`) REFERENCES `applications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resumes_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
