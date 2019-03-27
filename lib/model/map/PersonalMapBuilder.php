<?php


/**
 * This class adds structure of 'personal' table to 'propel' DatabaseMap object.
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
class PersonalMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PersonalMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(PersonalPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(PersonalPeer::TABLE_NAME);
		$tMap->setPhpName('Personal');
		$tMap->setClassname('Personal');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('PERSON_ID', 'PersonId', 'INTEGER', 'person', 'ID', false, null);

		$tMap->addColumn('SALARY', 'Salary', 'FLOAT', false, null);

		$tMap->addColumn('AGING_INSTITUTION', 'AgingInstitution', 'DATE', false, null);

		$tMap->addColumn('FILE_NUMBER', 'FileNumber', 'INTEGER', false, null);

		$tMap->addColumn('PERSONAL_TYPE', 'PersonalType', 'INTEGER', false, null);

	} // doBuild()

} // PersonalMapBuilder
