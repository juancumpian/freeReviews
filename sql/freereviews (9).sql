-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2018 a las 18:53:16
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `freereviews`
--
CREATE DATABASE IF NOT EXISTS `freereviews` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `freereviews`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `ID_Articulo` int(11) NOT NULL,
  `Titulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Contenido` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Puntuacion` int(11) NOT NULL,
  `email` varchar(28) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ID_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`ID_Articulo`, `Titulo`, `Contenido`, `Puntuacion`, `email`, `ID_categoria`) VALUES
(6332018, 'Crinch', '<p>asddasd</p>', 5, 'cumpiandiazjuan@gmail.com', 4),
(9471904, 'Dog of war', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec dui dolor. Nunc elementum nec justo vel viverra. Nunc nec massa urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris est, sodales nec lacus nec, accumsan aliquam purus. In hac habitasse platea dictumst. Sed eu tristique lorem. Nulla sem purus, bibendum vel metus vel, pharetra lacinia neque. Fusce quis leo eget velit mollis pretium. Vestibulum ultricies, dolor sed elementum finibus, tortor massa iaculis urna, egestas iaculis dui neque vel metus. Phasellus at ultrices dolor, vel sagittis felis.</p><p>Morbi et diam ullamcorper, dignissim sem sed, ornare urna. Maecenas elementum sem id iaculis finibus. Curabitur convallis in erat bibendum sodales. Morbi efficitur orci eu mauris tincidunt, vitae euismod diam commodo. Maecenas faucibus neque arcu, in mattis justo hendrerit id. Ut convallis nibh egestas massa euismod pretium. Fusce posuere vulputate ultricies. Integer accumsan ornare diam, ut gravida magna faucibus ac. Donec lobortis elit eu nisi facilisis mattis. Integer sed ante id nisi fermentum accumsan ut ac magna. Curabitur imperdiet congue dolor, volutpat sodales massa consectetur a. Vestibulum at libero dolor.</p><p><em>Pellentesque feugiat maximus purus vitae consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis tristique arcu at leo hendrerit, quis dignissim ex pellentesque. Duis tincidunt, dui in pulvinar sagittis, quam tellus finibus urna, vitae sagittis purus ipsum quis lacus. Sed eu gravida dui, varius tincidunt nulla. Donec feugiat vitae velit venenatis placerat. Curabitur et tristique mi, id auctor nisi. Donec molestie et lacus id congue.</em></p><p><img src=\"https://i.froala.com/download/540c1eea8bf88191ce06261aa63545f929332751.jpg?1529078041\" style=\"width: 364px;\" class=\"fr-fic fr-dib fr-fil\"></p><p>Nam vitae maximus lacus. Curabitur eget metus consequat mauris consectetur scelerisque in ac turpis. Nulla facilisi. Suspendisse a ligula non nisi bibendum tempus. Vestibulum at magna vulputate, scelerisque diam ac, hendrerit erat. Phasellus eros est, eleifend id odio sit a<span style=\"font-family: Times New Roman,Times,serif,-webkit-standard;\">met, facilisis tincidunt nunc. Vestibulum eget placerat augue. Etiam eu congue erat. Cras ac orci vel orci viverra commodo.</span></p><p>Quisque eget neque at lectus egestas efficitur vitae eu nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur posuere ut elit nec laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum pulvinar, sapien vel auctor bibendum, tellus elit maximus ligula, eget tincidunt tortor magna non risus. Nam nec tortor placerat, vulputate ligula vel, porttitor mauris. Pellentesque non ultrices nibh. Nam libero est, lacinia sed euismod nec, luctus sed arcu.</p><p>Curabitur vel ex non arcu gravida blandit nec congue turpis. Morbi scelerisque a massa sit amet tempor. Proin bibendum faucibus ultrices. Sed velit lorem, mattis a lorem quis, maximus porta eros. Suspendisse eleifend lacinia neque, a semper mauris tincidunt a. Praesent eget mi nisl. Pellentesque eu nunc lorem. Morbi vel ullamcorper nunc. Suspendisse potenti. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla consequat metus sed pulvinar aliquam. Sed orci diam, faucibus ut porta a, ultricies sed odio.</p>', 1, 'mulio@gmail.com', 3),
(18148216, 'Guernica', '<p>d</p><p>sad</p><p>as</p><p>d</p><p>das</p><p>das</p><p>d</p><p>asdasdsdasdasdaskldnmoaksdnasdasdasdasd</p>', 0, 'zgestaltzzero@gmail.com', 5),
(31283527, 'John Lennon y su piano de lavanda', '<p>dasdasdadasmkdasd</p><p>asdasdasdasd</p><p>as</p><p>d</p><p>ad</p><p>ad</p><p>asdasdasddsa</p>', 2, 'dsadhnkjashnd@dsakdn', 0),
(43363519, 'Grito', '<p>jsjsjsjsjjsjjssj</p>', 3, 'zgestaltzzero@gmail.com', 5),
(51391870, 'Johny\'s saddness', '<p>johny iba por la playa cogiendo estrellassadasd</p>', 2, 'kiko@hotmail.com', 5),
(57629536, 'kike esta en el cenicero', '<p>dasdasd</p><p>ds</p><p>ad</p><p>as</p><p>a</p><p>sd</p><p>asd</p><p>asd</p><p>as</p><p>da</p><p>sdasdsadasdasda</p>', 3, 'julio@hotmail.com', 0),
(62826843, 'The Graveyard', '<p>dasdasd</p>', 0, 'cumpiandiazjuan@gmail.com', 3),
(69850453, 'el nacido', '<p>xsdad</p>', 1, 'cumpiandiazjuan@gmail.com', 3),
(73662627, 'johny', '<p>johny iba por la playa cogiendo estrellas</p>', 0, 'kiko@hotmail.com', 2),
(76416244, 'Los soprano', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis cursus eleifend. Integer pharetra pellentesque viverra. Proin at mauris lorem. In hac habitasse platea dictumst. Phasellus in justo lobortis, gravida metus id, aliquam sem. Vestibulum vestibulum in ligula sit amet feugiat. Donec nibh enim, porta vitae nibh eget, tempus interdum mi. Integer at nunc sit amet tortor interdum tincidunt.</p><p style=\"text-align: justify;\">Suspendisse id feugiat velit. Nam cursus diam augue, at vestibulum urna vulputate eu. Etiam sit amet suscipit leo, at congue sem. Suspendisse ultrices ut lorem at tempor. Aliquam egestas facilisis orci, vitae tristique elit mollis quis. Quisque efficitur tincidunt metus ac consequat. Etiam sed erat posuere, ullamcorper turpis non, congue sapien. Nulla sed pharetra mi. Vestibulum sagittis venenatis quam, non condimentum nunc venenatis nec. Nunc a ante eget dui aliquet molestie. Curabitur viverra suscipit odio, ut auctor lacus tristique nec. Quisque quam eros, molestie nec est vitae, semper hendrerit ex. Nulla risus nisl, dignissim at porttitor et, accumsan vel leo.</p><p style=\"text-align: justify;\">Praesent interdum place<s>rat justo in ultricies. Donec quam purus, venenatis et felis non, accumsan pretium ligula. Aliquam congue varius libero sed euismod. Maecenas tempus ligula eget ornare blandit. Maecenas vel lacus eu quam sagittis interdum. Nulla condimentum urna purus, vel sodales ligula interdum et. Aliquam facilisis, tellus nec vehicula faucibus, ante justo convallis neque, ac pulvinar urna libero at turpis. Proin lectus magna, pretium a interdum in, varius id urna. Nullam laoreet gravida lorem eget finibus. Ut tempor eget massa at aliquet. Etiam in nunc sed felis maximus interdum sit amet id nisi. Donec ultrices, leo eget convallis pretium, lectus orci tristique sapien, in aliquet nisi nunc vitae ex.</s></p><p style=\"text-align: justify;\"><s>Pellentesque pulvinar nulla eu erat porta cursus. Curabitur hendrerit ligula at dolor fermentum, et ullamcorper felis egestas. Nulla facilisis laoreet risus, quis rhoncus nunc volutpat in. Duis luctus libero sit amet nibh tempus eleifend. Sed eu sapien et risus fringilla egestas. Donec vitae ligula metus. Mauris luctus laoreet enim non semper. Integer id dictum justo. Sed vitae quam ornare, condimentum risus et, facilisis ante. Cras vitae ipsum id nunc consectetur sollicitudin id ac elit. Suspendisse volutpat venenatis tellus non tincidunt. Morbi tempus sapien vehicula metus pharetra, vitae tempus elit ullamcorper. Vestibulum accums</s>an massa ac tortor laoreet dignissim. Aliquam pharetra viverra mi eu bibendum.</p><p style=\"text-align: justify;\">Nunc blandit mauris eget dignissim porttitor. Nam a leo turpis. Phasellus volutpat dolor felis, nec varius augue convallis non. Donec hendrerit condimentum eros, quis aliquet erat dictum et. Phasellus tincidunt pharetra purus id bibendum. Curabitur sit amet enim pretium, sagittis sapien id, pellentesque enim. Nunc consequat semper nisl, eget pharetra odio ullamcorper et. Praesent egestas, augue et aliquam interdum, orci est molestie urna, laoreet fringilla lectus eros vitae ex. Sed dignissim porttitor faucibus. Donec scelerisque consequat mauris ut porttitor. Donec nec erat non mi bibendum volutpat sed at libero. Proin at lectus viverra, porta leo non, convallis dolor. Nulla eget lectus fringilla, tincidunt diam lobortis, egestas diam. Suspendisse suscipit nisi id orci pulvinar pharetra.</p>', 0, 'cumpiandiazjuan@gmail.com', 1),
(82417412, 'El bonito esta en Salamanca', '<p>njsdknfjdsajgolbnfdasdsa</p>', 0, 'kiko@hotmail.com', 0),
(84459100, 'The pig green', '<p>dasdasdasdas</p>', 1, 'cumpiandiazjuan@gmail.com', 3),
(89674828, 'blame', '<p>mdkasmdiajhdahasdnjlash d asdas</p><p>das</p><p>das</p><p>asd</p><p>asd</p><p>adadaidjasdapdanasd</p><p>as</p><p>das</p><p>d</p><p>asdasdkoajopasdmjasjdpaj</p>', 3, 'zgestaltzzero@gmail.com', 4),
(90371403, 'Lorem Ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium, dolor et efficitur maximus, felis purus semper neque, quis tincidunt orci dui ut enim. Quisque viverra tortor pharetra, aliquet diam in, tempus mauris. Ut et felis vitae nibh pretium vulputate nec et nisi. Sed eget mauris sollicitudin, egestas massa eget, aliquam metus. Morbi interdum porttitor nulla, a consectetur tellus placerat ac. Maecenas vitae tempus ante. Aliquam non neque quis elit bibendum dapibus. Curabitur placerat ante vel augue ornare ornare. Praesent dolor justo, rutrum in euismod sit amet, consectetur nec arcu. Cras nec turpis sed ex volutpat volutpat. Nullam commodo pharetra arcu, ut fringilla nunc consequat a. Aenean turpis est, faucibus in justo eu, euismod suscipit justo. Nulla nulla nulla, aliquam eget mi ut, dignissim finibus enim. Suspendisse pretium diam sit amet blandit luctus. In sed tristique lorem, sed egestas enim.</p><p>Donec at dolor at sapien tempus bibendum. Ut sagittis felis sed venenatis elementum. Donec at lectus eget magna sollicitudin faucibus ac at nunc. Curabitur semper velit a tristique congue. Quisque eget commodo mauris, ut finibus tellus. Maecenas pulvinar sollicitudin commodo. Donec tincidunt tortor in aliquet imperdiet. Nullam sagittis eros sed enim condimentum sagittis. Vivamus sodales non diam in ultrices. Fusce consequat nisi tellus, eu tincidunt nisl eleifend sit amet. Aenean vel lacus tristique, rutrum lectus et, consectetur risus. Vestibulum nec porttitor orci. Proin mollis metus metus, vitae posuere magna scelerisque sit amet.</p><p>Vivamus efficitur suscipit libero eu gravida. Curabitur ornare nibh turpis, non pulvinar est luctus ut. Morbi ultricies malesuada eleifend. Vivamus sed pellentesque neque. Vivamus luctus nisl in velit maximus rhoncus. Morbi tristique, magna sed vehicula tempor, nisl libero aliquam magna, ac vehicula sapien risus at erat. Maecenas vitae metus ante. Praesent iaculis hendrerit lectus eget pellentesque. Nullam eu mauris ultricies, malesuada turpis vitae, pretium justo. Aliquam erat volutpat.</p><p>Etiam interdum, est vel vulputate facilisis, sapien mi posuere mauris, at fringilla urna elit nec velit. Sed scelerisque nulla gravida ligula ornare, volutpat lobortis mauris lobortis. Nullam pulvinar, massa vitae aliquet fermentum, eros nulla sollicitudin sem, sed semper elit nunc vel diam. Etiam rutrum facilisis felis sed egestas. Aenean tempor ligula vitae ipsum venenatis laoreet. Integer in nulla quis massa laoreet scelerisque. Aenean sagittis justo nisl, vel tincidunt risus iaculis et. Fusce bibendum neque sit amet tincidunt vestibulum.</p><p>Vivamus nisl velit, tempus ac felis ac, pretium commodo sem. Aliquam egestas, neque in iaculis ultrices, ipsum lorem accumsan nulla, eget scelerisque magna ante sit amet libero. Ut dictum felis in tortor dapibus efficitur. Curabitur malesuada mi sem, at tristique ante lacinia ac. Aliquam erat volutpat. Donec sodales mauris tellus, vitae cursus velit commodo id. Curabitur eget nunc dui. Ut tincidunt sapien quis ante efficitur, sit amet eleifend ipsum blandit. Phasellus mattis viverra faucibus.</p>', 0, 'cumpiandiazjuan@gmail.com', 2),
(93910176, 'CÃ³mo conocÃ­ a vuestra madre', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis cursus eleifend. Integer pharetra pellentesque viverra. Proin at mauris lorem. In hac habitasse platea dictumst. Phasellus in justo lobortis, gravida metus id, aliquam sem. Vestibulum vestibulum in ligula sit amet feugiat. Donec nibh enim, porta vitae nibh eget, tempus interdum mi. Integer at nunc sit amet tortor interdum tincidunt.</p><p>Suspendisse id feugiat velit. Nam cursus diam augue, at vestibulum urna vulputate eu. Etiam sit amet suscipit leo, at congue sem. Suspendisse ultrices ut lorem at tempor. Aliquam egestas facilisis orci, vitae tristique elit mollis quis. Quisque efficitur tincidunt metus ac consequat. Etiam sed erat posuere, ullamcorper turpis non, congue sapien. Nulla sed pharetra mi. Vestibulum sagittis venenatis quam, non condimentum nunc venenatis nec. Nunc a ante eget dui aliquet molestie. Curabitur viverra suscipit odio, ut auctor lacus tristique nec. Quisque quam eros, molestie nec est vitae, semper hendrerit ex. Nulla risus nisl, dignissim at porttitor et, accumsan vel leo.</p><p>Praesent interdum placerat justo in ultricies. Donec quam purus, venenatis et felis non, accumsan pretium ligula. Aliquam congue varius libero sed euismod. Maecenas tempus ligula eget ornare blandit. Maecenas vel lacus eu quam sagittis interdum. Nulla condimentum urna purus, vel sodales ligula interdum et. Aliquam facilisis, tellus nec vehicula faucibus, ante justo convallis neque, ac pulvinar urna libero at turpis. Proin lectus magna, pretium a interdum in, varius id urna. Nullam laoreet gravida lorem eget finibus. Ut tempor eget massa at aliquet. Etiam in nunc sed felis maximus interdum sit amet id nisi. Donec ultrices, leo eget convallis pretium, lectus orci tristique sapien, in aliquet nisi nunc vitae ex.</p><p>Pellentesque pulvinar nulla eu erat porta cursus. Curabitur hendrerit ligula at dolor fermentum, et ullamcorper felis egestas. Nulla facilisis laoreet risus, quis rhoncus nunc volutpat in. Duis luctus libero sit amet nibh tempus eleifend. Sed eu sapien et risus fringilla egestas. Donec vitae ligula metus. Mauris luctus laoreet enim non semper. Integer id dictum justo. Sed vitae quam ornare, condimentum risus et, facilisis ante. Cras vitae ipsum id nunc consectetur sollicitudin id ac elit. Suspendisse volutpat venenatis tellus non tincidunt. Morbi tempus sapien vehicula metus pharetra, vitae tempus elit ullamcorper. Vestibulum accumsan massa ac tortor laoreet dignissim. Aliquam pharetra viverra mi eu bibendum.</p><p>Nunc blandit mauris eget dignissim porttitor. Nam a leo turpis. Phasellus volutpat dolor felis, nec varius augue convallis non. Donec hendrerit condimentum eros, quis aliquet erat dictum et. Phasellus tincidunt pharetra purus id bibendum. Curabitur sit amet enim pretium, sagittis sapien id, pellentesque enim. Nunc consequat semper nisl, eget pharetra odio ullamcorper et. Praesent egestas, augue et aliquam interdum, orci est molestie urna, laoreet fringilla lectus eros vitae ex. Sed dignissim porttitor faucibus. Donec scelerisque consequat mauris ut porttitor. Donec nec erat non mi bibendum volutpat sed at libero. Proin at lectus viverra, porta leo non, convallis dolor. Nulla eget lectus fringilla, tincidunt diam lobortis, egestas diam. Suspendisse suscipit nisi id orci pulvinar pharetra.</p>', 0, 'cumpiandiazjuan@gmail.com', 1),
(97698782, 'Giant Dad', '<p>dfsaasdasdasd</p><p>asd</p><p>sa</p><p>d</p><p>d</p><p>asd</p><p>asd</p><p>adassdsadasdasd</p>', 1, 'juancumpiandiaz@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `ID_categoria` int(11) NOT NULL,
  `Nombre_Categoria` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`ID_categoria`, `Nombre_Categoria`) VALUES
(0, 'peliculas'),
(1, 'series'),
(2, 'videojuegos'),
(3, 'cortos'),
(4, 'comics'),
(5, 'otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `ID_favorito` int(11) NOT NULL,
  `ID_Articulo` int(11) NOT NULL,
  `email` varchar(28) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`ID_favorito`, `ID_Articulo`, `email`) VALUES
(15884388, 6332018, 'cumpiandiazjuan@gmail.com'),
(38714584, 9471904, 'mulio@gmail.com'),
(41001042, 57629536, 'zgestaltzzero@gmail.com'),
(54907570, 31283527, 'zgestaltzzero@gmail.com'),
(93462896, 89674828, 'zgestaltzzero@gmail.com'),
(93576466, 31283527, 'mulio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `alias` varchar(24) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(28) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_perfil` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'images/profile-default.jpg',
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`alias`, `contrasena`, `email`, `imagen_perfil`, `admin`) VALUES
('Anthia Scotts', '3a3cf72b390c6ea7baf6110d97e18d3c', 'ascotts19@hao123.com', 'https://robohash.org/esteumquis.png?size=50x50&set=set1', 0),
('Arlana Vertey', '50083ff29ab7f5bf16ce4f84792ede51', 'avertey1@multiply.com', 'https://robohash.org/ipsanecessitatibusadipisci.jpg?size=50x50&set=set1', 0),
('Brian Spurett', '8e67ad8fa2150756a27a6ae761b6306f', 'bspurett4@cornell.edu', 'https://robohash.org/totamatveniam.png?size=50x50&set=set1', 0),
('Buiron Streetley', '8c34ade412ef41c283d8b25d19938b85', 'bstreetley8@godaddy.com', 'https://robohash.org/maximeodioet.jpg?size=50x50&set=set1', 0),
('Cordelie Craigheid', '86d0d87baaf5bb3537ab778288d5bb32', 'ccraigheid15@state.tx.us', 'https://robohash.org/saepealiasest.png?size=50x50&set=set1', 0),
('Corliss Passby', 'ab7e06ab7f0effca0e25255c8eef13c7', 'cpassbyd@nifty.com', 'https://robohash.org/exlaboreamet.bmp?size=50x50&set=set1', 0),
('juan cumpian diaz', '25d55ad283aa400af464c76d713c07ad', 'cumpiandiazjuan@gmail.com', 'https://i.imgur.com/OTo2SUW.jpg', 1),
('dsadasdsa', '25d55ad283aa400af464c76d713c07ad', 'dasdasd@dsad', 'images/profile-default.jpg', 0),
('Danna Bruckental', '419ee7c17deda43977a458c8aab3726f', 'dbruckental10@163.com', 'https://robohash.org/hicplaceatsed.jpg?size=50x50&set=set1', 0),
('Dierdre Pinare', '2f8ab1a080e3ca1a6898e20ca8c63448', 'dpinare5@feedburner.com', 'https://robohash.org/mollitiaillocum.jpg?size=50x50&set=set1', 0),
('ddasdasda', 'e10adc3949ba59abbe56e057f20f883e', 'dsadasdasd@dasd.dasd', 'images/profile-default.jpg', 0),
('dmsakdm', 'e10adc3949ba59abbe56e057f20f883e', 'dsadhnkjashnd@dsakdn', 'images/profile-default.jpg', 0),
('Debi Saunt', '1cf51a9893ba1945b6c5768e348a3f3b', 'dsauntx@discuz.net', 'https://robohash.org/suscipitrepellataccusamus.bmp?size=50x50&set=set1', 0),
('Dionisio Winchurst', '63a79351a6bd30388f806dda5ca448c4', 'dwinchurste@bigcartel.com', 'https://robohash.org/laudantiumsinttenetur.jpg?size=50x50&set=set1', 0),
('Esmeralda Glasby', '4280774c55986342a1f3c900cbc1d883', 'eglasbyt@hc360.com', 'https://robohash.org/exauta.png?size=50x50&set=set1', 0),
('Eolande Jubb', 'cf5cf1b4687c923054ea1ddbcf100df5', 'ejubb9@vkontakte.ru', 'https://robohash.org/abrepellendussit.jpg?size=50x50&set=set1', 0),
('Enrico Martinello', 'b24bd55970b2bbd045ea550d5e76dfa8', 'emartinelloo@pbs.org', 'https://robohash.org/quorecusandaequis.jpg?size=50x50&set=set1', 0),
('Edeline Vidgen', '646d4d7aea87b98917165cbfc4dd415c', 'evidgen1d@npr.org', 'https://robohash.org/optiofacilisdolorem.jpg?size=50x50&set=set1', 0),
('Franklin Das', '31e60b0acf6c1af533aea89f5c4d75c9', 'fdash@purevolume.com', 'https://robohash.org/fugaexarchitecto.bmp?size=50x50&set=set1', 0),
('Fanchette Lighton', 'c7b466fb5b5e05f698003f03fed230b8', 'flightonn@gnu.org', 'https://robohash.org/omnisharumqui.png?size=50x50&set=set1', 0),
('Gibb Devas', 'ec581e17c2bf5165b203b13abb508135', 'gdevas7@360.cn', 'https://robohash.org/minimanonquibusdam.png?size=50x50&set=set1', 0),
('Gay Rathbone', '2af81c6e477fa971c047d3be8acfd02c', 'grathboney@mozilla.com', 'https://robohash.org/oditetquas.bmp?size=50x50&set=set1', 0),
('Hugibert Cowup', 'f40bc6bd760065383fe228469a5edcab', 'hcowupl@reuters.com', 'https://robohash.org/numquammaioresfugiat.jpg?size=50x50&set=set1', 0),
('Hillel Currom', 'e81105efaba1b7bf2cfb610be69dcaa3', 'hcurrom17@devhub.com', 'https://robohash.org/etsitea.png?size=50x50&set=set1', 0),
('Harley Lambrook', '4224e51a050929a0536e9c4be5c8e692', 'hlambrookc@cbslocal.com', 'https://robohash.org/utaperiamnihil.jpg?size=50x50&set=set1', 0),
('Janet Rosensaft', '5290c2ce8d964ef6f3bf5cfc7ae02877', 'jrosensaftp@army.mil', 'https://robohash.org/providentlaudantiumut.bmp?size=50x50&set=set1', 0),
('jcumpian lolo', '25d55ad283aa400af464c76d713c07ad', 'juancumpiandiaz@gmail.com', 'https://i.imgur.com/nUSIPKl.jpg', 0),
('juliose', '25d55ad283aa400af464c76d713c07ad', 'julio@hotmail.com', 'images/profile-default.jpg', 0),
('Kinny Dreye', '17943ee11c953e3c233382d47b7f00b4', 'kdreyeg@omniture.com', 'https://robohash.org/nostrumaliquidea.png?size=50x50&set=set1', 0),
('Kent Eyckelberg', '0661a15bb3f10e30094a51bc25cd9eb8', 'keyckelbergq@salon.com', 'https://robohash.org/facereistenostrum.png?size=50x50&set=set1', 0),
('kikoty', '25d55ad283aa400af464c76d713c07ad', 'kiko@hotmail.com', 'images/profile-default.jpg', 0),
('Kaine Roofe', '85ff9387eb07fd20a724782147fb08e3', 'kroofej@chronoengine.com', 'https://robohash.org/fugiteiuslabore.png?size=50x50&set=set1', 0),
('Lucie Arminger', '3838789487cbf8b1575db37e5a3070bc', 'larmingerz@zimbio.com', 'https://robohash.org/quominimaofficia.png?size=50x50&set=set1', 0),
('Linus Kolinsky', '9db005ae7008d37788856f177fcdf8b5', 'lkolinsky12@fda.gov', 'https://robohash.org/autcupiditatemolestias.png?size=50x50&set=set1', 0),
('Julio Iglesio', 'fb5fc409c0c190b688c4e267ae0297c9', 'lololo@gmail.com', 'https://i.imgur.com/3LJErS8.jpg', 0),
('Min Carlone', '5efcee39b586fb44b8155fa2ff213c03', 'mcarlonef@phpbb.com', 'https://robohash.org/commodiducimusea.jpg?size=50x50&set=set1', 0),
('Melinda Lorryman', 'ac969dbe3e5494cc7383f26d9e3055d8', 'mlorrymanu@lycos.com', 'https://robohash.org/quaeillout.png?size=50x50&set=set1', 0),
('Moritz Pharo', '0af9466cba2f08e18bbc9e2390f400c6', 'mpharom@theatlantic.com', 'https://robohash.org/itaquemagnialiquid.bmp?size=50x50&set=set1', 0),
('Matthew Sawter', 'f597639342fe6f57584681e689361b75', 'msawter1a@moonfruit.com', 'https://robohash.org/repudiandaealiasmodi.bmp?size=50x50&set=set1', 0),
('Julio JosÃ© Altozano', '281485a8b7ce19899a4af0c1d84d6e62', 'mulio@gmail.com', 'https://i.imgur.com/9UhsIjP.jpg', 0),
('Olivette Liffey', '671d817e1e49e90a78c7110d658d0732', 'oliffey16@earthlink.net', 'https://robohash.org/laboriosamliberomagnam.png?size=50x50&set=set1', 0),
('Preston Gercke', '01493ba32225e2018cdc53ced9983d4f', 'pgerckei@yellowbook.com', 'https://robohash.org/optioatqui.bmp?size=50x50&set=set1', 0),
('Pen Kermitt', '2c83a1e1f422ae8d2bcbb7d9a6b9265b', 'pkermitt18@cisco.com', 'https://robohash.org/quisnobislaudantium.jpg?size=50x50&set=set1', 0),
('Phil Olman', '61e367f6082353a8d84061dbc6524287', 'polman2@vk.com', 'https://robohash.org/blanditiisenimsed.bmp?size=50x50&set=set1', 0),
('Rica Berard', 'b9fedd1448d54d41ce079fd15dbd40ff', 'rberard14@businessweek.com', 'https://robohash.org/temporaassumendased.bmp?size=50x50&set=set1', 0),
('Rickey Brookton', 'a1b673eef5c31ea6796583a9368dd8d0', 'rbrookton11@businesswire.com', 'https://robohash.org/quamofficiisomnis.png?size=50x50&set=set1', 0),
('Row Cairns', '0d143e18b372bc4d52ee1c3ef1beea64', 'rcairnsa@ifeng.com', 'https://robohash.org/accusamusdoloribusmolestiae.bmp?size=50x50&set=set1', 0),
('Ricki MacGarrity', 'f3675038fa177ab434e6c14ae3a56ce8', 'rmacgarrityb@usnews.com', 'https://robohash.org/nobisutin.bmp?size=50x50&set=set1', 0),
('Romy Pharaoh', '68482b327c8fb808db8e133ba34e58f6', 'rpharaoh0@dyndns.org', 'https://robohash.org/minuseumipsum.jpg?size=50x50&set=set1', 0),
('Rodie Turfus', 'ffc03c7566624465b7ec5e3b45e14645', 'rturfus6@shinystat.com', 'https://robohash.org/deseruntblanditiistotam.jpg?size=50x50&set=set1', 0),
('Sinclare Abry', 'ad18b381d9bb3d3caa250843db058f25', 'sabryk@bravesites.com', 'https://robohash.org/occaecatirecusandaeautem.jpg?size=50x50&set=set1', 0),
('Sigfrid Blaske', 'ffb34b49c7a155adc100b09da4ede9a1', 'sblaskev@epa.gov', 'https://robohash.org/illumsimiliqueexplicabo.bmp?size=50x50&set=set1', 0),
('Selena Daily', '2e2d22fed7d979f3dbf0c5da8f6488c5', 'sdailyw@utexas.edu', 'https://robohash.org/idvoluptasaliquid.jpg?size=50x50&set=set1', 0),
('Stavros Hamer', '38cf3f26eef2a7d4fa6349c7548eabe9', 'shamer1b@cmu.edu', 'https://robohash.org/modiquimaiores.png?size=50x50&set=set1', 0),
('Sky Larkins', '177e779641fd826bd417ddb76c87c69f', 'slarkins13@seesaa.net', 'https://robohash.org/veritatisbeataesunt.bmp?size=50x50&set=set1', 0),
('Silvanus Size', '6651aae60ec0eeb344300193b3a8fb7f', 'ssizes@businessweek.com', 'https://robohash.org/delenitiinventorequia.bmp?size=50x50&set=set1', 0),
('Talyah Cham', '324fe60bf48b8df2f6dc259a7834966f', 'tcham3@studiopress.com', 'https://robohash.org/debitisnamhic.jpg?size=50x50&set=set1', 0),
('Tandi Ickovici', 'cab2e69ccd5b2d7ef652a277ab1cd1bf', 'tickovici1c@ucsd.edu', 'https://robohash.org/etnonporro.jpg?size=50x50&set=set1', 0),
('Tome Yeardsley', 'a78a0766d8e1c42f289e1d77fb0ad4da', 'tyeardsleyr@nationalgeograph', 'https://robohash.org/quinesciuntsit.png?size=50x50&set=set1', 0),
('Pepe Juanas', '25d55ad283aa400af464c76d713c07ad', 'zgestaltzzero@gmail.com', 'images/profile-default.jpg', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID_Articulo`),
  ADD KEY `email` (`email`),
  ADD KEY `ID_categoria` (`ID_categoria`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`ID_favorito`),
  ADD KEY `email` (`email`),
  ADD KEY `favoritos_ibfk_1` (`ID_Articulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuarios` (`email`),
  ADD CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`ID_categoria`) REFERENCES `categorias` (`ID_categoria`);

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`ID_Articulo`) REFERENCES `articulos` (`ID_Articulo`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`email`) REFERENCES `usuarios` (`email`);
COMMIT;
