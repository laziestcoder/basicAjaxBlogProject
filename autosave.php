<?php include 'inc/header.php'; ?>
<h2>Ajax:- Auto Save Data</h2>
<div class="content">

	<style type="text/css">

	</style>
	<form action="" method="post">
		<table>
			<tr>
				<td>Type Your Content</td>
				<td>:</td>
				<td>
					<textarea name="content" id="content"></textarea>
				</td>
				<td></td>
				<td></td>
				<td>
					<input type="hidden" name= "contentid" id="contentid" />
				</td>
			</tr>
		</table>
	</form>
	<style >
		#contentStatus{
			color:blue;
		}
		/* dot . means class and # means id.*/ 
	</style>
	<div id='contentStatus'></div>

</div>
<?php include 'inc/footer.php'; ?>