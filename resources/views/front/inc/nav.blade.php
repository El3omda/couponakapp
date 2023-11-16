<nav>
    <div class="container py-3 d-flex justify-content-between align-items-center">
        {{-- Logo --}}
        <div>
            <img width="140px" src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        {{-- Links --}}
        <div class="nav-links">
            <ul class="list-unstyled m-0">
                <div class="hide-small-devices">
                    <li class="d-inline-block mx-2">
                        <a href="" class="text-white text-decoration-none fs-5 active">
                            الرئيسية
                        </a>
                    </li>
                    <li class="d-inline-block mx-2">
                        <a href="" class="text-white text-decoration-none ">
                            المفضلة
                        </a>
                    </li>
                    <li class="d-inline-block mx-2">
                        <a href="" class="text-white text-decoration-none">
                            حمل التطبيق
                        </a>
                    </li>
                </div>

                {{-- Search --}}
                <li class="d-inline-block">
                    <div class="btn btn-primary open-search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </li>

                {{-- Dark Mode --}}
                <li class="d-inline-block mx-2 hide-small-devices">
                    <div class="btn btn-primary">
                        <i class="fa-regular fa-moon"></i>
                    </div>
                </li>

                {{-- Small Devices Navigation --}}
                <li class="d-inline-block menu-toggler">
                    <div class="btn btn-primary">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{-- Searching Box --}}
<div class="searching-box">
    <form action="" method="" class="d-flex justify-content-between">
        {{-- Search Icon --}}
        <div>
            <label for="searchInput">
                <i class="fa-solid fa-magnifying-glass"></i>
            </label>
        </div>

        {{-- Search Input --}}
        <div class="search-input-box">
            <input type="text" name="" id="searchInput" placeholder="أبحث عن كوبون">
        </div>

        {{-- Search Close Button --}}
        <div>
            <i class="fa-solid fa-times close-search-box"></i>
        </div>
    </form>
</div>
{{-- /Searching Box --}}

{{-- Side Nav --}}
<div class="side-nav">
    <div class="link-cont">
        <div class="container">
            <i class="fa-solid fa-times fa-xl close-side-nav float-end"></i>

            {{-- Links --}}
            <ul class="list-unstyled mt-3">
                <li class="py-4">
                    <a href="" class="text-decoration-none text-dark fs-6">
                        الرئيسية
                    </a>
                </li>
                <li class="py-4">
                    <a href="" class="text-decoration-none text-dark fs-6">
                        المفضلة
                    </a>
                </li>
                <li class="py-4">
                    <a href="" class="text-decoration-none text-dark fs-6">
                        حمل التطبيق
                    </a>
                </li>

                {{-- Dark Mode --}}
                <li class="py-4">
                    <div class="btn btn-primary">
                        <i class="fa-regular fa-moon"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
{{-- /Side Nav --}}