PLEASE USE YOUR OWN


CREATE TABLE `data_collect`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`f_name` varchar(128) NOT NULL,
`l_name` varchar(128) NOT NULL,
`email` varchar(225) NOT NULL UNIQUE,
`phone` varchar(11) NOT NULL,
`address` varchar(128) NOT NULL,
`city` varchar(128) NOT NULL,
`postal` varchar(8) NOT NULL,
`option` varchar(128),
PRIMARY KEY (`id`)
);

CREATE TABLE `payment_form`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `card_number` int(20) NOT NULL,
    `card_name` varchar(225) NOT NULL,
    `cvc` int(3) NOT NULL,
  PRIMARY KEY (`id`)
);
 
