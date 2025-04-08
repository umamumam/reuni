<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reuni Halal Bil Halal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&family=Rubik:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('Mailler/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Mailler/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Mailler/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('Mailler/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('Mailler/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid header position-relative overflow-hidden p-0">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="display-6 text-primary m-0"><i class="fas fa-sitemap me-3"></i>Silsilah</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/keluarga/create" class="nav-item nav-link">Keluarga</a>
                    <a href="/silsilah" class="nav-item nav-link">Silsilah</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="pricing.html" class="dropdown-item">Pricing</a>
                            <a href="blog.html" class="dropdown-item">Blog</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> --}}
                    <a href="/galeritahun" class="nav-item nav-link">Galeri</a>
                </div>
                <a href="/login"
                    class="btn btn-light border border-primary rounded-pill text-primary py-2 px-4 me-4">Log
                    In</a>
                <a href="/register" class="btn btn-primary rounded-pill text-white py-2 px-4">Sign Up</a>
            </div>
        </nav>


        <!-- Hero Header Start -->
        <div class="hero-header overflow-hidden px-5">
            <div class="rotate-img">
                <img src="{{ asset('Mailler/img/sty-1.png') }}" class="img-fluid w-100" alt="">
                <div class="rotate-sty-2"></div>
            </div>
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <h1 class="display-4 text-dark mb-4 wow fadeInUp" data-wow-delay="0.3s">Keluarga Besar Mbah Buyut
                        Abd. Jalil - Karmiji</h1>
                    <p class="fs-4 mb-4 wow fadeInUp" data-wow-delay="0.5s">"Mengikat silaturahmi dan menjaga warisan
                        keluarga dalam kebersamaan yang hangat di momen Halal Bihalal.".</p>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.7s">Get
                        Started</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                    <img src="{{ asset('gb.png') }}" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
        </div>
        <!-- Hero Header End -->
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5" style="margin-top: 6rem;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="RotateMoveLeft">
                        <img src="{{ asset('id.png') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="mb-1 text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">Keluarga Besar Mbah Buyut Abd. Jalil - Karmiji</h1>
                    <p class="mb-4">Website ini dibangun sebagai wadah silaturahmi dan pelestarian silsilah keluarga
                        besar Mbah Buyut Abd. Jalil & Karmiji.
                    </p>
                    <p>
                        Di tengah perkembangan zaman, kami ingin menghadirkan ruang bersama yang mempererat tali
                        kekeluargaan, mengenang sejarah, dan mengabadikan warisan leluhur kita.
                    </p>
                    <p>
                        Melalui situs ini, mari kita saling mengenal lebih dekat, menyambung tali persaudaraan, serta
                        menjaga nilai-nilai luhur yang telah diwariskan turun-temurun.
                    </p>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5">About More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    {{-- <div class="container-fluid feature overflow-hidden py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Feature</h4>
                <h1 class="display-5 mb-4">Informasi Halal Bil Halal</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet
                    doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores
                    vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="row g-4 justify-content-center text-center mb-5">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-envelope fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Email Marketing <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-mail-bulk fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Email Builder <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center rounded p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-sitemap fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Customer Builder <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="text-center rounded p-4">
                        <div class="d-inline-block rounded bg-light p-4 mb-4"><i
                                class="fas fa-tasks fa-5x text-secondary"></i></div>
                        <div class="feature-content">
                            <a href="#" class="h4">Campaign Manager <i class="fa fa-long-arrow-alt-right"></i></a>
                            <p class="mt-4 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.consectetur
                                adipisicing elit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="my-3">
                        <a href="#" class="btn btn-primary d-inline rounded-pill px-5 py-3">More Info</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 pt-5" style="margin-top: 6rem;">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="feature-img RotateMoveLeft h-100" style="object-fit: cover;">
                        <img src="{{ asset('Mailler/img/features-1.png') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                    <h4 class="text-primary">Fearutes</h4>
                    <h1 class="display-5 mb-4">Push Your Visitors Into Happy Customers</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, suscipit
                        itaque quaerat dicta porro illum, autem, molestias ut animi ab aspernatur dolorum officia nam
                        dolore. Voluptatibus aliquam earum labore atque.
                    </p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="fas fa-newspaper fa-4x text-secondary"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h2 class="mb-0 fw-bold">285</h2>
                                    <small class="text-dark">Created Projects</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex">
                                <i class="fas fa-users fa-4x text-secondary"></i>
                                <div class="d-flex flex-column ms-3">
                                    <h2 class="mb-0 fw-bold">6560</h2>
                                    <small class="text-dark">Happy Clients</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4">
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Feature End -->


    <!-- FAQ Start -->
    @php
        use App\Models\HalalBilHalal;
        $dataHBH = HalalBilHalal::orderByDesc('tanggal')->take(3)->get(); // ambil 3 data terbaru
    @endphp

    <div class="container-fluid FAQ bg-light overflow-hidden py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-4">Informasi Halal Bil Halal</h1>
                    <div class="accordion" id="accordionExample">
                        @foreach ($dataHBH as $index => $item)
                        <div class="accordion-item border-0 mb-4">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }} rounded-top" type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $index }}"
                                    aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse{{ $index }}">
                                    Halal Bihalal ke-{{ $item->halal_bihalal_ke }} - {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $index }}"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body my-2">
                                    <p><strong>Tempat:</strong> {{ $item->tempat }}</p>
                                    @if($item->mc)<p><strong>MC:</strong> {{ $item->mc }}</p>@endif
                                    @if($item->qori)<p><strong>Qori:</strong> {{ $item->qori }}</p>@endif
                                    @if($item->tahlil)<p><strong>Tahlil:</strong> {{ $item->tahlil }}</p>@endif
                                    @if($item->sambutan_panitia)<p><strong>Sambutan Panitia:</strong> {{ $item->sambutan_panitia }}</p>@endif
                                    @if($item->sambutan_tuan_rumah)<p><strong>Sambutan Tuan Rumah:</strong> {{ $item->sambutan_tuan_rumah }}</p>@endif
                                    @if($item->sambutan_bendahara)<p><strong>Sambutan Bendahara:</strong> {{ $item->sambutan_bendahara }}</p>@endif
                                    @if($item->mauidhoh)<p><strong>Mauidhoh:</strong> {{ $item->mauidhoh }}</p>@endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="FAQ-img RotateMoveRight rounded">
                        <img src="{{ asset('hbh.png') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->


    <!-- Pricing Start -->
    @php
        use App\Models\Galeri;
        $selectedYear = request('tahun');
        $tahunList = Galeri::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');
        $galeris = Galeri::when($selectedYear, fn($q) => $q->where('tahun', $selectedYear))->latest()->get();
    @endphp
    <div class="container-fluid price py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Galeri</h4>
                <h1 class="display-5 mb-4">Foto Bersama Keluarga</h1>
                <p class="mb-0">
                    Setiap momen yang terabadikan dalam foto adalah kenangan indah yang mempererat silaturahmi dan cinta di antara keluarga besar. Tawa, cerita, dan kebersamaan yang tercipta akan selalu menjadi bagian berharga dari perjalanan kita bersama.
                </p>
            </div>

            <!-- Filter Tahun -->
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 text-center">
                    <form method="GET">
                        <div class="input-group">
                            <label class="input-group-text" for="tahun">Filter Tahun</label>
                            <select name="tahun" id="tahun" class="form-select">
                            {{-- <select name="tahun" id="tahun" class="form-select" onchange="this.form.submit()"> --}}
                                <option value="">Semua Tahun</option>
                                @foreach ($tahunList as $tahun)
                                    <option value="{{ $tahun }}" {{ $tahun == $selectedYear ? 'selected' : '' }}>
                                        {{ $tahun }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Galeri -->
            <div id="galeri" class="row g-5 justify-content-center">
                @forelse ($galeris as $galeri)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.{{ $loop->index + 1 }}s">
                        <div class="card bg-light rounded shadow-sm h-100">
                            <img src="{{ asset('storage/' . $galeri->foto) }}" class="card-img-top" alt="Foto Keluarga">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary">Tahun {{ $galeri->tahun }}</h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-muted">Tidak ada foto untuk tahun tersebut.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#tahun').on('change', function () {
            const tahun = $(this).val();

            $.get('{{ route('galeri.filter') }}', { tahun: tahun }, function (data) {
                $('#galeri').html(data.html);
            });
        });
    </script>

    <!-- Pricing End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Our Blog</h4>
                <h1 class="display-5 mb-4">Join Us For New Blog</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet
                    doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores
                    vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('Mailler/img/blog-1.png') }}" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('Mailler/img/blog-2.png') }}" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('Mailler/img/blog-3.png') }}" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('Mailler/img/blog-4.png') }}" class="img-fluid w-100" alt="">
                            <div class="blog-info">
                                <span><i class="fa fa-clock"></i> Dec 01.2024</span>
                                <div class="d-flex">
                                    <span class="me-3"> 3 <i class="fa fa-heart"></i></span>
                                    <a href="#" class="text-white">0 <i class="fa fa-comment"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content text-dark border p-4 ">
                            <h5 class="mb-4">Dolor, sit amet consectetur adipisicing</h5>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip.
                            </p>
                            <a class="btn btn-light rounded-pill py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-5 mb-4">What Our Client Say About Us</h1>
                <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet
                    doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores
                    vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
                </p>
            </div>
            <div class="testimonial-carousel owl-carousel wow zoomInDown" data-wow-delay="0.2s">
                <div class="testimonial-item"
                    data-dot="<img class='img-fluid' src='{{ asset('Mailler/img/testimonial-img-1.jpg') }}' alt=''>">
                    <div class="testimonial-inner text-center p-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="testimonial-inner-img border border-primary border-3 me-4"
                                style="width: 100px; height: 100px; border-radius: 50%;">
                                <img src="{{ asset('Mailler/img/testimonial-img-1.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-0">New York, USA</p>
                            </div>
                        </div>
                        <p class="fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo
                            facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed
                            voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                        </p>
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item"
                    data-dot="<img class='img-fluid' src='{{ asset('Mailler/img/testimonial-img-2.jpg') }}' alt=''>">
                    <div class="testimonial-inner text-center p-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="testimonial-inner-img border border-primary border-3 me-4"
                                style="width: 100px; height: 100px; border-radius: 50%;">
                                <img src="{{ asset('Mailler/img/testimonial-img-2.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-0">New York, USA</p>
                            </div>
                        </div>
                        <p class="fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo
                            facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed
                            voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                        </p>
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item"
                    data-dot="<img class='img-fluid' src='{{ asset('Mailler/img/testimonial-img-3.jpg') }}' alt=''>">
                    <div class="testimonial-inner text-center p-5">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <div class="testimonial-inner-img border border-primary border-3 me-4"
                                style="width: 100px; height: 100px; border-radius: 50%;">
                                <img src="{{ asset('Mailler/img/testimonial-img-3.jpg') }}"
                                    class="img-fluid rounded-circle" alt="">
                            </div>
                            <div>
                                <h5 class="mb-2">John Abraham</h5>
                                <p class="mb-0">New York, USA</p>
                            </div>
                        </div>
                        <p class="fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo
                            facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed
                            voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                        </p>
                        <div class="text-center">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-dark mb-4">Company</h4>
                        <a href=""> Why Mailler?</a>
                        <a href=""> Our Features</a>
                        <a href=""> Our Portfolio</a>
                        <a href=""> About Us</a>
                        <a href=""> Our Blog & News</a>
                        <a href=""> Get In Touch</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-dark">Quick Links</h4>
                        <a href=""> About Us</a>
                        <a href=""> Contact Us</a>
                        <a href=""> Privacy Policy</a>
                        <a href=""> Terms & Conditions</a>
                        <a href=""> Our Blog & News</a>
                        <a href=""> Our Team</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-dark">Services</h4>
                        <a href=""> All Services</a>
                        <a href=""> Promotional Emails</a>
                        <a href=""> Product Updates</a>
                        <a href=""> Email Marketing</a>
                        <a href=""> Acquistion Emails</a>
                        <a href=""> Retention Emails</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-dark">Contact Info</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                        <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-secondary me-2"></i>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn-square btn btn-primary rounded-circle mx-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Silsilah Keluarga</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="border-bottom" href="https://themewagon.com">Umam</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Libraries Scripts -->
    <script src="{{ asset('Mailler/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('Mailler/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('Mailler/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('Mailler/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('Mailler/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Mailler/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('Mailler/js/main.js') }}"></script>

</body>

</html>
