-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`mpersona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mpersona` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mpersona` (
  `idmpersona` INT NOT NULL,
  `nommpersona` VARCHAR(45) NULL,
  `apempersona` VARCHAR(45) NULL,
  `telmpersona` VARCHAR(45) NULL,
  PRIMARY KEY (`idmpersona`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`clugar`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`clugar` ;

CREATE TABLE IF NOT EXISTS `mydb`.`clugar` (
  `idclugar` INT NOT NULL,
  `descclugar` VARCHAR(45) NULL,
  PRIMARY KEY (`idclugar`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mdepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mdepto` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mdepto` (
  `nummdepto` VARCHAR(45) NOT NULL,
  `descmdepto` VARCHAR(45) NULL,
  `mpersona_idmpersona` INT NULL,
  `clugar_idclugar` INT NULL,
  PRIMARY KEY (`nummdepto`),
  INDEX `fk_mdepto_mpersona1_idx` (`mpersona_idmpersona` ASC),
  INDEX `fk_mdepto_clugar1_idx` (`clugar_idclugar` ASC),
  CONSTRAINT `fk_mdepto_mpersona1`
    FOREIGN KEY (`mpersona_idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mdepto_clugar1`
    FOREIGN KEY (`clugar_idclugar`)
    REFERENCES `mydb`.`clugar` (`idclugar`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`musuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`musuario` ;

