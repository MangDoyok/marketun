<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: #e9ecef;
    margin: 0;
    padding: 0;
    height: 100vh; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
}

.container {
    max-width: 600px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 12px;
    text-align: left;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: 15px;
}

input[type="submit"],
button {
    padding: 12px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-size: 16px;
}

input[type="submit"]:hover,
button:hover {
    background-color: #0056b3;
}

a {
    text-decoration: none;
}

a button {
    background-color: #28a745;
}

a button:hover {
    background-color: #218838;
}

.notification {
    color: red;
    margin-bottom: 20px;
}
</style>
<div class="container">
<form method="post" action="aksidatasiswa.php">
    <table>
        <tr>
            <td>Nis</td>
            <td>:</td>
            <td><input type="number" name="nis" placeholder="Masukkan nis anda"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" placeholder="Masukkan nama anda"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" placeholder="Masukkan kelas anda"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" placeholder="Masukkan alamat anda"></td>
        </tr>
        <tr>
            <td>No.telpon</td>
            <td>:</td>
            <td><input type="number" name="no_telp" placeholder="Masukkan no telpon anda"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" value="SELESAI">
            </td>
        </tr>
    </table>
    </div>		
</form>