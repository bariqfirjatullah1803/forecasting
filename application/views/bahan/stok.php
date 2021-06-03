<?= $this->session->flashdata('message');
?>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('bahan/add_stok')?>" method="post">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama Bahan</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="bahan">
                            <?php foreach($bahan AS $b):?>
                            <option value="<?= $b['id_bahan']?>"><?= $b['nama_bahan']?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="stok" class="form-label">Jumlah Bahan Datang</label>
                        <input type="text" name="stok" class="form-control">
                    </div>
                    <input style="float:right" type="submit" class="btn btn-primary" value="Tambah">
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Bahan</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($bahan AS $b):?>
                        <tr>
                            <td><?= $b['nama_bahan']?></td>
                            <td><?= $b['stok']?></td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>