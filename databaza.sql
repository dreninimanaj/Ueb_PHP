-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2024 at 09:23 PM
-- Server version: 10.5.23-MariaDB-0+deb11u1
-- PHP Version: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `first_last` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `steam_username` varchar(100) NOT NULL,
  `discord` varchar(100) NOT NULL,
  `checkbox1` tinyint(1) NOT NULL DEFAULT 0,
  `checkbox2` tinyint(1) NOT NULL DEFAULT 0,
  `checkbox3` tinyint(1) NOT NULL DEFAULT 0,
  `komenti` varchar(255) DEFAULT NULL,
  `registered` date DEFAULT NULL,
  `days_since_registration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `number`, `first_last`, `grade`, `steam_username`, `discord`, `checkbox1`, `checkbox2`, `checkbox3`, `komenti`, `registered`, `days_since_registration`) VALUES
(81, 'A1-01', 'Raul Mercedes', 'Kolonel', 'TIGRI', 'origami_xk', 0, 0, 0, NULL, NULL, NULL),
(86, 'C1-41', 'Speci BLum', 'Rreshter', 'SpeciBLum', 'speciblum', 0, 0, 0, NULL, NULL, NULL),
(92, 'A1-02', 'Eris Berisha', 'Kolonel', '3ris', 'ERIS#1223', 0, 0, 0, NULL, NULL, NULL),
(93, 'A1-04', 'Night Virus', 'Kolonel', 'NightVirus', 'NightVirus#3111', 0, 0, 0, NULL, NULL, NULL),
(99, 'D2-86', 'Gent Pehlivani', 'Oficer', 'GX.EnT ', 'genttox', 0, 0, 0, NULL, NULL, NULL),
(100, 'A1-03', 'Zenel Apalluqi', 'Kolonel', 'kinezzi', 'kinezzi', 1, 0, 0, NULL, NULL, NULL),
(114, 'C1-59', 'Tripzzy GG', 'Rreshter', 'Tripzzy', 'Tripzzy', 0, 0, 0, NULL, NULL, NULL),
(128, 'D1-76', 'Rogest Shala', 'Oficer', 'r0gest', 'flame9999', 0, 0, 0, NULL, NULL, NULL),
(140, 'C1-26', 'Trillin Shepherd', 'Rreshter', 'test', 'test', 0, 0, 0, NULL, NULL, NULL),
(141, 'A1-05', 'Qaush Apalluqi', 'Kolonel', 'qaushApalluqi', 'pl4k1', 0, 0, 0, NULL, NULL, NULL),
(143, 'B1-32', 'Bobi Anglia', 'Major', 'bobi', 'bobi33', 0, 0, 0, NULL, NULL, NULL),
(145, 'D1-12', 'Gerald Deshiri', 'Oficer', 'gerald', 'gerogero', 1, 1, 0, NULL, NULL, NULL),
(146, 'C1-93', 'Envi Medi', 'Rreshter', 'enviii', 'envi', 1, 0, 0, NULL, NULL, NULL),
(149, 'B1-05', 'Plep Gardhi', 'Kapiten', 'plep', 'g3ntiiiiiiii', 0, 0, 0, NULL, NULL, NULL),
(151, 'D1-51', 'CuniGush Pllumi', 'Oficer', 'K2smokeyyy', 'p9rei', 0, 0, 0, NULL, NULL, NULL),
(152, 'D1-94', 'Digo Gango', 'Oficer', 'digobosi', 'digobosi', 0, 0, 0, NULL, NULL, NULL),
(153, 'D1-62', ' Donat Kaçiu', 'Oficer', 'LupixX', 'lupixx.', 0, 0, 0, NULL, NULL, NULL),
(158, 'E1-78', 'Bush Antidroga', 'Kadet', 'Bushilac', 'bushilac1', 0, 0, 0, NULL, NULL, NULL),
(159, 'E1-82', 'DanielDjali', 'Kadet', 'DanielDjali', 'danieldjali', 0, 0, 0, NULL, NULL, NULL),
(160, 'E1-71', 'Adnan Piliqi', 'Kadet', 'Albin Kurti', 'c63speekalm1r', 0, 0, 0, NULL, NULL, NULL),
(161, 'D1-69', 'Black Dolly', 'Oficer', 'eljus 4', 'black_eljus', 0, 0, 0, NULL, NULL, NULL),
(162, 'E1-97', 'Zef Deda', 'Kadet', 'UJKU46', 'ujku46', 0, 0, 0, NULL, NULL, NULL),
(163, 'E1-58', 'Edi Rama', 'Kadet', 'fuk u', 'zzniijozz_78873', 0, 0, 0, NULL, NULL, NULL),
(164, 'E1-85', 'Lucky Luciano', 'Kadet', 'Lucky', 'luckyluciano3928', 0, 0, 0, NULL, NULL, NULL),
(165, 'E1-66', 'Frilex Musteqja', 'Kadet', 'Rynx', 'rynxx1', 0, 0, 0, NULL, NULL, NULL),
(166, 'E1-46', 'Erduan Avdullahu', 'Kadet', 'qaj qe qon veq ferrka', 'erdiontop', 0, 0, 0, NULL, NULL, NULL),
(167, 'E1-68', 'Arlind Frz', 'Kadet', 'TALOQELA', 'arlindferizi', 0, 0, 0, NULL, NULL, NULL),
(168, 'E1-22', 'Zeqo Pilafi', 'Kadet', 'zeqopilafi', 'zeqopilafi', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `officer_name` varchar(255) NOT NULL,
  `cadet_name` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `behavior` int(11) NOT NULL,
  `stops` int(11) NOT NULL,
  `communications` int(11) NOT NULL,
  `submission_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `officer_name`, `cadet_name`, `experience`, `behavior`, `stops`, `communications`, `submission_time`) VALUES
