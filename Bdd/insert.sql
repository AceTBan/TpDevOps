use parionstennis;

INSERT INTO `joueur` (`idJoueur`, `nomJoueur`, `prenomJoueur`, `classementJoueur`) VALUES 
(NULL, 'Djokovic', 'Novak', '1'),
(NULL, 'Medvedev', 'Daniil', '2'),
(NULL, 'Nadal', 'Rafael', '4'),
(NULL, 'Zverev', 'Alexander', '3'),
(NULL, 'Tsitsipas', 'Stefanos', '5'),
(NULL, 'Berrettini', 'Matteo', '6'),
(NULL, 'Ruud', 'Casper', '7'),
(NULL, 'Rublev', 'Andrey', '8'),
(NULL, 'Alcaraz', 'Carlos', '9'),
(NULL, 'Auger-Aliassime', 'Félix', '10'),
(NULL, 'Norrie', 'Cameron', '11');

INSERT INTO `matchs` (`idMatchs`, `dateMatchs`, `lieuMatchs`) VALUES 
(NULL, '2022-04-29 20:00:00.000000', 'Roland Garros'),
(NULL, '2022-05-05 20:15:00.000000', 'Wimbledon'),
(NULL, '2022-05-12 21:00:00.000000', 'US Open'),
(NULL, '2022-06-10 18:30:00.000000', 'Open Australie'),
(NULL, '2022-06-29 21:30:00.000000', 'Roland Garros');

INSERT INTO `jouer` (`idJouer`, `idJoueur`, `idMatchs`) VALUES 
(NULL, '7', '1'),
(NULL, '3', '1'),
(NULL, '2', '2'),
(NULL, '5', '2'),
(NULL, '1', '3'),
(NULL, '4', '3'),
(NULL, '6', '4'),
(NULL, '10', '4'),
(NULL, '11', '5'),
(NULL, '9', '5');