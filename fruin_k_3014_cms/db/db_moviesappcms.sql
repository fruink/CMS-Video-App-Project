-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2018 at 06:37 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moviesappcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

DROP TABLE IF EXISTS `tbl_genre`;
CREATE TABLE IF NOT EXISTS `tbl_genre` (
  `genre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(65) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Horror'),
(3, 'Comedy'),
(4, 'Drama'),
(5, 'Family'),
(6, 'Adventure'),
(7, 'Animated'),
(8, 'Crime'),
(9, 'Thriller'),
(10, 'Science Fiction'),
(11, 'Fantasy'),
(12, 'Historical'),
(13, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

DROP TABLE IF EXISTS `tbl_movies`;
CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `movie_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_title` varchar(130) NOT NULL,
  `movie_cover` varchar(65) NOT NULL,
  `movie_runtime` varchar(35) NOT NULL,
  `movie_trailer` varchar(65) NOT NULL,
  `movie_year` varchar(10) NOT NULL,
  `movie_desc` text NOT NULL,
  `movie_score` mediumint(9) NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movie_id`, `movie_title`, `movie_cover`, `movie_runtime`, `movie_trailer`, `movie_year`, `movie_desc`, `movie_score`) VALUES
(1, 'Coyote Ugly', 'coyote_ugly_cover.jpg', '1h 47min', 'coyote_trailer.mp4', '2000', 'Graced with a velvet voice, 21-year-old Violet Sanford heads to New York to pursue her dream of becoming a songwriter only to find her aspirations sidelined by the accolades and notoriety she receives at her \"day\" job as a barmaid at Coyote Ugly. The \"Coyotes\" as they are affectionately called tantalize customers and the media alike with their outrageous antics, making Coyote Ugly the watering hole for guys on the prowl.', 91),
(2, 'Insidious: The Last Key', 'Insidious-the_last_key_cover.jpg', '1h 43min', 'insidious_trailer.mp4', '2018', 'Brilliant parapsychologist Elise Rainier receives a disturbing phone call from a man who claims that his house is haunted. Even more disturbing is the address -- 413 Apple Tree Lane in Five Keys, N.M. -- the home where Elise grew up as a child. Accompanied by her two investigative partners, Rainier travels to Five Keys to confront and destroy her greatest fear -- the demon that she accidentally set free years earlier.', 84),
(3, 'Wrong Turn: Dead or Not', 'wrong_turn_dead_or_not_cover.jpg', '1h 25min', 'wrong_turn_trailer.mp4', '2003', 'Friends Jessie (Eliza Dushku) and Carly (Emmanuelle Chriqui) are traveling with pals Scott (Jeremy Sisto), Evan (Kevin Zegers) and Francine (Lindy Booth) when they have car trouble in West Virginia. Moments later, motorist Chris (Desmond Harrington) crashes into their disabled vehicle. Stranded, the friends discover that they\'re being stalked by a horde of backwoods cannibals. The woodsmen are hungry and fierce, and they\'ll be eating well unless Jessie and pals can outsmart them.', 75),
(4, 'Taken', 'taken_cover.jpg', '1h 33min', 'taken_trailer.mp4', '2008', 'Bryan Mills (Liam Neeson), a former government operative, is trying to reconnect with his daughter, Kim (Maggie Grace). Then his worst fears become real when sex slavers abduct Kim and her friend shortly after they arrive in Paris for vacation. With just four days until Kim will be auctioned off, Bryan must call on every skill he learned in black ops to rescue her.', 56),
(5, 'National Treasure', 'national_treasure_cover.jpg', '2h 11min', 'national_treasure_trailer.mp4', '2004', 'Historian and code-breaker Ben Gates (Nicolas Cage) has been searching his whole life for a rumored treasure dating back to the creation of the United States. Joining an expedition led by fellow treasure hunter Ian Howe (Sean Bean), Gates finds an ice-locked Colonial ship in the Arctic Circle that contains a clue linking the treasure to the Declaration of Independence. But when Howe betrays him, Gates has to race to get to the document ahead of his so-called colleague.', 97),
(7, 'Pride and Prejudice', 'pride_and_prejudice_cover.jpg', '2h 15min', 'pride_and_prejuidice_trailer.mp4', '2005', 'In this adaptation of Jane Austen\'s beloved novel, Elizabeth Bennet (Keira Knightley) lives with her mother, father and sisters in the English countryside. As the eldest, she faces mounting pressure from her parents to marry. When the outspoken Elizabeth is introduced to the handsome and upper-class Mr. Darcy (Matthew MacFadyen), sparks fly. Although there is obvious chemistry between the two, Darcy\'s overly reserved nature threatens the fledgling relationship.', 89),
(8, 'Marine', 'marine_cover.jpg', '2h', 'marine_trailer.mp4', '2006', 'A discharged soldier (John Cena) returns home from Iraq and finds that his wife (Kelly Carlson) has been kidnapped by the gang of a murderous jewel thief (Robert Patrick). Soldier John Triton must use all his military skills to rescue his wife from her ruthless captors.', 76),
(9, '12 Rounds', '12_rounds_cover.jpg', '1h 49min', '12_rounds_trailer.mp4', '2009', 'When New Orleans cop Danny Fisher (John Cena) prevents a brilliant thief from successfully carrying out his latest heist, the thief\'s girlfriend is accidentally killed. Hungry for revenge, the criminal mastermind breaks out of prison and kidnaps Danny\'s fiancee. To save her, Danny must successfully navigate his way through an elaborate series of tasks and puzzles, or else watch the love of his life die.', 91),
(10, 'Beetlejuice', 'beetlejuice.jpg', '93min', 'beetlejuice.mp4', '1988', 'When a recently-deceased ghost couple find their now-vacant home invaded by an obnoxious family, they hire a sleazy ghost who gets rid of humans to help them.', 80),
(11, 'Legendary', 'legendary_cover.jpg', '1h 47min', 'legendary_trailer.mp4', '2010', 'Hoping that his estranged brother (John Cena) will train him, a scrawny teenager (Devon Graye) joins his high-school wrestling team.', 50),
(12, 'Scooby Doo and WrestleMania', 'scoobydoo_wrestlemania_cover.jpg', '1h 24min', 'scoobydoo_wrestle_trailer.mp4', '2014', 'Shaggy and Scooby win tickets to WrestleMania, and the entire gang heads to WWE City to attend. When a ghostly bear appears and threatens to ruin the show, the team works with WWE superstars to solve the mystery.', 47),
(13, 'Flintstone and Stone Age Smackdown', 'flintstone_and_stone_age_smackdown_cover.jpg', '51min', 'flintstones_trailer.mp4', '2015', 'Fred Flintstone (Jeff Bergman) and friends meet John Cenastone (John Cena) and other famous wrestlers. They come together and fight on Tuesday night WWE Smackdown. Go John Cena!', 52),
(14, 'Clueless', 'clueless_cover.jpg', '1h 40min', 'clueless.mp4', '1995', 'Shallow, rich and socially successful Cher (Alicia Silverstone) is at the top of her Beverly Hills high school\'s pecking scale. Seeing herself as a matchmaker, Cher first coaxes two teachers into dating each other. Emboldened by her success, she decides to give hopelessly klutzy new student Tai (Brittany Murphy) a makeover. When Tai becomes more popular than she is, Cher realizes that her disapproving ex-stepbrother (Paul Rudd) was right about how misguided she was -- and falls for him.', 64),
(15, 'Bridget Jones Diary', 'bridget_jones_diary_cover.jpg', '1h 37min', 'bridget_jones.mp4', '2001', 'At the start of the New Year, 32-year-old Bridget (Renee Zellweger) decides it\'s time to take control of her life -- and start keeping a diary. Now, the most provocative, erotic and hysterical book on her bedside table is the one she\'s writing. With a taste for adventure, and an opinion on every subject - from exercise to men to food to sex and everything in between - she\'s turning the page on a whole new life.', 78),
(16, 'Wedding Crashers', 'wedding_crashers_cover.jpg', '2h 8min', 'wedding_crashers.mp4', '2005', 'Jeremy (Vince Vaughn) and John (Owen Wilson) are divorce mediators who spend their free time crashing wedding receptions. For the irrepressible duo, there are few better ways to drink for free and bed vulnerable women. So when Secretary of the Treasury William Cleary (Christopher Walken) announces the wedding of his daughter, the pair make it their mission to crash the high-profile event. But their game hits a bump in the road when John locks eyes with bridesmaid Claire (Rachel McAdams).', 67),
(17, 'Blockers', 'blockers_cover.jpg', '1h 42min', 'blockers.mp4', '2018', 'Julie, Kayla and Sam are three high school seniors who make a pact to lose their virginity on prom night. Lisa, Mitchell and Hunter are three overprotective parents who flip out when they find out about their daughters\' plans. They soon join forces for a wild and chaotic quest to stop the girls from sealing the deal -- no matter what the cost.', 83),
(18, 'Mean Girls', 'mean_girls_cover.jpg', '1h 37min', 'mean_girls.mp4', '2004', 'Teenage Cady Heron (Lindsay Lohan) was educated in Africa by her scientist parents. When her family moves to the suburbs of Illinois, Cady finally gets to experience public school and gets a quick primer on the cruel, tacit laws of popularity that divide her fellow students into tightly knit cliques. She unwittingly finds herself in the good graces of an elite group of cool students dubbed \"the Plastics,\" but Cady soon realizes how her shallow group of new friends earned this nickname.', 35),
(19, 'Jurassic Park', 'jurassic_park_cover.jpg', '2h 7min', 'Jurassic_park.mp4', '1993', 'In Steven Spielberg\'s massive blockbuster, paleontologists Alan Grant (Sam Neill) and Ellie Sattler (Laura Dern) and mathematician Ian Malcolm (Jeff Goldblum) are among a select group chosen to tour an island theme park populated by dinosaurs created from prehistoric DNA. While the park\'s mastermind, billionaire John Hammond (Richard Attenborough), assures everyone that the facility is safe, they find out otherwise when various ferocious predators break free and go on the hunt.', 88),
(20, 'Avatar', 'avatar_cover.jpg', '2h 42min', 'avatar.mp4', '2009', 'On the lush alien world of Pandora live the Na\'vi, beings who appear primitive but are highly evolved. Because the planet\'s environment is poisonous, human/Na\'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na\'vi woman (Zoe Saldana). As a bond with her grows, he is drawn into a battle for the survival of her world.', 89),
(21, 'Fantastic Beasts', 'fantastic_beasts_cover.jpg', '2h 13min', 'fantastic_beasts.mp4', '2016', 'The year is 1926, and Newt Scamander (Eddie Redmayne) has just completed a global excursion to find and document an extraordinary array of magical creatures. Arriving in New York for a brief stopover, he might have come and gone without incident, were it not for a No-Maj (American for Muggle) named Jacob, a misplaced magical case, and the escape of some of Newt\'s fantastic beasts, which could spell trouble for both the wizarding and No-Maj worlds.', 79),
(22, 'Lion King', 'lion_king_cover.jpg', '1h 29min', 'lion_king.mp4', '1994', 'This Disney animated feature follows the adventures of the young lion Simba (Zoe Leader), the heir of his father, Mufasa (Ernie Sabella). Simba\'s wicked uncle, Scar (Rowan Atkinson), plots to usurp Mufasa\'s throne by luring father and son into a stampede of wildebeests. But Simba escapes, and only Mufasa is killed. Simba returns as an adult (Jeremy Irons) to take back his homeland from Scar with the help of his friends Timon (Jonathan Taylor Thomas) and Pumbaa (Cheech Marin).', 49),
(23, 'Beauty and the Beast', 'beauty_and_beast_cover.jpg', '1h 32min', 'beauty_and_beast.mp4', '1991', 'An arrogant young prince (Robby Benson) and his castle\'s servants fall under the spell of a wicked enchantress, who turns him into the hideous Beast until he learns to love and be loved in return. The spirited, headstrong village girl Belle (Paige O\'Hara) enters the Beast\'s castle after he imprisons her father Maurice (Rex Everhart). With the help of his enchanted servants, including the matronly Mrs. Potts (Angela Lansbury), Belle begins to draw the cold-hearted Beast out of his isolation.', 60),
(24, 'Monster', 'monster_cover.jpg', '1h 49min', 'monster.mp4', '2003', 'Shortly after moving to Florida, longtime prostitute Aileen Wuornos (Charlize Theron) meets young and reserved Selby Wall (Christina Ricci) and a romance blossoms. When a john (Lee Tergesen) attempts to brutalize Aileen, she kills him and resolves to give up prostitution. But supporting herself and her new girlfriend through legitimate means proves extremely difficult, and she soon falls back on old ways. More johns die, and Selby can\'t help but think her new friend is responsible.', 40),
(25, 'Harry Potter', 'harry_potter_cover.jpg', '2h 39min', 'harry_potter.mp4', '2001', 'Adaptation of the first of J.K. Rowling\'s popular children\'s novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth about his parents\' mysterious deaths.', 94);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mov_genre`
--

DROP TABLE IF EXISTS `tbl_mov_genre`;
CREATE TABLE IF NOT EXISTS `tbl_mov_genre` (
  `movgenre_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `movie_id` mediumint(9) NOT NULL,
  `genre_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`movgenre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mov_genre`
--

INSERT INTO `tbl_mov_genre` (`movgenre_id`, `movie_id`, `genre_id`) VALUES
(2, 1, 4),
(3, 2, 9),
(4, 3, 2),
(5, 2, 8),
(6, 2, 2),
(97, 23, 5),
(9, 3, 8),
(10, 3, 9),
(11, 5, 1),
(12, 5, 4),
(13, 5, 6),
(14, 6, 3),
(15, 6, 4),
(16, 6, 6),
(17, 6, 8),
(18, 7, 4),
(19, 8, 1),
(20, 8, 4),
(21, 8, 6),
(22, 8, 8),
(23, 13, 3),
(94, 8, 9),
(27, 16, 4),
(29, 17, 4),
(31, 19, 3),
(32, 19, 4),
(34, 21, 3),
(36, 22, 3),
(37, 22, 4),
(38, 22, 7),
(39, 23, 10),
(40, 24, 4),
(41, 25, 3),
(43, 28, 3),
(95, 21, 5),
(45, 37, 2),
(46, 9, 1),
(47, 9, 6),
(48, 9, 8),
(49, 9, 9),
(50, 10, 3),
(51, 10, 4),
(52, 10, 5),
(53, 11, 4),
(54, 12, 3),
(55, 12, 5),
(56, 12, 7),
(57, 13, 5),
(58, 13, 7),
(59, 14, 3),
(60, 14, 4),
(61, 15, 3),
(62, 15, 4),
(63, 16, 3),
(64, 16, 4),
(65, 17, 4),
(66, 18, 4),
(67, 19, 11),
(68, 19, 10),
(69, 19, 1),
(70, 19, 6),
(96, 22, 5),
(72, 20, 4),
(73, 20, 6),
(74, 20, 10),
(75, 20, 11),
(76, 21, 11),
(77, 21, 6),
(78, 21, 10),
(79, 23, 7),
(80, 24, 1),
(81, 24, 8),
(82, 25, 11),
(83, 25, 10),
(84, 25, 4),
(85, 25, 5),
(86, 14, 13),
(87, 6, 13),
(89, 23, 13),
(90, 15, 13),
(91, 7, 13),
(92, 7, 12),
(93, 5, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

DROP TABLE IF EXISTS `tbl_reviews`;
CREATE TABLE IF NOT EXISTS `tbl_reviews` (
  `reviews_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `reviews_movie` varchar(65) NOT NULL,
  `reviews_text` text NOT NULL,
  `reviews_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reviews_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reviews`
