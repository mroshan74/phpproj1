<div>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share Something</a>
	<?php foreach($viewmodel as $item) : ?>
		<div class="card card-body bg-light">
            <h3><?php echo $item['title'];?></h3>
            <p><?php echo $item['body'];?></p>
            <small><?php echo $item['created_date'];?></small>
			<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
		</div>
	<?php endforeach; ?>
</div>