-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2026 at 01:22 PM
-- Server version: 8.0.46-0ubuntu0.22.04.3
-- PHP Version: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `about_page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'About Us',
  `about_intro_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Who Are We',
  `about_intro_content` longtext COLLATE utf8mb4_unicode_ci,
  `about_intro_video` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_director_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Executive Director''s Speech',
  `about_director_content` longtext COLLATE utf8mb4_unicode_ci,
  `about_director_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_director_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_director_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_features_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our Features',
  `about_features_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_features_description` text COLLATE utf8mb4_unicode_ci,
  `about_features_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_training_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our Training Process',
  `about_training_video` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_training_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_certification_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'We Are Certified By',
  `about_faq_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Frequently Asked Questions',
  `about_faq_car_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_faq_bike_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `home_small_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_experience_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '6,000+ Stories Growing Every Day',
  `home_feature_points` json DEFAULT NULL,
  `home_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'About Us',
  `home_button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/about',
  `page_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our Services',
  `services_description` text COLLATE utf8mb4_unicode_ci,
  `services` json DEFAULT NULL,
  `stats_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'See Our Gallery',
  `gallery_description` text COLLATE utf8mb4_unicode_ci,
  `facilities_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our Facilities',
  `facilities_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Facilities We Provide',
  `facilities_description` text COLLATE utf8mb4_unicode_ci,
  `facilities` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `about_page_title`, `about_intro_label`, `about_intro_content`, `about_intro_video`, `about_director_title`, `about_director_content`, `about_director_name`, `about_director_designation`, `about_director_image`, `about_features_label`, `about_features_title`, `about_features_description`, `about_features_image`, `about_training_title`, `about_training_video`, `about_training_background`, `about_certification_title`, `about_faq_title`, `about_faq_car_image`, `about_faq_bike_image`, `created_at`, `updated_at`, `home_small_image`, `home_experience_text`, `home_feature_points`, `home_button_text`, `home_button_url`, `page_banner`, `services_title`, `services_description`, `services`, `stats_background`, `gallery_title`, `gallery_description`, `facilities_label`, `facilities_title`, `facilities_description`, `facilities`) VALUES
(1, 'About Us', 'Who Are We', '<p><strong>PATHWAY Driving Training School</strong> is one of the leading and most trusted driving training centers in Dhaka. It is officially approved by the Bangladesh Road Transport Authority (BRTA). [Registration No: 116/2018]</p><h3>Mission</h3><p>To provide comprehensive, high-quality driving education that meets international standards, ensuring students are fully prepared for real-world driving challenges.</p><h3>Vision</h3><p>To create safer roads by producing skilled, responsible, and conscientious drivers.</p><h3>Our Social Commitment</h3><p>Our goal goes beyond producing skilled drivers; we are committed to reducing unemployment and creating self-employment opportunities for marginalized groups.</p>', 'https://www.youtube.com/watch?v=TsHPiCsAvPg', 'Executive Director\'s Speech', '<p>PATHWAY has long been committed to improving road safety, with PATHWAY Driving Training School playing a key role in developing skilled and responsible drivers for a safer Bangladesh. Through continuous research, quality training, and awareness initiatives, we work to identify accident causes and implement effective solutions.</p>', 'Md. Shahin', 'Executive Director, Pathway', 'about/A60lJOC6ZhpFiC4GiYiiD0SWVWJW3kyP2VNT0R5U.jpg', 'Our Features', 'Why Choose Pathway Driving Training School?', 'Get certified, master modern driving skills, and learn through practical hands-on training from experienced instructors.', NULL, 'Our Training Process', 'https://www.youtube.com/watch?v=oSEkdLGGCSY', NULL, 'We Are Certified By', 'Frequently Asked Questions', 'about/18E8tcSQQupaU7CYGr3D1YD0AWapnPsXtimwxXFd.jpg', 'about/0CjY1MKKN6n9N4wty2NT0ok3QsAqNc0AQ57at8i2.jpg', '2026-08-13 10:31:42', '2026-08-13 10:46:20', NULL, '6,000+ Stories Growing Every Day', NULL, 'About Us', '/about', NULL, 'Our Services', NULL, NULL, NULL, 'See Our Gallery', NULL, 'Our Facilities', 'Facilities We Provide', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `achievement_stats`
--

CREATE TABLE `achievement_stats` (
  `id` bigint UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fas fa-star',
  `icon_color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#F15A26',
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievement_stats`
--

INSERT INTO `achievement_stats` (`id`, `value`, `label`, `icon_class`, `icon_color`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '1452', 'Students Enrolled all over World', 'fas fa-user-graduate', '#8b5cf6', 0, 1, '2026-08-13 08:33:09', '2026-08-13 08:33:09'),
(2, '8', 'Total Courses on our Platform', 'fas fa-book-open', '#0ea5e9', 1, 1, '2026-08-13 08:33:09', '2026-08-13 08:33:09'),
(3, '32', 'Total car', 'fas fa-car-side', '#10b981', 2, 1, '2026-08-13 08:33:10', '2026-08-13 08:33:10'),
(4, '1', 'Our Branch', 'bi bi-geo-alt', '#0ea5e9', 3, 1, '2026-08-17 07:55:33', '2026-08-17 07:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('draft','published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `title`, `slug`, `description`, `image`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(2, 1, 'কর্পোরেট ড্রাইভিং ট্রেনিং: প্রতিষ্ঠানের নিরাপত্তা ও দক্ষতা বৃদ্ধির পূর্ণাঙ্গ গাইড', 'krporet-draiving-trening-prtishthaner-niraptta-oo-dkshta-brriddhir-puurnango-gaid', '<p>কর্পোরেট ড্রাইভিং ট্রেনিং প্রতিষ্ঠানের সড়ক দুর্ঘটনার ঝুঁকি কমিয়ে ডিফেন্সিভ ড্রাইভিং, পেশাদার আচরণ এবং ট্রাফিক আইনের ওপর বিশেষ গুরুত্ব দিয়ে দক্ষ চালক গড়ে তুলে। পাথওয়ে ড্রাইভিং ট্রেনিং স্কুল অভিজ্ঞ ট্রেইনার ও বিআরটিএ নিবন্ধিত কারিকুলামের মাধ্যমে প্রতিষ্ঠানের চালকদের দক্ষতা ও দীর্ঘমেয়াদী নিরাপত্তা নিশ্চিত করে।</p><p>&nbsp;</p><p>কর্পোরেট ড্রাইভিং ট্রেনিং: প্রতিষ্ঠানের নিরাপত্তা ও দক্ষতা বৃদ্ধির পূর্ণাঙ্গ গাইড<br>ঢাকার রাস্তায় প্রতিদিন হাজার হাজার প্রাতিষ্ঠানিক যানবাহন চলাচল করে। নির্বাহী কর্মকর্তাদের বহনকারী ব্যক্তিগত গাড়ি থেকে শুরু করে এনজিওর ফিল্ড স্টাফদের টয়োটা হাইস কিংবা পণ্যবাহী ভ্যান সবই ঢাকার তীব্র যানজট ও বিশৃঙ্খল ট্রাফিকের মধ্য দিয়ে চলে। কিন্তু আপনি কি জানেন, একটি ছোট সড়ক দুর্ঘটনা আপনার প্রতিষ্ঠানের কত বড় আর্থিক ও সুনামহানি ঘটাতে পারে?</p><p>গবেষণা বলছে, সড়ক দুর্ঘটনার ৮০% ঘটে মানুষের ভুলের কারণে। এই ঝুঁকি কমানোর একমাত্র কার্যকর উপায় হলো ড্রাইভারদের পেশাদার প্রশিক্ষণ। বর্তমানে ঢাকায় করপোরেট ড্রাইভিং ট্রেনিং কোনো বিলাসিতা নয়, বরং ব্যবসার একটি কৌশলগত প্রয়োজনীয়তা।</p><h3><strong>কেন বাংলাদেশে করপোরেট ড্রাইভিং ট্রেনিং গুরুত্বপূর্ণ?</strong></h3><p>বাংলাদেশের প্রেক্ষাপটে একজন পেশাদার চালকের দক্ষতা শুধু গাড়ি চালানোর মধ্যে সীমাবদ্ধ নয়। বিশেষ করে ঢাকায় যেখানে যানজট এবং বিচিত্র ধরনের যানবাহনের চাপ বেশি, সেখানে একজন অপ্রশিক্ষিত ড্রাইভার প্রতিষ্ঠানের জন্য বড় ঝুঁকির কারণ হতে পারে।</p><p>প্রশিক্ষিত ড্রাইভার থাকলে প্রতিষ্ঠানের যে লাভ হয়:<br>•<strong>দুর্ঘটনা হ্রাস: </strong>সঠিক প্রশিক্ষণে দুর্ঘটনার ঝুঁকি প্রায় ৪০% পর্যন্ত কমে আসে।<br>•<strong>আর্থিক সাশ্রয়:</strong> গাড়ির রক্ষণাবেক্ষণ খরচ কমে এবং জ্বালানি সাশ্রয় হয় (ইকো-ড্রাইভিংয়ের মাধ্যমে)।<br>•<strong>আইনি সুরক্ষা: </strong>বিআরটিএ (BRTA) সার্টিফাইড ড্রাইভার থাকলে আইনি জটিলতা ও বিমার ক্ষেত্রে সুবিধা পাওয়া যায়।<br>•<strong>প্রতিষ্ঠানের ভাবমূর্তি:</strong> একজন মার্জিত ও দক্ষ ড্রাইভার প্রতিষ্ঠানের ব্র্যান্ড ভ্যালু বৃদ্ধি করে।&nbsp;</p><figure class=\"image\"><img style=\"aspect-ratio:1216/1294;\" src=\"http://127.0.0.1:8000/storage/blogs/content/vy111m5WoWFcS5PnKeCVWTFQrRbmsA1wmqABd5Wa.png\" width=\"1216\" height=\"1294\"></figure><h3><strong>প্রধান প্রশিক্ষণ প্রোগ্রামসমূহ</strong></h3><p><strong>১. ডিফেন্সিভ ড্রাইভিং (Defensive Driving):</strong> এটি সবথেকে জনপ্রিয় প্রোগ্রাম। এই প্রশিক্ষণের মূল লক্ষ্য হলো—রাস্তায় অন্যদের ভুল বা প্রতিকূল পরিবেশের মধ্যেও কীভাবে দুর্ঘটনা এড়িয়ে চলা যায় তা শেখানো।<br><strong>২. পেশাদার দক্ষতা উন্নয়ন (Professional Skill Development):</strong><br>এখানে চালকদের আচরণের ওপর গুরুত্ব দেওয়া হয়। সময়ানুবর্তিতা, যাত্রীদের সাথে কথা বলার ধরণ, ব্যক্তিগত পরিচ্ছন্নতা এবং জরুরি পরিস্থিতিতে করণীয় সম্পর্কে প্রশিক্ষণ দেওয়া হয়।<br><strong>৩. রোড সেফটি অ্যাওয়ারনেস ওয়ার্কশপ:</strong> প্রতিষ্ঠানের অনেক কর্মকর্তা যারা নিজেরাই গাড়ি চালান, তাদের জন্য এই কর্মশালাটি উপযোগী। এতে ট্রাফিক আইন এবং নিরাপদ ড্রাইভিং সম্পর্কে সম্যক ধারণা দেওয়া হয়।</p><h3><strong>ঢাকার প্রেক্ষাপটে বিশেষ চ্যালেঞ্জসমূহ</strong></h3><p>ঢাকার রাস্তায় ড্রাইভিং মানেই মিশ্র ট্রাফিক (রিকশা, বাস, মোটরবাইক), হঠাৎ পথচারী পারাপার এবং অবকাঠামোগত পরিবর্তন। একজন করপোরেট ড্রাইভারকে এই উচ্চ মানসিক চাপের মধ্যে শান্ত থেকে গাড়ি চালানোর কৌশল রপ্ত করতে হয়, যা সাধারণ ট্রেনিং সেন্টারে শেখানো সম্ভব নয়।</p><h3><strong>পাথওয়ে ড্রাইভিং ট্রেনিং স্কুল (Pathway Driving Training School) কেন সেরা?</strong></h3><p>আপনি যদি আপনার প্রতিষ্ঠানের জন্য একটি নির্ভরযোগ্য এবং বিআরটিএ নিবন্ধিত (রেজি নং: ১১৬/১৮) প্রতিষ্ঠান খুঁজে থাকেন, তবে পাথওয়ে ড্রাইভিং ট্রেনিং স্কুল (PDTS) আপনার জন্য আদর্শ।<br><strong>• অভিজ্ঞ ট্রেইনার:</strong> এখানে বাংলাদেশ বিমান বাহিনীর অবসরপ্রাপ্ত মাস্টার ওয়ারেন্ট অফিসার এবং বিআরটিএ স্বীকৃত মাস্টার ট্রেইনারদের মাধ্যমে প্রশিক্ষণ দেওয়া হয়।<br><strong>• বিশাল অভিজ্ঞতা: </strong>২০১৮ সাল থেকে এখন পর্যন্ত ৫,৮০০ জনের বেশি ড্রাইভারকে সফলভাবে প্রশিক্ষণ দিয়েছে পাথওয়ে।<br><strong>• অন-সাইট ট্রেনিং:</strong> আপনার অফিসের গ্যারেজ বা নিজস্ব এলাকাতেও আমাদের ট্রেইনাররা গিয়ে প্রশিক্ষণ দিতে পারেন।<br><strong>• অনলাইন ভেরিফিকেশন:</strong> আমাদের প্রতিটি সার্টিফিকেট অনলাইনে যাচাইযোগ্য, যা এইচআর (HR) অডিটে সহায়তা করে।</p><h3><strong>প্রশিক্ষণ গ্রহণের ধাপসমূহ</strong></h3><p><strong>১. পরামর্শ: </strong>আপনার প্রতিষ্ঠানের ড্রাইভার সংখ্যা ও প্রয়োজন জানান।<br><strong>২. মূল্যায়ন:</strong> বর্তমান ড্রাইভারদের দক্ষতার একটি প্রাথমিক পরীক্ষা নেওয়া হয়।<br><strong>৩. তাত্ত্বিক ও ব্যবহারিক ক্লাস:</strong> ক্লাসরুমে থিওরি এবং রাস্তায় সরাসরি হাতে-কলমে শিক্ষা।<br><strong>৪. সনদ প্রদান: </strong>সফলভাবে কোর্স শেষে বিআরটিএ স্বীকৃত সার্টিফিকেট প্রদান।<br><strong>৫. ম্যানেজমেন্ট রিপোর্ট:</strong> প্রতিটি ড্রাইভারের পারফরম্যান্স নিয়ে একটি বিস্তারিত রিপোর্ট প্রতিষ্ঠানের কাছে জমা দেওয়া হয়।<br>আপনার প্রতিষ্ঠানের সম্পদ ও মানুষের জীবনের সুরক্ষা নিশ্চিত করতে আজই পেশাদার ড্রাইভিং প্রশিক্ষণে বিনিয়োগ করুন। এটি শুধু খরচ নয়, বরং আপনার ব্যবসার দীর্ঘমেয়াদী নিরাপত্তা নিশ্চিত করার একটি স্মার্ট পদক্ষেপ।</p><h4><br><strong>যোগাযোগ করুন:</strong></h4><p>• ফোন/হোয়াটসঅ্যাপ: +৮৮ ০১৩২১২৩২৯৮২<br>• ইমেইল: pathway.dts@gmail.com<br>• ঠিকানা: কাফরুল, ঢাকা-১২১৬।<br>• ওয়েবসাইট: www.pdts.com.bd</p><p>আপনার প্রতিষ্ঠানের চালকদের দক্ষতা বাড়িয়ে রাস্তাকে করে তুলুন নিরাপদ।</p><p>&nbsp;</p>', 'blogs/featured/BCdI8MCzIRRkA9rnXqtAWFAjRQiM4MrWrh4abFpa.jpg', 'published', '2026-08-13 06:46:19', '2026-08-13 06:46:03', '2026-08-13 06:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Driving Tips', 'driving-tips', 1, '2026-08-13 06:41:42', '2026-08-13 06:41:42'),
(2, 'Road Safety', 'road-safety', 1, '2026-08-13 06:41:42', '2026-08-13 06:41:42'),
(3, 'News & Updates', 'news-updates', 1, '2026-08-13 06:41:42', '2026-08-13 06:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `blog_page_settings`
--

CREATE TABLE `blog_page_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Latest Blog',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `city_id`, `name`, `address`, `is_active`, `created_at`, `updated_at`, `phone`, `email`) VALUES
(1, 1, 'Dhaha Branch', '48/3, BRTC Staff Quarter Market, Senpara Parbata, Kafrul, Dhaka - 1216', 1, '2026-08-13 05:56:36', '2026-08-13 11:52:09', '+88 01321232982', 'pathway.dts@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `branch_page_settings`
--

CREATE TABLE `branch_page_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'দেশব্যাপী ব্রাঞ্চসমূহ',
  `page_description` text COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_page_settings`
--

INSERT INTO `branch_page_settings` (`id`, `page_title`, `page_description`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'দেশব্যাপী ব্রাঞ্চসমূহ', NULL, NULL, '2026-08-18 04:26:51', '2026-08-18 04:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `name`, `image`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Government of Bangladesh', 'assets/frontend/img/footer/certificate-1.png', 0, 1, '2026-08-13 07:12:22', '2026-08-13 07:12:22'),
(2, 'Bangladesh Road Transport Authority', 'assets/frontend/img/footer/certificate-2.png', 1, 1, '2026-08-13 07:12:22', '2026-08-13 07:12:22'),
(3, 'Dhaka Metropolitan Police', 'assets/frontend/img/footer/certificate-3.png', 2, 1, '2026-08-13 07:12:22', '2026-08-13 07:12:22'),
(4, 'Global Alliance of NGOs for Road Safety', 'assets/frontend/img/footer/certificate-4.png', 3, 1, '2026-08-13 07:12:22', '2026-08-13 07:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2026-08-13 05:56:36', '2026-08-13 05:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Contact With Us',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Office Time',
  `office_description` text COLLATE utf8mb4_unicode_ci,
  `branches_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our Branches',
  `branches_description` text COLLATE utf8mb4_unicode_ci,
  `form_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Get In Touch',
  `form_description` text COLLATE utf8mb4_unicode_ci,
  `call_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Call Now',
  `call_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Send Message',
  `agreement_text` text COLLATE utf8mb4_unicode_ci,
  `terms_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/terms-and-conditions',
  `privacy_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/privacy-policy',
  `map_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Locate Us on Google Map',
  `map_embed_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `page_title`, `banner_image`, `office_title`, `office_description`, `branches_title`, `branches_description`, `form_title`, `form_description`, `call_button_text`, `call_number`, `submit_button_text`, `agreement_text`, `terms_url`, `privacy_url`, `map_title`, `map_embed_url`, `created_at`, `updated_at`) VALUES
(1, 'Contact With Us', NULL, 'Office Time', 'Opening Time: 7:00 AM to 10:00 PM\nSaturday to Thursday\nFriday - Maintenance Class: 4:00 PM, Theory Class: 5:00 PM', 'Our Branches', 'Different Branches of PATHWAY Driving Training School:', 'Get In Touch', 'For any emergency query, please contact us.', 'Call Now', '+88 01321232982', 'Send Message', 'I agree with the', '/terms-and-conditions', '/privacy-policy', 'Locate Us on Google Map', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14601.581109410708!2d90.3747599!3d23.8045392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c156162325ab%3A0x8ae8aea62e4b5d4f!2sPathway%20Driving%20Training%20School!5e0!3m2!1sen!2sbd!4v1717585272256!5m2!1sen!2sbd', '2026-08-13 11:52:09', '2026-08-13 11:52:09');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `course_type_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_type_id`, `city_id`, `branch_id`, `title`, `slug`, `fee`, `duration`, `description`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 1, 'Auto Car - Advance Course', 'auto-car-advance-course', '7000.00', '30', '<p>An automatic car is an automobile with an automatic transmission that doesn\'t require a driver to shift gears manually. Considering the convenience of driving, the number of auto vehicles in Bangladesh has increased at present. But the number of skilled drivers has not increased accordingly. Hence, \'PATHWAY Diving Training School\' has introduced 30 days Auto Car Advance Course for new trainees to provide quality training in Auto cars.<br>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong> &nbsp;Total of 30 classes in this training module.</strong><br>&nbsp;</p><p><strong>Practical class - 24&nbsp;&nbsp;( Per Lesson 20 Minutes) .</strong></p><p><strong>&nbsp;</strong>Practical class&nbsp;<strong>Training time : 08.00am to 12.00pm &amp; 04.00pm to 09.00pm.</strong></p><p><strong>Theory class - 04&nbsp;(One Hours Only Friday At 05.00pm to 06.00pm)</strong></p><p><strong>Car Maintenance - 02&nbsp;(One Hours Only Friday At 05.00pm to 06.00pm)</strong></p><p>From this course, a trainee will learn about all the basics of defensive driving. The practical class topics in this course are:</p><ol><li>Preparation before driving</li><li>Take the right and left tran</li><li>Lane based driving&nbsp;</li><li>Reverse and parking</li><li>Night driving</li><li>Wheel opening and fitting</li></ol><p>The theory and maintenance class topics in this course are:</p><ol><li>Concept of traffic sign-signals and laws</li><li>Concept of safe overt﻿aking and lanes</li><li>Concepts on following distance and braking distance</li><li>Driving at altitude and in adverse conditions</li><li>Mental and health aspects of the driver</li><li>Driver First Aid</li><li>Engine cooling and lubricant concepts</li><li>Problem/Fall Finding</li></ol><p>After completion of this course of advanced Autocar training, the trainee will have a mock test on the pattern of driving license test conducted by BRTA.</p><p>Why should you train at PATHWAY Driving Training School?</p><p>Firstly, Pathway Driving Training School is a Government Registered Driving Training Centre. We provide training under the supervision of qualified trainers and a structured curriculum. Also, we have special arrangements for women. We always conduct training programs with the safety of the trainees in mind.</p>', 'courses/dsIia65mBxN6MzTitEBD7UFkhp3phzCQuJglKOuw.jpg', 1, '2026-08-13 06:10:00', '2026-08-13 06:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_page_settings`
--

CREATE TABLE `course_page_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our Driving Courses',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'আজই যোগ দিন আমাদের সাথে!',
  `cta_description` text COLLATE utf8mb4_unicode_ci,
  `cta_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'এখানে ক্লিক করুন',
  `cta_button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/driving-license',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_page_settings`
--

INSERT INTO `course_page_settings` (`id`, `page_title`, `banner_image`, `cta_title`, `cta_description`, `cta_button_text`, `cta_button_url`, `created_at`, `updated_at`) VALUES
(1, 'Our Driving Courses', NULL, 'আজই যোগ দিন আমাদের সাথে!', NULL, 'এখানে ক্লিক করুন', '/driving-license', '2026-08-18 00:32:06', '2026-08-18 00:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `course_types`
--

CREATE TABLE `course_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_types`
--

INSERT INTO `course_types` (`id`, `name`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Manual & Auto Car', NULL, 1, '2026-08-13 05:56:36', '2026-08-13 05:56:36'),
(2, 'Auto Car', NULL, 1, '2026-08-13 05:56:36', '2026-08-13 05:56:36'),
(3, 'Manual Car', NULL, 1, '2026-08-13 05:56:36', '2026-08-13 05:56:36'),
(4, 'Scooter', NULL, 1, '2026-08-13 05:56:36', '2026-08-13 05:56:36'),
(5, 'Bike', NULL, 1, '2026-08-13 05:56:36', '2026-08-13 05:56:36'),
(6, 'Professional', NULL, 1, '2026-08-13 05:56:36', '2026-08-13 05:56:36'),
(7, 'Bicycle Course11', NULL, 1, '2026-08-13 05:56:36', '2026-08-13 08:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Why should you choose PATHWAY Driving Training School?', 'PATHWAY Driving Training School is a BRTA Registered Driving Training Centre. We always conduct training programs with the safety of the trainees in mind.', 0, 1, '2026-08-13 07:49:08', '2026-08-13 07:49:08'),
(2, 'What makes PATHWAY Driving Training School different?', 'PATHWAY provides training under qualified trainers and a structured curriculum, with special arrangements for women.', 1, 1, '2026-08-13 07:49:08', '2026-08-13 07:49:08'),
(3, 'Why Pathway Driving Training School is the best in Dhaka?', 'Pathway ensures trainee safety with international-quality driving training at an affordable cost in Dhaka.', 2, 1, '2026-08-13 07:49:08', '2026-08-13 07:49:08'),
(4, 'Is there a certificate at the end of the driving training?', 'Yes. Students receive an online-verifiable certificate after successful completion of the driving course.', 3, 1, '2026-08-13 07:49:08', '2026-08-13 07:49:08'),
(30, 'Why should you choose PATHWAY Driving Training School?', 'PATHWAY Driving Training School is a BRTA Registered Driving Training Centre. We always conduct training programs with t', 4, 1, '2026-08-17 07:58:37', '2026-08-17 07:58:37'),
(31, 'Why should you choose PATHWAY Driving Training School?', 'PATHWAY Driving Training School is a BRTA Registered Driving Training Centre. We always conduct training programs with t', 0, 1, '2026-08-17 07:58:57', '2026-08-17 07:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `category`, `image`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 'gallery/1DXnHp4CwjPqIz69v7DtyTBWEfLxzLZGj28YKx04.jpg', 1, 0, '2026-08-13 06:52:28', '2026-08-13 06:52:28'),
(3, NULL, NULL, 'gallery/jF6PXRhzAAlgPmhCrKvp9DfDQlZFYA6brpF5s1sd.jpg', 1, 0, '2026-08-13 06:52:43', '2026-08-13 06:52:43'),
(4, NULL, NULL, 'gallery/7zgczRGuuGypemhLjrvwbQ2cXJftinBhXlk7bENt.jpg', 1, 0, '2026-08-13 06:52:51', '2026-08-13 06:52:51'),
(5, NULL, NULL, 'gallery/78tHXSJMwVzokDJW4SYXX7hf3uXgW0UL7EvL7qwn.jpg', 1, 0, '2026-08-13 06:53:03', '2026-08-13 06:53:03'),
(6, NULL, NULL, 'gallery/dIYj9bjWKGjxyphqFiYbwdhUz3iUGQ0WMmEERBaa.jpg', 1, 0, '2026-08-13 06:53:12', '2026-08-13 06:53:12'),
(7, NULL, NULL, 'gallery/LdU8Szig2vXaIndt8Z81lcskasmG2r18afHwKoLV.jpg', 1, 0, '2026-08-13 06:53:21', '2026-08-13 06:53:21'),
(8, NULL, NULL, 'gallery/wLst9Q2TqUGoPKkJVpd1BLriHvIUpglzWy8IzfBG.jpg', 1, 0, '2026-08-13 06:53:29', '2026-08-13 06:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_page_settings`
--

CREATE TABLE `gallery_page_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Photo Gallery',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_license_sections`
--

CREATE TABLE `home_license_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `license_section_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'License Services',
  `license_section_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Driving License Services',
  `license_section_description` text COLLATE utf8mb4_unicode_ci,
  `license_section_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_services` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_license_sections`
--

INSERT INTO `home_license_sections` (`id`, `license_section_label`, `license_section_title`, `license_section_description`, `license_section_background`, `license_services`, `created_at`, `updated_at`) VALUES
(1, 'Our License Packages11', 'Our License Packages', 'Our License Packages33', NULL, '[{\"image\": null, \"title\": \"National Driving License\", \"features\": [\"Professional Driving Licence\", \"Non Professional Licence\", \"Non-professional: Minimum age 18\", \"Professional: Minimum age 21\"]}, {\"image\": null, \"title\": \"International Driving License\", \"features\": [\"Must hold a valid Bangladeshi driving licence.\", \"Valid for 1 year (or until national licence expires)\", \"Usable only outside Bangladesh\", \"Issued by AAB (Automobile Association of Bangladesh)\"]}]', '2026-08-18 02:08:00', '2026-08-18 02:09:02');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `license_packages`
--

CREATE TABLE `license_packages` (
  `id` bigint UNSIGNED NOT NULL,
  `license_package_category_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` json DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `license_packages`
--

INSERT INTO `license_packages` (`id`, `license_package_category_id`, `title`, `price`, `image`, `features`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'অপেশাদার লাইসেন্স (স্ট্যান্ডার্ড ডেলিভারি)', '14000.00', 'license-packages/4wpHt4swMItFbjvFj5aPvBxrDTi8z0tGTKmXKbh4.webp', '[\"সময় লাগবে ৬০-৭০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 0, 1, '2026-08-18 02:10:59', '2026-08-18 03:46:16'),
(2, 1, 'অপেশাদার লাইসেন্স (জেনারেল আর্জেন্ট ডেলিভারি)', '19000.00', 'new-assets/images/1779250698_non_professional_general_urgent_delivery.webp', '[\"সময় ৩১-৬০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 1, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(3, 1, 'অপেশাদার লাইসেন্স (আর্জেন্ট ডেলিভারি)', '21000.00', 'new-assets/images/1779250361_non_professional_urgent_delivery.webp', '[\"সময় ১৬-৩০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 2, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(4, 1, 'অপেশাদার লাইসেন্স (মোস্ট আর্জেন্ট ডেলিভারি)', '23000.00', 'new-assets/images/1779250282_non_professional_license_most_urgent_delivery.webp', '[\"সময় ৮-২০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 3, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(5, 2, 'পেশাদার লাইসেন্স (স্ট্যান্ডার্ড ডেলিভারি)', '12000.00', 'new-assets/images/1779250585_professional_license_standard_delivery.webp', '[\"সময় লাগবে ৬০-৭০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 0, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(6, 2, 'পেশাদার লাইসেন্স (আর্জেন্ট ডেলিভারি)', '20000.00', 'new-assets/images/1779250515_professional_urgent_delivery.webp', '[\"সময় ১৬-৩০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 1, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(7, 2, 'পেশাদার লাইসেন্স (জেনারেল আর্জেন্ট ডেলিভারি)', '18000.00', 'new-assets/images/1779250547_professional_license_general_urgent_delivery.webp', '[\"সময় ৩১-৬০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 2, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(8, 2, 'পেশাদার লাইসেন্স (মোস্ট আর্জেন্ট ডেলিভারি)', '22000.00', 'new-assets/images/1779250491_professional_most_urgent_delivery.webp', '[\"সময় ৮-২০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 3, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(9, 3, 'পেশাদার ড্রাইভিং লাইসেন্স নবায়ন (ঢাকার ভিতরে)', '9999.00', 'new-assets/images/1779440915_renew_1.webp', '[\"লাইসেন্স নবায়ন সময় ১৫ থেকে ২০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 0, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(10, 3, 'অপেশাদার ড্রাইভিং লাইসেন্স নবায়ন (ঢাকার ভিতরে)', '10999.00', 'new-assets/images/1779440924_renew_2.webp', '[\"লাইসেন্স নবায়ন সময় ১৫ থেকে ২০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 1, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(11, 3, 'পেশাদার ড্রাইভিং লাইসেন্স নবায়ন (ঢাকার বাহিরে)', '11999.00', 'new-assets/images/1779440931_renew_3.webp', '[\"লাইসেন্স নবায়ন সময় ১৫ থেকে ২০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 2, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(12, 3, 'অপেশাদার ড্রাইভিং লাইসেন্স নবায়ন (ঢাকার বাহিরে)', '12999.00', 'new-assets/images/1779440938_renew_4.webp', '[\"লাইসেন্স নবায়ন সময় ১৫ থেকে ২০ দিন\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 3, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(13, 4, 'ইন্টারন্যাশনাল ড্রাইভিং লাইসেন্স - স্ট্যান্ডার্ড ডেলিভারি', '11000.00', 'new-assets/images/1779440485_international_standard_delivery.webp', '[\"সময় ২৫ কর্ম দিবস\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 0, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(14, 4, 'ইন্টারন্যাশনাল ড্রাইভিং লাইসেন্স - এক্সপ্রেস ডেলিভারি', '20000.00', 'new-assets/images/1779440530_international_express_delivery.webp', '[\"সময় ৩ কর্ম দিবস\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 1, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(15, 4, 'ইন্টারন্যাশনাল ড্রাইভিং লাইসেন্স - আর্জেন্ট ডেলিভারি', '14000.00', 'new-assets/images/1779440500_international_urgent_delivery.webp', '[\"সময় ১৫ কর্ম দিবস\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 2, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(16, 4, 'ইন্টারন্যাশনাল ড্রাইভিং লাইসেন্স - মোস্ট আর্জেন্ট ডেলিভারি', '17000.00', 'new-assets/images/1779440515_international_most_urgent_delivery.webp', '[\"সময় ৫ কর্ম দিবস\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 3, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(17, 4, 'ইন্টারন্যাশনাল ড্রাইভিং লাইসেন্স - সুপার এক্সপ্রেস ডেলিভারি', '23000.00', 'new-assets/images/1779440547_international_super_express_delivery.webp', '[\"সময় ১ কর্ম দিবস\", \"লাইসেন্স ফি এককালীন পরিশোধযোগ্য\", \"ফ্রি প্রাইভেটকার প্রশিক্ষণ মিনি কোর্স\", \"ফ্রি বিআরটিএ অনলাইন মডেল টেস্ট\", \"লাইসেন্স পরীক্ষার স্পেশাল থিওরি ক্লাস\"]', 4, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `license_package_categories`
--

CREATE TABLE `license_package_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `license_package_categories`
--

INSERT INTO `license_package_categories` (`id`, `name`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Non Professional Licence (For New Application)', 0, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(2, 'Professional Licence (For New Application)', 1, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(3, 'National Licence (For Renew Application)', 2, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59'),
(4, 'International Licence (BRTA)', 3, 1, '2026-08-18 02:10:59', '2026-08-18 02:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `license_page_settings`
--

CREATE TABLE `license_page_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our License Packages',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'আজই যোগ দিন আমাদের সাথে!',
  `cta_description` text COLLATE utf8mb4_unicode_ci,
  `cta_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'এখানে ক্লিক করুন',
  `cta_button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/courses',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `license_page_settings`
--

INSERT INTO `license_page_settings` (`id`, `page_title`, `banner_image`, `cta_title`, `cta_description`, `cta_button_text`, `cta_button_url`, `created_at`, `updated_at`) VALUES
(1, 'Our License Packages', NULL, 'আজই যোগ দিন আমাদের সাথে!', 'আমাদের ট্রেনিং কোর্সসমূহ এবং এর মূল্য তালিকা দেখতে', 'এখানে ক্লিক করুন', '/courses', '2026-08-18 02:10:59', '2026-08-18 02:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `media_items`
--

CREATE TABLE `media_items` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` date DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_items`
--

INSERT INTO `media_items` (`id`, `title`, `image`, `url`, `published_at`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'দক্ষতা বাড়াতে চালকদের প্রশিক্ষণ দিল পাথওয়ে', 'media/QeG6IyUG4YdCa79wAIA8ITlbdb2ISelJEvNlcfCn.jpg', 'https://www.dhakatimes24.com/2020/01/17/148778/%E0%A6%A6%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%A4%E0%A6%BE-%E0%A6%AC%E0%A6%BE%E0%A7%9C%E0%A6%BE%E0%A6%A4%E0%A7%87-%E0%A6%9A%E0%A6%BE%E0%A6%B2%E0%A6%95%E0%A6%A6%E0%A7%87%E0%A6%B0-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%A3-%E0%A6%A6%E0%A6%BF%E0%A6%B2-%E0%A6%AA%E0%A6%BE%E0%A6%A5%E0%A6%93%E0%A7%9F%E0%A7%87', '2026-08-12', 0, 1, '2026-08-13 08:58:32', '2026-08-13 08:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_08_13_000001_add_admin_fields_to_users_table', 2),
(5, '2026_08_13_000002_create_site_settings_and_navigation_items', 3),
(6, '2026_08_13_000003_add_floating_contact_numbers_to_site_settings', 4),
(7, '2026_08_13_000004_create_course_management_tables', 5),
(8, '2026_08_13_000005_add_slug_to_courses_table', 6),
(9, '2026_08_13_000006_create_blog_tables', 7),
(10, '2026_08_13_000007_create_galleries_table', 8),
(11, '2026_08_13_000008_create_videos_table', 9),
(12, '2026_08_13_000009_add_description_to_videos_table', 10),
(13, '2026_08_13_000010_create_certifications_table', 11),
(14, '2026_08_13_000011_create_faqs_table', 12),
(15, '2026_08_13_000012_add_hero_fields_to_site_settings', 13),
(16, '2026_08_13_000013_add_master_skills_fields', 14),
(17, '2026_08_13_000014_create_why_choose_items_table', 15),
(18, '2026_08_13_000015_create_achievement_stats_table', 16),
(19, '2026_08_13_000016_create_testimonials_table', 17),
(20, '2026_08_13_000017_add_video_section_fields_to_site_settings', 18),
(21, '2026_08_13_000018_add_gallery_section_fields_to_site_settings', 19),
(22, '2026_08_13_000019_create_media_items_table', 20),
(23, '2026_08_13_000020_add_about_page_fields_to_site_settings', 21),
(24, '2026_08_13_000021_create_theory_courses_table', 22),
(25, '2026_08_13_000022_create_contact_page_and_messages', 23),
(26, '2026_08_14_000001_create_offline_enrollments_table', 24),
(27, '2026_08_14_000002_add_password_to_offline_enrollments_table', 25),
(28, '2026_08_14_000003_add_favicon_to_site_settings_table', 26),
(29, '2026_08_17_000001_add_dynamic_header_footer_fields_to_site_settings', 27),
(30, '2026_08_17_000002_add_new_home_hero_fields_to_site_settings', 28),
(31, '2026_08_17_000003_add_home_section_fields_to_about_pages', 29),
(32, '2026_08_17_000004_add_fourth_home_achievement', 29),
(33, '2026_08_17_000005_add_license_services_to_site_settings', 30),
(34, '2026_08_18_000001_add_dynamic_sections_to_about_pages', 31),
(35, '2026_08_18_000002_create_course_page_settings_table', 31),
(36, '2026_08_18_000003_create_license_package_tables', 32),
(37, '2026_08_18_000004_create_blog_page_settings_table', 33),
(38, '2026_08_18_000005_add_category_and_gallery_page_settings', 34),
(39, '2026_08_18_000006_create_branch_page_settings_table', 35),
(40, '2026_08_18_000007_add_banner_image_to_contact_pages', 36),
(41, '2026_08_18_000008_create_student_portal_settings_table', 37),
(42, '2026_08_18_000009_create_students_table', 38);

-- --------------------------------------------------------

--
-- Table structure for table `navigation_items`
--

CREATE TABLE `navigation_items` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigation_items`
--

INSERT INTO `navigation_items` (`id`, `parent_id`, `label`, `url`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Home', '/', 0, 1, '2026-08-17 05:35:32', '2026-08-17 05:35:32'),
(2, NULL, 'About Us', '/about-us', 1, 1, '2026-08-17 05:35:32', '2026-08-17 05:35:32'),
(3, NULL, 'Courses', '/courses', 2, 1, '2026-08-17 05:35:33', '2026-08-17 05:35:33'),
(4, NULL, 'License', '/driving-license', 3, 1, '2026-08-17 05:35:33', '2026-08-17 05:35:33'),
(5, NULL, 'Blog', '/blog', 4, 1, '2026-08-17 05:35:33', '2026-08-17 05:35:33'),
(6, NULL, 'Gallery', '/gallery', 5, 1, '2026-08-17 05:35:33', '2026-08-17 05:35:33'),
(7, NULL, 'Our Branches', '/branches', 6, 1, '2026-08-17 05:35:33', '2026-08-17 05:35:33'),
(8, NULL, 'Contact Us', '/contact-us', 7, 1, '2026-08-17 05:35:33', '2026-08-17 05:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `offline_enrollments`
--

CREATE TABLE `offline_enrollments` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nid',
  `document_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `present_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `preferred_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'office',
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payable_amount` decimal(10,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offline_enrollments`
--

INSERT INTO `offline_enrollments` (`id`, `course_id`, `branch_id`, `name`, `mobile`, `document_type`, `document_number`, `document_path`, `email`, `password`, `date_of_birth`, `present_address`, `photo`, `start_date`, `preferred_time`, `payment_method`, `coupon_code`, `payable_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'Denise Durham', 'Iusto fugiat nihil d', 'birth_certificate', '583', NULL, 'gefof@mailinator.com', '$2y$12$bb2a0aP8k/l6BpZhPY/EWOWLptUL7uXEfofEvn8ZaVyxwrP3MG1v.', '2006-02-22', 'Minus qui quas maxim', NULL, '2026-12-08', NULL, 'online', 'Unde sed quis qui qu', '7000.00', 'pending', '2026-08-13 12:31:52', '2026-08-13 12:31:52'),
(2, 5, 1, 'dfsdfds', '01959994205', 'nid', '1234567891', 'enrollments/documents/8SgqByNl2144oTPbp3D1G5pJ5dtnP1jqlJNfd67R.jpg', 'mduzzal999111@gmail.com', '$2y$12$i8UwRQGeULtUE114vNmCKOYrcnNe2g004OqP7ySIv/g24qVgIDWN6', '2010-08-01', 'sderfsdf dfgdfgsdfg dfgsdfg dfgdfsg', NULL, '2026-08-18', '9', 'office', NULL, '7000.00', 'pending', '2026-08-13 12:49:37', '2026-08-13 12:49:37'),
(3, 5, 1, 'ggrtg', '01959994205', 'nid', '1111111111', 'enrollments/documents/QaLe2xgUKyjxIlFsC3IQGuJjZ6Z5ViD4M6vdMBbW.webp', 'fdgfdg@gmail.com', '$2y$12$ge2PdCAnoUG1PHM6lq6tSukI16iNuuj3NjSPnoD1dcxXCrNxsNhUm', '2010-08-04', 'zigatola fghgfhn ghghfg', NULL, '2026-08-21', '8:00 AM', 'online', NULL, '7000.00', 'approved', '2026-08-18 05:16:39', '2026-08-18 05:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HFyscwTho0O6ipsblhPuV7SDb4rZnLOsGyp0StYy', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVk56Z21hVEFXZDJLeDhaWVo5eTNiMlpabFkzYmZJR2JSRnhzT2ludyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ob21lL2hlYWRlci1mb290ZXIiO3M6NToicm91dGUiO3M6Mjk6ImFkbWluLmhvbWUuaGVhZGVyLWZvb3Rlci5lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1787053246),
('u74VMof4OEPewSHIq7KelzDJj2CYhwOPb3zF03ZH', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRE5LUWdPMVNYcDlEMllCdXd1amczSzZ3RzdSSnhveUZQZXpUSVNoeiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zdHVkZW50L3JlZ2lzdGVyIjtzOjU6InJvdXRlIjtzOjE2OiJzdHVkZW50LnJlZ2lzdGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1787052935);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_about` text COLLATE utf8mb4_unicode_ci,
  `office_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Office Time (Branch)',
  `office_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floating_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certification_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Certified By:',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hero_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_description` text COLLATE utf8mb4_unicode_ci,
  `hero_primary_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_primary_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_secondary_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_secondary_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_success_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_success_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_badges` json DEFAULT NULL,
  `hero_stats` json DEFAULT NULL,
  `skills_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills_description` text COLLATE utf8mb4_unicode_ci,
  `skills_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Browse Courses',
  `why_choose_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Why Choose Pathway Driving Training School?',
  `achievement_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Achieve your Goals with PATHWAY DRIVING TRAINING SCHOOL',
  `testimonial_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'They Trust Us',
  `testimonial_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'View all Review',
  `testimonial_button_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_section_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Latest Video Sections',
  `video_section_link_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'See all',
  `video_section_link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/media',
  `gallery_section_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Image Gallery',
  `gallery_section_link_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'See all',
  `gallery_section_link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/media',
  `media_page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Media',
  `media_section_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Media',
  `media_button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Read More',
  `header_signin_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sign In',
  `header_signin_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/signin',
  `header_cta_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Apply Online',
  `header_cta_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/enroll/offline-courses',
  `branches_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Our Branches',
  `footer_links_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Important Links',
  `footer_links` json DEFAULT NULL,
  `contact_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Contact Us',
  `social_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Social Link',
  `social_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Connect with our social media',
  `play_store_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_store_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `developer_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Developed By: Softpark',
  `developer_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `legal_links` json DEFAULT NULL,
  `hero_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_registration_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_qr_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_qr_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'App Store',
  `hero_qr_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_overlay` tinyint UNSIGNED NOT NULL DEFAULT '70'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `header_logo`, `footer_logo`, `favicon`, `footer_about`, `office_title`, `office_hours`, `office_days`, `office_note`, `address`, `email`, `phone`, `floating_phone`, `whatsapp_number`, `facebook`, `linkedin`, `youtube`, `instagram`, `registration_text`, `copyright_text`, `certification_title`, `created_at`, `updated_at`, `hero_background`, `hero_subtitle`, `hero_title`, `hero_description`, `hero_primary_text`, `hero_primary_url`, `hero_secondary_text`, `hero_secondary_url`, `hero_success_title`, `hero_success_text`, `hero_badges`, `hero_stats`, `skills_image`, `skills_title`, `skills_description`, `skills_button_text`, `why_choose_title`, `achievement_title`, `testimonial_title`, `testimonial_subtitle`, `testimonial_button_text`, `testimonial_button_url`, `testimonial_background`, `video_section_title`, `video_section_link_text`, `video_section_link_url`, `gallery_section_title`, `gallery_section_link_text`, `gallery_section_link_url`, `media_page_title`, `media_section_title`, `media_button_text`, `header_signin_text`, `header_signin_url`, `header_cta_text`, `header_cta_url`, `branches_title`, `footer_links_title`, `footer_links`, `contact_title`, `social_title`, `social_text`, `play_store_url`, `app_store_url`, `developer_text`, `developer_url`, `legal_links`, `hero_video`, `hero_registration_text`, `hero_qr_image`, `hero_qr_label`, `hero_qr_url`, `hero_overlay`) VALUES
(1, NULL, NULL, NULL, 'We Bangladesh Driving Training Institute is a Bangladesh based institution. We solely focus on the driving skill betterment of our trainees. We provide manpower with the utmost knowledge let you learn, to let your dream come true.', 'Office Time', 'Help Line 24/7: +8801813118833', 'Sat to Friday', '9:00 am to 7:00 pm', 'House-1 (Floor-2), Rd No: 2, Dhanmondi, Dhaka 1205', 'bddti@gmail.com', '01813118833', '+8801813118833', '8801813118833', 'https://www.facebook.com/BDDTI/', NULL, 'https://www.youtube.com/@bangladeshdrivingtrainingi2686', 'https://www.instagram.com/bddti.com4/', 'গণপ্রজাতন্ত্রী বাংলাদেশ সরকার কর্তৃক অনুমোদিত, রেজিস্ট্রেশন নাম্বার: ঢাকা/ড্রাইঃ প্রশিঃ স্কুল-০০৫/২৬', '© 2026 BDDTI. All rights reserved.', 'Certified By:', '2026-08-13 05:23:27', '2026-08-17 05:35:21', NULL, 'Dynamic Hero Badge', 'Dynamic Hero Title', 'Dynamic hero description', 'Join Now', '/register', 'Browse Courses', '/courses', '6,000+ Stories', 'Growing every day', '[{\"text\": \"Professional Training Standards\", \"title\": \"BRTA Certified\"}, {\"text\": \"Dual Control Training Vehicles\", \"title\": \"Safety First\"}, {\"text\": \"Train at Your Convenience\", \"title\": \"Flexible Slots\"}]', '[{\"label\": \"GRADUATED FROM HERE\", \"value\": \"5952\"}, {\"label\": \"INSTRUCTORS NUMBER\", \"value\": \"4\"}, {\"label\": \"PRESENT STUDENTS\", \"value\": \"1380\"}, {\"label\": \"BRANCH\", \"value\": \"1\"}]', NULL, 'Master the skills to drive your career', 'Get certified, master modern tech skills, and level up your career whether you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their careers.', 'Browse Courses', 'Why Choose Pathway Driving Training School?', 'Achieve your Goals with PATHWAY DRIVING TRAINING SCHOOL', 'They Trust Us', NULL, 'View all Review', NULL, NULL, 'Latest Video Sections', 'See all', '/media', 'Image Gallery', 'See all', '/media', 'Media', 'Media', 'Read More', 'Sign In', '/signin', 'Apply Online', '/enroll/offline-courses', 'Our Branches', 'Important Links', NULL, 'Contact Us', 'Social Link', 'Connect with our social media', NULL, NULL, 'Developed By: Softpark', NULL, NULL, NULL, NULL, NULL, 'App Store', NULL, 70);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `mobile`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Md jakir hosen uzzal', '01959994205', 'test@gmail.com', '$2y$12$633Fq9NsI3nt0bNP51snWOHK7jVRkn.Cr7Cb34Wugvh.Ys0y2Pudq', '2026-08-18 05:35:46', '2026-08-18 05:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `student_portal_settings`
--

CREATE TABLE `student_portal_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Student Portal',
  `login_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Welcome Back',
  `login_description` text COLLATE utf8mb4_unicode_ci,
  `dashboard_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'My Dashboard',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint UNSIGNED NOT NULL DEFAULT '5',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `review`, `rating`, `photo`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'MorMons Taste', 'Enrolling in Pathway was a really good decision I made for my driving education. The instructors were incredibly skilled at teaching. They have a supportive learning environment that allowed me to ask questions and make mistakes without feeling judged.', 5, NULL, 0, 1, '2026-08-13 08:36:36', '2026-08-13 08:36:36'),
(2, 'Sajeed Enayet Aninda', 'I had a fantastic experience with Pathway Driving School. Mr. Sumon was my instructor, and he was super patient and really knew his stuff. He made learning to drive easy and enjoyable. I\'d definitely recommend them if you\'re looking to learn from the best.', 5, NULL, 1, 1, '2026-08-13 08:36:36', '2026-08-13 08:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `theory_courses`
--

CREATE TABLE `theory_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `course_type_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `branch_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theory_course_pages`
--

CREATE TABLE `theory_course_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Theory Courses',
  `category_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Course Category',
  `faq_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Frequently Asked Questions',
  `faq_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theory_course_pages`
--

INSERT INTO `theory_course_pages` (`id`, `page_title`, `category_title`, `faq_title`, `faq_image`, `created_at`, `updated_at`) VALUES
(1, 'Theory Courses', 'Course Category', 'Frequently Asked Questions', NULL, '2026-08-13 11:43:32', '2026-08-13 11:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_super_admin` tinyint(1) NOT NULL DEFAULT '0',
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_super_admin`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$12$lvRVFUstUEjX9Fjol7N1yOAxHZkxffpOBaCQeSAkKbQbAyfLLiNc2', 1, 'admin/profile/MKoWbrdiMFWRXQkjWvB90pRFhSN6Meg0N0cVHoH1.jpg', NULL, '2026-08-13 05:09:45', '2026-08-17 05:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `image`, `youtube_url`, `description`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'সড়ক দুর্ঘটনায় আহত ও নিহত হলে সরকারী ক্ষতিপূরণ আদায় প্রক্রিয়া', 'videos/vwjoJoEwMyfezLpGve3JXnyxoLkDIruM4Mv2tihV.jpg', 'https://www.youtube.com/watch?v=bvqdxjTgSZo', '<p>বাংলাদেশে প্রতিদিন সড়ক দুর্ঘটনায় মানুষ মারা যাচ্ছে, কেউ গুরুতর আহত হয়ে আজীবনের জন্য পঙ্গু হয়ে যাচ্ছে। এই দুর্ঘটনায় ক্ষতিগ্রস্ত ব্যক্তি ও তার পরিবার আইন অনুযায়ী আর্থিক ক্ষতিপূরণ পাওয়ার অধিকার রাখে। দুর্ঘটনায় নিহত ব্যক্তির পরিবার পায় ৫ লাখ টাকা গুরুতর আহত ব্যক্তি পায় ৩ লাখ টাকা সামান্য আহত হলেও পাওয়া যায় ১ লাখ টাকা ক্ষতিপূরণ এই ক্ষতিপূরণ পেতে হলে দুর্ঘটনার ৩০ দিনের মধ্যে বিআরটিএ নির্ধারিত ফর্ম নং–৩২ এর মাধ্যমে আবেদন করতে হবে। সময় পেরিয়ে গেলে আপনি আপনার আইনসম্মত অধিকার হারাতে পারেন। মনে রাখবেন, এটি কোনো দয়া বা অনুদান নয় এটি আপনার আইনগত অধিকার।</p>', 0, 1, '2026-08-13 07:09:36', '2026-08-13 07:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_items`
--

CREATE TABLE `why_choose_items` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_items`
--

INSERT INTO `why_choose_items` (`id`, `title`, `description`, `icon_class`, `image`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Certificate', 'Award of recognition certificate to those who successfully complete the course.', 'icofont icofont-certificate', NULL, 0, 1, '2026-08-13 08:25:13', '2026-08-13 08:25:13'),
(2, 'Training Modules', 'Only PDTS follows international standard driving training and curriculum.', 'icofont icofont-man-in-glasses', NULL, 1, 1, '2026-08-13 08:25:13', '2026-08-13 08:25:13'),
(3, 'Experienced Trainer', 'Training provided under BRTA approved and experienced instructors.', 'icofont icofont-presentation', NULL, 2, 1, '2026-08-13 08:25:13', '2026-08-13 08:25:13'),
(4, 'Theory Class', 'Conducted in air-conditioned and modern multimedia classrooms.', 'icofont icofont-car', NULL, 3, 1, '2026-08-13 08:25:13', '2026-08-13 08:25:13'),
(5, 'Trainee Safety', 'International standard books and teaching materials for driving training.', 'icofont icofont-ebook', NULL, 4, 1, '2026-08-13 08:25:13', '2026-08-13 08:25:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement_stats`
--
ALTER TABLE `achievement_stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Indexes for table `blog_page_settings`
--
ALTER TABLE `blog_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branches_city_id_name_unique` (`city_id`,`name`);

--
-- Indexes for table `branch_page_settings`
--
ALTER TABLE `branch_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_name_unique` (`name`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`),
  ADD KEY `courses_course_type_id_foreign` (`course_type_id`),
  ADD KEY `courses_city_id_foreign` (`city_id`),
  ADD KEY `courses_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `course_page_settings`
--
ALTER TABLE `course_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_types`
--
ALTER TABLE `course_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_types_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_page_settings`
--
ALTER TABLE `gallery_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_license_sections`
--
ALTER TABLE `home_license_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license_packages`
--
ALTER TABLE `license_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `license_packages_license_package_category_id_foreign` (`license_package_category_id`);

--
-- Indexes for table `license_package_categories`
--
ALTER TABLE `license_package_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `license_page_settings`
--
ALTER TABLE `license_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_items`
--
ALTER TABLE `media_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigation_items_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `offline_enrollments`
--
ALTER TABLE `offline_enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offline_enrollments_course_id_foreign` (`course_id`),
  ADD KEY `offline_enrollments_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `student_portal_settings`
--
ALTER TABLE `student_portal_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theory_courses`
--
ALTER TABLE `theory_courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `theory_courses_slug_unique` (`slug`),
  ADD KEY `theory_courses_course_type_id_foreign` (`course_type_id`),
  ADD KEY `theory_courses_city_id_foreign` (`city_id`),
  ADD KEY `theory_courses_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `theory_course_pages`
--
ALTER TABLE `theory_course_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_items`
--
ALTER TABLE `why_choose_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievement_stats`
--
ALTER TABLE `achievement_stats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_page_settings`
--
ALTER TABLE `blog_page_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_page_settings`
--
ALTER TABLE `branch_page_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `course_page_settings`
--
ALTER TABLE `course_page_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_types`
--
ALTER TABLE `course_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `gallery_page_settings`
--
ALTER TABLE `gallery_page_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_license_sections`
--
ALTER TABLE `home_license_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `license_packages`
--
ALTER TABLE `license_packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `license_package_categories`
--
ALTER TABLE `license_package_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `license_page_settings`
--
ALTER TABLE `license_page_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_items`
--
ALTER TABLE `media_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `navigation_items`
--
ALTER TABLE `navigation_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `offline_enrollments`
--
ALTER TABLE `offline_enrollments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_portal_settings`
--
ALTER TABLE `student_portal_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theory_courses`
--
ALTER TABLE `theory_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theory_course_pages`
--
ALTER TABLE `theory_course_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `why_choose_items`
--
ALTER TABLE `why_choose_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE RESTRICT;

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `courses_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `courses_course_type_id_foreign` FOREIGN KEY (`course_type_id`) REFERENCES `course_types` (`id`) ON DELETE RESTRICT;

--
-- Constraints for table `license_packages`
--
ALTER TABLE `license_packages`
  ADD CONSTRAINT `license_packages_license_package_category_id_foreign` FOREIGN KEY (`license_package_category_id`) REFERENCES `license_package_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `navigation_items`
--
ALTER TABLE `navigation_items`
  ADD CONSTRAINT `navigation_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `navigation_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offline_enrollments`
--
ALTER TABLE `offline_enrollments`
  ADD CONSTRAINT `offline_enrollments_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `offline_enrollments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE RESTRICT;

--
-- Constraints for table `theory_courses`
--
ALTER TABLE `theory_courses`
  ADD CONSTRAINT `theory_courses_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `theory_courses_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE RESTRICT,
  ADD CONSTRAINT `theory_courses_course_type_id_foreign` FOREIGN KEY (`course_type_id`) REFERENCES `course_types` (`id`) ON DELETE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
