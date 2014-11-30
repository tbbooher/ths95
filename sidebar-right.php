<?php if (is_active_sidebar('sidebar-right')) { ?>
                <p>sidebar right active</p>
				<div class="col-md-3" id="sidebar-right">
					<?php do_action('before_sidebar'); ?> 
					<?php dynamic_sidebar('sidebar-right'); ?> 
				</div>
<?php } ?> 