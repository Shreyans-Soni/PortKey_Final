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

create table session_info (
	session_id integer unsigned not null unique,
	location_id integer unsigned,
	time varchar(40),
	PRIMARY KEY (session_id),
	FOREIGN KEY (location_id) REFERENCES location (location_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

create table bus (
	bus_id integer unsigned not null unique auto_increment,
	session_id integer unsigned,
	bus_number integer unsigned not null,
	colour varchar(40),
	PRIMARY KEY(bus_id),
	authenticated integer unsigned,
	FOREIGN KEY (session_id) REFERENCES session_info (session_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

create table user_info (
	user_id integer unsigned not null unique,
	bus_id integer unsigned,
	location_id integer unsigned,
	first_name varchar(40),
	last_name varchar(40),
	user_role integer unsigned not null,
	PRIMARY KEY (user_id),
	FOREIGN KEY (user_id) REFERENCES authentication (user_id) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY (bus_id) REFERENCES bus (bus_id) ON DELETE RESTRICT ON UPDATE CASCADE,
	FOREIGN KEY (location_id) REFERENCES location (location_id) ON DELETE RESTRICT ON UPDATE CASCADE
);
