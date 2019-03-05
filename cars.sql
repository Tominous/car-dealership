use ce29x_rc17281;

DROP TABLE IF EXISTS user_options;
DROP TABLE IF EXISTS car_options;
DROP TABLE IF EXISTS cars;
DROP TABLE IF EXISTS users;


CREATE TABLE cars(
   id int(10) not null auto_increment primary key,
   name varchar(355) not null,
   price int(10) not null
) Engine=InnoDB;



CREATE TABLE users(
   id int(10) not null auto_increment primary key,
   email varchar(355) not null,
   password varchar(355) not null
) Engine=InnoDB;


CREATE TABLE car_options(
   id int(10) not null auto_increment primary key,
   car_id int(10) not null,
   configuration varchar(355) not null,
   name varchar(355) not null,
   price int(10) not null,
   FOREIGN KEY (car_id) REFERENCES cars(id)
) Engine=InnoDB;


CREATE TABLE user_options(
   id int(10) not null auto_increment primary key,
   user_id int(10) not null,
   car_trim varchar(355) not null,
   car_colour varchar(355) not null,
   car_interior varchar(355) not null,
   car_engine varchar(355) not null,
   car_wheels varchar(355) not null,
   car_sensors varchar(355) not null,
   FOREIGN KEY (user_id) REFERENCES users(id)
) Engine=InnoDB;


-- Cars
INSERT INTO cars VALUES( 1, 'Fiesta', 14000);
INSERT INTO cars VALUES( 2, 'Focus', 18000);
INSERT INTO cars VALUES( 3, 'Mondeo', 21500);


-- Users
INSERT INTO users VALUES( 1, 'testuser', 'changeme');


-- car_options (Trim)
INSERT INTO car_options VALUES(1, 1, 'Trim', 'Standard', 0);
INSERT INTO car_options VALUES(2, 1, 'Trim', 'EcoMax', 500);
INSERT INTO car_options VALUES(3, 1, 'Trim', 'Sport', 1500);
INSERT INTO car_options VALUES(4, 1, 'Trim', 'Titanium', 2000);
INSERT INTO car_options VALUES(5, 2, 'Trim', 'Standard', 0);
INSERT INTO car_options VALUES(6, 2, 'Trim', 'EcoMax', 600);
INSERT INTO car_options VALUES(7, 2, 'Trim', 'Sport', 1600);
INSERT INTO car_options VALUES(8, 2, 'Trim', 'Titanium', 2100);
INSERT INTO car_options VALUES(9, 3, 'Trim', 'Standard', 0);
INSERT INTO car_options VALUES(10, 3, 'Trim', 'Sport', 750);
INSERT INTO car_options VALUES(11, 3, 'Trim', 'Titanium', 3000);
-- car_options (Colour)
INSERT INTO car_options VALUES(12, 1, 'Colour', 'Red', 0);
INSERT INTO car_options VALUES(13, 1, 'Colour', 'Green', 0);
INSERT INTO car_options VALUES(14, 1, 'Colour', 'Metallic Blue', 1000);
INSERT INTO car_options VALUES(15, 2, 'Colour', 'Red', 0);
INSERT INTO car_options VALUES(16, 2, 'Colour', 'Green', 0);
INSERT INTO car_options VALUES(17, 2, 'Colour', 'Metallic Blue', 1000);
INSERT INTO car_options VALUES(18, 3, 'Colour', 'Red', 0);
INSERT INTO car_options VALUES(19, 3, 'Colour', 'Green', 0);
INSERT INTO car_options VALUES(20, 3, 'Colour', 'Metallic Blue', 1500);
INSERT INTO car_options VALUES(21, 3, 'Colour', 'Matt Black', 2000);
-- car_options (Interior)
INSERT INTO car_options VALUES(22, 1, 'Interior', 'Standard', 0);
INSERT INTO car_options VALUES(23, 1, 'Interior', 'Half Leather', 500);
INSERT INTO car_options VALUES(24, 1, 'Interior', 'Full Leather', 1000);
INSERT INTO car_options VALUES(25, 2, 'Interior', 'Standard', 0);
INSERT INTO car_options VALUES(26, 2, 'Interior', 'Half Leather', 500);
INSERT INTO car_options VALUES(27, 2, 'Interior', 'Full Leather', 1000);
INSERT INTO car_options VALUES(28, 3, 'Interior', 'Standard', 0);
INSERT INTO car_options VALUES(29, 3, 'Interior', 'Half Leather', 1250);
INSERT INTO car_options VALUES(30, 3, 'Interior', 'Full Leather', 2000);
-- car_options (Engine)
INSERT INTO car_options VALUES(31, 1, 'Engine', '1.0l', 0);
INSERT INTO car_options VALUES(32, 1, 'Engine', '2.0l', 1500);
INSERT INTO car_options VALUES(33, 1, 'Engine', '2.2l', 1750);
INSERT INTO car_options VALUES(34, 2, 'Engine', '1.0l', 0);
INSERT INTO car_options VALUES(35, 2, 'Engine', '2.0l', 1500);
INSERT INTO car_options VALUES(36, 2, 'Engine', '2.2l', 1750);
INSERT INTO car_options VALUES(37, 3, 'Engine', '1.4l', 0);
INSERT INTO car_options VALUES(38, 3, 'Engine', '2.0l', 1750);
INSERT INTO car_options VALUES(39, 3, 'Engine', '3.0l', 3000);
-- car_options (Wheels)
INSERT INTO car_options VALUES(40, 1, 'Wheels',  'Standard', 0);
INSERT INTO car_options VALUES(41, 1, 'Wheels',  '16"Alloy', 1500);
INSERT INTO car_options VALUES(42, 1, 'Wheels',  '17"Executive Alloy', 2000);
INSERT INTO car_options VALUES(43, 1, 'Wheels',  '18"Sport Alloy', 2500);
INSERT INTO car_options VALUES(44, 2, 'Wheels',  'Standard', 0);
INSERT INTO car_options VALUES(45, 2, 'Wheels',  '16"Alloy', 1500);
INSERT INTO car_options VALUES(46, 2, 'Wheels',  '17"Executive Alloy', 2000);
INSERT INTO car_options VALUES(47, 2, 'Wheels',  '18"Sport Alloy', 2500);
INSERT INTO car_options VALUES(48, 3, 'Wheels',  'Standard', 0);
INSERT INTO car_options VALUES(49, 3, 'Wheels',  '16"Alloy', 1500);
INSERT INTO car_options VALUES(50, 3, 'Wheels',  '17"Executive Alloy', 2000);
INSERT INTO car_options VALUES(51, 3, 'Wheels',  '18"Sport Alloy', 2500);
-- car_options (Parking Sensors)
INSERT INTO car_options VALUES(52, 1, 'Sensors', 'No', 0);
INSERT INTO car_options VALUES(53, 1, 'Sensors', 'Yes', 1000);
INSERT INTO car_options VALUES(54, 2, 'Sensors', 'No', 0);
INSERT INTO car_options VALUES(55, 2, 'Sensors', 'Yes', 1000);
INSERT INTO car_options VALUES(56, 3, 'Sensors', 'No', 0);
INSERT INTO car_options VALUES(57, 3, 'Sensors', 'Yes', 1000);

