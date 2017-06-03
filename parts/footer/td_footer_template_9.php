<div class="td-footer-wrapper td-footer-template-9 <?php echo td_util::get_option('td_full_footer'); ?>">
    <div class="td-container">

	    <div class="td-pb-row">
		    <div class="td-pb-span12">
			    <?php
                $tds_footer_top_title = td_util::get_option('tds_footer_top_title');
			    // ad spot
			    echo td_global_blocks::get_instance('td_block_ad_box')->render(array('spot_id' => 'footer_top', 'spot_title' => $tds_footer_top_title));
			    ?>
		    </div>
	    </div>

        <?php locate_template('parts/footer/td_footer_extra.php', true); ?>
    </div>
</div>