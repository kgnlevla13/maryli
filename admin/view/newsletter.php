<?php require admin_view('static/header') ?>

<?php
// SQL sorgusu ile tüm aboneleri çek
$sql = "SELECT id, email, created_at FROM subscribes";
$result = $conn->query($sql);
?>

<div class="page-body">
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4>Newsletter</h4>
					</div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                // Veritabanındaki her bir satırı listele
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <td>" . $row["id"]. "</td>
                                            <td>" . $row["email"]. "</td>
                                            <td>" . $row["created_at"]. "</td>
                                          </tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3'>Hiç abone bulunamadı.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
<?php require admin_view('static/footer') ?>