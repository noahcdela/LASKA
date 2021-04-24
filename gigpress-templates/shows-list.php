<div class="show">
	<div class="show-date">
		<?php echo $showdata['date']; ?>
	</div>

	<div class="show-top-section">
		<?php echo $showdata['venue']; ?>
	</div>

	<div class="show-info">
		<?php echo $showdata['date_long']; ?>

		<?php if($showdata['time']) : ?>
		<span>
			<?php echo $showdata['time']; ?></span>
		<?php endif; ?>

		·

		<?php echo $showdata['city']; if(!empty($showdata['state'])) echo ', '.$showdata['state']; ?>

		<?php if($showdata['notes']) : ?>
		<span>
			<?php echo $showdata['notes']; ?></span>
		<?php endif; ?>
	</div>

	<?php if($showdata['external_link']) : ?>
	<a class="show-link" target="_blank" href="<?php echo $showdata['external_url']; ?>">More Info ↗︎</a>
	<?php endif; ?>

</div>