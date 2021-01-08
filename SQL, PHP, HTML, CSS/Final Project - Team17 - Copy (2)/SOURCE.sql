/* SOURCE.sql
  Team 17 - Final Project
*/

# Make sure that we are using the site_db database
USE site_db;

DROP TABLE IF EXISTS T17_users;
DROP TABLE IF EXISTS T17_products;
DROP TABLE IF EXISTS T17_suppliers;

CREATE TABLE IF NOT EXISTS T17_users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30),
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
  supplier_id INT AUTO_INCREMENT PRIMARY KEY,
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
         ('chris.comer1', 'password', 'none', 'Chris', 'Comer', 'chris.comer1@marist.edu', 'Employee', CURRENT_TIMESTAMP, 'Y'),
         ('felix.kjellberg1', 'abcde123', 'none', 'Felix', 'Kjellberg', 'felix.kjellberg1@marist.edu', 'Employee', CURRENT_TIMESTAMP, 'Y'),
         ('mark.anthony1', 'abcdef123', 'none', 'Mark', 'Anthony', 'mark.anthony1@marist.edu', 'Employee', CURRENT_TIMESTAMP, 'Y'),
         ('roger.federer1', 'abcd123', 'none', 'Roger', 'Federer', 'roger.federer1@marist.edu', 'Employee', CURRENT_TIMESTAMP, 'Y');

INSERT INTO T17_products ()
  VALUES (1, 'Air Jordan 1 Low SE', 1, 'Nike', 49.99, 10, 'Both', 'Y'),
         (2, 'Air Jordan 1 Low', 1, 'Nike', 59.99, 10, 'Both', 'Y'),
         (3, 'Continental 80 Vegan', 2, 'Adidas', 74.99, 9, 'Women', 'Y'),
         (4, 'Eric Emmanuel Rivalry RM', 1, 'Adidas', 74.99, 9, 'Men', 'Y'),
         (5, 'Jordan Zoom 92', 15, 'Nike', 125.99, 10, 'Men', 'Y'),
         (6, 'Superstar Shoes', 150, 'Adidas', 59.99, 10, 'Both', 'Y'),
         (7, 'Suede Classic+ - Sneakers', 25, 'Puma', 65.99, 7, 'Both', 'Y'),
         (8, 'Air Jordan 1 Mid SE', 100, 'Nike', 130.00, 9, 'Men', 'Y'),
         (9, 'Air Jordan 1 Mid', 120, 'Nike', 130.00, 10, 'Men', 'Y'),
         (10, 'Rivalry Low', 54, 'Adidas', 65.00, 8, 'Men', 'Y'),
         (11, 'Stan Smith Shoes', 200, 'Adidas', 40.00, 9, 'Both', 'Y'),
         (12, 'Relaxed Fit: Ralden - Wanson', 10, 'Skechers', 40.00, 9, 'Men', 'Y'),
         (13, 'Relaxed Fit: Romango', 10, 'Skechers', 40.00, 9, 'Men', 'Y'),
         (14, 'Relaxed Fit: Elmen', 5, 'Skechers', 45.00, 8, 'Men', 'Y'),
         (15, 'SC - Bronly', 8, 'Skechers', 140.00, 9, 'Men', 'Y'),
         (16, 'Calibrate Runner', 25, 'Puma', 150.00, 10, 'Men', 'Y'),
         (17, 'Future Rider Olympique-de-Marseille Sneakers', 20, 'Puma', 185.00, 8, 'Men', 'Y'),
         (18, 'RS Fast Sneakers', 25, 'Puma', 74.99, 9, 'Both', 'Y'),
         (19, 'Relaxed Fit: Ralden - Wanson', 3, 'Skechers', 89.99, 7, 'Women', 'Y'),
         (20, 'SC - Sinfist', 5, 'Skechers', 99.99, 8, 'Women', 'Y');

INSERT INTO T17_suppliers ()
  VALUES (1, 'Nike', 'support@nike.com', '15036716453', 'Y'),
         (2, 'Adidas', 'support@adidas.com', '18009829337', 'Y'),
         (3, 'Puma', 'support@puma.com', '18885657862', 'Y'),
         (4, 'Skechers', 'support@skechers.com', '18007463411', 'Y');