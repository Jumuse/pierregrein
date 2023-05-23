CREATE DATABASE IF NOT EXISTS dbb-restaurant;

CREATE TABLE restaurant (
	id INT NOT NULL PRIMARY KEY,
	name CHAR(20) NOT NULL,
	address VARCHAR(70) NOT NULL
);


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


CREATE TABLE admin (
  	is_admin BOOLEAN NOT NULL,
  /* admin works for the restaurant */
  	works_for INT NOT NULL,
  	FOREIGN KEY(works_for) REFERENCES restaurant(id),
      user_id INT NOT NULL PRIMARY KEY,
    FOREIGN KEY (user_id) REFERENCES users(id)
 );
 
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