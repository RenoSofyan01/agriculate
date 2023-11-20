<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, title, and stylesheets -->

    <script>
        function openModal() {
            document.getElementById('myModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == document.getElementById('myModal')) {
                closeModal();
            }
        }
    </script>
</head>
<body>

    <button onclick="openModal()">Tambah Data</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>

<!-- Form -->
<form action="process.php" method="post">
    <label for="jenis_tanah">Jenis Tanah:</label>
    <select name="jenis_tanah" required>
        <option value="aluvial">Aluvial</option>
        <option value="andosol">Andosol</option>
        <option value="entisol">Entisol</option>
        <option value="grumusol">Grumusol</option>
        <option value="humus">Humus</option>
        <option value="inceptisol">Inceptisol</option>
        <option value="laterit">Laterit</option>
        <option value="latosol">Latosol</option>
        <option value="litosol">Litosol</option>
        <option value="kapur">Kapur</option>
    </select><br><br>

    <button type="submit">Simpan</button><br><br>
</form>

        </div>
    </div>

    <!-- PHP to display data -->

</body>
</html>
