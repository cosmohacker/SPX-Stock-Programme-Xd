<div class="p-4 bg-secondary pb-6" id="products-add" style="display:none;">
    <div class="col-lg-12 col-12">
        <div class="row">
            <div class="col">
                <div class="card" style="padding: 20px;">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Ürün Ekle</h3>
                        <hr>
                    </div>
                    <form>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Ürün Adı</label>
                                <input class="form-control" type="text" placeholder="Ürün Adı" id="name">
                            </div>
                            <div class="col-md-6"> <label for="username" class="form-control-label">Ürün Linki</label>
                                <input class="form-control" type="text" placeholder="Ürün Linki" id="product_link">
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Üretici Linki</label>
                                <input class="form-control" type="text" placeholder="Üretici Linki" id="company_link">
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Barkod</label>
                                <input class="form-control" type="text" placeholder="Barkod" id="barcode">
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Ürün Kodu</label>
                                <input class="form-control" type="text" placeholder="Ürün Kodu" id="product_code">
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Stokta</label>
                                <input class="form-control" type="number" placeholder="Stokta" id="in_stock">
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Hatalı/Bozuk</label>
                                <input class="form-control" type="number" placeholder="Hatalı/Bozuk" id="damaged">
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Satıldı</label>
                                <input class="form-control" type="number" placeholder="Satıldı" id="sold">
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Gelecek</label>
                                <input class="form-control" type="number" placeholder="Gelecek" id="in_shipping">
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Fiyat</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Fiyat" id="price">
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Döviz</label>
                                <input class="form-control" type="text" placeholder="Döviz" id="currency">
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-control-label">Seri Numarası</label>
                                <input class="form-control" type="email" placeholder="Seri Numarası" id="serial_number">
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Ağırlık</label>
                                <input class="form-control" type="text" placeholder="Ağırlık" id="weight">
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Ebat</label>
                                <input class="form-control" type="text" placeholder="Ebat" id="dimension">
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Menşei</label>
                                <input class="form-control" type="text" placeholder="Menşei" id="origin">
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="form-control-label">Üretici</label>
                                <input class="form-control" type="text" placeholder="Üretici" id="company">
                            </div>
                        </div>

                        <div class="form-group" style="display: flex;">
                        <div class="col-md-6">
                            <label for="username" class="form-control-label">Görünürlük</label>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Satılıyor</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Satılmıyor</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Tükendi</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Gelecek</label>
                            </div>
                            </div>

                        <div class="col-md-6">
                            <label for="username" class="form-control-label">Puan</label>
                            <br>
                            <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="form-control-label">Açıklama</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="username" class="form-control-label">Fotoğraflar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                <label class="custom-file-label" for="customFileLang">Select file</label>
                            </div>
                        </div>

                        <div class="form-group" style="justify-content: center; display: flex;">
                            <button type="button" class="btn btn-outline-success">Kaydet</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>