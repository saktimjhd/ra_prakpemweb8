<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "data_mahasiswa";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql_count = "SELECT COUNT(*) as total FROM mahasiswa";
$result_count = mysqli_query($conn, $sql_count);
$row_count = mysqli_fetch_assoc($result_count);
$total_records = $row_count['total'];
$records_per_page = 10;
$total_pages = ceil($total_records / $records_per_page);

$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $records_per_page;

$sql = "SELECT * FROM mahasiswa LIMIT $offset, $records_per_page";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="122140123_sakti.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        $number = $offset + 1;
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $number . "</td>";
                            echo "<td>" . $row['nim'] . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['jurusan'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "</tr>";
                            $number++;
                        }
                        
                        $remaining_rows = $records_per_page - mysqli_num_rows($result);
                        for ($i = 0; $i < $remaining_rows; $i++) {
                            echo "<tr>";
                            echo "<td>&nbsp;</td>";
                            echo "<td>&nbsp;</td>";
                            echo "<td>&nbsp;</td>";
                            echo "<td>&nbsp;</td>";
                            echo "<td>&nbsp;</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php if ($total_records > $records_per_page): ?>
        <div class="pagination">
            <?php if ($current_page > 1): ?>
                <a href="?page=<?php echo ($current_page - 1); ?>" class="btn">
                    <i class="fas fa-chevron-left"></i> Previous
                </a>
            <?php endif; ?>

            <span class="page-info">
                Page <?php echo $current_page; ?> of <?php echo $total_pages; ?>
            </span>

            <?php if ($current_page < $total_pages): ?>
                <a href="?page=<?php echo ($current_page + 1); ?>" class="btn">
                    Next <i class="fas fa-chevron-right"></i>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>