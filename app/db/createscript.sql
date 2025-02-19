-- Step: 01
-- ***************************************************************
-- Doel : Maak een nieuwe database aan met de naam Mvc_smartphone_2408C
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Smartphones
-- ***************************************************************

-- Verwijder database Mvc_smartphone_2408C
DROP DATABASE IF EXISTS `Mvc_smartphone_2408C`;

-- Maak een nieuwe database aan Mvc_smartphone_2408C
CREATE DATABASE `Mvc_smartphone_2408C`;

-- Gebruik database Mvc_smartphone_2408C
USE `Mvc_smartphone_2408C`;

-- Step: 02
-- ***************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Tabel Smartphones
-- ***************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem, 
-- Schermgrootte, Releasedatum, MegaPixels
-- ***************************************************************

CREATE TABLE Smartphones
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL     
    ,Prijs 		    DECIMAL(6,2)                NOT NULL
    ,Geheugen           DECIMAL(4,0)                NOT NULL 
    ,Besturingssysteem  VARCHAR(25)			  NOT NULL
    ,Schermgrootte      DECIMAL(3,2)			  NOT NULL
    ,Releasedatum	    DATE 					  NOT NULL
    ,MegaPixels	    DECIMAL(3,0)			  NOT NULL
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 03
-- ***************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           12-02-2025      Arjan de Ruijter    Vulling Smartphones
-- ***************************************************************

INSERT INTO Smartphones
(
      Merk
     ,Model
     ,Prijs
     ,Geheugen
     ,Besturingssysteem 
     ,Schermgrootte
     ,Releasedatum
     ,MegaPixels
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Apple', 'iPhone 16 Pro', 1256.56, 64, 'iOS 18', 6.7, '2025-01-19', 50, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Samsung', 'Galaxy S25 Ultra', 1539, 128, 'Android 15', 6.1, '2025-02-01', 200, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Google', 'Pixel 9 Pro', 890, 1024, 'Android 15', 6.3, '2024-12-20', 100, 1, NULL, SYSDATE(6), SYSDATE(6));