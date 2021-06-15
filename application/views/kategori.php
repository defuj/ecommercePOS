 <main id="search">
    <!-- Search -->
    <section id="add-on" class="d-md-none d-block mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <form method="get" action="<?= base_url('index.php/pages/kategori') ?>">
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
                                 <a href="<?= base_url('index.php/pages/kategori/notebook') ?>" class="list-group-item border-0">Notebook</a>
                                 <a href="<?= base_url('index.php/pages/kategori/perangkat pc') ?>" class="list-group-item border-0">Perangkat PC</a>
                                 <a href="<?= base_url('index.php/pages/kategori/pc') ?>" class="list-group-item border-0">PC</a>
                                 <a href="<?= base_url('index.php/pages/kategori/lcd') ?>" class="list-group-item border-0">LCD</a>
                                 <a href="<?= base_url('index.php/pages/kategori/aksesoris') ?>" class="list-group-item border-0">Aksesoris</a>
                                 <a href="<?= base_url('index.php/pages/kategori/ups') ?>" class="list-group-item border-0">UPS</a>
                                 <a href="<?= base_url('index.php/pages/kategori/printer') ?>" class="list-group-item border-0">Printer</a>
                                 <a href="<?= base_url('index.php/pages/kategori/storage') ?>" class="list-group-item border-0">Storage</a>
                                 <a href="<?= base_url('index.php/pages/kategori/networking') ?>" class="list-group-item border-0">Networking</a>
                                 <a href="<?= base_url('index.php/pages/kategori/proyektor') ?>" class="list-group-item border-0">Proyektor</a>
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
                         <div class="row ">

                             <?php foreach ($produk as $data) { ?>
                             <div class="col-md-3 col-sm-4 col-12 mb-4">
                                 <div class="card shadow">
                                    <a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>">
                                        <img src="<?= base_url('assets/img/'.$data->cover_img) ?>" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                         <h6 class="card-subtitle mb-2 nama-produk"><a href="<?= base_url('index.php/pages/detail/'.$data->kode_item) ?>" class="text-muted text-decoration-none"><?= $data->nama_item ?></a></h6>
                                         <h5 class="card-title">Rp.&nbsp;<?= number_format(($data->satuan_dasar), 0,',','.') ?></h5>
                                         <footer class="blockquote-footer mt-2">
                                          <span>Terjual <?= $data->status_jual ?></span>
                                         </footer>
                                    </div>
                                 </div>
                             </div>
                             <?php } ?>
                         </div>
                     </div>
                 </div>
                 <nav aria-label="Page navigation example">
                     <ul class="pagination justify-content-end">
                         <li class="page-item disabled">
                             <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                         </li>
                         <li class="page-item"><a class="page-link" href="#">1</a></li>
                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                         <li class="page-item">
                             <a class="page-link" href="#">Next</a>
                         </li>
                     </ul>
                 </nav>
             </div>
         </div>
     </div>

     <!-- Btn Back -->
      <div class="container mt-3">
        <a class="btn btn-custom shadow w-100 text-center p-3" href="<?= base_url('index.php/pages') ?>"><i class="fas fa-arrow-left me-2"></i>Beranda</a>
      </div>
      <!-- Btn Back -->

 </main>