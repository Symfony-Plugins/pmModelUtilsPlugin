
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- article
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `article`;


CREATE TABLE `article`
(
	`title` VARCHAR(255)  NOT NULL,
	`content` TEXT  NOT NULL,
	`status` INTEGER default 0,
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
	UNIQUE KEY `article_U_1` (`title`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
