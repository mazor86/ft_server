CREATE DATABASE wordpress;
CREATE USER 'mazor'@'localhost';
GRANT ALL ON wordpress.* TO 'mazor'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
