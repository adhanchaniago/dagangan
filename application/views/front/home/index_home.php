<section class="boot-elemant-bg py-md-5 py-4" style="background-color:darkblue;height: 500px; background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url('assets/img/galery/bg.jpg');">
    <div class="container position-relative py-md-5 py-0">
        <div class="row">
            <div class="container" style="position: absolute;">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="text-right text-white">
                            <h1><b>Fosutech.</b></h1>
                            <p>Kami hadir dalam salah satu
                                bentuk partisipasi dan peduli
                                terhadap membangun
                                kesehatan masyarakat.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="elemant-bg-overlay black"></div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-md-5">
                <h1> fosutech </h1>
                <p>Kami hadir dalam salah satu
                    bentuk partisipasi dan peduli
                    terhadap membangun
                    kesehatan masyarakat,
                    fosutech sebagai reliable
                    solusi akan kebutuhan
                    material – material sanitasi
                    dan disinfectant yang dapat
                    melindungi kesehatan
                    masyarakat kita yang sedang
                    rentan terhadap penyebaran
                    Novel Corona virus / 2019 nCOV.</p>
                <p>
                    Produk-produk dari kami
                    fosutech merupakan bentuk
                    tanggung jawab dan
                    kontribusi kami dalam situasi
                    gencarnya penyebaran Novel
                    Corona virus / 2019 n-COV.
                    Kami segenap hati
                    dedikasikan semangat anak -
                    anak negeri membangun
                    tumpah darah tercinta
                    Negara Kesatuan Republik
                    Indonesia dalam setiap
                    produk kami.</p>
            </div>
            <div class="col-md-4 form-signup">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Register</h5>
                        <hr>

                        <?php
                        echo form_open('auth/register')
                        ?>
                        <div class="form-group">
                            <select class="form-control form-control-chosen" name="user_title" value="">
                                <option value=''>-- Pilih Title --</option>
                                <option value='Bapak'>Bapak</option>
                                <option value='Ibu'>Ibu</option>
                                <option value='Saudara'>Saudara</option>
                                <option value='Saudari'>Saudari</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" placeholder="Nama Lengkap" value="<?php echo set_value('user_name'); ?>">
                            <?php echo form_error('user_name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_phone" placeholder="Nomor Handphone" value="<?php echo set_value('user_phone'); ?>">
                            <?php echo form_error('user_phone', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>">
                            <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control" name="password1" placeholder="Password">
                                <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="password2" placeholder="Repeat Password">

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Register Account
                        </button>

                        <?php echo form_close() ?>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?php echo base_url('auth') ?>">Already have an account? Login!</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sec1" class="py-3 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-white">

                <h1 style="font-weight: 700"><b>FOSHAND</b> </h1>
                <h4><b>HAND SANITIZER</b></h4>
                <p>foshand - Hand Sanitizer membunuh kuman tanpa dibilas
                    dan meninggalkan kesegaran pada tangan dan tidak
                    lengket. Dapat dibawa selalu di dalam tas, digunakan
                    dimana saja dan kapan saja untuk menjaga keluarga anda.
                    Tersedia dalam keharuman dan kelembutan Aloe Vera.</p>
                <p>foshand -Hand Sanitizer tersedia berbagai ukuran : </p>
                <ul>
                    <li>Original 60 mL</li>
                    <li>Original 100 mL</li>
                    <li>Original 400 mL</li>
                    <li>Original 500 mL</li>
                    <li>Kemasan Refill 1000 mL</li>
                </ul>

            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo base_url('assets/img/product/hand-sanitizer.png'); ?>">
            </div>
        </div>
    </div>

</section>

<section id="sec2" class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo base_url('assets/img/product/alkohol.png'); ?>">
            </div>
            <div class="col-md-8">
                <h1 style="font-weight: 700"><b>Alcohol 70% </b> </h1>
                <h4><b>Hand Sanitizer</b></h4>
                <p>“Our bodies are our garden,
                    and our wills are our
                    gardeners”<br>
                    <i>William Shakespeare</i></p>
                <p>“believe that the greatest gift you
                    can give to your family and the
                    world is a healthy of you” <br>
                    <i>Joyce meyer
                    </i> </p>
                <p>Dapat
                    digunakan
                    sebagai
                    pertolongan
                    pertama,
                    medis dan
                    kebersihan
                    pribadi.</p>
                <ul>
                    <li>Kemasan :
                        1 Liter</li>

                </ul>

            </div>

        </div>
    </div>

</section>

<section id="sec3" class="py-3 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-white">

                <h1 style="font-weight: 700"><b>fosdes 1420</b> </h1>
                <h4><b>Disinfectant </b></h4>
                <ol>
                    <li>Kandungan Hidrogen
                        Peroxide (H2O2)
                        membunuh bakteri dan
                        virus secara cepat. </li>
                    <li>Food Grade </li>
                    <li>Tidak Corrosive</li>
                    <li>Eco Friendly </li>
                </ol>

            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="<?php echo base_url('assets/img/product/disinfectant.png'); ?>">
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container py-3">
        <div class="text-center">
            <div class="my-3">
                <h1>Healthcare Safety Product</h1>
                Baju Hazmat / (APD)
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Bahan Spundbond</h4>
                                Spesifikasi :
                                <ul>
                                    <li>Bahan Spundbond PolyPropylene 75 gsm</li>
                                    <li>Waterproof Fabric</li>
                                    <li>Menghindari debu dan droplet (percikan cairan)</li>
                                    <li>Lembut dan nyaman</li>
                                    <li>Sekali Pakai </li>
                                    <li>Ukuran all size </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/product/hazmat-putih.png'); ?>">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Bahan Parasut</h4>
                                Spesifikasi :
                                <ul>
                                    <li>Bahan Kain Parasut WP 75 gsm</li>
                                    <li>Anti air dan angin</li>
                                    <li>Menghindari debu dan droplet (percikan cairan)</li>
                                    <li>Lembut dan nyaman</li>
                                    <li>Bisa dicuci dan dipakai lagi </li>
                                    <li>Ukuran all size </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/product/hazmat-hijau.png'); ?>">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-3 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-white">

                <h1 style="font-weight: 700"><b>Masker Non Medical </b> </h1>
                <h4><b>Spesifikasi :</b></h4>


                <ul>
                    <li>Kemasan 12 Pieces per Lusin</li>
                    <li>Material bahan masker dari kain spandex tebal.</li>
                    <li>Bahan elastis, lembut dan nyaman</li>
                    <li>Multifungsi, bisa dicantolkan di telinga dan bisa
                        diikat dibelakang kepala (pakai hijab)</li>
                    <li>Design modis, jahitan rapi dan pas dengan ukuran
                        wajah.</li>
                    <li>Lulus tes tiup nyala api *.
                        (Supaya Droplet atau percikan cairan tidak bisa keluar
                        dari mulut kita atau masuk ke hidung kita).
                    </li>
                </ul>
                *Test ini dengan cara : saat kita pakai masker dan
                meniup nyala korek api didepan kita dan nyala api
                tidak mati.


            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="<?php echo base_url('assets/img/product/masker.png'); ?>">
            </div>
        </div>
    </div>

</section>