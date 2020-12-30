SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Cadastro
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Cadastro` ;
CREATE SCHEMA IF NOT EXISTS `Cadastro` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Cadastro` ;

-- -----------------------------------------------------
-- Table `Cadastro`.`Classificacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cadastro`.`Classificacao` (
  `idClassificacao` INT NOT NULL,
  `Empresa` VARCHAR(45) NOT NULL,
  `CNPJ` VARCHAR(16) NOT NULL,
  `Pessoa_Fisica` VARCHAR(45) NOT NULL,
  `RG` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idClassificacao`),
  UNIQUE INDEX `CNPJ_UNIQUE` (`CNPJ` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Cadastro`.`Clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Cadastro`.`Clientes` (
  `idClientes` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `Sobrenome` VARCHAR(45) NOT NULL,
  `Apelido` VARCHAR(45) NULL,
  `Nascimento` DATE NOT NULL,
  `CPF` VARCHAR(11) NOT NULL,
  `E-Mail` VARCHAR(100) NULL,
  `Telefone` VARCHAR(12) NOT NULL,
  `Classificacao_idClassificacao` INT NOT NULL,
  PRIMARY KEY (`idClientes`),
  UNIQUE INDEX `CPF_UNIQUE` (`CPF` ASC),
  INDEX `fk_Clientes_Classificacao_idx` (`Classificacao_idClassificacao` ASC),
  CONSTRAINT `fk_Clientes_Classificacao`
    FOREIGN KEY (`Classificacao_idClassificacao`)
    REFERENCES `Cadastro`.`Classificacao` (`idClassificacao`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `Cadastro`.`Classificacao`
-- -----------------------------------------------------
START TRANSACTION;
USE `Cadastro`;
INSERT INTO `Cadastro`.`Classificacao` (`idClassificacao`, `Empresa`, `CNPJ`, `Pessoa_Fisica`, `RG`) VALUES (NULL, 'Fazenda', NULL, 'Autônomo', NULL);
INSERT INTO `Cadastro`.`Classificacao` (`idClassificacao`, `Empresa`, `CNPJ`, `Pessoa_Fisica`, `RG`) VALUES (NULL, 'Empresa', NULL, 'Funcionário', NULL);

COMMIT;

