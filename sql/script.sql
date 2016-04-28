CREATE TABLE IF NOT EXISTS `TUTO` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(25) NOT NULL,
  `description` varchar(128) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `media` varchar(128) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_type`) REFERENCES `TYPE`(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `TYPE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `PROJET` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(25) NOT NULL,
  `description` varchar(128) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `media` varchar(128) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_type`) REFERENCES `TYPE`(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `MEMBRE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `image` varchar(25) DEFAULT NULL,
  `site` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `LANGAGE` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langage` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `PROMOTION` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `role` varchar(256) DEFAULT NULL,
  `date` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_membre`) REFERENCES `MEMBRE`(`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `PROJET_MEMBRE` (
  `id_projet` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id_projet`,`id_membre`),
  FOREIGN KEY (`id_projet`) REFERENCES `PROJET`(`id`),
  FOREIGN KEY (`id_membre`) REFERENCES `MEMBRE`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `PROJET_LANGAGE` (
  `id_projet` int(11) NOT NULL,
  `id_langage` int(11) NOT NULL,
  PRIMARY KEY (`id_projet`,`id_langage`),
  FOREIGN KEY (`id_projet`) REFERENCES `PROJET`(`id`),
  FOREIGN KEY (`id_langage`) REFERENCES `LANGAGE`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `TUTO_MEMBRE` (
  `id_tuto` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id_tuto`,`id_membre`),
  FOREIGN KEY (`id_tuto`) REFERENCES `TUTO`(`id`),
  FOREIGN KEY (`id_membre`) REFERENCES `MEMBRE`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `TUTO_LANGAGE` (
  `id_tuto` int(11) NOT NULL,
  `id_langage` int(11) NOT NULL,
  PRIMARY KEY (`id_tuto`,`id_langage`),
  FOREIGN KEY (`id_tuto`) REFERENCES `TUTO`(`id`),
  FOREIGN KEY (`id_langage`) REFERENCES `LANGAGE`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `MEMBRE_LANGAGE` (
  `id_membre` int(11) NOT NULL,
  `id_langage` int(11) NOT NULL,
  PRIMARY KEY (`id_membre`,`id_langage`),
  FOREIGN KEY (`id_membre`) REFERENCES `MEMBRE`(`id`),
  FOREIGN KEY (`id_langage`) REFERENCES `LANGAGE`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
