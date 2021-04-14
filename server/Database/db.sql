CREATE TABLE `ucode_web`.`users` (
   `id_user` INT(11) NOT NULL AUTO_INCREMENT ,
   `username` VARCHAR(32) NOT NULL ,
   `password` VARCHAR(40) NOT NULL ,
    PRIMARY KEY (`id_user`),
    UNIQUE (`username`));

CREATE TABLE `ucode_web`.`hero_class` (
    `id_class` INT(11) NOT NULL AUTO_INCREMENT ,
     `name` VARCHAR(32) NOT NULL ,
      `img` VARCHAR(40) NOT NULL ,
      PRIMARY KEY (`id_class`),
      UNIQUE (`name`));

CREATE TABLE `ucode_web`.`cards` (
   `id_card` INT(11) NOT NULL AUTO_INCREMENT ,
   `attack` INT(11) NOT NULL ,
   `defence` INT(11) NOT NULL ,
   `cost` INT(11) NOT NULL ,
   `front_img` VARCHAR(40) NOT NULL ,
   `back_img` VARCHAR(40) NOT NULL ,
   PRIMARY KEY (`id_card`));

ALTER TABLE users ADD id_class INT(11);
ALTER TABLE users ADD CONSTRAINT fk_id_class FOREIGN KEY (id_class) REFERENCES hero_class(id_class);
ALTER TABLE cards ADD id_class INT(11);
ALTER TABLE cards ADD CONSTRAINT fk_id_class2 FOREIGN KEY (id_class) REFERENCES hero_class(id_class);


