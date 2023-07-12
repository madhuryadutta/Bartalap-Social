-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 12:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `friendrequest` (IN `sender_id` INT(10), IN `receiver_id` VARCHAR(50), IN `request_status` VARCHAR(5))   BEGIN
  DECLARE requestexist int(10);
select
    count(status) INTO requestexist
FROM
    relations r
WHERE
    r.from_user = sender_id
    AND r.to_user = receiver_id;

if (requestexist > 0) THEN
UPDATE
    relations r
SET
    r.`status` = request_status
WHERE
    r.from_user = sender_id
    and r.to_user = receiver_id;

ELSE
INSERT INTO
    relations (
        from_user,
        to_user,
        status
    )
VALUES
    (sender_id, receiver_id, request_status);

END if;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SaveSelfProfileData` (IN `iid` INT(10), IN `iname` VARCHAR(50), IN `iusername` VARCHAR(50), IN `igender` VARCHAR(50), IN `ioccupation` VARCHAR(50), IN `idob` VARCHAR(50), IN `icurrent_city` VARCHAR(50), IN `ihometown` VARCHAR(50), IN `iphone_no` VARCHAR(50), IN `irelationship_status` VARCHAR(50), IN `iabout_me` VARCHAR(50))   BEGIN
    DECLARE profileExist INT(10);
    select count(username) into profileExist from profiles;
    UPDATE users u
    set u.name = iname
    where id = iid;

    if (profileExist > 0) THEN
        UPDATE profiles p
        set p.username            = iusername,
            p.gender              = igender,
            p.occupation          = ioccupation,
            p.dob                 = idob,
            p.current_city        = icurrent_city,
            p.hometown            = ihometown,
            p.phone_no            = iphone_no,
            p.relationship_status = irelationship_status,
            p.about_me=iabout_me
        where p.user_id = iid ;
    else
        insert into profiles (username, gender, occupation, dob, current_city, hometown, phone_no, relationship_status,
                              about_me, user_id)
        values (iusername, igender, ioccupation,idob, icurrent_city, ihometown, iphone_no, irelationship_status,
                iabout_me, iid);
    end if;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SelfProfileData` (IN `UserId` INT(10), IN `dsk` VARCHAR(55), OUT `outmsg` VARCHAR(15))   BEGIN
		 DECLARE dskCheck VARCHAR(55);
    select v.db_transaction_security_key into dskCheck from variables v WHERE v.id =1;
    if (dskCheck = dsk) Then
		select u.name,
		       p.username,
		       p.gender,
		       p.occupation,
		       p.dob,
		       p.current_city,
		       p.hometown,
		       p.phone_no,
		       p.relationship_status,
		       p.about_me,
		       p.profile_pic,
		       p.cover_pic,
		       p.bluetick,
		       p.lock_status,
		       p.account_status,
		       p.account_type,
		       p.soft_del,
		       p.user_id
		from users u,
		     profiles p
		where u.id = UserId and p.user_id = UserId and p.soft_del = 0 ;
		SET outmsg = '1';
	ELSE
	SET outmsg = 'DSS:1101 Wrong DSK';
END if;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `airmails`
--

