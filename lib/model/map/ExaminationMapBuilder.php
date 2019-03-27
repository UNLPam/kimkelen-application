<?php


/**
 * This class adds structure of 'examination' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Wed Mar  6 15:33:18 2019
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ExaminationMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ExaminationMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ExaminationPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ExaminationPeer::TABLE_NAME);
		$tMap->setPhpName('Examination');
		$tMap->setClassname('Examination');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', true, 255);

		$tMap->addColumn('DATE_FROM', 'DateFrom', 'DATE', true, null);

		$tMap->addColumn('DATE_TO', 'DateTo', 'DATE', true, null);

		$tMap->addColumn('EXAMINATION_NUMBER', 'ExaminationNumber', 'INTEGER', true, null);

		$tMap->addForeignKey('SCHOOL_YEAR_ID', 'SchoolYearId', 'INTEGER', 'school_year', 'ID', true, null);

	} // doBuild()

} // ExaminationMapBuilder
