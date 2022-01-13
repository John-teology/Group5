CREATE TABLE `track`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `track`.`establishment_try` ( `id` INT NOT NULL AUTO_INCREMENT , `userID` VARCHAR(50) NOT NULL , `location` VARCHAR(500) NOT NULL , `description` INT NOT NULL , `name` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `track`.`contact_tracing` ( `id` INT NOT NULL AUTO_INCREMENT , `user_id` INT NOT NULL , `first_name` VARCHAR(30) NOT NULL , `last_name` VARCHAR(30) NOT NULL , `age` VARCHAR(10) NOT NULL , `email` VARCHAR(20) NOT NULL , `phone_number` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `track`.`report` ( `id` INT NOT NULL AUTO_INCREMENT , `ct_id` INT NOT NULL , `est_id` INT NOT NULL , `date_t` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `inside` INT NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
