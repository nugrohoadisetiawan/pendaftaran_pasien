<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Form Pendaftaran Pasien</h1>
    <form action="proses-daftar-pasien.php" method="POST">
        <form>
        <fieldset>
            <p>
			<label for="nama">Nama Lengkap : </label>
			<input type="text" name="nama"/>
            </p>
            <p>
			<label for="alamat">Alamat : </label>
			<textarea name="alamat" row="S"></textarea>
            </p>
            <p>
			<label for="jenis_kelamin">Jenis_Kelamin : </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="prempuan">prempuan</label>
            </p>
            <p>
			<label for="no_tlp">no_telepon : </label>
			<input type="number" name="no_tlp"/>
            </p>
            <p>
            <label for="agama">Agama : </label>
            <select name="agama">
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="hindu">hindu</option>
                <option value="buddha">buddha</option>
                <option value="katolik">katolik</option>
                <option value="konghucu">konghucu</option>
            </select>
            <p>
            <label for="tanggal_masuk">Tanggal Masuk : </label>
			<input type="date" name="tanggal_masuk"/>
            </p>
            <p>
            <label for="gejala">Gejala : </label>
			<input type="text" name="gejala"/>
            </p>
            <p>
            <label for="tempat_lahir">Tempat Lahir : </label>
			<input type="text" name="tempat_lahir"/>
            </p>
            <p>
            <label for="tanggal_lahir">Tanggal Lahir : </label>
			<input type="date" name="tanggal_lahir"/>
            </p>
            <p>
            <label for="no_kamar">Nomer Kamar : </label>
			<input type="number" name="no_kamar"/>
            </p>
            <p>
                <input type="submit" value = "simpan" name = "simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>