/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP 7
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : db_spk_sekolah

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 24/01/2022 06:48:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_alt_saw
-- ----------------------------
DROP TABLE IF EXISTS `tbl_alt_saw`;
CREATE TABLE `tbl_alt_saw`  (
  `id_alternatif_saw` int NOT NULL AUTO_INCREMENT,
  `fk_alt` int NULL DEFAULT NULL,
  `jarak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `refrensi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_alternatif_saw`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_alt_saw
-- ----------------------------
INSERT INTO `tbl_alt_saw` VALUES (1, NULL, NULL, NULL, 1);

-- ----------------------------
-- Table structure for tbl_alt_saw2
-- ----------------------------
DROP TABLE IF EXISTS `tbl_alt_saw2`;
CREATE TABLE `tbl_alt_saw2`  (
  `id_alternatif_saw` int NOT NULL AUTO_INCREMENT,
  `jarak_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jarak_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jarak_3` varbinary(11) NULL DEFAULT NULL,
  `jarak_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jarak_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jarak_6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ref6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_alternatif_saw`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_alt_saw2
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_bobot_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bobot_kriteria`;
CREATE TABLE `tbl_bobot_kriteria`  (
  `id_bobot__kriteria` int NOT NULL AUTO_INCREMENT,
  `r_fasilitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `r_akreditasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `r_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `r_beasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `r_jarak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_bobot__kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_bobot_kriteria
-- ----------------------------
INSERT INTO `tbl_bobot_kriteria` VALUES (1, '0.31581256518143', '0.31581256518143', '0.17474976324906', '0.11864878148188', '0.074976324906199', 1);
INSERT INTO `tbl_bobot_kriteria` VALUES (2, '0.31048332293184', '0.26987726232577', '0.14290964565564', '0.16107898204008', '0.11565078704667', 2);
INSERT INTO `tbl_bobot_kriteria` VALUES (3, '0.33093106039725', '0.22806715621488', '0.21140048954822', '0.13778709128731', '0.091814202552341', 1);
INSERT INTO `tbl_bobot_kriteria` VALUES (4, 'NAN', 'NAN', 'NAN', 'NAN', 'NAN', 1);
INSERT INTO `tbl_bobot_kriteria` VALUES (5, '0.33749332336289', '0.25794786881743', '0.18233361820318', '0.12725403268882', '0.094971156927679', 1);
INSERT INTO `tbl_bobot_kriteria` VALUES (6, '0.32509481407511', '0.18274457747361', '0.17744443220918', '0.1792903915804', '0.13542578466171', 1);

-- ----------------------------
-- Table structure for tbl_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kriteria`;
CREATE TABLE `tbl_kriteria`  (
  `id_kriteria` int NOT NULL AUTO_INCREMENT,
  `C11` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C12` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C13` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C14` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C15` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C21` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C22` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C23` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C24` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C25` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C31` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C32` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C33` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C34` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C35` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C41` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C42` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C43` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C44` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C45` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C51` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C52` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C53` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C54` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `C55` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kriteria
-- ----------------------------
INSERT INTO `tbl_kriteria` VALUES (1, '1', '1', '3', '3', '3', '1', '1', '3', '3', '3', '0.3333333333333333', '0.3333333333333333', '1', '3', '3', '0.3333333333333333', '0.3333333333333333', '0.3333333333333333', '1', '3', '0.3333333333333333', '0.3333333333333333', '0.3333333333333333', '0.3333333333333333', '1', 1);
INSERT INTO `tbl_kriteria` VALUES (2, '1', '1', '2', '3', '3', '1', '1', '3', '2', '1', '0.5', '0.3333333333333333', '1', '1', '2', '0.3333333333333333', '0.5', '1', '1', '3', '0.3333333333333333', '1', '0.5', '0.3333333333333333', '1', 2);
INSERT INTO `tbl_kriteria` VALUES (3, '1', '2', '2', '3', '2', '0.5', '1', '1', '3', '3', '0.5', '1', '1', '3', '2', '0.3333333333333333', '0.3333333333333333', '0.3333333333333333', '1', '4', '0.5', '0.3333333333333333', '0.5', '0.25', '1', 1);
INSERT INTO `tbl_kriteria` VALUES (4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1);
INSERT INTO `tbl_kriteria` VALUES (5, '1', '1', '2', '3', '4', '1', '1', '1', '2', '3', '0.5', '1', '1', '1', '2', '0.3333333333333333', '0.5', '1', '1', '1', '0.25', '0.3333333333333333', '0.5', '1', '1', 1);
INSERT INTO `tbl_kriteria` VALUES (6, '1', '3', '2', '4', '1', '0.3333333333333333', '1', '3', '1', '1', '0.5', '0.3333333333333333', '1', '3', '2', '0.25', '1', '0.3333333333333333', '1', '5', '1', '1', '0.5', '0.2', '1', 1);

-- ----------------------------
-- Table structure for tbl_master_alternatif
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_alternatif`;
CREATE TABLE `tbl_master_alternatif`  (
  `id_master_alt` int NOT NULL AUTO_INCREMENT,
  `kode_alt` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_alt`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_alternatif
-- ----------------------------
INSERT INTO `tbl_master_alternatif` VALUES (1, 'A1', 'SMA Jati Agung');
INSERT INTO `tbl_master_alternatif` VALUES (2, 'A2', 'SMA Darma Wanita 4');
INSERT INTO `tbl_master_alternatif` VALUES (3, 'A3', 'SMA Muhammadiyah 1');
INSERT INTO `tbl_master_alternatif` VALUES (4, 'A4', 'SMA Ulul Albab');
INSERT INTO `tbl_master_alternatif` VALUES (5, 'A5', 'SMA Wachid Hasyim 2');
INSERT INTO `tbl_master_alternatif` VALUES (6, 'A6', 'SMA Yayasan Taman');

-- ----------------------------
-- Table structure for tbl_master_bobot
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_bobot`;
CREATE TABLE `tbl_master_bobot`  (
  `id_bobot` int NOT NULL AUTO_INCREMENT,
  `keterangan bobot` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_bobot`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_bobot
-- ----------------------------
INSERT INTO `tbl_master_bobot` VALUES (1, 'Kedua Elemen Sama Penting');
INSERT INTO `tbl_master_bobot` VALUES (2, 'Mendekati sedikit lebih penting dari');
INSERT INTO `tbl_master_bobot` VALUES (3, 'Elemen yang satu sedikit penting daripada elemen y');
INSERT INTO `tbl_master_bobot` VALUES (4, 'Mendekati lebih penting dari');
INSERT INTO `tbl_master_bobot` VALUES (5, 'Elemen yang satu lebih penting daripada yang lainn');
INSERT INTO `tbl_master_bobot` VALUES (6, 'Mendekati sangat penting dari');
INSERT INTO `tbl_master_bobot` VALUES (7, 'Satu elemen jelas lebih mutlak penting daripada el');
INSERT INTO `tbl_master_bobot` VALUES (8, 'Mendekati mutlak dari');
INSERT INTO `tbl_master_bobot` VALUES (9, 'Satu elemen mutlak penting daripada elemen lainnya');

-- ----------------------------
-- Table structure for tbl_master_desa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_desa`;
CREATE TABLE `tbl_master_desa`  (
  `id_master_desa` int NOT NULL AUTO_INCREMENT,
  `nama_desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_desa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_desa
-- ----------------------------
INSERT INTO `tbl_master_desa` VALUES (1, 'Sukodono');
INSERT INTO `tbl_master_desa` VALUES (2, 'Waru');

-- ----------------------------
-- Table structure for tbl_master_jarak
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_jarak`;
CREATE TABLE `tbl_master_jarak`  (
  `id_master_jarak` int NOT NULL AUTO_INCREMENT,
  `fk_desa` int NULL DEFAULT NULL,
  `fk_alternatif` int NULL DEFAULT NULL,
  `jarak` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_jarak`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_jarak
-- ----------------------------
INSERT INTO `tbl_master_jarak` VALUES (1, 1, 1, '2');
INSERT INTO `tbl_master_jarak` VALUES (2, 1, 2, '3');
INSERT INTO `tbl_master_jarak` VALUES (3, 1, 3, '4');
INSERT INTO `tbl_master_jarak` VALUES (4, 1, 4, '5');
INSERT INTO `tbl_master_jarak` VALUES (5, 1, 5, '6');
INSERT INTO `tbl_master_jarak` VALUES (6, 1, 6, '7');
INSERT INTO `tbl_master_jarak` VALUES (7, 2, 1, '7');
INSERT INTO `tbl_master_jarak` VALUES (8, 2, 2, '6');
INSERT INTO `tbl_master_jarak` VALUES (9, 2, 3, '5');
INSERT INTO `tbl_master_jarak` VALUES (10, 2, 4, '4');
INSERT INTO `tbl_master_jarak` VALUES (11, 2, 5, '3');
INSERT INTO `tbl_master_jarak` VALUES (12, 2, 6, '2');

-- ----------------------------
-- Table structure for tbl_master_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_kriteria`;
CREATE TABLE `tbl_master_kriteria`  (
  `id_master_kriteria` int NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_kriteria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `atribut` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_kriteria
-- ----------------------------
INSERT INTO `tbl_master_kriteria` VALUES (1, 'C1', 'Fasilitas', 'benefit');
INSERT INTO `tbl_master_kriteria` VALUES (2, 'C2', 'Akreditasi', 'benefit');
INSERT INTO `tbl_master_kriteria` VALUES (3, 'C3', 'Biaya', 'cost');
INSERT INTO `tbl_master_kriteria` VALUES (4, 'C4', 'Beasiswa', 'benefit');
INSERT INTO `tbl_master_kriteria` VALUES (5, 'C5', 'Jarak', 'cost');

-- ----------------------------
-- Table structure for tbl_master_saw
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_saw`;
CREATE TABLE `tbl_master_saw`  (
  `id_master_saw` int NOT NULL AUTO_INCREMENT,
  `fk_alt` int NULL DEFAULT NULL,
  `fasilitas` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `akreditasi` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `biaya` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `beasiswa` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_saw`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_saw
-- ----------------------------
INSERT INTO `tbl_master_saw` VALUES (1, 1, '3', '3', '400', '2');
INSERT INTO `tbl_master_saw` VALUES (2, 2, '3', '5', '350', '3');
INSERT INTO `tbl_master_saw` VALUES (3, 3, '7', '5', '600', '4');
INSERT INTO `tbl_master_saw` VALUES (4, 4, '7', '5', '650', '4');
INSERT INTO `tbl_master_saw` VALUES (5, 5, '7', '5', '230', '4');
INSERT INTO `tbl_master_saw` VALUES (6, 6, '2', '3', '300', '2');

-- ----------------------------
-- Table structure for tbl_saw
-- ----------------------------
DROP TABLE IF EXISTS `tbl_saw`;
CREATE TABLE `tbl_saw`  (
  `id_bobot_saw` int NOT NULL AUTO_INCREMENT,
  `saw_fasilitas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `saw_akreditasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `saw_biaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `saw_beasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fk_desa` int NULL DEFAULT NULL,
  `fk_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_bobot_saw`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_saw
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `level` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'Adam', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);
INSERT INTO `tbl_user` VALUES (2, 'Moch. Firman Firdaus', 'firman', 'e79c7323f62151abde47e29987b38859', 1);

SET FOREIGN_KEY_CHECKS = 1;
