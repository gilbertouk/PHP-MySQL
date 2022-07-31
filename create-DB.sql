create table usuarios (
usuario varchar(10) not null,
nome varchar(30) not null,
senha varchar(60) not null,
tipo varchar(10) not null default 'editor',
primary key(usuario)
) engine=InnoDB default charset=utf8mb4;

create table generos (
cod int(11) not null,
genero varchar(20) not null,
primary key(cod)
) engine=InnoDB default charset=utf8mb4;

create table produtoras (
cod int(11) not null,
produtora varchar(20) not null,
pais varchar(15) not null,
primary key(cod)
) engine=InnoDB default charset=utf8mb4;

create table jogos (
cod int(11) not null,
nome varchar(40) not null,
genero int(11) not null,
produtora int(11) not null,
descricao text not null,
nota decimal(4,2) not null,
capa varchar(40) default null,
primary key(cod),
foreign key(genero) references generos(cod),
foreign key(produtora) references produtoras(cod)
) engine=InnoDB default charset=utf8mb4;


describe generos;

insert into generos values
(1, 'Ação'),
(2, 'Aventura'),
(3, 'Terror'),
(4, 'Plataforma'),
(5, 'Estratégia'),
(6, 'RPG'),
(7, 'Esporte'),
(8, 'Corrida'),
(9, 'Tabuleiro'),
(10, 'Puzzle'),
(11, 'Luta'),
(12, 'Musical');

Select * from generos;

describe produtoras;

insert into produtoras (cod, produtora, pais) values
(1, 'Microsoft', 'EUA'),
(2, 'Tencent', 'China'),
(3, 'Nintendo', 'Japão'),
(4, 'Sony', 'Japão'),
(5, 'Activision', 'EUA'),
(6, 'EA', 'EUA'),
(7, 'Sega', 'Japão'),
(8, 'Namco Bandai', 'Japão'),
(9, 'Konami', 'Japão'),
(10, 'Ubisoft', 'EUA'),
(11, 'Valve', 'EUA'),
(12, 'Square Enix', 'Japão'),
(13, 'Take Two', 'EUA'),
(14, 'Capcom', 'Japão');

select * from produtoras

describe jogos;

insert into jogos (cod, nome, genero, produtora, descricao, nota, capa) values
(1, 'Mario Odissey', 2, 3, 'abc', '9.50', 'mario.png'),
(2, 'Call of Duty: Black Ops', 1, 5, 'abc', '3.50', 'cod.png'),
(3, 'League of Legends', 1, 2, 'abc', '8.50', 'lol.png'),
(4, 'Donkey Kong Tropical Freeze', 2, 1, 'abc', '8.00', 'donkey.png'),
(5, 'Sonic the Hedgehog', 2, 7, 'abc', '8.50', 'sonic.png'),
(6, 'God of War', 1, 4, 'abc', '9.50', 'gow.png'),
(7, 'Counter-Strike', 1, 11, 'abc', '9.00', 'cs.png'),
(8, 'Resident Evil 6', 3, 14, 'abc', '7.50', 'resident.png'),
(9, 'Grand Theft Auto V', 2, 13, 'abc', '9.50', 'gta.png'),
(10, 'Metal Gear Solid V', 6, 9, 'abc', '8.50', 'metal.png'),
(11, 'Assassins Creed III', 1, 10, 'abc', '7.50', 'assassin.png');

select * from jogos;

SELECT j.cod, j. nome, g.genero, p.produtora, j.descricao, j.nota, j.capa FROM jogos j 
JOIN generos g ON j.genero = g.cod JOIN produtoras p ON j.produtora = p.cod;