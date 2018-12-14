-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 14, 2018 at 03:36 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `millhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_by` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `content`, `post_id`, `created_by`, `comment_date`) VALUES
(45, 'Where can I buy that chair?! Love it!', 9, 'Julia', '2018-12-09'),
(46, 'I love that color!', 8, 'Julia', '2018-12-09'),
(47, 'Wow, that looks great.', 8, 'RebeccaKling', '2018-12-09'),
(48, 'Love it, especially that plaid.', 9, 'RebeccaKling', '2018-12-09'),
(49, 'I love it!', 13, 'RebeccaKling', '2018-12-10'),
(51, 'Great post!', 12, 'RebeccaKling', '2018-12-10'),
(52, 'Great post.', 13, 'Niklas', '2018-12-10'),
(53, 'Love it.', 12, 'Niklas', '2018-12-10'),
(54, 'Great post.', 9, 'Niklas', '2018-12-10'),
(55, 'Omg, prettiest I\'ve ever seen <3', 13, 'Sherie', '2018-12-10'),
(60, 'It\'s the day after Lucia today!', 8, 'Julia', '2018-12-14'),
(64, 'I like rubberducks, tacos and bananas :-)', 13, 'JesperOrb', '2018-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `created_by`, `image`, `category`, `post_date`) VALUES
(8, 'Santas little helpers', 'The winter holiday is coming up and christmas-presents are to be purchased. We have the perfect tips for you to purchase the perfect gifts for your loved ones. Pastells, candles and time-telling are two great ways of surprising your friends and family in the winter half-year, and with our expertise you will tick every box in the wishlist.', 'Julia', 'uploads/arnold-leung-754011-unsplash.jpg', 'Home accessories', '2018-12-09'),
(9, 'Love for creations', 'Hi loved ones! Let\'s talk art. The end of our love for art is no where to be found, and we love all sorts of it. Paintings, nice cushions, a chair in sandal wood - the list is long, and doesn\'t get any shorter as we look for inspiration. We have a great passion for interior, and always look for improvements and new thoughts. Right now we are actually hiring, are you interested - or do you know someone who is interested? Please email us your application containing your worst selfie, resume, a picture of your favorite rubber duck and your preferred taco. We\'ll be waiting!', 'Julia', 'uploads/christopher-burns-435998-unsplash.jpg', 'Home accessories', '2018-12-09'),
(12, 'Watching watches', 'Watches, watches and more watches. Watching the second hand tick after each second passing, with nice pastells and a great wristlet to finish it off.&nbsp; Watches can come in every color, in every style and you can really personalize it to make it just right. We absolutely adore these Just-In watches from our own brand, and if you enter our discount code MILLHOUSE20 you\'ll get 20% off your next purchase. Happy shopping! Please let us know in the comments below what you think, and what you possibly would like our next discount code to be.', 'Julia', 'uploads/goldenwatch.jpg', 'Watches', '2018-12-09'),
(13, 'Needing summer', 'Summer is getting closer but yet so far away. We are craving sunkissed skin and salt-wavy hair after a beach hangout, and best but not least - those cool sunglasses you wear to complete your look-of-the-day. As the winter and cold is crawling its way back into our homes, all we want is to jump on the first plane to warmer latitudes, flying further and further away from this igloo. How about Mexico? Eating tacos all day, having a swim with your favorite rubber duck and picking tasty bananas off of the trees. Life.', 'Julia', 'uploads/yellowwallsunglasses.jpg', 'Sunglasses', '2018-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `admin`) VALUES
(2, 'Julia', '$2y$10$RQprxjQJW4MRPup5./oXcelCotOOBz.2yL3vgOc7lCL1izvpkdQd2', 1),
(6, 'RebeccaKling', '$2y$10$cCQ2ccYmEANAZsYHqiY3KugO/4JklRKK8as3cPVhtffToukBfzyri', 0),
(8, 'Lina', '$2y$10$siAatQOV/CzpBJBocgKVMeSVoku7DT9B4gp0428X9rhlZbYrq1MLG', 0),
(10, 'Sherie', '$2y$10$S1aCO6vnu9pXX3ny0IkCWer8vCfVb1pBORRP0.XSeuHxBMdflg10a', 0),
(14, 'JesperOrb', '$2y$10$K98FSBMAnxfYsXEXoi8gzephhOD8LDhjL8MrmCQVhKVCwtlPXk0da', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
