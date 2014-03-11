<?php
/**
 * The template for displaying Search form.
 *
 * @package healthymother
 */
?>

<form action="<?php echo site_url('/'); ?>" id="searchform" method="get">
     <fieldset>
         <input type="search" id="s" name="s" placeholder="Enter keywords" required />
         <i class="ss-icon ss-standard" style="vertical-align: middle">search</i>
         <input type="image" id="searchsubmit" alt="Search" hidden="true"/>
     </fieldset>
</form>