CREATE DATABASE IF NOT EXISTS dbb-restaurant;

CREATE TABLE restaurant (
	id INT NOT NULL PRIMARY KEY,
	name CHAR(20) NOT NULL,
	address VARCHAR(70) NOT NULL
);

INSERT INTO restaurant ( id, name, address )
VALUES ( 1, 'Quai Antique', '25 Chemin des Camélias 73000 Chambéry');

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY,
    email VARCHAR(45) NOT NULL,
    password BINARY(60) NOT NULL,
  	telephone INT(10) NOT NULL,
    name VARCHAR(30) NOT NULL,
    is_allergic BOOLEAN NOT NULL,
    allergy_type VARCHAR(40),
  /* restaurant possesses users/customers */
  	possesses INT NOT NULL,
  	FOREIGN KEY(possesses) REFERENCES restaurant(id)
);

INSERT INTO users (id, email, password, telephone, name, is_allergic, allergy_type, possesses)
VALUES (1, 'admin@admin.com', 'iuhrfiuzogp6269864', 0672587914, 'admin1', false, NULL, 1);

CREATE TABLE admin (
  	is_admin BOOLEAN NOT NULL,
  /* admin works for the restaurant */
  	works_for INT NOT NULL,
  	FOREIGN KEY(works_for) REFERENCES restaurant(id),
      user_id INT NOT NULL PRIMARY KEY,
    FOREIGN KEY (user_id) REFERENCES users(id)
 );

 INSERT INTO admin (is_admin, works_for, user_id)
 VALUES (true, 1, 1);

 INSERT INTO admin (is_admin, works_for, user_id)
VALUES (true, 1, 1);
 
 CREATE TABLE carte (
	id INT PRIMARY KEY AUTO_INCREMENT,
 	title VARCHAR(45) NOT NULL,
   	category VARCHAR(20) NOT NULL,
   	description VARCHAR(45) NOT NULL,
   	price FLOAT NOT NULL,
   /* carte can be modified by admin */
   	is_dealt_by INT,
  	FOREIGN KEY(is_dealt_by) REFERENCES admin(user_id)
 );

 INSERT INTO carte (id, title, category, description, price, is_dealt_by)
 VALUES (1, 'salade test', 'salades', 'une salade', 11.50, 1 );
 
 CREATE TABLE foodmenu (
	id INT PRIMARY KEY AUTO_INCREMENT,
 	menu_title VARCHAR(20) NOT NULL,
   	formula_title VARCHAR(20) NOT NULL,
   	formula_description VARCHAR(45) NOT NULL,
   	formula_price FLOAT NOT NULL
 );
  
 CREATE TABLE gallery (
 	id INT NOT NULL PRIMARY KEY,
   	category VARCHAR(20) NOT NULL,
   /* photos of the gallery can be modified by admin */
   	is_dealt_by INT NOT NULL,
  	FOREIGN KEY(is_dealt_by) REFERENCES admin(user_id)
 );
 
 CREATE TABLE photos (
	id INT PRIMARY KEY,
 	name VARCHAR(1000) NOT NULL,
   	description VARCHAR(45) NOT NULL,
   /* photos are displayed in a category within the gallery */
   	category INT NOT NULL,
   	FOREIGN KEY(category) REFERENCES gallery(id)
 );

 INSERT INTO photos (name, title, description, displayed_in)
    VALUES ('bowl.jpg', 'Nos Salades', 'Salades', 1);

CREATE TABLE timetables (
 	day_id TINYINT NOT NULL PRIMARY KEY,
  	opening_time_morning TIME,
    closing_time_morning TIME,
    opening_time_evening TIME,
    closing_time_evening TIME,
  /* several timetables available for the one restaurant -- one-to-many */
  	time_setting INT,
  	FOREIGN KEY(time_setting) REFERENCES restaurant(id),
   /* timetables can be modified by admin -- one-to-many */
	is_dealt_by INT,
  	FOREIGN KEY(is_dealt_by) REFERENCES admin(user_id)
 );

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (1, '12:00:00', '14:00:00', NULL, NULL, 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (2, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (3, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (4, NULL, NULL, NULL, NULL, 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (5, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (6, '12:00:00', '14:00:00', '19:00:00', '22:00:00', 1, 1);

INSERT INTO timetables (day_id, opening_time_morning, closing_time_morning, opening_time_evening, closing_time_evening, time_setting, is_dealt_by)
VALUES (7, NULL, NULL, '19:00:00', '23:00:00', 1, 1);

 
 CREATE TABLE tables (
 	id INT NOT NULL PRIMARY KEY,
   	couverts TINYINT
 );

CREATE TABLE reservation (
	id(255) INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   /* reservation books a table -- one-to-one*/
  	couverts INT NOT NULL,
  	FOREIGN KEY(couverts) REFERENCES tables(id),
  	date DATE NOT NULL,
	name VARCHAR(20),
	email VARCHAR(45) NOT NULL,
	telephone varchar(10) NOT NULL,
  /* reservation needs access to timetables of the restaurant -- one-to-one*/
  	time TINYINT NOT NULL,
  	FOREIGN KEY(time) REFERENCES timetables(day_id),
);