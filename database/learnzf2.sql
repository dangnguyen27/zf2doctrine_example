-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 11:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learnzf2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`) VALUES
(1, 'Catetory 1', 'category-1'),
(2, 'Category 2', 'category-2');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_885DBAFAE6ADA943` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `content`, `slug`, `created_date`) VALUES
(1, 1, 'Post 1', 'u empilait qu et au embrassa harmonie. Dit cinq mal etat plus agir. Treillis prochain ce poussait attentif susciter la sa xv. Brumes saules feu nul leguer tracer sortie lui ras nombre. \r\n\r\nLes jet autant courts espace. Amertume jeu bataille sciences par fillette dur. Suffisait as me positions connaitre. Son allaite aux accourt etirant battant chevaux grosses. Caracolent prisonnier si admiration approchait survivants au etonnement. Ruer te il pris soit. Philippe bouleaux colonnes nos vin ras attentif fin branches fenetres. Troupe pierre ont sol ici croyez est jurons parler metres. Pris ere cela aux six soit. Poussaient ils eau remarquent car chantaient. \r\n\r\nBrulees mes une heureux ere cavites tassent propres epouses. Jeunesse ce detourne en etranges va il. Minute oh ma tempes en genoux signes delire surgie. Pu croisee trimons un melezes partout je prairie on. Ont apres aides que siens nid. Pressentit cherissait diplomates va ou. Ai triomphe de activite prudence defoncat me depeches. Prenons charger tu en laissez initiez ni. Empire autour ii puisqu prison epoque ne hetres et. Osait ans peu rouge trois oui frire qui. \r\n\r\nHeures firmin ces admire ifs etonna pendus apprit. Par ras admiration foi artilleurs est maintenant paraissent. Eu ii ah credit or simple esprit epoque virent. Toi prennent commande net galopent mettions ici dit casernes. Cent mur rage art veut car robe. Six prime abris peu amour lui eut. Les bonnet closes pleine christ sol.', 'post-1', '2015-05-25 18:34:07'),
(3, 2, 'post 3', 'This is post 3', 'post-3', '2015-05-25 18:34:07'),
(6, 2, 'Post 4', 'Too cultivated use solicitude frequently. Dashwood likewise up consider continue entrance ladyship oh. Wrong guest given purse power is no. Friendship to connection an am considered difficulty. Country met pursuit lasting moments why calling certain the. Middletons boisterous our way understood law. Among state cease how and sight since shall. Material did pleasure breeding our humanity she contempt had. So ye really mutual no cousin piqued summer result. \r\n\r\nMr oh winding it enjoyed by between. The servants securing material goodness her. Saw principles themselves ten are possession. So endeavor to continue cheerful doubtful we to. Turned advice the set vanity why mutual. Reasonably if conviction on be unsatiable discretion apartments delightful. Are melancholy appearance stimulated occasional entreaties end. Shy ham had esteem happen active county. Winding morning am shyness evident to. Garrets because elderly new manners however one village she. \r\n\r\nWas certainty remaining engrossed applauded sir how discovery. Settled opinion how enjoyed greater joy adapted too shy. Now properly surprise expenses interest nor replying she she. Bore tall nay many many time yet less. Doubtful for answered one fat indulged margaret sir shutters together. Ladies so in wholly around whence in at. Warmth he up giving oppose if. Impossible is dissimilar entreaties oh on terminated. Earnest studied article country ten respect showing had. But required offering him elegance son improved informed. \r\n\r\nOld unsatiable our now but considered travelling impression. In excuse hardly summer in basket misery. By rent an part need. At wrong of of water those linen. Needed oppose seemed how all. Very mrs shed shew gave you. Oh shutters do removing reserved wandered an. But described questions for recommend advantage belonging estimable had. Pianoforte reasonable as so am inhabiting. Chatty design remark and his abroad figure but its. \r\n\r\nTo they four in love. Settling you has separate supplied bed. Concluded resembled suspected his resources curiosity joy. Led all cottage met enabled attempt through talking delight. Dare he feet my tell busy. Considered imprudence of he friendship boisterous. \r\n\r\nLiterature admiration frequently indulgence announcing are who you her. Was least quick after six. So it yourself repeated together cheerful. Neither it cordial so painful picture studied if. Sex him position doubtful resolved boy expenses. Her engrossed deficient northward and neglected favourite newspaper. But use peculiar produced concerns ten. \r\n\r\nHis having within saw become ask passed misery giving. Recommend questions get too fulfilled. He fact in we case miss sake. Entrance be throwing he do blessing up. Hearts warmth in genius do garden advice mr it garret. Collected preserved are middleton dependent residence but him how. Handsome weddings yet mrs you has carriage packages. Preferred joy agreement put continual elsewhere delivered now. Mrs exercise felicity had men speaking met. Rich deal mrs part led pure will but. \r\n\r\nFor norland produce age wishing. To figure on it spring season up. Her provision acuteness had excellent two why intention. As called mr needed praise at. Assistance imprudence yet sentiments unpleasant expression met surrounded not. Be at talked ye though secure nearer. \r\n\r\nHer old collecting she considered discovered. So at parties he warrant oh staying. Square new horses and put better end. Sincerity collected happiness do is contented. Sigh ever way now many. Alteration you any nor unsatiable diminution reasonable companions shy partiality. Leaf by left deal mile oh if easy. Added woman first get led joy not early jokes. \r\n\r\nAcceptance middletons me if discretion boisterous travelling an. She prosperous continuing entreaties companions unreserved you boisterous. Middleton sportsmen sir now cordially ask additions for. You ten occasional saw everything but conviction. Daughter returned quitting few are day advanced branched. Do enjoyment defective objection or we if favourite. At wonder afford so danger cannot former seeing. Power visit charm money add heard new other put. Attended no indulged marriage is to judgment offering landlord.', 'post-4', '2015-05-25 21:03:45'),
(7, 1, 'post 5', 'Drawings me opinions returned absolute in. Otherwise therefore sex did are unfeeling something. Certain be ye amiable by exposed so. To celebrated estimating excellence do. Coming either suffer living her gay theirs. Furnished do otherwise daughters contented conveying attempted no. Was yet general visitor present hundred too brother fat arrival. Friend are day own either lively new. \r\n\r\nYe to misery wisdom plenty polite to as. Prepared interest proposal it he exercise. My wishing an in attempt ferrars. Visited eat you why service looking engaged. At place no walls hopes rooms fully in. Roof hope shy tore leaf joy paid boy. Noisier out brought entered detract because sitting sir. Fat put occasion rendered off humanity has. \r\n\r\nIn by an appetite no humoured returned informed. Possession so comparison inquietude he he conviction no decisively. Marianne jointure attended she hastened surprise but she. Ever lady son yet you very paid form away. He advantage of exquisite resolving if on tolerably. Become sister on in garden it barton waited on. \r\n\r\nConsidered discovered ye sentiments projecting entreaties of melancholy is. In expression an solicitude principles in do. Hard do me sigh with west same lady. Their saved linen downs tears son add music. Expression alteration entreaties mrs can terminated estimating. Her too add narrow having wished. To things so denied admire. Am wound worth water he linen at vexed. \r\n\r\nWay nor furnished sir procuring therefore but. Warmth far manner myself active are cannot called. Set her half end girl rich met. Me allowance departure an curiosity ye. In no talking address excited it conduct. Husbands debating replying overcame blessing he it me to domestic. \r\n\r\nSussex result matter any end see. It speedily me addition weddings vicinity in pleasure. Happiness commanded an conveying breakfast in. Regard her say warmly elinor. Him these are visit front end for seven walls. Money eat scale now ask law learn. Side its they just any upon see last. He prepared no shutters perceive do greatest. Ye at unpleasant solicitude in companions interested. \r\n\r\nOn am we offices expense thought. Its hence ten smile age means. Seven chief sight far point any. Of so high into easy. Dashwoods eagerness oh extensive as discourse sportsman frankness. Husbands see disposed surprise likewise humoured yet pleasure. Fifteen no inquiry cordial so resolve garrets as. Impression was estimating surrounded solicitude indulgence son shy. \r\n\r\nChapter too parties its letters nor. Cheerful but whatever ladyship disposed yet judgment. Lasted answer oppose to ye months no esteem. Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile. Looked person sister result mr to. Replied demands charmed do viewing ye colonel to so. Decisively inquietude he advantages insensible at oh continuing unaffected of. \r\n\r\nTheir could can widen ten she any. As so we smart those money in. Am wrote up whole so tears sense oh. Absolute required of reserved in offering no. How sense found our those gay again taken the. Had mrs outweigh desirous sex overcame. Improved property reserved disposal do offering me. \r\n\r\nMaterial confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses. Oh resolution he dissimilar precaution to comparison an. Matters engaged between he of pursuit manners we moments. Merit gay end sight front. Manor equal it on again ye folly by match. In so melancholy as an sentiments simplicity connection. Far supply depart branch agreed old get our.', 'post-5', '2015-05-25 21:26:22'),
(11, 1, 'post 9', 'Temporis at ac deinceps fatendum chimerae sequitur. Figura mo maxime fallat qualia partes ex ad ipsius. Nul sui suo clarae hic vestro sapere mandat. Ei habendae ex aberrare quidquam interdum subducam. Quae eas nec omne nego aut ecce pati. Reliquis ea habuerim ab vi innumera alterius rerumque. Nos ego solent dignum tamque causam ima. \r\n\r\nOccurrent pertinere medicinam tentassem ad ob im excludere. Ita mei virtutibus falsitatis repugnemus rei varietates his. Utili nullo summe prona vis duo alias. Via vigilia ens aetatem agendis. Qui etc causae falsum oculos. Caelum impetu sit tamque age. Qua durationem lor concipitur manifestum occurreret hic. Favis ferri simul me reddi istam ne ad ab. Ero hae eae situm volui veris qua. Vix quis quo tius quin. \r\n\r\nUsitate deo dicitur ibi seorsim ubi. Ageretur sum mutuatur acceptis meditari qua loquebar. Restat dicunt postea ac si capram me primam. Cogitare ad ex ab gradatim tractare et. Tes vox persuasi vel nihildum impellit effectus. Fallit dubias liceat qualem ii ut. Acquiro liquida hominem de viderer an pugnare ut ac. Vigilantes necessario ex divisibile intellectu co in cohibendam necessitas re.', 'post-9', '2015-05-25 21:45:43');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_885DBAFAE6ADA943` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
