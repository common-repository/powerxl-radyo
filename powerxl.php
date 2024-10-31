<?php
/*
Plugin Name: PowerXL Radyo
Plugin URL: http://www.cihanoztunc.com/
Description: Online Chillout, House, Electronic, Ambient and Lounge radio station from Turkey
Version: 2.1
Author: Cihan Oztunc
Author URI: http://www.cihanoztunc.com
*/

function widget_PowerXL($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
<div>
<img src="wp-content/plugins/powerxl-radyo/images/powerxl-logo.jpg" width=300px alt="Powerturk">
</br>
<audio controls loop><source src="http://powerextralounge.listenpowerapp.com/powerextralounge/mpeg/icecast.audio" />Lütfen Bekleyiniz.</audio>
			
</div>

        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('PowerXL Radyo', 'widget_PowerXL');
?>