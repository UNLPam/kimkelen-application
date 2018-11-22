<?php


/**
 * This class adds structure of 'student_career_school_year_conduct' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Nov 22 14:39:54 2018
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class StudentCareerSchoolYearConductMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.StudentCareerSchoolYearConductMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(StudentCareerSchoolYearConductPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(StudentCareerSchoolYearConductPeer::TABLE_NAME);
		$tMap->setPhpName('StudentCareerSchoolYearConduct');
		$tMap->setClassname('StudentCareerSchoolYearConduct');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addForeignKey('STUDENT_CAREER_SCHOOL_YEAR_ID', 'StudentCareerSchoolYearId', 'INTEGER', 'student_career_school_year', 'ID', true, null);

		$tMap->addForeignKey('CONDUCT_ID', 'ConductId', 'INTEGER', 'conduct', 'ID', true, null);

		$tMap->addForeignKey('CAREER_SCHOOL_YEAR_PERIOD_ID', 'CareerSchoolYearPeriodId', 'INTEGER', 'career_school_year_period', 'ID', true, null);

	} // doBuild()

} // StudentCareerSchoolYearConductMapBuilder
