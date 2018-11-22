SET FOREIGN_KEY_CHECKS=0;

CREATE TABLE `letter_mark`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`letter` VARCHAR(255)  NOT NULL,
	`value` INTEGER  NOT NULL,
	PRIMARY KEY (`id`)
)Engine=InnoDB COMMENT='Representa la referencia de letras a numeros';

CREATE TABLE `letter_mark_average`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`letter_mark_1` INTEGER  NOT NULL,
	`letter_mark_2` INTEGER  NOT NULL,
	`letter_mark_3` INTEGER  NOT NULL,
	`letter_mark_average` INTEGER  NOT NULL,
	PRIMARY KEY (`id`)
)Engine=InnoDB COMMENT='null';
ALTER TABLE `subject_configuration` ADD `numerical_mark` INTEGER default 1 COMMENT 'Esta configuracion define si la nota es numerica 1 o con letras 0';
ALTER TABLE `student_advice` CHANGE `value` `value` DECIMAL default 1 NOT NULL;
