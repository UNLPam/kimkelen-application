SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE `person` ADD `civil_status` INTEGER default 0 COMMENT 'Representa el estado civil de la persona (Soltero-Casado-Viudo-Divorciado)', CHANGE `sex` `sex` INTEGER;
ALTER TABLE `student` ADD `year_income` DATE COMMENT 'Año de ingreso', ADD `nationality` INTEGER default 0 COMMENT 'La nacionalidad del estudiante (nativo, naturalizado, extrangero)';
ALTER TABLE `course_subject_teacher` DROP INDEX course_subject_teacher_FI_3, CHANGE `date_to` `date_to` DATE;
ALTER TABLE `student_advice` CHANGE `value` `value` DECIMAL default 1 NOT NULL;
