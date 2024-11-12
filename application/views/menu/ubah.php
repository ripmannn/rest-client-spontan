<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Menu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_produk" value="<?=$Menu['id_produk'];?>">
                        <div class="form-group">
                            <label for="stok">stok</label>
                            <input type="number" name="stok" class="form-control" id="stok" value="<?=$Menu['stok'];?>" max="100">
                            <small class="form-text text-danger"><?=form_error('stok');?></small>
                        </div>


                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                    <a href="<?=base_url();?>Menu" class="btn btn-secondary">Kembali</a>
                </div>
            </div>


        </div>
    </div>

</div>