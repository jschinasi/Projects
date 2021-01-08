/* L06-Schinasi
    Jake Schinasi 10/2/2020
    This lab is on working with MYSQL tables and data
    Table name L6_Schinasi
    Database: site_db;
*/

/* Uses site_db databse */
USE site_db;

/* Step 2 Create and explain TABLE */
DROP TABLE IF EXISTS L6_Schinasi;
CREATE TABLE L6_Schinasi (
    rec_num int PRIMARY KEY AUTO_INCREMENT,
    artist text (20) NOT NULL, 
    cd_title text (20) NULL,
    year_released int NULL, 
    genre enum ('rock', 'rap', 'pop', 'edm', 'Latin')
);
EXPLAIN TABLE L6_Schinasi;

/* Step 3 Add two rows one at a time */
INSERT INTO L6_Schinasi 
(rec_num, artist, genre) 
VALUES (1,'Drake', 'rap'),
(2,'Pop Smoke', 'rap');
SELECT * FROM L6_Schinasi;

/* Step 4 Add two new columns and one more row */
ALTER TABLE L6_Schinasi
ADD quantity INT NOT NULL DEFAULT(0),
    ADD changed TIMESTAMP DEFAULT CURRENT_TIMESTAMP;
INSERT INTO L6_Schinasi (rec_num, artist, genre)
VALUES ('3','Bad Bunny', 'Latin');
SELECT * FROM L6_Schinasi;

/* Step 5 Change data for existing rows */
UPDATE L6_Schinasi
SET year_released = 2001
WHERE rec_num=1;
UPDATE L6_Schinasi
SET year_released = 2002
WHERE rec_num=2;
UPDATE L6_Schinasi
SET year_released = 2003
WHERE rec_num=3;

SELECT * FROM L6_Schinasi
    ORDER BY rec_num ASC;

/* Step 6 Delete Rows */
DELETE FROM L6_Schinasi
WHERE rec_num =1 OR rec_num =3;
SELECT * FROM L6_Schinasi
ORDER BY rec_num ASC;

/* Step 7 Adding more data */
INSERT INTO L6_Schinasi (cd_title, artist) 
VALUES ('Let It Be','The Beatles'), 
('Abbey Road', 'The Beatles'),
('The Beatles', 'The Beatles'),
('Sgt Peppers', 'The Beatles'),
('Magical Mystery Tour', 'The Beatles');
UPDATE L6_Schinasi SET genre = "Rock";
SELECT * FROM L6_Schinasi
ORDER BY rec_num ASC;

/* Step 8 Retreiving Data */
SELECT * FROM L6_Schinasi WHERE cd_title = 'B' AND rec_num ='2';
SELECT * FROM L6_Schinasi WHERE rec_num = MOD(2,0);

/* Step 9 Date Format */
UPDATE L6_Schinasi
SET changed = "2020-01-01 12:00:00"
WHERE rec_num =2;
SELECT * FROM L6_Schinasi
ORDER BY rec_num ASC;

/* Step 10 Counting Records */
SELECT COUNT(*)
FROM L6_Schinasi;
SELECT * FROM L6_Schinasi;  






