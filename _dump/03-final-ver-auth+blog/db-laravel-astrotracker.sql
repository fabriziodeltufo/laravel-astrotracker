-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Giu 15, 2025 alle 19:04
-- Versione del server: 5.7.39
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-laravel-astrotracker`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'pippo', 'vantufen@gmail.com', '9993338889', 'test email laravel', 'test email laravel message', '2023-05-19 03:17:08', '2023-05-19 03:17:08'),
(2, 'fab', 'admin@admin.com', '1112223334', 'test', 'test msg', '2023-05-19 03:20:12', '2023-05-19 03:20:12'),
(3, 'pippo', 'vantufen@gmail.com', '3338610556', 'test', 'test msg', '2023-05-19 03:25:24', '2023-05-19 03:25:24'),
(4, 'pippo', 'vantufen@gmail.com', '3338610556', 'test', 'test msg', '2023-05-19 03:25:55', '2023-05-19 03:25:55'),
(5, 'pippo', 'vantufen@gmail.com', '3338610556', 'test', 'test msg', '2023-05-19 03:30:31', '2023-05-19 03:30:31'),
(6, 'pippo', 'vantufen@gmail.com', '3338610556', 'test', 'test msg', '2023-05-19 03:31:53', '2023-05-19 03:31:53'),
(7, 'Vantufen', 'vantufen@gmail.com', '3338610567', 'subject astrotracker', 'msg astrotracker', '2023-05-19 03:43:51', '2023-05-19 03:43:51'),
(8, 'Fabrizio', 'infousarefinalcut@gmail.com', '1112223334', 'Offerta Collaborazione', 'Salve, il Vs sito e\' una vera figata ! Accetto volentieri di partecipare allo sviluppo dello stesso in termini di contenuti nel blog in futuro. \r\nSe le interessa, mi contatti pure ai recapiti che ho fornito ! grazie !', '2023-05-19 03:52:20', '2023-05-19 03:52:20'),
(9, 'Fab', 'vantufen@gmail.com', NULL, 'TEST', 'TEST TEST', '2023-05-19 04:27:23', '2023-05-19 04:27:23'),
(10, 'Fab', 'vantufen@gmail.com', NULL, 'TEST', 'TEST TEST', '2023-05-19 04:28:08', '2023-05-19 04:28:08'),
(11, 'Fab', 'vantufen@gmail.com', NULL, 'TEST', 'TEST TEST', '2023-05-19 04:29:55', '2023-05-19 04:29:55'),
(12, 'Fab', 'vantufen@gmail.com', NULL, 'TEST', 'TEST TEST', '2023-05-19 04:30:03', '2023-05-19 04:30:03'),
(13, 'fab', 'vantufen@gmail.com', NULL, 'test', 'test', '2023-05-19 04:30:29', '2023-05-19 04:30:29'),
(14, 'fab', 'vantufen@gmail.com', NULL, 'test', 'test', '2023-05-19 04:31:01', '2023-05-19 04:31:01'),
(15, 'fab', 'vantufen@gmail.com', NULL, 'test', 'test 2', '2023-05-19 04:31:53', '2023-05-19 04:31:53'),
(16, 'fab', 'vantufen@gmail.com', NULL, 'test', 'senza paswd', '2023-05-19 04:33:14', '2023-05-19 04:33:14'),
(17, 'fab', 'vantufen@gmail.com', NULL, 'test', 'senza paswd', '2023-05-19 04:34:14', '2023-05-19 04:34:14'),
(18, 'fab', 'vantufen@gmail.com', NULL, 'test', 'senza paswd', '2023-05-19 04:34:29', '2023-05-19 04:34:29'),
(19, 'sdsds', 'vantufen@gmail.com', NULL, 'test', 'no passwd', '2023-05-19 04:34:55', '2023-05-19 04:34:55'),
(20, 'sdsds', 'vantufen@gmail.com', NULL, 'test', 'no passwd', '2023-05-19 04:35:17', '2023-05-19 04:35:17'),
(21, 'sdsds', 'vantufen@gmail.com', NULL, 'test', 'no passwd', '2023-05-19 04:36:45', '2023-05-19 04:36:45'),
(22, 'sdsds', 'vantufen@gmail.com', NULL, 'test', 'no passwd', '2023-05-19 04:37:10', '2023-05-19 04:37:10'),
(23, 'afa', 'vantufen@gmail.com', NULL, 'dsds', 'sdss', '2023-05-19 04:37:44', '2023-05-19 04:37:44'),
(24, 'afa', 'vantufen@gmail.com', NULL, 'dsds', 'sdss', '2023-05-19 04:38:14', '2023-05-19 04:38:14'),
(25, 'test', 'test@test.com', NULL, 'test', 'test', '2023-05-19 06:37:21', '2023-05-19 06:37:21'),
(26, 'fab', 'vantufen@gmail.com', NULL, 'test fab', 'test fab', '2023-05-19 06:47:35', '2023-05-19 06:47:35'),
(27, 'test2', 'test2@test.com', NULL, 'test2', 'test2', '2023-05-19 06:48:12', '2023-05-19 06:48:12'),
(28, 'test1 fri', 'vantufen@gmail.com', NULL, 'test fri', 'test friday', '2023-05-19 19:48:31', '2023-05-19 19:48:31'),
(29, 'pippo baudo', 'baudo@pippo.com', NULL, 'pippo', 'baudo', '2023-05-19 19:54:08', '2023-05-19 19:54:08'),
(30, 'fab', 'fab@fab.com', NULL, 'fab fab', 'fab fab fab', '2023-05-20 06:52:44', '2023-05-20 06:52:44'),
(31, 'tuf', 'tufo@tufo.com', NULL, 'tufo', 'tufo tufo', '2023-05-20 06:56:38', '2023-05-20 06:56:38'),
(32, 'bio', 'bio@bio.com', NULL, 'bio bio', 'blu blu', '2023-05-20 06:59:11', '2023-05-20 06:59:11'),
(33, 'altara', 'info@altara.com', NULL, 'altara', 'altata msg', '2023-05-23 03:20:44', '2023-05-23 03:20:44'),
(34, 'altara js', 'altara@alta.com', NULL, 'alat', 'alata js', '2023-05-23 03:47:31', '2023-05-23 03:47:31'),
(35, 'pipo', 'pipo@mail.com', NULL, 'pipo', 'pipo msg', '2023-05-25 01:16:45', '2023-05-25 01:16:45'),
(36, 'van', 'vantufen@gmail.com', NULL, 'test locale', 'test locla', '2023-10-12 10:15:58', '2023-10-12 10:15:58'),
(37, 'vanvan', 'vantufen@gmail.com', NULL, 'test test', 'test ets', '2023-10-12 10:18:49', '2023-10-12 10:18:49'),
(38, 'fab', 'vantufen@gmail.com', NULL, 'fab test local', 'new astrotrackerlaravle senza php mac osx installato ma solo la PATH in bash_profile', '2025-02-28 15:51:32', '2025-02-28 15:51:32'),
(39, 'fab2', 'info@wewebby.com', NULL, 'test2', 'test2', '2025-02-28 15:53:56', '2025-02-28 15:53:56'),
(40, 'test3', 'vantufen@gmail.com', NULL, 'test3', 'test3', '2025-02-28 15:58:55', '2025-02-28 15:58:55'),
(41, 'test4', 'vantufen@gmail.com', NULL, 'test4', 'test4', '2025-02-28 16:05:55', '2025-02-28 16:05:55'),
(42, 'vantufen', 'vantufen@gmail.com', NULL, 'test email astro loca', 'da local', '2025-06-14 13:23:21', '2025-06-14 13:23:21'),
(43, 'van2', 'vantufen@gmail.com', NULL, 'van test 2', 'svsvs', '2025-06-14 13:25:58', '2025-06-14 13:25:58'),
(44, 'test', 'vantufen@gmail.com', NULL, 'test senza', 'tolto \\ davanti a Mail', '2025-06-14 13:39:22', '2025-06-14 13:39:22'),
(45, 'fab', 'fabrizio.deltufo@gmail.com', NULL, 'test 3', 'dopo modichiche route eb.pphp', '2025-06-14 13:50:34', '2025-06-14 13:50:34'),
(46, 'pippo', 'pippo@pippo.com', NULL, 'dopo cambio web.php', 'dopo modifica web.php route \r\nnon chiama il controller, chiama la view directa da web.php', '2025-06-14 13:58:05', '2025-06-14 13:58:05'),
(47, 'pluto', 'pluto@pluto.com', NULL, 'webphp - rimesso a posto', 'ora questo form e chiamato da controller', '2025-06-14 13:59:33', '2025-06-14 13:59:33'),
(48, 'qui', 'qui@quio.com', NULL, 'alura', 'adesso cambia?', '2025-06-14 14:01:05', '2025-06-14 14:01:05'),
(49, 'pappa', 'pappa@pappa.com', NULL, 'fix', 'fixed ? o anckora fa cagare?', '2025-06-14 14:26:35', '2025-06-14 14:26:35'),
(50, 'pappa', 'pappa@pappa.com', NULL, 'fix', 'fixed ? o anckora fa cagare?', '2025-06-14 14:42:43', '2025-06-14 14:42:43'),
(51, 'pappa', 'pappa@pappa.com', NULL, 'fix', 'fixed ? o anckora fa cagare?', '2025-06-14 14:43:45', '2025-06-14 14:43:45'),
(52, 'pappa', 'pappa@pappa.com', NULL, 'fix', 'fixed ? o anckora fa cagare?', '2025-06-14 14:44:12', '2025-06-14 14:44:12'),
(53, 'pappa', 'pappa@pappa.com', NULL, 'fix', 'fixed ? o anckora fa cagare?', '2025-06-14 14:44:34', '2025-06-14 14:44:34'),
(54, 'popo', 'popo@popo.com', NULL, 'test popo', 'funzion o no ?', '2025-06-14 14:45:32', '2025-06-14 14:45:32'),
(55, 'popo', 'popo@popo.com', NULL, 'test popo', 'funzion o no ?', '2025-06-14 14:48:31', '2025-06-14 14:48:31'),
(56, 'pipi', 'pipi@pipi.com', NULL, 'pipi', 'funz o no?', '2025-06-14 14:48:53', '2025-06-14 14:48:53'),
(57, 'john', 'john@walt.com', NULL, 'test nome sito', 'esce il nome del sito nella email ora?', '2025-06-14 15:07:17', '2025-06-14 15:07:17'),
(58, 'testnew', 'newtest@new.it', NULL, 'new test', 'alura', '2025-06-14 15:10:11', '2025-06-14 15:10:11'),
(59, 'last', 'last@test.com', NULL, 'soggetto : ultimo test', 'messaggio: quello che ce scritto', '2025-06-14 15:11:58', '2025-06-14 15:11:58'),
(60, 'davvero', 'davvero@test.it', NULL, 'soggetto :  davvero questo', 'messagggio :  questo  e l ultimo', '2025-06-14 15:13:23', '2025-06-14 15:13:23'),
(61, 'test', 'test@test.com', NULL, 'test', 'test test test', '2025-06-15 14:39:39', '2025-06-15 14:39:39'),
(62, 'nasa', 'nasa@nasa.com', NULL, 'nasa', 'nasa message', '2025-06-15 14:41:02', '2025-06-15 14:41:02');

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_05_16_175743_crea_tabella_pippo', 2),
(8, '2023_05_16_180608_create_posts_table', 3),
(9, 'crea_tabella_blog', 3),
(10, '2023_05_17_221434_contacts', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES
(3, 'Asteroids', 'Asteroids are rocky bodies that orbit the Sun, primarily in the asteroid belt between Mars and Jupiter. ', 'Asteroids are rocky bodies that orbit the Sun, primarily in the asteroid belt between Mars and Jupiter. They can vary in size, from small rock fragments to planet-sized objects. Meteors, on the other hand, are asteroids that enter Earth', '2023-05-17 04:46:26', '2023-05-17 04:46:26', NULL),
(4, 'Studying asteroids', 'Studying asteroids and meteors is important because they represent a potential threat to Earth. ', 'Studying asteroids and meteors is important because they represent a potential threat to Earth. Impacts from large asteroids can cause widespread devastation, similar to the event that led to the extinction of the dinosaurs about 65 million years ago. While events of such magnitude are rare, it is crucial to identify and monitor asteroids that could pose a threat in the future.', '2023-05-17 04:48:59', '2023-05-17 04:48:59', NULL),
(5, 'NASA and other space organizations', 'NASA and other space organizations around the world have dedicated significant resources to studying asteroids and researching methods to mitigate the threat of an impact. ', 'NASA and other space organizations around the world have dedicated significant resources to studying asteroids and researching methods to mitigate the threat of an impact. Through specialized telescopes and space missions, scientists are able to detect and track near-Earth asteroids, calculate their trajectories, and determine if they pose an imminent risk.', '2023-05-17 04:51:14', '2023-05-17 04:51:14', NULL),
(6, 'Understanding asteroids', 'Understanding asteroids goes beyond just preventing catastrophic impacts. These celestial objects provide valuable insights into the origin and evolution of the solar system.', 'Understanding asteroids goes beyond just preventing catastrophic impacts. These celestial objects provide valuable insights into the origin and evolution of the solar system. By studying the composition and structure of asteroids, scientists can gather clues about the formation of planets and stars. Additionally, asteroids may contain valuable resources such as rare metals and water, which could be exploited in the future for space exploration and human development in space.', '2023-05-17 04:53:10', '2023-05-17 04:53:10', NULL),
(7, 'Conclusion', 'In conclusion, understanding asteroids and meteors is crucial for protecting Earth from potential catastrophic impacts and for deepening our...', 'In conclusion, understanding asteroids and meteors is crucial for protecting Earth from potential catastrophic impacts and for deepening our knowledge of the universe. Constant monitoring of these objects allows us to predict and, if necessary, take preventive measures to mitigate the threat. We will continue to invest resources and efforts in asteroid and meteor research to safeguard our planet and uncover the hidden secrets of deep space.', '2023-05-17 04:56:17', '2025-06-15 16:17:18', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Van', 'vantufen@gmail.com', NULL, '$2y$10$Dbmz1pZGmSiwvG4SRNbxEO.3kmNv72gBHz781ugXL1clRENUYoGzm', 'mAcKhqdrpcUACe7r6wteSODxRU8R84m6uhpT1mOxhVchIupNnljjfDgA1yy6', '2025-06-15 14:16:14', '2025-06-15 14:16:14');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
