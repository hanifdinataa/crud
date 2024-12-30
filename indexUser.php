<?php include('template/header.php')?>

<div class="container">
    <h1>Input Data User</h1>
    <a href="user.php" class="btn btn-primary">Tampilkan Data User</a>

    <form action="prosesUser.php" method="POST" enctype="multipart/form-data">
       
        <!-- nama  -->
        <div class="mb-3">
            <label for="nama" class="form-label">Masukkan Nama User</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <!-- email -->
        <div class="mb-3">
            <label for="email" class="form-label">Masukkan Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <!-- password -->
        <div class="mb-3">
            <label for="password" class="form-label">Masukkan Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- Role -->
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" name="role" required>
                <option value="">Pilih Role</option>
                <option value="superadmin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="SIMPAN" name="submit">
    </form>
</div>
<?php include('template/footer.php')?>
