<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use WP_Query;

class ServiceModel extends Model {

    /**
     * Return a list of all published posts.
     *
     * @return array
     */
    public static function all($hydrate = true, $params = array())
    {
        $query = new WP_Query(array_merge([
            'post_type' => POST_TYPE_SERVICE,
            'posts_per_page' => -1,
            'post_status' => 'publish',
            //'post__not_in' => array(154, 155),
            //'post__not_in' => array(250, 251),
        ], $params));

        $result = $query->get_posts();
        if ($hydrate) {
            $result = ServiceModel::hydrate($result);
        }
        return $result;
    }

    public static function hydrate($services)
    {

        foreach ($services as $service)
        {
            $service->dish_repeater = get_field('dish_repeater', $service->ID);
        }

        return $services;

    }




}
