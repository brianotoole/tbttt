<?php

	global $ai1ec_registry;

	$date_system = $ai1ec_registry->get( 'date.system' );
	$search = $ai1ec_registry->get('model.search');

	// gets localized time
	$local_date = $ai1ec_registry->get( 'date.time', $date_system->current_time(), 'sys.default' );

	//sets start time to today
	$start_time = clone $local_date;
	$start_time->set_time( 0, 0, 0 );
	
	//sets end time to a year from today 
	$end_time = clone $start_time;
	$end_time->adjust_month( 12 );
		
	$events_result = $search->get_events_between($start_time, $end_time, array(), true);
	$thumb = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
		
	if(!empty($events_result)) {
		$event_count = '0';
		echo '<div class="events">';
		foreach($events_result as $event) {
			if($event_count < '999999') { //# posts to display
				$event_count ++;
				$event_long_date = $event->get( 'start' );
				$event_time_string = strtotime($event_long_date);
				$event_time = date("h:i A",$event_time_string);
				$event_date = $ai1ec_registry->get('view.event.time')->get_long_date($event_long_date);
				$event_title = $event->get( 'post' )->post_title;
				$postid = $event->get( 'post_id' );
				// create function to retrieve wp_posts specific data
				if(!function_exists('get_excerpt_by_id')) { //check against NULL		
				  function get_excerpt_by_id($postid){
				    $the_post = get_post($postid); //Gets post ID
				    $the_excerpt = $the_post->post_content; //Gets post_content
				    $excerpt_length = 35; //Sets excerpt length by word count
				    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
				    $words = explode(' ', $the_excerpt, $excerpt_length + 1);
				
				    if(count($words) > $excerpt_length) :
				        array_pop($words);
				        array_push($words, '… View More');
				        $the_excerpt = implode(' ', $words);
				    endif;
				
				
				    return $the_excerpt;
				  }
				}
				
				echo '<a href="'.get_permalink($postid).'" title="Click to view '.$event_title.'">';
				echo '<div class="col-sm-12 no-padding">';
				echo '<div class="col-sm-2 no-padding img">';
				echo '<div class="thumbnail default"></div>';
				echo '</div>';
				echo '<div class="col-sm-8 descrip">';
				echo '<h3>'.$event_title.'</h3>';
				echo '<div class="ai1ec-time"><strong>When:</strong> '.$event_date.' at 
				      <span class="date"> '.$event_time.'</span></div>';
				echo '<p>'.get_excerpt_by_id($postid).'</p>';
				echo '</p>';
				echo '</div>';
				echo '<a <a href="'.get_permalink($postid).'">';
				echo '<div class="col-sm-2 no-padding pull-right">';
				echo '<div class="more">';
				echo '<p class="view">View Event</p>';
				echo '</div>';
				echo '</div>';
				echo '</a>';
				echo '<div class="clear"></div>';
				echo '<hr>';
			}

		}
		echo '</div>';
	}

?>