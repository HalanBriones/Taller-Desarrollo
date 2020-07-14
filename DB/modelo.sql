-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Postulante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Postulante` (
  `rut` VARCHAR(10) NOT NULL,
  `nombre1` VARCHAR(45) NOT NULL,
  `apellidoP` VARCHAR(45) NOT NULL,
  `nombre2` VARCHAR(45) NOT NULL,
  `apellidoM` VARCHAR(45) NOT NULL,
  `fechaNac` DATE NOT NULL,
  `sexo` INT NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `nivelE` INT NOT NULL,
  `telefono` INT NOT NULL,
  `telefonoEme` INT NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `enfermedades` TEXT NULL,
  PRIMARY KEY (`rut`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Postulacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Postulacion` (
  `idPostulacion` INT NOT NULL AUTO_INCREMENT,
  `codigoP` VARCHAR(45) NOT NULL,
  `fechaP` DATE NOT NULL,
  `estadoP` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPostulacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Documentos` (
  `idDocumentos` INT NOT NULL AUTO_INCREMENT,
  `nombreDoc` VARCHAR(45) NOT NULL,
  `fechaDoc` DATE NOT NULL,
  `descripcionDoc` TEXT NULL,
  `Postulante_rut` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idDocumentos`, `Postulante_rut`),
  CONSTRAINT `fk_Documentos_Postulante1`
    FOREIGN KEY (`Postulante_rut`)
    REFERENCES `mydb`.`Postulante` (`rut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Documentos_Postulante1_idx` ON `mydb`.`Documentos` (`Postulante_rut` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `mydb`.`Ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Ficha` (
  `idFicha` INT NOT NULL,
  `nombresFicha` VARCHAR(45) NOT NULL,
  `rutFicha` VARCHAR(10) NOT NULL,
  `fechaNacimiento` DATE NOT NULL,
  `sexo` INT NOT NULL,
  `direccion` TEXT NOT NULL,
  `temporadas` INT NOT NULL,
  PRIMARY KEY (`idFicha`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Postulante_has_Postulacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Postulante_has_Postulacion` (
  `Postulante_rut` VARCHAR(10) NOT NULL,
  `Postulacion_idPostulacion` INT NOT NULL,
  PRIMARY KEY (`Postulante_rut`, `Postulacion_idPostulacion`),
  CONSTRAINT `fk_Postulante_has_Postulacion_Postulante`
    FOREIGN KEY (`Postulante_rut`)
    REFERENCES `mydb`.`Postulante` (`rut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Postulante_has_Postulacion_Postulacion1`
    FOREIGN KEY (`Postulacion_idPostulacion`)
    REFERENCES `mydb`.`Postulacion` (`idPostulacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Postulante_has_Postulacion_Postulacion1_idx` ON `mydb`.`Postulante_has_Postulacion` (`Postulacion_idPostulacion` ASC) VISIBLE;

CREATE INDEX `fk_Postulante_has_Postulacion_Postulante_idx` ON `mydb`.`Postulante_has_Postulacion` (`Postulante_rut` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `mydb`.`Postulacion_has_Ficha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Postulacion_has_Ficha` (
  `Postulacion_idPostulacion` INT NOT NULL,
  `Ficha_idFicha` INT NOT NULL,
  PRIMARY KEY (`Postulacion_idPostulacion`, `Ficha_idFicha`),
  CONSTRAINT `fk_Postulacion_has_Ficha_Postulacion1`
    FOREIGN KEY (`Postulacion_idPostulacion`)
    REFERENCES `mydb`.`Postulacion` (`idPostulacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Postulacion_has_Ficha_Ficha1`
    FOREIGN KEY (`Ficha_idFicha`)
    REFERENCES `mydb`.`Ficha` (`idFicha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_Postulacion_has_Ficha_Ficha1_idx` ON `mydb`.`Postulacion_has_Ficha` (`Ficha_idFicha` ASC) VISIBLE;

CREATE INDEX `fk_Postulacion_has_Ficha_Postulacion1_idx` ON `mydb`.`Postulacion_has_Ficha` (`Postulacion_idPostulacion` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
