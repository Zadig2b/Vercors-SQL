CREATE TABLE vercors_reservation (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombrePlaces INT,
  tarifReduit VARCHAR(255),
  passSelection VARCHAR(255),
  prix VARCHAR(255),
  choixJour VARCHAR(255),
  emplacementTente VARCHAR(255),
  emplacementCamion VARCHAR(255),
  enfants VARCHAR(255),
  nombreCasquesEnfants VARCHAR(255),
  NombreLugesEte VARCHAR(255),
  id_User INT,
  CONSTRAINT fk_User_Resa FOREIGN KEY (id_User) REFERENCES vercors_User (Id_User)
);

CREATE TABLE vercors_User (
   Id_User INT AUTO_INCREMENT,
   name VARCHAR(100) NOT NULL,
   surname VARCHAR(100) NOT NULL,
   phone INT NOT NULL,
   address VARCHAR(200) NOT NULL,
   email VARCHAR(200) NOT NULL,
   password VARCHAR(255) NOT NULL,
   role varchar(100) DEFAULT 'user',
   RGPD BOOLEAN NOT NULL,
   PRIMARY KEY(Id_User)
) ;