CREATE TABLE IF NOT EXISTS `mydb`.`musuario` (
  `idmpersona` INT NOT NULL,
  `emailmusuario` VARCHAR(45) NOT NULL,
  `passmusuario` CHAR(32) NOT NULL,
  `createmusuario` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmpersona`, `emailmusuario`),
  INDEX `fk_musuario_mpersona_idx` (`idmpersona` ASC),
  CONSTRAINT `fk_musuario_mpersona`
    FOREIGN KEY (`idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `mydb`.`drdepto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`drdepto` ;

CREATE TABLE IF NOT EXISTS `mydb`.`drdepto` (
  `mdepto_nummdepto` VARCHAR(45) NOT NULL,
  `mpersona_idmpersona` INT NOT NULL,
  PRIMARY KEY (`mdepto_nummdepto`, `mpersona_idmpersona`),
  INDEX `fk_mdepto_has_mpersona_mpersona1_idx` (`mpersona_idmpersona` ASC),
  INDEX `fk_mdepto_has_mpersona_mdepto1_idx` (`mdepto_nummdepto` ASC),
  CONSTRAINT `fk_mdepto_has_mpersona_mdepto1`
    FOREIGN KEY (`mdepto_nummdepto`)
    REFERENCES `mydb`.`mdepto` (`nummdepto`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mdepto_has_mpersona_mpersona1`
    FOREIGN KEY (`mpersona_idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mcajon`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mcajon` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mcajon` (
  `nummcajon` VARCHAR(50) NOT NULL,
  `elemcajon` TINYINT(1) NULL DEFAULT 0,
  `clugar_idclugar` INT NOT NULL,
  `mpersona_idmpersona` INT NULL,
  PRIMARY KEY (`nummcajon`),
  INDEX `fk_mcajon_clugar1_idx` (`clugar_idclugar` ASC),
  INDEX `fk_mcajon_mpersona1_idx` (`mpersona_idmpersona` ASC),
  CONSTRAINT `fk_mcajon_clugar1`
    FOREIGN KEY (`clugar_idclugar`)
    REFERENCES `mydb`.`clugar` (`idclugar`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mcajon_mpersona1`
    FOREIGN KEY (`mpersona_idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mcajon_has_mpersona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mcajon_has_mpersona` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mcajon_has_mpersona` (
  `mcajon_nummcajon` VARCHAR(50) NOT NULL,
  `mpersona_idmpersona` INT NOT NULL,
  PRIMARY KEY (`mcajon_nummcajon`, `mpersona_idmpersona`),
  INDEX `fk_mcajon_has_mpersona_mpersona1_idx` (`mpersona_idmpersona` ASC),
  INDEX `fk_mcajon_has_mpersona_mcajon1_idx` (`mcajon_nummcajon` ASC),
  CONSTRAINT `fk_mcajon_has_mpersona_mcajon1`
    FOREIGN KEY (`mcajon_nummcajon`)
    REFERENCES `mydb`.`mcajon` (`nummcajon`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mcajon_has_mpersona_mpersona1`
    FOREIGN KEY (`mpersona_idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mcarro`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mcarro` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mcarro` (
  `placamcarro` VARCHAR(20) NOT NULL,
  `modelomcarro` VARCHAR(45) NULL,
  `colormcarro` VARCHAR(45) NULL,
  `seguromcarro` VARCHAR(45) NULL,
  PRIMARY KEY (`placamcarro`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mpersona_has_mcarro`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mpersona_has_mcarro` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mpersona_has_mcarro` (
  `mpersona_idmpersona` INT NOT NULL,
  `mcarro_placamcarro` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`mpersona_idmpersona`, `mcarro_placamcarro`),
  INDEX `fk_mpersona_has_mcarro_mcarro1_idx` (`mcarro_placamcarro` ASC),
  INDEX `fk_mpersona_has_mcarro_mpersona1_idx` (`mpersona_idmpersona` ASC),
  CONSTRAINT `fk_mpersona_has_mcarro_mpersona1`
    FOREIGN KEY (`mpersona_idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mpersona_has_mcarro_mcarro1`
    FOREIGN KEY (`mcarro_placamcarro`)
    REFERENCES `mydb`.`mcarro` (`placamcarro`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mmapa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mmapa` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mmapa` (
  `mcajon_nummcajon` VARCHAR(50) NOT NULL,
  `coordxmmapa` FLOAT NULL,
  `coordymmapa` FLOAT NULL,
  `tamxmmapa` FLOAT NULL,
  `tamymmapa` FLOAT NULL,
  PRIMARY KEY (`mcajon_nummcajon`),
  INDEX `fk_mmapa_mcajon1_idx` (`mcajon_nummcajon` ASC),
  CONSTRAINT `fk_mmapa_mcajon1`
    FOREIGN KEY (`mcajon_nummcajon`)
    REFERENCES `mydb`.`mcajon` (`nummcajon`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ctipobodega`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`ctipobodega` ;

CREATE TABLE IF NOT EXISTS `mydb`.`ctipobodega` (
  `idctipobodega` INT NOT NULL,
  `descctipobodega` VARCHAR(45) NULL,
  PRIMARY KEY (`idctipobodega`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mbodega`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mbodega` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mbodega` (
  `idmbodega` VARCHAR(45) NOT NULL,
  `luzmbodega` FLOAT NULL,
  `pisombodega` ENUM('Cemento', 'Madera', 'Alfombra', 'Azulejo', 'Piedra', 'Ladrillo', 'Pintado', 'Goma', 'Otro') NULL DEFAULT 'Otro',
  `usombodega` MEDIUMTEXT NULL,
  `mpersona_idmpersona` INT NULL,
  `clugar_idclugar` INT NULL,
  `ctipobodega_idctipobodega` INT NULL,
  PRIMARY KEY (`idmbodega`),
  INDEX `fk_mbodega_mpersona1_idx` (`mpersona_idmpersona` ASC),
  INDEX `fk_mbodega_clugar1_idx` (`clugar_idclugar` ASC),
  INDEX `fk_mbodega_ctipobodega1_idx` (`ctipobodega_idctipobodega` ASC),
  CONSTRAINT `fk_mbodega_mpersona1`
    FOREIGN KEY (`mpersona_idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mbodega_clugar1`
    FOREIGN KEY (`clugar_idclugar`)
    REFERENCES `mydb`.`clugar` (`idclugar`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mbodega_ctipobodega1`
    FOREIGN KEY (`ctipobodega_idctipobodega`)
    REFERENCES `mydb`.`ctipobodega` (`idctipobodega`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`mbodega_has_mpersona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`mbodega_has_mpersona` ;

CREATE TABLE IF NOT EXISTS `mydb`.`mbodega_has_mpersona` (
  `mbodega_idmbodega` VARCHAR(45) NOT NULL,
  `mpersona_idmpersona` INT NOT NULL,
  PRIMARY KEY (`mbodega_idmbodega`, `mpersona_idmpersona`),
  INDEX `fk_mbodega_has_mpersona_mpersona1_idx` (`mpersona_idmpersona` ASC),
  INDEX `fk_mbodega_has_mpersona_mbodega1_idx` (`mbodega_idmbodega` ASC),
  CONSTRAINT `fk_mbodega_has_mpersona_mbodega1`
    FOREIGN KEY (`mbodega_idmbodega`)
    REFERENCES `mydb`.`mbodega` (`idmbodega`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_mbodega_has_mpersona_mpersona1`
    FOREIGN KEY (`mpersona_idmpersona`)
    REFERENCES `mydb`.`mpersona` (`idmpersona`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ctipoadmin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`ctipoadmin` ;

CREATE TABLE IF NOT EXISTS `mydb`.`ctipoadmin` (
  `idctipoadmin` INT NOT NULL AUTO_INCREMENT,
  `descctipoadmin` VARCHAR(45) NULL,
  PRIMARY KEY (`idctipoadmin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`madmin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`madmin` ;

CREATE TABLE IF NOT EXISTS `mydb`.`madmin` (
  `idmadmin` INT NOT NULL,
  `nommadmin` VARCHAR(45) NULL,
  `emailmadmin` VARCHAR(45) NULL,
  `passmadmin` VARCHAR(45) NULL,
  `createmadmin` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `idctipoadmin` INT NOT NULL,
  PRIMARY KEY (`idmadmin`, `idctipoadmin`),
  INDEX `fk_madmin_ctipoadmin1_idx` (`idctipoadmin` ASC),
  CONSTRAINT `fk_madmin_ctipoadmin1`
    FOREIGN KEY (`idctipoadmin`)
    REFERENCES `mydb`.`ctipoadmin` (`idctipoadmin`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`clugar`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (1, 'Planta baja');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (2, 'Piso 2');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (3, 'Piso 3');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (4, 'Piso 4');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (5, 'Piso 5');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (6, 'Piso 6');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (7, 'Piso 7');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (8, 'Piso 8');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (9, 'Piso 9');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (10, 'Piso 10');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (11, 'Piso 11');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (12, 'Piso 12');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (13, 'Piso 13');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (14, 'Piso 14');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (15, 'Piso 15');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (16, 'Sótano 1');
INSERT INTO `mydb`.`clugar` (`idclugar`, `descclugar`) VALUES (17, 'Sótano 2');

COMMIT;

