create database PelisXD;
use PelisXD;

CREATE TABLE `pelisxd`.`pelicula` (
  `idPelicula` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Sinopsis` VARCHAR(45) NOT NULL,
  `Genero` VARCHAR(45) NOT NULL,
  `Poster` VARCHAR(45) NOT NULL,
  `Pais` VARCHAR(45) NULL,
  `Distribuidor` VARCHAR(45) NULL,
  `FechaSubida` DATE NOT NULL,
  `Duracion` INT NOT NULL,
  `Clasificacion` VARCHAR(45) NULL,
  PRIMARY KEY (`idPelicula`));

select * from pelicula where Nombre like '%Superheroes%' or Genero like '%Superheroes%';
select * from pelicula;

CREATE TABLE `pelisxd`.`serie` (
  `idSerie` INT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Sinopsis` VARCHAR(45) NOT NULL,
  `Genero` VARCHAR(45) NOT NULL,
  `Pais` VARCHAR(45) NULL,
  `Distribuidor` VARCHAR(45) NULL,
  `FechaSubida` DATE NOT NULL,
  PRIMARY KEY (`idSerie`));

INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('1', 'Spiderman', 'xdddd', 'Superheroes', 'q', 'EUA', 'Marvel', '2023-01-23', '150', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('2', 'Eso', 'gggg', 'Terror', 'q', 'EUA', 'DD', '2023-01-23', '140', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('3', 'Avatar', 'GHH', 'Accion', 'e', 'EUA', 'JD', '2023-01-23', '170', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('4', 'Viaje al centro de la tierra', 'hfh', 'Aventura', 'dd', 'EUA', 'SUH', '2023-01-23', '145', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('5', 'Shrek', 'dfs', 'Infantil', 'jd', 'EUA', 'Dreamewords', '2023-01-23', '145', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('6', 'Antman', 'sdf', 'Superheroes', 'fkk', 'EUA', 'Marvel', '2023-01-23', '160', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('7', 'Los vengadores', 'kjfj', 'Superheroes', 'AJS', 'EUA', 'Marvel', '2013-01-23', '156', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('8', 'El gato con botas', 'hdj', 'Accion', 'sadh', 'EUA', 'Dreamwords', '2013-01-23', '156', 'PG12');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('9', 'Mi papa es un gato', 'jdj', 'Comedia', 'JDJ', 'EUA', 'DJ', '2013-01-23', '186', 'PG13');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('10', 'El gato', 'dj', 'Infantil', 'sd', 'sd', 'dkd', '2013-01023', '140', 'PG14');
INSERT INTO `pelisxd`.`pelicula` (`idPelicula`, `Nombre`, `Sinopsis`, `Genero`, `Poster`, `Pais`, `Distribuidor`, `FechaSubida`, `Duracion`, `Clasificacion`) VALUES ('11', 'Los aristogatos', 'dskd', 'Infantil', 'DJ', 'WKJD', 'WJJD', '2013-01-23', '167', 'PG13');


CREATE TABLE `pelisxd`.`usuario` (
  `idUsuario` INT NOT NULL,
  `Usuario` VARCHAR(45) NOT NULL,
  `Contraseña` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUsuario`));

select * from usuario;
