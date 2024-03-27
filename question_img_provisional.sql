-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-03-2024 a las 10:41:49
-- Versión del servidor: 10.3.39-MariaDB-0+deb10u1
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fakeNews`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `question_img_provisional`
--

CREATE TABLE `question_img_provisional` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext NOT NULL,
  `correct` tinyint(1) NOT NULL,
  `realNew` longtext NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `question_img_provisional`
--

INSERT INTO `question_img_provisional` (`id`, `question`, `correct`, `realNew`, `img`) VALUES
(1, 'Share to Get Money from Bill Gates Share a certain post of Bill Gates on Facebook and he will send you money. \"Hey Facebook, As some of you may know, I`m Bill Gates. If you click that share link, I will give you $5,000. I always deliver, I mean, I brought you Windows XP, right?\"', 0, 'Bill Gates $5,000 Giveaway One of the oldest Internet hoaxes holds that Microsoft and other companies are giving $5,000 to Facebook users who click a share link', 'https://mediaproxy.snopes.com/width/1200/https://media.snopes.com/2015/05/5000.jpg'),
(2, 'COVID-19. An article from January 2020, claiming to be from a local news station in North Dakota (Valley News Live), circulated on Facebook. The article claimed that a coronavirus case has been confirmed in Fargo.', 0, 'Post claiming the Coronavirus has been found in Fargo is not credible. A post being shared by nsfnews.com stating that two people have been identified with the Coronavirus at the Sanford hospital in Fargo is false.', 'https://libapps.s3.amazonaws.com/accounts/227734/images/Coronavirus.png'),
(3, 'President Obama shocked the country when he announced he would be running for a third term.', 0, 'This story is derived from an interview with President Obama. In the interview., President Obama said that he was confident he could have been elected again (if it was legal to do so).', 'https://mediaproxy.snopes.com/width/1200/https://media.snopes.com/2015/06/obamahead.jpg'),
(4, 'Pope Francis Shocks World, Endorses Donald Trump for President, Releases Statement', 0, 'This story is completely false. The original story can be traced back to a satire website, but it took off from there and became viral', 'https://web.archive.org/web/20161115024211im_/http://wtoe5news.com/wp-content/uploads/2016/07/Pope-Trump-1-777x437.jpg'),
(5, 'Chinese scientists \"create\" a mutant coronavirus strain that attacks the BRAIN and has a 100% kill rate in mice - as they admit there`s a `risk it spills over to humans`. Chinese scientists have been experimenting with a mutant coronavirus strain that is 100 percent lethal in mice — despite concerns such research could spark another pandemic. Scientists in Beijing — who are linked to the Chinese military — cloned a Covid-like virus found in pangolins, known as GX_P2V, and used it to infect mice. The mice had been `humanized`, meaning they were engineered to express a protein found in people, with the goal being to assess how the virus might react in humans.', 0, 'The information in this article comes from a preprint (preliminary version of a scientific manuscrit) available in this link. A preprint is not a valid scientific source. Link: https://www.biorxiv.org/content/10.1101/2024.01.03.574008v', 'https://i.dailymail.co.uk/1s/2024/01/16/21/80102909-12969105-image-a-8_1705440803127.jpg'),
(6, 'Russian President Vladimir Putin suffers cardiac arrest, collapses in bedroom', 0, 'How a baseless claim about Putin’s health spread from an unreliable Telegram account to TV news. An explosive claim that Russian President Vladimir Putin had suffered a heart attack spread across the globe this week, amplified by news outlets and social media users. The news didn’t come from the Kremlin, which dismissed it as a “hoax,” nor verified reporting in Russia. It came from a single anonymous account on the messaging service Telegram that provided no evidence, yet was viewed hundreds of thousands of times.', 'https://akm-img-a-in.tosshub.com/businesstoday/images/story/202310/putin12-sixteen_nine.jpg?size=948:533'),
(7, 'What to know about Volodymyr Zelenskiy, the comedian-turned president of Ukraine. In the first round of its presidential election on Sunday, Ukrainian voters will have a choice between its current president, a former prime minister and an unlikely third candidate -- a comedian best known for a TV show where he plays a man who accidentally becomes president. It is the comedian, Volodymyr Zelenskiy, who is currently favorite. With no candidate expected to receive more than 50 percent in the first round of the vote, polls show Zelenskiy has a strong chance to win the presidency in a second round next month.', 1, 'Zelenskiy, 41, is an actor and stand-up comic who is one of Ukraine`s most popular performers. In his show, \"Servant of the People,\" he plays a schoolteacher who wakes up to discover that a rip he did against corrupt politicians has gone viral and catapulted him into office. Now, Zelenskiy, who has no previous political experience, is looking to complete the feat in real life. Three final polls before Sunday showed him with a strong lead over Ukraine`s unpopular president, Petro Poroshenko. Separate polls by pollster Rating Group and the Democratic Initiative Foundation found that about 27 percent of voters intended to back Zelenskiy against about 17 percent for Poroshenko. Yulia Tymoshenko, the former prime minister, was fighting for second place with Poroshenko. The DIF poll and another by the Kiev Institute for International Studies, however, showed her trailing by about 4 points.', 'https://s.abcnews.com/images/International/volodymyr-zelenskiy-sh-jpo-190330_hpMain.jpg'),
(8, 'Pope Francis resigns from the papacy to marry a woman. Pope Francis, known for his innovative spirit and openness to change, has surprised the world by announcing his resignation from the papacy. However, this time, it´s not due to health reasons or disagreement with the Church. The shocking news is that Francis has decided to marry a woman', 0, 'This fake news was circulating on social media in 2022, with sensational headlines and manipulated photos. The reality is that Pope Francis remains the leader of the Catholic Church, and there are no plans for resignation.', 'https://es.wikipedia.org/wiki/Francisco_(papa)#/media/Archivo:Portrait_of_Pope_Francis_(2021).jpg'),
(9, 'A massive tsunami, standing 50 meters tall, threatens to destroy the east coast of the United States. According to top-secret government sources, this colossal wave was triggered by an underwater volcanic eruption off the coast of Bermuda. The fiery eruption sent shockwaves through the ocean, creating a towering wall of water that threatens to engulf major cities like New York, Miami, and Washington, D.C.', 0, 'This fake news spread in 2023, causing panic among the population. The information came from a satirical website that many users interpreted as real.', 'https://www.telemundo.com/sites/nbcutelemundo/files/images/promo/article/2017/01/03/mega-tsunami.jpg'),
(10, 'Archaeological discovery in Egypt: An ancient Egyptian city, over 3,000 years old, has been found near Luxor. Archaeologists have unearthed streets, houses, well-preserved tools, and ceramics. This discovery provides a fascinating glimpse into daily life in ancient Egypt.', 1, 'An Egyptian archaeological mission discovered the \"largest ancient city in Egypt,\" over 3,000 years old, near Luxor (south), announced its director, archaeologist Zahi Hawass, on Thursday. \"The archaeological mission discovered a buried city dating back to the reign of King Amenhotep III and which continued to be used by King Tutankhamun, that is, 3,000 years ago,\" the archaeological mission stated in a press release. Amenhotep III, who ascended the throne in 1391 BC, died in the year 1353 BC. Objects such as jewelry and ceramic pieces with his seal were found in the city, allowing for the confirmation of the dating, the text specifies. According to Hawass, cited in the statement, this is \"the largest ancient city in Egypt.\"', 'https://www.elfinanciero.com.mx/resizer/Gbk3OVp8uKYtww1pbtiHOh0IZr4=/1440x810/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/elfinanciero/E5R6KSIJK5FVZAI5KWL7A4SMWQ.jpg'),
(11, 'Poland revokes the permit to extract coal from the Turów mine. This decision does not yet imply an immediate cessation of mining in Poland: it can operate under a temporary concession, while the mine administration is still trying to help the mine survive.', 1, 'After a lengthy battle between the Turów mine and environmentalists, a Polish court overturned an environmental decision allowing coal extraction in Turów. While many interpret this as the beginning of the end, this decision does not yet imply an immediate cessation of mining: it can operate under a temporary concession, while the mine administration is still trying to help the mine survive. Sandra Apanasionek, press officer of PGE GiEK S.A., states: \"The decision of the Voivodeship Administrative Court does not mean that the Turów energy complex will not be able to continue supplying electricity. The Turów mine fulfills its obligations under the environmental decision issued by the Director General of Environmental Protection, implementing a series of investments and environmental measures aimed at reducing the impact of the mine on the surrounding area.\"', 'https://static.euronews.com/articles/stories/08/31/73/16/1920x1080_cmsv2_c2835ddb-8a08-5ff6-8df6-b61eb648a9dd-8317316.jpg'),
(12, 'They attempt to \"hack\" Kate Middleton`s medical history at the London Clinic.', 1, 'A staff member at the clinic attempted to access the medical record of the Princess of Wales. Kate Middleton herself was promptly informed.', 'https://assets.glamour.de/photos/65e1e42620436c220e889f85/16:9/w_2560%2Cc_limit/GettyImages-1832703746.jpg'),
(13, 'The happiest countries in the world: Finland leads the ranking for the seventh consecutive time; Spain drops four positions.', 1, 'Finland leads the global happiness ranking for the seventh consecutive year, while Spain drops to the 36th position and Afghanistan remains in the last place, according to the 2024 World Happiness Report, sponsored by the UN through the Sustainable Development Solutions Network, launched in 2012 by the then Secretary-General of the United Nations, Ban Ki-moon.', 'https://phantom-elmundo.unidadeditorial.es/c96016d9cf0069785446398b7d9ca003/resize/646/f/webp/assets/multimedia/imagenes/2024/03/20/17108975840636.jpg'),
(14, 'Germany shortens deadlines for 100% renewable energy: The German government has announced that it will expedite its plans to achieve climate neutrality, aiming for the country`s entire energy to be renewable by 2035. This ambitious plan involves significant investment in renewable energies and a gradual reduction in the use of fossil fuels.', 1, 'In Germany, the energy transition is a matter of utmost priority. To achieve this, it is essential to increase energy efficiency and expand renewable energies as quickly as possible.', 'https://www.tatsachen-ueber-deutschland.de/sites/default/files/styles/style_image/public/2023-01/66_andres-siimon-fCv4k5aAZf4-unsplash.jpg?itok=30EuP3W-'),
(15, 'Chemical-laden ship sinks off Japan, leaving eight dead: A vessel carrying chemical products capsized and sank off the coast of Japan on March 21, leaving at least eight dead and several missing. The cause of the accident is still under investigation.', 1, 'Four patrol boats and several aircraft continued on Wednesday the search for the nine missing crew members of the cargo ship Jin Tan, which made several distress calls alerting that the vessel had listed and was flooding.', 'https://www.infobae.com/new-resizer/rRyFtWFVQjF3GqQ1SXWW9u382hE=/992x661/filters:format(webp):quality(85)/cloudfront-us-east-1.images.arcpublishing.com/infobae/GNVZUKMPSJUAY5JVZUNCT55JKM.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `question_img_provisional`
--
ALTER TABLE `question_img_provisional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `question_img_provisional`
--
ALTER TABLE `question_img_provisional`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
