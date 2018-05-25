<?php include 'inc/header.php'; ?>
<h2>Ajax:- Live Data Search</h2>
<div class="content">

	<style type="text/css">
		.liveSearch{background: #fba991; margin-left: 52px; padding: 6px 30px; width: 190px;}
		.liveSearch ul{margin:0; padding: 0; list-style: none;}
		.liveSearch ul li {cursor:pointer;
		}

	</style>
	<form action="" method="post">
		<table>
			<tr>
				<td>Type Keyword</td>
				<td>:</td>
				<td>
					<input type="text" name="search" id="liveSearch" placeholder="Type Your Keyword" />
				</td>
			</tr>
		</table>
	</form>
	<div id='searchStatus'></div>

</div>
<?php include 'inc/footer.php'; ?>