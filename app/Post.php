<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use WP_Query;

class Post extends Model
{


    public static function get_all_news(bool $hydrate = true)
    {
        $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'category_name'  => 'news',
        ]);

        $result = $query->get_posts();
        if ($hydrate) {
            $result = Post::hydrate_news($result);
        }
        return $result;
    }

    public static function get_single_news($post_id, $hydrate = true)
    {
        $post = [get_post($post_id)];
        if ($hydrate) $post = self::hydrate_news($post);
        return $post[0];

    }

    public static function hydrate_news($news)
    {
        foreach ($news as $single_news)
        {
            $single_news->date = get_field('news_date', $single_news->ID);
            $single_news->thumbnail = get_field('news_thumbnail', $single_news->ID);
            $single_news->content = get_field('news_content', $single_news->ID);
        }
        return $news;
    }



    public static function get_all_events(bool $hydrate = true)
    {
        $query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'category_name'  => 'events',
        ]);

        $result = $query->get_posts();
        if ($hydrate) {
            $result = Post::hydrate_events($result);
        }
        return $result;
    }

    public static function get_single_event($post_id, $hydrate = true)
    {
        $post = [get_post($post_id)];
        if ($hydrate) $post = self::hydrate_events($post);
        return $post[0];

    }

    public static function hydrate_events($events)
    {
        foreach ($events as $event)
        {
            $event->date = get_field('event_date', $event->ID);
            $event->time = get_field('event_time', $event->ID);
            $event->thumbnail = get_field('event_thumbnail', $event->ID);
            $event->content = get_field('event_content', $event->ID);
        }
        return $events;

    }
}
