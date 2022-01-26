-- ATENCION este codigo hay que ejecutarlo tras la creacion de la base de datos
create user 'gymed'@'localhost' identified by 'gymed';
Grant all privileges on *.* to 'gymed'@'localhost';
FLUSH PRIVILEGES;