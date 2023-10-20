<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form PHP</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>

    <form method="post" action="proses.php">
        <label for="input_angka">Angka:</label>
        <input type="text" name="input_angka" id="input_angka" placeholder="Masukkan angka" required>
        
        <label for="pilihan_operasi">Operasi:</label>
        <select name="pilihan_operasi" id="pilihan_operasi">
            <option value="tambah">Penambahan (+)</option>
            <option value="kurang">Pengurangan (-)</option>
            <option value="kali">Perkalian (*)</option>
            <option value="bagi">Pembagian (/)</option>
        </select>
        
        <input type="submit" name="hitung" value="Hitung">
    </form>
</body>
</html>