@extends('front.layout')

@section('title')
    كوبونك | تواصل معنا
@endsection

@section('content')
    <h3 class="fw-bold">
        تواصل معنا
    </h3>

    <form action="" method="POST" class="mt-5">
        @csrf
        @method('POST')

        <div class="row">
            <div class="col-md-6 mb-3">
                <input type="text" name="name" id="name" placeholder="الاسم" class="form-control shadow-none light-bg p-3 round-20">
            </div>

            <div class="col-md-6 mb-3">
                <input type="text" name="phone" id="phone" placeholder="رقم الجوال" class="form-control shadow-none light-bg p-3 round-20">
            </div>

            <div class="col-md-12 mb-3">
                <textarea name="message" id="message"  rows="10" class="form-control light-bg shadow-none round-20" placeholder="نص الرسالة"></textarea>
            </div>
            
            <div class="col-md-12 mb-3">
                <div class="btn btn-primary fs-6 main-bg px-5 py-3 float-end round-20 shadow-none border-0">
                    إرسال
                </div>
            </div>

        </div>

    </form>

@endsection