CREATE DATABASE IF NOT EXISTS demo;
USE demo;
CREATE TABLE `product`(
 	`product_id` int(11) NOT NULL,
 	`categoryID` int(11) NOT NULL,
 	`product_name` varchar(255) NOT NULL,
 	`price` decimal(10,2) NOT NULL,
 	`quantity` int(255) NOT NULL
);
CREATE TABLE `categories`(
 	`categoryID` int(11) NOT NULL,
 	`categoryName` varchar(255) NOT NULL
);
ALTER TABLE `product`
ADD PRIMARY KEY (`product_id`);