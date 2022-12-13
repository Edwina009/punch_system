CREATE TABLE `user` (
  `user_id` int,
  `company_id` int,
  `company_name` varchar(255),
  `name` varchar(255),
  `phone` varchar(255),
  `password` varchar(255),
  `authority` varchar(255),
  `status` varchar(255),
  PRIMARY KEY (`user_id`)
);

CREATE TABLE `company` (
  `company_id` int,
  `company_name` varchar(255),
  PRIMARY KEY (`company_id`)
);

CREATE TABLE `shop` (
  `shop_id` int,
  `company_id` int,
  `shop` varchar(255),
  `shop_ip` varchar(255),
  `shop_address` varchar(255),
  PRIMARY KEY (`shop_id`)
);

CREATE TABLE `record` (
  `record_id` int,
  `user_id` int,
  `insert_time` timestamp,
  `category` varchar(255),
  `punch_time` varchar(255),
  `punch_ip` varchar(255),
  `punch_location` varchar(255),
  PRIMARY KEY (`record_id`)
);

ALTER TABLE `user` ADD FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

ALTER TABLE `shop` ADD FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

ALTER TABLE `record` ADD FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
