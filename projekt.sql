-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 13, 2021 at 08:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `tekst` text NOT NULL,
  `slika` varchar(64) NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(14, '13.06.2021.', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Suspendisse iaculis nisi quis lectus malesuada, ac elementum purus tincidunt. Morbi iaculis tellus justo, id sollicitudin enim facilisis eu. Phasellus vehicula placerat interdum. Praesent justo dui, fermentum id feugiat nec, pellentesque ut nisi. Duis egestas lacus sed bibendum fermentum. Phasellus aliquam aliquet sapien, at porta augue cursus at. Aenean suscipit mollis nunc sed auctor.', 's1.jpeg', 'kultura', 0),
(15, '13.06.2021.', 'Phasellus sollicitudin', 'Suspendisse iaculis nisi quis lectus malesuada, ac elementum purus tincidunt.', 'Donec id lorem vitae lectus tempus condimentum nec ut dui. Nullam fermentum vitae est at pharetra. Sed ut feugiat sem. Maecenas nec est nec est elementum fermentum. Nunc vitae ipsum nec orci tempor bibendum. Proin et ligula at ante rutrum accumsan quis quis odio. Vestibulum faucibus felis sit amet laoreet finibus. Vestibulum aliquam felis ligula, ac congue nisl scelerisque quis. Ut condimentum molestie erat et vehicula.\r\nDonec id lorem vitae lectus tempus condimentum nec ut dui. Nullam fermentum vitae est at pharetra. Sed ut feugiat sem. Maecenas nec est nec est elementum fermentum. Nunc vitae ipsum nec orci tempor bibendum. Proin et ligula at ante rutrum accumsan quis quis odio. Vestibulum faucibus felis sit amet laoreet finibus. Vestibulum aliquam felis ligula, ac congue nisl scelerisque quis. Ut condimentum molestie erat et vehicula.', 's2.jpg', 'kultura', 0),
(16, '13.06.2021.', 'Phasellus sollicitudin', 'Suspendisse iaculis nisi quis lectus malesuada, ac elementum purus tincidunt.', 'Donec id lorem vitae lectus tempus condimentum nec ut dui. Nullam fermentum vitae est at pharetra. Sed ut feugiat sem. Maecenas nec est nec est elementum fermentum. Nunc vitae ipsum nec orci tempor bibendum. Proin et ligula at ante rutrum accumsan quis quis odio. Vestibulum faucibus felis sit amet laoreet finibus. Vestibulum aliquam felis ligula, ac congue nisl scelerisque quis. Ut condimentum molestie erat et vehicula.\r\nDonec id lorem vitae lectus tempus condimentum nec ut dui. Nullam fermentum vitae est at pharetra. Sed ut feugiat sem. Maecenas nec est nec est elementum fermentum. Nunc vitae ipsum nec orci tempor bibendum. Proin et ligula at ante rutrum accumsan quis quis odio. Vestibulum faucibus felis sit amet laoreet finibus. Vestibulum aliquam felis ligula, ac congue nisl scelerisque quis. Ut condimentum molestie erat et vehicula.', 's2.jpg', 'kultura', 1),
(17, '13.06.2021.', 'Maecens mattis maximus. ', 'Donec id lorem vitae lectus tempus condimentum nec ut dui. Nullam fermentum vitae est at pharetra. ', 'Duis congue lacus quis dui condimentum, ac tincidunt sapien iaculis. Pellentesque blandit, neque vel mattis faucibus, dui libero pretium nibh, sed tincidunt diam sapien ac purus. Mauris non pretium lacus, a tempus tortor. Morbi consequat massa ut massa dictum, et egestas sem elementum. Mauris quam nibh, suscipit vel erat ut, finibus suscipit velit. In et laoreet quam, ut mattis orci. Praesent tincidunt magna vel facilisis finibus. Pellentesque non fringilla tellus.\r\n\r\nDonec id lorem vitae lectus tempus condimentum nec ut dui. Nullam fermentum vitae est at pharetra. Sed ut feugiat sem. Maecenas nec est nec est elementum fermentum. Nunc vitae ipsum nec orci tempor bibendum. Proin et ligula at ante rutrum accumsan quis quis odio. Vestibulum faucibus felis sit amet laoreet finibus. Vestibulum aliquam felis ligula, ac congue nisl scelerisque quis. Ut condimentum molestie erat et vehicula.\r\n\r\nMaecenas tempus ullamcorper tempor. Integer eget dui nec lacus mattis maximus. Sed nunc elit, ullamcorper vitae tincidunt eu, viverra a nisi. Proin laoreet gravida tellus quis porta. Donec ut tempus risus. Aenean finibus ullamcorper dui eget vulputate. Mauris elementum sapien lectus, nec bibendum lectus elementum accumsan. Quisque mauris purus, faucibus vitae nunc at, ultricies pretium felis. Quisque lobortis feugiat odio quis imperdiet. Cras a arcu vel leo lacinia aliquet vel quis ligula.', 's3.jpg', 'sport', 0),
(18, '13.06.2021.', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin viverra ipsum non', 'Suspendisse iaculis nisi quis lectus malesuada, ac elementum purus tincidunt. Morbi iaculis tellus justo, id sollicitudin enim facilisis eu. Phasellus vehicula placerat interdum. Praesent justo dui, fermentum id feugiat nec, pellentesque ut nisi. Duis egestas lacus sed bibendum fermentum. Phasellus aliquam aliquet sapien, at porta augue cursus at. Aenean suscipit mollis nunc sed auctor.\r\n\r\nDuis congue lacus quis dui condimentum, ac tincidunt sapien iaculis. Pellentesque blandit, neque vel mattis faucibus, dui libero pretium nibh, sed tincidunt diam sapien ac purus. Mauris non pretium lacus, a tempus tortor. Morbi consequat massa ut massa dictum, et egestas sem elementum. Mauris quam nibh, suscipit vel erat ut, finibus suscipit velit. In et laoreet quam, ut mattis orci. Praesent tincidunt magna vel facilisis finibus. Pellentesque non fringilla tellus.\r\n\r\nDonec id lorem vitae lectus tempus condimentum nec ut dui. Nullam fermentum vitae est at pharetra. Sed ut feugiat sem. Maecenas nec est nec est elementum fermentum. Nunc vitae ipsum nec orci tempor bibendum. Proin et ligula at ante rutrum accumsan quis quis odio. Vestibulum faucibus felis sit amet laoreet finibus. Vestibulum aliquam felis ligula, ac congue nisl scelerisque quis. Ut condimentum molestie erat et vehicula.\r\n\r\nMaecenas tempus ullamcorper tempor. Integer eget dui nec lacus mattis maximus. Sed nunc elit, ullamcorper vitae tincidunt eu, viverra a nisi. Proin laoreet gravida tellus quis porta. Donec ut tempus risus. Aenean finibus ullamcorper dui eget vulputate. Mauris elementum sapien lectus, nec bibendum lectus elementum accumsan. Quisque mauris purus, faucibus vitae nunc at, ultricies pretium felis. Quisque lobortis feugiat odio quis imperdiet. Cras a arcu vel leo lacinia aliquet vel quis ligula.', 's4.jpg', 'sport', 0),
(19, '13.06.2021.', 'Proin dignissim sit amet metus', 'Mauris sit amet sagittis est. Nullam molestie tempor vulputate.', 'Aenean eu purus dignissim, aliquam tortor in, dictum massa. Vivamus ullamcorper facilisis iaculis. Proin lacinia lectus eu dolor facilisis, et commodo nulla auctor. Nulla ut eros tristique, bibendum nulla nec, egestas sem. Sed tristique, ante sit amet aliquet cursus, nibh nibh interdum augue, non placerat neque risus vel augue. Integer sed posuere nisi, eu semper mi.\r\n\r\nMauris varius, nisi sed congue bibendum, eros lacus cursus dui, vel facilisis mi metus non est. Vivamus ante enim, fringilla at magna in, facilisis condimentum magna. Vivamus dui massa, pulvinar non rhoncus ac, tincidunt at quam. Sed et dolor turpis. Ut interdum varius ex a tristique. Donec egestas scelerisque vehicula. Pellentesque ultricies, arcu a facilisis blandit, elit elit eleifend tortor, non tempor turpis tellus sed turpis. Maecenas sapien odio, euismod in sagittis ac, accumsan et augue. Pellentesque faucibus quam quis metus bibendum, id feugiat lacus volutpat. Cras quis ante id elit dapibus aliquet. Quisque porttitor a justo eget rhoncus. Donec ut interdum orci. Aliquam erat volutpat. In hac habitasse platea dictumst.', 's5.webp', 'sport', 0),
(20, '13.06.2021.', 'Neque porro quisquam', 'Donec et consectetur est. Pellentesque mattis nulla magna', 'Mauris sit amet sagittis est. Nullam molestie tempor vulputate. Etiam fermentum varius quam ut elementum. Quisque vel lacus dui. Morbi eu nulla luctus, condimentum nisl in, ultricies mauris.\r\n\r\nDuis sodales faucibus ipsum a dignissim. Mauris sollicitudin posuere dolor at bibendum. Fusce at est vehicula, placerat ipsum in, mattis ligula. Maecenas rhoncus nibh id eros tincidunt dapibus. Aenean eu purus dignissim, aliquam tortor in, dictum massa. Vivamus ullamcorper facilisis iaculis. Proin lacinia lectus eu dolor facilisis, et commodo nulla auctor. Nulla ut eros tristique, bibendum nulla nec, egestas sem. Sed tristique, ante sit amet aliquet cursus, nibh nibh interdum augue, non placerat neque risus vel augue. Integer sed posuere nisi, eu semper mi.\r\n\r\nMauris varius, nisi sed congue bibendum, eros lacus cursus dui, vel facilisis mi metus non est. Vivamus ante enim, fringilla at magna in, facilisis condimentum magna. Vivamus dui massa, pulvinar non rhoncus ac, tincidunt at quam. Sed et dolor turpis. Ut interdum varius ex a tristique. Donec egestas scelerisque vehicula. Pellentesque ultricies', 's6.jpg', 'sport', 0),
(21, '13.06.2021.', 'Quisque vel lacus dui', 'onec egestas scelerisque vehicula. Pellentesque ultricies,', ' et iaculis diam. Nunc a maximus nibh, ac dictum felis. Proin placerat sapien id lacus vehicula, nec imperdiet ex egestas. Quisque sed cursus magna. Mauris sit amet sagittis est. Nullam molestie tempor vulputate. Etiam fermentum varius quam ut elementum. Quisque vel lacus dui. Morbi eu nulla luctus, condimentum nisl in, ultricies mauris.\r\n\r\nDuis sodales faucibus ipsum a dignissim. Mauris sollicitudin posuere dolor at bibendum. Fusce at est vehicula, placerat ipsum in, mattis ligula. Maecenas rhoncus nibh id eros tincidunt dapibus. Aenean eu purus dignissim, aliquam tortor in, dictum massa. Vivamus ullamcorper facilisis iaculis. Proin lacinia lectus eu dolor facilisis, et commodo nulla auctor. Nulla ut eros tristique, bibendum nulla nec, egestas sem. Sed tristique, ante sit amet aliquet cursus, nibh nibh interdum augue, non placerat neque risus vel augue. Integer sed posuere nisi, eu semper mi.\r\n\r\nMauris varius, nisi sed congue bibendum, eros lacus cursus dui, vel facilisis mi metus non est. Vivamus ante enim, fringilla at magna in, facilisis condimentum magna. Vivamus dui massa, pulvinar non rhoncus ac, tincidunt at quam. Sed et dolor turpis. Ut interdum varius ex a tristique. Donec egestas scelerisque vehicula. Pellentesque ultricies, arcu a facilisis blandit, elit elit eleifend tortor, non tempor turpis tellus sed turpis. Maecenas sapien odio, euismod in sagittis ac, accumsan et augue. Pellentesque faucibus quam quis metus bibendum, id feugiat lacus volutpat. Cras quis ante id elit dapibus aliquet. Quisque portti', 's7.jpg', 'sport', 1),
(22, '13.06.2021.', 'Suspendisse rhoncus', 'Proin dignissim sit amet metus in bibendum. ', 'd maximus ex aliquet. Quisque quis aliquet leo. Vivamus eros quam, porta ac nunc efficitur, elementum pretium urna. Suspendisse rhoncus tristique lorem, nec consequat leo. Sed nec odio mattis, hendrerit nunc eget, congue ante. Integer sit amet congue enim, eget cursus nunc. Quisque vel nisl sit amet dui accumsan tristique. Proin purus risus, pulvinar eu metus at, pharetra auctor turpis. Donec commodo orci lacus.\r\n\r\nSed mi arcu, malesuada tempus turpis eget, tempor pellentesque sem. Donec et consectetur est. Pellentesque mattis nulla magna. Donec consectetur libero ipsum. Proin dignissim sit amet metus in bibendum. Nulla facilisis mauris lorem, vel interdum metus tempor ac. Vivamus felis dolor, auctor egestas lectus sit amet, pharetra ullamcorper arcu.\r\n\r\nQuisque in condimentum magna. Duis et iaculis diam. Nunc a maximus nibh, ac dictum felis. Proin placerat sapien id lacus vehicula, nec imperdiet ex egestas. Quisque sed cursus magna. Mauris sit amet sagittis est. Nullam molestie tempor vulputate. Etiam fermentum varius quam ut elementum. Quisque vel lacus dui. Morbi eu nulla luctus, condimentum nisl in, ultricies mauris.\r\n\r\nDuis sodales faucibus ipsum a dignissim. Mauris sollicitudin posuere dolor at bibendum. Fusce at est vehicula, placerat ipsum in, mattis ligula. Maecenas rhoncus nibh id eros tincidunt dapibus. Aenean eu purus dignissim, aliquam tortor in, dictum massa. Vivamus ullamcorper facilisis iaculis. Proin lacinia lectus eu dolor facilisis, et commodo nulla auctor. Nulla ut eros tristique, bibendum nulla nec, egestas sem. Sed tristique, ante sit amet aliquet cursus, nibh nibh interdum augue, non placerat neque risus vel augue. Integer sed posuere nisi, eu semper mi.\r\n\r\nMauris varius, nisi sed congue bibendum, eros lacus cursus dui, vel facilisis mi metus non est. Vivamus ante enim, fringilla at magna in, facilisis condimentum magna. Vivamus dui m', 's8.jpg', 'kultura', 0),
(23, '13.06.2021.', 'Kultura de ipsum', ' Quisque vel nisl sit amet dui accumsan tristique. ', 'et nisi tristique, id maximus ex aliquet. Quisque quis aliquet leo. Vivamus eros quam, porta ac nunc efficitur, elementum pretium urna. Suspendisse rhoncus tristique lorem, nec consequat leo. Sed nec odio mattis, hendrerit nunc eget, congue ante. Integer sit amet congue enim, eget cursus nunc. Quisque vel nisl sit amet dui accumsan tristique. Proin purus risus, pulvinar eu metus at, pharetra auctor turpis. Donec commodo orci lacus.\r\n\r\nSed mi arcu, malesuada tempus turpis eget, tempor pellentesque sem. Donec et consectetur est. Pellentesque mattis nulla magna. Donec consectetur libero ipsum. Proin dignissim sit amet metus in bibendum. Nulla facilisis mauris lorem, vel interdum metus tempor ac. Vivamus felis dolor, auctor egestas lectus sit amet, pharetra ullamcorper arcu.\r\n\r\nQuisque in condimentum magna. Duis et iaculis diam. Nunc a maximus nibh, ac dictum felis. Proin placerat sapien id lacus vehicula, nec imperdiet ex egestas. Quisque sed cursus magna. Mauris sit amet sagittis est. Nullam molestie tempor vulputate. Etiam fermentum varius quam ut elementum. Quisque vel lacus dui. Morbi eu nulla luctus, condimentum nisl in, ultricies mauris.\r\n\r\nDuis sodales faucibus ipsum a dignissim. Mauris sollicitudin posuere dolor at bibendum. Fusce at est vehicula, placerat ipsum in, mattis ligula. Maecenas rhoncus nibh id eros tincidunt dapibus. Aenean eu purus dignissim, aliquam tortor in, dictum massa. Vivamus ullamcorper facilisis iaculis. Proin lacinia lec', 's9.jpg', 'kultura', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `korisnicko_ime` varchar(32) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `razina` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `lozinka`, `razina`) VALUES
(1, 'admin', 'admin', 'admin', '$2y$10$wuYhxg8eb0.k11AaZQB3IuySXdJ.l0cdlYZYXCpuTA/xX1AV754RC', 1),
(3, 'user', 'user', 'user', '$2y$10$Y3XTjffxip/udIFTAAdiJOE2OVG88N0/C3podoZLvIYOUL.VEfhJm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korisnicko_ime` (`korisnicko_ime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
