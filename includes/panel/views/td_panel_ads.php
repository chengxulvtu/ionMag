<?php

echo td_panel_generator::box_start('Header ad', false);?>
    <!-- ad box code -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">YOUR HEADER AD</span>
            <p>Paste your ad code here. Google adsense will be made responsive automatically. <br><br> To add non adsense responsive ads, <br> <a target="_blank" href="http://forum.tagdiv.com/using-other-ads/">click here</a></p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::textarea(array(
                'ds' => 'td_ads',
                'item_id' => 'header',
                'option_id' => 'ad_code',
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Advance usage:</span>
            <p>If you leave the AdSense size boxes on Auto, the theme will automatically resize the <strong>google ads</strong>. For more info follow this <a href="http://forum.tagdiv.com/header-ad/" target="_blank">link</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>

    <!-- disable ad on monitor -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">DISABLE ON DESKTOP</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                    'ds' => 'td_ads',
                    'item_id' => 'header',
                    'option_id' => 'disable_m',
                    'true_value' => 'yes',
                    'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                         'ds' => 'td_ads',
                         'item_id' => 'header',
                         'option_id' => 'm_size',
                         'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>
        </div>
    </div>


	<!-- disable ad on table landscape -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title td-title-on-row">DISABLE ON TABLET LANDSCAPE</span>
			<p></p>
		</div>
		<div class="td-box-control-full">
	            <span>
	            <?php
	            echo td_panel_generator::checkbox(array(
		            'ds' => 'td_ads',
		            'item_id' => 'header',
		            'option_id' => 'disable_tl',
		            'true_value' => 'yes',
		            'false_value' => ''
	            ));
	            ?>
	            </span>
	            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
	                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
	                <span class="td-content-float-right">
	                    <?php
	                    echo td_panel_generator::dropdown(array(
		                    'ds' => 'td_ads',
		                    'item_id' => 'header',
		                    'option_id' => 'tl_size',
		                    'values' => td_panel_generator::$google_ad_sizes
	                    ));
	                    ?>
	            </span>
		</div>
	</div>


    <!-- disable ad on tablet portrait -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">DISABLE ON TABLET PORTRAIT</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'header',
                'option_id' => 'disable_tp',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'header',
                        'option_id' => 'tp_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>

        </div>
    </div>


    <!-- disable ad on phones -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE ON PHONE</span>
            <p>Google adsense requiers that you do not use big header ads on mobiles!</p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'header',
                'option_id' => 'disable_p',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'header',
                        'option_id' => 'p_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>

        </div>
    </div>
<?php echo td_panel_generator::box_end();?>




<?php echo td_panel_generator::box_start('Sidebar ad', false);?>

   <div class="td-box-row">
        <div class="td-box-description td-box-full">
             <span class="td-box-title">Notice:</span>
             <p>To show the ads on the sidebar, please drag the "[taDiv] Ad box" widget to the desired sidebar. </p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
   </div>

    <!-- ad box code -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">YOUR SIDEBAR AD</span>
            <p>Paste your ad code here. Google adsense will be made responsive automatically. <br><br> To add non adsense responsive ads, <br> <a target="_blank" href="http://forum.tagdiv.com/using-other-ads/">click here</a> (last paragraph)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::textarea(array(
                'ds' => 'td_ads',
                'item_id' => 'sidebar',
                'option_id' => 'ad_code',
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Advance usage:</span>
            <p>If you leave the AdSense size boxes on Auto, the theme will automatically resize the <strong>google ads</strong>. For more info follow this <a href="http://forum.tagdiv.com/header-ad/" target="_blank">link</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>


    <!-- disable ad on monitor -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">DISABLE ON DESKTOP</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'sidebar',
                'option_id' => 'disable_m',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'sidebar',
                        'option_id' => 'm_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>

        </div>
    </div>



	<!-- disable ad on table landscape -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title td-title-on-row">DISABLE ON TABLET LANDSCAPE</span>
			<p></p>
		</div>
		<div class="td-box-control-full">
	            <span>
	            <?php
	            echo td_panel_generator::checkbox(array(
		            'ds' => 'td_ads',
		            'item_id' => 'sidebar',
		            'option_id' => 'disable_tl',
		            'true_value' => 'yes',
		            'false_value' => ''
	            ));
	            ?>
	            </span>
	            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
	                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
	                <span class="td-content-float-right">
	                    <?php
	                    echo td_panel_generator::dropdown(array(
		                    'ds' => 'td_ads',
		                    'item_id' => 'sidebar',
		                    'option_id' => 'tl_size',
		                    'values' => td_panel_generator::$google_ad_sizes
	                    ));
	                    ?>
	            </span>
		</div>
	</div>




    <!-- disable ad on tablet portrait -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">DISABLE ON TABLET PORTRAIT</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'sidebar',
                'option_id' => 'disable_tp',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'sidebar',
                        'option_id' => 'tp_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>

        </div>
    </div>


    <!-- disable ad on phones -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE ON PHONE</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'sidebar',
                'option_id' => 'disable_p',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'sidebar',
                        'option_id' => 'p_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>
        </div>
    </div>

<?php echo td_panel_generator::box_end();?>



<?php echo td_panel_generator::box_start('Article top ad', false);?>

    <!-- ad box code -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">YOUR ARTICLE TOP AD</span>
            <p>Paste your ad code here. Google adsense will be made responsive automatically. <br><br> To add non adsense responsive ads, <br> <a target="_blank" href="http://forum.tagdiv.com/using-other-ads/">click here</a> (last paragraph)</p>
        </div>
        <div class="td-box-control-full">
            <?php
            echo td_panel_generator::textarea(array(
                'ds' => 'td_ads',
                'item_id' => 'content_top',
                'option_id' => 'ad_code',
            ));
            ?>
        </div>
    </div>


    <div class="td-box-row">
        <div class="td-box-description td-box-full">
            <span class="td-box-title">Advance usage:</span>
            <p>If you leave the AdSense size boxes on Auto, the theme will automatically resize the <strong>google ads</strong>. For more info follow this <a href="http://forum.tagdiv.com/header-ad/" target="_blank">link</a></p>
        </div>
        <div class="td-box-row-margin-bottom"></div>
    </div>


    <!-- disable ad on monitor -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">DISABLE ON DESKTOP</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'content_top',
                'option_id' => 'disable_m',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'content_top',
                        'option_id' => 'm_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>

        </div>
    </div>


	<!-- disable ad on table landscape -->
	<div class="td-box-row">
		<div class="td-box-description">
			<span class="td-box-title td-title-on-row">DISABLE ON TABLET LANDSCAPE</span>
			<p></p>
		</div>
		<div class="td-box-control-full">
	            <span>
	            <?php
	            echo td_panel_generator::checkbox(array(
		            'ds' => 'td_ads',
		            'item_id' => 'content_top',
		            'option_id' => 'disable_tl',
		            'true_value' => 'yes',
		            'false_value' => ''
	            ));
	            ?>
	            </span>
	            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
	                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
	                <span class="td-content-float-right">
	                    <?php
	                    echo td_panel_generator::dropdown(array(
		                    'ds' => 'td_ads',
		                    'item_id' => 'content_top',
		                    'option_id' => 'tl_size',
		                    'values' => td_panel_generator::$google_ad_sizes
	                    ));
	                    ?>
	            </span>
		</div>
	</div>




    <!-- disable ad on tablet portrait -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title td-title-on-row">DISABLE ON TABLET PORTRAIT</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'content_top',
                'option_id' => 'disable_tp',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'content_top',
                        'option_id' => 'tp_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>

        </div>
    </div>


    <!-- disable ad on phones -->
    <div class="td-box-row">
        <div class="td-box-description">
            <span class="td-box-title">DISABLE ON PHONE</span>
            <p></p>
        </div>
        <div class="td-box-control-full">
            <span>
            <?php
            echo td_panel_generator::checkbox(array(
                'ds' => 'td_ads',
                'item_id' => 'content_top',
                'option_id' => 'disable_p',
                'true_value' => 'yes',
                'false_value' => ''
            ));
            ?>
            </span>
            <span class="td-content-float-right td_float_clear_both td-content-padding-right-40">
                <span class="td-content-padding-right-40 td-adsense-size">AdSense size: </span>
                <span class="td-content-float-right">
                    <?php
                    echo td_panel_generator::dropdown(array(
                        'ds' => 'td_ads',
                        'item_id' => 'content_top',
                        'option_id' => 'p_size',
                        'values' => td_panel_generator::$google_ad_sizes
                    ));
                    ?>
            </span>

        </div>
    </div>

<?php echo td_panel_generator::box_end();?>


<!-- custom ads -->
<?php
    echo td_panel_generator::ajax_box('Custom ad 1', array(
            'td_ajax_calling_file' => basename(__FILE__),
            'td_ajax_box_id' => 'td_get_ad_spot_by_id',
            'ad_spot_id' => 'custom_ad_1'
        )
    );
?>