<?php


/**
 * This class adds structure of 'career_student' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu May 23 21:58:07 2019
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CareerStudentMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CareerStudentMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CareerStudentPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CareerStudentPeer::TABLE_NAME);
		$tMap->setPhpName('CareerStudent');
		$tMap->setClassname('CareerStudent');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addForeignKey('CAREER_ID', 'CareerId', 'INTEGER', 'career', 'ID', true, null);

		$tMap->addForeignKey('STUDENT_ID', 'StudentId', 'INTEGER', 'student', 'ID', true, null);

		$tMap->addForeignKey('ORIENTATION_ID', 'OrientationId', 'INTEGER', 'orientation', 'ID', false, null);

		$tMap->addForeignKey('SUB_ORIENTATION_ID', 'SubOrientationId', 'INTEGER', 'sub_orientation', 'ID', false, null);

		$tMap->addColumn('ORIENTATION_CHANGE_OBSERVATIONS', 'OrientationChangeObservations', 'LONGVARCHAR', false, null);

		$tMap->addColumn('START_YEAR', 'StartYear', 'INTEGER', false, null);

		$tMap->addColumn('FILE_NUMBER', 'FileNumber', 'VARCHAR', true, 20);

		$tMap->addColumn('STATUS', 'Status', 'INTEGER', false, null);

		$tMap->addForeignKey('GRADUATION_SCHOOL_YEAR_ID', 'GraduationSchoolYearId', 'INTEGER', 'school_year', 'ID', false, null);

	} // doBuild()

} // CareerStudentMapBuilder
