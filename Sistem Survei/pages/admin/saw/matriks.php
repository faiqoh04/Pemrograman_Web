<div class="wrapper">
    <?php include('./components/sidebar.php');?>
    <div class="main my-3 p-4 bg-body rounded shadow-sm">
        <main class="content px-4 py-5">
            <div class="container-fluid">
                <div class="mb-3">
                    <h5 class="fw-bold fs-4 my-3">Matriks</h5><br>
                    <div class="card-header">
                        <h5 class="card-title">Matriks Keputusan (X)</h5><br>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        Matriks keputusan yang merepresentasikan hubungan antara <b>4 alternatif (kategori)</b> dengan <b>5 kriteria</b> yang digunakan dalam analisis 
                        kepuasaan setiap stakeholder di Politeknik Negeri Malang
                        </p>
                        <br>    
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan='2'>Alternatif</th>
                                        <th colspan='6'>Kriteria</th>
                                    </tr>
                                    <tr>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>(A1) Kualitas Pendidikan</td>
                                        <td>4.04</td>
                                        <td>3.04</td>
                                        <td>3.33</td>
                                        <td>3.47</td>
                                        <td>6.94</td>
                                    </tr>
                                    <tr>
                                        <td>(A2) Fasilitas</td>
                                        <td>3.23</td>
                                        <td>3.47</td>
                                        <td>4.00</td>
                                        <td>3.50</td>
                                        <td>4.00</td>
                                    </tr>
                                    <tr>
                                        <td>(A3) Pelayanan</td>
                                        <td>3.88</td>
                                        <td>3.22</td>
                                        <td>3.35</td>
                                        <td>3.36</td>
                                        <td>3.26</td>
                                    </tr>
                                    <tr>
                                        <td>(A4) Lulusan</td>
                                        <td>3.33</td>
                                        <td>3.42</td>
                                        <td>4.00</td>
                                        <td>3.60</td>
                                        <td>3.33</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="card-header">
                        <h5 class="card-title">Matriks Ternormalisasi (R)</h5><br>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        Melakukan perhitungan normalisasi untuk mendapatkan matriks nilai ternormalisasi (R), dengan ketentuan: 
                        <br>
                        Untuk normalisasi nilai, jika faktor/attribute kriteria bertipe <b>cost</b> maka digunakan rumusan: Rij = ( min{Xij} / Xij)
                        <br>
                        Sedangkan jika faktor/attribute kriteria bertipe <b>benefit</b> maka digunakan rumusan: Rij = ( Xij/max{Xij} )
                        </p> 
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan='2'>Alternatif</th>
                                        <th colspan='6'>Kriteria</th>
                                    </tr>
                                    <tr>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A1 Kualitas Pendidikan</td>
                                        <td>1.00</td>
                                        <td>0.88</td>
                                        <td>0.83</td>
                                        <td>0.96</td>
                                        <td>1.00</td>
                                    </tr>
                                    <tr>
                                        <td>A2 Fasilitas</td>
                                        <td>0.80</td>
                                        <td>1.00</td>
                                        <td>1.00</td>
                                        <td>0.97</td>
                                        <td>0.58</td>
                                    </tr>
                                    <tr>
                                        <td>A3 Pelayanan</td>
                                        <td>0.96</td>
                                        <td>0.93</td>
                                        <td>0.84</td>
                                        <td>0.93</td>
                                        <td>0.47</td>
                                    </tr>
                                    <tr>
                                        <td>A4 Lulusan</td>
                                        <td>0.82</td>
                                        <td>0.98</td>
                                        <td>1.00</td>
                                        <td>1.00</td>
                                        <td>0.48</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
