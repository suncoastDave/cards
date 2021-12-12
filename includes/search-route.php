 <?php

	 //NOTE!!  This post type was deleted. Reconfigure here to post at some other


	 /** PLUGIN NAME:   DRUG_SEARCH ... */

    //https://www.youtube.com/watch?v=C2twS9ArdCI&t=617s
	 //except note that he's using a plugin to create the custom route, but with ACF you don't have to per
	 //https://www.advancedcustomfields.com/resources/wp-rest-api-integration/

    function pc2_search() {
        $args = [
            'numberposts' => 9999,
            'post_type' => 'drug_search',
        ];

        $posts = get_posts($args);

        $data = [];
        $i = 0;

        foreach ($posts as $post) {
            $data[$i]['drug'] = $post->productname;
            $data[$i]['first'] = $post->drug_first;
            $data[$i]['url'] = $post->url;
            $i++;

        }
        return $data;
    }

add_action('rest_api_init', function() {
    register_rest_route('pc2/v1', 'drug_search', [
        'methods' => 'GET',
        'callback' => 'pc2_search',
    ]);
});

