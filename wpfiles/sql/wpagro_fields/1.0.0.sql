CREATE TABLE `wpagro_fields`
( `id` int(10) unsigned NOT NULL AUTO_INCREMENT
, `sort_order` int(10) unsigned NOT NULL DEFAULT 0
, `field_name` varchar(12) NOT NULL COMMENT 'Номер поля'
, `area_ha` decimal(6,2) NOT NULL COMMENT 'Площадь (га)'
, `bonitet` decimal(3,0) unsigned NOT NULL COMMENT 'Бонитет'
, `gumus` decimal(5,2) NOT NULL COMMENT 'Гумус (%)'
, `soil_type` varchar(50) NOT NULL COMMENT 'Тип почвы'
, `n` decimal(5,0) unsigned NOT NULL COMMENT 'N'
, `p` decimal(5,0) unsigned NOT NULL COMMENT 'P'
, `k` decimal(5,0) unsigned NOT NULL COMMENT 'K'
, `ph` decimal(3,1) unsigned NOT NULL COMMENT 'pH'
, `department` varchar(20) NOT NULL COMMENT 'Отделение'
, `region` varchar(20) NOT NULL COMMENT 'Регион'
, `district` varchar(20) NOT NULL COMMENT 'Район'
, `sector` varchar(20) NOT NULL COMMENT 'Участок'
, `ownership` varchar(50) DEFAULT NULL
, `sowing_date` date DEFAULT NULL COMMENT 'Дата посева'
, PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1717 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
