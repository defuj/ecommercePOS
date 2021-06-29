 <main id="search">
    <!-- Search -->
    <section id="add-on" class="d-md-none d-block mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <form method="get" action="<?= base_url('pages/kategori') ?>">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="key" placeholder="Cari Produk">
                  <button class="btn btn-custom" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>

     <div class="container">
         <div class="card  border-0 shadow ">
             <div class="card-body">
                 <div class="row mt-2">
                     <div class="col-lg-2 mb-2 ">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Kategori
                              </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                 <a href="<?= base_url('pages/kategori/notebook') ?>" class="list-group-item border-0">Notebook</a>
                                 <a href="<?= base_url('pages/kategori/perangkat pc') ?>" class="list-group-item border-0">Perangkat PC</a>
                                 <a href="<?= base_url('pages/kategori/pc') ?>" class="list-group-item border-0">PC</a>
                                 <a href="<?= base_url('pages/kategori/lcd') ?>" class="list-group-item border-0">LCD</a>
                                 <a href="<?= base_url('pages/kategori/aksesoris') ?>" class="list-group-item border-0">Aksesoris</a>
                                 <a href="<?= base_url('pages/kategori/ups') ?>" class="list-group-item border-0">UPS</a>
                                 <a href="<?= base_url('pages/kategori/printer') ?>" class="list-group-item border-0">Printer</a>
                                 <a href="<?= base_url('pages/kategori/storage') ?>" class="list-group-item border-0">Storage</a>
                                 <a href="<?= base_url('pages/kategori/networking') ?>" class="list-group-item border-0">Networking</a>
                                 <a href="<?= base_url('pages/kategori/proyektor') ?>" class="list-group-item border-0">Proyektor</a>
                            </div>
                          </div>
                        </div>
                     </div>
                     <div class="col-lg-10">
                         <div class="row mb-2">
                             <div class="col-md-8 my-2 ms-2 m-lg-0"> <label class="form-label">Menampilkan <?= $count[0]['COUNT(*)'] ?> produk untuk <strong>"<?= $key ?>"</strong> </label></div>
                             <div class="col-md-4">
                                 <select class="form-select form-select-sm">
                                     <option selected disabled value="">Pilih</option>
                                     <option>Paling Sesuai</option>
                                     <option>Terbaru</option>
                                     <option>Harga Tertinggi</option>
                                     <option>Harga Terendah</option>
                                 </select>
                             </div>
                         </div>
                         <div class="row">

                             <?php if (!$produk) { ?>
                                <div class="text-center text-muted my-5">Tidak ada item yang dapat ditampilkan. Silahkan cari keyword atau kategori yang benar!</div>
                             <?php } ?>
                             <?php foreach ($produk as $data) { ?>
                             <div class="col-md-4 col-sm-6 col-12 mb-4">
                                 <div class="card shadow">
                                    <a href="<?= base_url('pages/detail/'.$data->slug) ?>">
                                        <img src="<?= base_url('assets/img/'.$data->nama_file) ?>" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <h6 class="card-subtitle mb-2 text-hidden"><a href="<?= base_url('pages/detail/'.$data->slug) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                                        <?php if ($data->tipe_diskon == 'persen') { ?>
                                        <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format((($data->diskon/100)*$data->harga_akhir), 0,',','.') ?>
                                        </h5>
                                        <?php } elseif ($data->tipe_diskon == 'nominal') { ?>
                                        <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir-($data->diskon)), 0,',','.') ?>
                                        </h5>
                                        <?php } elseif ($data->tipe_diskon == 'no_diskon') { ?>
                                          <h5 class="card-title text-hidden">Rp.&nbsp;<?= number_format(($data->harga_akhir), 0,',','.') ?></h5>  
                                        <?php } ?>
                                        <?php if ($data->status_jual == 0) { ?>
                                        <h6 class="text-danger fw-bold text-hidden"><i class="fas fa-exclamation-circle me-1"></i>Stok Habis</h6>
                                        <?php } else { ?>
                                        <h6 class="text-success fw-bold text-hidden"><i class="fas fa-check-circle me-1"></i>Stok Tersedia</h6>
                                        <?php } ?>
                                    </div>
                                 </div>
                             </div>
                             <?php } ?>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Btn Back -->
      <div class="container mt-3">
        <a class="btn btn-custom shadow w-100 text-center p-3" href="<?= base_url() ?>"><i class="fas fa-arrow-left me-2"></i>Beranda</a>
      </div>
      <!-- Btn Back -->

 </main>