SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE `letter_mark_average` ADD `letter_mark_4` VARCHAR(255)  NOT NULL, ADD `letter_mark_5` VARCHAR(255)  NOT NULL;
ALTER TABLE `student_advice` CHANGE `value` `value` DECIMAL default 1 NOT NULL;
