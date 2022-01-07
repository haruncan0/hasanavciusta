# Host: localhost  (Version 5.5.5-10.4.19-MariaDB)
# Date: 2022-01-07 19:18:00
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "about"
#

DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ticket_title` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "about"
#

INSERT INTO `about` VALUES (1,'Meşhur Akçaabat Köftecisi Hakkında','Gıda ve restaurant sektöründe hizmet veren Meşhur Akçaabat Köftecisi Hasan Avcı 1980 yılında Trabzon\'da kuruldu.','<p>Sulu yemekten gelen 40 yılı aşkın deneyimini bugün kalite, lezzet, güven ve dürüstlük mottosuyla işlenmiş et üretimi ile sürdürmektedir.</p>\r\n\r\n<p>Gıda Güvenliği Yönetim Sistemi ISO 22000:2018 ve Helal Gıda Sertifikasına sahip işlenmiş et üretim tesisi ile sektörün deneyimli kadrolarıyla üretim birimini güçlendiren Hasan Avcı, Akçaabat köfte ürünlerinin yanı sıra adana kebap, kasap köfte, dana sucuk, pişmiş dana işkembe, pişmiş kelle paça eti, kuzu pirzola ve kuzu şiş ürünleriyle de müdavimlerine ulaşmaktadır.</p>\r\n\r\n<p>Meşhur Akçaabat Köftecisi Hasan Avcı; sağlıklı beslenme hakkında duyduğu saygı ve üretim anlayışını &quot;insana Değer&quot; ilkesiyle birleştirmiştir. Bu yüzden üretiminin tüm süreçleri veteriner hekimler tarafından yönetilmektedir ve kalite belgeleriyle desteklenmektedir.</p>','Yüksek Standart ve Kalite Demek Hasan Avcı Demek!','assets/uploads/f81270e62c71c03687ff7654ba9579e7.png','2021-12-21 14:33:08');

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `name_surname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `deleted` int(11) DEFAULT 0,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `super_admin` int(11) DEFAULT 0,
  `profil_photo` varchar(255) DEFAULT 'assets/uploads/profil_photo.png',
  `limited` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'hasanavci','Hasan Avcı Usta','$2y$10$Dwy628nldhNPmkTUeBjuP.TaYZkYqQV1DicgtjmPJur9xW.4qUtTq',1,0,'2020-08-14 13:13:43','2020-08-14 15:58:14',1,'assets/uploads/6e0ef8be57e7f01c105d14fa96900aa0.png',0),(2,'devoloper','Semih Gündüz','$2y$10$CWnHInzPI07MZsIFk1f95OGOrV6oQogXlJchYUSobOHJWid9I5OEq',1,0,NULL,NULL,1,'assets/uploads/b135440e14dbf77302cd369ddf662b95.png',0);

#
# Structure for table "certificates"
#

DROP TABLE IF EXISTS `certificates`;
CREATE TABLE `certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "certificates"
#

INSERT INTO `certificates` VALUES (1,'Marka Tescil Belgesi','assets/uploads/1d2f239df5926d08d4236d3896e7faaa.jpg','2021-12-18 09:23:59',NULL,1,0),(2,'Gıda İşletmesi Onay Belgesi','assets/uploads/1d5099779eff3ce469a5b1acb6fa0427.jpg','2021-12-18 09:40:04',NULL,1,0),(3,'ISO 220000:2018 Kalite Yönetim Belgesi','assets/uploads/1b57ae2ea5c48058b8ebc9c6a3fb3d4c.jpg','2021-12-18 09:40:22',NULL,1,0),(4,'Helal Gıda Uygunluk Belgesi','assets/uploads/9b44272791d58be07349507d53b96868.jpg','2021-12-18 09:40:28',NULL,1,0);

#
# Structure for table "contact"
#

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map` text DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "contact"
#

INSERT INTO `contact` VALUES (1,'0532 409 64 41','info@hasanavciusta.com','https://www.facebook.com/Hasanavciusta-102364905611006','https://www.instagram.com/hasanavciusta/','','Bekdiğin Mahallesi Samsun-Ankara Yolu Üzeri Ankara Caddesi No: 16/1 Havza|Samsun','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24089.95976043715!2d35.803024904730215!3d40.99801111514669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4087afde07efbe09:0x59689769682d24e4!2zS2FyYWdlw6dtacWfLCBIYXZ6YS9TYW1zdW4!5e0!3m2!1sen!2str!4v1640097129587!5m2!1sen!2str','2021-12-21 17:32:52');

#
# Structure for table "contracts"
#

