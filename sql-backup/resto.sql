-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 05:39 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` smallint(5) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`, `ip`) VALUES
(1, 'admin', '12345', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `orderid` smallint(100) UNSIGNED NOT NULL,
  `customername` varchar(100) DEFAULT NULL,
  `customerphone` int(12) DEFAULT NULL,
  `order_status` char(100) DEFAULT 'pending',
  `orderdate` datetime DEFAULT NULL,
  `itemname` varchar(100) DEFAULT NULL,
  `itemoffer` varchar(100) DEFAULT NULL,
  `discount` float(4,2) NOT NULL,
  `each_item_cost` float(6,2) NOT NULL,
  `item_qty` int(100) NOT NULL,
  `total_cost` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`orderid`, `customername`, `customerphone`, `order_status`, `orderdate`, `itemname`, `itemoffer`, `discount`, `each_item_cost`, `item_qty`, `total_cost`) VALUES
(15, 'madhav', 1234567890, '1', '2019-08-29 13:03:24', 'pizza', 'no offer', 2.00, 99.00, 1, 99.00);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customername` varchar(100) DEFAULT NULL,
  `customerphone` int(12) DEFAULT NULL,
  `number_verifed` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customername`, `customerphone`, `number_verifed`) VALUES
('varsha patil', 1234567890, 0),
('krishna patil', 909090909, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fftw`
--

CREATE TABLE `fftw` (
  `menu` varchar(100) NOT NULL,
  `ingredients` varchar(500) NOT NULL,
  `howtodo` longtext,
  `ip` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `yvd` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fftw`
--

INSERT INTO `fftw` (`menu`, `ingredients`, `howtodo`, `ip`, `date`, `yvd`) VALUES
('tomato soup', '1/2 kg tomato,1/2 tea spoon sugar,Black pepper, salt, 1 cup water', 'Tomato soup is a soup made with tomatoes as the primary ingredient. It may be served hot or cold in a bowl, and may be made in a variety of ways.\r\n\n [1] It may be smooth in texture, and there are also recipes which include chunks of tomato, cream and chicken or vegetable stock. Popular toppings for tomato soup include sour cream or croutons. In the United States, the soup is frequently served with crackers, which may be crumbled onto the soup by the diner. Tomato soup is one of the top comfort foods in Poland\r\n\n [2] and the United States.\r\n\n [3] It can be made fresh by blanching tomatoes, removing the skins, then blending them into a puree.\r\n\r\nAlternative names	Cream of Tomato\r\nType	Soup\r\nServing temperature	Hot or cold\r\nMain ingredients	Tomatoes\r\nVariations	Gazpacho\r\n\r\n Food energy\r\n(per 100 g serving)\r\n30 kcal (126 kJ)\r\n\r\n Nutritional value\r\n(per 100 g serving)\r\n\r\n Protein	0.8 g\r\nFat	0.3 g\r\n\r\n Carbohydrate	7 g', NULL, '2019-07-25 22:28:03', 'https://www.youtube.com/embed/3Ajs26w4YNI'),
('Jambo samosa pav', 'Maida, potatoes, onions', 'A samosa (/s??mo?s?/) is a fried or baked dish with a savoury filling, such as spiced potatoes, onions, peas, meat, or lentils. It may take different forms, including triangular, cone, or half-moon shapes, depending on the region.[2][3][4] The Indian style, often accompanied by a chutney, is probably the most widely-known of a broad family of recipes from Africa to China, which have origins in medieval times or earlier.[2] Samosas are a popular entrée, appetizer, or snack in the local cuisines of the Indian subcontinent, Western Asia, Southeast Asia, the Mediterranean, and Africa. Due to emigration and cultural diffusion from these areas, samosas in today\'s world are also prepared in other regions.\r\n\r\nThe samosa originated in the Middle East and Central Asia.[9] It then spread to Africa, Southeast Asia, South Asia, and elsewhere. The term samosa and its variants cover a family of pastries and dumplings popular from north-eastern Africa to western China. The samosa spread to the Indian subcontinent, alongside the spread of Islam, during Muslim rule in the region.[10] A praise of samosa (as sanbusaj) can be found in a 9th-century poem by the Persian poet Ishaq al-Mawsili. Recipes for the dish are found in 10th–13th-century Arab cookery books, under the names sanbusak, sanbusaq, and sanbusaj, all of which derive from the Persian word sanbosag. In Iran, the dish was popular until the 16th century, but by the 20th century, its popularity was restricted to certain provinces (such as the sambusas of Larestan).[2] Abolfazl Beyhaqi (995-1077), an Iranian historian, mentioned it in his history, Tarikh-e Beyhaghi.[11]\r\n\r\nCentral Asian samsa were introduced to the Indian subcontinent in the 13th or 14th century by traders from Central Asia.[5] Amir Khusro (1253–1325), a scholar and the royal poet of the Delhi Sultanate, wrote in around 1300 CE that the princes and nobles enjoyed the \"samosa prepared from meat, ghee, onion, and so on\".[12] Ibn Battuta, a 14th-century traveler and explorer, describes a meal at the court of Muhammad bin Tughluq, where the samushak or sambusak, a small pie stuffed with minced meat, almonds, pistachios, walnuts, and spices, was served before the third course, of pulao.[13] Nimmatnama-i-Nasiruddin-Shahi, a medieval Indian cookbook started for Ghiyath al -Din Khalji, the ruler of the Malwa Sultanate in central India, mentions the art of making samosa.[14] The Ain-i-Akbari, a 16th-century Mughal document, mentions the recipe for qutab, which it says, “the people of Hindustan call sanbúsah”.[1', NULL, '2019-07-26 05:01:08', 'https://www.youtube.com/embed/iIVJN0Yz1Y0'),
('Jambo samosa pav', 'Maida, potatoes, onions', 'A samosa (/s??mo?s?/) is a fried or baked dish with a savoury filling, such as spiced potatoes, onions, peas, meat, or lentils. It may take different forms, including triangular, cone, or half-moon shapes, depending on the region.[2][3][4] The Indian style, often accompanied by a chutney, is probably the most widely-known of a broad family of recipes from Africa to China, which have origins in medieval times or earlier.[2] Samosas are a popular entrée, appetizer, or snack in the local cuisines of the Indian subcontinent, Western Asia, Southeast Asia, the Mediterranean, and Africa. Due to emigration and cultural diffusion from these areas, samosas in today\'s world are also prepared in other regions.\r\n\r\nThe samosa originated in the Middle East and Central Asia.[9] It then spread to Africa, Southeast Asia, South Asia, and elsewhere. The term samosa and its variants cover a family of pastries and dumplings popular from north-eastern Africa to western China. The samosa spread to the Indian subcontinent, alongside the spread of Islam, during Muslim rule in the region.[10] A praise of samosa (as sanbusaj) can be found in a 9th-century poem by the Persian poet Ishaq al-Mawsili. Recipes for the dish are found in 10th–13th-century Arab cookery books, under the names sanbusak, sanbusaq, and sanbusaj, all of which derive from the Persian word sanbosag. In Iran, the dish was popular until the 16th century, but by the 20th century, its popularity was restricted to certain provinces (such as the sambusas of Larestan).[2] Abolfazl Beyhaqi (995-1077), an Iranian historian, mentioned it in his history, Tarikh-e Beyhaghi.[11]\r\n\r\nCentral Asian samsa were introduced to the Indian subcontinent in the 13th or 14th century by traders from Central Asia.[5] Amir Khusro (1253–1325), a scholar and the royal poet of the Delhi Sultanate, wrote in around 1300 CE that the princes and nobles enjoyed the \"samosa prepared from meat, ghee, onion, and so on\".[12] Ibn Battuta, a 14th-century traveler and explorer, describes a meal at the court of Muhammad bin Tughluq, where the samushak or sambusak, a small pie stuffed with minced meat, almonds, pistachios, walnuts, and spices, was served before the third course, of pulao.[13] Nimmatnama-i-Nasiruddin-Shahi, a medieval Indian cookbook started for Ghiyath al -Din Khalji, the ruler of the Malwa Sultanate in central India, mentions the art of making samosa.[14] The Ain-i-Akbari, a 16th-century Mughal document, mentions the recipe for qutab, which it says, “the people of Hindustan call sanbúsah”.[1', NULL, '2019-07-26 05:01:21', 'https://www.youtube.com/embed/iIVJN0Yz1Y0'),
('kachori with dahi', 'asafoetida, moong dal, ginger-green chilli paste, chilli powder, garam masala, dry mango powder, sugar and salt,', 'One of the most popular chaats that you will see in North India is Raj Kachori. A dish that has so many flavours that will burst in your mouth in just a bite. Whenever you feel like having a delicious yet lip-smacking snack, then you must try this chaat recipe that can be prepared in just 30-40 minutes. This chaat recipe is very successful and is a favourite of many. You can even think of it as a meal in itself as it has so many ingredients in it that keeps your stomach full. It requires a lot of ingredients to make this snack which can be a little time consuming, however, the result of this whole process will make you love it more! It is an exceptional snack recipe for special occasions and festivals. You can even prepare it for occasions like kitty parties, game nights, and potlucks. All you need is whole wheat flour, gram flour, semolina to prepare the dough. Afterwards, boiled kala chana and potatoes are filled in it along with boiled moong sprouts and a melange of spices. Not just that, it is garnished with hung curd, green chutney, sweet tamarind chutney, crushed papdis, onions, and sev along with chaat masala powder. To make it more flavourful, you can also add pomegranate seeds over all these ingredients. So, what are you waiting form? Try this delicious chaat recipe and enjoy with your loved ones!\r\n\r\nStep 1 -\r\nTo prepare this amazing chaat recipe, take a large bowl and mix together whole wheat flour, semolina, gram flour and ghee. Using a little water, knead the mixture to a thick, pliable dough. Once done, cover the dough with a damp cloth and keep aside for preparing the kachori. Afterwards, soak moong dal in a bowl for 2 hours in a large bowl. Once done, drain the extra water and keep aside.\r\n\r\nStep 2 -\r\nNext, put a frying pan over medium flame and heat a little ghee in it. Once the ghee is melted, add the soaked moong dal in it and stir fry for a minute. Once fried a bit, turn off the flame and transfer the fried dal to a grinder jar. When the dal is cool enough to handle, grind to a coarse mixture. Then, add all the filling ingredients into the grinding jar and grind them roughly.\r\n\r\nStep 3 -\r\nNow, take out a small portion of the prepared dough and using a rolling pin, roll it into a small puri. Just like stuffed paratha, fill it with a tablespoon of the filling and fold well. Then, using a little dry flour, roll the puri again. Meanwhile, put a kadhai on high flame and heat refined oil in it. Once the oil is hot enough, add this puri in it and deep fry until the puri is crisp and golden. Once fried, put it on napkin to soak the extra oil. Once done, make a small hole in the centre.\r\n\r\nStep 4 -\r\nNow, take a mixing bowl and add boiled potatoes in it along with chana and boiled moong sprouts. Mix them with yoghurt, green chutney, sweet tamarind chutney, chaat masala powder, chopped coriander leaves & onion, salt, green chillies. Then, fill the kachori with this mixture and garnish with hung curd, green chutney, sweet tamarind chutney, chaat masala powder, salt, coriander leaves, crushed papdis and cumin powder. Make the final garnishing of sev and serve immediately.', NULL, '2019-07-26 05:09:14', 'https://www.youtube.com/embed/-ZAvn6RMPuk'),
('Masala doash', '1-1/2 cups long grain rice\r\n1/2 cup urad dal (polished black lentil or white lentil)\r\n3 quarts water\r\nSalt\r\n1 medium onion, chopped\r\n1 – 2 green chilies, chopped\r\n1 Tbs. ghee (clarified butter) or regular butter\r\n1/2 tsp. black mustard seeds\r\n1/2 tsp. chana dal (split black chickpeas)\r\n1 sprig curry leaves\r\n1/2 tsp. turmeric powder\r\n2 large potatoes, boiled\r\n8 oz. coconut, cilantro and tomato chutney (optional)\r\n16 oz. sambar (vegetable lentil stew, optional)', 'Prepare Dosa Batter:Soak rice and urad dal in separate bowls for 4-6 hours. Strain.\r\nProcess rice and urad dal mixture in commercial grinder or food processor. While grinding, add water a cup at a time until it reaches the consistency of pancake batter.\r\nSalt to taste.\r\nCover mixture and let sit overnight. Do not refrigerate; it needs to ferment.\r\nPrepare Masala Dosa Filling: Add oil or ghee to a skillet.\r\nAdd mustard seeds and chana dal.\r\nShake mixture over the flame until golden brown.\r\nAdd curry leaves (whole leaf), green chiles, and onions.\r\nSprinkle turmeric powder and salt (for taste). Stir.\r\nBreak up boiled potato into small chunks and add them to your mixture. Add water and stir.\r\nPrepare Masala Dosa: Pour refrigerated dosa mixture into a small bowl with a flat bottom.\r\nPour batter into a greased skillet.\r\nImmediately, starting from the center, begin forming a circular shape with the batter using the flat-bottomed dish.\r\nBrush on ghee (or regular butter) to frying dosa.\r\nPlace filling near the center of the dosa.\r\nLightly lift the edges of the dosa.\r\nBegin rolling from the edge of the dosa as you would a wrap.\r\nRemove dosa from hot top or skillet.\r\nMasala Dosa is typically served with coconut, cilantro and tomato chutney as well as sambar (vegetable lentil stew)', NULL, '2019-07-26 05:14:55', 'https://www.youtube.com/embed/mDqkxZ3UVzc');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `name` varchar(100) DEFAULT NULL,
  `offer` varchar(100) DEFAULT '-',
  `discount` float(4,2) DEFAULT NULL,
  `cost` float(8,2) DEFAULT NULL,
  `menu_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`name`, `offer`, `discount`, `cost`, `menu_img`) VALUES
('tomato soup', 'Buy 1 get 1/2 Free', 10.00, 300.00, 'spv/tomato-soup.jpg'),
('Celeriac, hazelnut & truffle soup', 'Buy 2 get free 1 tomoto soup', 0.00, 115.00, 'spv/celeriac-soup.jpg'),
('indian spiced tomato soup', 'Buy 1 get 1/2 Free', 10.00, 300.00, 'spv/hot-tomato-soup.jpg'),
('indian spiced tomato soup', 'sorry no offer available', 10.00, 99.00, 'spv/mulligatawny-soup.jpg'),
('Jambo samosa pav', 'Buy 1 get 1 Free = 2', 2.00, 20.00, 'fruits-2565817_1920.jpg'),
('samosa with sweet potatos', 'Buy 2 get 1 free = 3', 5.00, 18.00, 'fruits-2565817_1920.jpg'),
('crush samosa with papar shew', 'sorry no offer available', 2.00, 25.00, 'fruits-2565817_1920.jpg'),
('fish cury', 'Buy 1 + 1 soup + 1 timepass free for today only', 0.00, 120.00, 'spv/fish-soup.jpg'),
('veg franky', 'no offer available', 0.00, 40.00, 'spv/veg-franky.jpg'),
('fries food', '2 type of free sauce', 0.00, 10.00, 'spv/fries-food.jpg'),
('pizza', 'buy 2 Get 1 Free', 5.00, 99.00, 'spv/pizza.jpg'),
('burger', 'no offer available', 0.00, 99.00, 'spv/burger.jpg'),
('coffee', 'no offer available', 0.00, 12.00, 'spv/coffee.jpg'),
('lemon tea', 'no offer available', 0.00, 25.00, 'spv/tea.jpg'),
('sabudana vada', 'no offer available', 0.00, 35.00, 'spv/sabudana-vada.jpg'),
('idli with dosa', 'no offer available', 5.00, 49.00, 'spv/dosa.jpg'),
('medu vada (only if oredered now)', 'no offer available', 5.00, 45.00, 'spv/medu-vada.jpg'),
('dahi kachori', 'no offer available', 0.00, 42.00, 'spv/dahi-kachori.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `fftw`
--
ALTER TABLE `fftw` ADD FULLTEXT KEY `ID_fftw_CI` (`menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu` ADD FULLTEXT KEY `ID_menu_CL` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `orderid` smallint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