--

INSERT INTO `tbl_reviews` (`reviews_id`, `reviews_movie`, `reviews_text`, `reviews_time`) VALUES
(1, '1', 'Coyote Ugly is a must see. It\'s filled with excitement, music, and following our dreams. The main character, Violet is an inspiration to anyone who wants to be a song writer and follow your dreams when you thought they would never come true.', '2018-04-12 02:53:37'),
(2, '2', 'Great Movie! The storyline is interesting and exciting that draws you in once you get past the first 10 minutes. ', '2018-04-12 02:53:37'),
(3, '3', 'Interesting and full of suspense. You will never look at being trapped in the woods the same way again after you watch wrong turn.', '2018-04-12 02:56:26'),
(4, '4', 'Careful for what you wish for, Paris may seem like the most beautiful and romantic city to visit, but you want to be careful who you meet. Filled with action and thrill as the movie progresses after the first 15 minutes.', '2018-04-12 02:56:26'),
(5, '7', 'Beautifully assembled movie. Jane Austen is a classic in literature and is a must see for anyone who loves romance and waiting for their prince to enter their lives. Watch out, you will fall in love with Mr. Darcy. ', '2018-04-12 02:58:41'),
(6, '10', 'Clever and insightful. Beatlejuice is a classic.', '2018-04-12 02:58:41'),
(7, '8', 'John Cena plays his role to perfection. The way he goes on and beyond to find his wife after she\'s been kidnapped is exciting and never a dull moment. Lots of action to be seen especially from WWE wrestler John Cena.', '2018-04-12 03:01:26'),
(8, '14', 'Cute and Sweet teen movie from the 90\'s. Cher is a beauty and clever along with her friends and how highschool seems so fun. I\'m sure everyone will agree that highschool in the 90\'s was the best. ', '2018-04-12 03:01:26'),
(9, '25', 'Spectacular and full of life and magic. Love the books and now love the movies. There\'s never a dull moment in this movie.', '2018-04-13 07:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_urating`
--

DROP TABLE IF EXISTS `tbl_urating`;
CREATE TABLE IF NOT EXISTS `tbl_urating` (
  `rating_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rating_num` mediumint(9) NOT NULL,
  `rating_movie` mediumint(9) NOT NULL,
  PRIMARY KEY (`rating_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_urating`
--

INSERT INTO `tbl_urating` (`rating_id`, `rating_num`, `rating_movie`) VALUES
(1, 4, 2),
(2, 5, 2),
(3, 3, 3),
(4, 5, 4),
(5, 1, 2),
(6, 0, 0),
(7, 4, 3),
(8, 5, 3),
(9, 5, 4),
(10, 3, 4),
(11, 5, 3),
(12, 5, 2),
(13, 5, 4),
(14, 4, 4),
(15, 4, 6),
(16, 4, 7),
(17, 5, 7),
(18, 5, 8),
(19, 5, 4),
(20, 4, 4),
(21, 5, 4),
(22, 0, 1),
(23, 0, 5),
(24, 1, 9),
(25, 1, 9),
(26, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(230) NOT NULL,
  `user_lname` varchar(230) NOT NULL,
  `user_name` varchar(230) NOT NULL,
  `user_pass` varchar(230) NOT NULL,
  `user_email` varchar(230) NOT NULL,
  `user_verify` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_pass`, `user_email`, `user_verify`) VALUES
(1, 'movie', 'app', 'mov', 'password', 'example@live.com', 'okay');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
