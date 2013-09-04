<?php

namespace Minime\Annotations\Fixtures;

/**
 * @get @post @ajax
 * @postParam x
 * @postParam y
 * @postParam z
 */
class AnnotationsFixture
{

	use \Minime\Annotations\Traits\Reader;

	private $empty_fixture;

	/**
	 * @value null
	 * @value NULL
	 * @value ""
	 */
	private $null_fixture;

	/**
	 * @value TRUE
	 * @value FALSE
	 * @value true
	 * @value false
	 * @value "true"
	 * @value "false"
	 */
	private $boolean_fixture;

	/**
	 * @value abc
	 * @value "abc"
	 * @value "123"
	 */
	private $string_fixture;

	/**
	 * @value 123
	 * @value 023
	 * @value -023
	 */
	private $integer_fixture;

	/**
	 * @value .45
	 * @value 0.45
	 * @value 45.
	 * @value -4.5
	 */
	private $float_fixture;

	/**
	 * @value {"x": "y"}
	 * @value {"x": {"y": "z"}}
	 * @value {"x": {"y": ["z", "p"]}}
	 */
	private $json_fixture;

	/**
	 * @param_a foo
	 * @param_b bar
	 */
	private $single_values_fixture;

	/**
	 * @value x
	 * @value y
	 * @value z
	 */
	private $multiple_values_fixture;

	/**
	 * @get @post @ajax
	 * @postParam x
	 * @postParam y
	 * @postParam z
	 */
	private $same_line_fixture;

	/**
	 * @value string abc
	 * @value string 45
	 * @value integer 45
	 * @value integer -45
	 * @value float .45
	 * @value float 0.45
	 * @value float 45.
	 * @value float -4.5
	 * @value float 4
	 */
	private $strong_typed_fixture;
	
	/**
	 * @value integer 045
	 */
	private $bad_integer_fixture;
	
	/**
	 * @value float 2.1.3
	 */
	private $bad_float_fixture;

	/**
	 * @get @post @ajax
	 * @postParam x
	 * @postParam y
	 * @postParam z
	 */
	private function method_fixture(){}

}