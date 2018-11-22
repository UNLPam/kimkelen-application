<?php


/**
 * This class adds structure of 'student_repproved_course_subject' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Nov 22 14:39:55 2018
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class StudentRepprovedCourseSubjectMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.StudentRepprovedCourseSubjectMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(StudentRepprovedCourseSubjectPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(StudentRepprovedCourseSubjectPeer::TABLE_NAME);
		$tMap->setPhpName('StudentRepprovedCourseSubject');
		$tMap->setClassname('StudentRepprovedCourseSubject');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null);

		$tMap->addForeignKey('COURSE_SUBJECT_STUDENT_ID', 'CourseSubjectStudentId', 'INTEGER', 'course_subject_student', 'ID', true, null);

		$tMap->addForeignKey('STUDENT_APPROVED_CAREER_SUBJECT_ID', 'StudentApprovedCareerSubjectId', 'INTEGER', 'student_approved_career_subject', 'ID', false, null);

	} // doBuild()

} // StudentRepprovedCourseSubjectMapBuilder
