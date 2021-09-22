CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cogname` varchar(255) NOT NULL,
  `Cfiscale` varchar(255) NOT NULL,
  `indrizzo` varchar(255) NOT NULL,
  `cap` varchar(255) NOT NULL,
  `nazine` varchar(255) NOT NULL,
  `cita` varchar(255) NOT NULL,
  `provinza` varchar(255) NOT NULL,


) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `cogname`,`Cfiscale`, `indrizzo`, `cap`, `nazine`, `cita`, `provinza`) VALUES
('Anonymous ', 'Anonymous@gmail.com', 'Anonymous',' programmer', 'test', 'test', 'test', 'test','test' );

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;