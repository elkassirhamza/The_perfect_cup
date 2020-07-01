-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 juil. 2020 à 01:40
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `perfect_cup1`
--

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `client_id` int(3) NOT NULL,
  `item_id` int(3) NOT NULL,
  `item_title` varchar(255) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_price` int(3) NOT NULL,
  `item_quantity` int(3) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`client_id`, `item_id`, `item_title`, `item_image`, `item_price`, `item_quantity`) VALUES
(1, 1, 'COCONUT OIL COFFEE', 'slide-11.jpg', 55, 2),
(1, 4, 'Capsules Lavazza ', 'lavazza-capsules.jpg', 120, 1);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_product` int(4) NOT NULL,
  `image_product` text DEFAULT NULL,
  `title_pruduct` varchar(50) NOT NULL,
  `description_product` text DEFAULT NULL,
  `modal_product` text DEFAULT NULL,
  `prix_product` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_product`, `image_product`, `title_pruduct`, `description_product`, `modal_product`, `prix_product`) VALUES
(1, 'slide-1.jpg', 'COCONUT OIL COFFEE', 'Start your morning off with this great recipe for hot coffee with coconut oil and butter.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam tenetur quaerat deleniti consequuntur at, itaque soluta dicta ab modi velit tempora officia nisi explicabo incidunt amet corporis autem sunt', 25);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `product_id` int(3) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_info` text NOT NULL,
  `product_price` int(3) NOT NULL,
  `product_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`product_id`, `product_title`, `product_image`, `product_desc`, `product_info`, `product_price`, `product_date`) VALUES
(1, 'COCONUT OIL COFFEE', 'slide-11.jpg', 'Start your morning off with this great recipe for hot coffee with coconut oil and butter.', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam tenetur quaerat deleniti consequuntur at,', 55, '2020-05-31'),
(2, 'IRISH COFFEE', 'slide-22.jpg', 'Take the edge off with a fresh hot cup of coffee make with Irish whiskey and Irish cream.', '“Irish Coffee” : voici un nom pour le moins évocateur, qui désigne un cocktail typiquement irlandais. Aussi célèbre que les bières irlandaises, ce breuvage est considéré comme un digestif en Irlande, qui se sirote à la fin du repas, au restaurant ou au sein d’un bon vieil irish pub. Ses ingrédients sont simples et savoureux et font appel à du café, du whiskey, du sucre et à de la crème. Le résultat est saisissant et a le mérite d’être réconfortant !', 69, '2020-06-17'),
(3, 'FROZEN CARAMEL LATTE', 'slide-33.jpg', 'Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of the day.', 'This frothy, blended espresso drink will wake you up and make you happy any time of day. Sweetened with caramel sauce and topped with whipped cream, this is one delicious frozen latte.', 89, '2020-06-17'),
(4, 'Capsules Lavazza ', 'lavazza-capsules.jpg', 'Les cafés Arabica du Brésil, corsés avec des notes de fruits secs, s\'harmonisent avec ceux de l\'Inde, avec leurs arômes doux et intenses.', '  Découvrez les saveurs d\'un délicieux café avec ces capsules de café espresso Lavazza A Modo Mio Passionale. La classe, le caractère et la chaleur de ce mélange vous séduiront. Sombre et corsé, ce superbe mélange est l\'apogée de 110 ans de passion et de savoir-faire Lavazza dans la création et la préparation de grands cafés italiens. À savourer au réveil pour faire le plein d’énergie pour toute la journée ! Avec le Lavazza A Modo Mio Passionate, vous dégusterez le goût du vrai café italien chez vous.', 120, '2020-06-17');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'EL KASSIR', 'HAMZA', 'elkassir.hamza05@gmail.com', '$2y$10$SEkEotWd4McCYyxXQTNrUuzbqy2AY2WsFm.jBs5RY2VOArb2tbftm'),
(3, 'hamza', 'hamza', 'kosi.test@gmail.com', '$2y$10$jxrSy2nXexr009JkLQaOPOBGQZb6lXg7zYzToXVVQUqEjMLReethS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`item_id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_product`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`product_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_product` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
