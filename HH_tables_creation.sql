CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	first_name VARCHAR (20) NOT NULL,
	last_name VARCHAR (20) NOT NULL,
	password VARCHAR(40) NOT NULL, 
	email VARCHAR(100) NOT NULL
);

CREATE TABLE symptoms (
	sp_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	symptom VARCHAR (40) NOT NULL
);

CREATE TABLE causes (
	t_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	cause VARCHAR (40) NOT NULL
);

CREATE TABLE severities (
	sv_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	severity CHAR (2) NOT NULL
);

CREATE TABLE places (
	p_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	place VARCHAR (40) NOT NULL
);

CREATE TABLE durations (
	d_id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	duration VARCHAR (40) NOT NULL
);

CREATE TABLE moments (
	m_id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	symptom VARCHAR (40) NOT NULL,
	cause VARCHAR (40) NOT NULL,
	severity VARCHAR(40) NOT NULL,
	place VARCHAR (40) NOT NULL,
	duration VARCHAR (40) NOT NULL,
	coping VARCHAR (100) NOT NULL,
	thoughts VARCHAR (350) NOT NULL,
	moment_date DATE NOT NULL,
	moment_time VARCHAR (10)
);

INSERT INTO symptoms (symptom) 
VALUES ('anxious'),
('suicidal thoughts'),
('stressed'),
('mad'),
('frustrated'),
('lonely'),
('depressed'),
('other');

INSERT INTO causes (cause)
VALUES ('self'),
('family'),
('work'),
('school'),
('friends'),
('relationships'),
('other');

INSERT INTO severities (severity)
VALUES (1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

INSERT INTO durations (duration)
VALUES ('all day'),
('momentary'),
('1/2 hour'),
('1 hour'),
('2 hour'),
('3 hour'),
('4 hour'),
('5 hour'),
('6 hour'),
('7 hour'),
('8 hour'),
('other');

INSERT INTO places (place)
VALUES ('home'),
('school'),
('work'),
('other');



**********************
DROP TABLE causes;
DROP TABLE durations;
DROP TABLE moments;
DROP TABLE places;
DROP TABLE severities;
DROP TABLE symptoms;
DROP TABLE users;