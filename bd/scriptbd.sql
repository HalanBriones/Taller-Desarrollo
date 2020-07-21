-- MySQL Script generated by MySQL Workbench
-- Sun Jul 19 22:36:16 2020
-- Model: New Model    Version: 1.0
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
-- Table `mydb`.`Region`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Region` (
  `idRegion` INT NOT NULL,
  `numero_region` VARCHAR(100) NULL,
  `nombre_region` VARCHAR(100) NULL,
  PRIMARY KEY (`idRegion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Provincia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Provincia` (
  `idProvincia` INT NOT NULL,
  `nombre_provincia` VARCHAR(100) NULL,
  `Region_idRegion` INT NOT NULL,
  PRIMARY KEY (`idProvincia`),
  CONSTRAINT `fk_Provincia_Region`
    FOREIGN KEY (`Region_idRegion`)
    REFERENCES `mydb`.`Region` (`idRegion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comuna`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Comuna` (
  `idComuna` INT NOT NULL,
  `nombre_comuna` VARCHAR(100) NULL,
  `Provincia_idProvincia` INT NOT NULL,
  PRIMARY KEY (`idComuna`),
  CONSTRAINT `fk_Comuna_Provincia1`
    FOREIGN KEY (`Provincia_idProvincia`)
    REFERENCES `mydb`.`Provincia` (`idProvincia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Estado_Civil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Estado_Civil` (
  `idEstado_Civil` INT NOT NULL,
  `nombre_estado` VARCHAR(100) NULL,
  PRIMARY KEY (`idEstado_Civil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Postulante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Postulante` (
  `RUT` VARCHAR(100) NOT NULL,
  `nombre` VARCHAR(100) NULL,
  `segundo_nombre` VARCHAR(100) NULL,
  `apellido_paterno` VARCHAR(100) NULL,
  `apellido_materno` VARCHAR(100) NULL,
  `fecha_nacimiento` VARCHAR(100) NULL,
  `sexo` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `nivel_estudio` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `telefono_emergencia` VARCHAR(45) NULL,
  `correo` VARCHAR(45) NULL,
  `enfermedades` TEXT(200) NULL,
  `talla_superior` VARCHAR(100) NULL,
  `talla_inferior` VARCHAR(100) NULL,
  `talla_calzado` VARCHAR(100) NULL,
  `Comuna_idComuna` INT NOT NULL,
  `Estado_Civil_idEstado_Civil` INT NOT NULL,
  PRIMARY KEY (`RUT`),
  CONSTRAINT `fk_Postulante_Comuna1`
    FOREIGN KEY (`Comuna_idComuna`)
    REFERENCES `mydb`.`Comuna` (`idComuna`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Postulante_Estado_Civil1`
    FOREIGN KEY (`Estado_Civil_idEstado_Civil`)
    REFERENCES `mydb`.`Estado_Civil` (`idEstado_Civil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Documentos` (
  `idDocumentos` INT NOT NULL,
  `nombre_documento` VARCHAR(100) NULL,
  `fecha_doc` DATE NULL,
  `descripcion` VARCHAR(100) NULL,
  `Postulante_RUT` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idDocumentos`),
  CONSTRAINT `fk_Documentos_Postulante1`
    FOREIGN KEY (`Postulante_RUT`)
    REFERENCES `mydb`.`Postulante` (`RUT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Periodo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Periodo` (
  `idPeriodo` INT NOT NULL AUTO_INCREMENT,
  `fecha_inicio` DATE NULL,
  `fecha_fin` DATE NULL,
  PRIMARY KEY (`idPeriodo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Postulacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Postulacion` (
  `idPostulacion` INT NOT NULL AUTO_INCREMENT,
  `codigo_postulacion` VARCHAR(100) NULL,
  `fecha_postulacion` DATE NULL,
  `estado_postulacion` VARCHAR(100) NULL,
  `Postulante_RUT` VARCHAR(100) NOT NULL,
  `Periodo_idPeriodo` INT NOT NULL,
  PRIMARY KEY (`idPostulacion`),
  CONSTRAINT `fk_Postulacion_Postulante1`
    FOREIGN KEY (`Postulante_RUT`)
    REFERENCES `mydb`.`Postulante` (`RUT`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Postulacion_Periodo1`
    FOREIGN KEY (`Periodo_idPeriodo`)
    REFERENCES `mydb`.`Periodo` (`idPeriodo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
