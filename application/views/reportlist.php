<div id="table" style="padding:20px" class="mt-5">
	
	<table id="companies">
		<thead>
			<th>#</th>
			<th>Date time</th>
			<th>Name</th>
			<th>Status</th>
			<th>Action</th>
		</thead>
		<tbody>
			<?php 
			$count = 1;
			if(isset($table) and $table != false){

			foreach ($table as $row) {
				echo "<tr>";
				echo "<td>".$count."</td>";
				echo "<td>".$row->created_at."</td>";
				echo "<td>".$row->company_name."</td>";
				echo '<td> <span class="badge badge-secondary">Pendding</span></td>';
				echo '<td class="text-center"><div class="btn-group" role="group" aria-label="Basic example"><a class="btn btn-primary" href="'. base_url("newreport").'?id='.$row->id.'">Edit</a></div></td>';
				echo "</tr>";
				$count ++;
			}
			}else{
				echo "<tr>";
				echo "<td colspan='4' class='text-center'>No Data</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#companies').DataTable();
	} );
</script>
	<style>

footer {
    bottom: 0;
    width: 100%;
}

</style>
