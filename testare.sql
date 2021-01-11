-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 08:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$DN5pkOzsQAyGV2h6HC/60.Sfs.Uzj/dEJQKhYq67bira9xpD3Z1cS', 'admin@smartself.com');

-- --------------------------------------------------------

--
-- Table structure for table `filme`
--

CREATE TABLE `filme` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nume` text NOT NULL,
  `nom` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `price_eu` double(10,2) NOT NULL,
  `descriere_en` text NOT NULL,
  `descriere_ro` text CHARACTER SET utf8 COLLATE utf8_romanian_ci NOT NULL,
  `descriere_fr` text NOT NULL,
  `durata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filme`
--

INSERT INTO `filme` (`id`, `name`, `nume`, `nom`, `code`, `image`, `price`, `price_eu`, `descriere_en`, `descriere_ro`, `descriere_fr`, `durata`) VALUES
(1, 'The King\'s Man', 'The King\'s Man: Începutul', 'The King\'s Man: Première mission', '121', 'img/images.jpg', 50.00, 50.00, 'One man must race against time to stop history\'s worst tyrants and criminal masterminds as they get together to plot a war that could wipe out millions of people and destroy humanity.', 'Cei mai mari tirani şi asasini ai lumii pun la cale un război care ar urma să extermine milioane de oameni. Cineva va trebui să fie mai rapid pentru a-i putea opri. Descoperă începuturile primei agenţii de informaţii în The King\'s Man: Începutul.', 'Lorsque les pires tyrans et génies criminels de l’Histoire se réunissent pour planifier l’élimination de millions d’innocents, un homme se lance dans une course contre la montre pour contrecarrer leurs plans. Découvrez les origines de la toute première agence de renseignement indépendante.', 0),
(2, 'Enola Holmes', 'Enola Holmes', 'Enola Holmes', '122', 'img/images (1).jpg', 65.00, 13.00, 'While searching for her missing mother, intrepid teen Enola Holmes uses her sleuthing skills to outsmart big brother Sherlock and help a runaway lord.', 'În căutarea mamei sale dispărute, Enola Holmes, o adolescentă îndrăzneață cu aptitudini de detectiv, îl păcălește pe fratele mai mare, Sherlock, și ajută un lord fugar.', 'Enola, la jeune sœur de Sherlock Holmes, met ses talents de détective à l\'épreuve pour tenter de retrouver sa mère disparue et déjouer une dangereuse conspiration.', 0),
(3, 'Mulan', 'Mulan', 'Mulan', '123', 'img/images (2).jpg', 40.00, 8.00, 'A girl disguises as a male warrior and joins the imperial army in order to prevent her sick father from being forced to enlist as he has no male heir.', 'Când împăratul Chinei emite un decret care stipulează că un bărbat din fiecare familie din țară trebuie să se alăture armatei imperiale pentru a lupta împotriva invadatorilor din nord, Hua Mulan, fiica cea mare a unui venerabil războinic care suferă acum de boală, decide să-i ia locul în luptă. Imitând un soldat pe numele de Hua Jun, ea este testată la fiecare pas al procesului de învățare, mobilizându-și mai mult din forța interioară în fiecare zi pentru a-și explora adevăratul potențial ...\r\nAșa începe pentru Mulan o călătorie epică care va transforma tânăra fată într-un războinic al faptelor eroice, onorat de un întreg popor recunoscător și care face mândria tatălui ei.\r\n', 'Lorsque l’Empereur de Chine publie un décret stipulant qu’un homme de chaque famille du pays doit intégrer l’armée impériale pour combattre des envahisseurs venus du nord, Hua Mulan, fille ainée d’un vénérable guerrier désormais atteint par la maladie, décide de prendre sa place au combat. Se faisant passer pour un soldat du nom de Hua Jun, elle se voit mise à l’épreuve à chaque étape du processus d’apprentissage, mobilisant chaque jour un peu plus sa force intérieure pour explorer son véritable potentiel…\r\nCommence alors pour Mulan un voyage épique qui transformera la jeune fille en une guerrière aux faits d’armes héroïques, honorée par tout un peuple reconnaissant et faisant la fierté de son père.\r\n', 0),
(4, 'Aquaman ', 'Aquaman ', 'Aquaman ', '124', 'img/Aquaman-355320736-large.jpg', 55.00, 12.00, 'Half-human, half-Atlantean Arthur is born with the ability to communicate with marine creatures. He goes on a quest to retrieve the legendary Trident of Atlan and protect the water world.', 'Atunci când Arthur Curry (Jason Momoa) descoperă că este jumătate uman și jumătate zeu, va întreprinde călătoria vieții sale în această aventură nu numai că îl va forța să se confrunte cu cine este cu adevărat, ci și să descopere dacă merită să-și îndeplinească destinul: de a fi rege și a deveni Aquaman.', 'Les origines d’un héros malgré lui, dont le destin est d’unir deux mondes opposés, la terre et la mer. Cette histoire épique est celle d’un homme ordinaire destiné à devenir le roi des Sept Mers.', 0),
(5, 'Tenet', 'Tenet', 'Tenet', '125', 'img/download (3).jpg', 25.00, 5.20, 'A secret agent is given a single word as his weapon and sent to prevent the onset of World War III. He must travel through time and bend the laws of nature in order to be successful in his mission.', 'Filmul prezintă viața unui om care încearcă să prevină Al Treilea Război Mondial prin intermediul renașterii și călătoriei în timp. Protagonistul luptă pentru supraviețuirea întregii omeniri, călătorind printr-o lume crepusculară din spionajul internațional, a cărei acţiune se va desfășura dincolo de timpul real.', 'Muni d\'un seul mot – Tenet – et décidé à se battre pour sauver le monde, notre protagoniste sillonne l\'univers crépusculaire de l\'espionnage international. Sa mission le projettera dans une dimension qui dépasse le temps. Pourtant, il ne s\'agit pas d\'un voyage dans le temps, mais d\'un renversement temporel', 0),
(6, 'News of the World', 'News of the World', 'News of the World', '126', 'img/images (5).jpg', 48.00, 9.95, 'Five years after the end of the Civil War, Capt. Jefferson Kyle Kidd crosses paths with a 10-year-old girl taken by the Kiowa people. Forced to return to her aunt and uncle, Kidd agrees to escort the child across the harsh and unforgiving plains of Texas. However, the long journey soon turns into a fight for survival as the traveling companions encounter danger at every turn -- both human and natural.', 'O drama – western in care un barbat caruia ii place sa calatoreasca, accepta sa plece intr-un loc indepartat pentru ajutarea salvarii unei fete care a fost rapita de niste talhari.', 'Cinq ans après la fin de la Guerre de Sécession, le capitaine Jefferson Kyle Kidd, vétéran de trois guerres, sillonne le pays de ville en ville en qualité de rapporteur publique et tient les gens informés, grâce à ses lectures, des péripéties des grands de ce monde, des querelles du gratin, ainsi que des plus terribles catastrophes ou aventures du bout du monde. En traversant les plaines du Texas, il croise le chemin de Johanna, une enfant de 10 ans capturée 6 ans plus tôt par la tribu des Kiowa et élevée comme l’une des leurs. Rescapée et renvoyée contre son gré chez sa tante et son oncle par les autorités, Johanna est hostile à ce monde qu’elle va devoir rejoindre et ne connait pas. Kidd accepte de la ramener à ce domicile auquel la loi l’a assignée. Pendant des centaines de kilomètres, alors qu’ils traversent une nature hostile, ils vont devoir affronter les nombreux écueils, aussi bien humains que sauvages, qui jalonnent la route vers ce que chacun d’entre eux pourra enfin appeler son foyer.', 0),
(7, 'Trolls World Tour', 'Trolii 2', 'Les Trolls 2 - Tournée mondiale', '127', 'img/images (6).jpg', 38.50, 8.05, 'Poppy and Branch discover that there are six different troll tribes scattered over six different lands. Each tribe is also devoted to six different kinds of music -- funk, country, techno, classical, pop and rock. When rockers Queen Barb and King Thrash set out to destroy the other music, Poppy and Branch embark on a daring mission to unite the trolls and save the diverse melodies from becoming extinct.', 'Regina Barb, membră a regalității hard-rock, ajutată de tatăl ei King Thrash, vrea să distrugă toate celelalte genuri de muzică pentru a lăsa rockul să domnească suprem. Cu soarta lumii în joc, Poppy și Branch, împreună cu prietenii lor - Biggie, Chenille, Satin, Cooper și Guy Diamond - au pornit să viziteze toate celelalte teritorii pentru a unifica trolii împotriva lui Barb, care caută să-i retrogradeze pe toți în plan secund.\r\n\r\n', 'Reine Barb, membre de la royauté hard-rock, aidée de son père Roi Thrash, veut détruire tous les autres genres de musique pour laisser le rock régner en maître. Le destin du monde en jeu, Poppy et Branch, accompagnés de leurs amis – Biggie, Chenille, Satin, Cooper  et Guy Diamond – partent visiter tous les autres territoires pour unifier les Trolls contre Barb, qui cherche à tous les reléguer au second-plan.', 0),
(8, 'The War with Grandpa', 'Un tataie de cosmar', 'En guerre avec grand-papa', '128', 'img/a.jpg', 28.00, 5.75, 'Peter and his grandpa used to be very close, but when Grandpa Jack moves in with the family, Peter is forced to give up his most prized possession: his bedroom. Peter will stop at nothing to get his room back, scheming with friends to devise a series of pranks to drive him out. However, grandpa doesn\'t give up easily, and it turns into an all-out war between the two.', '\r\nPeter (Oakes Fegley) este un băiat tipic din clasa a șasea - îi plac jocurile video, petrec cu prietenii și pantofii lui Air Jordan. Dar când bunicul său recent văduv, Ed (Robert De Niro), se mută cu familia lui Peter, Peter trebuie să renunțe la ceea ce prețuiește cel mai mult: dormitorul său. Refuzând să permită să se întâmple o astfel de nedreptate, Peter își imaginează o serie de mișcări proaste pentru a scăpa de intrus, dar bunicul Ed nu se va lăsa făcut fără să se răzbune. Rapid, cei doi adversari se vor găsi într-un adevărat război care va duce la consecințe nebunești.\r\n', 'Peter (Oakes Fegley) est un garçon typique de sixième année – il aime les jeux vidéo, passer du temps avec ses amis et ses bonnes vieilles chaussures Air Jordan. Mais lorsqu\'Ed (Robert De Niro), son grand-père récemment veuf, emménage avec la famille de Peter, ce dernier doit abandonner ce qu\'il chérit le plus: sa chambre à coucher. Refusant de laisser une telle injustice se produire, Peter imagine une série de mauvais coups afin de se débarrasser de l\'intrus, mais grand-papa Ed ne se laissera pas faire sans riposter. Rapidement, les deux adversaires se retrouveront dans une véritable guerre qui entrainera de loufoques conséquences.', 0),
(9, 'Godzilla: King of the Monsters', 'Godzilla 2', 'GODZILLA 2 - ROI DES MONSTRES', '129', 'img/download (1).jpg', 46.00, 9.50, 'The members of Monarch, an crypto-zoological organisation, must rely on the Godzilla and Mothra to defeat King Ghidorah and Rodan, after the former awakens other dormant Titans to destroy the world.', 'Agenția cripto-zoologică Monarch trebuie să înfrunte un val de monștri titanici, precum Godzilla, Mothra, Rodan și, în special, temutul rege Ghidorah cu trei capete. O luptă fără precedent între aceste creaturi considerate până atunci drept himerice amenință să izbucnească. În timp ce toți încearcă să domine planeta, este în joc chiar viitorul umanității', 'L\'agence crypto-zoologique Monarch doit faire face à une vague de monstres titanesques, comme Godzilla, Mothra, Rodan et surtout le redoutable roi Ghidorah à trois têtes. Un combat sans précédent entre ces créatures considérées jusque-là comme chimériques menace d\'éclater. Alors qu\'elles cherchent toutes à dominer la planète, l\'avenir même de l\'humanité est en jeu', 0),
(10, 'No Time to Die', 'No Time to Die', 'MOURIR PEUT ATTENDRE', '130', 'img/images (9).jpg', 35.00, 7.65, 'Recruited to rescue a kidnapped scientist, globe-trotting spy James Bond finds himself hot on the trail of a mysterious villain, who\'s armed with a dangerous new technology.', 'James Bond a părăsit serviciul secret și are zile fericite în Jamaica. Dar pacea lui este de scurtă durată, deoarece vechiul său prieten Felix Leiter de la CIA ajunge să-i ceară ajutorul: este vorba de salvarea unui om de știință care tocmai a fost răpit. Dar misiunea se dovedește a fi mult mai periculoasă decât se aștepta și Bond se trezește pe urmele unui inamic misterios care deține formidabile arme tehnologice ...', 'James Bond a quitté les services secrets et coule des jours heureux en Jamaïque. Mais sa tranquillité est de courte durée car son vieil ami Felix Leiter de la CIA débarque pour solliciter son aide : il s\'agit de sauver un scientifique qui vient d\'être kidnappé. Mais la mission se révèle bien plus dangereuse que prévu et Bond se retrouve aux trousses d\'un mystérieux ennemi détenant de redoutables armes technologiques…', 0),
(18, 'Sherlock Holmes 3', 'Sherlock Holmes 3', 'Sherlock Holmes 3', '135', 'img/download.jpg', 55.00, 11.20, 'The further adventures of Detective Sherlock Holmes and Dr. John Watson.', 'Nici o enigmă nu poate rezista mult timp lui Sherlock Holmes ... Flancat de prietenul său credincios, doctorul John Watson, îndrăznețul și legendarul detectiv îi vânează neîncetat pe criminali de toate dungile. Armele sale: un puternic sentiment de observare și deducție, erudiție și curiozitate în toate direcțiile; întâmplător, un drept redutabil ...\r\nDar o amenințare fără precedent atârnă astăzi asupra Londrei - și acesta este exact genul de provocare de care are nevoie omul nostru pentru a nu se scufunda în plictiseală și melancolie.\r\nDupă o serie de crime rituale însângerate în Londra, Holmes și Watson reușesc să intercepteze vinovatul: Lord Blackwood. Pe măsură ce se apropie execuția sa, acest sinist adept al magiei negre anunță că se va întoarce din tărâmul morților pentru a exercita cea mai cumplită răzbunare.\r\nPanica cuprinde orașul după aparenta înviere a lui Blackwood. Scotland Yard dă limba pisicii și Sherlock Holmes se angajează imediat în cea mai ciudată și periculoasă dintre investigațiile sale ...\r\n', 'Aucune énigme ne résiste longtemps à Sherlock Holmes... Flanqué de son fidèle ami le Docteur John Watson, l\'intrépide et légendaire détective traque sans relâche les criminels de tous poils. Ses armes : un sens aigu de l\'observation et de la déduction, une érudition et une curiosité tous azimuts; accessoirement, une droite redoutable...\r\nMais une menace sans précédent plane aujourd\'hui sur Londres - et c\'est exactement le genre de challenge dont notre homme a besoin pour ne pas sombrer dans l\'ennui et la mélancolie.\r\nAprès qu\'une série de meurtres rituels a ensanglanté Londres, Holmes et Watson réussissent à intercepter le coupable : Lord Blackwood. A l\'approche de son éxécution, ce sinistre adepte de la magie noire annonce qu\'il reviendra du royaume des morts pour exercer la plus terrible des vengeances.\r\nLa panique s\'empare de la ville après l\'apparente résurrection de Blackwood. Scotland Yard donne sa langue au chat, et Sherlock Holmes se lance aussitôt avec fougue dans la plus étrange et la plus périlleuse de ses enquêtes...\r\n\r\n', 0),
(20, 'Morbius', 'Morbius', 'Morbius', '55', 'img/images (8).jpg', 18.00, 3.45, 'Biochemist Michael Morbius tries to cure himself of a rare blood disease, but when his experiment goes wrong, he inadvertently infects himself with a form of vampirism instead.', 'Suferind grav de o boală rară a sângelui și hotărât să salveze toate victimele acestei patologii, dr. Morbius ia un pariu disperat. Dar ceea ce la prima vedere pare de succes se dovedește a fi un remediu potențial mai serios decât boala.', 'Gravement atteint d’une rare maladie sanguine, et déterminé à sauver toutes les victimes de cette pathologie, le Dr Morbius tente un pari désespéré. Mais ce qui semble à première vue être un succès se révèle rapidement comme un remède potentiellement plus grave que la maladie.', 0),
(23, 'Raya and the Last Dragon', 'Raya si ultimul dragon', 'Raya et le dernier dragon', '136', 'img/images (3).jpg', 41.50, 8.45, 'Long ago, in the fantasy world of Kumandra, humans and dragons lived together in harmony. However, when sinister monsters known as the Druun threatened the land, the dragons sacrificed themselves to save humanity. Now, 500 years later, those same monsters have returned, and it\'s up to a lone warrior to track down the last dragon and stop the Druun for good.', 'Cu mult timp în urmă, în lumea fantastică a Kumandrei, oamenii și dragonii trăiau împreună în armonie. Cu toate acestea, când monștri sinistri cunoscuți sub numele de Druun au amenințat țara, dragonii s-au sacrificat pentru a salva omenirea. Acum, 500 de ani mai târziu, aceiași monștri s-au întors și depinde de un războinic singuratic să găsească ultimul dragon și să-l oprească definitiv pe Druun.', 'Il y a de cela fort longtemps, au royaume imaginaire de Kumandra, humains et dragons vivaient en harmonie. Mais un jour, une force maléfique s’abattit sur le royaume et les dragons se sacrifièrent pour sauver l’humanité.\r\nLorsque cette force réapparait cinq siècles plus tard, Raya, une guerrière solitaire, se met en quête du légendaire dernier dragon pour restaurer l’harmonie sur la terre de Kumandra, au sein d’un peuple désormais divisé. Commence pour elle un long voyage au cours duquel elle découvrira qu’il lui faudra bien plus qu’un dragon pour sauver le monde, et que la confiance et l’entraide seront essentiels pour conduire au succès cette périlleuse mission.\r\n', 0),
(24, 'Coming 2 America', 'Coming 2 America', 'Un prince à New York 2', '137', 'img/ab.jpg', 26.00, 5.35, 'Coming 2 America is an upcoming American comedy film directed by Craig Brewer, from a screenplay by Kenya Barris, Barry W. Blaustein, and David Sheffield, and a story by Blaustein, Sheffield, and Justin Kanew, based on characters created by Eddie Murphy.', 'Akeem nu mai este un prinț, ci este acum rege al Zamunda. Surprinzător, când Akeem află că are un fiu în Statele Unite, despre care nu stia nimic și că locuiește în Queens alături de mama sa, el trebuie să meargă în America pentru a se întâlni cu posibilul moștenitor al tronului din Zamunda. Pentru a-i îndeplini ultima dorință a tatălui său muribund, Akeem și prietenul său Semmi, decide să călătorească din nou în Statele Unite și să-l aducă pe Lavelle în Zamunda pentru a-l încununa prinț.', 'Dans le luxuriant et pays royal du Zamunda, le nouveau roi Akeem et son fidèle confident Semmi se lancent dans une toute nouvelle aventure comique à travers le monde, en partant de leur grande nation africaine jusqu’au quartier du Queens, à New York - où tout a commencé.', 0),
(27, 'khsBCjksdNXVlkcS', '', '', '333', 'img/', 689.00, 666.00, 'dvszdv', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `locuri`
--

CREATE TABLE `locuri` (
  `id` int(11) NOT NULL,
  `rand` varchar(10) NOT NULL,
  `loc` int(11) NOT NULL,
  `id_film` int(25) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locuri`
