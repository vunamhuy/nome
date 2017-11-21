-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "cache" ------------------------------------
CREATE TABLE `cache` ( 
	`key` VarChar( 255 ) NOT NULL,
	`value` Text NOT NULL,
	`expiration` Int( 11 ) NOT NULL,
	CONSTRAINT `cache_key_unique` UNIQUE( `key` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "cart_items" -------------------------------
CREATE TABLE `cart_items` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`cart_id` Int( 11 ) NOT NULL,
	`product_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "carts" ------------------------------------
CREATE TABLE `carts` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`user_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "country" ----------------------------------
CREATE TABLE `country` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Text NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- ---------------------------------------------------------


-- CREATE TABLE "event_figures" ----------------------------
CREATE TABLE `event_figures` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`event_id` Int( 11 ) NOT NULL,
	`team_id` Int( 11 ) NOT NULL,
	`ball_process_percent` Int( 11 ) NOT NULL,
	`attempt` Int( 11 ) NOT NULL,
	`target_in` Int( 11 ) NOT NULL,
	`target_out` Int( 11 ) NOT NULL,
	`goals` Int( 11 ) NOT NULL,
	`target` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "event_ratio" ------------------------------
CREATE TABLE `event_ratio` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`event_id` Int( 11 ) NOT NULL,
	`team_id` Int( 11 ) NOT NULL,
	`result_id` Int( 11 ) NOT NULL,
	`ratio` Double( 8, 2 ) NOT NULL,
	`status` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- ---------------------------------------------------------


-- CREATE TABLE "event_result" -----------------------------
CREATE TABLE `event_result` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Char( 20 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "event_sport" ------------------------------
CREATE TABLE `event_sport` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`team_id` Int( 11 ) NOT NULL,
	`competitor_id` Int( 11 ) NOT NULL,
	`group_id` Int( 11 ) NOT NULL,
	`league_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`description` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 16;
-- ---------------------------------------------------------


-- CREATE TABLE "event_user_books" -------------------------
CREATE TABLE `event_user_books` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`user_id` Int( 11 ) NOT NULL,
	`ratio_id` Int( 11 ) NOT NULL,
	`scores` Int( 11 ) NOT NULL,
	`status` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 30;
-- ---------------------------------------------------------


-- CREATE TABLE "event_user_scores" ------------------------
CREATE TABLE `event_user_scores` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`user_id` Int( 11 ) NOT NULL,
	`scores` Int( 11 ) NOT NULL,
	`updated_at` Timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "facebookusers" ----------------------------
CREATE TABLE `facebookusers` ( 
	`id` BigInt( 20 ) NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	`email` VarChar( 255 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "file_type" --------------------------------
CREATE TABLE `file_type` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Char( 50 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- ---------------------------------------------------------


-- CREATE TABLE "files" ------------------------------------
CREATE TABLE `files` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`filename` VarChar( 255 ) NOT NULL,
	`type` Int( 11 ) NOT NULL,
	`user_id` Int( 11 ) NOT NULL,
	`mime` VarChar( 255 ) NOT NULL,
	`original_filename` VarChar( 255 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 37;
-- ---------------------------------------------------------


-- CREATE TABLE "league" -----------------------------------
CREATE TABLE `league` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Text NOT NULL,
	`group_status` Int( 11 ) NOT NULL,
	`countryID` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`icon` VarChar( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 7;
-- ---------------------------------------------------------


-- CREATE TABLE "migrations" -------------------------------
CREATE TABLE `migrations` ( 
	`migration` VarChar( 255 ) NOT NULL,
	`batch` Int( 11 ) NOT NULL )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "order_items" ------------------------------
CREATE TABLE `order_items` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`order_id` Int( 11 ) NOT NULL,
	`product_id` Int( 11 ) NOT NULL,
	`file_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 19;
-- ---------------------------------------------------------


-- CREATE TABLE "orders" -----------------------------------
CREATE TABLE `orders` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`user_id` Int( 11 ) NOT NULL,
	`total_paid` Float( 12, 0 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`name` Char( 50 ) NOT NULL,
	`phone` Char( 11 ) NOT NULL,
	`address` Char( 100 ) NOT NULL,
	`comment` VarChar( 250 ) NOT NULL,
	`email` Char( 50 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 10;
-- ---------------------------------------------------------


-- CREATE TABLE "password" ---------------------------------
CREATE TABLE `password` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`email` Char( 255 ) NOT NULL,
	`token` VarChar( 255 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 55;
-- ---------------------------------------------------------


-- CREATE TABLE "password_resets" --------------------------
CREATE TABLE `password_resets` ( 
	`email` VarChar( 255 ) NOT NULL,
	`token` VarChar( 255 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB;
-- ---------------------------------------------------------


-- CREATE TABLE "products" ---------------------------------
CREATE TABLE `products` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	`description` VarChar( 255 ) NOT NULL,
	`content` Text NOT NULL,
	`price` Float( 12, 0 ) NOT NULL,
	`keywords` VarChar( 250 ) NOT NULL,
	`quantity` Int( 11 ) NOT NULL,
	`imageurl` VarChar( 255 ) NOT NULL,
	`file_id` VarChar( 255 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`user_id` BigInt( 20 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 23;
-- ---------------------------------------------------------


-- CREATE TABLE "role" -------------------------------------
CREATE TABLE `role` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Text NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 5;
-- ---------------------------------------------------------


-- CREATE TABLE "role_user" --------------------------------
CREATE TABLE `role_user` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`user_id` Int( 10 ) UNSIGNED NOT NULL,
	`role_id` Int( 10 ) UNSIGNED NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 8;
-- ---------------------------------------------------------


-- CREATE TABLE "season" -----------------------------------
CREATE TABLE `season` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Text NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "settings" ---------------------------------
CREATE TABLE `settings` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Text NOT NULL,
	`content` Text NOT NULL,
	`user_id` Int( 10 ) UNSIGNED NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- ---------------------------------------------------------


-- CREATE TABLE "social_logins" ----------------------------
CREATE TABLE `social_logins` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`user_id` Int( 10 ) UNSIGNED NOT NULL,
	`provider` VarChar( 32 ) NOT NULL,
	`social_id` Text NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- ---------------------------------------------------------


-- CREATE TABLE "team" -------------------------------------
CREATE TABLE `team` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` Text NOT NULL,
	`league_id` Int( 10 ) UNSIGNED NOT NULL,
	`team_code` Text NOT NULL,
	`file_id` Text NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`user_id` BigInt( 20 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 20;
-- ---------------------------------------------------------


-- CREATE TABLE "users" ------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) NOT NULL,
	`email` VarChar( 255 ) NOT NULL,
	`password` VarChar( 60 ) NOT NULL,
	`phone` VarChar( 11 ) NOT NULL,
	`sex` Char( 10 ) NOT NULL,
	`day` Int( 2 ) NOT NULL,
	`month` Int( 2 ) NOT NULL,
	`file_id` Int( 11 ) NOT NULL,
	`remember_token` VarChar( 100 ) NULL,
	`created_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` Timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
	`year` Int( 4 ) NOT NULL,
	`scores` Int( 255 ) NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `users_email_unique` UNIQUE( `email` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 16;
-- ---------------------------------------------------------


-- Dump data of "cache" ------------------------------------
-- ---------------------------------------------------------


-- Dump data of "cart_items" -------------------------------
-- ---------------------------------------------------------


-- Dump data of "carts" ------------------------------------
INSERT INTO `carts`(`id`,`user_id`,`created_at`,`updated_at`) VALUES ( '1', '2', '2016-06-08 08:10:07', '2016-06-08 08:10:07' );
INSERT INTO `carts`(`id`,`user_id`,`created_at`,`updated_at`) VALUES ( '2', '3', '2016-06-13 01:57:21', '2016-06-13 01:57:21' );
INSERT INTO `carts`(`id`,`user_id`,`created_at`,`updated_at`) VALUES ( '3', '15', '2016-08-03 07:13:26', '2016-08-03 07:13:26' );
INSERT INTO `carts`(`id`,`user_id`,`created_at`,`updated_at`) VALUES ( '4', '1', '2016-11-30 07:26:28', '2016-11-30 07:26:28' );
-- ---------------------------------------------------------


-- Dump data of "country" ----------------------------------
INSERT INTO `country`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', 'English', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `country`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '2', 'Tây Ban Nha', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `country`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '3', 'Đức', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `country`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '4', 'Italia', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `country`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '5', 'Việt Nam', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `country`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '6', 'International', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
-- ---------------------------------------------------------


-- Dump data of "event_figures" ----------------------------
-- ---------------------------------------------------------


-- Dump data of "event_ratio" ------------------------------
INSERT INTO `event_ratio`(`id`,`event_id`,`team_id`,`result_id`,`ratio`,`status`,`created_at`,`updated_at`) VALUES ( '1', '1', '1', '1', '2.00', '0', '0000-00-00 00:00:00', '2016-07-11 10:38:43' );
INSERT INTO `event_ratio`(`id`,`event_id`,`team_id`,`result_id`,`ratio`,`status`,`created_at`,`updated_at`) VALUES ( '2', '1', '1', '2', '1.50', '1', '0000-00-00 00:00:00', '2016-07-11 10:38:43' );
INSERT INTO `event_ratio`(`id`,`event_id`,`team_id`,`result_id`,`ratio`,`status`,`created_at`,`updated_at`) VALUES ( '3', '1', '1', '3', '3.00', '0', '0000-00-00 00:00:00', '2016-07-11 10:38:43' );
INSERT INTO `event_ratio`(`id`,`event_id`,`team_id`,`result_id`,`ratio`,`status`,`created_at`,`updated_at`) VALUES ( '4', '2', '2', '1', '1.40', '1', '0000-00-00 00:00:00', '2016-07-14 07:50:51' );
INSERT INTO `event_ratio`(`id`,`event_id`,`team_id`,`result_id`,`ratio`,`status`,`created_at`,`updated_at`) VALUES ( '5', '2', '2', '2', '1.88', '0', '0000-00-00 00:00:00', '2016-07-14 07:50:51' );
INSERT INTO `event_ratio`(`id`,`event_id`,`team_id`,`result_id`,`ratio`,`status`,`created_at`,`updated_at`) VALUES ( '6', '2', '2', '3', '2.20', '0', '0000-00-00 00:00:00', '2016-07-14 07:50:51' );
-- ---------------------------------------------------------


-- Dump data of "event_result" -----------------------------
INSERT INTO `event_result`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', 'Win', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `event_result`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '2', 'Draw', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `event_result`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '3', 'Loss', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
-- ---------------------------------------------------------


-- Dump data of "event_sport" ------------------------------
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '1', '1', '2', '1', '2', '2016-07-15 09:40:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '2', '2', '3', '1', '5', '2016-07-14 10:30:00', '2016-07-29 08:43:31', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '3', '3', '4', '1', '5', '2016-07-14 17:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '4', '4', '5', '1', '2', '2016-07-16 18:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '5', '5', '6', '2', '2', '2016-07-17 19:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '6', '6', '7', '2', '2', '2016-07-14 20:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '7', '7', '8', '2', '2', '2016-07-14 21:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '8', '8', '9', '2', '4', '2016-07-14 22:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '9', '9', '10', '3', '4', '2016-07-14 23:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '10', '10', '11', '3', '3', '2016-07-14 01:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '11', '11', '12', '3', '3', '2016-07-14 15:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '12', '12', '13', '3', '1', '2016-07-14 21:30:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '13', '13', '14', '4', '1', '2016-07-14 00:30:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '14', '14', '15', '4', '1', '2016-07-14 22:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `event_sport`(`id`,`team_id`,`competitor_id`,`group_id`,`league_id`,`created_at`,`updated_at`,`description`) VALUES ( '15', '15', '16', '4', '1', '2016-07-14 20:00:00', '0000-00-00 00:00:00', '' );
-- ---------------------------------------------------------


-- Dump data of "event_user_books" -------------------------
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '1', '15', '1', '100', '0', '2017-06-20 08:32:10', '2017-06-20 08:32:10' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '2', '15', '1', '12', '0', '2017-06-22 01:49:30', '2017-06-22 01:49:30' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '3', '15', '1', '16', '0', '2017-06-22 01:51:10', '2017-06-22 01:51:10' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '4', '15', '1', '10', '0', '2017-06-22 01:51:44', '2017-06-22 01:51:44' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '5', '15', '1', '10', '0', '2017-06-22 02:02:28', '2017-06-22 02:02:28' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '6', '15', '1', '2', '0', '2017-06-22 02:03:10', '2017-06-22 02:03:10' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '7', '15', '1', '2', '0', '2017-06-22 02:03:24', '2017-06-22 02:03:24' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '8', '15', '1', '5', '0', '2017-06-22 02:19:19', '2017-06-22 02:19:19' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '9', '15', '1', '1', '0', '2017-06-22 02:19:43', '2017-06-22 02:19:43' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '10', '15', '1', '1', '0', '2017-06-22 02:21:03', '2017-06-22 02:21:03' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '11', '15', '1', '1', '0', '2017-06-22 02:21:19', '2017-06-22 02:21:19' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '12', '15', '1', '1', '0', '2017-06-22 02:28:19', '2017-06-22 02:28:19' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '13', '15', '1', '1', '0', '2017-06-22 02:28:35', '2017-06-22 02:28:35' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '14', '15', '1', '1', '0', '2017-06-22 02:28:58', '2017-06-22 02:28:58' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '15', '15', '1', '1', '0', '2017-06-22 02:30:09', '2017-06-22 02:30:09' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '16', '15', '1', '1', '0', '2017-06-22 02:31:12', '2017-06-22 02:31:12' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '17', '15', '1', '1', '0', '2017-06-22 02:31:41', '2017-06-22 02:31:41' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '18', '15', '1', '1', '0', '2017-06-22 02:32:10', '2017-06-22 02:32:10' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '19', '15', '1', '1', '0', '2017-06-22 02:32:18', '2017-06-22 02:32:18' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '20', '15', '1', '1', '0', '2017-06-22 02:35:07', '2017-06-22 02:35:07' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '21', '15', '1', '1', '0', '2017-06-22 02:35:59', '2017-06-22 02:35:59' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '22', '15', '1', '1', '0', '2017-06-22 02:36:07', '2017-06-22 02:36:07' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '23', '15', '1', '1', '0', '2017-06-22 02:36:21', '2017-06-22 02:36:21' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '24', '15', '1', '1', '0', '2017-06-22 02:36:42', '2017-06-22 02:36:42' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '25', '15', '1', '1', '0', '2017-06-22 02:37:12', '2017-06-22 02:37:12' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '26', '15', '1', '1', '0', '2017-06-22 02:37:35', '2017-06-22 02:37:35' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '27', '15', '1', '1', '0', '2017-06-22 02:38:55', '2017-06-22 02:38:55' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '28', '15', '1', '1', '0', '2017-06-22 02:39:22', '2017-06-22 02:39:22' );
INSERT INTO `event_user_books`(`id`,`user_id`,`ratio_id`,`scores`,`status`,`created_at`,`updated_at`) VALUES ( '29', '15', '1', '1', '0', '2017-06-22 02:40:22', '2017-06-22 02:40:22' );
-- ---------------------------------------------------------


-- Dump data of "event_user_scores" ------------------------
INSERT INTO `event_user_scores`(`id`,`user_id`,`scores`,`updated_at`) VALUES ( '1', '1', '126770000', '2016-07-14 07:47:56' );
INSERT INTO `event_user_scores`(`id`,`user_id`,`scores`,`updated_at`) VALUES ( '2', '2', '100627077', '2016-08-10 17:07:43' );
INSERT INTO `event_user_scores`(`id`,`user_id`,`scores`,`updated_at`) VALUES ( '3', '3', '5000', '2016-07-12 10:30:26' );
-- ---------------------------------------------------------


-- Dump data of "facebookusers" ----------------------------
INSERT INTO `facebookusers`(`id`,`name`,`email`,`created_at`,`updated_at`) VALUES ( '1030614997024280', 'Nam Huy', 'vanhuy_989@yahoo.com.vn', '2016-08-01 09:27:21', '2016-08-01 09:27:21' );
-- ---------------------------------------------------------


-- Dump data of "file_type" --------------------------------
INSERT INTO `file_type`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', 'sp', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `file_type`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '2', 'team', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `file_type`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '3', 'new', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `file_type`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '4', 'avatar', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `file_type`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '5', 'normal', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
-- ---------------------------------------------------------


-- Dump data of "files" ------------------------------------
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '1', 'phpEB02.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '2', 'php242.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '3', 'phpEB02.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '4', 'phpEB02.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '5', 'phpEB02.tmp.jpg', '0', '15', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '6', 'php242.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '7', 'phpA460.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '8', 'php242.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '9', 'php8461.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '10', 'phpC9F4.tmp.jpg', '0', '0', 'image/jpeg', 'maxresdefault.jpg', '2016-06-07 10:16:24', '2016-06-07 10:16:24' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '11', 'phpC5A5.tmp.png', '0', '0', 'image/png', 'iphone6s-scene2.png', '2016-06-13 04:08:34', '2016-06-13 04:08:34' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '12', 'php2788.tmp.jpg', '0', '0', 'image/jpeg', 'samsung-galaxy-s7-edge-sg-20.jpg', '2016-06-13 04:10:05', '2016-06-13 04:10:05' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '13', 'php3426.tmp.jpg', '0', '0', 'image/jpeg', '1520_8.jpg', '2016-06-13 08:41:06', '2016-06-13 08:41:06' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '14', 'php881F.tmp.jpg', '0', '0', 'image/jpeg', 'Apple-iPhone-6s-plus-a9-chip.jpg', '2016-06-13 10:03:23', '2016-06-13 10:03:23' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '15', 'php7389.tmp.jpg', '0', '0', 'image/jpeg', 'Apple-iPhone-6s-plus-a9-chip.jpg', '2016-06-13 10:04:23', '2016-06-13 10:04:23' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '16', 'phpF695.tmp.jpg', '0', '0', 'image/jpeg', 'Apple-iPhone-6s-plus-a9-chip.jpg', '2016-06-13 10:04:57', '2016-06-13 10:04:57' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '17', 'php1EF5.tmp.JPG', '0', '0', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-15 06:54:29', '2016-06-15 06:54:29' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '18', 'phpB06F.tmp.JPG', '0', '0', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-15 06:57:17', '2016-06-15 06:57:17' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '19', 'phpA2FE.tmp.JPG', '0', '0', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-15 06:58:20', '2016-06-15 06:58:20' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '20', 'php9BD6.tmp.JPG', '0', '0', 'image/jpeg', 'iPhone-6s-iOS-9.JPG', '2016-06-15 06:59:23', '2016-06-15 06:59:23' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '21', 'phpDB75.tmp.jpg', '0', '0', 'image/jpeg', 'images.jpg', '2016-08-03 06:27:46', '2016-08-03 06:27:46' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '22', 'php93A6.tmp.jpg', '0', '0', 'image/jpeg', 'samsung-galaxy-s7-s7-edge-5jpg-c74a3e_765w.jpg', '2016-08-03 09:25:29', '2016-08-03 09:25:29' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '23', 'php5D2C.tmp.jpg', '0', '15', 'image/jpeg', 'samsung-galaxy-s7-s7-edge-5jpg-c74a3e_765w.jpg', '2016-08-03 09:27:26', '2016-08-03 09:27:26' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '24', 'phpD5B8.tmp.jpg', '0', '0', 'image/jpeg', 'bong-da-59s-for-ios.jpg', '2016-08-05 10:06:40', '2016-08-05 10:06:40' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '25', 'php291E.tmp.png', '0', '0', 'image/png', '9e436a6036783ba03b0bf209394dec68.png', '2016-08-05 10:09:12', '2016-08-05 10:09:12' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '26', 'php13EE.tmp.png', '0', '15', 'image/png', '9e436a6036783ba03b0bf209394dec68.png', '2016-08-05 10:13:29', '2016-08-05 10:13:29' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '27', 'php3857.tmp.png', '0', '2', 'image/png', '45345.png', '2016-08-08 06:09:04', '2016-08-08 06:09:04' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '28', 'php5DDA.tmp.png', '0', '1', 'image/png', 'bg4.png', '2017-03-13 08:39:00', '2017-03-13 08:39:00' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '29', 'php2762.tmp.png', '0', '1', 'image/png', 'bg.png', '2017-03-13 08:44:13', '2017-03-13 08:44:13' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '30', 'phpD527.tmp.jpg', '0', '15', 'image/jpeg', '17857817_863046263836314_446609129_n.jpg', '2017-04-11 03:48:56', '2017-04-11 03:48:56' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '31', 'phpEDF7.tmp.jpg', '0', '15', 'image/jpeg', 'soc_messi_rondaldo_ill_b1_1296x729.jpg', '2017-04-11 03:54:30', '2017-04-11 03:54:30' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '32', 'php38ED.tmp.mp4', '0', '15', 'video/mp4', '8b85294f97c4262663a883dd42e3e07b.mp4', '2017-04-11 03:58:08', '2017-04-11 03:58:08' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '33', 'phpF684.tmp.jpg', '0', '15', 'image/jpeg', 'alpha-test-photo.jpg', '2017-04-11 04:16:23', '2017-04-11 04:16:23' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '34', 'phpA0DB.tmp.jpg', '0', '15', 'image/jpeg', 'alpha-test-photo.jpg', '2017-04-11 04:35:40', '2017-04-11 04:35:40' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '35', 'php6A1.tmp.jpg', '0', '15', 'image/jpeg', 'alpha-test-photo.jpg', '2017-04-11 07:29:47', '2017-04-11 07:29:47' );
INSERT INTO `files`(`id`,`filename`,`type`,`user_id`,`mime`,`original_filename`,`created_at`,`updated_at`) VALUES ( '36', 'phpE761.tmp.jpg', '0', '5', 'image/jpeg', 'amazing-new-ronaldo-vs-messi-el-clasico-hd-wallpaper.jpg', '2017-06-12 10:33:29', '2017-06-12 10:33:29' );
-- ---------------------------------------------------------


-- Dump data of "league" -----------------------------------
INSERT INTO `league`(`id`,`name`,`group_status`,`countryID`,`created_at`,`updated_at`,`icon`) VALUES ( '1', 'Ngoại hạng anh', '0', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `league`(`id`,`name`,`group_status`,`countryID`,`created_at`,`updated_at`,`icon`) VALUES ( '2', 'La liga', '0', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `league`(`id`,`name`,`group_status`,`countryID`,`created_at`,`updated_at`,`icon`) VALUES ( '3', 'Bundesliga', '0', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `league`(`id`,`name`,`group_status`,`countryID`,`created_at`,`updated_at`,`icon`) VALUES ( '4', 'Italia', '0', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `league`(`id`,`name`,`group_status`,`countryID`,`created_at`,`updated_at`,`icon`) VALUES ( '5', 'Việt Nam', '0', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '' );
INSERT INTO `league`(`id`,`name`,`group_status`,`countryID`,`created_at`,`updated_at`,`icon`) VALUES ( '6', 'Euro', '0', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '' );
-- ---------------------------------------------------------


-- Dump data of "migrations" -------------------------------
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2014_10_12_000000_create_users_table', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2014_10_12_100000_create_password_resets_table', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2015_09_14_190324_create_table_products', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2015_09_14_190329_create_table_files', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2015_09_15_184232_create_table_carts', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2015_09_15_184236_create_table_carts_item', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2015_09_19_191803_create_table_orders', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2015_09_19_191807_create_table_order_items', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_05_31_063945_create_table_cache', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_01_085012_create_table_settings', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_01_121734_create_table_team', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_02_033131_create_table_country', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_02_033230_create_table_league', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_03_101311_create_table_members', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_06_035003_create_table_season', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_07_025256_create_table_facebookUser', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_07_095734_create_table_role', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_07_101425_create-role-user', '1' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_09_040643_create_table_password', '2' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_13_034212_create_table_product_add_column_user_id', '3' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_13_034707_create_table_team_add_column_user_id', '4' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_16_031517_add_column_name_phone_address_checkout', '5' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_16_040029_add_column_user_namespace', '6' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_30_030957_create_table_event_sport', '7' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_06_30_062807_create_table_figures', '8' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_01_030801_create_table_event_result', '8' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_01_033003_create_table_event_result', '9' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_04_025545_create_table_figures', '10' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_04_032501_create_table_event_user_books', '10' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_04_042538_add_colum_event_result_id_and_ratio', '11' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_04_043039_create_table_event_ratio', '12' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_04_043313_create_table_event_user_books', '12' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_04_061816_create_table_event_figures', '13' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_06_065834_create_table_event_user_scores', '14' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_07_06_070355_create_table_event_figures', '15' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_08_01_094617_create-social-logins', '16' );
INSERT INTO `migrations`(`migration`,`batch`) VALUES ( '2016_08_04_093634_creat_table_file_type', '17' );
-- ---------------------------------------------------------


-- Dump data of "order_items" ------------------------------
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '1', '1', '2', '1', '2016-06-13 02:11:59', '2016-06-13 02:11:59' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '2', '1', '11', '8', '2016-06-13 02:11:59', '2016-06-13 02:11:59' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '3', '2', '12', '12', '2016-06-13 06:20:13', '2016-06-13 06:20:13' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '4', '3', '4', '8', '2016-06-16 03:48:41', '2016-06-16 03:48:41' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '5', '3', '3', '8', '2016-06-16 03:48:41', '2016-06-16 03:48:41' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '6', '4', '21', '21', '2016-08-08 09:18:10', '2016-08-08 09:18:10' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '7', '4', '22', '23', '2016-08-08 09:18:10', '2016-08-08 09:18:10' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '8', '4', '22', '23', '2016-08-08 09:18:10', '2016-08-08 09:18:10' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '9', '5', '21', '21', '2016-08-10 07:06:26', '2016-08-10 07:06:26' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '10', '6', '22', '23', '2016-08-10 07:07:50', '2016-08-10 07:07:50' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '11', '6', '7', '9', '2016-08-10 07:07:50', '2016-08-10 07:07:50' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '12', '6', '11', '11', '2016-08-10 07:07:50', '2016-08-10 07:07:50' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '13', '7', '2', '1', '2016-08-10 07:10:52', '2016-08-10 07:10:52' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '14', '7', '21', '21', '2016-08-10 07:10:52', '2016-08-10 07:10:52' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '15', '8', '22', '23', '2016-08-10 07:11:30', '2016-08-10 07:11:30' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '16', '9', '16', '16', '2017-06-06 08:15:29', '2017-06-06 08:15:29' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '17', '9', '19', '19', '2017-06-06 08:15:29', '2017-06-06 08:15:29' );
INSERT INTO `order_items`(`id`,`order_id`,`product_id`,`file_id`,`created_at`,`updated_at`) VALUES ( '18', '9', '21', '21', '2017-06-06 08:15:29', '2017-06-06 08:15:29' );
-- ---------------------------------------------------------


-- Dump data of "orders" -----------------------------------
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '1', '3', '3.89', '2016-06-13 02:11:59', '2016-06-13 02:11:59', 'nam', '098342452', 'Nam định', '', 'vannam@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '2', '2', '338', '2016-06-13 06:20:13', '2016-06-13 06:20:13', 'Nga', '087689796', 'Bắc giang', '', 'nga@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '3', '2', '13186', '2016-06-16 03:48:40', '2016-06-16 03:48:40', 'huy', '0987654321', 'hà nội', '', 'vanhuy.vu@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '4', '15', '1000000', '2016-08-08 09:18:10', '2016-08-08 09:18:10', 'Nam huy', '0904948872', 'Mỹ đình hà nội', '', 'vanhuy.vu@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '5', '2', '232', '2016-08-10 07:06:26', '2016-08-10 07:06:26', 'tapchibongdaml', '09987654321', 'Mỹ đình hà nội', 'nhận hàng thanh toán', 'toilahoangtubongda@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '6', '2', '1000000', '2016-08-10 07:07:49', '2016-08-10 07:07:49', 'Nam huy', '0904948872', 'Mỹ đình hà nội', 'nhận hàng thanh toán', 'vanhuy.vu@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '7', '2', '4559', '2016-08-10 07:10:52', '2016-08-10 07:10:52', 'Ola Osinski', '09987654321', 'Mỹ đình hà nội', 'nhận hàng thanh toán', 'huongdanml@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '8', '2', '26000000', '2016-08-10 07:11:30', '2016-08-10 07:11:30', 'tapchibongdaml', '09987654321', 'Mỹ đình hà nội', 'nhận hàng thanh toán', 'vanhuy.vu@gmail.com' );
INSERT INTO `orders`(`id`,`user_id`,`total_paid`,`created_at`,`updated_at`,`name`,`phone`,`address`,`comment`,`email`) VALUES ( '9', '15', '1423660', '2017-06-06 08:15:29', '2017-06-06 08:15:29', 'admin', '342423', 'tesst', 'a', 'admin@gmail.com' );
-- ---------------------------------------------------------


-- Dump data of "password" ---------------------------------
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '1', 'vanhuy.vu@gmail.com', '8c8418752cf97596a61de8f6d011f79e9f5f0425', '2016-06-09 04:36:03', '2016-06-09 04:36:03' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '2', 'vanhuy.vu@gmail.com', 'b5b2bdd26888524614486e24395a24f561e129ac', '2016-06-09 04:47:51', '2016-06-09 04:47:51' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '3', 'vanhuy.vu@gmail.com', 'a10498a341347e2130b93adce4a5b25eace3668d', '2016-06-09 06:05:18', '2016-06-09 06:05:18' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '4', 'vanhuy.vu@gmail.com', 'ccf92ef944df2e6d019c13bdea955c67593dbcd2', '2016-06-09 06:05:41', '2016-06-09 06:05:41' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '5', 'vanhuy.vu@gmail.com', '2b73b7d076695732d9b8f3c42c32d5b795d2678d', '2016-06-09 06:07:23', '2016-06-09 06:07:23' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '6', 'vanhuy.vu@gmail.com', '993549c294ccb285fc6c7eb9841d746ec38c5110', '2016-06-09 06:16:42', '2016-06-09 06:16:42' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '7', 'vanhuy.vu@gmail.com', '2b70f5410b97fe96c2623c7d56b97064dfe52e32', '2016-06-09 06:20:29', '2016-06-09 06:20:29' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '8', 'vanhuy.vu@gmail.com', '212687398f24746602958ec757713e4cba4fe6a3', '2016-06-09 06:22:12', '2016-06-09 06:22:12' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '9', 'vanhuy.vu@gmail.com', '6234ac7f731f8e32cf239a9adfc71d68dd949f5b', '2016-06-09 06:23:31', '2016-06-09 06:23:31' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '10', 'vanhuy.vu@gmail.com', '65c938d542766e24e36a66122e0002426afb0d71', '2016-06-09 06:28:45', '2016-06-09 06:28:45' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '11', 'vanhuy.vu@gmail.com', '10d9165701eec2ebf5afab47c711fff6c50cb027', '2016-06-09 06:29:38', '2016-06-09 06:29:38' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '12', 'vanhuy.vu@gmail.com', '27379f3e4f84b49c50320902268a915b6db59933', '2016-06-09 06:39:50', '2016-06-09 06:39:50' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '13', 'vanhuy.vu@gmail.com', 'cef78909bfca8807054e2c12c1d23d6e7ad916d6', '2016-06-09 06:40:49', '2016-06-09 06:40:49' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '14', 'vanhuy.vu@gmail.com', '8a8d4a457ef946b8375e5c3cfdedb605b3fa16bf', '2016-06-09 06:50:42', '2016-06-09 06:50:42' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '15', 'vanhuy.vu@gmail.com', 'b2e54a30fdcfeb4aefba76b7705551b9306cd92a', '2016-06-09 06:51:28', '2016-06-09 06:51:28' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '16', 'vanhuy.vu@gmail.com', 'f2410b9c660b2ef2396f76e58a939d92b1261dc6', '2016-06-09 07:32:58', '2016-06-09 07:32:58' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '17', 'vanhuy.vu@gmail.com', '3e4ecbd0384e31210217138301fcb1f800e992da', '2016-06-09 07:42:58', '2016-06-09 07:42:58' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '18', 'vanhuy.vu@gmail.com', 'd5c44358f8a12f4450d98c1a2ba792211bd524d1', '2016-06-09 07:43:18', '2016-06-09 07:43:18' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '19', 'vanhuy.vu@gmail.com', '8193744c967f7e10849ce31f20966999362f8003', '2016-06-09 07:44:18', '2016-06-09 07:44:18' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '20', 'vanhuy.vu@gmail.com', '843687487a5469be8b4b2246f8c7b279afc8d11e', '2016-06-09 07:50:40', '2016-06-09 07:50:40' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '21', 'admin@gmail.com', '7ba47f54a976eb0065da0ae02def3872db4b501a', '2016-06-09 07:51:12', '2016-06-09 07:51:12' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '22', 'vanhuy.vu@gmail.com', '6734e4b5e141cfb1747caba764b5821a34412c6c', '2016-06-09 07:52:18', '2016-06-09 07:52:18' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '23', 'vanhuy.vu@gmail.com', 'fbf2dbdc8e3cf46ff99b51e8b03a36db11802a6b', '2016-06-09 07:52:52', '2016-06-09 07:52:52' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '24', 'vanhuy.vu@gmail.com', 'c6702f760622a69efc82e3d27221585eff7e559b', '2016-06-09 07:54:56', '2016-06-09 07:54:56' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '25', 'vanhuy.vu@gmail.com', '64020113de8a871a5dab10b319aeeadad6cd93f8', '2016-06-09 07:55:29', '2016-06-09 07:55:29' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '26', 'vanhuy.vu@gmail.com', '46168d35111de463284649af47e706d2db018dd0', '2016-06-09 07:56:31', '2016-06-09 07:56:31' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '27', 'toilahoangtubongda@gmail.com', 'ff7a1cd8dea1b8e42780305eeea22f34fcf5b915', '2016-06-09 08:00:27', '2016-06-09 08:00:27' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '28', 'toilahoangtubongda@gmail.com', '342dbd2c47855f46f3c2684d37ee3055b7402749', '2016-06-09 08:05:17', '2016-06-09 08:05:17' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '29', 'toilahoangtubongda@gmail.com', 'ac7f94ef8dda32b095b742427184232c5176612d', '2016-06-09 08:09:04', '2016-06-09 08:09:04' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '30', 'toilahoangtubongda@gmail.com', '4736b3b09746794714c1f623168c54df21fc94f5', '2016-06-09 08:28:49', '2016-06-09 08:28:49' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '31', 'toilahoangtubongda@gmail.com', 'a9d84f98fa5c5965ed6cc830cb9afa596cb6b95c', '2016-06-09 08:44:16', '2016-06-09 08:44:16' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '32', 'toilahoangtubongda@gmail.com', 'f7facb9dd09ce1f928d229772349e1a5ef9482c0', '2016-06-09 08:47:19', '2016-06-09 08:47:19' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '33', 'toilahoangtubongda@gmail.com', '40ee16cfaed85a94cdf91789253f57953e6c13ae', '2016-06-09 08:56:12', '2016-06-09 08:56:12' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '34', 'toilahoangtubongda@gmail.com', 'c7a96e60e522cd17f4ca5bb1f82561997a9babd3', '2016-06-09 09:19:29', '2016-06-09 09:19:29' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '35', 'toilahoangtubongda@gmail.com', '9fc427059e2129bcd90d1b82674b6db654f5d126', '2016-06-09 09:24:16', '2016-06-09 09:24:16' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '36', 'toilahoangtubongda@gmail.com', '87b4d7703e596223ca964ee097e5354ca66f3fb2', '2016-06-09 09:24:50', '2016-06-09 09:24:50' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '37', 'toilahoangtubongda@gmail.com', '689c0dc824c61de6b5b9ebed2f2ff0d1836cf945', '2016-06-09 09:29:46', '2016-06-09 09:29:46' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '38', 'toilahoangtubongda@gmail.com', 'd731d45027a39b9bfe42ea9a24d57d6003bf2cc8', '2016-06-09 09:56:16', '2016-06-09 09:56:16' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '39', 'toilahoangtubongda@gmail.com', 'd54817f5476636823662d9e5c2aa83c5e84c7e73', '2016-06-09 09:58:42', '2016-06-09 09:58:42' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '40', 'toilahoangtubongda@gmail.com', 'e464799c5c79a10b352635cdc6d6471f78d8b6ed', '2016-06-09 10:02:36', '2016-06-09 10:02:36' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '41', 'toilahoangtubongda@gmail.com', '5843241b435fc989bfb7668421b4550d18ac5611', '2016-06-09 10:05:34', '2016-06-09 10:05:34' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '42', 'huongdanml@gmail.com', '05c8090f34e7db124b0d9fce67d8850ed36e66fb', '2016-06-09 10:06:36', '2016-06-09 10:06:36' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '43', 'huongdanml@gmail.com', 'b313bb1a9fea26e2aa949acf3bfc0ad12adc279d', '2016-06-09 10:13:23', '2016-06-09 10:13:23' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '44', 'huongdanml@gmail.com', '23b3030fc683c17b2f8566cf8351d9e0cb0bc69c', '2016-06-09 10:13:48', '2016-06-09 10:13:48' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '45', 'huongdanml@gmail.com', '94be9d280f750b7e7f7aac109a249b8e658dca1c', '2016-06-09 12:29:09', '2016-06-09 12:29:09' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '46', 'vanhuy.vu@gmail.com', '941c42fac04c38b928ea60582cfe43ce5f2ba6a1', '2016-08-08 09:31:22', '2016-08-08 09:31:22' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '47', 'vanhuy.vu@gmail.com', '9f1d6972027f023017258ef3729183175f942481', '2016-08-08 09:33:36', '2016-08-08 09:33:36' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '48', 'vanhuy.vu@gmail.com', 'c4bd6a2dc36eecf5ba414fc2ecffea696b1fd3ad', '2016-08-08 09:36:31', '2016-08-08 09:36:31' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '49', 'vanhuy.vu@gmail.com', '616c00aeb343ff7932abd4467537c8c90733e657', '2016-11-21 07:55:10', '2016-11-21 07:55:10' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '50', 'vanhuy.vu@gmail.com', '2c0e4fce79044d9b989a98789860b1b2adecee7a', '2016-11-21 07:59:07', '2016-11-21 07:59:07' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '51', 'vanhuy.vu@gmail.com', '0f401e4fede0c3f7f75163e93f24e262b67fa4c9', '2016-11-21 08:00:59', '2016-11-21 08:00:59' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '52', 'vanhuy.vu@gmail.com', 'e7f694e2ca8a6730f089be3cf9b59512ce7de7d6', '2017-02-08 08:40:35', '2017-02-08 08:40:35' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '53', 'vanhuy.vu@gmail.com', '20de0977c5bd3eb3e6ba5647c4e673e97ab81467', '2017-02-08 08:43:16', '2017-02-08 08:43:16' );
INSERT INTO `password`(`id`,`email`,`token`,`created_at`,`updated_at`) VALUES ( '54', 'vanhuy.vu@gmail.com', 'e34a4e2d4b27908eb7c5acf9250e951361e7ee35', '2017-02-08 10:16:02', '2017-02-08 10:16:02' );
-- ---------------------------------------------------------


-- Dump data of "password_resets" --------------------------
-- ---------------------------------------------------------


-- Dump data of "products" ---------------------------------
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '1', 'Sony Experia Z5', 'Iphone 6s', '', '8739', '', '0', '', '7', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '2', 'Nokia m9123', '<p>Iphone 6s &aacute;dsadsad&nbsp;</p>
', '', '4327', '', '0', '', '1', '2016-06-07 10:16:24', '2016-07-28 08:55:55', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '3', 'Iphone 6s', 'Sony Experia Z5', '', '3462', '', '0', '', '8', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '3' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '4', 'Sony Experia Z5', 'Nokia m9', '', '9724', '', '0', '', '8', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '3' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '5', 'Sony Experia Z5', 'Samsung gl s7', '', '6396', '', '0', '', '7', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '3' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '6', 'Samsung gl s7', 'Iphone 6s', '', '1975', '', '0', '', '5', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '2' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '7', 'Sony Experia Z5', 'Iphone 6s', '', '1936', '', '0', '', '9', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '2' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '8', 'Samsung gl s7', 'Sony Experia Z5', '', '2152', '', '0', '', '3', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '3' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '9', 'Nokia m9', 'Iphone 6s', '', '358', '', '0', '', '4', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '10', 'Iphone 6s', 'Nokia m9', '', '5926', '', '0', '', '10', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '11', 'samsung s7 edge', '<p>adsdasd</p>
', '', '564445', '', '0', '', '11', '2016-06-13 04:08:34', '2016-06-13 04:08:34', '2' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '12', 'samsung s7 ', '<p>drfsdfsd</p>
', '', '67675', '', '0', '', '12', '2016-06-13 04:10:05', '2016-06-13 04:10:05', '2' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '13', 'Nokia m9', '<p>Iphone 6s</p>
', '', '4327', '', '0', '', '13', '2016-06-13 08:41:06', '2016-06-13 08:41:06', '2' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '14', 'Samsung gl s7', '<p>Iphone 6s sdfsdf</p>
', '', '1975', '', '0', '', '13', '2016-06-13 08:49:43', '2016-06-13 08:49:43', '2' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '16', 'samsung s7 213123', '<p><strong>samsung s7 edge</strong></p>
', '', '423432', '', '0', '', '16', '2016-06-13 10:04:57', '2016-06-13 10:05:10', '2' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '17', 'samsung s7 edge', '<p>fgdfg</p>
', '', '1000000', '', '0', '', '17', '2016-06-15 06:54:29', '2016-06-15 06:54:29', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '18', 'samsung s7 edge', '<p>fgdfg</p>
', '', '1000000', '', '0', '', '18', '2016-06-15 06:57:18', '2016-06-15 06:57:18', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '19', 'samsung s7 edge', '<p>fgdfg</p>
', '', '1000000', '', '0', '', '19', '2016-06-15 06:58:20', '2016-06-15 06:58:20', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '20', 'samsung s7 edge', '<p>fgdfg</p>
', '', '1000000', '', '0', '', '20', '2016-06-15 06:59:23', '2016-06-15 06:59:23', '1' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '21', 'Samsung galaxy s7', 'The Samsung Galaxy S6 series didn’t have IP68 water and dust resistance, and that’s probably because it was Samsung’s first time making a device with a
', '<h2>Fast Wireless Charging</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/03/galaxy-s7-wireless-charging.jpg"><img alt="galaxy-s7-wireless-charging" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/03/galaxy-s7-wireless-charging-640x398.jpg" style="height:398px; width:640px" /></a></p>

<p>Samsung is one of the only companies to continually stress the importance of wireless charging. The Samsung Galaxy S7 and S7 Edge bring back the functionality and it&rsquo;s just as robust as ever. You can charge using multiple different standards including Qi and Samsung&rsquo;s own technology, and you even get the added bonus of charging speeds almost as fast as a standard USB wall charger. You&rsquo;ll be able to go from 0% to 100% in just about 2 hours without any cables to fiddle around with.</p>

<h2>Don&rsquo;t worry about rainy days</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/03/Samsung-Galaxy-S7-water-resistance-DSC01927.jpg"><img alt="Samsung Galaxy S7 water resistance DSC01927" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/03/Samsung-Galaxy-S7-water-resistance-DSC01927-640x360.jpg" style="height:360px; width:640px" /></a></p>

<p>The&nbsp;<a href="http://phandroid.com/samsung-galaxy-s6/" target="_blank">Samsung Galaxy S6</a>&nbsp;series didn&rsquo;t have IP68 water and dust resistance, and that&rsquo;s probably because it was Samsung&rsquo;s first time making a device with a frame predominately made of metal and glass. Well, they&rsquo;ve gotten better at it, and their refinement helped them figure out how to let your Samsung Galaxy S7 and S7 Edge survive time in the rain or&nbsp;<a href="http://phandroid.com/2016/02/17/samsung-galaxy-s7-water-resistant-tease/">an unfortunate drop into a pool</a>. The devices can last up to 30 minutes in up to 1 meter of water, so taking a swim might even be feasible (even if Samsung won&rsquo;t actually recommend it).</p>

<h2>Add more storage space with a MicroSD slot</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/03/samsung-galaxy-s7-micro-SD-slot-DSC01916.jpg"><img alt="samsung galaxy s7 micro SD slot DSC01916" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/03/samsung-galaxy-s7-micro-SD-slot-DSC01916-640x336.jpg" style="height:336px; width:640px" /></a></p>

<p>While a microSD slot hardly seems revolutionary in 2016, we thought Samsung had fallen out of love with the feature as it was missing from all their 2016 flagships. It&rsquo;s back in the Samsung Galaxy S7 and S7 Edge, though, so you can add up to 200GB of extra storage if the internal pool of memory (<a href="http://phandroid.com/2016/02/22/galaxy-s7-edge-microsd-apps/">32GB for most regions</a>) isn&rsquo;t enough for you.</p>

<h2>Secure all your apps with a fingerprint scanner</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2015/08/galaxy-s6-fingerprint.png"><img alt="galaxy s6 fingerprint" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2015/08/galaxy-s6-fingerprint-640x447.png" style="height:447px; width:640px" /></a></p>

<p>The fingerprint scanner makes its return to the Samsung Galaxy S7 family, but you won&rsquo;t be limited to using it for unlocking your device and paying for goods with Samsung Pay. That&rsquo;s because&nbsp;<a href="http://phandroid.com/2015/06/05/everything-new-in-android-marshmallow/">Android 6.0 Marshmallow includes an official API for fingerprint scanners</a>, which means&nbsp;<a href="http://phandroid.com/2016/01/20/marshmallow-fingerprint-app-locker/">some of your favorite apps can use it</a>&nbsp;for authentication instead of having to type in a password every time you use them.</p>

<h2>Stay informed with an Always-on Display</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/02/Samsung-Galaxy-S7-Always-On-Display-DSC01647.jpg"><img alt="Samsung Galaxy S7 Always On Display DSC01647" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/02/Samsung-Galaxy-S7-Always-On-Display-DSC01647-640x365.jpg" style="height:365px; width:640px" /></a></p>

<p>We always thought it odd that Samsung never opted to take proper advantage of AMOLED technology to make an always-on display, but they finally did with the Samsung Galaxy S7 and S7 Edge. You&rsquo;ll be able to see incoming notifications, the time and date, news feeds and more without having to touch the phone, and because the display lights up only the pixels it needs you don&rsquo;t sacrifice a lick of battery life.</p>

<h2>Take superior photos in the dark with a dual-pixel camera</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/02/Samsung-Galaxy-S7-low-light-comparison-DSC01628.jpg"><img alt="Samsung Galaxy S7 low light comparison DSC01628" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/02/Samsung-Galaxy-S7-low-light-comparison-DSC01628-640x410.jpg" style="height:410px; width:640px" /></a></p>

<p>You might look at the 12-megapixel sensor on the Samsung Galaxy S7 and think that it&rsquo;s lesser than the 16-megapixel sensor from yesteryear&rsquo;s model, but that&rsquo;s not the case at all. Samsung is using new dual-pixel sensor technology that captures more light and detail, so&nbsp;<a href="http://phandroid.com/2016/02/29/watch-the-samsung-galaxy-s7-camera-go-head-to-head-with-the-iphone-6s-plus-video/">low light performance is leaps and bounds better than anything else</a>&nbsp;on the market. It also has optical image stabilization, HDR, and the ability to record video in 4K or 240FPS slow motion.</p>

<h2>Pay for anything, anywhere with Samsung Pay</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2015/08/phandroid-samsung-pay-bank-of-america.jpg"><img alt="phandroid-samsung-pay-bank-of-america" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2015/08/phandroid-samsung-pay-bank-of-america-640x427.jpg" style="height:427px; width:640px" /></a></p>

<p>Samsung Pay in the Samsung Galaxy S7 and S7 Edge lets you use your phone to make purchases instead of credit cards. Most other phones rely on NFC so the store you&rsquo;re going to needs special credit card readers to support it, but&nbsp;<a href="http://phandroid.com/2015/09/28/samsung-pay-us-launch-info/">Samsung Pay uses MST technology</a>&nbsp;that lets you use your phone even if the credit card scanner doesn&rsquo;t have NFC. That makes Samsung Pay the only mobile payments platform to work with virtually every cash register out there.</p>

<h2>Extend functionality with Galaxy S7 Edge Display</h2>

<p><a href="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/02/Samsung-Galaxy-S7-Edge-Apps-Edge-screen-features-DSC01934.jpg"><img alt="Samsung Galaxy S7 Edge Apps Edge screen features DSC01934" src="http://phandroid.s3.amazonaws.com/wp-content/uploads/2016/02/Samsung-Galaxy-S7-Edge-Apps-Edge-screen-features-DSC01934-640x360.jpg" style="height:360px; width:640px" /></a></p>

<p>This feature only applies to the Samsung Galaxy S7 Edge, but the dual Edge display on the device will certainly be a selling factor for many people. Samsung has&nbsp;<a href="http://phandroid.com/2016/02/22/galaxy-s7-edge-apps-hands-on-video/">vastly improved the Edge Apps experience</a>this year with wider panels, a wealth of new apps and features, and as much customization as you can handle.</p>

<h2>What&rsquo;s your favorite Samsung Galaxy S7 feature?</h2>

<p>As you can see, there&rsquo;s a lot that the Samsung Galaxy S7 and Galaxy S7 Edge have, and not a whole lot that they can&rsquo;t do. What&rsquo;s your favorite feature? Are any of these things making the device a must-buy in your eyes? We want to hear from you, so don&rsquo;t be afraid to drop a line below and let us know!</p>
', '232', '', '0', '', '21', '2016-08-03 06:27:46', '2016-08-04 02:44:51', '15' );
INSERT INTO `products`(`id`,`name`,`description`,`content`,`price`,`keywords`,`quantity`,`imageurl`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '22', 'Samsung galaxy s7 edge', 'The phones are up for pre-order tomorrow and the phones will ship on March 11th. Expect to pay around $669.99 for the Galaxy S7 and $779.99 for the Galaxy S7 Edge

Stay tuned to IGN for a full review of the Galaxy S7 and Galaxy S7 Edge
', '<p>Physically, the phones look nearly identical to the previous generation S6 and S6 Edge, but there are subtle differences up close. The new phones are rounder, and both feature backs with curved edges. This helps a lot to make the phones more comfortable to hold, although they&#39;re both still slippery thanks to their glass backs.</p>

<p>See the Galaxy S7 in our mega-gallery below.</p>

<p><img alt="The Galaxy S7 ports are the same: headphone, micro USB, and speaker." src="http://assets1.ignimgs.com/2016/02/22/samsung-galaxy-s7-s7-edge-6jpg-19cfce_765w.jpg" /></p>

<p>The Galaxy S7 ports are the same: headphone, micro USB, and speaker.</p>

<p>&nbsp;<img alt="The Galaxy S7 looks the same, but most of the changes are under the hood." src="http://assets1.ignimgs.com/2016/02/22/samsung-galaxy-s7-s7-edge-5jpg-c74a3e_765w.jpg" /></p>

<p>The Galaxy S7 looks the same, but most of the changes are under the hood.</p>

<p>&nbsp;</p>

<p>The edges of the phone are rounder than the S6.</p>

<p>&nbsp;</p>

<p>The screen is an AMOLED display with a quad HD resolution.</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>Advertisement</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>Both phones are super comfy to hold in the hand.</p>

<p>&nbsp;</p>

<p>Gold Galaxy S7 Edge.</p>

<p>&nbsp;</p>

<p>Gold Galaxy S7 camera bump.</p>

<p>&nbsp;</p>

<p>Right: Galaxy S6 Edge+, Left: Galaxy S7 Edge</p>

<p>&nbsp;</p>

<p>Advertisement</p>

<p>&nbsp;</p>

<p>Here you can see the subtle differences between the metal frames.</p>

<p>&nbsp;</p>

<p>Not too many visual differences but the S7 Edge has more edge features.</p>

<p>&nbsp;</p>

<p>The phone is very, very slightly thicker.</p>

<p>&nbsp;</p>

<p>The camera bump on the new phone is much smaller, making it sit almost flush with the back.</p>

<p>&nbsp;</p>

<p>SIM trays up top.</p>

<p>&nbsp;</p>

<p>Advertisement</p>

<p>&nbsp;</p>

<p>Splash proof!</p>

<p>&nbsp;</p>

<p>Splash proofing without any annoying flaps on the phone.</p>

<p>&nbsp;</p>

<p>Don&#39;t expect to use the S7 under water though.</p>

<p>&nbsp;</p>

<p>Both the Galaxy S7 and S7 Edge will feature a hybrid SIM and microSD card tray.</p>

<p>&nbsp;</p>

<p>Silver Galaxy S7 almost looks chrome.</p>

<p>Both phones are a hair thicker than their predecessors, but it&rsquo;s barely noticeable. The increased thickness is due to the phone&rsquo;s water and dust resistance and a bigger battery. The 5.1&rdquo; Galaxy S7 features as 3,000mAh battery, while the 5.5&rdquo; Galaxy S7 Edge features a 3,600mAh unit.</p>

<p><img alt="Samsung Galaxy S7 SIM and microSD tray" src="http://assets1.ignimgs.com/2016/02/22/samsung-galaxy-s7-s7-edge-59jpg-0d8178_765w.jpg" style="height:508px; width:764px" /></p>

<p>I dunked the phones into a shallow fountain and they shrugged off the water without problem. This is impressive considering there&rsquo;s no need for awkward looking flaps over the phone&rsquo;s ports. Don&rsquo;t expect to go swimming with the Galaxy S7, but bar accidents will be non issue.</p>

<p><a href="http://www.ign.com/companies/samsung">Samsung</a>&#39;s AMOLED screens are gorgeous, with vibrant colors and deep blacks. Resolution stays the same at quad HD (2560x1440) but the Galaxy S7 features an always-on display that shows you time, notifications, and calendar events. Samsung claims the always-on screen will only use up 1% of your battery over a day. The company achieves this by only lighting up the pixels on the screen it needs, instead of lighting up the entire screen.</p>

<p><img alt="Galaxy S7 camera" src="http://assets2.ignimgs.com/2016/02/22/samsung-galaxy-s7-s7-edge-13jpg-0d817b_765w.jpg" style="height:508px; width:764px" /></p>

<p>Perhaps the biggest change between the Galaxy S6 and S7 is the camera. The unsightly camera bump on the old phone is nearly gone, though the camera still has a slight bump. Internally, Samsung downgraded the megapixel count from 16 to 12 this year, but that decrease in megapixel has helped the camera in low light photography. The camera features a f1.7 aperture with bigger pixels on the sensor to soak up more light. Samsung also worked on getting the camera to focus quicker, and it has paid off. In my brief time with the phones, I came away impressed with the focus speed when transitioning from photographing something up close to taking a landscape of the city.</p>

<p><img alt="Samsung Galaxy S7 Edge features" src="http://assets1.ignimgs.com/2016/02/22/samsung-galaxy-s7-s7-edge-40jpg-0d8184_765w.jpg" style="height:508px; width:764px" /></p>

<p>On the software front, both Galaxy S7 phones are rocking the latest Android 6.0 Marshmallow. TouchWiz is still a colorful mess of bloat, but you can at least theme the operating system to suit your style. The Galaxy S7 Edge gets more of a software update by allowing you to do and see more with its edge feature. You will be able to store more apps and shortcuts in the edge drawer, and Yahoo gives you headlines and sports scores. Both phones felt extremely quick thanks to the Snapdragon 820 processor and 4GB of RAM.</p>

<p><img alt="Samsung Galaxy S7 Edge fingerprint reader" src="http://assets1.ignimgs.com/2016/02/22/samsung-galaxy-s7-s7-edge-38jpg-19cfd0_765w.jpg" style="height:508px; width:764px" /></p>

<p>My early impression of the Galaxy S7 and S7 Edge is that Samsung spent its time polishing the Galaxy S6 instead of reinventing it. The Galaxy S6 was a great phone and Samsung tweaked the Galaxy S7 to be better in almost every way. The phones are more comfortable to hold, spill-proof, and bring back expandable storage, just to name a few changes. Galaxy S6 owners might be disappointed that the phone hasn&rsquo;t changed dramatically, but the Galaxy S7 adds a layer of polish on an already great phone.</p>

<p>The phones are up for pre-order tomorrow and the phones will ship on March 11th. Expect to pay around $669.99 for the Galaxy S7 and $779.99 for the Galaxy S7 Edge.</p>

<p>Stay tuned to IGN for a full review of the Galaxy S7 and Galaxy S7 Edge.</p>
', '26000000', '', '0', '', '23', '2016-08-03 09:27:26', '2016-08-04 02:45:16', '15' );
-- ---------------------------------------------------------


-- Dump data of "role" -------------------------------------
INSERT INTO `role`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '1', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `role`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '2', 'supper_user', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `role`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '3', 'basic_user', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
INSERT INTO `role`(`id`,`name`,`created_at`,`updated_at`) VALUES ( '4', 'free_user', '0000-00-00 00:00:00', '0000-00-00 00:00:00' );
-- ---------------------------------------------------------


-- Dump data of "role_user" --------------------------------
INSERT INTO `role_user`(`id`,`user_id`,`role_id`,`created_at`,`updated_at`) VALUES ( '1', '1', '1', '2016-06-07 10:16:26', '2016-06-07 10:16:26' );
INSERT INTO `role_user`(`id`,`user_id`,`role_id`,`created_at`,`updated_at`) VALUES ( '2', '2', '2', '2016-06-07 10:16:26', '2016-06-07 10:16:26' );
INSERT INTO `role_user`(`id`,`user_id`,`role_id`,`created_at`,`updated_at`) VALUES ( '3', '3', '2', '2016-06-09 03:02:27', '2016-06-09 03:02:27' );
INSERT INTO `role_user`(`id`,`user_id`,`role_id`,`created_at`,`updated_at`) VALUES ( '5', '5', '4', '2016-06-14 07:36:00', '2016-06-14 07:36:00' );
INSERT INTO `role_user`(`id`,`user_id`,`role_id`,`created_at`,`updated_at`) VALUES ( '7', '15', '3', '2016-08-02 10:01:58', '2016-08-02 10:01:58' );
-- ---------------------------------------------------------


-- Dump data of "season" -----------------------------------
-- ---------------------------------------------------------


-- Dump data of "settings" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "social_logins" ----------------------------
INSERT INTO `social_logins`(`id`,`user_id`,`provider`,`social_id`,`created_at`,`updated_at`) VALUES ( '3', '15', 'facebook', '881657065253408', '2016-08-02 10:01:58', '2016-08-02 10:01:58' );
-- ---------------------------------------------------------


-- Dump data of "team" -------------------------------------
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '1', 'Emory Bosco 1123', '3', '', '10', '2016-06-07 10:16:24', '2016-06-21 08:26:51', '1' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '2', 'Bettie Beier', '2', '', '7', '2016-06-07 10:16:24', '2016-07-28 08:46:02', '1' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '3', 'Royal Schinner', '1', '', '5', '2016-06-07 10:16:24', '2016-06-15 02:42:28', '1' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '4', 'Mrs. Jaquelin Gaylord I', '5', '', '3', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '5', 'Ola Osinski', '3', '', '4', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '6', 'Keira Von', '4', '', '5', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '7', 'Renee Cronin', '1', '', '10', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '8', 'Prof. Mortimer McLaughlin I', '4', '', '6', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '9', 'Zora Kovacek', '3', '', '10', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '10', 'Leicester City', '1', '', '3', '2016-06-15 02:40:52', '2016-06-15 02:40:52', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '11', 'Emory Bosco 1123', '3', '', '10', '2016-06-07 10:16:24', '2016-06-21 08:26:51', '1' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '12', 'Bettie Beier 12', '4', '', '7', '2016-06-07 10:16:24', '2016-06-07 10:16:24', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '13', 'Royal Schinner', '1', '', '5', '2016-06-07 10:16:24', '2016-06-15 02:42:28', '1' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '14', 'Mrs. Jaquelin Gaylord I', '5', '', '3', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '15', 'Ola Osinski', '2', '', '4', '2016-06-07 10:16:25', '2016-07-28 08:34:23', '1' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '16', 'Renee Cronin', '5', '', '10', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '17', 'Prof. Mortimer McLaughlin I', '4', '', '6', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '18', 'Zora Kovacek', '3', '', '10', '2016-06-07 10:16:25', '2016-06-07 10:16:25', '0' );
INSERT INTO `team`(`id`,`name`,`league_id`,`team_code`,`file_id`,`created_at`,`updated_at`,`user_id`) VALUES ( '19', 'Leicester City', '1', '', '5', '2016-06-15 02:40:52', '2016-06-15 02:40:52', '0' );
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`name`,`email`,`password`,`phone`,`sex`,`day`,`month`,`file_id`,`remember_token`,`created_at`,`updated_at`,`year`,`scores`) VALUES ( '1', 'admin', 'admin@gmail.com', '$2y$10$Eio9hk3qVcJGwsS8d9js5.WQytbFYXKjreD8GdE7cufC7rEPge9zG', '76869789', '', '1', '3', '29', 'emUfieSZOkcechYeGLeAXwPIbTqinzZ8LRzhbC8e2V3gkeooecbUeHgNaxAI', '2016-06-07 10:16:25', '2017-03-13 09:36:45', '1890', '0' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`phone`,`sex`,`day`,`month`,`file_id`,`remember_token`,`created_at`,`updated_at`,`year`,`scores`) VALUES ( '2', 'user', 'user@gmail.com', '$2y$10$7kc.ZLOkdistfzslUl69O.5OwCEeXp1ZXrQRRNWjMZbobqegBNRQS', '09987654321', '', '1', '1', '27', 'XFJvpw7YXZl2i2nCtv15mtFA2RRyUwPdceS48pq60IMn4YkuQHjkw0p0tMpT', '2016-06-07 10:16:26', '2016-08-08 06:27:18', '1890', '0' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`phone`,`sex`,`day`,`month`,`file_id`,`remember_token`,`created_at`,`updated_at`,`year`,`scores`) VALUES ( '3', 'Huy', 'huongdanml@gmail.com', '$2y$10$d4TpMmnweRoiObYO8kuGke4YL3SrMeRzPJO2GpAHMzu9ysqAssk8e', '', '', '0', '0', '0', 'K7Snhgp4ut12UuFrm6di2UpUnZa6jMjWp41XsqWl1uMbtG8rWdMzwADswrYz', '2016-06-09 03:02:27', '2016-06-13 02:13:00', '0', '0' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`phone`,`sex`,`day`,`month`,`file_id`,`remember_token`,`created_at`,`updated_at`,`year`,`scores`) VALUES ( '5', 'Huy', 'vanhuy.vu@gmail.com', '$2y$10$.qz4WkSPutXYfuE58FHF6uV1d7EtYnO5NjqeDpd1Vs.L8wRhwUbA6', '', '', '1', '1', '36', '5K3vrbSn4t8imynMxJTweMWUcZivZXsCD5zYeRSJ1NKqI6Ch9S7b5LrJcXAf', '2016-06-14 07:36:00', '2017-06-13 06:55:23', '1890', '0' );
INSERT INTO `users`(`id`,`name`,`email`,`password`,`phone`,`sex`,`day`,`month`,`file_id`,`remember_token`,`created_at`,`updated_at`,`year`,`scores`) VALUES ( '15', 'Nam huy', 'vanhuy_989@yahoo.com.vn', '', '09987654321', 'Male', '4', '2', '35', 'MAMxfA0rvqblrgdlxjUXc9ZiHio2HP2GEIxywFGamkgrqEMM0iq8tyBft5Ah', '2016-08-02 10:01:58', '2017-06-19 07:12:21', '1890', '0' );
-- ---------------------------------------------------------


-- CREATE INDEX "password_resets_email_index" --------------
CREATE INDEX `password_resets_email_index` USING BTREE ON `password_resets`( `email` );
-- ---------------------------------------------------------


-- CREATE INDEX "password_resets_token_index" --------------
CREATE INDEX `password_resets_token_index` USING BTREE ON `password_resets`( `token` );
-- ---------------------------------------------------------


-- CREATE INDEX "role_user_role_id_index" ------------------
CREATE INDEX `role_user_role_id_index` USING BTREE ON `role_user`( `role_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "role_user_user_id_index" ------------------
CREATE INDEX `role_user_user_id_index` USING BTREE ON `role_user`( `user_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "social_logins_user_id_index" --------------
CREATE INDEX `social_logins_user_id_index` USING BTREE ON `social_logins`( `user_id` );
-- ---------------------------------------------------------


-- CREATE INDEX "users_facebookid_index" -------------------
CREATE INDEX `users_facebookid_index` USING BTREE ON `users`( `phone` );
-- ---------------------------------------------------------


-- CREATE LINK "role_user_role_id_foreign" -----------------
ALTER TABLE `role_user`
	ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY ( `role_id` )
	REFERENCES `role`( `id` )
	ON DELETE No Action
	ON UPDATE Restrict;
-- ---------------------------------------------------------


-- CREATE LINK "role_user_user_id_foreign" -----------------
ALTER TABLE `role_user`
	ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY ( `user_id` )
	REFERENCES `users`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- ---------------------------------------------------------


-- CREATE LINK "social_logins_user_id_foreign" -------------
ALTER TABLE `social_logins`
	ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY ( `user_id` )
	REFERENCES `users`( `id` )
	ON DELETE Cascade
	ON UPDATE Restrict;
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


