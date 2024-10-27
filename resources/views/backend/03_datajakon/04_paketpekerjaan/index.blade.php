@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content  pl-0">

                    
                <div class="row mb-0 ">
                    <div class="font-bold col-sm-8"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                        
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    margin-top: none;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 200vh;
    margin-left: none;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> Kementrian Pekerjaan Umum Dan Penataan Ruang </span></h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">
<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
            .badge {
                background: linear-gradient(to right, green, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 0px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background: white;
                color: black;
            }

            .badge-plus {
            background: linear-gradient(to right, navy, black);
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            display: inline-block;
            font-size: 12px;
            text-align: center;
            transition: background-color 0.3s, color 0.3s;
            position: absolute; /* Tambahkan ini */
            top: 20px; /* Atur jarak dari atas jika diperlukan */
            right: 20px; /* Atur jarak dari kanan jika diperlukan */
        }

        .badge-plus:hover {
            background: white;
            color: black;
        }

            .badge-menu1 {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 8px 15px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
                margin-left: 0px;
            }
            .badge-menu1:hover {
                background: white;
                color: black;
            }
        </style>
        <!-- <div class="badge"><i class="fas fa-edit me-2"></i>Create New </div></label> -->
        <button id="previewBtn" class="badge" style="border: none; font-size:15px; cursor:pointer">
            <i class="fas fa-tasks" style="margin-right: 5px;"></i> Daftar Paket Pekerjaan
        </button>

        <a href="/settingmetodepengadaan" style="background: inherit">
            <button class="badge" style="border: none; font-size: 14px; cursor: pointer;">
                <i class="fas fa-handshake mr-2"></i>Metode Pengadaan
            </button>
        </a>
        
        
        
        <a href="/paketpekerjaancreate" style="background: inherit">
            <button class="badge-plus" style="border: none; font-size:15px; cursor:pointer">
                <i class="fas fa-plus-circle" style="margin-right: 5px;"></i>Create Paket Pekerjaan
            </button>
        </a>
        
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->

    {{-- <select id="entries" onchange="showEntries()">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        </select> --}}
</div>
</div>


{{-- ================ --}}
@include('tambahan.alert')
{{-- ================ --}}



<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
        
                th, td {
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    color: black;
                    font-size: 12px;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
        
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                    font-size: 12px;
                }
        
                th {
                    /* background-color: #4CAF50; */
                    /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
                    background-color:  #FFCB0F;
                    color: black;
                    font-size: 14px;
                }
            </style>
             <table>
                <thead>
                    <tr>
                        <th style="width:5%; font-size:12px;">NO</th>
                        <th style="width:350px; font-size:12px;">INSTANSI</th>
                        <th style="width:150px; font-size:12px;">JUMLAH PAGU</th>
                        <th style="width:100px; font-size:12px;">METODE PENGADAAN</th>
                        {{-- <th>Pekerjaan</th> --}}
                        {{-- <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th> --}}
                        <th style="width:100px; font-size:12px;">PROGRESS FISIK</th>
                        <th style="width:75px; font-size:12px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>

                    {{-- ============================================ --}}
                    @php
                $start = ($data->currentPage() - 1) * $data->perPage() + 1;
                    @endphp

                    @foreach($data as $item )
                    
                    <tr>
                        <td style="font-size: 12px;">{{ $loop->iteration + $start - 1 }}</td>
                        <td style="font-size: 12px; text-align:left;">{{ $item->instansi}}</td>
                        
                        <style>
                            .badge-green {
                                display: flex;
                                align-items: center; /* Vertikal align untuk teks */
                                background-color: #28a745; /* Warna hijau */
                                color: #fff; /* Teks putih */
                                padding: 5px 10px; /* Spasi di sekitar teks */
                                border-radius: 5px; /* Sudut badge melengkung */
                                font-size: 12px; /* Ukuran font */
                                font-weight: bold; /* Menebalkan font */
                                text-align: right; /* Teks rata kanan */
                                justify-content: space-between; /* Membagi ruang antara simbol dan jumlah */
                            }
                            .badge-orange {
                                display: flex;
                                align-items: center; /* Vertikal align untuk teks */
                                background-color: #28a745; /* Warna hijau */
                                color: #fff; /* Teks putih */
                                padding: 5px 10px; /* Spasi di sekitar teks */
                                border-radius: 5px; /* Sudut badge melengkung */
                                font-size: 12px; /* Ukuran font */
                                font-weight: bold; /* Menebalkan font */
                                text-align: right; /* Teks rata kanan */
                                justify-content: space-between; /* Membagi ruang antara simbol dan jumlah */
                            }
                            .badge-green:hover{
                                background: white;
                                color: black;
                            }
                        
                            .badge-orange:hover{
                                background: white;
                                color: black;
                            }
                        
                            .currency-symbol {
                                margin-right: 5px; /* Jarak antara simbol dan jumlah */
                            }
                        
                            .currency-cell {
                                text-align: right; /* Sel tabel rata kanan */
                            }
                            .progress-container {
        width: 100%; /* Mengisi lebar elemen induknya */
        background-color: #e9ecef; /* Warna latar belakang progress bar */
        border-radius: 5px; /* Sudut bulat untuk progress bar */
        overflow: hidden; /* Menghindari konten meluap */
        height: 20px; /* Tinggi progress bar */
        position: relative; /* Memastikan progress bar dan teks berada dalam konteks yang sama */
    }

    .progress-bar {
        height: 100%; /* Mengisi tinggi dari container */
        background-color: navy; /* Warna bar (hijau untuk contoh ini) */
        width: 0%; /* Lebar awal dari bar, diatur melalui inline style */
        text-align: center; /* Memusatkan teks di dalam bar */
        color: #fff; /* Warna teks */
        line-height: 20px; /* Memastikan teks berada di tengah bar */
        position: absolute; /* Memastikan bar berada di dalam container */
        top: 0;
        left: 0;
    }
                        </style>
                        
                                <td class="currency-cell">
                                    <span class="badge-green">
                                        <span class="currency-symbol">Rp</span>
                                        <span class="currency-amount">{{ number_format($item->jumlah_pagu, 2, ',', '.') }}</span>
                                    </span>
                                </td>
                                <style>
                                    .badge-orange {
                                        background-color: #fd7e14; /* Oranye */
                                        color: #fff; /* Warna teks putih */
                                        padding: 10px; /* Padding yang lebih besar untuk membuat badge seperti tombol */
                                        border-radius: 5px; /* Radius sudut yang lebih besar untuk tampilan tombol */
                                        display: block; /* Memastikan badge mengambil lebar penuh dari elemen induknya */
                                        width: 100%; /* Memastikan badge mengisi lebar penuh dari kolomnya */
                                        text-align: center; /* Memusatkan teks di dalam badge */
                                        box-sizing: border-box; /* Menyertakan padding dalam perhitungan lebar total */
                                        font-size: 12px; /* Ukuran font sesuai dengan yang diinginkan */
                                        border: none; /* Menghilangkan border jika ada */
                                        margin: 0; /* Menghapus margin jika ada */
                                    }
                                </style>                                
                                                    
                                <td style="font-size: 12px; text-align:left;">
                                    <span class="badge-orange">{{ $item->metodepengadaan->metode }}</span>
                                </td>

                        {{-- <td style="font-size: 12px; text-align:left;">{{ $item->pekerjaan}}</td> --}}
                        {{-- <td style="font-size: 12px; text-align:left;">{{ $item->tanggal_mulai}}</td>
                        <td style="font-size: 12px; text-align:left;">{{ $item->tanggal_selesai}}</td> --}}
                        <td style="font-size: 12px; text-align:left;">
                            @php
                                $progress = $item->progress_fisik; // Ambil nilai progress dari data
                                $progress = min(max($progress, 0), 100); // Pastikan nilai berada dalam rentang 0-100
                            @endphp
                            <div class="progress-container">
                                <div class="progress-bar" style="width: {{ $progress }}%;">
                                    {{ $progress }}%
                                </div>
                            </div>
                        </td>
                        
                    
                        {{-- <td style="font-size: 12px; text-align: center; text-align:uppercase;">
                            @if($item->status === 'AKTIF')
                                <button style="background-color: green; color: white; border: none; padding: 1px 3px; border-radius: 2px; font-size: 8px;">
                                    AKTIF
                                </button>
                            @else
                                <button style="background-color: red; color: white; border: none; padding: 1px 3px; border-radius: 2px; font-size: 8px;">
                                    TIDAK AKTIF
                                </button>
                            @endif
                        </td> --}}
                        
                        
                          
                        <td>
                            
                        <style>
                                                /* Container for the buttons */
                    .button-container {
                        display: flex;
                        gap: 10px; /* Space between icons */
                        justify-content: center; /* Center the icons horizontally */
                    }

                    /* Style for the individual buttons */
                    .iconhover {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        width: 25px; /* Adjust width as needed */
                        height: 25px; /* Adjust height as needed */
                        background: navy, white; /* Yellow background */
                        color: white; /* Text color */
                        border: none;
                        border-radius: 50%;
                        text-decoration: none;
                        padding: 3px 3px;
                        font-size: 15px; /* Adjust font size as needed */
                        transition: background 0.3s, color 0.3s;
                        cursor: pointer;
                    }

                    .iconhover:hover {
                        background: white; /* White background on hover */
                        color: black; /* Black text color on hover */
                    }

                    .iconhover i {
                        margin: 0;
                    }
                    
                        </style>

                        <div class="button-container">
                        <a href="/paketpekerjaan/{{$item->instansi}}" class="iconhover" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                                <a href="/paketpekerjaan/update/{{$item->instansi}}" class="iconhover" title="Update">
                                    <i class="fas fa-edit"></i>
                                </a>


                                <a href="#" class="iconhover" title="Delete" data-toggle="modal" data-target="#deleteModal" onclick="setDeleteAction('{{ route('delete.paketpekerjaan', $item->instansi) }}')">
                                    <i class="fas fa-trash"></i>
                                </a>
                                
        
                                {{-- ================= FORM DELETE =================== --}}
                    <!-- Modal HTML -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="container" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                                        <img src="/assets/icon/sipjakikbb.png" alt="" style="width:50px; height:50px; margin-bottom: 10px;">
                                        {{-- <img src="/assets/icon/pupr.png" alt="" style="width:10px; height:10px; margin-bottom: 10px;"> --}}
                                        <h5 class="modal-title" id="deleteModalLabel" style="margin: 0;">Konfirmasi Delete</h5>
                                    </div>
                                
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Anda Yakin Ingin Menghapus Data ini?</p>
                                    <form id="deleteForm" action="" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <script>
                        function setDeleteAction(actionUrl) {
                          document.getElementById('deleteForm').action = actionUrl;
                        }
                      </script>
                      
        
                                {{-- ================= FORM DELETE =================== --}}
                                    
                            </div>

                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    @endforeach
                    {{-- ============================================ --}}
                    
                    
                </tbody>
            </table>


        </div>

        <div class="pagination-container" style="margin-top: 75px; margin-bottom:75px; display: flex; flex-direction: column; align-items: center;">
                <div class="pagination-info mb-2" style="margin-bottom: 10px; color:orange; font-weight: 500;">
                    Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
                </div>
                    <ul class="pagination" style="display: flex; padding-left: 0; list-style: none;">
                        <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                            <a class="page-link" href="{{ $data->previousPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 20px 0px 0px 20px;"><i class="fas fa-arrow-left" style="margin-right:10px;"></i>Previous</a>
                        </li>

                        @foreach ($data->getUrlRange($data->currentPage() - 0, $data->currentPage() + 2) as $page => $url)
                            <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                                <a class="page-link" href="{{ $url }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; ">{{ $page }}</a>
                            </li>
                        @endforeach

                        <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                            <a class="page-link" href="{{ $data->nextPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: white; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 0px 20px 20px 0px;">Next <i class="fas fa-arrow-right" style="margin-left:10px;"></i></a>
                        </li>
                    </ul>

            </div>
            {{-- @include('backend.00_dashboard.part.menufooter') --}}
        </div>
    </div>
    
                <hr style="border:0; height:5px; background-color:navy; margin: 20px 0px;">
                @include('backend.00_dashboard.part.menufooter')
                    
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    