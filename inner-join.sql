-- Ürünlerin listeleneceği tabloyu oluşturalım
--
CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemName` varchar(120) DEFAULT NULL,
  `itemBrand` varchar(120) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Markaların listeleneceği tabloyu oluşturalım
--
CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brandName` varchar(130) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Tabloları verileri ekleyelim
-- Gördüğünüz gibi `items` tablosundaki itemBrand değeri ile `brands` tablosundaki id değeri eşleşiyor.
-- Ürünü veritabanına eklerken de <select> etiketinin value niteliğine marka id olmalıdır. Eşleşme bu şekilde sağlanınyor.
-- 
INSERT INTO `items` (`id`, `itemName`, `itemBrand`) VALUES
(1, 'iPhone 13 128GB', '1'),
(2, 'Samsung Note 8', '2'),
(3, 'iPhone SE 64GB', '1');


INSERT INTO `brands` (id`, `brandName`) VALUES
(1, 'Apple', 'Apple Türkiye'),
(2, 'Samsung', 'Samsung Türkiye'),
(3, 'Xiaomi', 'Xiaomi Türkiye'),

