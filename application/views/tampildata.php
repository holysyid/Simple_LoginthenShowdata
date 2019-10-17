<!DOCTYPE html>
<html>
<head>
	<title>Data Diri</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
</head>
<body>
	<center><h2>Data Diri</h2></center>

	<div class="card">
					<table class="table" align="center">
						<?php foreach($data as $u){ ?>
					    <tr>

					      <th scope="col">Nama :</th>
					      <td class="form-control"><h5 class="card-title"><?php echo $u->nama ?></h5></td>
					    </tr>
					     <tr>
					      <th scope="col">Username :</th>
					      <td><p class="card-text"><?php echo $u->username ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">NIM :</th>
					      <td><p class="card-text"><?php echo $u->nim ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">Alamat :</th>
					      <td><p class="card-text"><?php echo $u->alamat ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">Kom :</th>
					      <td><p class="card-text"><?php echo $u->kom ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">Alamat :</th>
					      <td> <p class="card-text"><?php echo $u->alamat ?></p></td>
					    </tr>
					     <?php } ?>
					</table>
				</div>
</body>
</html>