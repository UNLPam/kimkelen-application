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
        echo "<br> ivan --* $minimum_mark";

	    foreach ($course_subject_student->getCourseSubjectStudentMarks(null, $con) as $cssm)
	    {
               
		if (is_numeric($cssm->getMark()))
                {   

		    if (($cssm->getMarkNumber() == 2) && ($cssm->getMark() >= 5) )
		    {  echo "<br><br><br><br> primer nota: ".$cssm->getMark()."<br>";
		        $first_mark = true;
		    }
		    if (($cssm->getMarkNumber() == 4) && ($cssm->getMark() >= 7) )
		    {  echo "<br> segunda nota: ".$cssm->getMark()."<br>";
		        $second_mark = true;
		    }

		}
		else {

		    if (($cssm->getMark()==”PO”) || ($cssm->getMark()==”PA”) || ($cssm->getMark()==”PE”)) 
		    {
		        $first_mark  = true;
		        $second_mark = true;
		    }

		    if ( (($cssm->getMarkNumber() == 5) && ($cssm->getMark()==”MB”)) || (($cssm->getMark() == 5) &&($cssm->getMarkNumber()==”B”)) ) 
		    {
		        $first_mark  = true;
		        $second_mark = true;
		    }
		}
	    }
       
       $average = (($first_mark == true) && ($second_mark == true)) ? $minimum_mark : $minimum_mark -1;

       echo "ya sali<br> $average";
      return $average;
  
    } 


}
