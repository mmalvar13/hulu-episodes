<?php

/**
 * Class Series
 **/

class Series{
	/**
	 * the id for this Series. This is the primary key.
	 * @var int $seriesId
	 **/
	private $seriesId;
	/**
	 * the name for this Series.
	 * @var string $seriesName
	 **/
	private $seriesName;

	/**
	 * constructor for this Series
	 * @param int $seriesId id of the series
	 * @param string $seriesName name of the series
	 * @throws \InvalidArgumentException if types are not valid
	 * @throws \RangeException if data values are out of range
	 * @throws \TypeError if type violates type hints
	 *@throws \Exception if any other exception occurs
	 **/
	public function __construct(int $newSeriesId, string $newSeriesName) {
		try{
			$this->seriesId($newSeriesId);
			$this->seriesName($newSeriesName);
		}catch(\InvalidArgumentException $invalidArgument){
			//rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(),0,$invalidArgument));
		}catch(\RangeException $range) {
			//rethrow exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		}catch(\TypeError $typeError){
			//rethrow exception to the caller
			throw(new \TypeError($typeError->getMessage(),0,$typeError));
		}catch(\Exception $exception){
			//rethrow exception to the caller
			throw(new \Exception($exception->getMessage(), 0, $exception));
		}
	}
	/**
	 * accessor method for series id.
	 * @return int value of series id
	 **/
	public function getSeriesId(){
		return($this->seriesId);
	}
	/**
	 * mutator method for series id
	 * @param int $newSeriesId new value of series Id
	 * @throws \RangeException if $newSeriesId is not positive
	 * @throws \TypeError if $newSeriesId is not an integer
	 **/
	public function setSeriesId(){
		if($newSeriesId <= 0){
			throw(new \RangeException("series id is not positive"));
		}
		//convert and store the series id
		$this->seriesId = $newSeriesId;
	}
	/**
	 * accessor method for series Name
	 * @param string $newSeriesName is the string value of the series Name
	 * @throws \RangeException if $newSeriesName is > 128 characters
	 * @throws \TypeError if $newSeriesName is not a string
	 * @throws \Exception if another exception occurs
	 **/
	public function setSeriesName()
		if($newSeriesName )
	}
}