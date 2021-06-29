

    <!-- Main Content   -->
    <main>
        <div class="container">
            <div class="card shadow ">
                <div class="card-header bg-custom text-white">Order Detail</div>
                <!--  Store Information -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex p-2 bd-highlight bg-light">Order &nbsp; #12223131</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama Toko</td>
                                    <td>:</td>
                                    <td>cep Imam</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Transaksi</td>
                                    <td>:</td>
                                    <td>12 juni 2002</td>
                                </tr>
                                <tr>
                                    <td>Kode Invoice</td>
                                    <td>:</td>
                                    <td>4354xxx</td>
                                </tr>
                                <tr>
                                    <td>Alamat Toko</td>
                                    <td>:</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur esse qui
                                        modi nisi voluptatum sapiente provident incidunt fugiat ea. Quasi quibusdam at
                                        aliquid neque ipsum aperiam dicta expedita ex illo!</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Store Information -->

                <!-- Customer Information -->
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex p-2 bd-highlight bg-light">Informasi Pembeli</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>cep Imam</td>
                                </tr>
                                <tr>
                                    <td>No Telp.</td>
                                    <td>:</td>
                                    <td>000xxx</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur essequi
                                        modi nisi voluptatum sapiente provident incidunt fugiat ea. Quasi quibusdam at
                                        aliquid neque ipsum aperiam dicta expedita ex illo!</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Customer Information -->

                <!-- List Product -->
                <hr>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex p-2 bd-highlight bg-light">Produk</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-sm-12 mt-3">
                            <img src="<?= base_url($direktori->produk_direktori.'card-1.jpg') ?>" class="img-fluid rounded">
                        </div>
                        <div class="col-md-3 col-sm-12 mt-3">
                            <p class="text-muted">Nama Produk</p>
                            <h6 class="card-subtitle nama-produk">Headset</h6>
                        </div>
                        <div class="col-md-3 col-sm-12 mt-3">
                            <p class="text-muted">Harga</p>
                            <p class="card-text">Rp. 483400</p>
                        </div>
                        <div class="col-md-2 col-sm-12 mt-3">
                            <p class="text-muted">Jumlah</p>
                            <p class="card-text ">2</p>
                        </div>
                        <div class="col-md-2 col-sm-12 mt-3">
                            <p class="text-muted">Sub Total</p>
                            <p class="card-text ">Rp. 57400</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row justify-content-end">
                        <div class="col-md-2 col-sm-12">
                            <p class="text-muted">Total Jumlah</p>
                            <p class="card-text ">2</p>
                        </div>
                        <div class="col-md-2 col-sm-12 mt-md-0 mt-3">
                            <p class="text-muted">Total Harga</p>
                            <p class="card-text ">Rp. 57400</p>
                        </div>
                    </div>
                </div>
                <!-- End List Product -->
            </div>
        </div>
    </main>
    <!-- End Main Content   -->

    <!-- Btn Back -->
    <div class="container mt-3">
      <a class="btn btn-custom shadow w-100 text-center" href="<?= base_url('index.php/user/pesanan') ?>"><i class="fas fa-arrow-left m-3"></i>Kembali</a>
    </div>
    <!-- Btn Back -->