--

INSERT INTO `locuri` (`id`, `rand`, `loc`, `id_film`, `data`) VALUES
(1, '1', 0, 1, ''),
(2, 'A', 1, 121, '13-3'),
(3, 'A', 1, 121, '14-3'),
(4, 'A', 1, 121, '13-3'),
(5, 'A', 1, 121, '13-3'),
(6, 'A', 1, 121, '15-3'),
(7, 'A', 1, 121, '15-3'),
(8, 'J', 14, 121, '13-3'),
(9, 'C', 6, 121, '14-3'),
(10, 'A', 1, 121, '13-3'),
(11, 'DD', 3, 121, '14-3'),
(12, 'E', 1, 121, '13-3'),
(13, 'A', 1, 121, '14-3'),
(14, 'A', 1, 121, '15-3'),
(15, 'A', 1, 121, '14-3'),
(16, 'A', 1, 122, '14-3'),
(17, 'A', 1, 124, '15-3'),
(18, 'A', 1, 121, '14-3'),
(19, 'A', 1, 122, '16:00'),
(20, 'A', 1, 122, '16-3'),
(21, 'A', 1, 122, '12-3'),
(22, 'A', 1, 122, '14:00'),
(23, 'A', 1, 121, '13:00'),
(24, 'A', 1, 122, '13:00'),
(25, 'A', 1, 122, '13:00'),
(26, 'A', 1, 126, '14:00'),
(27, 'A', 1, 123, '16:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `locuri_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `product_id`, `quantity`, `user_id`, `locuri_id`) VALUES
(102, 6, 1, 14, 0),
(103, 3, 1, 14, 0),
(114, 3, 1, 4, 0),
(117, 1, 1, 4, 0),
(120, 2, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(4, 'teo', '$2y$10$eK4Xt3GMyDTneqxaunqVF.rDdbcGfZmo6GaflnwvK7gs/.9CP4.tO', 'teo@yahoo.com'),
(5, 'ion', '$2y$10$feHUB0bFM4fVJgNECR0eLOdHAAV/2AQZrWugM0xIZpDvYpNzC4fhm', 'ion@yahoo.com'),
(10, 'test', '$2y$10$RGDX41n1SmHsnovygpCcruiZWa75oaCRx857b4dyAfIgyGZaPujT6', 'test@test.com'),
(13, 'sdvfaergae', '$2y$10$GopHvGncDQ.UamBAcXuGZe0DZ1Wk591qmIIgN5WRZR.4dFxRHuoIK', 'sDfzdvdfz@yahoo.com'),
(14, 'gheorghe', '$2y$10$spHVI0CMl.FFJKt7E88BHedr5BKuKizfgT8ODDl2ftoYzd/3UAv.2', 'g@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locuri`
--
ALTER TABLE `locuri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `locuri`
--
ALTER TABLE `locuri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
