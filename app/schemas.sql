CREATE SCHEMA `examenu1` ;
USE `examenu1`;
CREATE TABLE `examenu1`.`t_informacion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `sueldo` INT NULL,
  `edad` INT NULL,
  `sexo` VARCHAR(45) NULL,
  `nacionalidad` VARCHAR(45) NULL,
  `antiguedad` VARCHAR(45) NULL,
  `php` INT NULL,
  `asp` INT NULL,
  `vb` INT NULL,
  `java` INT NULL,
  `oracle` INT NULL,
  `bd` INT NULL,
  `bono` INT NULL,
  PRIMARY KEY (`id`));
  INSERT INTO `examenu1`.`t_informacion` (`sueldo`, `edad`, `sexo`, `nacionalidad`, `antiguedad`, `php`, `asp`, `vb`, `java`, `oracle`, `bd`, `bono`) VALUES ('15000', '31', 'Masculino', 'Nacional', '6 a 10 años', '1', '0', '0', '0', '0', '1', '2580');
