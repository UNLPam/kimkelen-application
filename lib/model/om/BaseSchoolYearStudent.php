<?php

/**
 * Base class that represents a row from the 'school_year_student' table.
 *
 * Matrícula por año lectivo: inscripción de un alumno a un año lectivo.
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Wed Mar  6 15:33:17 2019
 *
 * @package    lib.model.om
 */
abstract class BaseSchoolYearStudent extends BaseObject  implements Persistent {


  const PEER = 'SchoolYearStudentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SchoolYearStudentPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the student_id field.
	 * @var        int
	 */
	protected $student_id;

	/**
	 * The value for the school_year_id field.
	 * @var        int
	 */
	protected $school_year_id;

	/**
	 * The value for the shift_id field.
	 * @var        int
	 */
	protected $shift_id;

	/**
	 * The value for the created_at field.
	 * @var        string
	 */
	protected $created_at;

	/**
	 * @var        Student
	 */
	protected $aStudent;

	/**
	 * @var        SchoolYear
	 */
	protected $aSchoolYear;

	/**
	 * @var        Shift
	 */
	protected $aShift;

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
	 * Initializes internal state of BaseSchoolYearStudent object.
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
	 * Get the [student_id] column value.
	 * 
	 * @return     int
	 */
	public function getStudentId()
	{
		return $this->student_id;
	}

	/**
	 * Get the [school_year_id] column value.
	 * 
	 * @return     int
	 */
	public function getSchoolYearId()
	{
		return $this->school_year_id;
	}

	/**
	 * Get the [shift_id] column value.
	 * Especifica el turno del usuario en un año lectivo
	 * @return     int
	 */
	public function getShiftId()
	{
		return $this->shift_id;
	}

