-- Database: `recipe_db`
--

-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `ingredients`, `instructions`) VALUES
(1, 'Pasta Carbonara', 'Spaghetti, Eggs, Pancetta, Parmesan Cheese, Black Pepper', '1. Cook spaghetti according to package instructions. 2. Fry pancetta until crispy. 3. Beat eggs with Parmesan cheese. 4. Mix cooked spaghetti with egg mixture and pancetta. 5. Serve with freshly ground black pepper.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
