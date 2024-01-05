@extends('layouts.app')

@section('content')

<body>

    
    <main>
        @yield('content')

        
            <div class="click-box">
                <img src="{{ asset('dash\img2.gif') }}" alt="Image 2" class="box-image">
                <b class="box-label">Biodata</b>
                <hr class="horizontal-line">
                <a href="{{url ('/users')}}" class="click-text">Klik disini</a>
            </div>
           
        </div>
    </main>

</body>

@endsection