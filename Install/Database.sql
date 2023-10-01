CREATE TABLE `biotech_exercises` (
    `key_exercise` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `mark` tinyint(3) unsigned NOT NULL DEFAULT '0',
    `type` tinyint(3) unsigned NOT NULL,
    `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
    PRIMARY KEY (`key_exercise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

create table biotech_lessons
(
    key_lesson bigint unsigned auto_increment,
    key_exercise bigint unsigned not null,
    task varchar(1000) not null,
    mark tinyint unsigned default 0 not null,
    dt timestamp not null,
    constraint biotech_lessons_pk
        primary key (key_lesson),
    constraint biotech_lessons_biotech_exercises_key_exercise_fk
        foreign key (key_exercise) references biotech_exercises (key_exercise)
            on update cascade on delete cascade
);