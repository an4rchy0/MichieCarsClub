<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Page</title>
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
		<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs@1.5.0/dist/purecounter_vanilla.min.js"></script>
		<!-- Font Awesome Kit -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            body{margin:5%;}
            td{border:1px solid;}
            th{border:1px solid; background-color:#C5C4C4;}
        </style>
	</head>
<body>
<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Report.xls");
?>
<h3>E - Report Transactions💲💸💰</h3>
<table class="table table-hover align-middle">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Product Photo</th>
            <th>Name</th>
            <th>Total</th>
            <th>Address</th>
            <th>Date</th>
            <th>User</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($getData as $index => $p)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $p->produk }}</td> 
            <td>{{ $p->name }}</td>
            <td>Rp{{ number_format($p->total_harga, 2, ',', '.') }}</td>
            <td>{{ $p->address }}</td>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->nama_user }}</td> 
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>