DROP TABLE IF EXISTS `contracts`;
CREATE TABLE `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `site_description` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "contracts"
#

INSERT INTO `contracts` VALUES (1,'Aydınlatma Metni','aydinlatma-metni','<p>KİŞİSEL VERİLERİN KORUNMASI VE İŞLENMESİNE İLİŞKİN GİZLİLİK VE VERİ POLİTİKASI</p>\r\n\r\n<p>Hasan Avcı Usta olarak kişisel verilerinizin işlenmesinde ve muhafaza edilmesinde 6698 sayılı &ldquo;Kişisel Verilerin Korunması Kanunu&rdquo;na uygun davranılmasına azami hassasiyet göstermekteyiz. Bu nedenle ilgili Kanunun 10. maddesinin gereği olmak üzere kişisel verilerinizi aşağıda açıklandığı şekilde ve mevzuatın çizdiği sınırlar çerçevesinde işlemekteyiz.<br />\r\nBu metinle 6698 sayılı &ldquo;Kişisel Verilerin Korunması Kanunu&rdquo; m.10&rsquo;dan doğan sizleri kişisel verilerinizin işlenme amaçları, hukuki dayanakları ve haklarınız konusunda aydınlatma yükümlülüğümüzü yerine getirmeyi amaçlamaktayız.</p>\r\n\r\n<p>1. Veri Sorumlusu ve Temsilcisi<br />\r\n6698 sayılı Kişisel Verilerin Korunması Kanunu (&ldquo;6698 sayılı KVKK.&rdquo;) uyarınca, kişisel verileriniz; veri sorumlusu olarak Hasan Avcı Usta tarafından aşağıda açıklanan kapsamda işlenebilecektir.</p>\r\n\r\n<p>2. Kişisel Verilerin Hangi Amaçla İşleneceği</p>\r\n\r\n<p>Şirketimizin hasanavciusta.com internet sitesini kullanmaktasınız. İnternet sitesi iletişim formunu kullanarak tarafımıza gönderdiğiniz aşağıdaki kişisel verileriniz tarafımıza başvuru amacınızla sınırlı olarak size geri dönüş yapabilmek amacıyla 6698 sayılı KVK Kanununun &nbsp;5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları dahilinde kullanılmakta ve bu kullanımın ardından derhal imha edilmektedir:</p>\r\n\r\n<p>1-) Kimlik Verileri (Ad-Soyad) (İletişim&nbsp;Bölümü Vasıtasıyla Gönderilen Mesajlara Cevap Verilebilmesi Amacıyla)</p>\r\n\r\n<p>2-) İletişim Verileri (Telefon Numarası, E-posta Adresi) (İletişim Bölümü Vasıtasıyla Gönderilen Mesajlara Cevap Verilebilmesi Amacıyla)</p>\r\n\r\n<p>3. İşlenen Kişisel Verilerin Kimlere ve Hangi Amaçla Aktarılabileceği</p>\r\n\r\n<p>Yukarıda belirtilen düzenlemelere uygun olarak işlenen kişisel verileriniz yurt içinde veya &nbsp;yurt dışında hiçbir gerçek veya tüzel kişiye aktarılmamaktadır.</p>\r\n\r\n<p>4. Kişisel Verileri İşlemenin ve Aktarmanın Yöntemi ve Hukuki Sebebi</p>\r\n\r\n<p>Kişisel verileriniz işletmemiz tarafından farklı kanallar ve farklı hukuki sebeplere dayanarak; toplanmaktadır. Bu aydınlatma metninde yer alan kişisel verileriniz web sitesi üzerinden elektronik ortamda ve bizzat şahsınızdan temin edilmektedir. Bu aydınlatma metninin 2. maddesinde belirtilen kişisel verilerinizin tamamı KVKK madde 5/2-f gereği veri sorumlusunun meşru menfaati sebebiyle işlenmektedir.</p>\r\n\r\n<p>5. Kişisel Veri Sahibinin 6698 Sayılı Kanun&rsquo;un 11. Maddesinde Sayılan Hakları</p>\r\n\r\n<p>Kişisel veri sahibi olarak, haklarınıza ilişkin taleplerinizi aşağıda düzenlenen yöntemlerle tarafımıza iletmeniz durumunda talebinizin niteliğine göre talebi 6698 sayılı KVK K.nun 13. maddesinin 2. fıkrası uyarınca en kısa sürede ve en geç otuz gün içinde ücretsiz olarak sonuçlandıracaktır. Ancak, işlemin ayrıca bir maliyeti gerektirmesi halinde, tarafımızca Kişisel Verileri Koruma Kurulunca belirlenen tarifedeki ücret alınabilecektir.</p>\r\n\r\n<p>Bu kapsamda kişisel veri sahipleri;</p>\r\n\r\n<p>&middot; Kişisel veri işlenip işlenmediğini öğrenme,</p>\r\n\r\n<p>&middot; Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</p>\r\n\r\n<p>&middot; Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</p>\r\n\r\n<p>&middot; Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</p>\r\n\r\n<p>&middot; Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</p>\r\n\r\n<p>&middot; 6698 sayılı KVKK.nın ve ilgili diğer kanun hükümlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması halinde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</p>\r\n\r\n<p>&middot; İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya çıkmasına itiraz etme,</p>\r\n\r\n<p>&middot; Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etme haklarına sahiptir.</p>\r\n\r\n<p>6698 sayılı KVKK.nın 13. maddesinin 1. fıkrası gereğince, yukarıda belirtilen haklarınızı kullanmak ile ilgili talebinizi, yazılı olarak tarafımıza iletebilirsiniz. Kişisel Verileri Koruma Kurulu&rsquo;nun belirleyeceği diğer yöntemler duyurulduktan sonra bu yöntemler üzerinden de başvuruların ne şekilde alınacağı tarafımızca duyurulacaktır. Bu çerçevede tarafımıza 6698 sayılı KVKK.nın 11. maddesi kapsamında yapacağınız başvurularda yazılı olarak başvurunuzu ileteceğiniz kanallar ve usuller aşağıda açıklanmaktadır:</p>\r\n\r\n<p>Yukarıda belirtilen haklarınızı kullanmak için kimliğinizi tespit edici gerekli bilgiler ile 6698 sayılı KVKK.nın 11. maddesinde belirtilen haklardan kullanmayı talep ettiğiniz hakkınıza yönelik açıklamalarınızı içeren talebinizi Bekdiğin Mahallesi Samsun-Ankara Yolu Üzeri Ankara Caddesi Havza|Samsun adresine kimliğinizi tespit edici belgeler ile bizzat elden iletebilir, noter kanalıyla veya 6698 sayılı Kanun&rsquo;da belirtilen diğer yöntemler ile gönderebilirsiniz.&nbsp;</p>','Aydınlatma Metni','Aydınlatma Metni','2021-12-21 12:37:05');

#
# Structure for table "features"
#

DROP TABLE IF EXISTS `features`;
CREATE TABLE `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "features"
#

