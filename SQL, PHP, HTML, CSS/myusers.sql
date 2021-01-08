/* Lab 5
9/28/20 AT Original
*/
USE site_db;

CREATE TABLE IF NOT EXISTS myusers (
    username VARCHAR(25) PRIMARY KEY,
    password VARCHAR(25) NOT NULL,
    first_name VARCHAR (20) NOT NULL,
    last_name VARCHAR(25),
    email VARCHAR(30) NOT NULL,
    phone_number VARCHAR(10),
    user_type ENUM ('Admin', 'Customer', 'Employee'),
    password_last_changed DATE

);
