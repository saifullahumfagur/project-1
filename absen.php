<html>

<head>
    <title>Struktur Kendali dengan Switch</title>

</head>

<body>


    <form action="" method="POST">
        <table align="center" bgcolor="lightgreen" cellpadding="5">
            <tr bgcolor="seagreen">
                <td colspan="3">Biodata Singkat Santri</td>
            </tr>
            <tr>
                <td>No.absen</td>
                <td>:</td>
                <td>
                    <select name="absen">
                        <option hidden>-Pilih-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                         <option value="5">5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="kirim"></td>

            </tr>
        </table>
    </form>
    <hr>
    <center>
        <?php
        $nama = "";
        $jurusan = "";
        $asal = "";
        if (isset($_POST['absen'])) {
            $absen = $_POST['absen'];
            switch ($absen) {
                case 1;
                    $nama = "Akbar Suwardi";
                    $jurusan = "Sosiologi";
                    $asal = "Bailang";
                    break;
                case 2;
                    $nama = 'Aditya Fahrezi';
                    $jurusan = "Sejarah";
                    $asal = "Loreng";
                    break;
                case 3;
                    $nama = 'Liyo Cahyadi';
                    $jurusan = "Kimia";
                    $asal = "Bailang";
                    break;
                case 4;
                    $nama = 'Sanjar Wangki';
                    $jurusan = "Fisika";
                    $asal = "Ratatotok";
                    break;
                case 5;
                    $nama = 'Aditya Tadore';
                    $jurusan = "Biologi";
                    $asal = "Sanger";
                    break;    
            }
        }
        ?>
        <table cellspacing="3" cellpadding="5">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?php echo $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <?php echo $jurusan; ?>
                </td>
            </tr>
            <tr>
                <td>Asal</td>
                <td>:</td>
                <td>
                    <?php echo $asal; ?>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