INSERT INTO `features` VALUES (1,'İslami usullere uygun, Helal Kesim etler ile üretiyoruz','Günde 2 ton üzerinde et işleme kapasitesine sahip Meşhur Akçaabat Köftecisi Hasan Avci İslami usullere uygun olarak helal kesim etlerden ürettiği Akçaabat Köfte, Kasap Köfte, Adana Kebap, Kuzu Pirzola, Kuzu incik, Kuzu Şiş, Sucuk, İşkembe ve Kelle Eti ürünlerini sizlere yüksek kalite standardıyla sunuyor.','assets/uploads/e0e0b9e69e55b134e1ee3977b54f9ffa.png','2021-12-20 19:32:29');

#
# Structure for table "gallery"
#

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "gallery"
#

INSERT INTO `gallery` VALUES (1,'assets/uploads/f55c244490a61aa3af7834339b1243af.png',3,'2021-12-21 13:18:32',NULL,1,0),(2,'assets/uploads/a60f464922dd1114a3443f76c0d817bb.png',4,'2021-12-21 13:18:32',NULL,1,0),(3,'assets/uploads/28622725ce228d8d8a1c5516f7fbaebd.png',5,'2021-12-21 13:18:32',NULL,1,0),(4,'assets/uploads/fa3110f6a1c81b6d85d266bd178ad4ed.png',6,'2021-12-21 13:18:32',NULL,1,0),(5,'assets/uploads/793f88d7c90ddefced4635e2f84f1420.png',7,'2021-12-21 13:18:32',NULL,1,0),(6,'assets/uploads/8cd286924c20caf621c8279d76575516.png',8,'2021-12-21 13:18:32',NULL,1,0),(7,'assets/uploads/33d8c7c1d81c0dc9543053d360628346.png',9,'2021-12-21 13:18:32',NULL,1,0),(8,'assets/uploads/eac9ad2301412924c40af3f244296f10.png',10,'2021-12-21 13:18:32',NULL,1,0),(9,'assets/uploads/db11d8cd3f5e0c598015cdb6cc6fc1bb.png',1,'2021-12-21 13:18:32',NULL,1,0),(10,'assets/uploads/563fb0ec8cefe02d61309c6d214d64b6.png',2,'2021-12-21 13:18:32',NULL,1,0);

#
# Structure for table "homepage"
#

DROP TABLE IF EXISTS `homepage`;
CREATE TABLE `homepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(255) DEFAULT NULL,
  `about_description` text DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `ticket_title` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `gallery_title` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "homepage"
#

INSERT INTO `homepage` VALUES (1,'Meşhur Akçaabat Köftecisi Hakkında','<p>Sulu yemekten gelen 40 yılı aşkın deneyimini bugün kalite, lezzet, güven ve dürüstlük mottosuyla işlenmiş et üretimi ile sürdürmektedir.</p>\r\n\r\n<p>Gıda Güvenliği Yönetim Sistemi ISO 22000:2018 ve Helal Gıda Sertifikasına sahip işlenmiş et üretim tesisi ile sektörün deneyimli kadrolarıyla üretim birimini güçlendiren Hasan Avcı, Akçaabat köfte ürünlerinin yanı sıra adana kebap, kasap köfte, dana sucuk, pişmiş dana işkembe, pişmiş kelle paça eti, kuzu pirzola ve kuzu şiş ürünleriyle de müdavimlerine ulaşmaktadır.</p>\r\n\r\n<p>Meşhur Akçaabat Köftecisi Hasan Avcı; sağlıklı beslenme hakkında duyduğu saygı ve üretim anlayışını &quot;insana Değer&quot; ilkesiyle birleştirmiştir. Bu yüzden üretiminin tüm süreçleri veteriner hekimler tarafından yönetilmektedir ve kalite belgeleriyle desteklenmektedir.</p>','assets/uploads/f81270e62c71c03687ff7654ba9579e7.png','Ürünlerimiz','Yüksek Standart ve Kalite Demek Hasan Avcı Demek!','%100 Kalite, %100 Lezzet','Galeri','2021-12-21 20:19:52');

#
# Structure for table "icons"
#

DROP TABLE IF EXISTS `icons`;
CREATE TABLE `icons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "icons"
#