	/**
	 * Get the [optionally formatted] temporal [created_at] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{
		if ($this->created_at === null) {
			return null;
		}


		if ($this->created_at === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->created_at);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = SchoolYearStudentPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [student_id] column.
	 * 
	 * @param      int $v new value
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 */
	public function setStudentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->student_id !== $v) {
			$this->student_id = $v;
			$this->modifiedColumns[] = SchoolYearStudentPeer::STUDENT_ID;
		}

		if ($this->aStudent !== null && $this->aStudent->getId() !== $v) {
			$this->aStudent = null;
		}

		return $this;
	} // setStudentId()

	/**
	 * Set the value of [school_year_id] column.
	 * 
	 * @param      int $v new value
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 */
	public function setSchoolYearId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->school_year_id !== $v) {
			$this->school_year_id = $v;
			$this->modifiedColumns[] = SchoolYearStudentPeer::SCHOOL_YEAR_ID;
		}

		if ($this->aSchoolYear !== null && $this->aSchoolYear->getId() !== $v) {
			$this->aSchoolYear = null;
		}

		return $this;
	} // setSchoolYearId()

	/**
	 * Set the value of [shift_id] column.
	 * Especifica el turno del usuario en un año lectivo
	 * @param      int $v new value
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 */
	public function setShiftId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->shift_id !== $v) {
			$this->shift_id = $v;
			$this->modifiedColumns[] = SchoolYearStudentPeer::SHIFT_ID;
		}

		if ($this->aShift !== null && $this->aShift->getId() !== $v) {
			$this->aShift = null;
		}

		return $this;
	} // setShiftId()

	/**
	 * Sets the value of [created_at] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 */
	public function setCreatedAt($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->created_at !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->created_at = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = SchoolYearStudentPeer::CREATED_AT;
			}
		} // if either are not null

		return $this;
	} // setCreatedAt()

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
			$this->student_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->school_year_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->shift_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->created_at = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 5; // 5 = SchoolYearStudentPeer::NUM_COLUMNS - SchoolYearStudentPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating SchoolYearStudent object", $e);
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

		if ($this->aStudent !== null && $this->student_id !== $this->aStudent->getId()) {
			$this->aStudent = null;
		}
		if ($this->aSchoolYear !== null && $this->school_year_id !== $this->aSchoolYear->getId()) {
			$this->aSchoolYear = null;
		}
		if ($this->aShift !== null && $this->shift_id !== $this->aShift->getId()) {
			$this->aShift = null;
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
			$con = Propel::getConnection(SchoolYearStudentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SchoolYearStudentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aStudent = null;
			$this->aSchoolYear = null;
			$this->aShift = null;
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

    foreach (sfMixer::getCallables('BaseSchoolYearStudent:delete:pre') as $callable)
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
			$con = Propel::getConnection(SchoolYearStudentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			SchoolYearStudentPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	

    foreach (sfMixer::getCallables('BaseSchoolYearStudent:delete:post') as $callable)
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

    foreach (sfMixer::getCallables('BaseSchoolYearStudent:save:pre') as $callable)
    {
      $affectedRows = call_user_func($callable, $this, $con);
      if (is_int($affectedRows))
      {
        return $affectedRows;
      }
    }


    if ($this->isNew() && !$this->isColumnModified(SchoolYearStudentPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SchoolYearStudentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
    foreach (sfMixer::getCallables('BaseSchoolYearStudent:save:post') as $callable)
    {
      call_user_func($callable, $this, $con, $affectedRows);
    }

			SchoolYearStudentPeer::addInstanceToPool($this);
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

			if ($this->aStudent !== null) {
				if ($this->aStudent->isModified() || $this->aStudent->isNew()) {
					$affectedRows += $this->aStudent->save($con);
				}
				$this->setStudent($this->aStudent);
			}

			if ($this->aSchoolYear !== null) {
				if ($this->aSchoolYear->isModified() || $this->aSchoolYear->isNew()) {
					$affectedRows += $this->aSchoolYear->save($con);
				}
				$this->setSchoolYear($this->aSchoolYear);
			}

			if ($this->aShift !== null) {
				if ($this->aShift->isModified() || $this->aShift->isNew()) {
					$affectedRows += $this->aShift->save($con);
				}
				$this->setShift($this->aShift);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = SchoolYearStudentPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SchoolYearStudentPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += SchoolYearStudentPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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

			if ($this->aStudent !== null) {
				if (!$this->aStudent->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aStudent->getValidationFailures());
				}
			}

			if ($this->aSchoolYear !== null) {
				if (!$this->aSchoolYear->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSchoolYear->getValidationFailures());
				}
			}

			if ($this->aShift !== null) {
				if (!$this->aShift->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aShift->getValidationFailures());
				}
			}


			if (($retval = SchoolYearStudentPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = SchoolYearStudentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getStudentId();
				break;
			case 2:
				return $this->getSchoolYearId();
				break;
			case 3:
				return $this->getShiftId();
				break;
			case 4:
				return $this->getCreatedAt();
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
		$keys = SchoolYearStudentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getStudentId(),
			$keys[2] => $this->getSchoolYearId(),
			$keys[3] => $this->getShiftId(),
			$keys[4] => $this->getCreatedAt(),
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
		$pos = SchoolYearStudentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setStudentId($value);
				break;
			case 2:
				$this->setSchoolYearId($value);
				break;
			case 3:
				$this->setShiftId($value);
				break;
			case 4:
				$this->setCreatedAt($value);
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
		$keys = SchoolYearStudentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setStudentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSchoolYearId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setShiftId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SchoolYearStudentPeer::DATABASE_NAME);

		if ($this->isColumnModified(SchoolYearStudentPeer::ID)) $criteria->add(SchoolYearStudentPeer::ID, $this->id);
		if ($this->isColumnModified(SchoolYearStudentPeer::STUDENT_ID)) $criteria->add(SchoolYearStudentPeer::STUDENT_ID, $this->student_id);
		if ($this->isColumnModified(SchoolYearStudentPeer::SCHOOL_YEAR_ID)) $criteria->add(SchoolYearStudentPeer::SCHOOL_YEAR_ID, $this->school_year_id);
		if ($this->isColumnModified(SchoolYearStudentPeer::SHIFT_ID)) $criteria->add(SchoolYearStudentPeer::SHIFT_ID, $this->shift_id);
		if ($this->isColumnModified(SchoolYearStudentPeer::CREATED_AT)) $criteria->add(SchoolYearStudentPeer::CREATED_AT, $this->created_at);

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
		$criteria = new Criteria(SchoolYearStudentPeer::DATABASE_NAME);

		$criteria->add(SchoolYearStudentPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of SchoolYearStudent (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setStudentId($this->student_id);

		$copyObj->setSchoolYearId($this->school_year_id);

		$copyObj->setShiftId($this->shift_id);

		$copyObj->setCreatedAt($this->created_at);


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
	 * @return     SchoolYearStudent Clone of current object.
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
	 * @return     SchoolYearStudentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SchoolYearStudentPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Student object.
	 *
	 * @param      Student $v
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setStudent(Student $v = null)
	{
		if ($v === null) {
			$this->setStudentId(NULL);
		} else {
			$this->setStudentId($v->getId());
		}

		$this->aStudent = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Student object, it will not be re-added.
		if ($v !== null) {
			$v->addSchoolYearStudent($this);
		}

		return $this;
	}


	/**
	 * Get the associated Student object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Student The associated Student object.
	 * @throws     PropelException
	 */
	public function getStudent(PropelPDO $con = null)
	{
		if ($this->aStudent === null && ($this->student_id !== null)) {
			$c = new Criteria(StudentPeer::DATABASE_NAME);
			$c->add(StudentPeer::ID, $this->student_id);
			$this->aStudent = StudentPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aStudent->addSchoolYearStudents($this);
			 */
		}
		return $this->aStudent;
	}

	/**
	 * Declares an association between this object and a SchoolYear object.
	 *
	 * @param      SchoolYear $v
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setSchoolYear(SchoolYear $v = null)
	{
		if ($v === null) {
			$this->setSchoolYearId(NULL);
		} else {
			$this->setSchoolYearId($v->getId());
		}

		$this->aSchoolYear = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the SchoolYear object, it will not be re-added.
		if ($v !== null) {
			$v->addSchoolYearStudent($this);
		}

		return $this;
	}


	/**
	 * Get the associated SchoolYear object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     SchoolYear The associated SchoolYear object.
	 * @throws     PropelException
	 */
	public function getSchoolYear(PropelPDO $con = null)
	{
		if ($this->aSchoolYear === null && ($this->school_year_id !== null)) {
			$c = new Criteria(SchoolYearPeer::DATABASE_NAME);
			$c->add(SchoolYearPeer::ID, $this->school_year_id);
			$this->aSchoolYear = SchoolYearPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aSchoolYear->addSchoolYearStudents($this);
			 */
		}
		return $this->aSchoolYear;
	}

	/**
	 * Declares an association between this object and a Shift object.
	 *
	 * @param      Shift $v
	 * @return     SchoolYearStudent The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setShift(Shift $v = null)
	{
		if ($v === null) {
			$this->setShiftId(NULL);
		} else {
			$this->setShiftId($v->getId());
		}

		$this->aShift = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Shift object, it will not be re-added.
		if ($v !== null) {
			$v->addSchoolYearStudent($this);
		}

		return $this;
	}


	/**
	 * Get the associated Shift object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Shift The associated Shift object.
	 * @throws     PropelException
	 */
	public function getShift(PropelPDO $con = null)
	{
		if ($this->aShift === null && ($this->shift_id !== null)) {
			$c = new Criteria(ShiftPeer::DATABASE_NAME);
			$c->add(ShiftPeer::ID, $this->shift_id);
			$this->aShift = ShiftPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aShift->addSchoolYearStudents($this);
			 */
		}
		return $this->aShift;
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
		} // if ($deep)

			$this->aStudent = null;
			$this->aSchoolYear = null;
			$this->aShift = null;
	}


  public function __call($method, $arguments)
  {
    if (!$callable = sfMixer::getCallable('BaseSchoolYearStudent:'.$method))
    {
      throw new sfException(sprintf('Call to undefined method BaseSchoolYearStudent::%s', $method));
    }

    array_unshift($arguments, $this);

    return call_user_func_array($callable, $arguments);
  }


} // BaseSchoolYearStudent
