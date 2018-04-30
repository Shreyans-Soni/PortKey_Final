create database portkey_bus;
use portkey_bus;

create table location (
	location_id integer unsigned auto_increment not null unique,
	longitude varchar(40),
	latitude varchar(40),
	textual varchar(40),
	PRIMARY KEY (location_id)
);

create table authentication (
	user_id integer unsigned auto_increment not null unique,
	user_name varchar(40) not null,
	password varchar(40) not null,
	PRIMARY KEY(user_id)
);


create table user_info (
	user_id integer unsigned not null unique,
	first_name varchar(40),
	last_name varchar(40),
	user_role varchar(40) not null,
	PRIMARY KEY (user_id),
	FOREIGN KEY (user_id) REFERENCES authentication (user_id) ON DELETE RESTRICT ON UPDATE CASCADE
);


create table bus (
	bus_id integer unsigned not null unique auto_increment,
	bus_number integer unsigned not null,
	colour varchar(40),
	Destination varchar(100),
	PRIMARY KEY(bus_id),
	location_id integer unsigned,
	user_id integer unsigned,
	FOREIGN KEY(location_id) REFERENCES location(location_id) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY(user_id) REFERENCES user_info(user_id) ON DELETE RESTRICT ON UPDATE CASCADE
);


