<?php include 'inc/header.php'; ?>
<h2>Ajax:- Autocomplete Textbox</h2>
<div class="content">

	<style type="text/css">
		.skill{background: #fba991; margin-left: 52px; padding: 6px 30px; width: 190px;}
		.skill ul{margin:0; padding: 0; list-style: none;}
		.skill ul li {cursor:pointer;}

	</style>
	<form action="" method="post">
		<table>
			<tr>
				<td>Skill</td>
				<td>:</td>
				<td>
					<input type="text" name="skill" id="skill" placeholder="Enter Your Skill" />
				</td>

			</tr>

		</table>
		<div id='skillstatus'></div>
	</form>

</div>
<?php include 'inc/footer.php'; ?>