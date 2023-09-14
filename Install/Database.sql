CREATE TABLE `bionic_exercises` (
    `key_exercise` timestamp NOT NULL,
    `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `mark` tinyint(3) unsigned NOT NULL DEFAULT '0',
    `type` tinyint(3) unsigned NOT NULL,
    `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`key_exercise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;