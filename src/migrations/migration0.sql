CREATE TABLE vercors_User(
   Id_User INT AUTO_INCREMENT,
   name VARCHAR(100)  NOT NULL,
   surname VARCHAR(100)  NOT NULL,
   phone INT NOT NULL,
   address VARCHAR(200)  NOT NULL,
   email VARCHAR(200)  NOT NULL,
   password VARCHAR(8)  NOT NULL,
   RGPD BOOLEAN NOT NULL,
   PRIMARY KEY(Id_User)
);

CREATE TABLE vercors_reservation(
   Id_reservation INT AUTO_INCREMENT,
   number_of_places INT NOT NULL,
   is_discounted BOOLEAN NOT NULL,
   total_price INT NOT NULL,
   Id_User INT NOT NULL,
   PRIMARY KEY(Id_reservation),
   FOREIGN KEY(Id_User) REFERENCES vercors_User(Id_User)
);

CREATE TABLE vercors_options(
   Id_options INT AUTO_INCREMENT,
   name VARCHAR(200)  NOT NULL,
   stock INT NOT NULL,
   price INT,
   PRIMARY KEY(Id_options)
);

CREATE TABLE vercors_tent(
   Id_tent INT AUTO_INCREMENT,
   price INT,
   PRIMARY KEY(Id_tent)
);

CREATE TABLE vercors_van(
   Id_van INT AUTO_INCREMENT,
   price INT,
   PRIMARY KEY(Id_van)
);

CREATE TABLE pass(
   Id_pass INT AUTO_INCREMENT,
   type DATE,
   price INT,
   PRIMARY KEY(Id_pass)
);

CREATE TABLE contains(
   Id_reservation INT,
   Id_options INT,
   quantity INT NOT NULL,
   PRIMARY KEY(Id_reservation, Id_options),
   FOREIGN KEY(Id_reservation) REFERENCES vercors_reservation(Id_reservation),
   FOREIGN KEY(Id_options) REFERENCES vercors_options(Id_options)
);

CREATE TABLE date_pass(
   Id_reservation INT,
   Id_pass INT,
   _date DATE,
   PRIMARY KEY(Id_reservation, Id_pass),
   FOREIGN KEY(Id_reservation) REFERENCES vercors_reservation(Id_reservation),
   FOREIGN KEY(Id_pass) REFERENCES pass(Id_pass)
);

CREATE TABLE accommodation(
   Id_reservation INT,
   Id_tent INT,
   Id_van INT,
   chosen_dates INT,
   PRIMARY KEY(Id_reservation, Id_tent, Id_van),
   FOREIGN KEY(Id_reservation) REFERENCES vercors_reservation(Id_reservation),
   FOREIGN KEY(Id_tent) REFERENCES vercors_tent(Id_tent),
   FOREIGN KEY(Id_van) REFERENCES vercors_van(Id_van)
);
