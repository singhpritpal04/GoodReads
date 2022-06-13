-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 07:48 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_goodreads`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `contact` bigint(10) NOT NULL,
  `usertype` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`, `contact`, `usertype`) VALUES
('admin@yahoo.com', '123', 'John Doe', 1234567898, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorid` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mobile` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `address` text COLLATE latin1_general_ci NOT NULL,
  `photo` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `publishwork` text COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorid`, `fullname`, `email`, `mobile`, `address`, `photo`, `description`, `password`, `publishwork`, `status`) VALUES
(1, 'J K Rowling', 'author@yahoo.com', '9646848496', 'address123', 'userphoto/Baby.jpg', 'Fiction Writer', '123', 'work1', 'active'),
(2, 'Paulo Coelho', 'pauloc1297@gmail.com', '9646848497', 'address2', 'userphoto/baby_bride[2].jpg', 'description', '12345', 'works', 'active'),
(3, 'Agatha Christie', 'agatha12@gmail.com', '9646848498', 'address3', 'userphoto/ASLEEP.JPG', 'description', '123', 'work1', 'active'),
(4, 'charles Dickens', 'charlesd123@gmail.com', '9646848498', 'address4', 'userphoto/Baby1.jpg', 'description', '123', 'workkk', 'active'),
(5, 'navpreet', 'ps230093@gmail.com', '8989898989', 'address5', 'userphoto/BABY5.JPG', 'description', '123', 'work', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billid` int(11) NOT NULL,
  `date` date NOT NULL,
  `useremail` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `grandtotal` int(10) NOT NULL,
  `paymentmode` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billdetail`
--

CREATE TABLE `billdetail` (
  `billdetailid` int(11) NOT NULL,
  `billid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `discount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `title` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL,
  `edition` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `e_edition` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `genre` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `coverphoto` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `discount` int(10) NOT NULL,
  `category` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `authorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `title`, `description`, `edition`, `price`, `e_edition`, `genre`, `coverphoto`, `discount`, `category`, `authorid`) VALUES
