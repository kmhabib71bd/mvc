

	<a href="<?php echo BASE_URL; ?>">HOME</a> <hr/><hr/>
<article class="postcontent">
	<?php
	foreach ($postbyid as $key => $value){



	?>
	<div class="details">
		<div class="title">
			<h2><?php echo $value['title'] ?></h2>
			<p>category: <a href="<?php echo BASE_URL;?>/post/postByCat/<?php echo $value['cat']; ?> "><?php echo $value['name']; ?></a></p>
		</div>
		<div class="desc">
			<p><?php echo $value['content'] ?></p>
		</div>
	</div>
	<?php 	} ?>
</article>
