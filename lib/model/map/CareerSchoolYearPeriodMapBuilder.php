<?php


/**
 * This class adds structure of 'career_school_year_period' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu May 23 21:58:08 2019
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CareerSchoolYearPeriodMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CareerSchoolYearPeriodMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CareerSchoolYearPeriodPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CareerSchoolYearPeriodPeer::TABLE_NAME);
		$tMap->setPhpName('CareerSchoolYearPeriod');
		$tMap->setClassname('CareerSchoolYearPeriod');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', true, 255);

		$tMap->addColumn('SHORT_NAME', 'ShortName', 'VARCHAR', true, 255);

		$tMap->addForeignKey('CAREER_SCHOOL_YEAR_ID', 'CareerSchoolYearId', 'INTEGER', 'career_school_year', 'ID', true, null);

		$tMap->addColumn('START_AT', 'StartAt', 'DATE', true, null);

		$tMap->addColumn('END_AT', 'EndAt', 'DATE', true, null);

		$tMap->addColumn('IS_CLOSED', 'IsClosed', 'BOOLEAN', false, null);

		$tMap->addColumn('COURSE_TYPE', 'CourseType', 'INTEGER', false, null);

		$tMap->addForeignKey('CAREER_SCHOOL_YEAR_PERIOD_ID', 'CareerSchoolYearPeriodId', 'INTEGER', 'career_school_year_period', 'ID', false, null);

		$tMap->addColumn('MAX_ABSENCES', 'MaxAbsences', 'INTEGER', false, null);

	} // doBuild()

} // CareerSchoolYearPeriodMapBuilder
