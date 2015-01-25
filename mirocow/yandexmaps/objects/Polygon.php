<?php
/**
 * mirocow\yandexmaps\Polygon class file.
 */

namespace mirocow\yandexmaps\objects;

use mirocow\yandexmaps\GeoObject;
use yii\helpers\ArrayHelper;

/**
 * Polyline
 */
class Polygon extends GeoObject
{
	private $type = 'Polygon';

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

	/**
	 * @return array
	 */
	public function getGeometry()
	{
		$geometry = parent::getGeometry();
		$coordinates = $geometry['coordinates'];

        $content = '';
        
        if(is_array($geometry)){
            foreach($geometry as $_points){
                $point = [$_points->latitude, $_points->longitude];
                $points[] = $point;
            }
            if(isset($points)){
                $content = [$points];            
            }
        } else {
            $content = $geometry;
        }

		$geometry['coordinates'] = $content;
		return $geometry;
	}
        
}