INSERT INTO `icons` VALUES (2,'assets/uploads/eb0e1f3fbeca0758f658f9391659d8e5.svg',NULL),(3,'assets/uploads/28a0f7fd8c3356d77936708737674fe5.svg',NULL),(4,'assets/uploads/6cf30284eb1835c9615db4b18d1161c3.svg',NULL),(5,'assets/uploads/d848247d67056ff48e9df191461885b8.svg',NULL);

#
# Structure for table "images"
#

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` int(11) DEFAULT NULL,
  `rol` tinyint(1) DEFAULT 1,
  `position` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

#
# Data for table "images"
#

INSERT INTO `images` VALUES (1,1,1,NULL,'assets/uploads/14e0f5796d8da9ae4f07c758bfe8a128.png',1,1),(2,1,1,NULL,'assets/uploads/137684fb1dd263e923eb5e94f8ca585f.png',1,1),(3,1,2,1,'assets/uploads/490720d591b1acc55aa95a93e3fc5a0c.jpg',1,1),(4,1,2,5,'assets/uploads/0741157124bf8b4ffc9d639e4da979ec.jpg',1,1),(5,1,1,NULL,'assets/uploads/49b5091339762bceea6e4f6cb74e16c1.jpg',1,1),(6,1,1,NULL,'assets/uploads/8cc4e8bf17090d83ced03defd61f024f.jpg',1,1),(7,1,1,1,'assets/uploads/7e262eb523cb52f1cf978e773442269b.png',1,1),(8,1,1,2,'assets/uploads/352738d7b94533b8b9cf98f3fcd78995.png',1,1),(9,1,1,3,'assets/uploads/ff2c24fdf5ae6f626a921d6ea68b046b.png',1,1),(10,1,1,4,'assets/uploads/7c558c7914be773ed94bb69db63d65ef.png',1,1),(11,2,1,NULL,'assets/uploads/2bb5ecd56da7c01fc47ec2249daed557.png',1,1),(12,2,1,NULL,'assets/uploads/2be96ebe668e53033f0b89d7c3ac1bd9.png',1,1),(13,2,2,NULL,'assets/uploads/883b4aeb0f1a8ae7743af071c1145a27.jpg',1,1),(14,2,2,NULL,'assets/uploads/59046820ec047d6fb66626eefbfd17f8.png',1,1),(15,3,1,1,'assets/uploads/947f6ef63962ff5535196f258a224ddd.png',1,1),(16,3,1,2,'assets/uploads/f434486d1b13ae8d8fcdd62d0d262894.png',1,1),(17,3,2,NULL,'assets/uploads/3064807e57bf0ecfe0025b9d48d33906.png',1,1),(18,4,1,1,'assets/uploads/973166ebad929aa6105fa41533487e0c.png',1,1),(19,4,1,NULL,'assets/uploads/a2e26c102c9a67a3c0ae17443f217744.png',1,1),(20,4,2,NULL,'assets/uploads/489c2a796573d26707c77775e594fcf4.png',1,1),(21,5,1,NULL,'assets/uploads/4087e1abf92142f86b9cf76adc5c3b27.png',1,1),(22,5,1,NULL,'assets/uploads/a29c1d74f34959151b40146b8d7680fb.png',1,1),(23,5,1,NULL,'assets/uploads/19c5b057879512c12a20d7ef1ce4fae4.png',1,1),(24,5,2,NULL,'assets/uploads/cc192ee13cda87627b0a4f7b8ed9b0df.jpg',1,1),(25,5,2,NULL,'assets/uploads/66403c0df7da7021175cd9ebaea62cd6.jpg',1,1),(26,6,1,NULL,'assets/uploads/edb441eef5de1303084f6fbadea7ea38.png',1,1),(27,6,1,NULL,'assets/uploads/747cddd8ab0b336f9e0c45edce560812.png',1,1),(28,6,2,NULL,'assets/uploads/1e9128a049b7fd49264f976f8483654f.jpg',1,1),(29,6,2,2,'assets/uploads/f527dcb2ecd8d245727efa934a8c7363.png',1,0),(30,6,2,3,'assets/uploads/0d6f282df6f7450a3d8cddc31d7aa91d.png',1,0),(31,7,1,1,'assets/uploads/9b3f1902c52354eca427b892de92c671.png',1,0),(32,7,1,2,'assets/uploads/7acae0fd1c91e711c403437b2903004b.png',1,1),(33,7,2,NULL,'assets/uploads/ade525c2af1d2585a7d3c7398f14cd4b.png',1,0),(34,7,2,NULL,'assets/uploads/4826af0a59bec0e46fea933484de6c6a.png',1,1),(35,7,2,NULL,'assets/uploads/967b7133c2b8e373bd35ed49f6c973a2.png',1,0),(36,7,2,NULL,'assets/uploads/c3a5037e67b6bb8fd176362ddd25fb86.png',1,1),(37,5,1,NULL,'assets/uploads/c705628a1a89f9ba0bb00753b441125c.png',1,0),(38,5,1,NULL,'assets/uploads/8ec84e679ec603b168f6dfe813321e68.png',1,0),(39,5,1,NULL,'assets/uploads/3db4b6a8395fb6545f54e595f6c0b234.png',1,0),(40,1,1,NULL,'assets/uploads/96fc5e32eddb62b7a47417ca7ac0d160.png',1,1),(41,1,1,4,'assets/uploads/8de0b04f3ea398c8bdff9384c633e346.png',1,1),(42,1,1,4,'assets/uploads/70b3006d1acb0ed2300d62e8d01179c5.png',1,1),(43,1,1,1,'assets/uploads/14f2aeae0e70d8b9fd3266f9035a802a.png',1,0),(44,1,1,2,'assets/uploads/949f8f5c0d295eea30b8270d0a81ede0.png',1,0),(45,2,1,2,'assets/uploads/e975cb2befbf8693fd165edc059dcd3d.png',1,0),(46,2,1,1,'assets/uploads/9c0cd05825098387cdee1e649c019409.png',1,1),(47,1,1,2,'assets/uploads/169e64cc3ca8fe4860be3604a9343d3a.png',1,1),(48,2,1,1,'assets/uploads/aa5b237dd15de4a517bc8bd17c9c3c18.png',1,0),(49,3,1,1,'assets/uploads/56ef81407cd225bdfc26a99bed19662c.png',1,0),(50,4,1,NULL,'assets/uploads/272954698774ef7c1608d85b8aed37d5.png',1,0),(51,6,1,1,'assets/uploads/98053e641f20afa8401ae0e66f7429fe.png',1,0),(52,6,1,2,'assets/uploads/3dcbd46c14696d6fa12140733909b6a3.png',1,0),(53,8,1,NULL,'assets/uploads/41e31f757b3d5b6c24f7d32b6fe33b3d.png',1,0),(54,8,2,NULL,'assets/uploads/a4d388f5a8d57edf709222af404b1f72.png',1,0),(55,8,2,NULL,'assets/uploads/6caa74e52e88d9a6bfe35b87a5c2467c.jpg',1,0),(56,9,1,NULL,'assets/uploads/858d2e9c8d3e34232de7ec852c127da3.png',1,0),(57,9,1,NULL,'assets/uploads/bdd189566687270e8859b266dbeaa64a.png',1,0),(58,9,2,NULL,'assets/uploads/7407cf94571317d89d01eaac3cd7df9b.jpg',1,1),(59,9,2,NULL,'assets/uploads/0cecec94217367f88dd4ffd50523fb58.jpg',1,1),(60,10,1,NULL,'assets/uploads/1950e12ac680b0039d9022a0a5ba8e96.png',1,0),(61,10,1,NULL,'assets/uploads/58755925a15674fef7fe7fc64dd1c1ab.png',1,0),(62,10,2,NULL,'assets/uploads/1624b1e457b5715e9d005a4d6e2a8956.png',1,0),(63,10,2,NULL,'assets/uploads/19bbf85dc58ff33603a7f11c3629a672.png',1,0),(64,10,2,NULL,'assets/uploads/c8122abb0c0038bd4ffd5012fd8c3bf5.png',1,0),(65,3,2,NULL,'assets/uploads/a30dfb5ba1d5d63203d1a8afde458a74.png',1,1),(66,1,2,NULL,'assets/uploads/527471eb1c1d0d5822bd568ac00ada55.png',1,0),(67,1,2,NULL,'assets/uploads/cd1c066b2ee046258f4aac8679717c8c.jpg',1,0),(68,1,2,NULL,'assets/uploads/59ce9adda24126f0f092b8b398bd790a.jpg',1,0),(69,9,2,NULL,'assets/uploads/7f028879ae385920c126774bb094a505.jpg',1,0),(70,9,2,NULL,'assets/uploads/9eeb2f56c5acec4898a29ec9d90b40a0.jpg',1,0),(71,2,2,NULL,'assets/uploads/cf7980b2e67f48fe90089e825a8f71f7.png',1,0),(72,2,2,NULL,'assets/uploads/f580f5eb84e7ff19a3eafde16a467fac.jpg',1,0),(73,3,2,NULL,'assets/uploads/898f0b6f2993836b8c92e4f702d3b533.png',1,0),(74,4,2,NULL,'assets/uploads/73e49c5c3f58f3daff987c2c458c8fc1.png',1,0),(75,5,2,NULL,'assets/uploads/ad71821d8daf76421573dba14cb2150c.jpg',1,0),(76,5,2,NULL,'assets/uploads/8c5fb0cca905fbb32a223355db066add.jpg',1,0),(77,6,2,1,'assets/uploads/4d6001509efe51ba8b85b03d586a9b4f.jpg',1,0);

#
# Structure for table "messages"
#

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "messages"
#

INSERT INTO `messages` VALUES (1,'asd','haruncan_sari@hotmail.com','0 (507) 381-5455','asd','2021-12-19 21:05:06',1,1),(2,'asd','haruncan_sari@hotmail.com','0 (507) 381-5455','asd','2021-12-19 21:08:09',1,1),(3,'test mesajı','testmessage@hotmail.com','0 (000) 000-0000','bu bir test mesajıdır','2021-12-21 14:33:51',1,0),(4,'HARUN','HARUN@HARUN.COM','0 (555) 555-5555','testt','2021-12-21 15:03:37',1,1),(5,'Haruncan Sarı','sari345553@gmail.com','1 (010) 101-0101','new message','2021-12-21 19:52:01',1,1),(6,'Haruncan Sarı','sari345553@gmail.com','0 (000) 000-0000','dfghjk','2021-12-25 16:36:04',1,1);

#
# Structure for table "product"
#

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `cover_text` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `storage` text DEFAULT NULL,
  `product_types` text DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  `site_title` varchar(255) DEFAULT NULL,
  `site_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "product"
