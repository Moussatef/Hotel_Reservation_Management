CREATE TABLE personne (
   id_personne int PRIMARY KEY AUTO_INCREMENT , 
   Nom varchar(50),
   Prenom varchar(50),
    Email varchar(50),
    PASSWORD varchar(50)
    
);
CREATE TABLE client(
    id_client int PRIMARY KEY AUTO_INCREMENT,
    id_personne int 
);
CREATE TABLE admin (
    id_admin int PRIMARY KEY AUTO_INCREMENT,
    id_personne int 
);

CREATE TABLE enfant(
    id_enfant int PRIMARY KEY AUTO_INCREMENT,
    id_personne int 
);
CREATE TABLE tarification(
    id_tarification int PRIMARY KEY AUTO_INCREMENT,
    Nom_Tarif varchar(50),
    Prix float
);
CREATE TABLE bien(
    id_bien int PRIMARY KEY AUTO_INCREMENT,
    Nom_Type varchar(100),
    Type_Lit varchar(100),
    Type_Vue varchar(100),
    Type_Pension varchar(100),
    PRIX float
);
CREATE TABLE reservation(
    id_reservation int PRIMARY KEY AUTO_INCREMENT,
    id_client int ,
    date_debut datetime,
    date_fin datetime
);
CREATE TABLE chambre_res(
    id_bien int ,
    id_reservation int,
    PRIMARY KEY (id_bien,id_reservation)
    
);