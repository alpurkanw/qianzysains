/*
 Navicat Premium Data Transfer

 Source Server         : local-3306(old)
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : qianzy

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 06/03/2024 21:01:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_buku
-- ----------------------------
DROP TABLE IF EXISTS `tb_buku`;
CREATE TABLE `tb_buku`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `penulis` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `editor` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `jum_stok` int(8) NULL DEFAULT NULL,
  `isbn` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `tgl_terbit` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `ukuran` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '0',
  `harga_jual` decimal(15, 0) NULL DEFAULT NULL,
  `kategori` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berat` int(11) NULL DEFAULT NULL,
  `versi_cetak` int(1) NULL DEFAULT NULL,
  `versi_digital` int(1) NULL DEFAULT NULL,
  `desk` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `link_shoope` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `link_tokopedia` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `link_google` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_buku
-- ----------------------------
INSERT INTO `tb_buku` VALUES (2, 'fintech dan teknologi', 'penulis', 'editor', NULL, '0', '20', '30 cm x 30 cm ', 85000, '16', 2, 1, 1, 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak', 'https://shopee.co.id/TCL-Smart-Android-TV-43-50-55-inch-43A30-50A30-55A30-A30-Pengganti-43A20-50A20-55A20-Android-11-NEW-Ultra-HD-UHD-4K-HDR-Google-TV-Android11-PROMO-i.6148639.6199524473?sp_atk=c9a69083-7836-49bd-9e78-90eb2948d725&xptdk=c9a69083-7836-49bd-9e78-90eb2948d725', NULL, '-', 'coverbook_fintech.jpeg');
INSERT INTO `tb_buku` VALUES (3, 'judul buku', 'penulis', 'editor', NULL, '123', '20', '30 cm x 30 cm ', 100000, NULL, 30, 1, 1, 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata leta', NULL, NULL, 'https://www.google.co.id/maps?hl=en&tab=rl', 'empty_image.png');
INSERT INTO `tb_buku` VALUES (4, 'tes mental', 'penulis', 'editor', 100, '876543', '20', '20', 100000, '16', 2, 0, 0, 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata leta', 'https://shopee.co.id/Logitech-M330-Mouse-Wireless-Silent-Click-i.37146675.628778282?sp_atk=dc3cf73b-754f-4a66-b529-9ba56d203293&xptdk=dc3cf73b-754f-4a66-b529-9ba56d203293', 'https://www.tokopedia.com/ringke/ringke-samsung-galaxy-s20-fe-fusion-clear-softcase-anti-crack-hybrid', 'https://www.google.co.id/maps/@-6.187233,106.8060391,15z?hl=en', 'sepatu.jpg');

-- ----------------------------
-- Table structure for tb_invoice
-- ----------------------------
DROP TABLE IF EXISTS `tb_invoice`;
CREATE TABLE `tb_invoice`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(56) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kurir` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bank` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_pesan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `batas_bayar` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_invoice
-- ----------------------------
INSERT INTO `tb_invoice` VALUES (1, 'alpurkan', 'depok', '081314307374', 'alpurkan@gmail.com', 'pos', 'mandiri', '20200120', '20200121');
INSERT INTO `tb_invoice` VALUES (2, 'nama', 'lengkap', '123', 'email123@gmail.com', 'jne', 'bca', '20200120 015757', '20200121 015757');
INSERT INTO `tb_invoice` VALUES (3, '', '', '', '', 'jne', 'bca', '20200120 021454', '20200121 021454');
INSERT INTO `tb_invoice` VALUES (4, '', '', '', '', 'jne', 'bca', '20200120 021528', '20200121 021528');
INSERT INTO `tb_invoice` VALUES (5, '', '', '', '', 'jne', 'bca', '20200120 021613', '20200121 021613');
INSERT INTO `tb_invoice` VALUES (6, '', '', '', '', 'jne', 'bca', '20200120 021623', '20200121 021623');
INSERT INTO `tb_invoice` VALUES (7, '', '', '', '', 'jne', 'bca', '20200120 021648', '20200121 021648');
INSERT INTO `tb_invoice` VALUES (8, '', '', '', '', 'jne', 'bca', '20200120 021710', '20200121 021710');
INSERT INTO `tb_invoice` VALUES (9, '', '', '', '', 'jne', 'bca', '20200120 021823', '20200121 021823');
INSERT INTO `tb_invoice` VALUES (10, '', '', '', '', 'jne', 'bca', '20200120 021907', '20200121 021907');
INSERT INTO `tb_invoice` VALUES (11, '', '', '', '', 'jne', 'bca', '20200120 022118', '20200121 022118');
INSERT INTO `tb_invoice` VALUES (12, NULL, NULL, NULL, NULL, NULL, NULL, '20200120 022118', '20200121 022118');
INSERT INTO `tb_invoice` VALUES (13, '', '', '', '', 'jne', 'bca', '20200120 022915', '20200121 022915');
INSERT INTO `tb_invoice` VALUES (14, NULL, NULL, NULL, NULL, NULL, NULL, '20200120 022915', '20200121 022915');
INSERT INTO `tb_invoice` VALUES (15, '', '', '', '', 'jne', 'bca', '20200120 022927', '20200121 022927');
INSERT INTO `tb_invoice` VALUES (16, '', '', '', '', 'jne', 'bca', '20200120 023244', '20200121 023244');
INSERT INTO `tb_invoice` VALUES (17, '', '', '', '', 'jne', 'bca', '20200120 023604', '20200121 023604');
INSERT INTO `tb_invoice` VALUES (18, 'alpurkan widianto', 'depok', '081314307374', 'alpurkan@gmail.com', 'jne', 'bca', '20200120 025243', '20200121 025243');
INSERT INTO `tb_invoice` VALUES (19, NULL, NULL, NULL, NULL, NULL, NULL, '20200120 025243', '20200121 025243');
INSERT INTO `tb_invoice` VALUES (20, 'alpurkan widianto', 'alamat', '081314307374', 'alpurkan@gmail.com', 'jne', 'bca', '20200120 025435', '20200121 025435');
INSERT INTO `tb_invoice` VALUES (21, 'nama lengkap', 'alamat', 'no telp', 'email123@gmail.com', 'jne', 'bca', '20200120 035001', '20200121 035001');
INSERT INTO `tb_invoice` VALUES (22, 'alpurkan widianto', 'alamat', '081314307374', 'alpurkan@gmail.com', 'jne', 'bca', '20200120 054338', '20200121 054338');
INSERT INTO `tb_invoice` VALUES (23, 'alpurkan widianto', 'alamat lengkap', '081314307374', 'alpurkan@gmail.com', 'jne', 'bca', '20200120 071551', '20200121 071551');
INSERT INTO `tb_invoice` VALUES (24, 'sdsd', 'sdsd', 'sdsds', 'sdsd@gmail.com', 'tiki', 'bca', '20200121 082340', '20200122 082340');
INSERT INTO `tb_invoice` VALUES (25, 'sdsd', 'sdsd', 'sdsds', 'sdsd@gmail.com', 'tiki', 'bca', '20200121 082809', '20200122 082809');
INSERT INTO `tb_invoice` VALUES (26, 'sdsd', 'sdsd', 'sdsds', 'sdsd@gmail.com', 'tiki', 'bca', '20200121 082941', '20200122 082941');
INSERT INTO `tb_invoice` VALUES (27, 'sdsd', 'sdsd', 'sdsds', 'sdsd@gmail.com', 'tiki', 'bca', '20200121 083008', '20200122 083008');
INSERT INTO `tb_invoice` VALUES (28, '', '', '', '', 'jne', 'bca', '20200121 083129', '20200122 083129');
INSERT INTO `tb_invoice` VALUES (29, '', '', '', '', 'jne', 'bca', '20200121 083354', '20200122 083354');
INSERT INTO `tb_invoice` VALUES (30, '', '', '', '', 'jne', 'bca', '20200121 083454', '20200122 083454');
INSERT INTO `tb_invoice` VALUES (31, '', '', '', '', 'jne', 'bca', '20200121 083546', '20200122 083546');
INSERT INTO `tb_invoice` VALUES (32, NULL, NULL, NULL, NULL, NULL, NULL, '20200121 083547', '20200122 083547');
INSERT INTO `tb_invoice` VALUES (33, '', '', '', '', 'jne', 'bca', '20200121 083610', '20200122 083610');
INSERT INTO `tb_invoice` VALUES (34, '', '', '', '', 'jne', 'bca', '20200121 083642', '20200122 083642');
INSERT INTO `tb_invoice` VALUES (35, '', '', '', '', 'jne', 'bca', '20200121 083734', '20200122 083734');
INSERT INTO `tb_invoice` VALUES (36, '', '', '', '', 'jne', 'bca', '20200121 085007', '20200122 085007');
INSERT INTO `tb_invoice` VALUES (37, '', '', '', '', 'jne', 'bca', '20200121 085503', '20200122 085503');
INSERT INTO `tb_invoice` VALUES (38, '', '', '', '', 'jne', 'bca', '20200121 085527', '20200122 085527');
INSERT INTO `tb_invoice` VALUES (39, '', '', '', '', 'jne', 'bca', '20200121 085553', '20200122 085553');
INSERT INTO `tb_invoice` VALUES (40, '', '', '', '', 'jne', 'bca', '20200121 090847', '20200122 090847');
INSERT INTO `tb_invoice` VALUES (41, '', '', '', '', 'pos', 'cimb', '20200201 053921', '20200202 053921');
INSERT INTO `tb_invoice` VALUES (42, 'erj', 'werw', 'erwr', 'er', 'jne', 'bca', '20200202 150914', '20200203 150914');
INSERT INTO `tb_invoice` VALUES (43, 'Tes', 'Tes', '086544', 'Tt@gmail.com', 'jne', 'bca', '20200204 175316', '20200205 175316');
INSERT INTO `tb_invoice` VALUES (44, 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'pos', 'bca', '20200205 194239', '20200206 194239');
INSERT INTO `tb_invoice` VALUES (45, 'coba ikhsan', 'bekasi timur ', '081282192442', 'santenkelapa@gmail.com', 'jne', 'bca', '20200205 194940', '20200206 194940');
INSERT INTO `tb_invoice` VALUES (46, 'sds', 'sdsd', '082125353335', 'alpurkan@gmail.com', 'jne', 'bca', '20200327 163405', '20200328 163405');
INSERT INTO `tb_invoice` VALUES (47, '', '', '', '', 'jne', 'bca', '20200330 223147', '20200331 223147');
INSERT INTO `tb_invoice` VALUES (48, '', '', '', '', 'jne', 'bca', '20200613 162243', '20200614 162243');
INSERT INTO `tb_invoice` VALUES (49, '', '', '', '', 'jne', 'bca', '20200613 162334', '20200614 162334');
INSERT INTO `tb_invoice` VALUES (50, '', '', '', '', 'jne', 'bri', '20200613 184435', '20200614 184435');
INSERT INTO `tb_invoice` VALUES (51, '', '', '', '', 'jne', 'bca', '20200615 211411', '20200616 211411');
INSERT INTO `tb_invoice` VALUES (52, NULL, NULL, NULL, NULL, NULL, NULL, '20210205 130504', '20210206 130504');
INSERT INTO `tb_invoice` VALUES (53, NULL, NULL, NULL, NULL, NULL, NULL, '20210209 063427', '20210210 063427');

-- ----------------------------
-- Table structure for tb_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori`;
CREATE TABLE `tb_kategori`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `ket` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kategori
-- ----------------------------
INSERT INTO `tb_kategori` VALUES (7, '7', 'alpurkan2');
INSERT INTO `tb_kategori` VALUES (12, 'ketgori', 'keterangan');
INSERT INTO `tb_kategori` VALUES (14, 'ketgori', '222');
INSERT INTO `tb_kategori` VALUES (15, 'ketgori2', '222');
INSERT INTO `tb_kategori` VALUES (16, 'Buku Pelajaran', 'Buku Pelajaran SMA ');

-- ----------------------------
-- Table structure for tb_pesanan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pesanan`;
CREATE TABLE `tb_pesanan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_inv` int(11) NULL DEFAULT NULL,
  `id_brg` int(11) NULL DEFAULT NULL,
  `nama_brg` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah` int(3) NULL DEFAULT NULL,
  `harga` int(10) NULL DEFAULT NULL,
  `pilihan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 120 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_pesanan
-- ----------------------------
INSERT INTO `tb_pesanan` VALUES (16, 1, 4, 'laptop', 1, 12000000, NULL);
INSERT INTO `tb_pesanan` VALUES (17, 2, 4, 'laptop', 1, 12000000, NULL);
INSERT INTO `tb_pesanan` VALUES (18, 3, 2, 'kamera', 1, 10000000, NULL);
INSERT INTO `tb_pesanan` VALUES (19, 15, 1, 'sepatu', 1, 300000, NULL);
INSERT INTO `tb_pesanan` VALUES (20, 16, 1, 'sepatu', 1, 300000, NULL);
INSERT INTO `tb_pesanan` VALUES (21, 16, 4, 'laptop', 1, 12000000, NULL);
INSERT INTO `tb_pesanan` VALUES (22, 16, 2, 'kamera', 1, 10000000, NULL);
INSERT INTO `tb_pesanan` VALUES (23, 17, 1, 'sepatu', 1, 300000, NULL);
INSERT INTO `tb_pesanan` VALUES (24, 17, 4, 'laptop', 1, 12000000, NULL);
INSERT INTO `tb_pesanan` VALUES (25, 17, 2, 'kamera', 1, 10000000, NULL);
INSERT INTO `tb_pesanan` VALUES (26, 20, 1, 'sepatu', 1, 300000, NULL);
INSERT INTO `tb_pesanan` VALUES (27, 20, 7, 'tes', 1, 20, NULL);
INSERT INTO `tb_pesanan` VALUES (28, 20, 6, 'devan1', 1, 20, NULL);
INSERT INTO `tb_pesanan` VALUES (29, 20, 2, 'kamera', 1, 10000000, NULL);
INSERT INTO `tb_pesanan` VALUES (30, 21, 1, 'sepatu', 2, 300000, NULL);
INSERT INTO `tb_pesanan` VALUES (31, 21, 2, 'kamera', 2, 10000000, NULL);
INSERT INTO `tb_pesanan` VALUES (32, 22, 1, 'sepatu', 2, 300000, NULL);
INSERT INTO `tb_pesanan` VALUES (33, 22, 2, 'kamera', 1, 10000000, NULL);
INSERT INTO `tb_pesanan` VALUES (34, 22, 4, 'laptop', 1, 12000000, NULL);
INSERT INTO `tb_pesanan` VALUES (41, 36, 2, 'kamera', 1, 10000000, '');
INSERT INTO `tb_pesanan` VALUES (42, 36, 4, 'laptop', 1, 12000000, '');
INSERT INTO `tb_pesanan` VALUES (45, 39, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (46, 22, 2, 'www', 1, 100000, 'ssdsd');
INSERT INTO `tb_pesanan` VALUES (47, 22, 1, 'se', 2, 100000, 'ssdsdsd');
INSERT INTO `tb_pesanan` VALUES (100, 40, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (101, 40, 2, 'kamera', 1, 10000000, '');
INSERT INTO `tb_pesanan` VALUES (102, 41, 2, 'kamera', 1, 10000000, '');
INSERT INTO `tb_pesanan` VALUES (103, 41, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (104, 42, 1, 'sepatu', 6, 300000, '');
INSERT INTO `tb_pesanan` VALUES (105, 42, 4, 'laptop', 1, 12000000, '');
INSERT INTO `tb_pesanan` VALUES (106, 43, 4, 'laptop', 1, 12000000, '');
INSERT INTO `tb_pesanan` VALUES (107, 44, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (108, 44, 2, 'kamera', 1, 10000000, '');
INSERT INTO `tb_pesanan` VALUES (109, 45, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (110, 46, 1, 'sepatu', 2, 300000, '');
INSERT INTO `tb_pesanan` VALUES (111, 47, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (112, 48, 2, 'kamera', 1, 10000000, '');
INSERT INTO `tb_pesanan` VALUES (113, 49, 4, 'laptop', 3, 12000000, '');
INSERT INTO `tb_pesanan` VALUES (114, 49, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (115, 49, 2, 'kamera', 1, 10000000, '');
INSERT INTO `tb_pesanan` VALUES (116, 50, 1, 'sepatu', 2, 300000, '');
INSERT INTO `tb_pesanan` VALUES (117, 51, 1, 'sepatu', 1, 300000, '');
INSERT INTO `tb_pesanan` VALUES (118, 52, 2, 'kamera', 1, 10000000, '');
INSERT INTO `tb_pesanan` VALUES (119, 53, 4, 'laptop', 1, 12000000, '');

-- ----------------------------
-- Table structure for tb_team
-- ----------------------------
DROP TABLE IF EXISTS `tb_team`;
CREATE TABLE `tb_team`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urutan` int(3) NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `jabatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `twt` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `fb` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ig` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_team
-- ----------------------------
INSERT INTO `tb_team` VALUES (5, 5, 'namae', 'jabtanr', 'email123r@gmail.com', '0r', '0r', 'IGr', 'team-3.jpg', 'keteranganr');
INSERT INTO `tb_team` VALUES (6, 6, 'nma', 'sdsd', 'su@gmail.com', '0', '0', '', 'azzahra_salsabila.JPG', '');
INSERT INTO `tb_team` VALUES (7, 7, 'alpurkan2', 'jabatan', 'email123@gmail.com', '', 'https://www.facebook.com/profile.php?id=100084905646003', 'https://www.instagram.com/alpurkan.w/?hl=id', 'kurniati.jpg', 'Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak');
INSERT INTO `tb_team` VALUES (10, 8, 'tesss3', '4443', '', '', '', '', 'foto_gw.jpg', '');
INSERT INTO `tb_team` VALUES (11, 9, 'tess', '', '', '', '', '', 'foto_gw.jpg', '');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `role_id` tinyint(1) NULL DEFAULT NULL,
  `is_active` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'admin', NULL, 'admin', '123', 1, 1);
INSERT INTO `tb_user` VALUES (2, 'cust', NULL, 'cust', '123', 2, 1);
INSERT INTO `tb_user` VALUES (3, 'nama', 'email123@gmail.com', 'username', 'pass2', 2, 0);
INSERT INTO `tb_user` VALUES (4, 'alpurkan widianto', 'alpurkan@gmail.com', 'admin', '123', 2, 0);
INSERT INTO `tb_user` VALUES (5, 'Scarlet', 'email@email.com', '<script>alert(1)</script>', 'rmg12345', 2, 0);
INSERT INTO `tb_user` VALUES (6, 'Beni', 'nsgob3l@gmail.com', 'gob3l', 'Nisarbfd76', 2, 0);
INSERT INTO `tb_user` VALUES (7, 'Designer', 'rgiangiacomo@aol.com', 'Laila Gleichner', '8L821HkjzC4Cz3F', 2, 0);
INSERT INTO `tb_user` VALUES (8, 'Fish', 'lanze@comcast.net', 'Elijah Boyer', 'IFVAdhodn493khj', 2, 0);
INSERT INTO `tb_user` VALUES (9, 'Intelligent', 'fairsash@yahoo.com.au', 'Marianne MacGyver', 'Gg679ku6THIYQpX', 2, 0);
INSERT INTO `tb_user` VALUES (10, 'Car', '5129819640@vtext.com', 'Jakayla Oberbrunner', 'd9ZRne59o9DLu_I', 2, 0);
INSERT INTO `tb_user` VALUES (11, 'payment', 'interac226@protonmail.com', 'Jaunita9', 'vdkKGTYdWZrm7hB', 2, 0);
INSERT INTO `tb_user` VALUES (12, 'Incredible Wooden Mouse', 'pay.invoice12@gmail.com', 'Easter_Hauck', 'YCya73tqwx5eOD4', 2, 0);
INSERT INTO `tb_user` VALUES (13, 'Afghanistan', 'payments@raindropsco.com', 'Fred.Yundt64', 'iW1nKEceGnhWCWl', 2, 0);
INSERT INTO `tb_user` VALUES (14, 'mobile', 'izriahhh@gmail.com', 'Dillon.OReilly', 'CdqJcbf_2LkOoA4', 2, 0);
INSERT INTO `tb_user` VALUES (15, 'Illinois', 'stellasharman@yahoo.com', 'Carlotta.Price', '0a276WXYqaDCcG5', 2, 0);
INSERT INTO `tb_user` VALUES (16, 'Specialist', 'hetzerjared@gmail.com', 'Irma_Shields', 'Zy0ROQxbmNUpW2V', 2, 0);
INSERT INTO `tb_user` VALUES (17, 'compressing', 'leroybell7602@gmail.com', 'Benny_Runolfsdottir', 'p_sQAny1PFh8GWH', 2, 0);
INSERT INTO `tb_user` VALUES (18, 'okok', 'diluxgans@gmail.com', 'okok', 'okok', 2, 0);
INSERT INTO `tb_user` VALUES (19, 'Rustic', 'marietta.galit@yahoo.com', 'Sonya67', 'U6HOA9sKRO6b6PB', 2, 0);
INSERT INTO `tb_user` VALUES (20, 'Legacy', 'marcusgrey18@gmail.com', 'Anastasia_Ullrich76', '71vrY1olvUBJl_T', 2, 0);
INSERT INTO `tb_user` VALUES (21, 'Handmade Concrete Computer', 'Rickie.Brown66@gmail.com', 'Roselyn14', 'DOI5u10tJlCB9Q_', 2, 0);

-- ----------------------------
-- Triggers structure for table tb_pesanan
-- ----------------------------
DROP TRIGGER IF EXISTS `kurang_stok`;
delimiter ;;
CREATE TRIGGER `kurang_stok` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok - NEW.jumlah
    	WHERE id_bar = NEW.id_brg;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