CREATE TABLE `airmails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `msg_text` varchar(127) NOT NULL,
  `msg_ref` varchar(20) NOT NULL,
  `msg_type` varchar(3) NOT NULL,
  `soft_del` tinyint(1) NOT NULL DEFAULT 0,
  `sender_user_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credibility`
--

CREATE TABLE `credibility` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total_upvotes` varchar(10) NOT NULL,
  `total_downvotes` varchar(10) NOT NULL,
  `credibility_point` varchar(3) NOT NULL,
  `badge` varchar(2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_05_21_055658_create_profiles_table', 1),
(16, '2023_05_21_060437_create_posts_table', 1),
(17, '2023_05_21_061106_create_reactions_table', 1),
(18, '2023_05_21_061953_create_credibility_table', 1),
(19, '2023_05_21_115507_create_postcards_table', 1),
(20, '2023_05_21_120747_create_airmails_table', 1),
(21, '2023_06_12_061743_create_relations_table', 2),
(22, '2023_06_12_090224_create_variables_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postcards`
--

CREATE TABLE `postcards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `msg_text` varchar(127) NOT NULL,
  `msg_reply` varchar(127) NOT NULL,
  `soft_del` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_text` varchar(255) NOT NULL,
  `post_media` varchar(255) DEFAULT NULL,
  `post_location` varchar(255) DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 0,
  `post_status` tinyint(1) NOT NULL DEFAULT 0,
  `soft_del` tinyint(1) NOT NULL DEFAULT 0,
  `promotional_status` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `gender` enum('M','F','O') DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `current_city` varchar(255) DEFAULT NULL,
  `hometown` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `relationship_status` varchar(255) DEFAULT NULL,
  `about_me` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `cover_pic` varchar(255) DEFAULT NULL,
  `bluetick` tinyint(1) NOT NULL DEFAULT 0,
  `lock_status` tinyint(1) NOT NULL DEFAULT 0,
  `account_status` tinyint(1) NOT NULL DEFAULT 0,
  `account_type` tinyint(1) NOT NULL DEFAULT 0,
  `soft_del` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `username`, `gender`, `occupation`, `dob`, `current_city`, `hometown`, `phone_no`, `relationship_status`, `about_me`, `profile_pic`, `cover_pic`, `bluetick`, `lock_status`, `account_status`, `account_type`, `soft_del`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'abcd', 'O', 'abcd', '2001-02-08', 'abcd', 'abcd', '12345454', 'M', 'abcd', '1', '1', 1, 0, 0, 0, 0, 4, NULL, NULL),
(4, '1', 'M', '1', '2001-02-03', '1', '1', '1', '1', '123121231', NULL, NULL, 0, 0, 0, 0, 0, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vote` varchar(2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) UNSIGNED NOT NULL,
  `to_user` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relations`
--

INSERT INTO `relations` (`id`, `from_user`, `to_user`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'B', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'i.madhuryadutta@gmail.com', 'i.madhuryadutta1@gmail.com', NULL, '$2y$10$p4AcRPWI3uAPnBsTCAQWRuV3Y7C1G42yZRPJNcP8odoTz4GCYRIaC', NULL, '2023-06-10 00:57:12', '2023-06-10 00:57:12'),
(2, '1', 'iam.madhurya@outlook.com', NULL, '$2y$10$OWaHKYzNW0LOHXoiUOGO5uD2PtBe/CuG4UDs6ul5Sy83LYQsEF9/.', NULL, '2023-06-09 05:27:42', '2023-06-09 05:27:42'),
(4, 'abcd', 'i.madhuryadutta@gmail.com', NULL, '$2y$10$B1NADdenPVZXg25.9q5RLuaLPfaN/qGvxLHGRNsMsK3wMMrfp3/s.', NULL, '2023-06-11 23:00:06', '2023-06-11 23:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

CREATE TABLE `variables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `db_transaction_security_key` varchar(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variables`
--

INSERT INTO `variables` (`id`, `db_transaction_security_key`, `created_at`, `updated_at`) VALUES
(1, '1111', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airmails`
--
ALTER TABLE `airmails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `airmails_sender_user_id_foreign` (`sender_user_id`),
  ADD KEY `airmails_receiver_user_id_foreign` (`receiver_user_id`);

--
-- Indexes for table `credibility`
--
ALTER TABLE `credibility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `credibility_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `postcards`
--
ALTER TABLE `postcards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postcards_user_id_foreign` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reactions_user_id_foreign` (`user_id`),
  ADD KEY `reactions_post_id_foreign` (`post_id`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations_from_user_foreign` (`from_user`),
  ADD KEY `relations_to_user_foreign` (`to_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airmails`
--
ALTER TABLE `airmails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credibility`
--
ALTER TABLE `credibility`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postcards`
--
ALTER TABLE `postcards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `variables`
--
ALTER TABLE `variables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `airmails`
--
ALTER TABLE `airmails`
  ADD CONSTRAINT `airmails_receiver_user_id_foreign` FOREIGN KEY (`receiver_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `airmails_sender_user_id_foreign` FOREIGN KEY (`sender_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `credibility`
--
ALTER TABLE `credibility`
  ADD CONSTRAINT `credibility_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `postcards`
--
ALTER TABLE `postcards`
  ADD CONSTRAINT `postcards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reactions`
--
ALTER TABLE `reactions`
  ADD CONSTRAINT `reactions_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `reactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `relations`
--
ALTER TABLE `relations`
  ADD CONSTRAINT `relations_from_user_foreign` FOREIGN KEY (`from_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `relations_to_user_foreign` FOREIGN KEY (`to_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
