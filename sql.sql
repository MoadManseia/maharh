CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `key`, `name`, `price`)
VALUES
	(1,'iphone-15-pro-max','iPhone 15 Pro Max',6700.00),
	(2,'samsung-s23-ultra','Samsun Gallexy s23 Ultra',5100.00);