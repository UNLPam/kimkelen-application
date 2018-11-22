<?php


/**
 * This class adds structure of 'license' table to 'propel' DatabaseMap object.
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
class LicenseMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.LicenseMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(LicensePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(LicensePeer::TABLE_NAME);
		$tMap->setPhpName('License');
		$tMap->setClassname('License');

		$tMap->setUseIdGenerator(true);

		$tMap->addForeignKey('PERSON_ID', 'PersonId', 'INTEGER', 'person', 'ID', false, null);

		$tMap->addForeignKey('LICENSE_TYPE_ID', 'LicenseTypeId', 'INTEGER', 'license_type', 'ID', false, null);

		$tMap->addColumn('DATE_FROM', 'DateFrom', 'DATE', true, null);

		$tMap->addColumn('DATE_TO', 'DateTo', 'DATE', false, null);

		$tMap->addColumn('OBSERVATION', 'Observation', 'LONGVARCHAR', false, null);

		$tMap->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', false, null);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

	} // doBuild()

} // LicenseMapBuilder
