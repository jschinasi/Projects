/* Lab 4

    09/20/20 AT Original
    This is lab 4 using the source command
*/
USE site_db;
CREATE TABLE IF NOT EXISTS MyFriends (FirstName TEXT, LastName TEXT);
INSERT INTO MyFriends VALUES ('Owen', 'Bresnick'), ('Kat','Gallo'), ('Caitlin', 'Leva'), ('Albert', 'Severini');
SELECT * FROM MyFriends;
