# mockTwitter
Basic Twitter model
  This project uses php, HTML, CSS and AJAX requests.
  I've used phpMyAdmi, i.e. MySQL database.
  Make the following tables in a database called twitter.
  
  CREATE TABLE `isFollowing` (
  `id` int(11) NOT NULL,
  `follower` int(11) NOT NULL,
  `isFollowing` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  ALTER TABLE `isFollowing`
  ADD PRIMARY KEY (`id`);
  
  ALTER TABLE `isFollowing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT ;COMMIT;
  
  CREATE TABLE  `tweets` (
  `id` int(11) NOT NULL,
  `tweet` text NOT NULL,
  `userid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);
  ALTER TABLE `tweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

  ALTER TABLCREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  ALTER TABLE `users` 
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;
  
  Clone repo. Place files in ./opt/htdocs and open localhost/twitter/index.php.
  
  
  
  
