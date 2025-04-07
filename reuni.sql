/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : reuni

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 07/04/2025 09:32:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cache
-- ----------------------------
DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache
-- ----------------------------

-- ----------------------------
-- Table structure for cache_locks
-- ----------------------------
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks`  (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cache_locks
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for galeris
-- ----------------------------
DROP TABLE IF EXISTS `galeris`;
CREATE TABLE `galeris`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeris
-- ----------------------------
INSERT INTO `galeris` VALUES (1, 'galeri/ED9tyTH0ohyD6BmBhImaOLms5LQpIUUW2wXJGLqE.jpg', 2025, '2025-04-04 01:01:23', '2025-04-04 01:01:23');
INSERT INTO `galeris` VALUES (2, 'galeri/mzi7r1zWI0LwQprLssUVCJzlWsBPhwDVPlEgysA8.png', 2025, '2025-04-04 01:01:47', '2025-04-04 01:01:47');
INSERT INTO `galeris` VALUES (3, 'galeri/5w30dNyxzjgtkYEDjni2TFYOUgZZamqadIMapY3W.jpg', 2024, '2025-04-04 01:02:01', '2025-04-04 01:02:01');
INSERT INTO `galeris` VALUES (5, 'galeri/XJwZtOIcHTwAEMTpBig6fPgmto3H0DN0lc12DNXv.jpg', 2024, '2025-04-04 10:15:37', '2025-04-04 10:15:37');
INSERT INTO `galeris` VALUES (6, 'galeri/fb1kGRw5vy9WQuPD86J9Y0h6Gi6Wkql9pWA0kDu9.png', 2025, '2025-04-04 10:21:56', '2025-04-04 10:21:56');
INSERT INTO `galeris` VALUES (7, 'galeri/ZMzqhazb8o7O5fqx7c9RxpcXTmdw8PjYNRvwSRfe.png', 2025, '2025-04-04 10:22:07', '2025-04-04 10:22:07');
INSERT INTO `galeris` VALUES (8, 'galeri/6KK8kgLsMDechWB70bmYbKGcJ9DShsmE0pMzryjq.png', 2025, '2025-04-04 10:22:18', '2025-04-04 10:22:18');

-- ----------------------------
-- Table structure for halal_bil_halals
-- ----------------------------
DROP TABLE IF EXISTS `halal_bil_halals`;
CREATE TABLE `halal_bil_halals`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `tempat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `halal_bihalal_ke` int NOT NULL,
  `mc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `qori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tahlil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sambutan_panitia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sambutan_tuan_rumah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sambutan_bendahara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mauidhoh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of halal_bil_halals
