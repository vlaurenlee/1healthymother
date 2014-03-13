<?php
/*
Plugin Name: HM Custom Archives
Description: Custom Archives Widget for 1HealthyMother
Author: Vanessa Lee
Version: 1
*/
class HM_Archives extends WP_Widget
{
  function HM_Archives()
  {
    $widget_ops = array('classname' => 'HM_Archives', 'description' => 'Custom Archives Widget for 1HealthyMother' );
    $this->WP_Widget('HM_Archives', 'HM Archives', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)

  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
    // WIDGET CODE GOES HERE
  	global $wpdb;
	$year_prev = null;
	$months = $wpdb->get_results(	"SELECT DISTINCT MONTH( post_date ) AS month ,
									YEAR( post_date ) AS year,
									COUNT( id ) as post_count FROM $wpdb->posts
									WHERE post_status = 'publish' and post_date <= now( )
									and post_type = 'post'
									GROUP BY month , year
									ORDER BY post_date DESC");
	foreach($months as $month) :
		$year_current = $month->year;
		if ($year_current != $year_prev){
			if ($year_prev != null){?>
			</ul>
			<?php } ?>
		<h3><?php echo $month->year; ?></h3>
		<ul class="archive-list">
		<?php } ?>
		<li>
			<a href="<?php bloginfo('url') ?>/?m=<?php echo $month->year; ?><?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
				<span class="archive-month"><?php echo date("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span>
				<span class="archive-count">   ( <?php echo $month->post_count; ?> )</span>
			</a>
		</li>
	<?php $year_prev = $year_current;
	endforeach; ?> </ul>
	<?php 
	wp_reset_query();
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("HM_Archives");') );

?>