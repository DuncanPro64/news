-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 24, 2021 at 06:11 AM
-- Server version: 8.0.26
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vibes`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int NOT NULL AUTO_INCREMENT,
  `article_title` varchar(34) NOT NULL,
  `content` longtext NOT NULL,
  `time_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date DEFAULT NULL,
  `likes` int DEFAULT '0',
  `article_image` varchar(36) DEFAULT NULL,
  `category_id` int NOT NULL,
  `editor_id` varchar(30) NOT NULL,
  PRIMARY KEY (`article_id`),
  KEY `editor_category_fk` (`editor_id`),
  KEY `article_category_fk` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `content`, `date`, `likes`, `article_image`, `category_id`, `editor_id`) VALUES
(5, 'hello', 'content', '2021-07-14', 0, NULL, 1, 'oluochp6@gmail.com'),
(6, 'hello', 'content', '2021-07-14', 0, NULL, 1, 'oluochp6@gmail.com'),
(7, 'hello', 'content', '2021-07-14', 0, NULL, 1, 'oluochp6@gmail.com'),
(9, 'hello', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><font face=\"Times New Roman, serif\"><b>We are testing</b></font></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>', '2021-07-14', 0, NULL, 2, 'oluochp6@gmail.com'),
(10, 'test1', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><font face=\"Times New Roman, serif\"><b>We are testing</b></font></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>', NULL, 0, NULL, 1, 'oluochp6@gmail.com'),
(11, 'test1', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">THE GATHERING OF THE DISPERSED JEWS.<o:p></o:p></span></b></p><p class=\"MsoNormal\"><i style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 1rem;\">&nbsp;</i></p><p class=\"MsoNormal\"><i><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">â€œThe\r\nprince shall be one of themselves; their ruler shall come out from their midst;\r\nI will make him draw near, and he shall approach me, for who would dare of\r\nhimself to approach me?â€<o:p></o:p></span></i></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you shall be my people, and I will be your God. Behold\r\nthe storm of the Lord! Wrath has gone forth, a whirling tempest; it will burst\r\nupon the head of the wicked<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">The fierce anger of the Lord will not turn back until he has\r\nexecuted and accomplished the intentions of his mind. In the latter days, you\r\nwill understand this.\" Jeremiah 30:22-24<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">\"Behold a king will reign in righteousness and princes\r\nwill rule injustice. Each will be like a hiding place from the wind, a shelter\r\nfrom the storm, like streams of water, in a dry place, like the shade of a\r\ngreat rock in a weary land. Then the eye of those who see will not be closed,\r\nand the ears of those who hear will give attention, the heart of the hasty will\r\nunderstand and know, and the tongue of the stammer will hasten to speak\r\ndistinctly. The fool will no more be called noble, nor the scoundrel said to be\r\nhonorable.\" Isaiah 32:1-5<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">On that day the Lord of hosts will be a crown of glory, and\r\na diadem of beauty, the remnant of his people, and spirit of justice to him who\r\nsits in judgment, and the strength to those who turn back to the battle of the\r\ngate. Isaiah 28:5-6<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you, o tower of the flock, hill of the daughter of\r\nZion, to you shall it come, the former dominion, Kingship for the daughter of\r\nJerusalem.â€ Micah 4:8-<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus says the Lord of host: If it is marvelous in the sight\r\nof the remnant of his people in those days, should also be marvelous in my\r\nsight, declares the Lord of the host?<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus say the Lord of hosts: behold, I will save my people\r\nfrom the east country amid Jerusalem. And they shall be my people, and I will\r\nbe their God, in faithfulness and righteousness<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd as you have been a byword of cursing among the nations,\r\nO house of Judah and house of Israel, so will I save you, and you shall be a\r\nblessing. Fear not, but let your hands be strong.â€ Zechariah 8:12-13.<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>', NULL, 0, NULL, 1, 'oluochp6@gmail.com'),
(12, 'test1', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">THE GATHERING OF THE DISPERSED JEWS.<o:p></o:p></span></b></p><p class=\"MsoNormal\"><i style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 1rem;\">&nbsp;</i></p><p class=\"MsoNormal\"><i><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">â€œThe\r\nprince shall be one of themselves; their ruler shall come out from their midst;\r\nI will make him draw near, and he shall approach me, for who would dare of\r\nhimself to approach me?â€<o:p></o:p></span></i></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you shall be my people, and I will be your God. Behold\r\nthe storm of the Lord! Wrath has gone forth, a whirling tempest; it will burst\r\nupon the head of the wicked<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">The fierce anger of the Lord will not turn back until he has\r\nexecuted and accomplished the intentions of his mind. In the latter days, you\r\nwill understand this.\" Jeremiah 30:22-24<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">\"Behold a king will reign in righteousness and princes\r\nwill rule injustice. Each will be like a hiding place from the wind, a shelter\r\nfrom the storm, like streams of water, in a dry place, like the shade of a\r\ngreat rock in a weary land. Then the eye of those who see will not be closed,\r\nand the ears of those who hear will give attention, the heart of the hasty will\r\nunderstand and know, and the tongue of the stammer will hasten to speak\r\ndistinctly. The fool will no more be called noble, nor the scoundrel said to be\r\nhonorable.\" Isaiah 32:1-5<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">On that day the Lord of hosts will be a crown of glory, and\r\na diadem of beauty, the remnant of his people, and spirit of justice to him who\r\nsits in judgment, and the strength to those who turn back to the battle of the\r\ngate. Isaiah 28:5-6<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you, o tower of the flock, hill of the daughter of\r\nZion, to you shall it come, the former dominion, Kingship for the daughter of\r\nJerusalem.â€ Micah 4:8-<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus says the Lord of host: If it is marvelous in the sight\r\nof the remnant of his people in those days, should also be marvelous in my\r\nsight, declares the Lord of the host?<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus say the Lord of hosts: behold, I will save my people\r\nfrom the east country amid Jerusalem. And they shall be my people, and I will\r\nbe their God, in faithfulness and righteousness<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd as you have been a byword of cursing among the nations,\r\nO house of Judah and house of Israel, so will I save you, and you shall be a\r\nblessing. Fear not, but let your hands be strong.â€ Zechariah 8:12-13.<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>', NULL, 0, NULL, 1, 'oluochp6@gmail.com'),
(13, 'test1', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">THE GATHERING OF THE DISPERSED JEWS.<o:p></o:p></span></b></p><p class=\"MsoNormal\"><i style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 1rem;\">&nbsp;</i></p><p class=\"MsoNormal\"><i><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">â€œThe\r\nprince shall be one of themselves; their ruler shall come out from their midst;\r\nI will make him draw near, and he shall approach me, for who would dare of\r\nhimself to approach me?â€<o:p></o:p></span></i></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you shall be my people, and I will be your God. Behold\r\nthe storm of the Lord! Wrath has gone forth, a whirling tempest; it will burst\r\nupon the head of the wicked<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">The fierce anger of the Lord will not turn back until he has\r\nexecuted and accomplished the intentions of his mind. In the latter days, you\r\nwill understand this.\" Jeremiah 30:22-24<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">\"Behold a king will reign in righteousness and princes\r\nwill rule injustice. Each will be like a hiding place from the wind, a shelter\r\nfrom the storm, like streams of water, in a dry place, like the shade of a\r\ngreat rock in a weary land. Then the eye of those who see will not be closed,\r\nand the ears of those who hear will give attention, the heart of the hasty will\r\nunderstand and know, and the tongue of the stammer will hasten to speak\r\ndistinctly. The fool will no more be called noble, nor the scoundrel said to be\r\nhonorable.\" Isaiah 32:1-5<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">On that day the Lord of hosts will be a crown of glory, and\r\na diadem of beauty, the remnant of his people, and spirit of justice to him who\r\nsits in judgment, and the strength to those who turn back to the battle of the\r\ngate. Isaiah 28:5-6<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you, o tower of the flock, hill of the daughter of\r\nZion, to you shall it come, the former dominion, Kingship for the daughter of\r\nJerusalem.â€ Micah 4:8-<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus says the Lord of host: If it is marvelous in the sight\r\nof the remnant of his people in those days, should also be marvelous in my\r\nsight, declares the Lord of the host?<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus say the Lord of hosts: behold, I will save my people\r\nfrom the east country amid Jerusalem. And they shall be my people, and I will\r\nbe their God, in faithfulness and righteousness<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd as you have been a byword of cursing among the nations,\r\nO house of Judah and house of Israel, so will I save you, and you shall be a\r\nblessing. Fear not, but let your hands be strong.â€ Zechariah 8:12-13.<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>', NULL, 0, NULL, 1, 'oluochp6@gmail.com'),
(14, 'test1', '<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><b><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">THE GATHERING OF THE DISPERSED JEWS.<o:p></o:p></span></b></p><p class=\"MsoNormal\"><i style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 1rem;\">&nbsp;</i></p><p class=\"MsoNormal\"><i><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">â€œThe\r\nprince shall be one of themselves; their ruler shall come out from their midst;\r\nI will make him draw near, and he shall approach me, for who would dare of\r\nhimself to approach me?â€<o:p></o:p></span></i></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you shall be my people, and I will be your God. Behold\r\nthe storm of the Lord! Wrath has gone forth, a whirling tempest; it will burst\r\nupon the head of the wicked<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">The fierce anger of the Lord will not turn back until he has\r\nexecuted and accomplished the intentions of his mind. In the latter days, you\r\nwill understand this.\" Jeremiah 30:22-24<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">\"Behold a king will reign in righteousness and princes\r\nwill rule injustice. Each will be like a hiding place from the wind, a shelter\r\nfrom the storm, like streams of water, in a dry place, like the shade of a\r\ngreat rock in a weary land. Then the eye of those who see will not be closed,\r\nand the ears of those who hear will give attention, the heart of the hasty will\r\nunderstand and know, and the tongue of the stammer will hasten to speak\r\ndistinctly. The fool will no more be called noble, nor the scoundrel said to be\r\nhonorable.\" Isaiah 32:1-5<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">On that day the Lord of hosts will be a crown of glory, and\r\na diadem of beauty, the remnant of his people, and spirit of justice to him who\r\nsits in judgment, and the strength to those who turn back to the battle of the\r\ngate. Isaiah 28:5-6<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd you, o tower of the flock, hill of the daughter of\r\nZion, to you shall it come, the former dominion, Kingship for the daughter of\r\nJerusalem.â€ Micah 4:8-<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus says the Lord of host: If it is marvelous in the sight\r\nof the remnant of his people in those days, should also be marvelous in my\r\nsight, declares the Lord of the host?<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">Thus say the Lord of hosts: behold, I will save my people\r\nfrom the east country amid Jerusalem. And they shall be my people, and I will\r\nbe their God, in faithfulness and righteousness<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">â€œAnd as you have been a byword of cursing among the nations,\r\nO house of Judah and house of Israel, so will I save you, and you shall be a\r\nblessing. Fear not, but let your hands be strong.â€ Zechariah 8:12-13.<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"text-align:center\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\"><span style=\"font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;\">&nbsp;</span></p>', NULL, 0, NULL, 1, 'oluochp6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

DROP TABLE IF EXISTS `campus`;
CREATE TABLE IF NOT EXISTS `campus` (
  `campus_id` int NOT NULL AUTO_INCREMENT,
  `campus_name` varchar(36) NOT NULL,
  `county` varchar(10) NOT NULL,
  PRIMARY KEY (`campus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`campus_id`, `campus_name`, `county`) VALUES
(1, 'Multimedia University', 'Nairobi');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(18) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Politics'),
(2, 'Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `c_id` int NOT NULL,
  `c_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `article_id` int NOT NULL,
  `commenter_name` varchar(34) NOT NULL,
  `date` date NOT NULL,
  KEY `article_comment_fk` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `c_content`, `article_id`, `commenter_name`, `date`) VALUES
(2, 'sssss', 12, '34', '2021-07-28'),
(2, 'jajajaj', 7, 'Duncan', '2021-07-13'),
(3, 'annamam', 13, 'Patrick', '2021-07-20'),
(23, 'helloo there', 5, 'pacheko', '2021-10-13'),
(23, 'helloo there', 5, 'pacheko', '2021-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `donor_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `phone` int NOT NULL,
  `amount` int NOT NULL COMMENT 'ksh',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `transaction_id` varchar(15) NOT NULL COMMENT 'mpesa id',
  PRIMARY KEY (`donor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donor_id`, `email`, `phone`, `amount`, `date`, `transaction_id`) VALUES
(1, 'MainaMburu47@gmai.com', 718759251, 1000, '2021-10-11', 'N7282J'),
(2, 'Violahsimbi@gmail.com', 728373145, 1500, '2021-10-11', 'TJD 67282'),
(3, 'mulongodancan25@gmail.com', 714757251, 2500, '2021-07-01', 'N7282J8HY'),
(4, 'kennetude@gmail.com', 729373145, 3000, '2021-10-06', 'TJDF 67282'),
(5, 'michael230@gmail.com', 7829272, 4000, '2021-10-05', 'HHS73828K'),
(6, 'Wanjema7@gmai.com', 718957280, 2500, '2021-10-06', 'N7282J8HZ'),
(7, 'sambili@gmail.com', 728373177, 3000, '2021-07-20', 'TGV 67282N'),
(8, 'Kelvinonyango7@gmai.com', 715559271, 2500, '2021-07-01', 'N7282JHDG6Y'),
(9, 'wemanafula@gmail.com', 729333145, 5000, '2021-10-06', 'TGV 67282Q');

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

DROP TABLE IF EXISTS `editor`;
CREATE TABLE IF NOT EXISTS `editor` (
  `email` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `campus_id` int NOT NULL,
  `password` varchar(65) NOT NULL,
  `category` varchar(24) NOT NULL,
  `profile_pic` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `editor_campus_fk` (`campus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`email`, `f_name`, `l_name`, `campus_id`, `password`, `category`, `profile_pic`) VALUES
('admin@tictac.roqw', 'pacheko', 'patrick', 1, '123', 'Politics', 'gdgfhfh'),
('admin@tictac.roqws', 'pacheko', 'patrick', 1, '$2y$10$sXNNys6vjXEt/GF99mAOJeP1lG42UiBqyL7SNIyjpB0puNM/7bQQy', 'Politics', 'gdgfhfh'),
('oluochp6@gmail.com', 'pacheko', 'oluoch', 1, '$2y$10$1jgdWLIHCXQowhbfWV68beYy1O68c7RYvDodKDqCyFG1rImGA9DoO', 'Politics', 'gdgfhfh');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

DROP TABLE IF EXISTS `magazine`;
CREATE TABLE IF NOT EXISTS `magazine` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `m_description` varchar(36) NOT NULL,
  `file` varchar(40) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `m_id` int NOT NULL,
  `m_subject` varchar(24) NOT NULL,
  `sender_mail` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `p_id` int NOT NULL AUTO_INCREMENT,
  `p_title` varchar(18) NOT NULL,
  `p_description` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL COMMENT 'complete, suspended,ongoing',
  `budget` int NOT NULL COMMENT 'ksh',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE IF NOT EXISTS `subscriber` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `category` varchar(15) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`s_id`, `name`, `email`, `category`, `date`) VALUES
(1, 'patrick', 'oluochp6@gmail.com', '', '2021-07-13'),
(2, 'Duncan', 'Mulongodancan24@gmail.com', 'Politics', '2021-10-11');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_category_fk` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `editor_category_fk` FOREIGN KEY (`editor_id`) REFERENCES `editor` (`email`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `article_comment_fk` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `editor`
--
ALTER TABLE `editor`
  ADD CONSTRAINT `editor_campus_fk` FOREIGN KEY (`campus_id`) REFERENCES `campus` (`campus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
