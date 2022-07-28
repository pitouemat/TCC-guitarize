-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jul-2022 às 23:06
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE `musicas` (
  `id_musica` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `autor` varchar(40) NOT NULL,
  `cifra` varchar(3000) NOT NULL,
  `estilo` varchar(20) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`id_musica`, `nome`, `autor`, `cifra`, `estilo`, `imagem`) VALUES
(1, 'Something in the way', 'Nirvana', 'F#5⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀D5\r\nUnderneath the bridge\r\n\r\n⠀F#5⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀D5\r\nTarp has sprung a leak\r\n        F#5            D5\r\nAnd the animals Ive trapped\r\n     F#5            D5\r\nHave all become my pets\r\n         F#5            D5\r\nAnd Im living off of grass\r\n          F#5              D5\r\nAnd the drippings from my ceiling\r\nF#5               D5\r\nIts okay to eat fish\r\n             F#5            D5\r\nCause they dont have any feelings\r\n\r\n F#5      A5      D5  A5\r\nSomething in the way\r\nF#5  A5  D5  E5\r\nHmm\r\n F#5      A5      D5   A5\r\nSomething in the way, yeah\r\nF#5  A5  D5\r\nHmm\r\n\r\n F#5      A5      D5  A5\r\nSomething in the way\r\nF#5  A5  D5  E5\r\nHmm\r\n F#5      A5      D5   A5\r\nSomething in the way, yeah\r\nF#5  A5  D5\r\nHmm\r\n\r\n F#5      A5      D5  A5\r\nSomething in the way\r\nF#5  A5  D5  E5\r\nHmm\r\n F#5      A5      D5   A5\r\nSomething in the way, yeah\r\nF#5  A5  D5\r\nHmm\r\n</p>', 'rock', 'something.jpg'),
(2, 'Hey Jude', 'The Beatles', 'F                   C\r\nHey, Jude, dont make it bad\r\n        C7                   F\r\nTake a sad song and make it better\r\n   Bb                           F\r\nRemember, to let her into your heart\r\n               C                F\r\nThen you can start, to make it better\r\n\r\n      F                C\r\nHey, Jude, dont be afraid\r\n          C7                 F\r\nYou were made to go out and get her\r\n     Bb                             F\r\nThe minute you let her under your skin\r\n            C              F\r\nThen you begin to make it better\r\n\r\n\r\n\r\nF7                             Bb\r\n  And anytime you feel the pain\r\n      F        Gm\r\nHey, Jude, refrain,\r\n       F          C           F  F7\r\nDont carry the world upon your shoulders\r\n\r\n                               Bb\r\nFor well you know that its a fool\r\n      F       Gm\r\nWho plays it cool\r\n    F          C               F\r\nBy making his world a little colder\r\n       F7       C7\r\nNa na na na na na na na na', 'rock', 'jude.jpg'),
(3, 'Let it Be', 'The Beatles', 'C              G\r\nWhen I find myself in times of trouble\r\n Am          F           F6\r\nMother Mary comes to me\r\n  C                G              F Em/F F6 C\r\nSpeaking words of wisdom, let it be\r\n\r\n    C              G\r\nAnd in my hour of darkness\r\n         Am                F           F6\r\nShe is standing right in front of me\r\n  C                G              F Em/F F6 C\r\nSpeaking words of wisdom, let it be\r\n\r\n[Refrão]\r\n\r\n   Am      Am/G    F       C\r\nE|----------------------------------------------------|\r\nB|-1---1---1---1---1---1---1---1----------------------|\r\nG|-2---2---2---2---2---2---0---0----------------------|\r\nD|---2---2---2---2---3---3---2---2--------------------|\r\nA|-0---0-------------------3---3----------------------|\r\nE|---------3---3---1---1------------------------------| \r\n\r\n   C       G       F    Em/F F6     C  \r\nE|-----------------1----0-----------------------------|\r\nB|-1---1---0---0---1----0----3------1---1-------------|\r\nG|-0---0---0---0---2----0----2------0---0-------------|\r\nD|---2---2---0---0-----------3------2-2---2-----------|\r\nA|-3---3----------------------------3---3-------------|\r\nE|---------3---3---1--1-------------------------------|\r\n\r\n          Am         Am/G       F          C\r\nLet it   be, let it be, let it be, let it be\r\n                  G              F Em/F F6 C\r\nWhisper words of wisdom, let it be\r\n\r\n[Segunda Parte]\r\n\r\n   C        G          Am        F     F6\r\nE|-----x---------x----------x---------x---------------|\r\nB|---1-x-1-----0-x-0------1-x-1-----1-x-3-------------|\r\nG|---0-x-0-----0-x-0------2-x-2-----2-x-2-------------|\r\nD|---2-x-2-----0-x-0------2-x-2-----3-x-3-------------|\r\nA|-3---x---3-----x------0---x---------x---------------|\r\nE|-----x-----3---x----3-----x---3-1---x----1----------|\r\n\r\n   C         G         F    Em/F F6    C\r\nE|---0-x-0-------x-----1----0-------------------------|\r\nB|---1-x-1-----3-x-3---1----0----3-----1--------------|\r\nG|---0-x-0-----4-x-4---2----0----2-----0--------------|\r\nD|-----x-------5-x-5-------------3-----2--------------|\r\nA|-3---x---3-----x---------------------3--------------|\r\nE|-----x-----3---x---3-1--1---------------------------|\r\n\r\n      C              G\r\nAnd when the broken-hearted people\r\n Am            F           F6\r\nLiving in the world agree\r\n  C                  G           F Em/F F6 C\r\nThere will be an answer, let it be\r\n\r\n      C                    G\r\nFor though they may be parted\r\n           Am                  F           F6\r\nThere is still a chance that they will see\r\n  C              G               F Em/F F6 C\r\nThere will be an answer, let it be\r\n\r\n[Refrão]\r\n\r\n          Am         Am/G       F          C\r\nLet it   be, let it be, let it be, let it be\r\n                     G           F Em/F F6 C\r\nThere will be an answer, let it be\r\n\r\n          Am         Am/G       F          C\r\nLet it   be, let it be, let it be, let it be\r\n                  G              F Em/F F6 C\r\nWhisper words of wisdom, let it be\r\n\r\n( F  Em/F  F6  C  Bb  Am  G  F  C/E )\r\n( F ', 'rock', 'let.jpg'),
(4, 'I Wont Back Down', 'Johnny Cash', ' F#m    E    A         F#m    E    A\r\nWell I wont back down, no I wont back down\r\n        F#m     E          D\r\nYou can stand me up at the gates of hell\r\n      F#m    E    A\r\nBut I wont back down\r\n\r\n        F#m  E   A                F#m   E   A\r\nGonna stand my ground, wont be turned around\r\n         F#m        E           D\r\nAnd Ill keep this world from draggin me down\r\n      F#m  E   A           F#m    E    A\r\nGonna stand my ground and I wont back down\r\n\r\n  D   E   D                         E\r\nHey baby, there aint no easy way out\r\n  D   E       F#m  E    A          F#m    E    A\r\nHey, I will stand my ground and I wont back down\r\n\r\n( A  A5  D9 )\r\n\r\n        F#m    E     A       F#m   E      A\r\nWell I know whats right, I got just one life\r\n       F#m      E          D\r\nIn a world that keeps on pushin me around\r\n          F#m   E   A          F#m   E    A\r\nBut Ill stand my ground and I wont back down\r\n\r\n  D   E   D                         E\r\nHey baby, there aint no easy way out\r\n  D   E       F#m  E    A          F#m    E    A\r\nHey, I will stand my ground and I wont back down\r\n       F#m    E    A\r\nNo I wont back down', 'rock', 'cash.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `rock` int(11) DEFAULT NULL,
  `jazz` int(11) DEFAULT NULL,
  `blues` int(11) DEFAULT NULL,
  `mpb` int(11) DEFAULT NULL,
  `metal` int(11) NOT NULL,
  `gospel` int(11) NOT NULL,
  `bossa_nova` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`, `rock`, `jazz`, `blues`, `mpb`, `metal`, `gospel`, `bossa_nova`) VALUES
(1, 'mat', '19989413225', 'pitouemat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, 2, 2, 2, 2, 2),
(3, 'Matheus ', '19989413225', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2, 2, 2, 2, 2, 2),
(4, 'Matheus 2', '19989413225', 'teste2@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2, 1, 2, 1, 2, 1),
(5, 'mat3', '19989413225', 'matheus@aguiar', 'b706835de79a2b4e80506f582af3676a', 1, 2, 1, 2, 1, 2, 1),
(6, 'mat', '19989413225', 'teste@teste.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1, 1, 1, 1, 1, 1),
(7, 'matheusssssssssss', '19989413225', 'pitou@pitou.br', '827ccb0eea8a706c4c34a16891f84e7b', 1, 2, 2, 2, 2, 2, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id_musica`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id_musica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
