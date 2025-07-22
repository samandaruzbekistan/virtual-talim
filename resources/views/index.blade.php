@include('layouts.header')

        <div class="hero-slide owl-carousel">
            <div class="intro-section" style="background-image: url('images/hero_1.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                            <h2 class="text-white">BO'LAJAK INFORMATIKA O'QITUVCHILARINING KASBIY KOMPETENTSIYALARINI
                                VIRTUAL TA'LIM ASOSIDA SHAKLLANTIRISH METODIKASINI TAKOMILLASHTIRISH</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div></div>

        <div class="site-section">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-4 mb-5">
                        <h2 class="section-title-underline mb-5">
                            <span>📚 Nega bu ilmiy loyiha muhim?</span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

                        <div class="feature-1 border">
                            <div class="icon-wrapper bg-primary">
                                <span class="flaticon-mortarboard text-white"></span>
                            </div>
                            <div class="feature-1-content">
                                <h2>📌 Zamonaviy yondashuvlar</h2>
                                <p>Virtual ta'lim vositalari orqali interaktiv, moslashuvchan va samarali o'qitish
                                    uslublari ishlab chiqiladi.</p>
                                <p><a href="#" class="btn btn-primary px-4 rounded-0">Batafsil</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="feature-1 border">
                            <div class="icon-wrapper bg-primary">
                                <span class="flaticon-school-material text-white"></span>
                            </div>
                            <div class="feature-1-content">
                                <h2>📌 Ishonchli metodika</h2>
                                <p>O'qituvchi kompetensiyasini shakllantirishga yo'naltirilgan ilmiy asoslangan metodik
                                    tavsiyalar.</p>
                                <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="feature-1 border">
                            <div class="icon-wrapper bg-primary">
                                <span class="flaticon-library text-white"></span>
                            </div>
                            <div class="feature-1-content">
                                <h2>📌 Amaliy yo'nalish</h2>
                                <p>Informatika fanini interaktiv va hayotga yaqinlashtiruvchi dars modellarini joriy
                                    etish.</p>
                                <p><a href="#" class="btn btn-primary px-4 rounded-0">Batafsil</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">


                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-6 mb-5">
                        <h2 class="section-title-underline mb-3">
                            <span>Bo'limlar va boblar</span>
                        </h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="owl-slide-3 owl-carousel">
                            @foreach ($sections as $section)
                                <div class="course-1-item">
                                    <figure class="thumnail">
                                        <a href="{{ route('show_section', $section->id) }}"><img
                                                src="{{ asset('storage/' . $section->image) }}" alt="Image"
                                                class="img-fluid"></a>
                                        <div class="price">$0</div>
                                        <div class="category">
                                            <h3>{{ $section->title }}</h3>
                                        </div>
                                    </figure>
                                    <div class="course-1-content pb-4">
                                        <h2>{{ $section->name }}</h2>
                                        <div class="rating text-center mb-3">
                                            <span class="icon-star2 text-warning"></span>
                                            <span class="icon-star2 text-warning"></span>
                                            <span class="icon-star2 text-warning"></span>
                                            <span class="icon-star2 text-warning"></span>
                                            <span class="icon-star2 text-warning"></span>
                                        </div>
                                        <p><a href="{{ route('show_section', $section->id) }}" class="btn btn-primary rounded-0 px-4">BOB ga kirish</a></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>




        <div class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="post-entry-big">
                            <img src="images/author.jpg" alt="Image" class="img-fluid">
                            <h3 class="text-white text-center"></h3>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h2 class="section-title-underline style-2">
                            <span>Mo'minov Elyor Abdualiyevich</span>
                        </h2>
                        <p class="lead ">Ushbu platforma <span class="text-bold">Mo'minov Elyor Abdualiyevich</span>
                            tomonidan amalga oshirilayotgan ilmiy tadqiqot asosida ishlab chiqilgan. Loyihada
                            informatika fanini o'qitish samaradorligini oshirish, zamonaviy virtual ta'lim vositalarini
                            joriy qilish, o'qituvchilarning kasbiy kompetensiyalarini shakllantirishga yo'naltirilgan
                            metodikalar ishlab chiqilgan.</p>
                    </div>

                </div>
            </div>
        </div>

        <!-- // 05 - Block -->
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-4">
                        <h2 class="section-title-underline">
                            <span>Fikrlar</span>
                        </h2>
                    </div>
                </div>


                <div class="owl-slide owl-carousel">

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Abdukarim Yo'ldoshev</h3>
                                <span>Pedagog</span>
                            </div>
                        </div>
                        <div>
                            <p>Virtual ta'lim asosida shakllangan bu loyiha informatika o'qituvchilari uchun haqiqiy
                                ilmiy va amaliy qo'llanma. Tajribaviy metodlar va boblardagi aniq yo'riqnomalar juda
                                qulay.</p>
                        </div>
                    </div>

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Dilnoza Karimova</h3>
                                <span>Informatika fani o'qituvchisi</span>
                            </div>
                        </div>
                        <div>
                            <p>Bu platforma menga darslarimda virtual vositalardan to'g'ri foydalanishni o'rgatdi.
                                Kasbiy kompetensiyalarni shakllantirish bo'yicha berilgan metodik tavsiyalar ayni
                                kerakli paytda yordam berdi.</p>
                        </div>
                    </div>

                    <div class="ftco-testimonial-1">
                        <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                            <img src="images/person_4.jpg" alt="Image" class="img-fluid mr-3">
                            <div>
                                <h3>Saodat Abdurahmonova</h3>
                                <span>Ta'lim muassasasi rahbari</span>
                            </div>
                        </div>
                        <div>
                            <p>Bu platforma orqali biz informatika o'qituvchilarini zamonaviy raqamli muhitda ta'lim
                                berishga tayyorlayapmiz. Ilmiy asoslangan, strukturaviy va interaktiv yondashuvlar meni
                                hayratda qoldirdi.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="icon flaticon-mortarboard"></span>
                        <h3>Bizning falsafamiz</h3>
                        <p>Har bir informatika o'qituvchisi zamonaviy ta'lim texnologiyalarini egallashi zarur. Bizning
                            metodik yondashuvimiz virtual vositalar orqali o'qituvchining kasbiy kompetensiyasini
                            chuqurlashtirishga qaratilgan.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="icon flaticon-school-material"></span>
                        <h3>Ilmiy-metodik tamoyillar</h3>
                        <p>Ilmiy asoslangan, amaliyotga yo'naltirilgan va virtual muhitda testdan o'tkazilgan
                            metodikalar asosida ta'lim berish. Har bir bo'lim innovatsion yondashuvlar bilan boyitilgan.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="icon flaticon-library"></span>
                        <h3>Muvaffaqiyat kaliti</h3>
                        <p>Platformaning asosiy kuchi — raqamli resurslar, interaktiv topshiriqlar, kompetensiyaga
                            yo'naltirilgan baholash va metodik qo'llanmalar orqali samarali o'qitishdir.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-updates">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2 class="text-black">Loyiha bo'yicha hujjatlar</h2>
                            <a href="#">Barcha hujjatlar</a>
                        </div>
                        <div class="row">
                            <div class="post-entry-big horizontal d-flex mb-4 col-lg-6">
                                <a href="news-single.html" class="img-link mr-4"><img src="images/guvoxnoma.jpg"
                                        alt="Image" class="img-fluid"></a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">Oktabrr 1, 2024</a>
                                        <span class="mx-1">/</span>
                                        <a href="#">M.T.Xodjiyev</a>
                                    </div>
                                    <h3 class="post-heading"><a href="news-single.html">Virtual texnologiya o'quv
                                            qo'llanma guvohnomasi</a></h3>
                                </div>
                            </div>

                            <div class="post-entry-big horizontal d-flex mb-4 col-lg-6">
                                <a href="news-single.html" class="img-link mr-4"><img src="images/taqriz.jpg"
                                        alt="Image" class="img-fluid"></a>
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">Oktabrr 1, 2024</a>
                                        <span class="mx-1">/</span>
                                        <a href="#">A.A.Taniberdiyev</a>
                                    </div>
                                    <h3 class="post-heading"><a href="news-single.html">Taqriz-2025 A.Taniberdiyev</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2>Yangiliklarga obuna bo'ling!</h2>
                        <p>Ilmiy loyiha yangiliklaridan xabardor bo'lish uchun emailingizni qoldiring.</p>
                    </div>
                    <div class="col-lg-5">
                        <form action="#" class="d-flex">
                            <input type="email" class="rounded form-control mr-2 py-3"
                                placeholder="Email manzilingizni kiriting">
                            <button class="btn btn-primary rounded py-3 px-4" type="submit">Yuborish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>





        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h2 class="section-title-underline mb-3">
                            <span class="text-black">Biz bilan bog'laning</span>
                        </h2>
                        <p><strong>Telefon:</strong> <a href="tel:+998949113322">+998 94 911 33 22</a></p>
                        <p><strong>Manzil:</strong> Guliston shahar 4 mavze</p>
                        <p><strong>Telegram:</strong> <a href="https://t.me/Elyorbek668" target="_blank">
                                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111646.png" alt="Telegram"
                                    width="24" style="margin-bottom: -4px;">
                                @Elyorbek668
                            </a></p>
                    </div>

                    <div class="col-lg-6">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Ismingiz</label>
                                <input type="text" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email manzilingiz</label>
                                <input type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Xabaringiz</label>
                                <textarea id="message" cols="30" rows="5" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Yuborish" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@include('layouts.footer')
