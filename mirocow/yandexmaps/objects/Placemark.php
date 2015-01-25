<?php
/**
 * mirocow\yandexmaps\Placemark class file.
 */

namespace mirocow\yandexmaps\objects;

use mirocow\yandexmaps\GeoObject;
use yii\helpers\ArrayHelper;

/**
 * Placemark
 */
class Placemark extends GeoObject
{
	private $type = 'Point';

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