#

INSERT INTO `product` VALUES (1,'Geleneksel Akçaabat Köfte','geleneksel-akcaabat-kofte','1100 gr. El İzli Çeşitleri','<p>Dondurulmuş Akçaabat Köftesi; izgarada pişirilerek pratik bir şekilde sofralarınızda ki yerini alıyor!</p>','<p><strong>Taze Ürünler:</strong> Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong> Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Akçaabat Köfte <strong>El İzli</strong></td>\r\n\t\t\t<td>8683513372004</td>\r\n\t\t\t<td>32 Adet</td>\r\n\t\t\t<td>1100 g.</td>\r\n\t\t\t<td>12 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Akçaabat Köfte <strong>El İzli</strong></td>\r\n\t\t\t<td>8683513372028</td>\r\n\t\t\t<td>48 Adet</td>\r\n\t\t\t<td>1700 g.</td>\r\n\t\t\t<td>6 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',1,'2021-12-20 12:02:01','2021-12-21 17:48:21',1,0,'Geleneksel Akçaabat Köfte','Geleneksel Akçaabat Köfte'),(2,'Özel Baharatlı Kasap Köfte','ozel-baharatli-kasap-kofte','1700 gr. El İzli ve Büyük Boy Çeşitleri','<p>Dondurulmuş Kasap Köfte; fırında, tavada veya ızgarada pişirilerek pratik bir şekilde sofralarınızda ki yerini alıyor!</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Kasap Köfte <strong>El İzli</strong></td>\r\n\t\t\t<td>8683513372059</td>\r\n\t\t\t<td>48 Adet</td>\r\n\t\t\t<td>1700 g.</td>\r\n\t\t\t<td>6 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Kasap Köfte <strong>Büyük Boy</strong></td>\r\n\t\t\t<td>8683513372066</td>\r\n\t\t\t<td>36 Adet</td>\r\n\t\t\t<td>1700 g.</td>\r\n\t\t\t<td>6 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',3,'2021-12-20 12:24:03','2021-12-21 17:49:08',1,0,'Özel Baharatlı Kasap Köfte','Özel Baharatlı Kasap Köfte'),(3,'Geleneksel Acısız Adana Kebap','geleneksel-acisiz-adana-kebap','%100 Kalite, %100 Lezzet','<p>Adana Kebabı&#39;nı diğer kebap türlerinden ayıran en önemli özellik, söz konusu kebabın üretiminde kullanılan etin, doğal ortamda ve kendine has bir floraya sahip bölge yaylalarında yetiştirilmiş koyun ve danadan elde edilmiş olmasından kaynaklanmaktadır.</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table>\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Adana Kebap <strong>Acısız</strong></td>\r\n\t\t\t<td>8683513372042</td>\r\n\t\t\t<td>4 Adet</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>16 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',4,'2021-12-20 12:31:38','2021-12-21 17:49:45',1,0,'Geleneksel Acısız Adana Kebap','Geleneksel Acısız Adana Kebap'),(4,'Geleneksel Acılı Adana Kebap','geleneksel-acili-adana-kebap','%100 Kalite, %100 Lezzet','<p>Adana&#39;nın bu meşhur yöresel lezzetini ayağınıza getiriyoruz. En iyi etlerin, Adana baharatları ile karışması sonucu ortaya çıkan Adana Kebabı köz ateşinde veya tavada pişmekte ve yanındaki enfes mezeleriniz ile bir ziyafete dönüşmektedir.</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table>\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Adana Kebap <strong>Acılı</strong></td>\r\n\t\t\t<td>8683513372042</td>\r\n\t\t\t<td>4 Adet</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>16 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',5,'2021-12-20 12:55:21','2021-12-21 17:50:41',1,0,'Geleneksel Acılı Adana Kebap','Geleneksel Acılı Adana Kebap'),(5,'Kuzu Eti Lezzeti','kuzu-eti-lezzeti','Kuzu Pirzola - Kuzu İncik - Kuzu Şiş','<p>Dondurulmuş Kuzu Etleri; fırında, tavada veya ızgarada pişirilerek pratik bir şekilde sofralarınızda ki yerini alıyor!</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Kuzu Pirzola</td>\r\n\t\t\t<td>-</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>1700 g.</td>\r\n\t\t\t<td>12 Adet</td>\r\n\t\t\t<td>20 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Kuzu İncik</td>\r\n\t\t\t<td>-</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>1700 g.</td>\r\n\t\t\t<td>12 Adet</td>\r\n\t\t\t<td>20 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Kuzu Şiş</td>\r\n\t\t\t<td>-</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>1700 g.</td>\r\n\t\t\t<td>12 Adet</td>\r\n\t\t\t<td>20 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',6,'2021-12-20 13:02:19','2021-12-21 17:51:17',1,0,'Kuzu Pirzola - Kuzu İncik - Kuzu Şiş','Kuzu Eti Lezzeti'),(6,'Isıl İşlem Görmüş Dana Sucuk','isil-islem-gormus-dana-sucuk','%100 Kalite, %100 Lezzet','<p>Dana eti, dana yağıve sucuk baharatı karıştırılarak elde edilen hamur, özel kılıflara doldurularak fermente edilir. Ardından özel fırınlarda isıl işlem uygulanır ve vakumlanarak paketlenir.</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Isıl İşlem Görmüş <strong>Dana Sucuk</strong></td>\r\n\t\t\t<td>8683513372073</td>\r\n\t\t\t<td>1 Adet Kangal</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>24 Adet</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',7,'2021-12-20 13:51:44','2021-12-21 17:51:42',1,0,'Isıl İşlem Görmüş Dana Sucuk','Isıl İşlem Görmüş Dana Sucuk'),(7,'Pişmiş Dana İşkembe','pismis-dana-iskembe','1700 gr. El İzli ve Büyük Boy Çeşitleri','<p>Doğal, katkısız, koruyucu madde içermeyen İşkembe hem sağlığınıza şifa olacak hemde kalitesiyle damaklarınızda enfes bir tat bırakacak.</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Pişmiş Dana&nbsp;<strong>İşkembe</strong></td>\r\n\t\t\t<td>8683513372080</td>\r\n\t\t\t<td>-</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',8,'2021-12-20 13:58:37','2021-12-21 11:00:35',1,0,'Pişmiş Dana İşkembe','Pişmiş Dana İşkembe'),(8,'Kelle Eti','kelle-eti','1700 gr. El İzli ve Büyük Boy Çeşitleri','<p>Doğal, katkısız, koruyucu madde içermeyen Kelle Eti hem sağlığınıza şifa olacak hemde kalitesiyle damaklarınızda enfes bir tat bırakacak.</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Kelle Eti</td>\r\n\t\t\t<td>8683513372066</td>\r\n\t\t\t<td>-</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>Tartılarak Verilir</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',9,'2021-12-21 11:06:10',NULL,1,0,'Kelle Eti','Kelle Eti'),(9,'Büyük Boy Geleneksel Akçaabat Köfte','buyuk-boy-geleneksel-akcaabat-kofte','1100 gr. El İzli Çeşitleri','<p>Dondurulmuş Akçaabat Köftesi; izgarada pişirilerek pratik bir şekilde sofralarınızda ki yerini alıyor!</p>','<p><strong>Taze Ürünler:</strong>&nbsp;Buzdolabında (0/4 &deg;C)&#39;de ve orjinal ambalaji açılmadigi sürece son tüketim tarihine kadar muhafaza edilebilir.</p>\r\n\r\n<p><strong>Donuk Ürünler:</strong>&nbsp;Derin dondurucuda (-18 &deg;C) muhafaza ediniz. Çözünen ürünü tekrar dondurmayiniz.</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Akçaabat Köfte <strong>Büyük Boy</strong></td>\r\n\t\t\t<td>8683513372011</td>\r\n\t\t\t<td>24 Adet</td>\r\n\t\t\t<td>1100 g.</td>\r\n\t\t\t<td>12 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Akçaabat Köfte <strong>Büyük Boy</strong></td>\r\n\t\t\t<td>8683513372035</td>\r\n\t\t\t<td>36 Adet</td>\r\n\t\t\t<td>1700 g.</td>\r\n\t\t\t<td>6 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',2,'2021-12-21 11:19:02','2021-12-21 17:48:45',1,0,'Geleneksel Akçaabat Köfte','Geleneksel Akçaabat Köfte'),(10,'KIYMA HARUN','kiyma-harun','KÖFTE HARUN','<p>HARUN SARI&nbsp;</p>','<p>-50 DERECE SAKLAYINIZ</p>','<table class=\"customize_table\">\r\n\t<thead>\r\n\t\t<tr>\r\n\t\t\t<th>Ürün Adı</th>\r\n\t\t\t<th>Ürün Barkodu</th>\r\n\t\t\t<th>Paket İçi Adet</th>\r\n\t\t\t<th>Paket Ağırlığı</th>\r\n\t\t\t<th>Koli İçi Adet</th>\r\n\t\t\t<th>Koli Ağırlığı</th>\r\n\t\t\t<th>Raf Ömrü</th>\r\n\t\t</tr>\r\n\t</thead>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>Akçaabat Köfte <strong>El İzli</strong></td>\r\n\t\t\t<td>565555555555</td>\r\n\t\t\t<td>32 Adet</td>\r\n\t\t\t<td>1100 g.</td>\r\n\t\t\t<td>12 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>Akçaabat Köfte <strong>Büyük Boy</strong></td>\r\n\t\t\t<td>8683513372011</td>\r\n\t\t\t<td>24 Adet</td>\r\n\t\t\t<td>1100 g.</td>\r\n\t\t\t<td>12 Adet</td>\r\n\t\t\t<td>13 kg.</td>\r\n\t\t\t<td>6 ay</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>',NULL,'2021-12-21 15:00:08',NULL,1,1,'TEST','TEST');

