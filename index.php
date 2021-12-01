<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

	</head>
	<style>
	

	</style>
<body>
<div class="topnav">

<div class="topnav-centered">
  <a href="" class="active">STUDENT GRADE CALCULATOR</a>
</div>

<a href=""><br></a>



</div>
<br><br><br>
<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">STUDENT GRADE CALCULATOR</h3>
		
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add student</button>
		<br /><br />
		<table class="table table-bordered display" id="userTable">
			<thead class="alert-info">
				<tr>
					<th>Name</th>
					<th>REG_NO</th>
					<th>IWP</th>
					<th>BAC</th>
					<th>PDC</th>
					<th>MI</th>
					<th>ISAA</th>
					<th>Final Grade</th>
					<th>PASS/FAIL</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'conn.php';
					
					$query = mysqli_query($conn, "SELECT * FROM `student` ORDER BY final desc ") or die(mysqli_error());
					while($fetch = mysqli_fetch_array($query)){
					
				?>
				<tr>
					<td><?php echo $fetch['name']?></td>
					<td><?php echo $fetch['regno']?></td>
					<td><?php echo $fetch['iwp']?></td>
					<td><?php echo $fetch['bac']?></td>
					<td><?php echo $fetch['pdc']?></td>
					<td><?php echo $fetch['mi']?></td>
					<td><?php echo $fetch['isaa']?></td>
					<td><?php echo $fetch['final']?></td>

					
					<?php
						if($fetch['final'] >=90){
							echo "<td style='background-color:cyan; color:#fff;'>S</td>";
						}else if($fetch['final'] >=80){
							echo "<td style='background-color:gold; color:#fff;'>A</td>";
						}
						else if($fetch['final'] >=80){
							echo "<td style='background-color:blue; color:#fff;'>B</td>";
						}
						else if($fetch['final'] >=70){
							echo "<td style='background-color:green; color:#fff;'>C</td>";
						}
						else if($fetch['final'] >=60){
							echo "<td style='background-color:silver; color:#fff;'>D</td>";
						}
						else if($fetch['final'] >50){
							echo "<td style='background-color:purple; color:#fff;'>E</td>";
						}
						else if($fetch['final'] <= 50){
							echo "<td style='background-color:red; color:#fff;'>FAIL</td>";
						}
					?>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="save_student.php">
				<div class="modal-header">
					<h3 class="modal-title">Add Student</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
					<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" required="required"/>
					</div>
					<div class="form-group">
							<label>REG_NO</label>
							<input type="text" class="form-control" name="reg" required="required"/>
					</div>
						
						<div class="form-group">
						<label>IWP</label>
						<div class="form-inline">
							<input type="number" min="0" max="30" class="form-control" name="cat1" placeholder="CAT1"/>
							<input type="number" min="0" max="30" class="form-control" name="cat2" placeholder="CAT2" />
							<input type="number" min="0" max="10" class="form-control" name="da1" placeholder="DA1"/>
							<input type="number" min="0" max="10" class="form-control" name="da2" placeholder="DA2"/>
							<input type="number" min="0" max="10" class="form-control" name="quiz" placeholder="QUIZ"/>
							<input type="number" min="0" max="100" class="form-control" name="fat" placeholder="FAT"/>
						</div>
						</div>
						<div class="form-group">
							<label>BAC</label>
							<div class="form-inline">
							<input type="number" min="0" max="30" class="form-control" name="2cat1" placeholder="CAT1"/>
							<input type="number" min="0" max="30" class="form-control" name="2cat2" placeholder="CAT2" />
							<input type="number" min="0" max="10" class="form-control" name="2da1" placeholder="DA1"/>
							<input type="number" min="0" max="10" class="form-control" name="2da2" placeholder="DA2"/>
							<input type="number" min="0" max="10" class="form-control" name="2quiz" placeholder="QUIZ"/>
							<input type="number" min="0" max="100" class="form-control" name="2fat" placeholder="FAT"/>
						</div>
						</div>
						<div class="form-group">
							<label>PDC</label>
							<div class="form-inline">
							<input type="number" min="0" max="30" class="form-control" name="3cat1" placeholder="CAT1"/>
							<input type="number" min="0" max="30" class="form-control" name="3cat2" placeholder="CAT2" />
							<input type="number" min="0" max="10" class="form-control" name="3da1" placeholder="DA1"/>
							<input type="number" min="0" max="10" class="form-control" name="3da2" placeholder="DA2"/>
							<input type="number" min="0" max="10" class="form-control" name="3quiz" placeholder="QUIZ"/>
							<input type="number" min="0" max="100" class="form-control" name="3fat" placeholder="FAT"/>
						</div>
						</div>
						<div class="form-group">
							<label>MI</label>
							<div class="form-inline">
							<input type="number" min="0" max="30" class="form-control" name="4cat1" placeholder="CAT1"/>
							<input type="number" min="0" max="30" class="form-control" name="4cat2" placeholder="CAT2" />
							<input type="number" min="0" max="10" class="form-control" name="4da1" placeholder="DA1"/>
							<input type="number" min="0" max="10" class="form-control" name="4da2" placeholder="DA2"/>
							<input type="number" min="0" max="10" class="form-control" name="4quiz" placeholder="QUIZ"/>
							<input type="number" min="0" max="100" class="form-control" name="4fat" placeholder="FAT"/>
						</div>
						</div>
						<div class="form-group">
							<label>ISAA</label>
							<div class="form-inline">
							<input type="number" min="0" max="30" class="form-control" name="5cat1" placeholder="CAT1"/>
							<input type="number" min="0" max="30" class="form-control" name="5cat2" placeholder="CAT2" />
							<input type="number" min="0" max="10" class="form-control" name="5da1" placeholder="DA1"/>
							<input type="number" min="0" max="10" class="form-control" name="5da2" placeholder="DA2"/>
							<input type="number" min="0" max="10" class="form-control" name="5quiz" placeholder="QUIZ"/>
							<input type="number" min="0" max="100" class="form-control" name="5fat" placeholder="FAT"/>
						</div>
						</div>
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Close</button>
					<button class="btn btn-primary" name="save"><span class="glyphicon glyphicon-save"></span> save</button>
				</div>
			</form>
		</div>
	</div>
</div>	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>	
</html>