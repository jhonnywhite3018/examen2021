DROP DATABASE IF EXISTS examenfinal;

CREATE DATABASE IF NOT EXISTS examenfinal
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

--
-- Set default database
--
USE examenfinal;

--
-- Create table ciudades
--
CREATE TABLE IF NOT EXISTS ciudades (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(255) DEFAULT NULL,
  habitantes float DEFAULT NULL,
  escudo varchar(255) DEFAULT NULL,
  mapa varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
CHARACTER SET latin1,
COLLATE latin1_swedish_ci;