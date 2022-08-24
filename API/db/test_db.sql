CREATE DATABASE registration_form;

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'Subham', 'subham@mail.con', '9087654311','sk123'),
(2, 'Soumya', 'soumya@hotmail.com', '8094581110','sr123'),
(3, 'Madhu', 'madhu@abc.in', '9086730103','m123');
