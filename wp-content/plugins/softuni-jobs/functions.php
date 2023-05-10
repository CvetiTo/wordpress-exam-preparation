<?php
/**
 * This function update the jobs post meta for the views count
 *
 * @param integer $job_id
 * @return void
 */
function softuni_update_job_views_count( $job_id = 0){
    if( empty( $job_id ) ) {
        return;
    }
    //if ( ! is_single( 'job' ) ) {
    //   return;
    //} 

    $view_count = get_post_meta( $job_id, 'views_counts', true );
    var_dump($view_count);
    if ( ! empty ( $view_count ) ) {
        $view_count = $view_count + 1;
        update_post_meta( $job_id, 'views_counts', $view_count );

    } else {
        update_post_meta( $job_id, 'views_counts', 1 );
    }
    
}