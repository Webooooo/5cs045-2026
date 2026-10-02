<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
	<div class="container ">
	<?php include("nav.php"); ?>
  	<h1>Student Marking Script</h1>
		<div class= "row row-cols-2 row-cols-md-4 row-cols-xl-12 g-4">
			<?php  for ($x = 0; $x <= 12; $x++) { ?> 
			<div class="col">
				<div class="card" style="width: 18rem;">
				  <div class="card-header bg-success text-white">
					5CS045
				  </div>
				  <ul class="list-group list-group-flush">
					<li class="list-group-item">Name</li>
					<li class="list-group-item">Test Score</li>
					<li class="list-group-item">Final Score</li>
				  </ul>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>