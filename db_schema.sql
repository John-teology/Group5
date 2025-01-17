CREATE TABLE `track`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `track`.`establishment` ( `id` INT NOT NULL AUTO_INCREMENT , `userID` INT NOT NULL , `location` VARCHAR(100) NOT NULL , `description` VARCHAR(500) NOT NULL , `name` VARCHAR(100) NOT NULL , `No_customer` INT(20) NOT NULL DEFAULT '0' , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `track`.`contact_tracing` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `first_name` VARCHAR(30) NOT NULL , `last_name` VARCHAR(30) NOT NULL , `age` VARCHAR(10) NOT NULL , `email` VARCHAR(20) NOT NULL , `phone_number` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `track`.`report` ( `id` INT NOT NULL AUTO_INCREMENT , `ct_id` INT NOT NULL , `est_id` INT NOT NULL , `date_t` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `inside` INT NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
