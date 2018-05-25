<?php include 'inc/header.php'; ?>
<h2>Ajax:- Create A Show Password Button</h2>
<div class="content">
	<form action="" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" placeholder="Enter Your Username" />
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" id="password" placeholder="Enter Your Password" />
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="button" id="showpass">Show Password</button>
				</td>
			</tr>

		</table>
		<div id='passstatus'></div>
	</form>

</div>
<?php include 'inc/footer.php'; ?>