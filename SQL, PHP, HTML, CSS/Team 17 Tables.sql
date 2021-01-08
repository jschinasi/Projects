/* Team 17 Tables.sql
   Team 17
   10/11/2020 Mehul created table T17_users and inserted 6 rows in the table
   10/12/2020 Jake created table T17_products and inserted 4 rows in the table
   10/12/2020 Peter created table T17_suppliers and inserted 2 rows in the table
*/

# Make sure that we are using the site_db database
USE site_db;

DROP TABLE IF EXISTS T17_users;
DROP TABLE IF EXISTS T17_products;
DROP TABLE IF EXISTS T17_suppliers;

CREATE TABLE IF NOT EXISTS T17_users (
  username VARCHAR(30) PRIMARY KEY,
  pass VARCHAR(30) NOT NULL,
  hashtype VARCHAR(30) NOT NULL,
  first_name VARCHAR(25) NOT NULL,
  last_name VARCHAR(25),
  email_address VARCHAR(50) NOT NULL,
  phone_number VARCHAR(10),
  user_type ENUM('Admin','Employee','Customer'),
  password_last_modified DATETIME,
  last_changed INT,
  active ENUM('Y','N')
);

CREATE TABLE IF NOT EXISTS T17_products (
  product_id INT AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(200) NOT NULL,
  product_quantity INT DEFAULT 0,
  product_supplier ENUM('Nike','Adidas','Puma','Skechers'),
  product_price DECIMAL(6,2) NOT NULL,
  product_size INT NOT NULL,
  product_type ENUM('Men','Women','Both'),
  active ENUM('Y','N')
);

CREATE TABLE IF NOT EXISTS T17_suppliers (
  supplier_name VARCHAR(30) NOT NULL,
  supplier_email VARCHAR(50) NOT NULL,
  supplier_phone VARCHAR(11),
  active ENUM('Y','N')
);

INSERT INTO T17_users (username, pass, hashtype, first_name, last_name, email_address, user_type, password_last_modified, active)
  VALUES ('jake.schinasi1', 'secure123', 'none', 'Jake', 'Schinasi', 'jake.schinasi1@marist.edu', 'Admin', CURRENT_TIMESTAMP, 'Y'),
         ('peter.schwartz1', 'secure123', 'none', 'Peter', 'Schwartz', 'peter.schwartz1@marist.edu', 'Admin', CURRENT_TIMESTAMP, 'Y'),
         ('mehul.shetty1', 'secure123', 'none', 'Mehul', 'Shetty', 'mehul.shetty1@marist.edu', 'Admin', CURRENT_TIMESTAMP, 'Y'),
         ('aptokash', 'ADMIN', 'none', 'Andrew', 'Tokash', 'andrew.tokash1@marist.edu', 'Admin', CURRENT_TIMESTAMP, 'Y'),
         ('jodie.comer1', 'password', 'none', 'Jodie', 'Comer', 'jodie.comer1@marist.edu', 'Employee', CURRENT_TIMESTAMP, 'Y'),
         ('chris.comer1', 'password', 'none', 'Chris', 'Comer', 'chris.comer1@marist.edu', 'Employee', CURRENT_TIMESTAMP, 'Y');

INSERT INTO T17_products ()
  VALUES (1, 'Air Jordan 1 Low SE', 1, 'Nike', 49.99, 10, 'Both', 'Y'),
         (2, 'Air Jordan 1 Low', 1, 'Nike', 59.99, 10, 'Both', 'Y'),
         (3, 'Continental 80 Vegan', 2, 'Adidas', 74.99, 9, 'Women', 'Y'),
         (4, 'Eric Emmanuel Rivalry RM', 1, 'Adidas', 74.99, 9, 'Men', 'Y');

INSERT INTO T17_suppliers ()
  VALUES ('Nike', 'support@nike.com', '15036716453', 'Y'),
         ('Adidas', 'support@adidas.com', '18009829337', 'Y');
