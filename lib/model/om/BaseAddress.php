<?php

/**
 * Base class that represents a row from the 'address' table.
 *
 * Representa una direccion postal
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Wed Mar  6 15:33:18 2019
 *
 * @package    lib.model.om
 */
abstract class BaseAddress extends BaseObject  implements Persistent {


  const PEER = 'AddressPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AddressPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the state_id field.
	 * @var        int
	 */
	protected $state_id;

	/**
	 * The value for the city_id field.
	 * @var        int
	 */
	protected $city_id;

	/**
	 * The value for the street field.
	 * @var        string
	 */
	protected $street;

	/**
	 * The value for the number field.
	 * @var        string
	 */
	protected $number;

	/**
	 * The value for the floor field.
	 * @var        string
	 */
	protected $floor;

	/**
	 * The value for the flat field.
	 * @var        string
	 */
	protected $flat;

	/**
	 * @var        State
	 */
	protected $aState;

	/**
	 * @var        City
	 */
	protected $aCity;

	/**
	 * @var        array Person[] Collection to store aggregation of Person objects.
	 */
	protected $collPersons;

	/**
	 * @var        Criteria The criteria used to select the current contents of collPersons.
	 */
	private $lastPersonCriteria = null;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseAddress object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [state_id] column value.
	 * 
	 * @return     int
	 */
	public function getStateId()
	{
		return $this->state_id;
	}

	/**
	 * Get the [city_id] column value.
	 * 
	 * @return     int
	 */
	public function getCityId()
	{
		return $this->city_id;
	}

	/**
	 * Get the [street] column value.
	 * 
	 * @return     string
	 */
	public function getStreet()
	{
		return $this->street;
	}

	/**
	 * Get the [number] column value.
	 * 
	 * @return     string
	 */
	public function getNumber()
	{
		return $this->number;
	}

	/**
	 * Get the [floor] column value.
	 * 
	 * @return     string
	 */
	public function getFloor()
	{
		return $this->floor;
	}

	/**
	 * Get the [flat] column value.
	 * 
	 * @return     string
	 */
	public function getFlat()
	{
		return $this->flat;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Address The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AddressPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [state_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Address The current object (for fluent API support)
	 */
	public function setStateId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->state_id !== $v) {
			$this->state_id = $v;
			$this->modifiedColumns[] = AddressPeer::STATE_ID;
		}

		if ($this->aState !== null && $this->aState->getId() !== $v) {
			$this->aState = null;
		}

		return $this;
	} // setStateId()

