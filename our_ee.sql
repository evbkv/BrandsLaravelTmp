-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2023 at 02:59 PM
-- Server version: 5.7.27-30
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `photo` tinytext NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `photo`, `link`, `description`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Skype', 'skype.png', 'https://skype.com/', 'Skype on IP-kõnedel (VoIP) põhinev internetitelefoni P2P-võrgustik. Skype\'i kasutajad saavad omavahel rakenduse kaudu tasuta rääkida. Skype\'il on ka tasuline teenus, mis võimaldab kasutajatel helistada tavatelefonidele (SkypeOut) ning võtta vastu kõnesid tavatelefonidelt (SkypeIn) ja kõneposti. Samuti saab saata SMS-e ning pidada videokõnesid.', 1, '2023-01-10 00:00:00', '2023-01-20 00:00:00', NULL),
(2, 'Tallink', 'tallink.png', 'https://tallink.com/', 'Tallink Grupp on Eesti laevanduskontsern, mis pakub minikruiise, reisijate- ja ro-ro-kaubaveo teenuseid Läänemerel.', 1, '2023-01-12 00:00:00', '2023-01-20 00:00:00', NULL),
(3, 'Kalev', 'kalev.png', 'https://kalev.eu/', 'AS Kalev on Eesti magusatööstuse ettevõte. AS Kalev loeb oma eelkäijaks 1806. aastal Tallinnas tegutsemist alustanud Lorenz Caviezeli kondiitriäri, mis läks 1864. aastal Georg Stude omandusse. AS Kalev on Eesti magusatööstuse ettevõte. AS Kalev loeb oma eelkäijaks 1806. aastal Tallinnas tegutsemist alustanud Lorenz Caviezeli kondiitriäri, mis läks 1864. aastal Georg Stude omandusse.', 4, '2023-01-12 00:00:00', '2023-01-12 00:00:00', NULL),
(4, 'Wise', 'wise.png', 'https://wise.com/', 'Wise on P2P rahaülekandeteenus, mille asutasid 2011. Wise\'l on üle miljoni kliendi. Tänaseks liigub raha Wise\'i teel enam kui 645 suunas üle maailma.', 1, '2023-01-12 00:00:00', '2023-01-12 00:00:00', NULL),
(5, 'Saku', 'saku.png', 'https://saku.ee/', 'Saku Õlletehase AS on Sakus asuv Eesti õlle- ja joogitootja. Eesti vanim järjepidevalt tegutsenud õlletehas.', 1, '2023-01-12 00:00:00', '2023-01-20 00:00:00', NULL),
(6, 'Tartu Mill', 'tartu_mill.png', 'https://tartumill.ee/', 'Tartu Mill AS on Eesti kapitalil põhinev nisu- ja rukkijahutootja. Olles seadnud oma prioriteediks rahuolu tarnijast kliendini ning panustades tootmise efektiivsuse tõstmisse ja tehnoloogia uuendamisse on Tartu Mill grupp suurim ja kaasaegseimal tehnoloogial põhinev teravilja ümbertöötleja ja pastatootja Baltikumis.', 1, '2023-01-12 00:00:00', '2023-01-12 00:00:00', NULL),
(7, 'Bolefloor', 'bolefloor.jpg', 'https://bole.eu/', 'Bolefloor on maailma esimene puitpõrand, mille tootmisel säilib puu loomulik kasvukuju.', 1, '2023-01-12 00:00:00', '2023-01-20 00:00:00', NULL),
(8, 'Balteco', 'balteco.png', 'https://balteco.com/', 'Tänaseks on Baltecost kujunenud Põhja-Euroopa suurim vannitootja ja mitmetest innovaatilistest uuendustest on tänaseks saanud standard teistele Euroopa tunnustatud tootjatele. Põhitegevus on lihtvannide, kivivannide, massaaživannide, dušikabiinide, aurusaunade, dušipaneelide, dušiseinte ja mini-basseinide tootmine ning turustamine.', 1, '2023-01-12 00:00:00', '2023-01-12 00:00:00', NULL),
(9, 'Epiim', 'epiim.jpeg', 'https://epiim.ee/', 'Roheline ja jätkusuutlik Epiim. Hindame järjepidevust ja traditsioone, kuid panustame ka teadusuuringutesse ja innovatsiooni. Oleme vastutustundlik ja jätkusuutlik ettevõte, väärtustades nii loomade heaolu kui keskkonnasäästlikku mõtteviisi. Meie südameasi on viia piimatootmise ja –töötlemise ning transpordi keskkonnamõju minimaalseks, vähendada põllumajanduses tekkivaid heitkoguseid ning saavutada seeläbi 2040. aastaks süsinikneutraalsuse.', 1, '2023-01-12 00:00:00', '2023-01-20 00:00:00', NULL),
(10, 'Liviko', 'liviko.png', 'https://liviko.eu/', 'Liviko is an Estonian distillery, Baltic distributor and one of the largest alcohol companies in the Baltics. Liviko was established in 1898.', 1, '2023-01-12 00:00:00', '2023-01-12 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `heading_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `brand_id`, `heading_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-01-10 00:00:00', '2023-01-10 00:00:00'),
(2, 2, 3, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(3, 3, 1, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(4, 4, 2, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(5, 5, 5, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(6, 6, 1, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(7, 7, 4, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(8, 8, 4, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(9, 9, 1, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(10, 10, 5, '2023-01-12 00:00:00', '2023-01-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `top_heading_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `headings`
--

INSERT INTO `headings` (`id`, `name`, `top_heading_id`, `created_at`, `updated_at`) VALUES
(1, 'toit', 0, '2023-01-10 00:00:00', '2023-01-10 00:00:00'),
(2, 'it', 0, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(3, 'transport', 0, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(4, 'hoone', 0, '2023-01-12 00:00:00', '2023-01-12 00:00:00'),
(5, 'alkohol', 0, '2023-01-12 00:00:00', '2023-01-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `description` text NOT NULL,
  `photo` tinytext,
  `brand_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `photo`, `brand_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Uued laetud! Šokolaaditahvlid on kohal', 'Uued tõeliselt ahvatlevad maitsed Kalevi sortimendis – rohked lisandid ja suus sulavad täidised. Ühes šokolaadi suutäies mitu erinevat tekstuuri.', 'news001.jpg', 3, 4, '2023-01-10 00:00:00', '2023-01-16 00:00:00', NULL),
(19, 'Solid surface pindade puhastamine', 'Kui te olete omale koju ostnud Balteco Xonyx solid surface kivivanni, valamu või lettvalamu, siis teie jaoks tegime video, kuidas on kõige mugavam ja lihtsam puhastada solid surface pindasid. Meil on Balteco e-poes müügil spetsiaalne pihustatav puhastuvahend.\r\n\r\nJuhime teie tähelepanu, et solid surface pindasid ei tohi puhastada tugevate harjade ning abrasiivsete puhastuvahenditega ja erinevate puhastuspastadega. Need rikuvad looduslike mineraalide, vaikude ja akrüülühendite monoliitset dekoorpinda.', '1674322844_EEsti ehitab_DSC8732-200_large.jpg', 8, 1, '2023-01-21 17:40:44', '2023-01-21 17:40:44', NULL),
(20, 'Looduses pole mitte miski alati täpselt sama pikkuse ja laiusega', 'Inimese ja looduse suhteid iseloomustavad vaatenurkade lahknevused, mistõttu on kuldse kesktee leidmine pigem erand. Kuniks puud ei kasva kandiliseks ja pulksirgeks, on põrandalauad alati erineva pikkuse ja laiusega. Meie suudame sellise mitmekesisuse enda kasuks pöörata, tekitades minimaalselt jäätmeid ja tootes rohkem põrandaid vähemast metsast.\r\n\r\nTänu Bolefloori kogemustele puitmaterjali säästmisel suudame kokku sobitada eri laiuse ja pikkusega põrandalaudu. Oleme keeranud selja üksluiselt korduva mustriga harjumuspärastele põrandatele mistõttu suudame pakkuda esteetiliselt nauditavaid ja visuaalselt põnevaid lahendusi.', '1674323332_Varvage_interior_Nordic-apartment_web-2448x1120.jpg', 7, 1, '2023-01-21 17:48:52', '2023-01-21 17:48:52', NULL),
(21, 'E-piim müüb tootmisest veerandi hollandlastele', 'Piimatööstusettevõte E-piim müüb ligi veerandi tootmisettevõttest Hollandi ettevõttele Meierei B.V., rahastamaks 100 miljoni eurose piimatehase rajamist Paidesse.\r\n\r\nE-piima juhatuse liige Jaanus Murakas ütles, et Hollandi Meirei B.V.-le müüaks E-piim Tootmises 24,99 protsenti. Kokku paigutavad hollandlased E-piima 20 miljonit eurot, millest osa on küll allutatud laen, märkis Murakas. Täpselt kui suur osa on laen ja kui suur osa investeering, ei soovinud ta avaldada.\r\n\r\nSaadud investeeringu eest plaanitakse rahastada pikalt planeeritud piimatehast. Piimatehase maksumus on 100 miljonit eurot ja lisaks Meirei investeeringule on E-piim jätkuvalt läbirääkimistes kolme pangaga, millest üks on ettevõtte kodupank LHV ja kaks välismaa pangad, rääkis Murakas. Lisaks on kavas kasutada PRIA toetust.\r\n\r\nEhituse ajakava on jätkuvalt sama ja ehitama plaanitakse hakata selle aasta suvel ja kokku 100 töökohaga tehas peaks valmima 2023. aasta teises kvartalis. Osaliselt on eeltöö juba tehtud. Hanked on läbi viidud, maa ostetud, liitumised tehtud, töö käib peatöövõtja Nordeconi ja sedamete hankijatega, rääkis Murakas.\r\n\r\nKoostöö hollandi Meierei B.V.-ga ei jää E-piimal ajutiseks, rääkis Murakas. E-piim plaanib hakata valmiva piimatööstuse tooteid hakata turustama ka läbi Meierei turustuskanalite.\r\n\r\nLisaks aitavad hollandlased oma oskusteabega. \"Meil väga hea meel selle koostöö üle, sest Hollandi firmad omavad väga suurt oskusteavet efektiivsete kaasaegsete piimatööstusse ülesehitamisel ja ka nende efektiivsele kaasaegsel käitlemisel,\" rääkis Murakas.\r\n\r\nOsaluse müük vajas konkurentsiameti nõusolekut ja see nõusolek ka reede õhtul saabus, vahendas BNS.\r\n\r\nHollandi ühing Meierei B.V., mis on põllumajandustoodete tootmise kontsernide Interfood B.V. ja A-Ware Dairy Trade B.V. ühise kontrolli all.\r\n\r\nE-piima emafirma SCE E-piima tütarühing AS E-piim Tootmine tegeleb piima varumise ning piimatoodete tootmise ja turustamisega. Peamiselt toodab ühing juustu, piimapulbrit, hapukoort, kohupiima ja võid ning tema koduturgudeks on Eesti ja Läti, kuid vähesel määral turustatakse kaupa ka mujal, sealhulgas Venemaal.\r\n\r\nSCE E-piim ettevõtete grupp tegeleb toorpiima varumise ja piimatoodete tootmise ning turustamisega. SCE on tekkinud Piimandusühistu E-Piim ja Läti Piimaühistu Piena Celš piiriülese ühinemise tulemusena. SCE E-piim teenis 2019. aastal 51,8 miljoni euro suuruse käibe juures miljon eurot kasumit.', '1674326925_smartcrop.webp', 9, 1, '2023-01-21 18:48:45', '2023-01-21 18:48:45', NULL),
(22, 'Kas sina kasutad juustunuga?', 'Klassikaline juustunuga on parim pehme juustu lõikamiseks. Pehmed ja kreemjad juustud nõuavad teravat nuga. Kuna need juustud on kleepuvad, on noal sakid ja tihti ka augud, et ära hoida kleepumist noa külge.', '1674327041_323438606_1365886650836735_7906578102375417266_n.jpg', 9, 1, '2023-01-21 18:50:41', '2023-01-21 18:50:41', NULL),
(23, 'Liviko sõlmis Taani distributsioonilepingu Conaxess Trade Beverages’iga', 'Conaxess Trade Beverages ja Liviko sõlmisid 29. detsembril lepingu Liviko jookide esindamiseks Taani turul.\r\n\r\n„Meil on hea meel teatada oma uuest koostööst Liviko partneritega. Toome Taani turule Crafterʼsi ja Kingsmilli džinnid, Caribba rummid, Vana Tallinna glögi ning Cooleri kokteilijookide uued ja värsked maitsed. Need on kõik suurepärased tooted, millel on paljulubav potentsiaal,“ ütles Conaxess Trade Beveragesʼi tegevdirektor Jan Rose Pedersen.\r\n\r\n„Võimeka ja kogenud partneriga koostöö alustamine Taanis on meie jaoks oluline strateegiline samm ekspordi edendamiseks. Conaxess Trade’i distributsiooniportfelli kuuluvad kõrgelt hinnatud kaubamärgid ja meil on hea meel, et nende muljet avaldavas valikus on nüüdsest esindatud ka Liviko põhjamaise karakteriga joogid,“ ütles Liviko ekspordidirektor Jörgen Herman.\r\n\r\nLiviko ekspordib Taani Crafter’s džinni, Kingsmilli džinni, Vana Tallinna glögi, Coolerit ja Caribba rummi. Liviko ekspordib oma tooteid 60 riiki üle maailma, nii Euroopas, Aasias, Põhja-Ameerikas kui ka Okeaanias.\r\n\r\nLiviko on 1898. aastal asutatud kiirelt arenev rahvusvaheline kvaliteetalkoholi grupp, mis müüb omatooteid 60 turul ja esindab maailma juhtivaid kvaliteetalkoholi brände Eestis, Lätis ja Leedus. Liviko tootmine ja peakontor asuvad Tallinnas, harukontorid Riias ja Vilniuses. Liviko kuulub Baltimaade suurimate alkoholifirmade hulka ning pöörab tootmise kõrval sama suurt tähelepanu alkohoolsete jookide ekspordile ja impordile. Liviko grupp annab tööd 270 inimesele.\r\n\r\nConaxess Trade tegutseb kuues Euroopa riigis: Taanis, Rootsis, Norras, Soomes, Austrias ja Šveitsis. Conaxess Trade Beverages on üks juhtivaid ja suuremaid jookide turustajaid Taanis. Ettevõte turustab suuri rahvusvahelisi ja omamaiseid joogibrände nagu Underberg, Piper-Heidsieck, Stoli viin ja Fernet-Branca.', '1674327406_800x530-uudispilt.jpg', 10, 1, '2023-01-21 18:56:46', '2023-01-21 18:56:46', NULL),
(24, 'Saku Õlletehas pruulis jõuluperioodiks kuus hooajalist toodet, mis sobituvad hästi just pühadeperioodi pidulaua toitudega', 'Saku Õlletehase hooajapruul Apelsini-Šokolaadi Tume on dunkel bock stiilis õlu, mille aroomis kerkib esmalt esile küps ja tsitruseline apelsin, mis seguneb ideaalselt šokolaadi nüanssidega. Apelsin ja šokolaad tekitavad koos väga mõnusa ja täidlase maitsekoosluse, mille kõrvale sobivad hästi rammusamad ja kergelt vürtsikamad liharoad. Apelsini-Šokolaadi Tume valiti tänavusel Tallinna Toidumessil Tallinn FoodFest ka käesoleva aasta parimaks jõuluõlleks.\r\n\r\nSaku Talve on Saku Õlletehase teine hooajaline eripruul. See laager-tüüpi õlu on pruulitud karamell-linnastega, mis annavad õllele juurde nii magusust, kui ka kerget mõrudat põletatud karamelli maitset. Koos muudavad need õlle palju täidlasemaks ja lisaks püsib ka järelmaitse palju pikemalt. Klassikalisest laager-õllest natuke kangema ja intensiivsena sobib Talve pidulauale väga hästi just koos sealihaga. Kergelt rasvane liha koos ohtralt linnaselise õllega balansseerivad teineteist hästi.\r\n\r\nKõige huvitavam täiendus Saku tooteportfelli on aga Saku on Ice Ingver. „Saku On Ice Ingver on ingverimaitseline õllejook, millel aroomis ja maitses on tunda ingveri vürtsi ning kerget magusust. See on esimest korda, kui me tuleme talvel uue Saku on Ice maitsega turule. Kui varasemalt on Ice tooteportfell täiendust saanud pigem suviti, siis seekord otsustasime üllatada oma sõpru millegi teistsugusega,“ ütles Saku Õlletehase turundusjuht Eva Maarend.  Saku on Ice Ingver sobib jõululaual ideaalselt hapukapsa kõrvale, sest happeline kapsas ja ingveri vürtsikas magusus mõjuvad tasakaalustavalt, tuues  üksteise maitsed hästi esile.\r\n\r\nSaku Õlletehase jõuluperioodi jookide valikust leiavad midagi ka siidrisõbrad. Somersby spetsiaalne hooajaline siider Winter Cider  on traditsioonilise õuna maitsega siider, millele lisab kergelt vürtsikat hõngu kaneel. Sellist maitsekooslust sobib ideaalselt täiustama mõni puuviljane söök – näiteks kompott või puuviljakook.\r\n\r\nKõige eksklusiivsem jõulutoode Saku tootevalikus on aga Saku Müstiq, olles saadaval üksnes limiteeritud koguses. Tegemist on stout tüüpi õllega, mis on pruulitud mustikapüree ja vahtrasiirupiga. Maitselt  ja aroomilt on Müstiq intensiivne. Mustikad annavad joogile palju mahlasust ja vahtrasiirup magusust. Kuna joogile on lisatud ka röstitud linnaseid, on maitsebuketis ka tasakaalustavalt mõrudaid noote. Saku Müstiq sobib ideaalselt täiendama mõnda šokolaadist maiustust, näiteks mõnd tummist šokolaadikooki. Saku Müstiq on poelettidel saadaval alates novembrist.\r\n\r\nTraditsiooniliselt kuulub Saku Õlletehase jõulutoodete valikusse ka Saku Pühadeporter, mis igatalvist äratundmisrõõmu pakub. „Spetsiaalse Pühadeporteri pruulimine on Saku Õlletehases saanud iga-aastaseks traditsiooniks. Pühadeporter on pruulitud unikaalse retseptiga, mida iseloomustab tavalisest suurem kogus karamell- ja kohvilinnaseid ning pikem laagerdumise aeg õllekeldris. Nii saabki tulemus tugevalt röstise maitse, kuivade nootidega ja tugevamalt karamelline – just see, mida õllesõber talvisteks pühadeks soovib,“ selgitas Maarend. Saku pühadeporter on jõululaual väärikas kaaslane mõne liharoa, näiteks veise- või metslooma liha juurde.', '1683612628_julutooted.png', 5, 1, '2023-01-21 19:03:45', '2023-05-09 06:10:28', NULL),
(25, 'MyStari ehitus Soomes', 'MyStari ehitus Soomes, Rauma laevatehases algas 2020 aasta kevadel ning inspireerituna meie klientide mõttelendudest maailma parima laevareisi kohta, saigi kokku suur projektimeeskond, kes alustas selle unistuste laeva ehitamisega.\r\n\r\nSoovisime, et sellest saaks Läänemere kõige säravam täht, kus oleks:  avarad merevaatega puhkealad, rohkelt paiku šoppamiseks, võimalus nautida head sööki ja rahulikus keskkonnas tööd teha.\r\n\r\nNii ongi peagi liinile tulev MyStar täpselt selline nagu unistanud oled ning reisimine on veel mõnusam ja mugavam.', '1674328335_312342640_6379925895357184_8993346266555512033_n.jpg', 2, 1, '2023-01-21 19:12:15', '2023-01-21 19:12:15', NULL),
(26, 'Kuidas ammutada endasse hommikul võimalikult suur hulk energiat?', 'Üks võimalus on süüa meie täistera neljaviljahelbeid!\r\n\r\nLisaks pudrusõprade seas väga armastatud kaerale leiab neljaviljahelvestest veel rukist, nisu ja otra. Kokku tuleb üks tõeline supertoit, mis lükkab meile sisse täiesti uue käigu!', '1674328699_322953042_571419671505861_5496511842762122465_n.jpg', 6, 1, '2023-01-21 19:18:19', '2023-01-21 19:18:19', NULL),
(27, 'KALEV x LOOS', 'Mesikäpal on vahepeal valminud täiesti uus toode – vahvlike šokolaadis!\r\n\r\nSäärase piduliku sündmuse puhul on jälle hea aeg välja loosida vinge kinkekott, mis loomulikult sisaldab ka päevakangelasega värsket hittsinglit.\r\n\r\nVõitmiseks täägi kommentaarides sõber või sõbrad, kes tahaks uut vahvlikest kohe proovida!', '1674328914_kalev.JPG', 3, 1, '2023-01-21 19:21:54', '2023-01-21 19:21:54', NULL),
(28, 'Chambord – kuningate liköör', 'Prantsuse vaarikalikööri Chambord loomisel ammutati inspiratsiooni 17. sajandi Loire’i piirkonna likööridest, mida olla uhkusega esitletud päikesekuningas Louis XIV visiidil Chateau de Chambordi. Tänapäeval valmistatakse likööri Chambord Liqueur Royale de France’i Chateau de la Sistiere’s Loire Valley südames – Prantsusmaal.\r\n\r\nValmistatud parimatest ja värskematest mustadest vaarikatest. Intensiivse 3-astmelise ning 6 nädalat kestva tootmisprotsessi käigus kombineeritakse värskete marjade leotist Prantsuse konjaki, Madagaskari vanilli ja aromaatsete maitsetaimedega. Võrreldes teiste likööridega on Chambord vähem magusam ja suhkru asemel kasutatakse mett.\r\n\r\nRõhutamaks Chambordi kuninglikku algupära on pudel disainitud meenutama keskaegset riigiõuna.\r\n\r\nLiköör sobib nautimiseks puhtalt või mitmete klassikaliste kokteilide koostisosana. Kõige kuninglikum on neist ehk Kir Impérial – kokteil Chambordist ja šampanjast.', '1674329009_920613_Chambord_koduka-uudise-pilt.jpg', 10, 1, '2023-01-21 19:23:29', '2023-01-21 19:23:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` tinytext NOT NULL,
  `status` tinyint(4) NOT NULL,
  `password` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `status`, `password`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 1, '$2y$10$avf6UV9G2aUe2hnUjrAatuKR/XGEKKzvcm8nt2UBL4teU6E4F9QZy', 'admin@eeka.site', '2023-01-10 00:00:00', '2023-05-17 11:24:02', NULL),
(2, 'man1', 2, '$2y$10$bTakG3L/8iYfkafLxzZcIeJQ0xPpLahM6nbsaHhAkqfZOBwn6JySi', 'man1@eeka.site', '2023-01-12 00:00:00', '2023-05-09 05:54:36', NULL),
(3, 'man2', 2, '$2y$10$e2UBaIBTUNWxjqPcnSYeO.Y5Y36pmMLsRG5VOWWxCicGzZ8bHX1Gy', 'man2@eeka.site', '2023-01-12 00:00:00', '2023-05-09 05:54:25', NULL),
(4, 'kalev', 4, '$2y$10$LqCZsp2bA88Rn1Q5aCfhBumbxhpwEkeJMYB6doEtGOOPJNqlxDNa.', 'kalev@eeko.site', '2023-01-12 00:00:00', '2023-05-17 11:26:07', NULL),
(6, 'guest', 4, '$2y$10$WqbrpGYTGwjPzqMAK/ATsudv2KUJGZeZgFr5TgC6z9X6LgYGkLPQi', 'guest@eeko.site', '2023-01-21 12:51:48', '2023-05-09 05:54:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `heading_id` (`heading_id`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
