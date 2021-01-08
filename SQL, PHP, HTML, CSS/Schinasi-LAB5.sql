/*Lab 5 
    09/20/20 AT ORIGINAL
    Modified 9/27/2020

*/
USE site_db;

CREATE TABLE products
 ( modelnumber VARCHAR (4) NOT NULL , name VARCHAR (25) NOT NULL , description  TEXT (50) NOT NULL , price DECIMAL(6,2)   NOT NULL , supplier CHAR(16) NOT NULL );
    
    EXPLAIN products;