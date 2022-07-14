-- MySQL Workbench Synchronization
-- Generated: 2022-07-14 07:34
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: edson

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `prova_cbm` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`perfis` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `tipos_sanguineo_id` INT(11) NOT NULL,
    `signo_id` INT(11) NOT NULL,
    `cpf` VARCHAR(11) NOT NULL,
    `nome` VARCHAR(50) NOT NULL,
    `data_nascimento` DATE NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    `telefone` VARCHAR(45) NOT NULL,
    `resumo` TEXT NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) VISIBLE,
    INDEX `fk_perfis_signos_idx` (`signo_id` ASC) VISIBLE,
    INDEX `fk_perfis_tipos_sanguineos1_idx` (`tipos_sanguineo_id` ASC) VISIBLE,
    CONSTRAINT `fk_perfis_signos`
    FOREIGN KEY (`signo_id`)
    REFERENCES `prova_cbm`.`signos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_perfis_tipos_sanguineos1`
    FOREIGN KEY (`tipos_sanguineo_id`)
    REFERENCES `prova_cbm`.`tipos_sanguineos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`signos` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`tipos_sanguineos` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`instituicoes` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`formacao` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `instituicao_id` INT(11) NOT NULL,
    `perfil_id` INT(11) NOT NULL,
    `nome` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `fk_formacao_instituicoes1_idx` (`instituicao_id` ASC) VISIBLE,
    INDEX `fk_formacao_perfis1_idx` (`perfil_id` ASC) VISIBLE,
    CONSTRAINT `fk_formacao_instituicoes1`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `prova_cbm`.`instituicoes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_formacao_perfis1`
    FOREIGN KEY (`perfil_id`)
    REFERENCES `prova_cbm`.`perfis` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`competencias` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`competencias_perfis` (
    `competencia_id` INT(11) NOT NULL,
    `perfil_id` INT(11) NOT NULL,
    PRIMARY KEY (`competencia_id`, `perfil_id`),
    INDEX `fk_competencias_has_perfis_perfis1_idx` (`perfil_id` ASC) VISIBLE,
    INDEX `fk_competencias_has_perfis_competencias1_idx` (`competencia_id` ASC) VISIBLE,
    CONSTRAINT `fk_competencias_has_perfis_competencias1`
    FOREIGN KEY (`competencia_id`)
    REFERENCES `prova_cbm`.`competencias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    CONSTRAINT `fk_competencias_has_perfis_perfis1`
    FOREIGN KEY (`perfil_id`)
    REFERENCES `prova_cbm`.`perfis` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `prova_cbm`.`experiencias` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `perfil_id` INT(11) NOT NULL,
    `empresa` VARCHAR(45) NOT NULL,
    `inicio` DATE NOT NULL,
    `fim` DATE NULL DEFAULT NULL,
    `atual_trabalho` TINYINT(4) NOT NULL DEFAULT 0,
    `cargo` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    INDEX `fk_experiencias_perfis1_idx` (`perfil_id` ASC) VISIBLE,
    CONSTRAINT `fk_experiencias_perfis1`
    FOREIGN KEY (`perfil_id`)
    REFERENCES `prova_cbm`.`perfis` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB
    DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
