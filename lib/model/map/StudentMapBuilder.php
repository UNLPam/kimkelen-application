<?php


/**
 * This class adds structure of 'student' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu May 23 21:58:06 2019
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class StudentMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.StudentMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(StudentPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(StudentPeer::TABLE_NAME);
		$tMap->setPhpName('Student');
		$tMap->setClassname('Student');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('GLOBAL_FILE_NUMBER', 'GlobalFileNumber', 'VARCHAR', true, 20);

		$tMap->addColumn('ORDER_OF_MERIT', 'OrderOfMerit', 'VARCHAR', false, 20);

		$tMap->addColumn('YEAR_INCOME', 'YearIncome', 'DATE', false, null);

		$tMap->addColumn('NATIONALITY', 'Nationality', 'INTEGER', false, null);

		$tMap->addColumn('FOLIO_NUMBER', 'FolioNumber', 'VARCHAR', false, 20);

		$tMap->addForeignKey('PERSON_ID', 'PersonId', 'INTEGER', 'person', 'ID', false, null);

		$tMap->addForeignKey('OCCUPATION_ID', 'OccupationId', 'INTEGER', 'occupation', 'ID', false, null);

		$tMap->addColumn('BUSY_STARTS_AT', 'BusyStartsAt', 'TIME', false, null);

		$tMap->addColumn('BUSY_ENDS_AT', 'BusyEndsAt', 'TIME', false, null);

		$tMap->addColumn('BLOOD_GROUP', 'BloodGroup', 'VARCHAR', false, 50);

		$tMap->addColumn('BLOOD_FACTOR', 'BloodFactor', 'VARCHAR', false, 50);

		$tMap->addColumn('EMERGENCY_INFORMATION', 'EmergencyInformation', 'LONGVARCHAR', false, null);

		$tMap->addForeignKey('HEALTH_COVERAGE_ID', 'HealthCoverageId', 'INTEGER', 'health_coverage', 'ID', false, null);

		$tMap->addColumn('ORIGIN_SCHOOL', 'OriginSchool', 'VARCHAR', false, 255);

		$tMap->addColumn('EDUCATIONAL_DEPENDENCY', 'EducationalDependency', 'VARCHAR', false, 255);

	} // doBuild()

} // StudentMapBuilder
