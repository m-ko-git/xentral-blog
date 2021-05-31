CREATE TABLE `blogposts` (
  `uid` int(10) NOT NULL,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `tstamp` int(10) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `crdate` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;