@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="text-end mt-5 mb-3">
            <a href="{{route('admin.works.index')}}" class="btn back-btn">Back</a>
        </div>
        <div class="col-12 my-5 text-white">
            <div class="text-center">
                <div class="my-5 text-white">
                    <h1 >{{$site->title}}</h1>
                </div>
                <div>
                    <img src="{{asset('storage/'.$site->image)}}" width="600px" alt="">
                </div>
                <div class="text-center my-4">
                   Type: <span class="fw-bold">{{$site->type->category}}</span>
                </div>
                <div class="my-5">
                    <h5>Description:</h5>
                    <p>{{$site->description}}</p>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <h5>Development team:</h5>
                <ul>
                    <li>
                        <span class="fw-bold">frontend:</span> {{$site->front_ender}}
                    </li>
                    <li>
                        <span class="fw-bold"> backend:</span> {{$site->back_ender}}
                    </li>
                    <li>
                        <span class="fw-bold">user experience:</span> {{$site->ux}}
                    </li>
                    <li>
                        <span class="fw-bold"> user interface:</span> {{$site->ui}}
                    </li>
                    <li>
                        <span class="fw-bold">illustrator:</span> {{$site->illustrator}}
                    </li>
                </ul>
            </div>
          
            {{-- QUI C'E' LA CHIAMATA A MOBILE E L'OPERATORE TERNARIO PER FAR USCIRE LA SCRITTA GIUSTA --}}
             {{-- <div class="my-5 text-center">
                <h5>Compatible Devices:</h5>
                <ul class="list-unstyled">
                    <li>
                        <span>{{ $site->type->mobile ? 'mobile' : '' }}</span>
                    </li>
                    <li>
                        <span> {{ $site->type->tablet ? 'tablet' : '' }}</span>
                    </li>
                    <li>
                        <span>{{ $site->type->pc ? 'PC' : '' }}</span>
                    </li>
                    <li>
                        <span>{{ $site->type->smart_tv ? 'Smart_tv' : '' }}</span>
                    </li>
                </ul>
                
            </div>
            <div class="my-5 text-center">
                <h5>Compatible OS:</h5>
                <ul class="list-unstyled">
                    <li>
                        <span>{{ $site->type->windows ? 'Windows' : '' }}</span>
                    </li>
                    <li>
                        <span> {{ $site->type->mac ? 'Mac' : '' }}</span>
                    </li>
                    <li>
                        <span>{{ $site->type->linux ? 'Linux' : '' }}</span>
                    </li>
                    <li>
                        <span>{{ $site->type->android ? 'Android' : '' }}</span>
                    </li>
                    <li>
                        <span>{{ $site->type->ios ? 'iOS' : '' }}</span>
                    </li>
                </ul>
            </div>
            <div class="my-5 text-center">
                <span>Age Restriction: {{$site->type->age_restriction ? '18+' : ''}}</span>
            </div> --}}
            <div class="text-center">
              <span>Link to Project: <a href="#">{{$site->link}}</a></span>
            </div>
            <div class="col-12 text-center">
                <h5 class="mt-5">Development's Languages: </h5>
                <ul class="list-unstyled d-flex flex-row col-12 justify-content-center">
                    @if($site->technologies)
                        @foreach($site->technologies as $tech)
                        <li class="mx-2"><a href="#" class="badge text-bg-warning text-decoration-none">{{$tech->tech_name}}</a></li> 
                        @endforeach
                        
                    @endif
                </ul>
           </div>
        </div>
    </div>
</div>


@endsection