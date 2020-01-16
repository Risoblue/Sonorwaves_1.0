-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 16 jan. 2020 à 01:27
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Sonorwaves`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `artworkPath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist`, `genre`, `artworkPath`) VALUES
(1, 'Mozart', 5, 6, 'assets/images/artwork/clearday.jpg'),
(2, 'The world', 3, 10, 'assets/images/artwork/energy.jpg'),
(3, 'Khaled', 4, 10, 'assets/images/artwork/goinghigher.jpg'),
(4, 'Happy', 3, 7, 'assets/images/artwork/funkyelement.jpg'),
(5, 'Maroon5', 3, 2, 'assets/images/artwork/popdance.jpg'),
(6, 'Queen', 2, 2, 'assets/images/artwork/ukulele.jpg'),
(7, 'Riles', 1, 4, 'assets/images/artwork/sweet.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Riles'),
(2, 'Queen'),
(3, 'MOMO'),
(4, 'Khaled'),
(5, 'Mozart'),
(6, 'Maroon5');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Hip-hop'),
(4, 'Rap'),
(5, 'R & B'),
(6, 'Classical'),
(7, 'Techno'),
(8, 'Jazz'),
(9, 'Folk'),
(10, 'Country');

-- --------------------------------------------------------

--
-- Structure de la table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `owner` varchar(60) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `playlistSongs`
--

CREATE TABLE `playlistSongs` (
  `id` int(11) NOT NULL,
  `songId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `playlistOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Songs`
--

CREATE TABLE `Songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(8) NOT NULL,
  `path` varchar(500) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Songs`
--

INSERT INTO `Songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`) VALUES
(1, 'Acoustic Breeze', 3, 4, 7, '2:37', 'assets/music/bensound-acousticbreeze.mp3', 1, 7),
(2, 'A new beginning', 3, 4, 1, '2:35', 'assets/music/bensound-anewbeginning.mp3', 2, 9),
(3, 'Better Days', 3, 4, 2, '2:33', 'assets/music/bensound-betterdays.mp3', 3, 7),
(4, 'Buddy', 3, 4, 3, '2:02', 'assets/music/bensound-buddy.mp3', 4, 8),
(6, 'Queen - Killer Queen (Top Of The Pops, 1974)', 2, 6, 2, '3:12', 'assets/music/bensound-goinghigher.mp3', 1, 3),
(7, 'Queen _ David Bowie - Under Pressure (Classic Queen Mix)', 2, 6, 2, '4:03', 'assets/music/Queen _ David Bowie - Under Pressure (Classic Queen Mix).mp3', 2, 7),
(8, 'Queen - Radio Ga Ga 1986 Live Video Sound HQ', 2, 6, 2, '5:58', 'assets/music/Queen - Radio Ga Ga 1986 Live Video Sound HQ.mp3', 2, 1),
(9, 'Queen - Somebody To Love', 2, 6, 2, '5:10', 'assets/music/Queen - Somebody To Love (Official Video).mp3', 3, 7),
(10, 'Maroon 5 - This Love ', 6, 5, 2, '3:23', 'assets/music/Maroon 5 - This Love (Official Music Video).mp3', 3, 3),
(11, 'Maroon 5 - Cold ', 6, 5, 2, '2:59', 'assets/music/Maroon 5 - Cold ft. Future (Audio).mp3', 4, 2),
(12, 'Maroon 5 - Sugar ', 6, 5, 2, '4:24', 'assets/music/Maroon 5 - Sugar (Lyrics).mp3', 5, 4),
(13, 'She Will Be Loved', 6, 5, 2, '4:17', 'assets/music/She Will Be Loved.mp3', 5, 1),
(14, 'Happy Rock', 3, 4, 9, '1:45', 'assets/music/bensound-happyrock.mp3', 4, 4),
(15, 'Jazzy Frenchy', 3, 2, 10, '1:44', 'assets/music/bensound-jazzyfrenchy.mp3', 3, 3),
(16, 'Little Idea', 3, 2, 1, '2:49', 'assets/music/bensound-littleidea.mp3', 2, 4),
(17, 'Memories', 3, 2, 2, '3:50', 'assets/music/bensound-memories.mp3', 1, 2),
(18, 'Moose', 4, 7, 1, '2:43', 'assets/music/bensound-moose.mp3', 5, 2),
(20, 'PESETAS ', 1, 7, 5, '3:54', 'assets/music/Rilès - PESETAS (Music Video).mp3', 3, 6),
(21, 'BROTHERS', 1, 7, 5, '3:13', 'assets/music/Rilès - BROTHERS (Music Video).mp3', 2, 1),
(22, 'Thank God', 1, 7, 5, '3:27', 'assets/music/Rilès - Thank God.mp3', 1, 8),
(26, 'Khaled - Aicha', 4, 3, 10, '3:23', 'assets/music/Khaled - Aicha.mp3', 4, 3),
(27, 'Khaled - C\'est La Vie', 4, 3, 10, '3:57', 'assets/music/Khaled - C\'est La Vie.mp3', 5, 5),
(28, 'Eine Kleine Nachtmusik - Mozart.mp3', 5, 1, 6, '5:47', 'assets/music/Eine Kleine Nachtmusik - Mozart.mp3', 4, 4),
(31, 'Mozart - Lacrimosa.mp3', 5, 1, 6, '3:21', 'assets/music/Mozart - Lacrimosa.mp3', 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(5, 'alammm24', 'Mohamed', 'Aallam', 'Alammm24@gmail.com', 'mohamed2000', '2020-01-07 00:00:00', 'assets/images/profile-pics/head_emerald.png'),
(6, 'mohamedaziz', 'Aziz', 'Mohamed', 'Alammm24@gmail.com', 'mohamed20', '2020-01-10 00:00:00', 'assets/images/profile-pics/head_emerald.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `playlistSongs`
--
ALTER TABLE `playlistSongs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Songs`
--
ALTER TABLE `Songs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `playlistSongs`
--
ALTER TABLE `playlistSongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
