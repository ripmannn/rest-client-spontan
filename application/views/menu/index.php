<div class="container">
   <?php if ($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash');?>"></div>
<?php endif;?>



    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Menu</h3>
            <?php if (empty($Menu)): ?>
                <div class="alert alert-danger" role="alert">
                    data Menu tidak ditemukan.
                </div>
            <?php endif;?>
            <ul class="list-group">
                <?php $no = 1; // Inisialisasi nomor urut ?>
                <?php foreach ($Menu as $mhs): ?>
                    <li class="list-group-item">
                        <?=$no++;?>. <?=$mhs['nama'];?>

                        <a href="<?=base_url();?>Menu/ubah/<?=$mhs['id_produk'];?>"
                            class="badge badge-success float-right">ubah</a>
                        <a href="<?=base_url();?>Menu/detail/<?=$mhs['id_produk'];?>"
                            class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach;?>

            </ul>
        </div>
    </div>

</div>