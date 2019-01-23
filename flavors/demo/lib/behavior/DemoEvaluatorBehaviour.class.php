<?php 
/*
 * Kimkëlen - School Management Software
 * Copyright (C) 2013 CeSPI - UNLP <desarrollo@cespi.unlp.edu.ar>
 *
 * This file is part of Kimkëlen.
 *
 * Kimkëlen is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License v2.0 as published by
 * the Free Software Foundation.
 *
 * Kimkëlen is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Kimkëlen.  If not, see <http://www.gnu.org/licenses/gpl-2.0.html>.
 */ ?>
<?php

/**
 * Copy and rename this class if you want to extend and customize
 */
class DemoEvaluatorBehaviour extends BaseEvaluatorBehaviour
{

public function getMarksAverage($course_subject_student, PropelPDO $con = null)
  {
    $first_mark = false;
    $second_mark = false;
     $minimum_mark = $course_subject_student->getCourseSubject($con)->getCareerSubjectSchoolYear($con)->getConfiguration($con)->getCourseMinimunMark();

    foreach ($course_subject_student->getCourseSubjectStudentMarks(null, $con) as $cssm)
    {
      //$sum += $cssm->getMark();
      if (($cssm->getMarkNumber() == 2) && ($cssm->getMark() >= 7) )
       $first_mark = true;
      if (($cssm->getMarkNumber() == 4) && ($cssm->getMark() >= 7) )
       $second_mark = true;

    }
     if ( ($first_mark == true) && ($second_mark == true) )
       $average = $minimum_mark;
     else
       $average = $minimum_mark - 1;

    return $average;
  }




}
