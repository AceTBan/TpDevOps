drop database parionstennis ;
create database parionstennis;
use parionstennis;

create table users (
idUsers int primary key auto_increment,
nom varchar(50) not null,
prenom varchar(30) not null,
mdp varchar(100) not null,
loginUser varchar(100) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table joueur(
idJoueur int primary key auto_increment,
nomJoueur varchar(50) not null ,
prenomJoueur varchar(50) not null,
classementJoueur int not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table matchs(
idMatchs int primary key auto_increment, 
dateMatchs datetime not null,
lieuMatchs varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table parier(
idMatchs int,
idJoueur int,
idUsers int,
primary key (idMatchs, idJoueur, idUsers),
FOREIGN KEY (idMatchs) REFERENCES matchs(idMatchs),
FOREIGN KEY (idJoueur) REFERENCES joueur(idJoueur),
FOREIGN KEY (idUsers) REFERENCES users(idUsers),
mise int not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

create table jouer(
idJoueur int,
idMatchs int,
primary key (idJoueur, idMatchs),
FOREIGN KEY (idJoueur) REFERENCES joueur(idJoueur),
FOREIGN KEY (idMatchs) REFERENCES matchs(idMatchs)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
