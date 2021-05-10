CREATE TABLE `department` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `depart_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `department` (`id`, `depart_name`) VALUES
(1, 'Finance'),
(2, 'IT'),
(3, 'Marketing'),
(4, 'Operational'),
(5, 'Sales'),
(6, 'Staff');
