<?php


/**
 * This class adds structure of 'person' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Nov 22 14:39:53 2018
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PersonMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PersonMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(PersonPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(PersonPeer::TABLE_NAME);
		$tMap->setPhpName('Person');
		$tMap->setClassname('Person');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('LASTNAME', 'Lastname', 'VARCHAR', true, 255);

		$tMap->addColumn('FIRSTNAME', 'Firstname', 'VARCHAR', true, 255);

		$tMap->addColumn('IDENTIFICATION_TYPE', 'IdentificationType', 'INTEGER', false, null);

		$tMap->addColumn('IDENTIFICATION_NUMBER', 'IdentificationNumber', 'VARCHAR', false, 20);

		$tMap->addColumn('SEX', 'Sex', 'INTEGER', false, null);

		$tMap->addColumn('CUIL', 'Cuil', 'VARCHAR', false, 20);

		$tMap->addColumn('IS_ACTIVE', 'IsActive', 'BOOLEAN', false, null);

		$tMap->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255);

		$tMap->addColumn('PHONE', 'Phone', 'VARCHAR', false, 255);

		$tMap->addColumn('BIRTHDATE', 'Birthdate', 'DATE', false, null);

		$tMap->addColumn('BIRTH_COUNTRY', 'BirthCountry', 'VARCHAR', false, 255);

		$tMap->addColumn('BIRTH_STATE', 'BirthState', 'VARCHAR', false, 255);

		$tMap->addColumn('BIRTH_CITY', 'BirthCity', 'VARCHAR', false, 255);

		$tMap->addColumn('OBSERVATIONS', 'Observations', 'LONGVARCHAR', false, null);

		$tMap->addColumn('CIVIL_STATUS', 'CivilStatus', 'INTEGER', false, null);

		$tMap->addForeignKey('ADDRESS_ID', 'AddressId', 'INTEGER', 'address', 'ID', false, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'sf_guard_user', 'ID', false, null);

		$tMap->addColumn('PHOTO', 'Photo', 'VARCHAR', false, 255);

	} // doBuild()

} // PersonMapBuilder