	/**
	 * Set the value of [city_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Address The current object (for fluent API support)
	 */
	public function setCityId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->city_id !== $v) {
			$this->city_id = $v;
			$this->modifiedColumns[] = AddressPeer::CITY_ID;
		}

		if ($this->aCity !== null && $this->aCity->getId() !== $v) {
			$this->aCity = null;
		}

		return $this;
	} // setCityId()

	/**
	 * Set the value of [street] column.
	 * 
	 * @param      string $v new value
	 * @return     Address The current object (for fluent API support)
	 */
	public function setStreet($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->street !== $v) {
			$this->street = $v;
			$this->modifiedColumns[] = AddressPeer::STREET;
		}

		return $this;
	} // setStreet()

	/**
	 * Set the value of [number] column.
	 * 
	 * @param      string $v new value
	 * @return     Address The current object (for fluent API support)
	 */
	public function setNumber($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->number !== $v) {
			$this->number = $v;
			$this->modifiedColumns[] = AddressPeer::NUMBER;
		}

		return $this;
	} // setNumber()

	/**
	 * Set the value of [floor] column.
	 * 
	 * @param      string $v new value
	 * @return     Address The current object (for fluent API support)
	 */
	public function setFloor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->floor !== $v) {
			$this->floor = $v;
			$this->modifiedColumns[] = AddressPeer::FLOOR;
		}

		return $this;
	} // setFloor()

	/**
	 * Set the value of [flat] column.
	 * 
	 * @param      string $v new value
	 * @return     Address The current object (for fluent API support)
	 */
	public function setFlat($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->flat !== $v) {
			$this->flat = $v;
			$this->modifiedColumns[] = AddressPeer::FLAT;
		}

		return $this;
	} // setFlat()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->state_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->city_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->street = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->number = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->floor = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->flat = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 7; // 7 = AddressPeer::NUM_COLUMNS - AddressPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Address object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aState !== null && $this->state_id !== $this->aState->getId()) {
			$this->aState = null;
		}
		if ($this->aCity !== null && $this->city_id !== $this->aCity->getId()) {
			$this->aCity = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AddressPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aState = null;
			$this->aCity = null;
			$this->collPersons = null;
			$this->lastPersonCriteria = null;

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseAddress:delete:pre') as $callable)
    {
      $ret = call_user_func($callable, $this, $con);
      if ($ret)
      {
        return;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			AddressPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseAddress:delete:post') as $callable)
    {
      call_user_func($callable, $this, $con);
    }

  }
	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseAddress:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseAddress:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			AddressPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aState !== null) {
				if ($this->aState->isModified() || $this->aState->isNew()) {
					$affectedRows += $this->aState->save($con);
				}
				$this->setState($this->aState);
			}

			if ($this->aCity !== null) {
				if ($this->aCity->isModified() || $this->aCity->isNew()) {
					$affectedRows += $this->aCity->save($con);
				}
				$this->setCity($this->aCity);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = AddressPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = AddressPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += AddressPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collPersons !== null) {
				foreach ($this->collPersons as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aState !== null) {
				if (!$this->aState->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aState->getValidationFailures());
				}
			}

			if ($this->aCity !== null) {
				if (!$this->aCity->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCity->getValidationFailures());
				}
			}


			if (($retval = AddressPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPersons !== null) {
					foreach ($this->collPersons as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getStateId();
				break;
			case 2:
				return $this->getCityId();
				break;
			case 3:
				return $this->getStreet();
				break;
			case 4:
				return $this->getNumber();
				break;
			case 5:
				return $this->getFloor();
				break;
			case 6:
				return $this->getFlat();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = AddressPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getStateId(),
			$keys[2] => $this->getCityId(),
			$keys[3] => $this->getStreet(),
			$keys[4] => $this->getNumber(),
			$keys[5] => $this->getFloor(),
			$keys[6] => $this->getFlat(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AddressPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setStateId($value);
				break;
			case 2:
				$this->setCityId($value);
				break;
			case 3:
				$this->setStreet($value);
				break;
			case 4:
				$this->setNumber($value);
				break;
			case 5:
				$this->setFloor($value);
				break;
			case 6:
				$this->setFlat($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = AddressPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setStateId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCityId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setStreet($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNumber($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFloor($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFlat($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AddressPeer::DATABASE_NAME);

		if ($this->isColumnModified(AddressPeer::ID)) $criteria->add(AddressPeer::ID, $this->id);
		if ($this->isColumnModified(AddressPeer::STATE_ID)) $criteria->add(AddressPeer::STATE_ID, $this->state_id);
		if ($this->isColumnModified(AddressPeer::CITY_ID)) $criteria->add(AddressPeer::CITY_ID, $this->city_id);
		if ($this->isColumnModified(AddressPeer::STREET)) $criteria->add(AddressPeer::STREET, $this->street);
		if ($this->isColumnModified(AddressPeer::NUMBER)) $criteria->add(AddressPeer::NUMBER, $this->number);
		if ($this->isColumnModified(AddressPeer::FLOOR)) $criteria->add(AddressPeer::FLOOR, $this->floor);
		if ($this->isColumnModified(AddressPeer::FLAT)) $criteria->add(AddressPeer::FLAT, $this->flat);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AddressPeer::DATABASE_NAME);

		$criteria->add(AddressPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Address (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setStateId($this->state_id);

		$copyObj->setCityId($this->city_id);

		$copyObj->setStreet($this->street);

		$copyObj->setNumber($this->number);

		$copyObj->setFloor($this->floor);

		$copyObj->setFlat($this->flat);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getPersons() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPerson($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Address Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     AddressPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AddressPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a State object.
	 *
	 * @param      State $v
	 * @return     Address The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setState(State $v = null)
	{
		if ($v === null) {
			$this->setStateId(NULL);
		} else {
			$this->setStateId($v->getId());
		}

		$this->aState = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the State object, it will not be re-added.
		if ($v !== null) {
			$v->addAddress($this);
		}

		return $this;
	}


	/**
	 * Get the associated State object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     State The associated State object.
	 * @throws     PropelException
	 */
	public function getState(PropelPDO $con = null)
	{
		if ($this->aState === null && ($this->state_id !== null)) {
			$c = new Criteria(StatePeer::DATABASE_NAME);
			$c->add(StatePeer::ID, $this->state_id);
			$this->aState = StatePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aState->addAddresss($this);
			 */
		}
		return $this->aState;
	}

	/**
	 * Declares an association between this object and a City object.
	 *
	 * @param      City $v
	 * @return     Address The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCity(City $v = null)
	{
		if ($v === null) {
			$this->setCityId(NULL);
		} else {
			$this->setCityId($v->getId());
		}

		$this->aCity = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the City object, it will not be re-added.
		if ($v !== null) {
			$v->addAddress($this);
		}

		return $this;
	}


	/**
	 * Get the associated City object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     City The associated City object.
	 * @throws     PropelException
	 */
	public function getCity(PropelPDO $con = null)
	{
		if ($this->aCity === null && ($this->city_id !== null)) {
			$c = new Criteria(CityPeer::DATABASE_NAME);
			$c->add(CityPeer::ID, $this->city_id);
			$this->aCity = CityPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aCity->addAddresss($this);
			 */
		}
		return $this->aCity;
	}

	/**
	 * Clears out the collPersons collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPersons()
	 */
	public function clearPersons()
	{
		$this->collPersons = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPersons collection (array).
	 *
	 * By default this just sets the collPersons collection to an empty array (like clearcollPersons());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPersons()
	{
		$this->collPersons = array();
	}

	/**
	 * Gets an array of Person objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this Address has previously been saved, it will retrieve
	 * related Persons from storage. If this Address is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array Person[]
	 * @throws     PropelException
	 */
	public function getPersons($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(AddressPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPersons === null) {
			if ($this->isNew()) {
			   $this->collPersons = array();
			} else {

				$criteria->add(PersonPeer::ADDRESS_ID, $this->id);

				PersonPeer::addSelectColumns($criteria);
				$this->collPersons = PersonPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(PersonPeer::ADDRESS_ID, $this->id);

				PersonPeer::addSelectColumns($criteria);
				if (!isset($this->lastPersonCriteria) || !$this->lastPersonCriteria->equals($criteria)) {
					$this->collPersons = PersonPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPersonCriteria = $criteria;
		return $this->collPersons;
	}

	/**
	 * Returns the number of related Person objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Person objects.
	 * @throws     PropelException
	 */
	public function countPersons(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(AddressPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collPersons === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(PersonPeer::ADDRESS_ID, $this->id);

				$count = PersonPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(PersonPeer::ADDRESS_ID, $this->id);

				if (!isset($this->lastPersonCriteria) || !$this->lastPersonCriteria->equals($criteria)) {
					$count = PersonPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collPersons);
				}
			} else {
				$count = count($this->collPersons);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a Person object to this object
	 * through the Person foreign key attribute.
	 *
	 * @param      Person $l Person
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPerson(Person $l)
	{
		if ($this->collPersons === null) {
			$this->initPersons();
		}
		if (!in_array($l, $this->collPersons, true)) { // only add it if the **same** object is not already associated
			array_push($this->collPersons, $l);
			$l->setAddress($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Address is new, it will return
	 * an empty collection; or if this Address has previously
	 * been saved, it will retrieve related Persons from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Address.
	 */
	public function getPersonsJoinsfGuardUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(AddressPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPersons === null) {
			if ($this->isNew()) {
				$this->collPersons = array();
			} else {

				$criteria->add(PersonPeer::ADDRESS_ID, $this->id);

				$this->collPersons = PersonPeer::doSelectJoinsfGuardUser($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(PersonPeer::ADDRESS_ID, $this->id);

			if (!isset($this->lastPersonCriteria) || !$this->lastPersonCriteria->equals($criteria)) {
				$this->collPersons = PersonPeer::doSelectJoinsfGuardUser($criteria, $con, $join_behavior);
			}
		}
		$this->lastPersonCriteria = $criteria;

		return $this->collPersons;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collPersons) {
				foreach ((array) $this->collPersons as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collPersons = null;
			$this->aState = null;
			$this->aCity = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseAddress:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseAddress::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseAddress
