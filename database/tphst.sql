# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.5-10.3.8-MariaDB)
# Database: tphst
# Generation Time: 2018-07-29 08:14:34 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`)
VALUES
	(1,NULL,1,'Category 1','category-1','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(2,NULL,1,'Category 2','category-2','2018-06-13 08:53:20','2018-06-13 08:53:20');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `name`, `link`, `logo`, `created_at`, `updated_at`)
VALUES
	(1,'ENPI','http://www.enpi.dz/','clients/July2018/dWwzkNlzy0Q78YvFXxOz.jpeg','2018-07-29 07:30:14','2018-07-29 07:30:14'),
	(2,'AADL','http://www.aadl.com.dz/','clients/July2018/Qi17PaduLv7NnudUKTQz.GIF','2018-07-29 07:38:58','2018-07-29 07:38:58'),
	(3,'DUAC','http://www.mhuv.gov.dz/Pages/Article.aspx?a=13','clients/July2018/NTwGuedbl82BsxkTuD3P.png','2018-07-29 07:43:21','2018-07-29 07:43:21'),
	(4,'DTP','http://www.mtp.gov.dz/fr/','clients/July2018/JWpka1MsnEJSmqJs6QWn.png','2018-07-29 07:47:05','2018-07-29 07:47:05');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table data_rows
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_rows`;

CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`)
VALUES
	(1,1,'id','number','ID',1,0,0,0,0,0,'',1),
	(2,1,'name','text','Name',1,1,1,1,1,1,'',2),
	(3,1,'email','text','Email',1,1,1,1,1,1,'',3),
	(4,1,'password','password','Password',1,0,0,1,1,0,'',4),
	(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'',5),
	(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'',6),
	(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),
	(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'',8),
	(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}',10),
	(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),
	(11,1,'locale','text','Locale',0,1,1,1,1,0,'',12),
	(12,1,'settings','hidden','Settings',0,0,0,0,0,0,'',12),
	(13,2,'id','number','ID',1,0,0,0,0,0,'',1),
	(14,2,'name','text','Name',1,1,1,1,1,1,'',2),
	(15,2,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),
	(16,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),
	(17,3,'id','number','ID',1,0,0,0,0,0,'',1),
	(18,3,'name','text','Name',1,1,1,1,1,1,'',2),
	(19,3,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),
	(20,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),
	(21,3,'display_name','text','Display Name',1,1,1,1,1,1,'',5),
	(22,1,'role_id','text','Role',1,1,1,1,1,1,'',9),
	(23,4,'id','number','ID',1,0,0,0,0,0,'',1),
	(24,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),
	(25,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),
	(26,4,'name','text','Name',1,1,1,1,1,1,'',4),
	(27,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),
	(28,4,'created_at','timestamp','Created At',0,0,1,0,0,0,'',6),
	(29,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),
	(30,5,'id','number','ID',1,0,0,0,0,0,'',1),
	(31,5,'author_id','text','Author',1,0,1,1,0,1,'',2),
	(32,5,'category_id','text','Category',1,0,1,1,1,0,'',3),
	(33,5,'title','text','Title',1,1,1,1,1,1,'',4),
	(34,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',5),
	(35,5,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),
	(36,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),
	(37,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),
	(38,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,'',9),
	(39,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,'',10),
	(40,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),
	(41,5,'created_at','timestamp','Created At',0,1,1,0,0,0,'',12),
	(42,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',13),
	(43,5,'seo_title','text','SEO Title',0,1,1,1,1,1,'',14),
	(44,5,'featured','checkbox','Featured',1,1,1,1,1,1,'',15),
	(45,6,'id','number','ID',1,0,0,0,0,0,'',1),
	(46,6,'author_id','text','Author',1,0,0,0,0,0,'',2),
	(47,6,'title','text','Title',1,1,1,1,1,1,'',3),
	(48,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',4),
	(49,6,'body','rich_text_box','Body',1,0,1,1,1,1,'',5),
	(50,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),
	(51,6,'meta_description','text','Meta Description',1,0,1,1,1,1,'',7),
	(52,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,'',8),
	(53,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),
	(54,6,'created_at','timestamp','Created At',1,1,1,0,0,0,'',10),
	(55,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,'',11),
	(56,6,'image','image','Page Image',0,1,1,1,1,1,'',12),
	(57,7,'id','text','Id',1,0,0,0,0,0,NULL,1),
	(58,7,'title','text','Titre',1,1,1,1,1,0,NULL,2),
	(59,7,'description','text_area','Description',0,1,1,1,1,1,NULL,3),
	(60,7,'details','rich_text_box','Details',0,0,1,1,1,1,NULL,4),
	(61,7,'location','text','Emplacement',0,1,1,1,1,1,NULL,5),
	(62,7,'duration','text','Délai',0,1,1,1,1,1,NULL,6),
	(63,7,'cost','text','Côut',0,1,1,1,1,1,NULL,7),
	(64,7,'date','text','Date',0,1,1,1,1,1,NULL,8),
	(65,7,'image','multiple_images','Photos',0,0,1,1,1,1,NULL,9),
	(66,7,'created_at','timestamp','Ajouté le',0,0,1,0,0,0,NULL,10),
	(67,7,'updated_at','timestamp','mis à jour à',0,0,1,0,0,0,NULL,11),
	(68,8,'id','text','Id',1,0,0,0,0,0,NULL,1),
	(69,8,'name','text','Nom',1,1,1,1,1,1,NULL,2),
	(70,8,'slug','text','Slug',1,0,0,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',3),
	(71,8,'description','rich_text_box','Description',0,0,1,1,1,1,NULL,4),
	(72,8,'mission','text_area','Mission',0,0,1,1,1,1,NULL,5),
	(73,8,'vision','text_area','Vision',0,0,1,1,1,1,NULL,6),
	(74,8,'experience','text_area','Experience',0,0,1,1,1,1,NULL,7),
	(75,8,'image','image','Image',0,1,1,1,1,1,NULL,8),
	(76,8,'guide_pdf','file','Guide Pdf',0,0,1,1,1,1,NULL,9),
	(77,8,'guide_word','file','Guide Word',0,0,1,1,1,1,NULL,10),
	(78,8,'created_at','timestamp','Crée le',0,0,1,0,0,0,NULL,11),
	(79,8,'updated_at','timestamp','Mis à jour à',0,0,0,0,0,0,NULL,12),
	(80,9,'id','text','Id',1,0,0,0,0,0,NULL,1),
	(81,9,'name','text','Nom',1,1,1,1,1,1,NULL,2),
	(82,9,'link','text','Lien',0,1,1,1,1,1,NULL,3),
	(83,9,'logo','image','Logo',0,1,1,1,1,1,NULL,4),
	(84,9,'created_at','timestamp','Crée le',0,1,1,1,0,1,NULL,5),
	(85,9,'updated_at','timestamp','Mis à jour à',0,0,0,0,0,0,NULL,6);

/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table data_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_types`;

CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`)
VALUES
	(1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','','',1,0,NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(7,'projects','projects','Projet','Projets','voyager-company','TPHST\\Project',NULL,NULL,NULL,1,0,'{\"order_column\":\"id\",\"order_display_column\":\"title\"}','2018-07-09 08:53:59','2018-07-09 08:53:59'),
	(8,'services','services','Service','Services','voyager-tools','TPHST\\Service',NULL,NULL,NULL,1,0,'{\"order_column\":\"id\",\"order_display_column\":\"name\"}','2018-07-11 07:40:34','2018-07-11 07:40:34'),
	(9,'clients','clients','Client','Clients','voyager-people','TPHST\\Client',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null}','2018-07-29 07:15:38','2018-07-29 07:15:38');

/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menu_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_items`;

CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`)
VALUES
	(1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2018-06-13 08:53:19','2018-06-13 08:53:19','voyager.dashboard',NULL),
	(2,1,'Media','','_self','voyager-images',NULL,NULL,9,'2018-06-13 08:53:19','2018-07-29 07:19:55','voyager.media.index',NULL),
	(3,1,'Users','','_self','voyager-person',NULL,NULL,8,'2018-06-13 08:53:19','2018-07-29 07:19:55','voyager.users.index',NULL),
	(4,1,'Roles','','_self','voyager-lock',NULL,NULL,7,'2018-06-13 08:53:19','2018-07-29 07:19:55','voyager.roles.index',NULL),
	(5,1,'Tools','','_self','voyager-tools',NULL,NULL,11,'2018-06-13 08:53:19','2018-07-29 07:19:49',NULL,NULL),
	(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2018-06-13 08:53:19','2018-07-09 08:54:20','voyager.menus.index',NULL),
	(7,1,'Database','','_self','voyager-data',NULL,5,2,'2018-06-13 08:53:19','2018-07-09 08:54:20','voyager.database.index',NULL),
	(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2018-06-13 08:53:19','2018-07-09 08:54:20','voyager.compass.index',NULL),
	(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2018-06-13 08:53:19','2018-07-09 08:54:20','voyager.bread.index',NULL),
	(10,1,'Settings','','_self','voyager-settings',NULL,NULL,12,'2018-06-13 08:53:19','2018-07-29 07:19:49','voyager.settings.index',NULL),
	(11,1,'Categories','','_self','voyager-categories',NULL,NULL,10,'2018-06-13 08:53:20','2018-07-29 07:19:55','voyager.categories.index',NULL),
	(12,1,'Posts','','_self','voyager-news',NULL,NULL,5,'2018-06-13 08:53:20','2018-07-29 07:19:55','voyager.posts.index',NULL),
	(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,6,'2018-06-13 08:53:20','2018-07-29 07:19:55','voyager.pages.index',NULL),
	(14,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2018-06-13 08:53:20','2018-07-09 08:54:20','voyager.hooks',NULL),
	(15,1,'Projets','','_self','voyager-company',NULL,NULL,2,'2018-07-09 08:53:59','2018-07-09 08:54:28','voyager.projects.index',NULL),
	(16,1,'Services','','_self','voyager-tools',NULL,NULL,4,'2018-07-11 07:40:34','2018-07-29 07:20:00','voyager.services.index',NULL),
	(17,1,'Clients','','_self','voyager-people',NULL,NULL,3,'2018-07-29 07:15:38','2018-07-29 07:20:00','voyager.clients.index',NULL);

/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'admin','2018-06-13 08:53:19','2018-06-13 08:53:19');

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2016_01_01_000000_add_voyager_user_fields',1),
	(4,'2016_01_01_000000_create_data_types_table',1),
	(5,'2016_05_19_173453_create_menu_table',1),
	(6,'2016_10_21_190000_create_roles_table',1),
	(7,'2016_10_21_190000_create_settings_table',1),
	(8,'2016_11_30_135954_create_permission_table',1),
	(9,'2016_11_30_141208_create_permission_role_table',1),
	(10,'2016_12_26_201236_data_types__add__server_side',1),
	(11,'2017_01_13_000000_add_route_to_menu_items_table',1),
	(12,'2017_01_14_005015_create_translations_table',1),
	(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),
	(14,'2017_03_06_000000_add_controller_to_data_types_table',1),
	(15,'2017_04_21_000000_add_order_to_data_rows_table',1),
	(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),
	(17,'2017_08_05_000000_add_group_to_settings_table',1),
	(18,'2017_11_26_013050_add_user_role_relationship',1),
	(19,'2017_11_26_015000_create_user_roles_table',1),
	(20,'2018_03_11_000000_add_user_settings',1),
	(21,'2018_03_14_000000_add_details_to_data_types_table',1),
	(22,'2018_03_16_000000_make_settings_value_nullable',1),
	(23,'2016_01_01_000000_create_pages_table',2),
	(24,'2016_01_01_000000_create_posts_table',2),
	(25,'2016_02_15_204651_create_categories_table',2),
	(26,'2017_04_11_000000_alter_post_nullable_fields_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`)
VALUES
	(1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/page1.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2018-06-13 08:53:20','2018-06-13 08:53:20');

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`permission_id`, `role_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(11,1),
	(12,1),
	(13,1),
	(14,1),
	(15,1),
	(16,1),
	(17,1),
	(18,1),
	(19,1),
	(20,1),
	(21,1),
	(22,1),
	(23,1),
	(24,1),
	(25,1),
	(26,1),
	(27,1),
	(28,1),
	(29,1),
	(30,1),
	(31,1),
	(32,1),
	(33,1),
	(34,1),
	(35,1),
	(36,1),
	(37,1),
	(38,1),
	(39,1),
	(40,1),
	(42,1),
	(43,1),
	(44,1),
	(45,1),
	(46,1),
	(47,1),
	(48,1),
	(49,1),
	(50,1),
	(51,1),
	(52,1),
	(53,1),
	(54,1),
	(55,1),
	(56,1);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`)
VALUES
	(1,'browse_admin',NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(2,'browse_bread',NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(3,'browse_database',NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(4,'browse_media',NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(5,'browse_compass',NULL,'2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(6,'browse_menus','menus','2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(7,'read_menus','menus','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(8,'edit_menus','menus','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(9,'add_menus','menus','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(10,'delete_menus','menus','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(11,'browse_roles','roles','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(12,'read_roles','roles','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(13,'edit_roles','roles','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(14,'add_roles','roles','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(15,'delete_roles','roles','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(16,'browse_users','users','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(17,'read_users','users','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(18,'edit_users','users','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(19,'add_users','users','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(20,'delete_users','users','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(21,'browse_settings','settings','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(22,'read_settings','settings','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(23,'edit_settings','settings','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(24,'add_settings','settings','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(25,'delete_settings','settings','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(26,'browse_categories','categories','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(27,'read_categories','categories','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(28,'edit_categories','categories','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(29,'add_categories','categories','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(30,'delete_categories','categories','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(31,'browse_posts','posts','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(32,'read_posts','posts','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(33,'edit_posts','posts','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(34,'add_posts','posts','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(35,'delete_posts','posts','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(36,'browse_pages','pages','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(37,'read_pages','pages','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(38,'edit_pages','pages','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(39,'add_pages','pages','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(40,'delete_pages','pages','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(41,'browse_hooks',NULL,'2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(42,'browse_projects','projects','2018-07-09 08:53:59','2018-07-09 08:53:59'),
	(43,'read_projects','projects','2018-07-09 08:53:59','2018-07-09 08:53:59'),
	(44,'edit_projects','projects','2018-07-09 08:53:59','2018-07-09 08:53:59'),
	(45,'add_projects','projects','2018-07-09 08:53:59','2018-07-09 08:53:59'),
	(46,'delete_projects','projects','2018-07-09 08:53:59','2018-07-09 08:53:59'),
	(47,'browse_services','services','2018-07-11 07:40:34','2018-07-11 07:40:34'),
	(48,'read_services','services','2018-07-11 07:40:34','2018-07-11 07:40:34'),
	(49,'edit_services','services','2018-07-11 07:40:34','2018-07-11 07:40:34'),
	(50,'add_services','services','2018-07-11 07:40:34','2018-07-11 07:40:34'),
	(51,'delete_services','services','2018-07-11 07:40:34','2018-07-11 07:40:34'),
	(52,'browse_clients','clients','2018-07-29 07:15:38','2018-07-29 07:15:38'),
	(53,'read_clients','clients','2018-07-29 07:15:38','2018-07-29 07:15:38'),
	(54,'edit_clients','clients','2018-07-29 07:15:38','2018-07-29 07:15:38'),
	(55,'add_clients','clients','2018-07-29 07:15:38','2018-07-29 07:15:38'),
	(56,'delete_clients','clients','2018-07-29 07:15:38','2018-07-29 07:15:38');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`)
VALUES
	(1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-06-13 08:53:20','2018-06-13 08:53:20');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `title`, `description`, `details`, `location`, `duration`, `cost`, `date`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'RECONSTRUCTION D\'UN OUVRAGE D\'ART',NULL,NULL,'RN18 PK37+700 (OUED DILMI)',NULL,NULL,NULL,NULL,'2018-07-09 08:56:08','2018-07-09 08:56:08'),
	(2,'Travaux de viabilisation AADL','Réalisation des travaux de viabilisation de 2000 logements et des locaux à usage commercial et professionel y afférent << Programme des 230000 logements Location-vente >>',NULL,'Ville nouvelle Sidi Abdellah WILIYA d\'ALGER',NULL,NULL,NULL,NULL,'2018-07-09 08:59:50','2018-07-09 09:01:17'),
	(3,'TRAITEMENT DES GLISSEMENTS','(LOT N° 02 ET LOT N° 04)',NULL,'Route Nationale 66',NULL,NULL,NULL,NULL,'2018-07-09 09:02:31','2018-07-09 09:02:31'),
	(4,'Travaux de resorption','Réalisation des travaux de resorption du deficit en V.R.D',NULL,'La cité 680 logements Bananier WILIYA de Blida',NULL,NULL,NULL,NULL,'2018-07-09 09:03:56','2018-07-09 09:03:56'),
	(5,'Travaux d\'amenagement et VRD','Travaux d\'amenagement et VRD du pole universitaire El Affroune WILIYA de Blida',NULL,'Pole universitaire El Affroune WILIYA de Blida',NULL,NULL,NULL,NULL,'2018-07-09 09:34:13','2018-07-09 09:34:37'),
	(6,'Amenagement de piste forestiéres','Amenagement et ouverture de piste forestiéres LOT N° 12',NULL,NULL,NULL,NULL,NULL,NULL,'2018-07-09 09:36:01','2018-07-09 09:36:01');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`)
VALUES
	(1,'admin','Administrator','2018-06-13 08:53:19','2018-06-13 08:53:19'),
	(2,'user','Normal User','2018-06-13 08:53:19','2018-06-13 08:53:19');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guide_pdf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `guide_word` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `name`, `slug`, `description`, `mission`, `vision`, `experience`, `image`, `guide_pdf`, `guide_word`, `created_at`, `updated_at`)
VALUES
	(1,'Travaux Publics','travaux-publics','<h4><strong><span style=\"font-family: \'Open Sans\', sans-serif; font-size: 15px; background-color: #f6f6f6;\">La r&eacute;alisation des travaux routiers et autoroutiers constitue le m&eacute;tier de base de l&rsquo;entreprise depuis 2005. L&rsquo;exp&eacute;rience capitalis&eacute;e dans les travaux de rev&ecirc;tement des routes et autoroutes ainsi que des voies express, a fait du l\'entreprise TPHST Fr&eacute;res Kheniche un leader incontest&eacute; du domaine en Alg&eacute;rie.</span></strong></h4>',NULL,NULL,NULL,'services/July2018/moYyJruNMGO9ygQryexn.png',NULL,NULL,'2018-07-11 07:48:56','2018-07-11 07:48:56'),
	(2,'Hydraulic','hydraulic','<p style=\"margin: 15px 0px 0.0001pt; color: #6e6e6e; font-family: \'Trebuchet MS\', Verdana, Arial, sans-serif; text-align: justify;\">Le travaux hydraulique est l&rsquo;une des activit&eacute;s principale du SARL TPHST, pr&eacute;sent dans les projets de travaux hydrauliques urbains et agricoles avec l&rsquo;ex&eacute;cution de projets d\'alimentation en eau potable ou d\'assainissement avec la pose de conduites, installation de stations de pompage, et construction de r&eacute;servoirs. L\'entreprise c&rsquo;est sp&eacute;cialis&eacute; dans la distribution et l&rsquo;acheminement de l&rsquo;eau &agrave; travers tous types de canalisations, la construction et la r&eacute;novation des r&eacute;servoirs d&rsquo;eau potable, et de l&rsquo;installation de levage, de pompes et de pose de conduites.<span style=\"font-size: 12pt; line-height: 18.4px; font-family: \'Times New Roman\', serif;\">&nbsp;<br /></span></p>\r\n<p style=\"margin: 15px 0px; color: #6e6e6e; font-family: \'Trebuchet MS\', Verdana, Arial, sans-serif; text-align: justify;\">Le SARL TPHST lance ses 1ers projets de travaux hydrauliques en 2017 avec ENPI Alger pour l&rsquo;alimentation en eau potable de la r&eacute;gion de Staouali ainsi que le Projet alimentation en eau potable partir 2000 Logements AADL. Vient ensuite le projet 872 Logements ENPI dans la r&eacute;gion centre.</p>',NULL,NULL,NULL,'services/July2018/crgFvgM7G5oykPezCXea.png',NULL,NULL,'2018-07-11 08:15:43','2018-07-11 08:15:43'),
	(3,'Sous Terrain','sous-terrain','<h1><strong><span style=\"color: #6f6f6f; font-family: arial, liberation, verdana, helvetica, sans-serif; font-size: 12px;\">Aucun chantier souterrain ne ressemble &agrave; un autre et les techniques utilis&eacute;es sont tr&egrave;s vari&eacute;es&nbsp;: tunnelier, abattage &agrave; l&rsquo;explosif ou attaque ponctuelle pour les creusements, boulonnage, clouage de front de taille.</span></strong></h1>',NULL,NULL,NULL,'services/July2018/8yTbM7i4fC8U7tuZAkpH.jpg',NULL,NULL,'2018-07-11 08:53:14','2018-07-11 08:53:14'),
	(4,'Espace Vert','espace-vert','<p>Un espace vert d&eacute;signe, en urbanisme, tout espace d\'agr&eacute;ment v&eacute;g&eacute;talis&eacute; (engazonn&eacute;, arbor&eacute;, &eacute;ventuellement plant&eacute; de fleurs et d\'arbres et buissons d\'ornement, et souvent garni de pi&egrave;ces d\'eau et cheminements). L\'expression est g&eacute;n&eacute;ralement plut&ocirc;t employ&eacute;e aux espaces publics ou semi-publics. Le mot sous-entend une situation en milieu urbain ou p&eacute;ri-urbain, en tout cas en milieu construit.</p>',NULL,NULL,NULL,'services/July2018/6R0j8OMPRTBOWGL8g4gu.jpg',NULL,NULL,'2018-07-11 09:12:34','2018-07-11 09:12:34'),
	(5,'Eclairage','eclairage','<p><strong style=\"color: #000000; font-family: helveticaneuelt_stdregular, Arial, Helvetica, sans-serif; font-size: 12px;\">L&rsquo;&eacute;clairage public</strong><span style=\"color: #000000; font-family: helveticaneuelt_stdregular, Arial, Helvetica, sans-serif; font-size: 12px;\">&nbsp;est l&rsquo;ensemble des moyens d&rsquo;&eacute;clairage mis en &oelig;uvre dans les espaces publics, &agrave; l&rsquo;int&eacute;rieur et &agrave; l&rsquo;ext&eacute;rieur des villes, tr&egrave;s g&eacute;n&eacute;ralement en bordures des voiries et places. Le&nbsp;</span><strong style=\"color: #000000; font-family: helveticaneuelt_stdregular, Arial, Helvetica, sans-serif; font-size: 12px;\">service &Eacute;clairage Public de TPHST&nbsp;</strong><span style=\"color: #000000; font-family: helveticaneuelt_stdregular, Arial, Helvetica, sans-serif; font-size: 12px;\">&oelig;uvre aux c&ocirc;t&eacute;s de ses clients pour assurer&nbsp;</span><strong style=\"color: #000000; font-family: helveticaneuelt_stdregular, Arial, Helvetica, sans-serif; font-size: 12px;\">la construction, la maintenance, l&rsquo;entretien et la s&eacute;curisation du r&eacute;seau d&rsquo;&eacute;clairage public</strong><span style=\"color: #000000; font-family: helveticaneuelt_stdregular, Arial, Helvetica, sans-serif; font-size: 12px;\">. Nous sommes aussi pr&eacute;sents d&egrave;s l&rsquo;origine des projets en proposant des solutions qui tiennent compte de l&rsquo;&eacute;volution des technologies, des r&egrave;gles l&eacute;gislatives et normatives qui encadrent les installations d&rsquo;&eacute;clairage public, ainsi que des exigences environnementales.</span></p>',NULL,NULL,NULL,'services/July2018/micd54vc7Cga4C0Opp4Q.jpg',NULL,NULL,'2018-07-11 09:19:07','2018-07-11 09:19:07'),
	(6,'Route','route','<p style=\"margin: 0px; padding: 0px 0px 10px; color: #6f6f6f; font-family: arial, liberation, verdana, helvetica, sans-serif; font-size: 12px;\">Actuellement, la route est un &eacute;l&eacute;ment indispensable &agrave; la vie humaine. La libert&eacute;, l&rsquo;&eacute;change, la culture et le loisir passent aussi par la voiture. Il convient toujours de se poser la question de savoir si ce qui est fait est juste pour assurer le devenir. Il est important d&rsquo;avoir une d&eacute;marche \"route et d&eacute;veloppement durable\".</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 10px; color: #6f6f6f; font-family: arial, liberation, verdana, helvetica, sans-serif; font-size: 12px;\">Pour r&eacute;pondre aux exigences de confort et de s&eacute;curit&eacute;, la r&eacute;alisation d&rsquo;une route exige des comp&eacute;tences nombreuses et vari&eacute;es.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 10px; color: #6f6f6f; font-family: arial, liberation, verdana, helvetica, sans-serif; font-size: 12px;\">Sa conception impose bien des &eacute;tudes pr&eacute;alables pour d&eacute;finir&nbsp;: nombre de voies, dimensions et structure de la chauss&eacute;e, caract&eacute;ristiques de la couche de surface.<br class=\"autobr\" style=\"margin: 0px; padding: 0px;\" />Sa r&eacute;alisation fait appel &agrave; des techniques, des mat&eacute;riaux et des mat&eacute;riels sp&eacute;cifiques.</p>\r\n<p style=\"margin: 0px; padding: 0px 0px 10px; color: #6f6f6f; font-family: arial, liberation, verdana, helvetica, sans-serif; font-size: 12px;\">Fr&eacute;quent&eacute;e par des millions de conducteurs, la route demande aussi un entretien permanent et une assistance constante &agrave; l&rsquo;utilisateur.<br class=\"autobr\" style=\"margin: 0px; padding: 0px;\" />Conception, construction et exploitation utilisent constamment les technologies de pointe, en &eacute;volution permanente</p>',NULL,NULL,NULL,'services/July2018/Mkc0aQAftZPJ6zmgg3EI.jpg',NULL,NULL,'2018-07-11 09:25:42','2018-07-11 09:25:42'),
	(7,'TRAVAUX VRD','travaux-vrd','<p>Les Bureaux d&rsquo;Etudes de l&rsquo;entreprise TPHST sont &eacute;galement au service des travaux VRD.</p>','l’aménagement urbain,\r\nl’infrastructure VRD : les VRD concerne la voirie (routes, chaussées, bordures, trottoirs…) et les réseaux divers (réseaux d’assainissement, réseaux d’adduction d’eau potable…), les VRD sont indispensables dans tout projet d’aménagement et de construction, les VRD intègrent la réalisation des infrastructures nécessaires (voiries, assainissement, électricité, gaz, eau potable, télécommunication …),\r\nla conception routière,\r\nl’assainissement\r\nl’hydraulique',NULL,NULL,NULL,NULL,NULL,'2018-07-11 09:35:45','2018-07-11 09:35:45'),
	(8,'Terrassement','terrassement','<p>Nous r&eacute;alisons tous travaux de terrassement pour votre maison individuelle ou b&acirc;timent professionnel. Nous pr&eacute;parons le terrassement pour votre future piscine. Nous sommes &eacute;quip&eacute;s pour r&eacute;aliser tous types de terrassement pour les grosses structure dit \"en plein masse\". Nous r&eacute;alisons le d&eacute;blaiement , facile ou difficile d\'acc&egrave;s pour nettoyer les zones en construction ou ayant subit des intemp&eacute;ries. Nous sommes experts dans le domaine du terrassement, contactez-nous gratuitement.</p>',NULL,NULL,NULL,'services/July2018/7ACbUyeBvIwdPe1qXwow.jpg',NULL,NULL,'2018-07-11 09:39:29','2018-07-11 09:39:29'),
	(9,'Assainissement','assainissement','<p>Nous vous proposons nos services et notre exp&eacute;rience dans le domaine de l&rsquo;assainissement . Pour l\'installation d\'assainissement autonome, syst&egrave;me d\'&eacute;puration ou de filtration, nous adaptons le syst&egrave;me qui vous convient. Nous installons les &eacute;quipements n&eacute;cessaires aux eaux us&eacute;es et pluviales. Notre soci&eacute;t&eacute; a obtenu la certification Car&egrave;ne. Nous mettons tous les jours notre savoir-faire &agrave; votre disposition et nous en sommes fi&egrave;res.</p>',NULL,NULL,NULL,'services/July2018/UgOGeUK9wIiMfsvXJhCr.jpg',NULL,NULL,'2018-07-11 09:41:44','2018-07-11 09:41:44');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`)
VALUES
	(1,'site.title','Site Title','Site Title','','text',1,'Site'),
	(2,'site.description','Site Description','Site Description','','text',2,'Site'),
	(3,'site.logo','Site Logo','settings/June2018/Gyd56sD2pxXnVrk5Pjfh.png','','image',3,'Site'),
	(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),
	(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),
	(6,'admin.title','Admin Title','Voyager','','text',1,'Admin'),
	(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),
	(8,'admin.loader','Admin Loader','','','image',3,'Admin'),
	(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),
	(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),
	(11,'site.info_email','Information Email','info@sarltphst.com',NULL,'text',6,'Site'),
	(12,'site.phone_number','Phone Number','023919561',NULL,'text',7,'Site'),
	(13,'site.address','Physical Address','Cité Belouadi L\'arbaa Blida',NULL,'text',8,'Site'),
	(14,'about.image','Image','settings/July2018/KrsYPfjFaAcPks5F2JUP.jpg',NULL,'image',9,'About'),
	(15,'about.frame','Experience','settings/July2018/zG4vGXreVqiP92gfGYps.png',NULL,'image',10,'About'),
	(16,'about.background','Background image','settings/July2018/Lhh9GDMlofysUY9JNxui.jpg',NULL,'image',11,'About'),
	(17,'projects.background','Background image','settings/July2018/tMQbEugEBsoCJdCqU4mh.jpg',NULL,'image',12,'Projects'),
	(19,'stats.background','Background image','settings/July2018/9ALaarZkqzy6IzISInjQ.jpg',NULL,'image',13,'Stats'),
	(20,'about.testimonies_background','Testimonies Background Image','settings/July2018/pfI3t3gBK4woyzL1IqOL.jpg',NULL,'image',14,'About');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table translations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `translations`;

CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`)
VALUES
	(1,'data_types','display_name_singular',5,'pt','Post','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(2,'data_types','display_name_singular',6,'pt','Página','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(3,'data_types','display_name_singular',1,'pt','Utilizador','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(4,'data_types','display_name_singular',4,'pt','Categoria','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(5,'data_types','display_name_singular',2,'pt','Menu','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(6,'data_types','display_name_singular',3,'pt','Função','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(7,'data_types','display_name_plural',5,'pt','Posts','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(8,'data_types','display_name_plural',6,'pt','Páginas','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(9,'data_types','display_name_plural',1,'pt','Utilizadores','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(10,'data_types','display_name_plural',4,'pt','Categorias','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(11,'data_types','display_name_plural',2,'pt','Menus','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(12,'data_types','display_name_plural',3,'pt','Funções','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(13,'categories','slug',1,'pt','categoria-1','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(14,'categories','name',1,'pt','Categoria 1','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(15,'categories','slug',2,'pt','categoria-2','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(16,'categories','name',2,'pt','Categoria 2','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(17,'pages','title',1,'pt','Olá Mundo','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(18,'pages','slug',1,'pt','ola-mundo','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(20,'menu_items','title',1,'pt','Painel de Controle','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(21,'menu_items','title',2,'pt','Media','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(22,'menu_items','title',12,'pt','Publicações','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(23,'menu_items','title',3,'pt','Utilizadores','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(24,'menu_items','title',11,'pt','Categorias','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(25,'menu_items','title',13,'pt','Páginas','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(26,'menu_items','title',4,'pt','Funções','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(27,'menu_items','title',5,'pt','Ferramentas','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(28,'menu_items','title',6,'pt','Menus','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(29,'menu_items','title',7,'pt','Base de dados','2018-06-13 08:53:20','2018-06-13 08:53:20'),
	(30,'menu_items','title',10,'pt','Configurações','2018-06-13 08:53:20','2018-06-13 08:53:20');

/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`)
VALUES
	(1,1,'Admin','admin@admin.com','users/default.png','$2y$10$xPsKXtYmfaz5DuzMMAVeAOM2A2Um8JgCUtXX4dVOvl.RqPoNNFOna','UfEkunWIK2OLmGtNQpaGVsHC2gRQUpXHIqZOJnlNtMKJ6APc6fPnN37xzZX4',NULL,'2018-06-13 08:53:20','2018-06-13 08:53:20');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