(2, 'Harry Potter and the Philospher\'s Stone', 'The plot follows Harry Potter, a young wizard who discovers his magical heritage on his eleventh birthday, when he receives a letter of acceptance to the Hogwarts School of Witchcraft and Wizardry. Harry makes close friends and a few enemies during his first year at the school, and with the help of his friends, Harry faces an attempted comeback by the dark wizard Lord Voldemort, who killed his parents, but failed to kill Harry.', 2012, 750, 'bookpdf/Book 1 - The Philosophers Stone.pdf', 'Fantasy,Adventure', 'bookcover/Book 1 hp.jpeg', 25, 'Sci-fi&Fiction', 1),
(3, 'Harry Potter and the Chamber of Secrets', '.Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school corridors warn that the Chamber of Secrets has been opened and that the heir of Slytherin would kill all pupils who do not come from all-magical families. These threats are found after attacks which leave residents of the school petrified (frozen like stone). Throughout the year, Harry and his friends Ron and Hermione investigate the attacks.', 2010, 750, 'bookpdf/Book 2 - The Chamber of Secrets.pdf', 'Fantasy,Adventure', 'bookcover/book 2 hp.jpeg', 50, 'Sci-fi&Fiction', 1),
(4, 'Harry Potter and the Prisoner of Azkaban', 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban who they believe is one of Lord Voldemort old allies', 2012, 850, 'bookpdf/Book 3 - The Prisoner of Azkaban.pdf', 'Fantasy,Adventure', 'bookcover/book 3 hp.jpeg', 50, 'Sci-fi&Fiction', 1),
(5, 'Harry Potter and the Goblet of Fire', 'Harry Potter and the Goblet of Fire is a fantasy book written by British author J. K. Rowling and the fourth novel in the Harry Potter series. It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry and the mystery surrounding the entry of Harrys name into the Triwizard Tournament, in which he is forced to compete.', 2012, 900, 'bookpdf/Book 4 - The Goblet of Fire.pdf', 'Fantasy,Adventure', 'bookcover/book4 hp.jpeg', 10, 'Sci-fi&Fiction', 1),
(6, 'Harry Potter and the Order of the Phoenix', 'Harry Potter and the Order of the Phoenix is a fantasy novel written by J. K. Rowling and the fifth novel in the Harry Potter series. It follows Harry Potter struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort, O.W.L. exams, and an obstructive Ministry of Magic. ', 2012, 950, 'bookpdf/Book 5 - The Order of the Phoenix.pdf', 'Fantasy,Adventure', 'bookcover/book5hp.jpeg', 50, 'Sci-fi&Fiction', 1),
(7, 'Harry Potter and the Half Blood Prince', 'Harry Potter and the Half-Blood Prince is a fantasy novel written by British author J. K. Rowling and the sixth and penultimate novel in the Harry Potter series. Set during protagonist Harry Potter sixth year at Hogwarts, the novel explores the past of Harry nemesis, Lord Voldemort, and Harry preparations for the final battle against Voldemort alongside his headmaster and mentor Albus Dumbledore.', 2012, 800, 'bookpdf/Book 6 - The Half Blood Prince.pdf', 'Fantasy,Adventure', 'bookcover/book 6 hp.jpeg', 10, 'Sci-fi&Fiction', 1),
(8, 'Harry Potter and the Deathly Hallows', 'Following Dumbledore death, Voldemort consolidates his support and power, including covert control of the Ministry of Magic, while Harry is about to turn seventeen, losing the protection of his home.', 2012, 900, 'bookpdf/Book 7 - The Deathly Hallows.pdf', 'Fantasy,Adventure', 'bookcover/book7 hp.jpeg', 50, 'Sci-fi&Fiction', 1),
(9, 'Brida', 'It is the story of a beautiful young Irish girl and her quest for knowledge. On her journey she meets a wise man who teaches her to overcome fear and a woman who teaches her how to dance to the hidden music of the world. They see in her a gift, but must let her make her own voyage of discovery. As Brida seeks her destiny, she struggles to find a balance between her relationships and her desire to transform herself. The story is neatly woven around the ancient belief of witchcraft and related to the present world in an interesting way.', 2016, 500, 'bookpdf/brida_paulo_chaulo.pdf', 'Motivation', 'bookcover/brida.jpg', 50, 'Motivation&Inspiration', 2),
(10, 'By the River Piedra I sat down and wept', 'Rarely does adolescent love reach its full potential, but what happens when two young lovers reunite after eleven years? Time has transformed Pilar into a strong and independent woman, while her devoted childhood friend has grown into a handsome and charismatic spiritual leader. She has learned well how to bury her feelings . . . and he has turned to religion as a refuge from his raging inner conflicts.\r\nNow they are together once again, embarking on a journey fraught with difficulties, as long-buried demons of blame and resentment resurface after more than a decade. But in a small village in the French Pyrenees, by the waters of the River Piedra, a most special relationship will be reexamined in the dazzling light of some of life biggest questions.', 2018, 350, 'bookpdf/paulo_coelho_-_by_the_river_piedra_i_sat_down_and_wept.pdf', 'Motivation', 'bookcover/by the river.jpg', 10, 'Motivation&Inspiration', 2),
(11, 'The Zahir', 'Zahir is a person or an object that has the power to create an obsession in everyone who sees it, so that the affected person perceives less and less of reality and more and more of the Zahir, at first only while asleep, then at all times.', 2017, 450, 'bookpdf/the_zahir_by_paulo_coelho.pdf', 'Motivation', 'bookcover/zahir.jpg', 50, 'Motivation&Inspiration', 2),
(12, 'Veronika', 'Veronika Decides to Die is a novel by Paulo Coelho. It tells the story of 24-year-old Slovenian Veronika, who appears to have everything in life going for her, but who decides to kill herself. This book is partly based on Coelho experience in various mental institutions (see the biography Confessions of A Pilgrim by Juan Arias). It is based around the subject of madness. The gist of the message is that collective madness is called sanity.\r\n', 2014, 500, 'bookpdf/veronika_decides_to_die_by_paulo_coelho.pdf', 'Motivation', 'bookcover/Veronika.jpg', 10, 'Motivation&Inspiration', 2),
(13, 'Third Girl', 'When a young woman visits Hercule Poirot to seek his help regarding a murder that she believes herself to have committed, she is appalled by his age and leaves with her story untold. Poirot is keen to track her down â€¦ but who is she, and what, if anything, has she done?', 2015, 550, 'bookpdf/agatha_christie_-_third_girl.pdf', 'Murder Mystery', 'bookcover/third girl.jpg', 50, 'Mystery', 3),
(14, 'The Mysterious Mr.Quin', 'Each chapter or story involves a separate mystery that is solved through the interaction between the characters of Mr Satterthwaite, a socialite, and the eponymous Mr Quin who appears almost magically at the most opportune moments and disappears just as mysteriously. Satterthwaite is a small, observant man who is able to wrap up each mystery through the careful prodding and apposite questions of Quin, who serves as a catalyst every time the men meet.', 2012, 700, 'bookpdf/agatha_christie_-_mysterious_mr_quin.pdf', 'Crime,Thriller', 'bookcover/mysterious mr.quin.jpg', 20, 'Mystery', 3),
(15, 'And then there were none', 'And then there were none...It is a detective novel in which ten people, who have previously been complicit in the deaths of other but escaped unnoticed nor punished are tricked into coming into coming onto an island. Although the guests are the only people on the island, each is murdered one by one, in a manner paralleling, inexorably and sometimes grotesquely', 2012, 450, 'bookpdf/agatha_christie_-_and_then_there_were_none_-_542-2342851.pdf', 'Murder Mystery', 'bookcover/and then.jpg', 10, 'Mystery', 3),
(16, 'A Christmas Carol', 'The story tells of sour and stingy Ebenzer Scrooge ideological, ethical, and emotional transformation after the supernatural visits of Jacob Marley and the Ghosts of Christmas Past, Present, and Yet to Come. The novella met with instant success and critical acclaim.', 2010, 500, 'bookpdf/a_christmas_carol.pdf', 'Classic', 'bookcover/christmas carol.jpg', 50, 'Language&Literature', 4),
(17, 'A Tale of Two Cities', 'The novel tells the story of the French Doctor Manette, his 18-year-long imprisonment in the Bastille in Paris and his release to life in London with his daughter Lucie, whom he had never met; Lucie marriage and the collision between her beloved husband and the people who caused her father imprisonment; and Monsieur and Madame Defarge, sellers of wine in a poor suburb of Paris. The story is set against the conditions that led up to the French Revolution and the Reign of Terror. ', 2000, 200, 'bookpdf/a-tale-of-two-cities.pdf', 'Classic', 'bookcover/tale.jpg', 5, 'Language&Literature', 4),
(18, 'The Count of Monte Christo', 'The story takes place in France, Italy, and islands in the Mediterranean during the historical events of 1815â€“1839: the era of the Bourbon Restoration through the reign of Louis-Philippe of France. It begins just before the Hundred Days period (when Napoleon returned to power after his exile). The historical setting is a fundamental element of the book, an adventure story primarily concerned with themes of hope, justice, vengeance, mercy, and forgiveness. It centres on a man who is wrongfully imprisoned, escapes from jail, acquires a fortune, and sets about exacting revenge on those responsible for his imprisonment. His plans have devastating consequences for both the innocent and the guilty. ', 2001, 300, 'bookpdf/The Count of Monte Cristo.pdf', 'Classic', 'bookcover/count.jpg', 30, 'Language&Literature', 5),
(19, 'The Three Musketeers', 'The Three Musketeers is primarily a historical and adventure novel. However, Dumas also frequently works into the plot various injustices, abuses, and absurdities of the old regime, giving the novel an additional political aspect at a time when the debate in France between republicans and monarchists was still fierce. The story was first serialised from March to July 1844, during the July Monarchy, four years before the French Revolution of 1848 violently established the Second Republic. The author father, Thomas-Alexandre Dumas, had been a well-known General in France Republican army during the French Revolutionary Wars.', 2001, 500, 'bookpdf/the-three-musketeers.pdf', 'History,Adventure', 'bookcover/three musketeers.jpg', 50, 'Language&Literature', 5),
(20, 'networking', 'information of networking of computers', 2018, 550, 'bookpdf/agatha_christie_-_and_then_there_were_none_-_542-2342851.pdf', 'asdsaf', 'bookcover/nut1.png', 0, 'Computer', 4),
(21, 'A Christmas Carol', 'I have endeavoured in this Ghostly little book, to raise the Ghost of an Idea, which shall not put my readers out of humour with themselves, with each other, with the season, or with me. May it haunt their houses pleasantly, and no one wish to lay it.  \r\nTheir faithful Friend and Servant, C. D.  December, 1843.', 2018, 550, 'bookpdf/a_christmas_carol.pdf', 'mystery', 'bookcover/a christmas carol.jpg', 0, 'Mystery', 1),
(27, 'A Christmas Carol', 'I have endeavoured in this Ghostly little book, to raise the Ghost of an Idea, which shall not put my readers out of humour with themselves, with each other, with the season, or with me. May it haunt their houses pleasantly, and no one wish to lay it.  \r\nTheir faithful Friend and Servant, C. D.  December, 1843.', 2018, 550, 'bookpdf/a_christmas_carol.pdf', 'mystery', 'bookcover/a christmas carol.jpg', 10, 'Mystery', 1),
(28, 'A Christmas Carol', 'I have endeavoured in this Ghostly little book, to raise the Ghost of an Idea, which shall not put my readers out of humour with themselves, with each other, with the season, or with me. May it haunt their houses pleasantly, and no one wish to lay it.  \r\nTheir faithful Friend and Servant, C. D.  December, 1843.', 2018, 550, 'bookpdf/a_christmas_carol.pdf', 'mystery', 'bookcover/a christmas carol.jpg', 10, 'Mystery', 1),
(29, 'And Then There Were None', 'Then There Were None tells the story of ten people who were lured onto Indian Island by a man named U. N. Owen. Once all ten people were in the house on the island, the story picks up when Anthony Marston is poisoned.', 2018, 600, 'bookpdf/agatha_christie_-_and_then_there_were_none_-_542-2342851.pdf', 'mystery', 'bookcover/download.jpg', 0, 'Mystery', 1),
(30, 'Mysterious mr. Quin', 'The Mysterious Mr Quin. ... Each chapter or story involves a separate mystery that is solved through the interaction between the characters of Mr Satterthwaite, a socialite, and the eponymous Mr Quin who appears almost magically at the most opportune moments and disappears just as mysteriously.', 2017, 475, 'bookpdf/agatha_christie_-_mysterious_mr_quin.pdf', 'mystery', 'bookcover/download (1).jpg', 0, 'Mystery', 2),
(31, 'A Third Girl', 'Norma is the third girl in her flat in the fashion of young women advertising for a third girl to share the rent. ... Mrs Oliver learns that a woman in the apartment building had recently died by falling from her window', 2019, 499, 'bookpdf/agatha_christie_-_third_girl.pdf', 'mystery', 'bookcover/download (2).jpg', 0, 'Mystery', 2),
(32, 'A tale of two cities', 'Image result for a tale of two cities descriptionwww.goodreads.com\r\nA Tale of Two Cities (1859) is a historical novel by Charles Dickens, set in London and Paris before and during the French Revolution', 2019, 420, 'bookpdf/a-tale-of-two-cities.pdf', 'motivation', 'bookcover/download (3).jpg', 10, 'Motivation&Inspiration', 2),
(33, 'A Kite Runner', 'Amir, a well-to-do Pashtun boy, and Hassan, a Hazara who is the son of Ali, Amir\'s father\'s servant, spend their days kite fighting in the hitherto peaceful city of Kabul. Hassan is a successful \"kite runner\" for Amir; he knows where the kite will land without watching it.', 2019, 700, 'bookpdf/Kite runner.pdf', 'literature', 'bookcover/download (4).jpg', 20, 'Language&Literature', 3),
(34, 'Jane Eyre', 'Jane Eyre is the story of a young, orphaned girl (shockingly, she\'s named Jane Eyre) who lives with her aunt and cousins, the Reeds, at Gateshead Hall. Like all nineteenth-century orphans, her situation pretty much sucks. Mrs. Reed hates Jane and allows her son John to torment the girl.', 2018, 670, 'bookpdf/Jane eyre.pdf', 'fiction', 'bookcover/8ae158f4d10306ec661cabe24adf597f.jpg', 0, 'Sci-fi&Fiction', 3),
(35, 'Give and Take', 'â€œOne of the great secrets of life is that those who win most are often those who give most. In this elegant and lucid book, filled with compelling evidence and evocative examples, Adam Grant shows us why and how this is so. Highly recommended!â€ ', 2018, 700, 'bookpdf/give-and-take.pdf', 'motivation', 'bookcover/download1.jpg', 20, 'Motivation&Inspiration', 5),
(36, '1001 ways to be romantic', 'Packed with unique suggestions, easy gestures, and thoughtful gift ideas, 1001 Ways to Be Romantic is a romance kit \"worth memorizing\" (Boston Herald). It\'s a must-have for anyone, in any relationship (whether dating, engaged, or married for 50+ years!) who wants to spark some more love in their lives.', 2019, 660, 'bookpdf/e_1001-ways-to-be-romantic.pdf', 'romantic', 'bookcover/romantic.jpg', 30, 'Romance', 5),
(37, 'Romantic Days,Romantic Nights', 'This is a work of fiction. The characters, incidents and dialogues in this book are of the author\'s\r\nimagination and are not to be construed as real. Any resemblance to actual events or persons, living or\r\ndead, is completely coincidental. \r\n', 2019, 799, 'bookpdf/Romantic Days, Romantic Nights ( PDFDrive.com ) (2).pdf', 'romantic', 'bookcover/romantic days.jpg', 0, 'Romance', 5),
(38, 'mother teresa', 'Writing about Mother Teresa can be both a frustrating and challenging\r\nexercise. On the surface, she appears almost one-dimensional, living a\r\nsimple life devoted to her calling and her faith. ', 2019, 200, 'bookpdf/Mother Teresa - A Biography ( PDFDrive.com ).pdf', 'biography', 'bookcover/mother teresa.jpg', 5, 'Biographies', 5),
(39, 'swami vivekanand', '\r\nSwami Vivekananda\'s inspiring personality was well known both in India and in\r\nAmerica during the last decade of the nineteenth century and the first decade of the\r\ntwentieth', 2019, 800, 'bookpdf/BiographybyNikhilananda.pdf', 'biographies', 'bookcover/swami.jpg', 15, 'Biographies', 5),
(40, 'Computer Hacking', 'A beginners guide to computer hacking, how to\r\nhack, internet skills, hacking techniques, and more!', 2018, 330, 'bookpdf/Computer Hacking_ A beginners guide to computer hacking  ( PDFDrive.com ).pdf', 'computer', 'bookcover/comp.jpg', 0, 'Computer', 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryname` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `description` text COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryname`, `description`) VALUES
('Biographies', 'These books trace the real life stories of eminent personalities or extraordinary events in lives of ordinary people.'),
('Computer', 'NA'),
('Language&Literature', 'Learn new languages with latest descriptive books'),
('Motivation&Inspiration', 'These books will fill your mind with hope and optimism.'),
('Mystery', 'These thrilling stories and murder mysteries will not let you put the book down until it ends.'),
('Romance', 'Stories of love and sacrifice.'),
('Sci-fi&Fiction', 'Enter into an unknown world,learn about new characters far better than those alive,these books will open up a whole new world for you.');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `ratingid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `useremail` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `shipping_address` text COLLATE latin1_general_ci NOT NULL,
  `status` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_email`, `password`, `Name`, `mobile`, `shipping_address`, `status`) VALUES
('user@yahoo.com', '123', 'Rock', 1234567898, '10, Lawrence Road, Asr\r\n', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`),
  ADD KEY `useremail` (`useremail`);

--
-- Indexes for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`billdetailid`),
  ADD KEY `billid` (`billid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `category` (`category`),
  ADD KEY `authorid` (`authorid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryname`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingid`),
  ADD KEY `useremail` (`useremail`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `billdetailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`useremail`) REFERENCES `user` (`user_email`);

--
-- Constraints for table `billdetail`
--
ALTER TABLE `billdetail`
  ADD CONSTRAINT `billdetail_ibfk_1` FOREIGN KEY (`billid`) REFERENCES `bill` (`billid`),
  ADD CONSTRAINT `billdetail_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`);

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`categoryname`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`authorid`) REFERENCES `author` (`authorid`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`useremail`) REFERENCES `user` (`user_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
