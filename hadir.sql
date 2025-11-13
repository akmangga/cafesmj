CREATE DATABASE `kehadiran`;
USE `kehadiran` ;

CREATE TABLE `pentadbir`(
	`idpentadbir` int(5) NOT NULL AUTO_INCREMENT,
	`namapentadbir` varchar(35) NOT NULL,
	`katalaluan` varchar(12) NOT NULL,
	PRIMARY KEY (`idpentadbir`)
);


CREATE TABLE `food`(
	`idfood` int(5) NOT NULL AUTO_INCREMENT,
	`namafood` varchar(50),
	`harga` varchar(9),
	`info` varchar(350),
	`image` varchar(356),
	`kategori` varchar(15),
	`idpentadbir` int(5) NOT NULL,
	PRIMARY KEY (`idfood`),
	FOREIGN KEY (`idpentadbir`) REFERENCES `pentadbir`(`idpentadbir`) ON DELETE CASCADE 
);

CREATE TABLE tempahan (
  idtempahan INT(5) NOT NULL AUTO_INCREMENT,
  idfood INT(5) NOT NULL,
  nama VARCHAR(50),
  nohp VARCHAR(15),
  jumlah INT(3),
  tarikh DATE,
  catatan VARCHAR(200),
  PRIMARY KEY (idtempahan),
  FOREIGN KEY (idfood) REFERENCES food(idfood) ON DELETE CASCADE,
);