<?php include "header.php"; ?>
<section class="mainleft">
	<form action="" method="post">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name" placeholder="Your Name..." required="1"/></td>
			</tr>
			
			<tr>
				<td>Department: </td>
				<td><input type="text" name="dep" placeholder="Your Department..." required="1"/></td>
			</tr>
			
			<tr>
				<td>Age: </td>
				<td><input type="text" name="age" placeholder="Your Age..." required="1"/></td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="create" value="Submit"/>
				</td>
			</tr>
		</table>
	</form>
</section>


<section class="mainright">
	<table class="tblone">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Department</th>
			<th>Age</th>
			<th>Action</th>
		</tr>

		<tr>
			<td>01</td>
			<td>Najmul Hoque</td>
			<td>CSE</td>
			<td>23</td>
			<td>
				<a href="">Edit</a> ||
				<a href="">Delete</a>
			</td>
		</tr>

		<tr>
			<td>02</td>
			<td>Jewel Rana</td>
			<td>BBA</td>
			<td>25</td>
			<td>
				<a href="">Edit</a> ||
				<a href="">Delete</a>
			</td>
		</tr>

		<tr>
			<td>03</td>
			<td>Shamim Molla</td>
			<td>EEE</td>
			<td>24</td>
			<td>
				<a href="">Edit</a> ||
				<a href="">Delete</a>
			</td>
		</tr>
	</table>
</section>

<?php include "footer.php"; ?>