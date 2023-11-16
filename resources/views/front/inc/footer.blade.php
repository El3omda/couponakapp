<footer class="py-5">
    <div class="container text-center">
        <p class="fw-bold text-white fs-7">تابعنا علي</p>

        {{-- Social Media --}}
        <ul class="list-unstyled m-0 p-0 social-media my-4">
            <li class="d-inline-block mx-2">
                <a href="" class="text-decoration-none text-white">
                    <i class="fa-brands fa-snapchat"></i>
                </a>
            </li>
            <li class="d-inline-block mx-2">
                <a href="" class="text-decoration-none text-white">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </li>
            <li class="d-inline-block mx-2">
                <a href="" class="text-decoration-none text-white">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li class="d-inline-block mx-2">
                <a href="" class="text-decoration-none text-white">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
        </ul>
        {{-- /Social Media --}}

        {{-- Quick Links --}}
        <ul class="list-unstyled m-0 p-0">
            <li class="d-inline-block mx-2">
                <a href="" class="fs-7 fw-bold text-decoration-none text-white">
                    الشروط و الأحكام
                </a>
            </li>

            <li class="d-inline-block mx-2">
                <a href="" class="fs-7 fw-bold text-decoration-none text-white">
                    سياسة الخصوصية
                </a>
            </li>

            <li class="d-inline-block mx-2">
                <a href="" class="fs-7 fw-bold text-decoration-none text-white">
                    تواصل معنا
                </a>
            </li>

            <li class="d-inline-block mx-2">
                <a href="" class="fs-7 fw-bold text-decoration-none text-white">
                    الاسئلة الشائعة
                </a>
            </li>

            <li class="d-inline-block mx-2">
                <a style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#langChanger"
                    class="fs-7 fw-bold text-decoration-none text-white">
                    <i class="fa-solid fa-globe"></i>
                    اللغة العربية
                    <i class="fa-solid fa-chevron-down"></i>
                </a>
            </li>
        </ul>
        {{-- Quick Links --}}

        {{-- App Stores --}}
        <div class="my-5">
            <img width="200px" src="{{ asset('assets/images/app-store.png') }}" alt="">
            <img width="200px" src="{{ asset('assets/images/google-play.png') }}" alt="">
        </div>
        {{-- App Stores --}}

        {{-- Copyrights --}}
        <small class="text-white fw-bold">
            &copy;
            جميع الحقوق محفوظة لكوبونك
            {{ date('Y') }}
        </small>
    </div>
</footer>


{{-- Change Language --}}
<div class="modal fade" id="langChanger" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close float-end p-3" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body text-center">
                <h4 class="fw-bold mb-3">
                    من فضلك اختر اللغة
                </h4>
                <img src="{{ asset('assets/images/language.svg') }}" alt="">
                <ul class="list-unstyled m-0 p-0 langChangerButtons mt-3 d-flex">
                    <li class="d-inline-block">
                        <a href="" class="btn btn-primary shadow-none fw-bold active">
                            العربية
                        </a>
                    </li>
                    <li class="d-inline-block">
                        <a href="" class="btn btn-primary shadow-none fw-bold">
                            English
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- Change Language --}}
