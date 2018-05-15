<?php include_once('admin_header.php'); ?>


<div class='container'>
	
	<table class="table">
		
		<thead>
			<th>Sr. No</th>
			<th>Title</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php
            
            if (count($articles)):?>
			<?php foreach($articles as $article); ?>
			<tr>
				<td>1</td>
				<td>Article Title</td>
				<td>
				<a href="#" class="btn btn-info disabled">Edit</a>
			    <a href="#" class="btn btn-danger disabled">Delete</a>
			</td>
			</tr>
			<?php endforeach; ?>
		
	<?php endif; ?>
?>
		</tbody>
	</table>
</div>




<?php include_once('admin_footer.php'); ?>