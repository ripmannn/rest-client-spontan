<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Menu
                </div>
                <div class="card-body">
                    <img src="<?=$Menu['gambar'];?>" class="card-img-top" alt="...">
                    <h5 class="card-title"><?=$Menu['nama'];?></h5>
                    <p class="card-text"> Keterangan : <?=$Menu['keterangan'];?></p>
                    <p class="card-text">Jenis :<?=$Menu['jenis'];?></p>
                    <p class="card-text">Stok :<?=$Menu['stok'];?></p>
                    <p class="card-text">Harga : Rp <?=number_format($Menu['harga'], 0, ',', '.');?></p>

                    <a href="<?=base_url();?>Menu" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>