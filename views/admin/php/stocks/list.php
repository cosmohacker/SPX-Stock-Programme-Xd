<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Ürün Ara</h3>
                </div>

                <input id="search-products" type="text" class="form-control" placeholder="Ürünle ilgili herhangi birşey">

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="id">Id</th>
                                <th scope="col" class="sort" data-sort="uid">Stok Kodu</th>
                                <th scope="col" class="sort" data-sort="barcode">Barkod</th>
                                <th scope="col" class="sort" data-sort="code">Ürün Kodu</th>
                                <th scope="col" class="sort" data-sort="name">Adı</th>
                                <th scope="col" class="sort" data-sort="photos">Fotoğraflar</th>
                                <th scope="col" class="sort" data-sort="in_stock">Stokta</th>
                                <th scope="col" class="sort" data-sort="damaged">Hatalı/Bozuk</th>
                                <th scope="col" class="sort" data-sort="sold">Satıldı</th>
                                <th scope="col" class="sort" data-sort="shipped">Gelecek</th>
                                <th scope="col" class="sort" data-sort="price">Fiyat</th>
                                <th scope="col" class="sort" data-sort="currency">Döviz</th>
                                <th scope="col" class="sort" data-sort="serial_number">Seri Numarası</th>
                                <th scope="col" class="sort" data-sort="weight">Ağırlık</th>
                                <th scope="col" class="sort" data-sort="dimension">Ebat</th>
                                <th scope="col" class="sort" data-sort="origin">Menşei</th>
                                <th scope="col" class="sort" data-sort="company">Firma</th>
                                <th scope="col" class="sort" data-sort="who_added">Ekleyen</th>
                                <th scope="col" class="sort" data-sort="who_updated">Güncelleyen</th>
                                <th scope="col" class="sort" data-sort="visibility">Görünülürlük</th>
                                <th scope="col" class="sort" data-sort="rating">Puan</th>
                                <th scope="col" class="sort" data-sort="created_at">Oluşturulma Tarihi</th>
                                <th scope="col" class="sort" data-sort="updated_at">Güncelleme Tarihi</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    Id
                                </th>
                                <td class="budget">
                                    Barcode
                                </td>
                                <td>
                                    Ürün Kodu
                                </td>
                                <td>
                                    Ürün Kodu
                                </td>
                                <td>
                                    Name
                                </td>
                                <td class="budget">
                                    FOTOĞRAFLAR
                                </td>
                                <td class="budget">
                                    STOKTA
                                </td>
                                <td class="budget">
                                    HATALI/BOZUK
                                </td>
                                <td class="budget">
                                    SATILDI
                                </td>
                                <td class="budget">
                                    Gelecek
                                </td>
                                <td class="budget">
                                    Fiyat
                                </td>
                                <td class="budget">
                                    Döviz
                                </td>
                                <td class="budget">
                                    Seri Numarası
                                </td>
                                <td class="budget">
                                    Ağırlık
                                </td>
                                <td class="budget">
                                    Ebat
                                </td>
                                <td class="budget">
                                    Menşei
                                </td>
                                <td class="budget">
                                    Firma
                                </td>
                                <td class="budget">
                                    <div class="avatar-group" style="justify-content: center;display: flex;">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../../../contents/admin/assets/img/theme/team-1.jpg">
                                        </a>
                                    </div>
                                </td>
                                <td class="budget">
                                    <div class="avatar-group" style="justify-content: center;display: flex;">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../../../contents/admin/assets/img/theme/team-1.jpg">
                                        </a>
                                    </div>
                                </td>
                                <td class="budget">
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="budget">
                                    Created At
                                </td>
                                <td class="budget">
                                    Updated At
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>