(2, 'D2-15 Klajdi Cenaj', 'E1-44', 'Vleresimi im per suejf luginen esht i knaqshem duke par ecurin e tij dhe gjerat qe do te mesoj dhe ka vullnet per punen e policis.Duhet pak te mesoj kodet por si fillim i tij si grada e par e policis kodet me te rendesishme si pas mendimit tim i ka parasysh si psh:kur hyn ne detyr kur del prej detyre kur esht ndjekje te nje veture etj etj.Un ket koleg do vazhdoj ta suportoj me aq mundsi sa do te kem ne maksimum pasi shumicen e rasteve esht kolega vetem qe marrr me patrullu se e shof qe esht i vullnetshem pe te mesuar .Faleminderit;.', 4, 3, 5, '2023-09-28 20:37:50'),
(3, 'D2-15 Klajdi Cenaj', 'E1-72', 'Vleresimi im per drilon bela:Eshte person qe ja ka pak a shum iden se si uniforma e policis e ka per detyr te sherbeje.Me drilon 2 3 ditet e fundit me ka pelqyer shum me zgjedhjet qe ben gjat orarit detyres sjelljen ndaj qytetareve edhe si cdo kadet i ri ne detyr duhet me ju perkushtu pak kodeve po me gjithate esht mir kodet me te rendesishme i ka mesuar duke degjuar tjeret dhe duke i lexuar ato.', 4, 3, 5, '2023-09-28 22:34:25'),
(4, 'D2-15 Klajdi Cenaj', 'E1-92', 'Vleresimi im per beratim:Berati ka vullnet dhe deshire shum qe tja ket sa do pak iden rregullave dhe sendeve te uniformave blu.Ne i japim maksimumin ton qe atit mos ti ngelet asnje lloj pikpyetje ne koken e tij duke ja shuar me pergjigjet tona sa me profesionale.Beratin e kemi ven ne disa pika ku kemi ber ndalim tveturave di te sillet mire me qytetaret nuk ngutet me vendimet qe merrr por dhe ky si cdo kadet i ri si shumica e kadetave ka problem pak me kodet por besoj qe do ti msoj sa me shpejt tjet e mundur edhe nga ana jon te marri ate qe meriton.', 3, 3, 5, '2023-09-28 22:38:35'),
(5, 'D2-47 Plep Gardhi', 'E1-72', 'Un si zyrtar policor i departamentin policor Matrix Police gjate patrullimit me kete kadet kam kaluar nje kohe shume te mire. eshte normale  se mund te kryej ndonje gabim por jane shume te rralle nuk eshte ende i perkryer 100% por 80% ne rastet qe ai dalin te sukseshme gjithashtu edhe sjellja me qytetar eshte mahnitese nuk del nga vetja  pra mundohet te jap maximumin e tij gjithashtu mos harrohet te ceket ne procesim nuk ka problem. eshte nje plus pasi qe per personin ne fjale nuk eshte nje person i cili ka shume eksperienc si PD por prap se prap ai eshte nje kadet me i vlersuar se tjeret gjithashtu aktiviteti i tij ne detyr eshte jashtzakonisht i mire kundrej kadetave tjer \nUn si D2-47 mendoj se personit ne fjale E1-72 i duhet edhe pak pune qe te arrij te jet nje officer i mire por gjithsesi mendoj se duhet te vihet ne prove para gradimit te tij \nPersoni ka nje talent si Police dhe eshte nje polic kreativ dhe i gjithanshem vetm se kam 1 verejtje e cila eshte 10-80 nuk eshte shume i mire me ngasjen e makines por ne te tjerat eshte nje polic i mire (ne pergjithesi)', 3, 5, 5, '2023-09-28 23:01:10'),
(7, 'D2-96 Leonard Bajraliu', 'E1-89', 'Pas nje kohe me Kadetin E1-89 Yll Broqi munda qe ta vrej se ai meriton nje gradim ai pati sjellje te mir dhe ishte i mir ne vozitje por kishte nevoj qe te mesoj edhe pak kodet por ne pergjithesi ai esht mir.', 4, 4, 5, '2023-10-02 16:27:00'),
(8, 'D2-96 Leonard Bajraliu', 'E1-89', 'Pas nje kohe me Kadetin E1-89 Yll Broqi munda qe ta vrej se ai meriton nje gradim ai pati sjellje te mir dhe ishte i mir ne vozitje por kishte nevoj qe te mesoj edhe pak kodet por ne pergjithesi ai esht mir.', 4, 4, 5, '2023-10-02 16:27:00'),
(9, 'A1-03 Night Virus', 'E1-56', 'Shum i sjellshem. i perqendruar gjat detyres dhe shum intelegjentm, i njejti gjat 10-11 arriti nje not mbi mesatearen per mendimin tim.', 3, 5, 5, '2023-10-02 23:05:15'),
(10, 'A1-03 Night Virus', 'E1-34', 'me te njejtin kom partullu sot dhe e kom pa duke patrullu me kolegen offc, gjat patrullimit i njejti kishte sjellje te Shkelqyrer gjat gjith kohes por momentin qe kolegu ne fjal ishte duke vozitur veturen me nje offc tjeter ka mbrri mesataren gjat 10-80, kishte problem me distancen me njesit tjera por prap e ka mbrri mesataren', 3, 4, 4, '2023-10-02 23:07:35'),
(11, 'D2-86 Gent Pehlivani', 'E1-34', 'I perkushtuar ne detyr i njejti kishte sjellje te shkelqyer tek lojtaret gjat 10 80 kishte nje vozitje te mire mbante distanc mesatare me njesit tjera po ashtu ishte tip komunikativ.', 4, 4, 5, '2023-10-02 23:13:53'),
(12, 'A1-04 Zenel Apalluqi', 'E1-41', 'I njejti eshte i mire si polic edhe ne aspektin e komunikimit edhe i din kodet shume mire por qe ka fjale te shpeshta qe i terhiqet verejtja e te cilat i perdor ne radio po ashtu nuk flet shume me gjase se mikrofonin e ka te demtuar gje qe e thot edhe ne radio por ne komunikime dhe 10-11 eshte i mire.', 2, 2, 5, '2023-10-04 21:13:06'),
(13, 'D1-72 Drilon Bela', 'E1-75', 'me personin ne fjale qka ekom pas si kadet afersisht ni ore i njejti konfiskon sende pa e pyt Officerin,Gjithashtu i njejti me vlersim me poena per Kode te komunikimit ishte 1 injejti hyri pa thene 10 41 nuk edijke as ni kode ', 3, 1, 2, '2023-10-05 17:13:27'),
(14, 'A1-03 Night Virus', 'E1-99', 'I njejti ka qen gjat patrullimit ka qen shum vigjilent, i pergaditur fizikisht, dhe i perqendruar ne thirrjet.', 3, 4, 5, '2023-10-07 18:53:06'),
(15, 'A1-03 Night Virus', 'E1-75', 'I njejti gjat patrullimit ka qen shum is jellshem dhe i shkelqyer me qytetaret, po ashtu shum i kujdesshem gjat thirrjeve qe vijn', 4, 3, 5, '2023-10-07 18:54:34'),
(16, 'A1-03 Night Virus', 'E1-43', 'I njejti ka qen i perqendruar gjat patrullimeve po ashtu po thuajse i shkelqyer ne vozitje', 3, 3, 5, '2023-10-07 18:55:47'),
(17, 'A1-04 Zenel Apalluqi', 'E1-99', 'Personi ne fjale eshte shume aktiv ne Detyre dhe eshte i pergjegjeshem per punen fjale pak e pune shume po ashtu i njejti eshte i afte ne qdo pozite.', 4, 4, 5, '2023-10-08 19:31:34'),
(18, 'D2-96 Leonard Bajraliu', 'E1-99', 'Personi ne fjal eshte i mir por i nevojiten qe te mesoj kodet dhe te persmisohet pak ne 10-11,10-80', 3, 2, 4, '2023-10-08 19:42:14'),
(19, 'A1-04 Zenel Apalluqi', 'E1-43', 'Personi ne fjale eshte shume i mire me kode dhe etiken e radios qe e respekton ne maximum eshte i qete dhe shume i sjellshem ndaj kolegeve e sidomos ndaj gradave me te larta i njejti shpresoj te jete i ngritur ne detyre qe te jete ne patrullim krah neve me patrull te tij', 4, 5, 5, '2023-10-08 19:43:21'),
(20, 'D2-47 Plep Gardhi', 'E1-99', 'Patrollimi me E1-99 nuk shkoj me sukses pasi qe cdo urdher qe ju jepke nga un ai nuk kishte mundesi qe ta zbatoj pasi kishte mangesi ne cdo akt qe ai kryen ai gjithashtu nuk ishte futur ne radio te discordit derisa D2-96 e pa dhe me tregoj gjtihashtu E1-99 ju dha per detyr qe ta merrte nje 10-11 bne dore dhe ta menaxhoj ne menyren me te mire te mundshme por fatekeqsisht kjo deshtoj pasi qe E1-99 kishte mangesi ne pozicionim te 10-11 kishte shume mangesi ne kode gjithashtu nuk i dike rregullat baze te cilat jane mesyuar ne trajnimet e kadetave. gabimi fatal qe E1-99 beri ishte ku  nje 10-26 deklaroj se nuk kishte ne posedim kart identifikimi dhe un 4 5 her ja ceka ti e din menyren se si zgjidhet ky rast pasi 2 10-26 tjere i procesova une ku nuk kishin kart identifimi por mesa duket se E1-99  nuk kishte mendjen gjithsesi edhe pse une si C1-47 ja cweka se duhet te merren shenjat e gishtave per te identifijkuar se kush eshte ai 10-26 E1-99 perseri vazhdoj me avazin e tij dhe ja kontrolloj direkt karten e identifikim pa e pyetur ose pa treguar asgje edhe pse ju cek shume here se personi nuk ka kart identifimi ai perseri vazhdoj tja kontrolloj ato dhe sjellja e tij me qytetaret eshte shume e vrazhdes pasi qe E1-99 nuk ju permbahet dot provokimeve E1-99 i duhet ende kohe per te kaluar ne nje officer pasi qe nese E1-99 del ne patrollim i vetem ai ka 95% mundesi qe te bej gabime gjate patrollimit te tij pasi ai ka munges te informatave se si duhet nje polic te kryej detyren e tij ka edhe disa gjera te tjera por mendoj se me ndryshimin e kohes do ti permisoj andaj dhe nuk po i cek por E1-99 ka nevoje ende per te mesuar rreth policise dhe se si duhet ai te veproje ne raste te ndryshme.', 1, 1, 2, '2023-10-09 16:39:29'),
(21, 'D2-96 Leonard Bajraliu', 'E1-43', 'Personi ne fjale eshte mir me te gjitha por i  nevojiten praktika ne Ndjalje dhe vozitje por gjith ashtu ne te tjerat esht mir.\r\n', 3, 4, 4, '2023-10-10 15:23:30'),
(22, 'D2-96 Leonard Bajraliu', 'E1-99', 'Personi E1-99 duhet qe te permisohet ne 10-11 { pozicionim} dhe komsat gjat 10-80 ne vozitje eshte mir sa i perket kodeve nuk i perdor aq shum sjellja e tij esht shum e mir me qytetar.', 2, 2, 4, '2023-10-10 15:52:36'),
(23, 'D1-56 Brooklyn Duz', 'E1-43', 'Kadeti Erion Lika nuk perputhet me punen e policit vecmash dit kodet as nje pergjegjesi nuk permban gjithashtu nuk zbaton urdhrat e gradave me te larta .', 1, 3, 1, '2023-10-10 19:19:28'),
(24, 'D1-92 Cekja Beratit', 'E1-99', 'Ka Qen super mir me ndaljet e trafikut e kam len te voziz ka qen mire me kodet e komunikim eshte mire ', 5, 4, 4, '2023-10-12 20:58:30'),
(29, 'D2-15 Klajdi Cenaj', 'E1-43', 'kadeti erion duhet me vazhdu akoma sepse sesht ne ate pozicion qe duhet per tu rrit ngrad gjithashtu duhet me majt qendrim policor mos me u shkel nga qytetaret ose ta ulin qytetare por pardje mka pelqyer ne dy raste qe ishim duke ndjek persona esht shum i vemendshem dhe per nje mom i humbet nga syt por erioni i gjeti perseri dhe per kete gje me pelqen', 3, 2, 4, '2023-10-14 09:14:54'),
(30, 'D1-34 Rejdi Demiri', 'E1-76', 'Shum i komunikushem | Pranon urdherat | I gatshem per te then kodet ', 3, 5, 5, '2023-10-15 22:48:53'),
(31, 'D1-41 Speci BLum', 'E1-82', 'dulum per nje patrullim te shkurter Erdi ishte shum i qet shum um pelqej e manum ni trafikstop 10-11 shkoj mir per fat te keq nuk munda me nejt ma shum ne detyr me te per shkaqe X ama ne pergjegjesi mir', 1, 2, 4, '2023-10-15 22:57:48'),
(32, 'D1-99 BlixX Petlla', 'E1-76', 'Kadeti ka qene shume\r\ni rregullt ne te gjitha aspektet si me komunikime,ndjekje,qasje me qytetare dhe koleg ,Pres prej tik qe sa ma shoejt te gradohet se ka sukses prej tij', 4, 5, 5, '2023-10-15 23:54:14'),
(33, 'D2-96 Leonard Bajraliu', 'E1-76', 'Personi ne fjal ka qen i mir gjat patrullimit me mua ka pas nje sjellje te mrekullueshme por ka nevoj qe te perserit  edhe pak kodet dhe pozicionimi por gjithashu esht  i mir.', 3, 3, 5, '2023-10-16 17:52:37'),
(34, 'A1-03 Night Virus', 'E1-82', 'me te njejtin kom pas patrullim gjat dites, ishe i sjellshem i dike te gjitha proceduaret e punes vetem kishte nevoj ti mesonte edhe pak kodet', 4, 3, 5, '2023-10-16 18:58:13'),
(35, 'A1-03 Night Virus', 'E1-31', 'me te njjetin me ka ra gjat dites se sotme i njejti ka pas sjen e mir, dhe etiken e kishte te mir mjaftushem', 4, 3, 4, '2023-10-16 18:59:33'),
(36, 'D1-41 Speci BLum', 'E1-31', 'dola pak ne nje patrullim me kadetin ne fjal djalosh i mir pak koke for ka probleme me nervozen ja kisha qygjeru me shku te psikologu ama ne pergjegjesi 7 / 10', 1, 3, 3, '2023-10-16 20:05:53'),
(37, 'D1-99 BlixX Petlla', 'E1-13', 'Ka qen i mire si ke vlersimet me poshte res prej tije shume', 4, 4, 5, '2023-10-16 22:59:01'),
(38, 'A1-01 Raul Mercedes', 'E1-73', 'E njejta ka potencial per arritje por momentalisht ngurron me thirr kode ose me vozit, ka njohuri te shkelqyeshme te kodeve por i mungon vemendja dhe perqendrimi ne disa gjera te njejten kohe sic e kerkon LSPD', 1, 3, 5, '2023-10-17 08:32:36'),
(39, 'D1-43 Erion Lika', 'E1-76', 'ishte shum polic i mir dhe dinte 10-90 kishte dhe jemi ndar te knaqur', 3, 2, 3, '2023-10-17 18:17:35'),
(40, 'A1-04 Zenel Apalluqi', 'E1-31', 'Kadet shume i mire i afte ne te gjitha ku eshte i mire ne radio komunikime e sidomos me sjelljen e tij te qete ne detyre e sjellje shume te mire e sidomos i mire ne pune ekipore shume i afte.', 5, 4, 5, '2023-10-17 19:36:24'),
(41, 'A1-04 Zenel Apalluqi', 'E1-76', 'Personi ne fjale ishte shume i mire gjate patrullimit me te ku i njejti kishte shkruar kodet ne nje leter dhe i kishte msuar shume mire po ashtu kodet te cilat lidhen me njera tjetren i kishte shkruar dhe mesuar shume mire.\r\nPo ashtu i njejti eshte i mire ne etiken e radios sjelljen mes kolegeve dhe me qytetare i afte ne komunikim e shume i ndegjueshem.', 5, 5, 5, '2023-10-17 19:38:57'),
(42, 'A1-04 Zenel Apalluqi', 'E1-73', 'Kadetja ne fjale eshte e mire ne komunikime e turpshme pak punon ne grup mire e respekton tej mase etiken e radios perndryshe eshte nje prej kadeteve qe i meson punet policore shume shpejt e zbaton qdo urdher qe i ipet.', 5, 5, 5, '2023-10-17 21:32:36'),
(43, 'D1-99 BlixX Petlla', 'E1-76', 'Pres prej gradimev trradhes >>Officer', 5, 5, 5, '2023-10-18 07:49:37'),
(44, 'D1-99 BlixX Petlla', 'E1-82', 'Ka te mira qe besoj mun me i ndihmu shume nge gradimet e rradhes!', 4, 3, 5, '2023-10-18 09:15:08'),
(45, 'A1-02 Eris Berisha', 'E1-73', 'Kolegia ne fjale ishte ne rregull sa i perket patrullimit ngecjet e vetme ishin tek radio pasi qe kishte nje lloj \"frike\" te therriste ne radio por vlen te ceket se kodet e komunikimit dhe sjelljet isin te skelqyera.', 3, 5, 5, '2023-10-18 17:26:20'),
(46, 'D1-34 Rejdi Demiri', 'E1-31', 'Eshte i perkushtuar per ta mesuar punen shum mire. Me pelqen fakti qe me qytetaret eshte teper i sjellshem..ka edhe pak nevoj te mesoj kodet eshe comsat e 10-80', 2, 2, 4, '2023-10-18 23:17:46'),
(47, 'D1-34 Rejdi Demiri', 'E1-58', 'Kolega ti te ngasi shum mire makinen ne 10-80 eshte shume i skat (problemi eshte qe nuk di ti japi domaat )ne distance por ka shum nevoj te mesoj kodet( pasi ska qen asnjeher polic) per 10-80 ja jap noten 3 per 10-11 nota 2', 2, 3, 3, '2023-10-18 23:20:10'),
(48, 'D1-99 BlixX Petlla', 'E1-76', 'Ka en ni eksperienc e mir gjate ptrulimit me kadet \r\nArsyet per kto vlersime\r\nKa qen shume i mire ne vozitje ndjekje ndalime etj ju ka perbajtur rregullav dhe muk ka thyer asnje prej tyre \r\n2.Kodet e komunikimit i ka dit perfekt nuk ka pas asni gabim nto \r\n3.Dhe sjellja me qytetare dhe Koleg ka qen shum etike e shkelqyeshme.', 5, 5, 5, '2023-10-19 13:38:04'),
(49, 'D2-15 Klajdi Cenaj', 'E1-76', 'kadeti ne fjal rogest shala ka pas performanc tshkelqyer ne pjesen kur jemi kon patrullim bashk.mesa e kam pyetur ska pas aktivitet te meparshem ne servera tjer gje qe dmth kadeti ka shum deshir me e marr me vullnet kete pun dhe esht shum i gatshem tmbaj dhe pergjegjesi ne shpinen e tij.Me kodet esht ekselent ne krahasim me kadetat e tjer dhe po ashtu disa nga oficerat .', 5, 5, 5, '2023-10-19 13:47:47'),
(50, 'D1-66 Dior Polici', 'E1-31', 'Kadeti E1-31 Esht shum i mir me kode dhe me komunikimet, dhe 10-80/10-11 dhe sjelljen e mir shum.', 5, 5, 5, '2023-10-19 19:15:44'),
(51, 'D1-92 Cekja Beratit', 'E1-31', 'Djali po me duket mire me motivim goxha i sjellshem mu per vete mka pelqy jasht mase noten 10 ja japi :D ', 5, 4, 5, '2023-10-19 23:22:19'),
(52, 'D1-92 Cekja Beratit', 'E1-58', 'Mir shum per mu mir ka qen se ka patrullu me mua kena bo 3 arrestime ka vozit shkelqyer \r\n', 5, 3, 5, '2023-10-20 00:35:51'),
(53, 'D1-66 Dior Polici', 'E1-31', 'Kam pas eksperience shum te bukur me kadetin E1-31, kemi hyr ne detyr prej ores 2:04pm deri ne ora 4:37Pm, kodet shum bukur i din dhe komunikimet teper mir, sjelljen me qytetar dhe me koleg eka shum t mir, ', 5, 5, 5, '2023-10-20 16:38:13'),
(54, 'D2-96 Leonard Bajraliu', 'E1-31', 'Personi ne fjal eshte i mir por i ka disa mangesi si pershembull tek vozitja duhet qe te mesoj edhe pak pozicionimin ne komunikime eshte shum i mir por i nevojiten edhe pak por ne pergjithesi esht mir.', 4, 4, 5, '2023-10-20 17:11:59'),
(55, 'D2-96 Leonard Bajraliu', 'E1-58', 'Personi ne fjal gjat patrullit me mua ka qen mir por i nevojiten dhe disa gjera per ti mesuar si : Te perdor me shum kode ne radio dhe pozicionimi nuk eshte i sakt sa i perket sjelljes esht mir \r\n', 3, 3, 5, '2023-10-21 13:53:41'),
(56, 'D1-66 Dior Polici', 'E1-58', 'E1-58 ka qen kadet i mir dhe i sjellshum me qytetar edhe koleget, komunikimet e mira, po nje gabim te vogel qe merrke koh shum per me procesu nje person, kejt tjera jan neregull, gjat 10-80 dhe 10-11 ka jep komunikime koleges D2-96, mka pelqy si kadet, dhe vozitja e bukur shum, \r\n\r\nNga ora  1:40 PM Deri ne ora 3:00pm !! ', 4, 5, 5, '2023-10-21 15:20:25'),
(57, 'A1-04 Zenel Apalluqi', 'E1-31', 'Nuk eshte patrullimi i pare qe e kam me kadetin ne fjale i cili eshte shum i afte ne secilat puna te zyretareve policore duke u nisur nga 10-11,10-80 kodet sjellja e tij me qytetaret dhe me stafin eshte diqka qe me ka lene nje pike te mire per vleresim te mire te ketij kadeti shpresoj qe te jete krahu un i djathte gjithemon.', 5, 5, 5, '2023-10-21 21:09:44'),
(61, 'A1-01 Raul Mercedes', 'E1-65', 'gcfgfcgfgf', 1, 1, 1, '2024-03-28 23:05:16'),
(62, 'B1-19 Amar Bucki - DOA', 'E1-62', 'Kadeti ishte i vemendshem.Sjellja me qytetaret dhe koleget dhe vozitja ishin fantastike por kadeti duhet te mesoj kodet e komunikimit edhe pak.', 5, 3, 5, '2024-04-01 20:37:14'),
(63, 'B1-19 Amar Bucki - DOA', 'E1-51', 'Kadeti kishte vetbesim dhe ishte i vemendshem.Vozitja e tij dhe komunikimi ishin perfekt,poashtu edhe sjellja me koleget apo qytetaret', 5, 5, 5, '2024-04-01 20:38:53'),
(64, 'D1-93 Envi Medi - DOA', 'E1-51', ' shum kadet i mir din te vozis mir i din shum mir kodet esht i sakt dhe mendoj se do arrij shum si polic', 4, 5, 4, '2024-04-01 21:21:32'),
(65, 'A1-04 Zenel Apalluqi', 'E1-94', 'Kolegu ne fjale edhte i mire me ndaljet (10-11), gjitheashtu ne (10-80).\r\nMe kodet e komunikimit eshte jo keq i di disa bazike por eshte dita e pare e shpresojme qe i meson.\r\nI njejti eshte shume i mire ne komunikime me\r\nKoleget gjitheashtu i sjelleshem me qytetaret.', 4, 3, 5, '2024-04-02 01:42:45'),
(66, 'D1-76 Rogest Shala', 'E1-94', 'Gjate patrullimit me kolegen E1-94 | Digo Gango, kadeti tregoi nje qendrim te duhur si nje zyrtar policie ne NakamaRP. Gjate patrullimit e vetmja gje te cilen e kishte mangesi e kishte qe ishte shum i qet dhe nuk fliste, kjo besoj eshte nga fillimi si polic por besoj se dote punoj ne kete aspekt.', 4, 4, 5, '2024-04-02 23:52:17'),
(67, 'B1-19 Amar Bucki - DOA', 'E1-62', 'Kadeti ishte i vemendshem.Sjelljen me qytetaret dhe koleget e kishte perfekt dhe kodet e komunikimit i ka mesuar me mire.Sa i perket ndaljeve 10-11 ai rrinte ne pozite dhe i gatshem per te assistuar kolegen', 5, 4, 5, '2024-04-03 00:10:35'),
(68, 'D1-76 Rogest Shala', 'E1-62', 'GJate patrullimit se bashku me kolegen Donat KAqiu ka treguar rezultate goxha te mira si nje zyyrtar i ri policor. Kolegu poashtu ishte i shkathet ne detyre si polic. Ai gjithashtu tregoi mjaft njohuri tek kodet e komunikimit. ', 4, 5, 5, '2024-04-03 00:13:45'),
(69, 'A1-02 Eris Berisha', 'E1-94', 'Kolegu ishte shume i vemendshem gjate patrullimit,i njejti kishte vetbesim te mjaftueshem dhe syhapur ne situata te rrezikshme.', 3, 5, 5, '2024-04-03 01:24:43'),
(70, 'A1-04 Zenel Apalluqi', 'E1-78', 'I shpejt ne reagim i mire ne sjellje e zbaton qdo urdher dhe eshte i mire ne komunikime dhe bashkepunim me koleoget.', 4, 4, 5, '2024-04-03 15:55:57'),
(71, 'A1-04 Zenel Apalluqi', 'E1-94', 'Shume i shkathet i shpejt ne reagime i jashte zakonshem ne komunikime i sjellshem jo i ngutshem zbaton urdherat e gradave me te larta dhe eshte i qasshem ne qdo rast dhe shume aktiv.', 5, 5, 5, '2024-04-03 15:57:49'),
(72, 'D1-93 Envi Medi - DOA', 'E1-94', 'digo esht super polic i ka msu kodet shum mir esht i vemendeshem ne punen e tij merito tket grad me te lart shum kadet i fort W', 4, 5, 5, '2024-04-03 19:21:20'),
(73, 'B1-05 Plep Gardhi', 'E1-51', 'Un B1-05 si kapiten i policise se Nakama Roleplay kam kaluar nje patrollim te mrrekullueshem me E1-51 | CuniGush Pllumi. Kadeti kishte njohuri te medhaja si zyrtar policor. Kadeti ishte i mire ne komunikim me koleget e tjere dhe qytetaret E1-51 kishte nje sjellje briliante me cdo person ne qytet ku kjo ndikon shume pozitivisht tek nje zyrtar policor. Anash pozitivitetit E1-51 kishte njohuri te bukura se si duhet kryer puna nga nje zyrtar policor ishte i mire ne kodet e komunikmit ka njohuri per te gjitha kodet dhe gjithashtu ka nje etik bukur te mire ne radio flet ngadale dhe qarte. Un si B1-05 e vlersoj shume kadetin E1-51 per shume arsye : Kodet e komunikimit, etika ne radio, Sjellja me qytetaret dhe koleget tjere, Rrespektim i urdherave nga zyrtaret me grade me te larte policore, Ngasja e makines, Procesimi, Luajtja e nje RP bukur mire. E1-51 e ka mesuar MDT per procesim shum shpejte ku E1-51 ka filluar te procesoj disa kriminel dhe menyra e procesimit eshte ne rregull vetem se shkruajtja e flete raportit duhej permisuar pasi E1-51 nuk fut cdo detaj te duhur qe duhet dhene ne flete raport. Gjithathu un si B1-05 e vecoj kadetin E1-51 nga kadetet tjee pasi i njejti ka pak me shume njohuri nga kadetet e tjere', 4, 5, 5, '2024-04-04 19:55:09'),
(74, 'B1-05 Plep Gardhi', 'E1-62', 'Kadeti kishte nevoje per shume permisime si ne kodet e komnukimit ashtu edhe ne patrollim un si B1-05 mundohesh ta permisoj mirepo verehet se E1-62 ka nevoje per me shume eksperienc ne polici, un si B1-05 Kapiten i Nakama Roleplay nuk mendoj se E1-62 eshte i gatshem qe te gradohet ne graden officer pasi nuk ka aftesi qe te marre situat ne dore nuk eshte nje kadet i gjindshem, ishte pozitive sjellja me qytetaret dhe koleget mirepo kjo nuk eshte e mjaftueshme se E1-62 mun ti vet menaxhoj situatat dhe te dale ne vetpatrollim si officer. Nuk la perhstypje te mire so kadet qe te gradohet ne officer ka munges te njohuris se zbatimit te detyres si polic. Ka nevoje per permisin ne cdo aspekt si ne procesim ashtu edhe ne 10-80,10-11, ne kode te komunikimit e keshtu me rradhe', 2, 1, 5, '2024-04-05 00:05:35'),
(75, 'C1-26 Trillin Shepherd - DOA', 'E1-94', 'Kadeti me begjin E1-94 I Digo Gango ka treguar nje sjellje shum te mir si me qytetaret e qytetit ashtu edhe me poleget qe jan sa grada e tije po ashtu dhe me gradat me te larta kadeti ne fjale mban gjithmone paster radion dhe kodet i thote shum te pasterta ne radio nuk ngutet ne raste ose ne ndonje gje tjeter kur ben ndonje 10-11 ka eksperienc si me folur me qytearet kur eshte ne 10-80 din se me komuniku ne radio nuk merr urdhera ne kryevete pa marre leje nga grada me e lart qe eshte per momentin ne radio.', 5, 5, 5, '2024-04-05 14:27:35'),
(76, 'A1-03 Night Virus', 'E1-94', 'I njejti eshte fjal pak gjat patrullimit kishte sjellje te mir me qytetaret kodet i dike shum mir ', 4, 5, 5, '2024-04-05 19:28:59'),
(77, 'D1-94 Digo Gango', 'E1-69', 'Ishte mir ka shum vend per permirsim. fliste shum. me kolegat ishte i rrespektushem por thjesht radion se hiqte nga dora ', 3, 2, 3, '2024-04-11 21:20:42'),
(78, 'A1-04 Zenel Apalluqi', 'E1-78', 'I mire e komunikime e kam lene te vozis dhe te merret me kodet komunikimet 10-11 10-80 vete i kuptueshem e respekton qdo urdher te marre dhe i afte te pranoj qdo thirrje.', 5, 5, 5, '2024-04-14 16:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `rowsx`
--

CREATE TABLE `rowsx` (
  `id` int(11) NOT NULL,
  `row` varchar(255) DEFAULT NULL,
  `done` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `rule_id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`rule_id`, `section`, `content`) VALUES
(1, '1.0 Transferimi ne njesi speciale', '- Per te bere transformimin ne Moto Unit:\n1. Duhet te jete se paku 2 (dy) njesi me veture + ti.\n2. Duhet te kerkohet leja nga kolega qe ka graden me te larten dhe eshte ne detyre, nese jeni njejt atehere nese plotesohet kushti 1 dhe 3 mundesh me terhek.\n3. Nuk guxojne te jene me shume se 2 moto te njejten kohe ne detyre (MOTO-1, MOTO-2) nese doni te terhekni me shume se 1 moto duhet te plotesohet kushti 1 por x2, pra ne kete rast duhet te jene ne detyre 4 oficere plus ju.\n4. E lajmeron me kohe ne radio transformimin ne MOTO pra A1-01 transformimi MOTO-1 (preferohet nderrimi emrit ne discord - jo e obliguar)\n\n- Per te bere transformimin ne Speed Unit:\n1. Duhet te jete se paku 1 (nje) njesi me veture + ti.\n2. Duhet te kerkohet leja nga kolega qe ka graden me te larten dhe eshte ne detyre, nese jeni njejt atehere nese plotesohet kushti 1 dhe 3 mundesh me terhek.\n3. Nuk guxojne te jene me shume se 2 speedunit te njejten kohe ne detyre (SPEED-1, SPEED-2) nese doni te terhekni me shume se 1 speedunit duhet te plotesohet kushti 1 por +2, pra ne kete rast duhet te jene ne detyre 3 oficere plus ju.\n4. E lajmeron me kohe ne radio transformimin ne SPEED pra A1-01 transformimi SPEED-1 (preferohet nderrimi emrit ne discord - jo e obliguar)\n\n- Per te bere transformimin ne K9 Unit:\n1. Duhet te jete se paku 2 (dy) njesi me veture + ti.\n2. Duhet te kerkohet leja nga kolega qe ka graden me te larten dhe eshte ne detyre, nese jeni njejt atehere nese plotesohet kushti 1 dhe 3 mundesh me terhek.\n3. Nuk guxojne te jene me shume se 2 K9 te njejten kohe ne detyre (K9-1, K9-2) nese doni te terhekni me shume se 1 K9 duhet te plotesohet kushti 1 por x3, pra ne kete rast duhet te jene ne detyre 6 oficere plus ju.\n4. E lajmeron me kohe ne radio transformimin ne K9pra A1-01 transformimi K9-1 (preferohet nderrimi emrit ne discord - jo e obliguar)\n\n- Per te bere transferimin ne D.O.A\n1. Duhet te jete se paku 2 (dy) njesi me veture + ju, minimum duhet te jeni 2 zyrtare per te filluar me D.O.A (1 njesi).\n2. Duhet te kerkohet leja nga kolega qe ka graden me te larten dhe eshte ne detyre, nese jeni njejt atehere nese plotesohet kushti 1 dhe 3 mundesh me terhek.\n3. Nuk guxojne te jene me shume se 5 njesi D.O.A te njejten kohe ne detyre (D -numri, D-numri) nese doni te terhekni me shume se 1 njesi D.O.A (1 njesi nenkupton 2 zyrtar ne nje veture) duhet te plotesohet kushti 1 por x3, pra ne kete rast duhet te jene ne detyre 6 oficere plus ju.\n4. E lajmeron me kohe ne radio transformimin ne DOA pra A1-01 transformimi D -numri (preferohet nderrimi emrit ne discord - jo e obliguar)\n\n- Per te bere transformimin ne AIR Unit:\n1. Duhet te jete se paku 5 (nje) njesi me veture + ti.\n2. Duhet te kerkohet leja nga kolega MBIKEQYRES.\n3. Nuk guxojne te jene me shume se 1 AIR-Unit ne detyre ne te njejten kohe.\n4. E lajmeron me kohe ne radio transformimin ne AIR Unit pra A1-01 transformimi AIR-1 dhe duhet te keni nje koleg me vete patjeter si PAO-1(preferohet nderrimi emrit ne discord - jo e obliguar)\n '),
(3, '2.0 Temporary Members (Pjestaret e Perkohshem)', '- Kjo pozite mund ti jepet gjithesecilit qytetare nese besohet se ai ka prespektive dhe njohuri ne lidhje me Policine e Shtetit, kjo pozite mund te jepet vetem nga zyrtaret me graden KOLONEL\r\n2.1 Pjestaret ne kete njesi do te jene te OBLIGUAR te jene ne detyre vetem ne rast se ka nje Mbikeqyres ne detyre e qe mund ti marre ata me vete.\r\n2.3 Pjestaret ne kete njesi mund te qendrojne ne kete vend ne kohe te pacaktuar.\r\n'),
(4, '3.0 Largimi nga puna', ' 3.1 Pjestari i cili merr 3 verejtje me shkrim ne databaze largohet nga puna.\n 3.2 Pjestari i cili kryen ndonje veper penale e jo kundervajtje si ne si jashte detyres largohet nga puna pa ndonje verejtje.\n 3.3 Pjestari i cili merr pjese ne Policine e ndonje qyteti tjeter, largohet nga puna pa ndonje verejtje.\n 3.4 Zyrtari policor me graden \'Kadet\' largohet nga puna nese nuk arrin te gradohet per 31 dite nga dita e pranimit zyrtar ne detyre.'),
(5, '4.0 Impound i veturave ', '4.1 Jeni te obliguar gjithmone qe ta lejoni pronarin ta terhek veturen e tij nga impound, kjo behet duke e shtypur butonin checkbox \'Lejo pronarin ta nxjerre\' pasi te prekni impound.\r\n   4.2 Impound i vetures se parkuar ne vend te gabuar duhet te bllokohet per 1 ore nga nxjerrja e saj dhe cmimi vendoset 5000 dollare.\r\n   4.3 Impound i vetures shoferi i se ciles nuk posedon patente shoferi bllokohet per 4 ore nga nxjerrja e saj dhe cmimi vendoset 10,000 dollare.\r\n   4.4 Impound i vetures shoferi apo pasagjeret e seciles kane shkaktuar kundervajtje ne trafik (shpejtesi, semafor, etj) bllokohet per 1 ore nga nxjerrja e saj dhe cmimi vendoset 6,800 dollare.\r\n   4.5 Impound i vetures shoferi apo pasagjeret e se ciles kane    marre pjese drejtperdrejte apo terthorazi ne kryerjen e ndonje vepres penale bllokohet per 12 orë nga nxjerrja e saj dhe cmimi vendoset 20,000 dollare.\r\n   4.6 Impound i vetures shoferi i se ciles eshte ne kerkim policor per vepra penale bllokohet per 3 dite nga nxjerrja e saj dhe cmimi vendoset 35,000 dollare.\r\n   4.7 Impound i vetures shoferi i se ciles kryen sulme terroriste, sulme ne njerez, apo protesta masive duke e bllokuar qarkullimin dhe prishur rendin me te, te bllokohet nga nxjerrja per 7 dite dhe ti vendoset cmimi prej 50,000 dollare.\r\n'),
(6, '5.0 Hyrja ne detyre (10-41)', '5.1 Ndalohet hyrja ne detyre i vetem nese jeni ne graden \'Kadet\' dhe nuk jeni te shoqeruar nga nje Officer ose me larte.\r\n5.2 Ndalohet hyrja ne detyre nese eshte dhene urdher i tille nga pjesetaret e Komandes ne ndonje kanal ne discord apo ne loje.\r\n5.3 Lejohet hyrja ne detyre cdo kohe nese nuk eshte e ndaluar me ndonje vendim specifik.'),
(7, '6.0 Perdorimi dhe etika e radios', '6.1 Jeni te obliguar te kyqeni dhe te qendroni gjate gjithe kohes sa qendroni ne detyre ne RADIO-QENDRA ne discord dhe ne frekuencen 1 te radios ne loje.\r\n6.2 Jeni te obliguar te qendroni mute ne radion ne discord dhe te lajmeroni vetem nese ju behet loja crash (code-0).\r\n6.3 Jeni te obliguar te keni sjellje te shkelqyera, mos te nderhyni dhe ta mbani paster radion.\r\n6.4 Ndalohen bisedat me njeri tjetrin, temat e ndryshme te cilat nuk lidhen me raste aktive apo plane operative.\r\n6.5 Urdheroheni te respektoni urdherin e zyrtarit qe mbane grad me te larte se ju.\r\n6.6 Jeni te obliguar qe kur te kyqeni ne radio ta vendosni begjin tuaj para emrit (shembull: A1-01 | Raul Mercedes).'),
(8, '7.0 Perdorimi i automjeteve', '7.1 Jeni te obliguar te perdorni alarmat dhe sirenen ne rast te intervenimit.\n7.2 Ndalohet perdorimi i panevojshem i alarmave apo sirenes.\n7.3 Vetura e cila e merrni duhet te posedoj alarma ne pjesen e siperme, perveç nese jeni ne ndonje njesi e cila me rregulla te vecanta lejohet.\n7.4 Vetura juaj nuk guxon te kete modifikime shtese te Tire Smoke apo ndonje modifikim i cili e demton imazhin e policise, bumperat apo spoilerat lejohen deri ne nje mase, gjithashtu xhamat e zi jane te lejuar.\n7.5 Vetura juaj duhet te jete ne proporcion te drejte me graden tuaj, pervec nese te aprovohet me leje te vecante nga mbikeqyresi.');

-- --------------------------------------------------------

--
-- Table structure for table `submissions`
--

CREATE TABLE `submissions` (
  `id` int(6) UNSIGNED NOT NULL,
  `numri_begjit` varchar(255) NOT NULL,
  `data_daljes` date NOT NULL,
  `arsyeja` varchar(200) NOT NULL,
  `data_rikthimit` date NOT NULL,
  `aprovuar_nga` varchar(50) NOT NULL,
  `submission_date` date DEFAULT NULL,
  `madeby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','editor','owner') NOT NULL,
  `password_changed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`, `password_changed`) VALUES
(29, 'A1-01 Raul Mercedes', 'raul.mercedes', 'Driton1960@', 'owner', 1),
(33, 'C1-41 Speci BLum', 'speci.blum', 'Canon2018@/', 'user', 1),
(39, 'A1-02 Eris Berisha', 'eris.berisha', 'erisbaba02', 'editor', 1),
(40, 'A1-03 Night Virus', 'night.virus', 'elkos123', 'editor', 1),
(46, 'D2-86 Gent Pehlivani', 'gent.pehlivani', 'genti1234', 'user', 1),
(47, 'A1-04 Zenel Apalluqi', 'zenel.apalluqi', 'altinrexhepi02', 'editor', 1),
(58, 'E1-27 Yll Broqi', 'yll.broqi', 'aaltin3425', 'user', 1),
(61, 'C1-59 Tripzzy Gg', 'tripzzy.gg', 'okari123', 'editor', 1),
(67, 'E', 'e', 'e', 'user', 1),
(74, 'D1-76 Rogest Shala', 'rogest.shala', 'shala.2007', 'user', 1),
(86, 'C1-26 Trillin Shepherd', 'trillin.shepherd', 'Trillin.Shepherd', 'user', 1),
(87, 'TEMP-5 Qaush Apalluqi', 'qaush.apalluqi', '2023qaushapalluqi', 'user', 0),
(88, 'B1-32 Bobi Anglia', 'bobi.anglia', '2023bobi', 'editor', 0),
(90, 'D1-12 Gerald Deshiri', 'gerald.deshiri', 'Gerald2007', 'user', 1),
(91, 'D1-93 Envi Medi', 'envi.medi', 'Envigervi1', 'user', 1),
(93, 'B1-05 Plep Gardhi', 'plep.gardhi', '2020genti2020genti', 'editor', 1),
(95, 'D1-51 CuniGush Pllumi', 'cunigush.pllumi', '2023k2smokeyyy1', 'user', 1),
(96, 'D1-94 Digo Gango', 'digo.gango', 'Albania91', 'user', 1),
(97, 'D1-62  Donat Kaçiu', 'donat.kaçiu', '2023LupixX', 'user', 1),
(102, 'E1-78 Bush Antidroga', 'bush.antidroga', 'gertiotr', 'user', 1),
(103, 'E1-82 DanielDjali', 'danieldjali', 'Danezzz', 'user', 1),
(104, 'E1-71 Adnan Piliqi', 'adnan.piliqi', 'Almirii1', 'user', 1),
(105, 'D1-69 Black Dolly', 'black.dolly', 'Eljus1234.', 'user', 1),
(106, 'E1-97 Zef Deda', 'zef.deda', 'henri2010', 'user', 1),
(107, 'E1-58 Edi Rama', 'edi.rama', '2023fuku', 'user', 0),
(108, 'E1-85 Lucky Luciano', 'lucky.luciano', 'luckyking123', 'user', 1),
(109, 'E1-66 Frilex Musteqja', 'frilex.musteqja', '2023rynx', 'user', 0),
(110, 'E1-46 Erduan Avdullahu', 'erduan.avdullahu', '2023qajqeqonveqferrka', 'user', 0),
(111, 'E1-68 Arlind Frz', 'arlind.frz', 'luli321', 'user', 1),
(112, 'E1-22 Zeqo Pilafi', 'zeqo.pilafi', '2023zeqopilafi', 'user', 0);

-- --------------------------------------------------------

--
-- Table structure for table `verejtje`
--

CREATE TABLE `verejtje` (
  `id` int(11) NOT NULL,
  `numri_begjit` text NOT NULL,
  `arsyeja` text NOT NULL,
  `nenshkruar_nga` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verejtje`
--

INSERT INTO `verejtje` (`id`, `numri_begjit`, `arsyeja`, `nenshkruar_nga`, `data`) VALUES
(1, 'E2-61', 'test', 'A1-01 Eden Dobra', '2023-03-06'),
(2, 'E2-61', '789', 'A1-01 Eden Dobra', '2023-03-06'),
(3, 'E2-61', '784', 'A1-01 Eden Dobra', '2023-03-06'),
(4, 'E1-19', 'test', 'A1-01 e', '2023-09-03'),
(5, 'E1-61', 'sQSQsQS', 'A1-01 e', '2023-09-15'),
(6, 'D2-96', 'Keqperdorim i armes se zjarrit.\r\nReferuar evidences se bashkangjitur ju jeni shpallur fajtor nga ekipi i Komandes se policise.\r\nArsyetim:\r\nJu as nuk e keni evidentuar e as ndaluar personin por direkt keni godit ne gomat e tij, se pari ka qene dashte te ndalohet, evidentohet e pastaj te merren masa nese i njejti eshte kryes i ndonje vepres penale.', 'A1-01 Raul Mercedes', '2023-10-03'),
(7, 'C2-28', 'Mos perdorim i databazes, sipas rezultateve i njejti nuk eshte kyqur asnje here te vetme ne databaze te policise, qofte per te dhene vlersim apo per nevoja policore.', 'A1-01 Raul Mercedes', '2023-10-09'),
(8, 'D1-92', 'Transferimi ne SPEED Unit pa plotesuar kushtet e dhena ne rregullore te policise(80%), patrullim ne zona te rrezikshme pa njesi adekuate dhe te specializuara (20%).\r\nPerqindja tregon se sa eshte margjina e gabimeve qe kane rezultuar me kete verejtje.', 'A1-01 Raul Mercedes', '2023-10-12'),
(9, 'D1-56', 'Korruptim', 'A1-02 Eris Berisha', '2023-10-16'),
(10, 'D1-92', 'Patrullim me automjet liveryt e te cilit nuk perputhen me rregullat e policise.', 'A1-02 Eris Berisha', '2023-10-20'),
(11, 'C1-41', 'Transferimi ne njesi speciale ne kundershtim me rregulloren e policise.', 'A1-01 Raul Mercedes', '2023-10-22'),
(12, 'D1-31', '10-80 Pit masiv deri ne rrotullimin e vetures pa kontroll dhe si mos te ishte i trajnuar per pit', 'A1-04 Zenel Apalluqi', '2023-10-24'),
(13, 'D1-99', 'testim 1-', 'A1-03 Night Virus', '2027-01-13'),
(14, 'B1-05', 'Mos bindje e urdherit te zyretarit policore.\r\n\r\n-Kolegu ne fjale ka sjellje te ashper dhe shume arrogante ndaj qytetareve ku ndaj te njejtit i jepet nje urdher qe te zbatoj ku i njejti kundershon disa here me nje ton me te larte dhe te pa nevojshem. ', 'A1-04 Zenel Apalluqi', '2024-03-07'),
(15, 'A1-03', 'Prangos personin e len ne veture brenda stacionin dhe del 10-42 dhe nuk raporton qe njesit tjera te merren me procesim.', 'A1-04 Zenel Apalluqi', '2024-03-11'),
(16, 'D1-93', 'Jo aktivitet ne Polici', 'A1-04 Zenel Apalluqi', '2024-03-28'),
(17, 'D1-12', 'Edhe pse merr urdher nga zyrtaret me grade me te larte policor qe te mos marr vendime nga vetja ai gjithsesi e ben, gjithashtu perdor fjale banale ne radio', 'B1-05 Plep Gardhi', '2024-04-01'),
(18, 'D1-12', 'Nuk hyn ne radio perderisa eshte ne patrollim ku e gjithe patrulla eshte ne procesim edhe pse merr urdher nga zyrtar me grade me te larte policore dhe si shkak i ksaj shkaktohet 10-33 ku humbin jete 2 officer\r\n', 'B1-05 Plep Gardhi', '2024-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rowsx`
--
ALTER TABLE `rowsx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verejtje`
--
ALTER TABLE `verejtje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `rowsx`
--
ALTER TABLE `rowsx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `verejtje`
--
ALTER TABLE `verejtje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
