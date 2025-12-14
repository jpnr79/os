-- Migration for Plugin OS tables
CREATE TABLE IF NOT EXISTS `glpi_plugin_os_config` (
    `id` int(1) unsigned NOT NULL default '1',
    `name` varchar(255) NOT NULL default '0',
    `cnpj`  varchar(50) NOT NULL default '0',
    `address` varchar(50) NOT NULL default '0',
    `phone` varchar(255) NOT NULL default '0',
    `city`  varchar(255) NOT NULL default '0',
    `site`  varchar(50) NOT NULL default '0',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `glpi_plugin_os_rn` (
    `id` int(4) NOT NULL AUTO_INCREMENT,
    `entities_id` int(4) NOT NULL,
    `rn` varchar(50) NOT NULL,
    PRIMARY KEY (`id`,`entities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

ALTER TABLE `glpi_plugin_os_rn` ADD UNIQUE (`entities_id`);
