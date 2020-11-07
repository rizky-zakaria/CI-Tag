<div class="container">
    <center>
        <p>
            Selamat Datang <b>Root </b> di halaman Dashboard, anda dapat mengaktifkan status anda jika anda sudah siap menerima client
        </p>
        <?php
        foreach ($driver as $drv) :
        ?>
            <form action="<?= base_url('Home/updateDriver'); ?>" method="post">
                <?php
                if ($drv['status'] == 0) {
                    echo '<input type="submit" class="btn btn-success" name="update" value="Aktifkan">';
                } else {
                    echo '<input type="submit" class="btn btn-danger" name="update" value="Matikan">';
                }
                ?>
            </form>

        <?php endforeach; ?>
    </center>
</div>