#
# Structure for table "site_settings"
#

DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `site_description` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Data for table "site_settings"
#

INSERT INTO `site_settings` VALUES (3,'anasayfa','Anasayfa','Meşhur Akçaabat Köftecisi ® Hasan Avcı','Sulu yemekten gelen 40 yılı aşkın deneyimini bugün kalite, lezzet, güven ve dürüstlük mottosuyla ileten Meşhur Akçaabat Köftecisi ® Hasan Avcı','',NULL),(4,'hakkimizda','Hakkımızda','Hakkımızda - Hasan Avcı Usta','Gıda ve restaurant sektöründe hizmet veren Meşhur Akçaabat Köftecisi Hasan Avcı 1980 yılında Trabzon\'da kuruldu.','Hakkımızda','assets/uploads/9ee099e35fcfe215a2d835915375b185.jpg'),(5,'galeri','Galeri','Galeri - Hasan Avcı Usta','40 yılı aşkın deneyimini bugün kalite, lezzet, güven ve dürüstlük mottosuyla işlenmiş Hasan Avcı Usta\'nın ürünleri sizinle','Galeri','assets/uploads/67412c0dd0fb91e2f48c17f66968ef1e.png'),(6,'certificate','Sertifikalar','Sertifikalarımız - Hasan Avcı Usta','Meşhur Akçaabat Köftecisi Sertifikaları','Sertifikalarımız','assets/uploads/67412c0dd0fb91e2f48c17f66968ef1e.png'),(7,'product','Ürünler','Ürünlerimiz - Hasan Avcı Usta','Meşhur Akçaabat Köftecisi Ürünleri - Hasan Avcı Usta','Ürünlerimiz','assets/uploads/5349bc9529a50cbb8f6b5f6a1affc78a.png'),(9,'iletisim','İletişim','İletişim - Hasan Avcı Usta','İletişim - Hasan Avcı Usta','İletişim','assets/uploads/67412c0dd0fb91e2f48c17f66968ef1e.png'),(10,'contracts','Sözleşmeler','Sözleşmeler - Hasan Avcı Usta','Sözleşmeler  - Hasan Avcı Usta','Sözleşmeler','assets/uploads/26347ebe829b25083119683d68f21887.png'),(11,'product_detail','Ürün Detay','Ürün Detay','Ürün Detay','Ürün Detay','assets/uploads/67412c0dd0fb91e2f48c17f66968ef1e.png'),(12,'error_page','404 Sayfası','Sayfa Bulunamadı - Hasan Avcı Usta','Aradığınız Sayfa Bulanamadı - Hasan Avcı Usta','Bulunamadı','assets/uploads/67412c0dd0fb91e2f48c17f66968ef1e.png');

