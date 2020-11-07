<div class="container">
    <center>
        <span class="text-bold">
            Daftar Driver
        </span>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Mobil</th>
                    <th scope="col">Plat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($driver as $drv) :
                ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $drv['username']; ?></td>
                        <td><?= $drv['mobil']; ?></td>
                        <td><?= $drv['plat']; ?></td>
                        <td><?= $drv['telepon']; ?></td>
                        <td>
                            <?php
                            if ($drv['status'] == 0) {
                                echo '<button class="btn btn-success" style="width: 50%; height:90%;"> Aktif </button> ';
                            } else {
                                echo '<button class="btn btn-danger" style="width: 50%; height:90%;"> Non-Aktif </button>';
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
</div>