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

 Date: 25/12/2021 01:01:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_bobot_kriteria
-- ----------------------------

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kriteria
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_master_alternatif
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_alternatif`;
CREATE TABLE `tbl_master_alternatif`  (
  `id_master_alt` int NOT NULL AUTO_INCREMENT,
  `kode_alt` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_alt` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_alt`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_alternatif
-- ----------------------------
INSERT INTO `tbl_master_alternatif` VALUES (1, 'A1', 'SMK YPM 1 Taman');

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
-- Table structure for tbl_master_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `tbl_master_kriteria`;
CREATE TABLE `tbl_master_kriteria`  (
  `id_master_kriteria` int NOT NULL AUTO_INCREMENT,
  `kode_kriteria` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_kriteria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_master_kriteria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_master_kriteria
-- ----------------------------
INSERT INTO `tbl_master_kriteria` VALUES (1, 'C1', 'Fasilitas');
INSERT INTO `tbl_master_kriteria` VALUES (2, 'C2', 'Akreditasi');
INSERT INTO `tbl_master_kriteria` VALUES (3, 'C3', 'Biaya');
INSERT INTO `tbl_master_kriteria` VALUES (4, 'C4', 'Beasiswa');
INSERT INTO `tbl_master_kriteria` VALUES (5, 'C5', 'Jarak');

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'Adam', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

SET FOREIGN_KEY_CHECKS = 1;
