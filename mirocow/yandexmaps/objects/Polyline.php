<?php
/**
 * mirocow\yandexmaps\Polyline class file.
 */

namespace mirocow\yandexmaps\objects;

use mirocow\yandexmaps\GeoObject;

/**
 * Polyline
 */
class Polyline extends GeoObject
{
	private $type = 'LineString';

	/**
	 * @param array $geometry
	 * @param array $properties
	 * @param array $options
	 */
	public function __construct(array $geometry, array $properties = array(), array $options = array())
	{
		$feature = [
			'geometry'   => $geometry,
			'properties' => $properties,
		];
		parent::__construct($feature, $options);
	}

}