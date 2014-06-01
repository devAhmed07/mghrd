CREATE TABLE IF NOT EXISTS `AdminCp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Mail` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admincp`
--

INSERT INTO `AdminCp` (`id`, `Username`, `Password`, `Mail`) VALUES
(1, 'admin', '123456', 'protop96@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `all`
--

CREATE TABLE IF NOT EXISTS `all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `website` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Tags` varchar(200) NOT NULL,
  `Twitter` varchar(200) NOT NULL,
  `followe` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `all`
--

INSERT INTO `all` (`id`, `website`, `Description`, `Tags`, `Twitter`, `followe`) VALUES
(1, 'Ø£Ø³Ù… Ø§Ù„Ù…ÙˆÙ‚Ø¹', ',ÙˆØµÙ Ø§Ù„Ù…ÙˆÙ‚Ø¹', 'Ø§Ù„ÙƒÙ„Ù…Ø§Øª Ø§Ù„Ø¯Ù„ÙŠÙ„Ø©', 'Ù…Ø£ Ø°Ø§ Ø³ÙˆÙ ØªØºØ±Ø¯', '');

-- --------------------------------------------------------

--
-- Table structure for table `cron`
--

CREATE TABLE IF NOT EXISTS `cron` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cron` int(11) NOT NULL,
  `tweet` varchar(300) NOT NULL,
  `users` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`) VALUES
(3, '111'),
(4, '222'),
(5, '333'),
(6, '444'),
(7, '555');

-- --------------------------------------------------------

--
-- Table structure for table `tweetst`
--

CREATE TABLE IF NOT EXISTS `tweetsT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` int(30) NOT NULL,
  `tweet` varchar(250) NOT NULL,
  `group` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tweetsu`
--

CREATE TABLE IF NOT EXISTS `tweetsU` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` int(30) NOT NULL,
  `tweet` varchar(250) NOT NULL,
  `accessToken` varchar(250) NOT NULL,
  `accessTokenSecret` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tweetsu`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) DEFAULT NULL,
  `oauth_uid` varchar(200) DEFAULT NULL,
  `oauth_provider` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `twitter_oauth_token` varchar(300) DEFAULT NULL,
  `twitter_oauth_token_secret` varchar(300) DEFAULT NULL,
  `accessToken` varchar(200) NOT NULL,
  `accessTokenSecret` varchar(200) NOT NULL,
  `screen_name` varchar(200) NOT NULL,
  `section` int(22) NOT NULL,
  `Muslim` int(1) NOT NULL,
  `next` int(60) NOT NULL,
  `nextOk` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--