#
# Structure for table "slider"
#

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `add_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "slider"
#

INSERT INTO `slider` VALUES (5,'1980\'den Bugüne','%100 Kalite, %100 Lezzet','Keşfet','geleneksel-akcaabat-kofte','assets/uploads/f5f9fceca30f741bb1998ba3fc4277a6.jpg','2021-12-17 14:16:05',NULL,1,0),(6,'Kebabın En Sade Hali','%100 Kalite, %100 Lezzet','Keşfet','geleneksel-akcaabat-kofte','assets/uploads/50ecbb2f1d0c787652ad4b301d5c4386.jpg','2021-12-17 14:21:35',NULL,1,0),(7,'1980\'den Bugüne','%100 Kalite, %100 Lezzet','','','assets/uploads/147d76d2ff7d6ffca305960073a824f9.jpg','2021-12-17 14:22:11',NULL,1,0),(8,'asd','asd','asd','asd','assets/uploads/d83a45131a7c340e9a56a6b700a1a24f.jpg','2021-12-21 14:31:22',NULL,1,1),(9,'adsd','asd','asdasd','asasd','assets/uploads/9827240da7c54e284c928fd7809fe7cb.jpg','2021-12-21 14:38:13',NULL,1,1);

#
# Structure for table "ticket"
#

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "ticket"
#

INSERT INTO `ticket` VALUES (1,'%100 Dana %100 Sağlıklı Lezzet','assets/uploads/d6d961620cc61561014a38cfc43b440e.svg','2021-12-21 14:35:08'),(2,'%100 Helal Üretim','assets/uploads/4daa2017750a5ae1e5ec3d9c1de7159d.svg','2021-12-17 15:52:27'),(3,'İşletme Kayıt No: TR 55-G-0298','assets/uploads/da24415200d034a7ea1d6a62b5bcf5fe.svg','2021-12-17 15:52:48'),(4,'%100 Kuzu %100 Sağlıklı Lezzet','assets/uploads/d504a86d6520047ddea24eea4e034528.svg','2021-12-17 15:53:05');
