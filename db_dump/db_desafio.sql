create database desafio;
use desafio;

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `sexo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `funcionarios` VALUES (1,'Guilherme ','Luis ',20,1),(2,'João','Pereira Lima',22,1),(4,'Maria','Silva',40,0),(5,'Joana','Torres',33,0),(7,'Lucas','Lima',27,1),(8,'Jorge','André',43,1),(9,'Mauricio','Souza',55,1);

