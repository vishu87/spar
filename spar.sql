-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 02, 2015 at 08:23 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spar`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfront_recipes`
--

CREATE TABLE `addfront_recipes` (
`id` int(11) NOT NULL,
  `recipe_name` varchar(200) NOT NULL,
  `ingred` text NOT NULL,
  `cook_time` varchar(100) NOT NULL,
  `method` text NOT NULL,
  `recipe_image` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addfront_recipes`
--

INSERT INTO `addfront_recipes` (`id`, `recipe_name`, `ingred`, `cook_time`, `method`, `recipe_image`) VALUES
(1, 'pizza', ' jdfuefi, dfehwfiu ey8iw, jfweugfi', '56 min', 'a jhgjugu7 ti tggf  hytfyhfrjfykt u\r\nnm hkiyhli rdtfyj', 'b1.jpg'),
(2, 'new recipe', 'b erbyg, ftguetf87tw, fyusgfuigi', '60 min', 'a  gugfiefieyf ei8fye8wyf ew\r\n djgeudjg wegd\r\ne dhuweh', 'd4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
`id` int(11) NOT NULL,
  `banner_name` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner_name`, `banner_image`, `priority`, `updated_at`) VALUES
(9, 'sadasd', '1-a-002-001-00.jpg', 0, '2015-05-08 09:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
`id` int(11) NOT NULL,
  `brand_name` varchar(200) NOT NULL,
  `brand_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `updated_at`) VALUES
(8, 'sadasd', '8-a-002-001-00.jpg', '2015-05-08 10:03:53'),
(5, ' guiygilyol u', '', '0000-00-00 00:00:00'),
(6, 'xklc hio', 'DSC_1914.jpg', '2015-03-19 17:09:46'),
(7, 'asdasdsa', 'a 004.jpg', '2015-05-08 05:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
`id` int(11) NOT NULL,
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `name`) VALUES
(2, 'Name1'),
(5, 'nEW CARSOUSEL');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_items`
--

CREATE TABLE `carousel_items` (
`id` int(11) NOT NULL,
  `carousel_id` int(11) NOT NULL,
  `caption` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `carousel_items`
--

INSERT INTO `carousel_items` (`id`, `carousel_id`, `caption`, `image`, `priority`) VALUES
(3, 2, 'ui', '3-Chrysanthemum.jpg', 3),
(8, 5, 'asd asd', '1-Jellyfish.jpg', 3),
(5, 2, 'sadasd', 'Hydrangeas.jpg', 1),
(6, 2, 'sdadsad', 'Penguins.jpg', 2),
(7, 2, 'asdasd', 'Jellyfish.jpg', 4),
(11, 5, 'asdsadsadasd asdsad', 'Lighthouse.jpg', 1),
(12, 5, 'asd', '1-Koala.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
`id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `deal_name` varchar(200) NOT NULL,
  `deal_content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `category_id`, `deal_name`, `deal_content`, `image`, `updated_at`) VALUES
(2, 1, 'asdas', 'dasdasd', '', '2015-05-08 04:37:16'),
(3, 3, 'asdasd', '<p>asdasdasd asd asd</p>\r\n', 'IMG_0008.JPG', '2015-05-09 02:34:21'),
(4, 1, 'asd asd sad', 'as dasd asdsad', '', '2015-05-08 04:37:25'),
(5, 3, 'New Deal', '<p>asd asd asd 1111</p>\r\n', '0-a-002-001-00.jpg', '2015-05-08 09:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_deals`
--

CREATE TABLE `homepage_deals` (
`id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `homepage_deals`
--

INSERT INTO `homepage_deals` (`id`, `deal_id`, `priority`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 3, 2),
(5, 4, 3),
(6, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `kids_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `title`, `content`, `kids_image`, `updated_at`) VALUES
(8, 'asda', '<p>sdasd</p>\r\n', 'a 004.jpg', '2015-05-08 05:01:33'),
(4, ' iudfidf fie', '<p>fdsgfiuey rfi8eprw</p>\r\n', '', '2015-05-08 05:01:39'),
(5, 'hgu hgihir', 'jhf fdhilveof', '', '2015-03-19 12:04:52'),
(6, 'h f;ods9', ' hvfdkirohfi sdyfoiew', 'DSC_2255.jpg', '2015-03-19 17:17:15'),
(7, 'asdas', '<p>dasdasd</p>\r\n', '', '2015-05-07 07:53:23'),
(9, 'asd1111', '<p>asdasdsad</p>\r\n', '10-a-002-001-00.jpg', '2015-05-08 10:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
`id` int(11) NOT NULL,
  `image` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `caption` varchar(500) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `image`, `caption`) VALUES
(13, 'GiftCards2.jpg', 'Gift Card'),
(12, 'RewardCard1.png', 'Reward Card'),
(11, 'upcoming-store.jpg', 'Upcoming Store');

-- --------------------------------------------------------

--
-- Table structure for table `mid_banner`
--

CREATE TABLE `mid_banner` (
`id` int(11) NOT NULL,
  `mid_banner_name` varchar(200) NOT NULL,
  `mid_banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mid_banner`
--

INSERT INTO `mid_banner` (`id`, `mid_banner_name`, `mid_banner_image`, `priority`, `updated_at`) VALUES
(3, 'dfdsfv', 'DW3-External.jpg', 3, '2015-05-07 13:20:04'),
(4, 'fgfdge', 'win3.jpg', 1, '2015-05-07 13:20:04'),
(5, 'tretg4t', 'XMAS-BANNER.jpg', 4, '2015-05-07 13:20:04'),
(6, 'kjnjkl', '_DSC5674.jpg', 2, '2015-05-07 13:20:04'),
(8, 'sad', '3-a-002-001-00.jpg', 0, '2015-05-08 09:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
`id` int(11) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `page_slug` varchar(200) NOT NULL,
  `page_content` text NOT NULL,
  `left_sidebar` int(11) NOT NULL,
  `right_sidebar` int(11) NOT NULL,
  `top_active` int(11) NOT NULL,
  `meta_title` varchar(200) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `meta_keywords` varchar(500) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_content`, `left_sidebar`, `right_sidebar`, `top_active`, `meta_title`, `meta_description`, `meta_keywords`, `updated_at`) VALUES
(1, 'About Spar', 'about-spar', '<div><p>Artee Group is one of Nigeria&#39;s leading business houses with multiple businesses spanning across the consumption space. While retail forms the core business activity of Artee Group, group subsidiaries are present in manufacturing, real estate, exports among many others.</p>\r\n\r\n<p>The group&#39;s specialty retail formats include department store chain Park &#39;n&#39; Shop, Supermarket Chain SPAR, Home &amp; Office Decor&#39; Millennium, table water brand Cascade, premium lighting Searchlight, Quick Serve Restaurant Cakes &#39;n&#39; Bakes, amongst many others.</p>\r\n\r\n<p>At Artee Group, our statement of purpose is &#39;Adding value beyond limits&#39;. This is as true today as it was in 1988, when we started out as a wholesaler Nigeria</p>\r\n\r\n<p>Retail forms the core business activity at Artee Group and most of its businesses in the consumption space are built around retail. Artee Group&#39;s retail network touches the lives of mo millions of Nigerians. The group currently operates around several stores spread over large retail space. Present in the value and lifestyle segments, the group&#39;s retail formats cater to almost the entire consumption expenditure of a wide cross-section of Nigerian consumers. Led by Park &#39;n&#39; Shop Retail, the group&#39;s flagship retail brand, the group owns Nigeria&#39;s most popular department store chain. The cornerstone of our philosophy is listening, adapting, and delivering exceptional value to our customers, investors and shareholders. What sets us apart at Artee Group is a strong and dynamic culture of entrepreneurship.</p>\r\n', 8, 6, 0, '', '', '', '2015-05-29 22:59:27'),
(2, 'Reward Card', 'reward-card', '<p>Frequent visits to the stores, SPAR network is not only an opportunity to buy excellent products at best prices. Our loyal customers win prizes by joining a loyalty program. How do you do? First of all, you should go to the nearest SPAR!</p>\r\n\r\n<p>Upon request, the SPAR will support you with a simple form that must be carefully filled in, not skipping the required fields. Also very please carefully read the terms of our program. &nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Receive a green card Loyalty, which is activated in the SPAR system within 72 hours of submitting the form. From the moment of activation of every purchase in stores with the logo of our network will result in the increase in the number of points on your account.</p>\r\n\r\n<p>After some time, using the Charter of the number of accumulated points reach a level capable of receiving first prizes in kind. Will belong to you decide whether you will be satisfied with a more modest reward (which requires a smaller number of points on your account), or please wait for an opportunity to receive more great items from our catalog.</p>\r\n', 7, 9, 0, '', '', '', '2015-05-29 17:16:21'),
(3, 'Did you know? ', 'did-you-know-trivia', '<p>The word Spar means &quot;to save [money]&quot; in some Germanic (among them German) and Scandinavian languages.</p>\r\n\r\n<p>SPAR was originally called <strong>DE SPAR,</strong> an acronym of the Dutch phrase Door Eendrachtig Samenwerken Profiteren Allen Regelmatig&nbsp; (English: through united co-operation everyone regularly profits). De Spar is Dutch for &quot;The spruce&quot;, hence Spar&#39;s logo. As the organisation expanded across Europe, the name was abbreviated by dropping &quot;DE&quot;.</p>\r\n\r\n<p>In Italy, the name is still Despar, though in keeping with the international branding, the &quot;Spar&quot; section of the logo is highlighted, and the larger stores are still called<strong> Eurospar </strong>and <strong>Interspar</strong>.</p>\r\n\r\n<p>In Japan some stores operate under the name <strong>Hotspar</strong>, although the store logo colouring remains unchanged.</p>\r\n', 8, 0, 0, '', '', '', '2015-05-29 21:48:28'),
(4, 'Customer Review ', 'customer-review', '', 0, 0, 0, '', '', '', '0000-00-00 00:00:00'),
(5, 'Definitions', 'definitions', '<ol>\r\n	<li>ORGANISER means the entity organizing the program, which is the SPAR Poland SA with its seat in Rzesz&oacute;w at ul. Twardowski 9, registered in the District Court in Rzesz&oacute;w, XII Commercial Department of National Court Register, under number&nbsp; 509,372 , NIP 526-11-62-514, share capital: 2 141 450 zl</li>\r\n	<li>RULES OF THE PROGRAMME means this Terms Loyalty Program &quot;Loyalty Card&quot;, which defines the terms and conditions of the Participant, Partner and Organizer in particular rules for granting, issuing, subtraction, advertise and cancellation of Points and rules for the exchange Points for Prizes;</li>\r\n	<li>PROGRAM means loyalty program &quot;Loyalty Card&quot; organized by SPAR Poland SA, and led by Partner;</li>\r\n	<li>PARTNER is a party to the agreement concluded with the organizer s based on whom the license to operate a store SPAR trademark. Partner is an entity in which you can collect and exchange Points for Prizes. The organizer reserves the right to exclude some of the Partners of the program temporarily or permanently. Partner institutions in which will be conducted Loyalty program will be marked accordingly;</li>\r\n	<li>FACILITY PARTNER means a place of retail sales of Goods or Services by Partner in the Programme;</li>\r\n	<li>PRODUCTS OR SERVICES means those goods or services, whose acquisition in accordance with the Regulations shall apply a points;</li>\r\n	<li>POINTS represent accrued on the Participant&#39;s Account units (points) in connection with the acquisition by the Participant Goods or Services in accordance with the Regulations, which entitle the participant to receive the Prize. Number of points needed to exchange them for a given award is given to the currently applicable Poster that;</li>\r\n	<li>PARTICIPANT an adult person who has been registered by the Partner as such is based on the Registration Form submitted in accordance with the Regulations and joined the program;</li>\r\n	<li>ACCESSION TO THE receive the Charter by the Programme Participant based on his application, in order to accumulate points under the terms of the Regulations;</li>\r\n	<li>REGISTRATION FORM (poll) means an application to join the Programme according to the formula established by the Organizer, who after completing the personal data and consent to the processing of personal data in accordance with the Act and the deposit of the personal legible signature by a specific individual, an application for participation in the Program;</li>\r\n	<li>The Act - the Act of 29 August 1997. Personal Data Protection (Dz. U. of 2002, no. 101, pos. 926 as. d.);</li>\r\n	<li>CARD means the card provided by the Organizer Partner and the Partner&#39;s issued to the Participant pursuant to the Rules, identified by the number on the Charter (barcode), intended to collect the points accrued on the Participant&#39;s Account under the Programme;</li>\r\n	<li>ACTIVE SAFETY- card on which points the recording was made during the last twelve months from the date of the last entry;</li>\r\n	<li>Participant&#39;s account is an account established for data (your name) Participant in accordance with the Regulations. Assigned to the Participant&#39;s Account Card is issued to the Participant;</li>\r\n	<li>PER ACCOUNT means the current number of important points accrued on the Participant Participant&#39;s Account;</li>\r\n	<li>REGISTRATION - assign an identification number given to the Charter Participant&#39;s personal data;</li>\r\n	<li>AWARD is a prize in kind or vouchers specified in the currently applicable poster, this award is issued to the Participant in exchange for accumulated points;</li>\r\n	<li>POSTER - is currently applicable poster setting out a list of prizes offered in the program and the number of points that are required to collect by Participant Participant&#39;s Account in order to obtain Awards;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:49:22'),
(6, 'General Provisions', 'general-Provisions', '<ol>\r\n	<li>Loyalty program SPAR&nbsp;&#39;Loyalty Card&#39;&nbsp;is a program that runs on Polish territory;</li>\r\n	<li>Program Participant may be only adult natural person with full legal capacity and having a place of residence on Polish territory; Partner other than an employee;</li>\r\n	<li>In the outlet Partner Participant may have at any given time only one active Participant&#39;s Account;</li>\r\n	<li>Partner shall not be entitled either directly or by implication, to represent the Organizer or to submit on behalf of any assurances, representations or commitments, except for the granting and issuing Rewards Points and distribution of information materials on behalf of the organizer of the Programme, subject to the provisions of points 6.3 and 6.4;</li>\r\n	<li>Infringement by the Participant terms of these Regulations, in particular through the inappropriate use of Charter may lead to the withdrawal of some or all acquired because of the participation in the delegation;</li>\r\n	<li>The cost associated with the purchase of cards and prizes lies with the Partner;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-05-29 22:25:39'),
(7, 'Terms of Accession to the Program', 'terms-of-accession-to-the-program', '<ol>\r\n	<li>The condition of the SPAR program &quot;Loyalty Card&quot; is to fill in a complete, clear and truthful Registration Form and submitting it to the Partner outlet;</li>\r\n	<li>Participation in the Program and provide related to the participation of personal data is voluntary;</li>\r\n	<li>&nbsp;Providing personal data is voluntary but necessary for participation in the Program;</li>\r\n	<li>Participants may join the program at any time of its duration;</li>\r\n	<li>Prior to the Programme Participant is obliged to refer to the Rules of the available along with the registration form. Signature submitted on the registration form participant confirms acquainted with the Rules of the Programme and accepts its provisions;</li>\r\n	<li>By submitting signature on the registration form participant agrees to the storage and processing by the Organizer and partner indicated in the Registration Form, for the Program, your personal information appearing on the registration form; The participant also authorizes Partner to share their personal data to and allow them to store and process personal data for the purposes of the Programme;</li>\r\n	<li>The registration form is available at Outlets Partners and on the www.spar.pl;</li>\r\n	<li>Registration forms filled illegible or incomplete and unsigned forms or without registration Loyalty Card number will not be recorded;</li>\r\n	<li>Participant&#39;s personal data processing takes place in accordance with the Law on Personal Data Protection;</li>\r\n	<li>The participant has a right to inspect the contents of their data and request their update or delete through a written request to the Partner;</li>\r\n	<li>The participant shall immediately notify the Partner of any change of their personal data and shall bear all the consequences of the absence of such notice;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:50:00'),
(8, 'Spar Loyalty Card', 'spar-loyalty-card', '<ol>\r\n	<li>Loyalty Card SPAR used to identify the participant in the Program and registration points earned by the Participant. Each card has a number assigned to a particular Programme Participant;</li>\r\n	<li>of the Charter submitted by the Participants for registration in the register are assigned to the names of individual Participants Partner within 72 hours of submission of the relevant participant correctly completed Registration Form;</li>\r\n	<li>The card is valid until further notice, throughout the duration of the program SPAR &#39;Loyalty Card&#39;;</li>\r\n	<li>Each participant in the Partner outlet may have only one active card entitling to calculate points and exchange them for awards. In case the Participant in the Partner outlet has more than one card active registered, the Partner is entitled to revoke all cards that participant in the Affiliate Branch, which means canceling stored on the Tabbed SPAR Point Programme &#39;Loyalty Card&#39;;</li>\r\n	<li>Released Participant card is not transferable and remains the property of the Partner;</li>\r\n	<li>SPAR Loyalty Card is not a credit card, ATM or payment;</li>\r\n	<li>SPAR Loyalty Card is issued to the Participant without downloading from this fee. Charter can handle any participant or a person who is authorized by him (excluding employees working in the Outlets Partners). It is presumed that the person presenting the card Loyalty Program Participant SPAR is or has been authorized by the Participant to use the Card. By providing a Customer Card SPAR another person, the Participant undertakes to inform her about the conditions of the Program and these Rules;</li>\r\n	<li>It is unacceptable to transfer the Participant points from their cards on the Charter of another Participant;</li>\r\n	<li>In the case of adoption by the personnel facility Partner doubt as to the use by the Participant of the Charter, it can be stopped. In this case, use of the card during the transaction will be withheld until the clarification of doubts. If the doubt will concern registered cards, Partner shall notify this fact to the participant, asking for their explanation. In other cases, doubts will be clarified after the personal notification to the Participant that owns the card;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:51:35'),
(9, 'Loss and Replacement Card', 'loss-and-replacement-card', '<ol>\r\n	<li>In case of damage, loss or theft Loyalty Card SPAR please tell employees partner establishments where the card has been registered;</li>\r\n	<li>In the case of destruction, loss or theft of the registered cards, it is possible to read previously accumulated points. The participant will be issued a new card, which will be assigned collected points. In the period of waiting for a new Card Loyalty Points SPAR they are not charged;</li>\r\n	<li>Principles of issuing a new Loyalty Card SPAR in the case referred to in paragraph 2 are the same as when joining the Programme;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:52:33'),
(10, 'Collection Points', 'collection-points', '<ol>\r\n	<li>Partner acknowledges Points Participant for the purchase of goods or services covered by the Programme Participant made ??by using the Loyalty Card registered only in a given partner;&nbsp;</li>\r\n	<li>The exercise of rights arising from the points collected by the Participant is only possible with the use of active cards. Points can be exchanged for awards only by the holder of the registered cards;&nbsp;</li>\r\n	<li>Partners have the exclusive right to determine which goods or services are the goods or services covered by the Programme, and determining the number of points awarded to the Participant&#39;s Account for their acquisition;&nbsp;</li>\r\n	<li>Principles of awarding points for the purchase of certain goods and establishes Partner Services;&nbsp;</li>\r\n	<li>Information about the rules for granting Points, goods or services covered by the Programme is available at Outlets Partners;&nbsp;</li>\r\n	<li>In the case of extending opportunities to earn Points in accordance with the provisions of these Regulations Partner shall notify the Participants via the information material relating to such programs available in Partner institutions;&nbsp;</li>\r\n	<li>points a condition for granting the ceremony by its Charter Program Participant employee in the Partner outlet before Participant will acquire the product or service covered by the program (prior to closing). A later entry points on the basis of receipts or other evidence of the transaction is not possible;&nbsp;</li>\r\n	<li>Points will be awarded to the Participant&#39;s Account in time, as far as possible, 24 hours after the purchase of goods or services covered by the Programme;&nbsp;</li>\r\n	<li>Points are awarded only on condition that Participant in the Partner outlet full payment for goods or services only in the following ways: cash, bank payment card;&nbsp;</li>\r\n	<li>&nbsp;Points will not be awarded if the participant uses the purchase discount other than that provided in the program, unless the Rules of the Programme, which provided This is a discount, provides otherwise;&nbsp;</li>\r\n	<li>&nbsp;When it is confirmed that the points have not been validly issued or granted, the Partner will be entitled to cancel the appropriate number of points in a given Participant&#39;s Account. A partner may also withhold awards for a period not exceeding 30 calendar days if there is a presumption that the points have been issued or granted by mistake or without making a purchase of goods or services covered by the Programme;&nbsp;</li>\r\n	<li>&nbsp;Points cannot be exchanged for cash;&nbsp;</li>\r\n	<li>&nbsp;Points will be deducted from the Account Participant by the Partner if the participant returns the Partner acquired goods or services covered by the Programme for which were awarded points and will receive a refund of the value of those goods or services. In this case, the participant is obliged to hand Card Loyalty Partner Sites SPAR employee to deduct from the Participant&#39;s Account of the previously authorized points;&nbsp;</li>\r\n	<li>&nbsp;Participant is entitled to receive the outlet Partner status information Participant&#39;s Account and information on points awarded or deducted from your Account Participant;&nbsp;</li>\r\n	<li>&nbsp;Points collected by the Participant shall be valid for a period of 12 months from the date of granting the Participant&#39;s Account. After this date, any points not exchanged for awards under these Rules, expired;&nbsp;</li>\r\n	<li>&nbsp;Any objections to the amount of accumulated points (added or subtracted) participant is obliged to report in the Partner outlet where purchased for. Complaints will be dealt with on the basis of cash receipt or invoice proving the transaction with the Charter of the Participant;&nbsp;</li>\r\n	<li>&nbsp;does not represent the Goods within the meaning of the Rules of tobacco products and alcoholic beverages.</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:53:03'),
(11, 'Awards', 'awards', '<ol>\r\n	<li>List of prizes available in the Program is published in the respective posters, which Partners are required to expose in his Outlets;</li>\r\n	<li>&nbsp;Principles for the exchange Punks for Prizes and rules for the provision Prizes are subject to such conditions and restrictions which are contained in the materials Outlets Partners presented in accordance with these Regulations;</li>\r\n	<li>&nbsp;Duties and Responsibilities of Partner associated with Prizes are limited to ensuring the delivery or the possibility of receiving awards on the principles laid down in the Regulations of the Programme;</li>\r\n	<li>&nbsp;Prizes information (including photos, descriptions and parameters) presented on the poster, only indicate the type of Prizes and does not constitute an offer within the meaning of the provisions of the Civil Code;</li>\r\n	<li>&nbsp;In the event that lack ordered by the Participant Award revealed only after placing an order at a particular prize, the Participant will be informed of this fact and may decide whether to choose another prize with an approximate point value;</li>\r\n	<li>&nbsp;Point values??Similar Prizes offered participants in subsequent editions poster &amp; may differ from each other. At the time of emergence of a new edition of the Poster, we offer prizes with the previous poster expires while in period of 30 days from the date of publication of the new version of the poster at the partners, the Participant has the right to redeem Rewards Points at appropriate under the existing rules;</li>\r\n	<li>&nbsp;If the prize is made to a Participant who is a natural person not engaged business, the Partner will charge a flat-rate tax for the benefit of the person in accordance with the Law on income tax from individuals before issuing awards (pursuant to Art. 21 paragraph. 1 pkt.68 Act on income tax from individuals, tax-free winnings value - if the individual value of these prizes or prizes does not exceed 760 zl). Tax payment by the Participant to the account of the Partner as a tax payer is a condition for granting Awards Participant. Failure to pay the tax within 10 days from the date of your choice awards will be considered as resigned from receiving the Prize. In the event of Awards Participant, who is an entrepreneur running a business, the Partner will not charge flat-rate tax. The entrepreneur takes into account the value of the awards in income to taxation in respect of their activities;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:54:17'),
(12, 'Changing the Points on the Nations', 'changing-the-points-on-the-nations', '<ol>\r\n	<li>The prize can be received only by a registered participant. The exercise of rights arising from the accumulated points is possible only with the use of active cards;</li>\r\n	<li>The participant is entitled to exchange accumulated points for Prizes, since the granting of points on the Participant&#39;s Account unless he has accumulated enough points needed to receive his choice awards;</li>\r\n	<li>Points collected by the Participant may be replaced by a registered participant solely on the awards presented on the current Poster that, under the conditions specified therein;</li>\r\n	<li>To replace the points on the Prize, the registered participant should indicate Award and collect it directly in the outlet Partner, in which it was registered card of a participant;</li>\r\n	<li>In order to identify the participant, the employee facility Partner has the right to ask while receiving the awards have questions about Participant&#39;s personal data contained in the database. If the Participant refuses to provide the requested information or the information did not agree with the information contained in the database, Partner may refuse to perform the contract award;</li>\r\n	<li>Partner reserves the right to verify the participant&#39;s identity document when receiving by the Participant Prize. Employee facility Partner may make the issue of the compatibility Awards name and date of birth contained in an identity document with the above data indicated Participant in accordance with clause VIII.1 hereof;</li>\r\n	<li>Acceptance of the Prize to the Participant, the number of points corresponding to the collected Prize, indicated on the poster, will be deducted from the state of the Participant&#39;s Account;</li>\r\n	<li>Prizes cannot be exchanged for cash;</li>\r\n	<li>Points cannot be exchanged for awards in conjunction with a premium in cash;</li>\r\n	<li>&nbsp;Upon receipt Awards Participant shall sign the acknowledgment of receipt Awards;</li>\r\n	<li>&nbsp;When receiving the Awards Participant is obliged to check whether the delivered Award for visible damage, whether it&rsquo;s quantitative and qualitative parameters comply with the product specifications (eg. The number of elements that make up the product). The participant is also obliged to check when receiving awards completeness of the documents (manuals, warranty cards, especially for the Awards, which were issued to the Participant with the card manufacturer&#39;s warranty - should pay attention to whether the annexed documents are written in Polish; if not, should be reported immediately to the employee Partner). Participants shall also check whether he agrees to the quantity Award by him;</li>\r\n	<li>&nbsp;In case of visible damage awards or qualitative or quantitative non-compliance, the Participant shall promptly (during reception) report this fact to the issuing employee Partner Award. In such a situation, the client has the right not accept Awards;&nbsp;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:54:49'),
(13, 'Complaints', 'complaints', '<ol>\r\n	<li>The basis for the complaint received Awards is the Participant&#39;s acknowledgment of receipt of the employee facility Partner Awards; consequently, the participant is obliged to keep this document for the duration of the warranty period Awards;</li>\r\n	<li>&nbsp;In the case of the Awards, which were issued to the Participant with the manufacturer&#39;s warranty, the Participant shall report the complaint awards to the service by providing it with the card manufacturer&#39;s warranty conquered by Outpost Partner, which gave rise to this Prize and Prize Acceptance Confirmation (must be correct and complete fulfillment of the above documents - data store, store stamp, data Participant, date of the prize, specifications Awards: make, model, serial number and description of the damage). Conditions for handling complaints w / the Prize are described in detail in the express warranty manufacturers. The list of authorized service centers is indicated for the manufacturer&rsquo;s warranty cards;</li>\r\n	<li>&nbsp;In the case of defects of other prizes, the participant declares complaint Partner Branch, which received the award.</li>\r\n	<li>&nbsp;The participant is obliged to provide defective Partner Award to the facility or service manufacturer in original packaging with all safety components; Advertised goods should be clean;</li>\r\n	<li>&nbsp;Partner Award spending Participant having a warranty card manufacturer is obliged to raise the stamp of your facility. On the warranty card, you must enter the date of the Awards;&nbsp;</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:55:40'),
(14, 'Termination of the Programme, The Exclusion from the Program', 'Termination-of-the-Programme-the-exclusion-from-the-program', '<ol>\r\n	<li>The program is valid for an indefinite period, program begins with the announcement of its launch. The organizer reserves the right to suspend or terminate the program at any time with prior notice Partners and Participants, effective following the 30 calendar days from the announcement of the suspension or termination of the Programme;</li>\r\n	<li>In case of suspension or termination of the Program:\r\n	<ol>\r\n		<li>Partner is required to include information about the suspension or cessation of the Program in your outlet. The information must include specific conditions for the termination of the Programme and the date deadline for the exchange Points for Prizes;</li>\r\n		<li>The participant will be notified of the suspension or termination of the Program on valid e-mail address provided by the Participant Registration Form, or information referred to in point. 3.11, if you change your e-mail address by Participant.</li>\r\n		<li>The participant will be entitled to exchange the collected points for prizes within 30 calendar days from the date of notification by the Partner of the suspension or termination of the Programme. After this date the Participant shall not be entitled to exchange accumulated points for prizes, and Partner shall not be obliged to exchange for Reward Points unused by the Participant, after this deadline;.</li>\r\n	</ol>\r\n	</li>\r\n	<li>In case of cancellation of the Participant from participation in the Program, the Participant shall submit a written statement of resignation from the outlet Partner Program, which was given Participant registration card. The participant confirms his resignation from the Programme signature on the statement. All gathered so far points Participant&#39;s account, the Participant has the right to be exchanged for awards within 30 days of the cancellation of participation in the Program;&nbsp;</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:56:11'),
(15, 'Final Provisions', 'final-provisions', '<ol>\r\n	<li>In case of violation of the provisions of these Regulations by the Participant, the Partner is entitled to exclude from participation in the Program. Exclusion from the program causes a loss of (cancel) collected points and the loss of validity of the Charter;</li>\r\n	<li>Regulations are available for Participants at the headquarters of the Organizer, Outlets Partners and on the www.spar.pl.</li>\r\n</ol>\r\n', 7, 9, 2, '', '', '', '2015-06-02 18:56:43'),
(16, 'Gift Card', 'gift-card', '<div class="row">\r\n<div class="col-md-6">\r\n<h3>About The Co-branded&nbsp;Gift Card</h3>\r\n\r\n<p>Continuing with the legacy of introducing innovation in the retail industry over last 25 years, Artee Industries Ltd feels privileged to introduce to you a unique Co-Branded Plastic Gift Card, which will replace our Paper based Gift Voucher. The Co-Branded Plastic Gift Card is called &ldquo;Park N Shop SPAR Gift Card&rdquo; and is being launched in collaboration with FCMB, one of the leading financial institutions in the country.</p>\r\n\r\n<p>In terms of look &amp; feel, the card will be very similar to a debit / credit card, with all the built-in security features. Attached below a sample design of the Plastic Gift Card:<br />\r\n&nbsp;</p>\r\n\r\n<h3>Better Than Traditional Gifting</h3>\r\n\r\n<p>Traditional Gifting practices involve selecting gift items, procuring from various sources and also spending on logistics cost in terms manpower, money &amp; time. All of these can be quite a hassle for any organisation</p>\r\n\r\n<p>Secondly, the receiver may or may not actually appreciate the gift item. Picking up a relevant gift which matches with the liking/ requirement / need of the receiver is actually a big challenge.</p>\r\n\r\n<p>Whereas, &quot;Park n Shop SPAR Gift Card&quot; gives a hassle free Gifting solution with the built in flexibility for the receiver to choose from a wide variety of products namely Electronics, White Goods, Laptop, Printers, Furniture, Supermarket, Bakery, Butchery, Fresh and Lifestyle products like Watches, Perfumes and Jewellery etc.</p>\r\n</div>\r\n\r\n<div class="col-md-6">\r\n<h3>Benefits of the Gift Card</h3>\r\n\r\n<div style="padding-left:10px; margin-bottom:40px;">\r\n<ul>\r\n	<li>Customised with your Brand/ Company Logo</li>\r\n	<li>Any Unique Amount for any Quantity of Cards</li>\r\n	<li>Chip based Plastic Card, provides security and convenienc e of carrying &amp; use</li>\r\n	<li>Can be used across all Park n shop / SPAR outlets</li>\r\n	<li>Plastic Gift Card can be redeemed over multiple transact ions</li>\r\n	<li>More secured than the Paper Gift Vouchers</li>\r\n	<li>Can be used against any kind of purchase in Park N Shop / SPAR outlets</li>\r\n	<li>No Extra Charge<br />\r\n	&nbsp;</li>\r\n</ul>\r\n</div>\r\n\r\n<h3>Enquiries?</h3>\r\n\r\n<p>For further clarification / presentation, please get in touch with us at <a href="#">sales@arteegroup.com</a> or call us at 07090840594</p>\r\n</div>\r\n</div>\r\n', 10, 0, 16, '', '', '', '2015-06-02 19:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `page_sidebar_items`
--

CREATE TABLE `page_sidebar_items` (
`id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page_side_banner`
--

CREATE TABLE `page_side_banner` (
`id` int(11) NOT NULL,
  `side_banner_name` varchar(200) NOT NULL,
  `side_banner_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
`id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_detail` text NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `product_price`, `product_detail`, `product_image`, `updated_at`) VALUES
(5, 'yahoo', 4, '2121', '123123123', '12-a-002-001-00.jpg', '2015-05-08 10:07:42'),
(4, 'asdasdasd', 4, 'asdas', 'dasd', 'PHOTO - Copy.png', '2015-05-08 05:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
`id` int(11) NOT NULL,
  `product_category` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_category`, `image`) VALUES
(4, '1111111111', ''),
(3, 'asd asd asdas', 'a 001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
`id` int(11) NOT NULL,
  `recipe_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `preparation_time` varchar(100) NOT NULL,
  `recipe_image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `ingredient` varchar(500) NOT NULL,
  `cook_time` varchar(100) NOT NULL,
  `to_serve` varchar(200) NOT NULL,
  `method` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `recipe_name`, `category_id`, `preparation_time`, `recipe_image`, `description`, `ingredient`, `cook_time`, `to_serve`, `method`, `updated_at`, `created_at`) VALUES
(13, ' bvhukfdhi', 2, '54 min', '20140305_095949.jpg', '<p>fhsdkfhowowe</p>\r\n', '<p>das vjydgasida, hdsiw</p>\r\n', '35 min', ' hudcgodwdo', '<p>cb ucgisucg is</p>\r\n', '2015-05-08 10:23:27', '0000-00-00 00:00:00'),
(14, 'ih jo', 3, ' hiyit', '', 'io houp0', ' juo9u 9ou', 'iojiou', 'uj 9 uioyhil', 'ioh oup9u ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'asdasdsad', 1, 'asdasd', 'ad1.jpg', 'kjlkjlkjl', 'jlkjlkjlkj', 'llkjlkjlk', '', '', '2015-04-30 10:24:39', '0000-00-00 00:00:00'),
(19, ' Chicken Alfresco', 1, '30 mins', 'chicken-alfresco-big.jpg', '<p>Its a grilled marinated chicken breast in Parmesan cream sauce best served with saute vegetables and meshed potatoes.</p>\r\n', '<ul>\r\n	<li>2 breast pieces&nbsp;Chicken</li>\r\n	<li>1 tbsp Oil</li>\r\n	<li>2 cloves Garlic</li>\r\n	<li>1 tsp Salt</li>\r\n	<li>1 tsp Pepper Powder</li>\r\n	<li>1 pc Lemon</li>\r\n	<li>1 tsp Butter</li>\r\n	<li>2 tbsp Parmesan Cream Sauce</li>\r\n</ul>\r\n', '25 mins', '2 people', '<p>yahooooa sd asd asd</p>\r\n', '2015-05-06 13:40:24', '0000-00-00 00:00:00'),
(20, 'asd asd sad', 1, 'asdasd', '', '<p>asdas dasd as</p>\r\n', '<p>sdasdasd</p>\r\n', '', '', '<p>asda</p>\r\n', '2015-05-08 04:51:05', '0000-00-00 00:00:00'),
(21, 'asdasd', 1, 'asd sad', '6-a-002-001-00.jpg', '<p>asd</p>\r\n', '<p>asd</p>\r\n', 'asd', 'asd', '<p>asdasd</p>\r\n', '2015-05-08 10:02:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE `recipe_categories` (
`id` int(11) NOT NULL,
  `recipe_category` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_categories`
--

INSERT INTO `recipe_categories` (`id`, `recipe_category`, `image`) VALUES
(1, 'Chinese1', 'Wedding-card-3.jpg'),
(2, 'Mughlai', ''),
(3, 'Recipe Category', '1-yamuna-expr2-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `related_products`
--

CREATE TABLE `related_products` (
`id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `related_product_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_products`
--

INSERT INTO `related_products` (`id`, `recipe_id`, `related_product_id`) VALUES
(13, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `related_recipes`
--

CREATE TABLE `related_recipes` (
`id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `related_recipe_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_recipes`
--

INSERT INTO `related_recipes` (`id`, `recipe_id`, `related_recipe_id`) VALUES
(5, 13, 14);

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE `sidebars` (
`id` int(11) NOT NULL,
  `sidebar` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`id`, `sidebar`) VALUES
(6, 'About Sidebar'),
(7, 'Reward Card'),
(8, 'About Left Sidebar'),
(9, 'Reward Card Right'),
(10, 'Gift Card Sidebar'),
(11, 'Gift Card Right');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_items`
--

CREATE TABLE `sidebar_items` (
`id` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `sidebar_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `carousel_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `custom_html` text NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidebar_items`
--

INSERT INTO `sidebar_items` (`id`, `type`, `sidebar_id`, `page_id`, `media_id`, `carousel_id`, `title`, `custom_html`, `priority`) VALUES
(1, 2, 2, 0, 0, 0, 'Hey', '', 1),
(2, 1, 2, 5, 0, 0, '', '', 2),
(3, 3, 2, 0, 6, 0, '', '', 3),
(11, 4, 2, 0, 0, 0, '', '', 6),
(12, 5, 2, 0, 0, 5, '', '', 7),
(6, 4, 2, 0, 0, 0, '', '<p>&nbsp;jfyjhvbknkjbhvgfdghjkljhgcfhjk</p>\r\n', 5),
(13, 2, 2, 0, 0, 0, 'yuftdgh', '', 8),
(10, 5, 2, 0, 0, 5, '', '', 4),
(14, 3, 6, 0, 11, 0, '', '', 1),
(15, 1, 8, 1, 0, 0, '', '', 1),
(16, 3, 7, 0, 12, 0, '', '', 1),
(17, 1, 8, 3, 0, 0, '', '', 2),
(18, 1, 9, 5, 0, 0, '', '', 1),
(20, 1, 9, 6, 0, 0, '', '', 2),
(21, 1, 9, 7, 0, 0, '', '', 3),
(22, 1, 9, 8, 0, 0, '', '', 4),
(23, 1, 9, 9, 0, 0, '', '', 5),
(24, 1, 9, 10, 0, 0, '', '', 6),
(25, 1, 9, 11, 0, 0, '', '', 7),
(26, 1, 9, 12, 0, 0, '', '', 8),
(27, 1, 9, 13, 0, 0, '', '', 9),
(28, 1, 9, 14, 0, 0, '', '', 10),
(29, 1, 9, 15, 0, 0, '', '', 11),
(30, 3, 10, 0, 13, 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `side_banner`
--

CREATE TABLE `side_banner` (
`id` int(11) NOT NULL,
  `side_banner_name` varchar(200) NOT NULL,
  `side_banner_image` varchar(200) NOT NULL,
  `priority` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `side_banner`
--

INSERT INTO `side_banner` (`id`, `side_banner_name`, `side_banner_image`, `priority`, `updated_at`) VALUES
(1, 'grtg', 'b1.jpg', 3, '2015-04-30 10:23:26'),
(6, 'Sad', '2-a-002-001-00.jpg', 0, '2015-05-08 09:59:04'),
(3, 'edfwe', 'd7.jpg', 2, '2015-04-30 10:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `priviledge` int(1) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`, `priviledge`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Editor SPAR Nigeria', 'editor@spar.com', '$2y$10$OgnriE06VWGyHAaqgoOMjekDmmUOBhVapEhIKEveVStOTn13.crE.', 'editor@spar.com', 2147483647, 0, '', '2015-05-08 06:01:03', '0000-00-00 00:00:00'),
(6, 'Admin SPAR Nigeria', 'admin@spar.com', '$2y$10$Tc0.nU6itR.inQZhKOKmqu.L5fCOPM0IGYGuXTHxyQdv2diD.aJbe', 'admin@spar.com', 1234567891, 1, '', '2015-05-08 06:01:19', '2015-05-08 06:01:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfront_recipes`
--
ALTER TABLE `addfront_recipes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel_items`
--
ALTER TABLE `carousel_items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_deals`
--
ALTER TABLE `homepage_deals`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mid_banner`
--
ALTER TABLE `mid_banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_sidebar_items`
--
ALTER TABLE `page_sidebar_items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_side_banner`
--
ALTER TABLE `page_side_banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_products`
--
ALTER TABLE `related_products`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_recipes`
--
ALTER TABLE `related_recipes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebars`
--
ALTER TABLE `sidebars`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_items`
--
ALTER TABLE `sidebar_items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `side_banner`
--
ALTER TABLE `side_banner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfront_recipes`
--
ALTER TABLE `addfront_recipes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `carousel_items`
--
ALTER TABLE `carousel_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `homepage_deals`
--
ALTER TABLE `homepage_deals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mid_banner`
--
ALTER TABLE `mid_banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `page_sidebar_items`
--
ALTER TABLE `page_sidebar_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_side_banner`
--
ALTER TABLE `page_side_banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `related_products`
--
ALTER TABLE `related_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `related_recipes`
--
ALTER TABLE `related_recipes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sidebars`
--
ALTER TABLE `sidebars`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sidebar_items`
--
ALTER TABLE `sidebar_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `side_banner`
--
ALTER TABLE `side_banner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
