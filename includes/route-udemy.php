<?php
 https://www.udemy.com/course/become-a-wordpress-developer-php-javascript/learn/lecture/7837914#search

   //define custom route
	//note that wp api limits to 100 returns

	//NOTE!!  This post type was deleted. Reconfigure here to post at some other

    add_action('rest_api_init', 'cardsRegisterSearch');

    function cardsRegisterSearch() {
        register_rest_route('pc/v1', 'drug_search', array(
            'methods' =>    WP_REST_Server::READABLE,
            'callback' => 'pcardsSearchResults'
        ));
    }

    function pcardsSearchResults() {
        $searchDrugs = new WP_Query(array(
            'post_type' => 'drug_search'
        ));

        return $searchDrugs->posts;
    }
?>