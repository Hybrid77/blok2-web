-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 25 nov 2013 om 14:08
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `klas`
--
CREATE DATABASE IF NOT EXISTS `fotosjaak` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fotosjaak`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_english` text NOT NULL,
  `question_dutch` text NOT NULL,
  `answer_english` text NOT NULL,
  `answer_dutch` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Gegevens worden uitgevoerd voor tabel `faq`
--

INSERT INTO `faq` (`id`, `question_english`, `question_dutch`, `answer_english`, `answer_dutch`) VALUES
(1, 'Is this game difficult to play?', 'Is dit spel moeilijk om te spelen?', 'No it isnt its just soemthing to pass time with.', 'Nee het is juist iets om je tijd mee door te kunnen brengen.'),
(2, 'When is the game finished?', 'Waneer is het spel afgelopen?', 'Its finished after you beat the score!\r\nBut you can always play it to kill some time.', 'Het is klaar waneer je de hoogste scoren hebt gehaalt.'),
(3, 'Can you turn off the music, thats playing in the background?', 'Kan je de muziek stoppen, da tin de achtergrond afspeelt?', 'Yes, you can by going to the settings.', 'Ja, dat is mogenlijk door naar de settings te gaan.'),
(4, 'Is there a full version of the game?', 'Is er een voledige versie van de game?', 'No, its still beeing development.', 'Nee, het is nog in ontwikkeling.'),
(5, 'Is the screenshot below the tekst ont he left really from the game?', 'Is de screenshot onder de tekst aan de linkerkant echt van de game?', 'Yes, it was made while the game was being played.', 'Ja, het was gemaakt tijdens het spelen van de game.'),
(6, 'Is there a way to get the origional project so that I can work from it?', 'Is er een manier om het orginele project te krijgen, om er verder aan kunnen werken?', 'Yes, but you have to contact the maken and give propper credit.', 'Ja, maar je moet contact opzoeken met de maken en de naam erbij noemen waneer jij zelf jou versie ervan uitbrengt.'),
(7, 'Where can I find the Controls? they aren in the settings.', 'Waar kan ik de besturing vinden voor de game? ze staan niet in de settings.', 'They are next to the download of the game, the vlags point out in which language the manuals are.', 'Ze zijn naast de Download knop van de game, elke vlag laat zien in welke taal de instructies zijn.'),
(8, 'How can i contact the maker?', 'Hoe kan ik in contact komen met de maker?', 'Click on "contact" on the site and you will see his information.', 'klik op "contact" op de site om zijn contact gegevens te bekijken.'),
(9, 'How do i instal the game?', 'Hoe installeer ik het spel?', 'You open the rar file, execute the setup file andjust follow the steps then youre going to be oke.', 'Je opent het rar bestand en runt het setup bestand daarna is het gewoon de stappen volgen.'),
(10, 'Is this game based of another one?', 'Is deze game afgeleid van een andere game?', 'No, it may look like one of the simple games made in gamemaker but its completely different', 'Nee, het zou opzich kunnen lijken op een simpele game in gamemaker maar het is een totaal andere game');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `infix` varchar(20) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `digit` int(5) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `postalcode` varchar(7) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `bstate` varchar(33) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `userrole` enum('admin','root','customer') NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `pass` (`pass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `infix`, `surname`, `street`, `digit`, `place`, `postalcode`, `gender`, `dob`, `mail`, `bstate`, `pass`, `userrole`) VALUES
(78, 'Amin', '', 'Razzak', 'sibogastraat', 29, 'Amsterdam', '1094sl', 'false', '2013-11-02', 'amin.hybrid77@gmail.com', 'alone', 'poep', 'admin'),
(79, 'Amin', '', 'Razzak', 'sibogastraat', 29, 'Amsterdam', '1094sl', 'male', '0000-00-00', 'amin_razzak@hotmail.com', 'widow', 'razzak', 'customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
