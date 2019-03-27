SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE `course_subject_student_mark` CHANGE `mark` `mark` VARCHAR(5) COMMENT 'Nota que obtuvo el alumno';
ALTER TABLE `student_advice` CHANGE `value` `value` DECIMAL default 1 NOT NULL;
