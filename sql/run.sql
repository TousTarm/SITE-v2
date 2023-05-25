-- MySQL Script generated by MySQL Workbench
-- Mon May 22 13:58:20 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema toustbook_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema toustbook_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `toustbook_db` DEFAULT CHARACTER SET utf8 ;
USE `toustbook_db` ;

-- -----------------------------------------------------
-- Table `toustbook_db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toustbook_db`.`user` (
  `iduser` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nickname` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `surname` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `idrole` INT GENERATED ALWAYS AS (2) VIRTUAL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toustbook_db`.`friend`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toustbook_db`.`friend` (
  `idfriend` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idfriend`),
  UNIQUE INDEX `idfriend_UNIQUE` (`idfriend` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toustbook_db`.`chat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toustbook_db`.`chat` (
  `idchat` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_iduser` INT UNSIGNED NOT NULL,
  `idguest` INT NOT NULL,
  PRIMARY KEY (`idchat`),
  UNIQUE INDEX `idchat_UNIQUE` (`idchat` ASC) ,
  INDEX `fk_chat_user1_idx` (`user_iduser` ASC) ,
  CONSTRAINT `fk_chat_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `toustbook_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toustbook_db`.`user_has_friend`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toustbook_db`.`user_has_friend` (
  `friend_idfriend` INT UNSIGNED NOT NULL,
  `user_iduser` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`friend_idfriend`),
  INDEX `fk_user_has_friend_friend1_idx` (`friend_idfriend` ASC) ,
  INDEX `fk_user_has_friend_user1_idx` (`user_iduser` ASC) ,
  CONSTRAINT `fk_user_has_friend_friend1`
    FOREIGN KEY (`friend_idfriend`)
    REFERENCES `toustbook_db`.`friend` (`idfriend`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_friend_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `toustbook_db`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `toustbook_db`.`message`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `toustbook_db`.`message` (
  `idmessage` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `body` VARCHAR(255) NULL,
  `owner` VARCHAR(255) NOT NULL,
  `chat_idchat` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`idmessage`, `chat_idchat`),
  UNIQUE INDEX `idmessage_UNIQUE` (`idmessage` ASC) ,
  INDEX `fk_message_chat1_idx` (`chat_idchat` ASC) ,
  CONSTRAINT `fk_message_chat1`
    FOREIGN KEY (`chat_idchat`)
    REFERENCES `toustbook_db`.`chat` (`idchat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