-- ----------------------------
INSERT INTO `halal_bil_halals` VALUES (1, '2025-04-02', 'Rumah Bpk. Sulkhan', 29, 'Miftachul Umam', 'Hilma Himmatul Alyah', 'Bpk. Khamjawi', 'Bpk. Sulkhan', 'Bpk. Sulkhan', 'Bpk. Warsudi', 'Bpk. Nur Cholis', '2025-04-04 07:12:38', '2025-04-04 07:12:38');

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int NULL DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED NULL DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for keluargas
-- ----------------------------
DROP TABLE IF EXISTS `keluargas`;
CREATE TABLE `keluargas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_keluarga_id` bigint UNSIGNED NOT NULL,
  `anak_ke` int NOT NULL,
  `keluarga_id` bigint UNSIGNED NULL DEFAULT NULL,
  `pasangan_id` bigint UNSIGNED NULL DEFAULT NULL,
  `status` enum('hidup','meninggal') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_meninggal` date NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `keluargas_status_keluarga_id_foreign`(`status_keluarga_id` ASC) USING BTREE,
  INDEX `keluargas_keluarga_id_foreign`(`keluarga_id` ASC) USING BTREE,
  INDEX `keluargas_pasangan_id_foreign`(`pasangan_id` ASC) USING BTREE,
  CONSTRAINT `keluargas_keluarga_id_foreign` FOREIGN KEY (`keluarga_id`) REFERENCES `keluargas` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `keluargas_pasangan_id_foreign` FOREIGN KEY (`pasangan_id`) REFERENCES `keluargas` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT,
  CONSTRAINT `keluargas_status_keluarga_id_foreign` FOREIGN KEY (`status_keluarga_id`) REFERENCES `status_keluargas` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of keluargas
-- ----------------------------
INSERT INTO `keluargas` VALUES (1, 'Abd. Jalil', 'keluarga/N5VXLVciUC2a1VrK1aay7TW2S5H7XnAUtMywZc8m.jpg', '1212-12-12', 'Ngablak', 6, 1, NULL, NULL, 'meninggal', '2025-04-01', '2025-04-04 01:04:38', '2025-04-04 01:19:00');
INSERT INTO `keluargas` VALUES (2, 'Karmiji', 'keluarga/QVukqmEMGKj9e3yfoRGp5gHtJAHFGmFueWEDqmgt.jpg', '1212-12-12', 'Ngablak', 6, 1, NULL, 1, 'meninggal', '2025-04-01', '2025-04-04 01:05:44', '2025-04-04 13:57:23');
INSERT INTO `keluargas` VALUES (3, 'Sumilah', 'keluarga/Glg57UKaLg1d0FQqTlTKlxGuKwQbud6zczK30LI0.jpg', '1212-12-12', 'Ngablak', 1, 1, 1, NULL, 'hidup', NULL, '2025-04-04 01:06:42', '2025-04-04 01:06:42');
INSERT INTO `keluargas` VALUES (4, 'Sudarsih', 'keluarga/gGuYUmuSHrkOZG8xUOmXuaV655q23WUIY93Zgho8.jpg', '1212-12-12', 'Ngablak', 1, 2, 1, NULL, 'hidup', NULL, '2025-04-04 01:07:38', '2025-04-04 01:07:38');
INSERT INTO `keluargas` VALUES (5, 'Fatimah', 'keluarga/u01jefLgEaviMe2yOpuO0xdfRCOqOtzpM5pHrlPe.jpg', '1212-12-12', 'Ngablak', 1, 3, 1, NULL, 'hidup', NULL, '2025-04-04 01:08:21', '2025-04-04 01:08:21');
INSERT INTO `keluargas` VALUES (6, 'Abd. Sukur', 'keluarga/lUbRqKvrzDMy2xpJAuVodqPJA84OplTcOTMNHeeU.jpg', '1212-12-12', 'Ngablak', 1, 4, 1, NULL, 'hidup', NULL, '2025-04-04 01:08:58', '2025-04-04 01:10:44');
INSERT INTO `keluargas` VALUES (7, 'Sutiah', 'keluarga/gUQYSJvhuJRHREnpY0w2j6YkOIu5nhN5MuSU5Q8d.jpg', '1212-12-12', 'Ngablak', 1, 5, 1, NULL, 'hidup', NULL, '2025-04-04 01:09:41', '2025-04-04 01:09:41');
INSERT INTO `keluargas` VALUES (8, 'Sulastri', 'keluarga/738PFeSz0aJ8QVNSkiha5nnoIYA4uezwHoQu5Juh.jpg', '1212-12-12', 'Ngablak', 1, 6, 1, NULL, 'hidup', NULL, '2025-04-04 01:10:25', '2025-04-04 01:10:25');
INSERT INTO `keluargas` VALUES (9, 'Mas\'ud', 'keluarga/IvbJvFqMGMqrtRAWKqE5egFkr4nYBAhvDS7c1Te8.jpg', '1212-12-12', 'Ngablak', 1, 7, 1, NULL, 'hidup', NULL, '2025-04-04 01:11:32', '2025-04-04 01:11:32');
INSERT INTO `keluargas` VALUES (10, 'Muhammad', 'keluarga/V03LQu7sHq1N7BccOx081w18k1dteTzKeeijlYmN.jpg', '1234-12-12', 'Ngablak', 1, 8, 1, NULL, 'hidup', NULL, '2025-04-04 01:12:10', '2025-04-04 07:03:26');
INSERT INTO `keluargas` VALUES (11, 'Suwati', 'keluarga/XxPnByArDwMEe8zm3A934iHQbErune7djjwLvAxJ.jpg', '1212-02-12', 'Ngablak', 1, 9, 1, NULL, 'hidup', NULL, '2025-04-04 01:13:03', '2025-04-04 01:13:03');
INSERT INTO `keluargas` VALUES (12, 'Amin', 'keluarga/x0fjlszsyDva63ofEsTcBOABUkikuAJrSz7hs9Gp.jpg', '1212-12-12', 'Ngablak', 1, 10, 1, NULL, 'hidup', NULL, '2025-04-04 01:13:46', '2025-04-04 01:13:46');
INSERT INTO `keluargas` VALUES (13, 'Suaeb', 'keluarga/k0QUSdMBYitG24RGIaRBZphEB2a34G62w7ktID9S.jpg', '1212-12-12', 'Ngablak', 1, 11, 1, NULL, 'hidup', NULL, '2025-04-04 01:14:28', '2025-04-04 01:14:28');
INSERT INTO `keluargas` VALUES (14, 'Subari', 'keluarga/LTPxNtD3DUDGFpA0WhO7XuFY9SRVLziN9D21211n.jpg', '1212-12-12', 'Ngablak', 7, 1, NULL, 3, 'hidup', NULL, '2025-04-04 01:26:50', '2025-04-04 01:30:22');
INSERT INTO `keluargas` VALUES (15, 'Abd. Rohim', 'keluarga/49n4oH0rVoq0muZnce8toK6hEEvNNtNNcmZGDUZ2.jpg', '1212-12-12', 'Ngablak', 7, 1, NULL, 4, 'hidup', NULL, '2025-04-04 01:31:37', '2025-04-04 01:31:37');
INSERT INTO `keluargas` VALUES (16, 'Jamari', 'keluarga/NC1Sklx25KLwOvUzwa6NztbZjctXWGFIsRpi6Bl2.jpg', '1212-12-12', 'Ngablak', 1, 1, 3, NULL, 'hidup', NULL, '2025-04-04 01:33:08', '2025-04-04 01:33:08');
INSERT INTO `keluargas` VALUES (17, 'Solikati', 'keluarga/JtSgYd63dHFNfl6HYk7pcGKATPbvOrUpVPltGXFh.jpg', '1111-11-11', 'Tayu', 1, 3, 3, NULL, 'hidup', NULL, '2025-04-04 01:33:59', '2025-04-04 01:33:59');
INSERT INTO `keluargas` VALUES (18, 'Mahfud', 'keluarga/ok9Bq7QQ8rXzmgSnCqjOCvuSJNiOnh3zU1GQAv0Y.jpg', '1111-11-11', 'Tayu', 1, 2, 3, NULL, 'hidup', NULL, '2025-04-04 01:34:38', '2025-04-04 01:34:38');
INSERT INTO `keluargas` VALUES (19, 'Rukati', 'keluarga/gabRwv3KLcerbCyeI4XEg185io6eHjw5Nu2haD1v.jpg', '0101-01-01', 'Tayu', 1, 5, 3, NULL, 'hidup', NULL, '2025-04-04 01:39:05', '2025-04-04 01:39:05');
INSERT INTO `keluargas` VALUES (20, 'Mar\'ati', 'keluarga/hPwmf3nTF2fb2rBzT0xH219CSYDvKM2RHZQ6ZXBV.jpg', '1010-01-01', 'ngablak', 1, 4, 3, NULL, 'hidup', NULL, '2025-04-04 01:39:53', '2025-04-04 01:39:53');
INSERT INTO `keluargas` VALUES (21, 'Suwarni', 'keluarga/qqH097FGHsoptVTOzvT5eRX6mtZk1HztpFrHQf3m.jpg', '1001-01-01', 'Ngablak', 1, 1, 4, NULL, 'hidup', NULL, '2025-04-04 02:08:41', '2025-04-04 02:08:41');
INSERT INTO `keluargas` VALUES (22, 'Sarwi', 'keluarga/aBXwYU8DEfUywId0Hf8JMRYs0iaJ41X73dYMfZOV.jpg', '0101-01-01', 'Ngablak', 7, 1, NULL, 5, 'hidup', NULL, '2025-04-04 02:09:39', '2025-04-04 02:14:49');
INSERT INTO `keluargas` VALUES (23, 'Muntamah', 'keluarga/rGQM7LQTRqMr4vElWL9A5Lhi533NxUJOJlAI9Xg8.jpg', '1212-12-12', 'Ngablak', 1, 1, 5, NULL, 'hidup', NULL, '2025-04-04 02:10:21', '2025-04-04 02:10:21');
INSERT INTO `keluargas` VALUES (24, 'Mar\'atun', 'keluarga/Ym02zewDtTPqVRApxW7A2BTaERWMi598hO5kJdwt.jpg', '1212-12-12', 'Ngablak', 7, 1, NULL, 6, 'hidup', NULL, '2025-04-04 02:11:30', '2025-04-04 02:15:22');
INSERT INTO `keluargas` VALUES (25, 'Ansori', 'keluarga/hlaADU71pxR9HBuaqManm6Qn1mbdEPpvZC8NcNh9.jpg', '1212-12-12', 'Bangkol', 1, 1, 13, NULL, 'hidup', NULL, '2025-04-04 02:12:28', '2025-04-04 02:12:28');
INSERT INTO `keluargas` VALUES (26, 'Patmi', 'keluarga/lLgvQU3kzRF8BbMU8vBWVyjVSu6bn7R2WdKp9uM3.jpg', '1010-01-01', 'Ngablak', 7, 5, NULL, 13, 'hidup', NULL, '2025-04-04 02:13:21', '2025-04-04 02:13:58');
INSERT INTO `keluargas` VALUES (27, 'Subekan', 'keluarga/RDvP36xNBUnhR2TzGGW6cql7McnWvubaVXFBLN5g.jpg', '1010-01-01', 'Ngablak', 1, 2, 13, NULL, 'hidup', NULL, '2025-04-04 02:16:01', '2025-04-04 02:16:01');
INSERT INTO `keluargas` VALUES (28, 'Rubiyati', 'keluarga/EY5tRxWooSyPWPSklpQx0EZtX96uzH2Go4vhP1AK.jpg', '1011-01-01', 'Bendokaton', 7, 3, NULL, 27, 'hidup', NULL, '2025-04-04 02:16:38', '2025-04-04 02:16:49');
INSERT INTO `keluargas` VALUES (29, 'Ida', 'keluarga/HDyMYMrlkNjZE3n61BvBlqVlhnqreOnWsnNJWBpP.jpg', '1011-01-01', 'Ngablak', 1, 1, 27, NULL, 'hidup', NULL, '2025-04-04 02:17:51', '2025-04-04 02:17:51');
INSERT INTO `keluargas` VALUES (30, 'Umam', 'keluarga/VJlYcQKAj7uegA44gjzVXNYEpEwqJfcudiEp6T1Y.jpg', '1011-01-01', 'Ngablak', 1, 2, 27, NULL, 'hidup', NULL, '2025-04-04 02:18:15', '2025-04-04 02:18:15');
INSERT INTO `keluargas` VALUES (34, 'aaa', 'keluarga/WbBP9YaQXf07Op8NE6M9CxNdaQokypVq0jwtH94U.jpg', '2025-04-01', 'Ngablak', 6, 1, 29, NULL, 'hidup', NULL, '2025-04-04 14:15:50', '2025-04-04 14:15:50');
INSERT INTO `keluargas` VALUES (35, 'Iwan', 'keluarga/oPd3I398ybWNwAxd01dQufwZHV2mdUFQotNIYne2.jpg', '2025-04-01', 'bbbb', 7, 1, 29, NULL, 'hidup', NULL, '2025-04-04 14:17:04', '2025-04-04 15:22:01');
INSERT INTO `keluargas` VALUES (36, 'coba', NULL, '2025-01-01', 'Ngablak', 3, 1, 12, NULL, 'hidup', NULL, '2025-04-06 11:21:06', '2025-04-06 11:57:37');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO `migrations` VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2025_04_03_135824_create_status_keluargas_table', 1);
INSERT INTO `migrations` VALUES (5, '2025_04_03_135825_create_galeris_table', 1);
INSERT INTO `migrations` VALUES (6, '2025_04_03_135825_create_halal_bil_halals_table', 1);
INSERT INTO `migrations` VALUES (7, '2025_04_03_135825_create_keluargas_table', 1);
INSERT INTO `migrations` VALUES (8, '2025_04_03_135825_create_petugas_table', 1);
INSERT INTO `migrations` VALUES (9, '2025_04_03_135825_create_santunans_table', 1);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `halal_bihalal_id` bigint UNSIGNED NOT NULL,
  `mc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `qori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tahlil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sambutan_panitia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sambutan_tuan_rumah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sambutan_bendahara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mauidhoh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `petugas_halal_bihalal_id_foreign`(`halal_bihalal_id` ASC) USING BTREE,
  CONSTRAINT `petugas_halal_bihalal_id_foreign` FOREIGN KEY (`halal_bihalal_id`) REFERENCES `halal_bil_halals` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of petugas
-- ----------------------------

-- ----------------------------
-- Table structure for santunans
-- ----------------------------
DROP TABLE IF EXISTS `santunans`;
CREATE TABLE `santunans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('dhuafa','yatim') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of santunans
-- ----------------------------
INSERT INTO `santunans` VALUES (2, 'Coba', 'dhuafa', 2024, '2025-04-04 09:46:55', '2025-04-04 09:46:55');
INSERT INTO `santunans` VALUES (3, 'aaa', 'yatim', 2024, '2025-04-04 09:53:30', '2025-04-04 09:53:30');
INSERT INTO `santunans` VALUES (4, 'aaa', 'dhuafa', 2024, '2025-04-04 09:59:17', '2025-04-04 09:59:17');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id` ASC) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('dv4vFrakpOdI8D7xtGF22pAmNHt5ezWBpjoiugCh', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNlM2Q3FJZDhKV293MFJuQWZsRUxhTWNSS0hsTFBqZnlsU3NPZHlQdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rZWx1YXJnYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1743938059);
INSERT INTO `sessions` VALUES ('II2u2HPppzYMY9Xuj4m0Ffcz3TRRISMKRp5q9jCN', NULL, '192.168.1.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDZpN0tDdVNWOGFVRUFUUlQyS1R6VVR2Y0NGNElEUW9ubTNlS3VoZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xOTIuMTY4LjEuNjo4MDAwL3NpbHNpbGFoIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1743940756);
INSERT INTO `sessions` VALUES ('teOK3dJQogQr9KbWTAnooL8Py28bNnBwWJq56NJ6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSHN5WDhyVEMxQ0I4N29YUkl0ZXkyeUg1a0M5U2RnMzhjREQ4bVROTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rZWx1YXJnYS8zNC9lZGl0Ijt9fQ==', 1743780225);
INSERT INTO `sessions` VALUES ('TOvSu1WhcfX4G9FPdROgznBTSOsulniFkSOVZfYK', 2, '192.168.1.4', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRG9kWnprTjNVUFNQOHRFcWFIRnhjN1ZJclQ1aDBWUjhaUEpaaEZ5WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xOTIuMTY4LjEuNjo4MDAwL2tlbHVhcmdhLzcvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1743939587);
INSERT INTO `sessions` VALUES ('ZagZybz7Bqv0TFB95mH3HXC3u3rzH6V5yiono7Ew', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT1llVGlzc2FoeWUxYXI2dkNBRWNoVEo2bzVqSGJJQUxrbzJza29sZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaWxzaWxhaCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743851021);

-- ----------------------------
-- Table structure for status_keluargas
-- ----------------------------
DROP TABLE IF EXISTS `status_keluargas`;
CREATE TABLE `status_keluargas`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status_keluargas
-- ----------------------------
INSERT INTO `status_keluargas` VALUES (1, 'Anak', NULL, NULL);
INSERT INTO `status_keluargas` VALUES (2, 'Cucu', NULL, NULL);
INSERT INTO `status_keluargas` VALUES (3, 'Cicit', NULL, NULL);
INSERT INTO `status_keluargas` VALUES (4, 'Suami', '2025-04-04 01:00:22', '2025-04-04 01:00:22');
INSERT INTO `status_keluargas` VALUES (5, 'Istri', '2025-04-04 01:00:27', '2025-04-04 01:00:27');
INSERT INTO `status_keluargas` VALUES (6, '-', '2025-04-04 01:18:37', '2025-04-04 01:18:37');
INSERT INTO `status_keluargas` VALUES (7, 'Pasangan', '2025-04-04 01:30:03', '2025-04-04 01:30:03');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Test User', 'test@example.com', '2025-04-04 00:54:23', '$2y$12$4GIQv9jfGkVzbG61HY5NROgg/oIo8UdcwmSM8vq6zuWzydLCJq.C2', 'JVAmto3inm', '2025-04-04 00:54:24', '2025-04-04 00:54:24');
INSERT INTO `users` VALUES (2, 'Umam', 'umam@gmail.com', NULL, '$2y$12$N3BswlGB92wNent1xmAYreCKjyThBsFXMinegZ8K8ihfXzEoBwvxa', NULL, '2025-04-04 00:59:58', '2025-04-04 00:59:58');
INSERT INTO `users` VALUES (3, 'admin', 'admin@gmail.com', NULL, '$2y$12$59y68pmbefk4fr1WXmlT1e4YJ2vJt1nPyapT5nr57iyMOuY0QkH4C', '00U4paUNQjzML9Pan29xPelQo7nKvfk7bILNTDqI5R2QVEIYkACsrpJsz1T4', '2025-04-04 03:11:38', '2025-04-04 03:11:38');

SET FOREIGN_KEY_CHECKS = 1;
