


<hr/> <hr/>
<article class="postcontent">
	<?php
	foreach ($getcat as $key => $value) {
	 
	 ?>


	<div class="post">
		<div class="title">
			<h2><a href="<?php echo BASE_URL; ?>/post/postDetails/<?php echo $value['id']; ?>"><?php echo $value['title']; ?></a></h2>
			<p>category: <?php echo $value['name']; ?></p>
		</div>

		<p><?php 

		$text = $value['content'];
		if(strlen($text) > 200){
			$text = substr($text, 0, 100);
			echo $text;
		}
		?></p>
		<div class="readmore"><a href="<?php echo BASE_URL; ?>/post/postDetails/<?php echo $value['id'];?>">Read More...</a></div>
	</div>
	<?php 	} ?>

</article>









	
 