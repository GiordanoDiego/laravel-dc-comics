@extends('layouts.app')

@section('page-title', 'Home')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">
                    Benvenuto
                </h1>
            </div>
            <div class="text-center">
                <a href="comics">Vai alla visione dei Comics</a>
            </div>
        </div>
    </div>
@endsection

{{-- 
    questa pagina è collegata a web.php che a sua volta avrà il contenuto contenente iin lauouts, layouts sarà composto da 3 componenti che sono header main e footer.blade.php
--}}