use site_db;
DROP
CREATE TABLE presidents ( id_num INT UNIQUE AUTO_INCREMENT , first_name VARCHAR (20) NULL, last_name VARCHAR (20) NOT NULL );
SHOW presidents;

INSERT INTO presidents (id_num, first_name, last_name) VALUES (1, "George" ,"Washington") (16, "Abe", "Lincoln"); 

ALTER TABLE presidents ADD COLUMN party ENUM("REP","DEM","OTH");

SELECT *
INSERT INTO presidents (party) VALUES ("REP");