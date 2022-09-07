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

-- Tabloları birleştirelim

SELECT * FROM items INNER JOIN brands ON brands.id=items.itemBrand
