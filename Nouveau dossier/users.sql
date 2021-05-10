

CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `name`, `email`, `department`) VALUES
(1, 'yssyogesh', 'Yogesh singh', 'yssyogesh@gmail.com', 2),
(2, 'sonarika', 'Sonarika', 'sonarika@gmail.com', 4),
(3, 'vishal', 'Vishal Sahu', 'vishal@gmail.com', 4),
(4, 'mayank', 'Mayank', 'mayank@yahoo.com', 1),
(5, 'vijay', 'Vijay', 'vijayec@gmai.com', 2),
(6, 'jiten', 'Jiten singh', 'jiten93@gmail.com', 2),
(7, 'rahul', 'Rahul singh', 'rahul@gmail.com', 6),
(8, 'shreya', 'Shreya', 'shreya@yahoo.com', 1),
(9, 'mohit', 'Mohit', 'mohit@gmail.com', 5),
(10, 'rohit', 'Rohit singh', 'rohit@gmail.com', 2),
(11, 'abhilash', 'Abhilash ', 'abhilash@gmail.com', 1),
(12, 'abhishek', 'Abhishek', 'abhishek@yahoo.com', 5),
(13, 'aditya', 'Aditya', 'aditya@gmail.com', 2),
(14, 'ajay', 'Ajay singh', 'ajay@gmail.com', 6),
(15, 'akhilesh', 'Akhilesh', 'akhilesh@yahoo.com', 5),
(16, 'daniel', 'Daniel', 'daniel@yahoo.com', 4),
(17, 'deepak', 'Deepak', 'deepak@gmail.com', 3),
(18, 'ganesh', 'Ganesh', 'ganesh@gmail.com', 1),
(19, 'gaurav', 'Gaurav', 'gaurav@yahoo.com', 4),
(20, 'gautam', 'Gautam', 'gautam@gmail.com', 6),
(21, 'kuldeep', 'Kuldeep', 'kuldeep@gmail.com', 6),
(22, 'mukesh', 'Mukesh', 'mukesh@yahoo.com', 3),
(23, 'nitin', 'Nitin', 'nitin@gmail.com', 3),
(24, 'palash', 'Palash', 'palash@gmail.com', 3);
