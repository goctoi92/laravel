/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : laravel

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 13/09/2019 13:42:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categorys
-- ----------------------------
DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keyword` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `categorys_name_unique`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categorys
-- ----------------------------
INSERT INTO `categorys` VALUES (2, 'Thời trang nam', 'thoi-trang-nam', 1, 0, 'thời trang nam', 'thời trang nam', '2019-08-16 10:58:04', '2019-08-16 10:58:04');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `images_product_id_foreign`(`product_id`) USING BTREE,
  CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (26, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (27, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (28, '2019_08_14_101518_create_categorys_table', 1);
INSERT INTO `migrations` VALUES (29, '2019_08_14_145608_create_products_table', 1);
INSERT INTO `migrations` VALUES (30, '2019_08_14_153619_create_images_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `products_name_unique`(`name`) USING BTREE,
  INDEX `products_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `products_category_id_foreign`(`category_id`) USING BTREE,
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` smallint(2) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'NGUYEN TRUNG HIEU', 'darkboy1110@gmail.com', '$2y$10$S4luCPEGvg3rKmK4X4e96OJglV9De.AnCQCAUO8uZQorcgEiS1tGC', 1, NULL, '2019-08-19 03:31:18', '2019-08-19 03:31:18');
INSERT INTO `users` VALUES (2, 'Hieu Nguyen', 'darkboy1110@yahoo.com.vn', '$2y$10$cJ90pq34m2xi1T5.jSTKYulU49/xf7zRYGVYc5W/jWWjQKAoXH3uq', 1, 'knppMw3a4YxHpVZHyqy6WgafRanUmJgcZ2UaEvJ5', '2019-08-19 04:33:57', '2019-08-19 04:33:57');
INSERT INTO `users` VALUES (3, 'test', 'test@gmail.com', '$2y$10$hncMuljIcQTKljVWkFtdO.TXEBPEpfmjH1NiH9YrTbZfMJ334MXCW', 1, 'knppMw3a4YxHpVZHyqy6WgafRanUmJgcZ2UaEvJ5', '2019-08-19 04:34:28', '2019-08-19 04:34:28');
INSERT INTO `users` VALUES (4, 'test', 'darkboy111s0@gmail.com', '$2y$10$fcop7pmSKE8ph2bDS6GNseTZv4qIQzPDko2pwpjF6o8yKNzAwZsua', 1, 'knppMw3a4YxHpVZHyqy6WgafRanUmJgcZ2UaEvJ5', '2019-08-19 05:01:00', '2019-08-19 05:01:00');

SET FOREIGN_KEY_CHECKS = 1;
