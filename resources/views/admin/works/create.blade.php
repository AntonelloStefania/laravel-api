@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 text-white">

            <form action="{{route('admin.works.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Image URL:
                    </label>
                    <input class="ps-3 form-control" type="file" id="image" name="image" value="{{old('image')}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Title:
                    </label>
                    <input class="ps-3 form-control" type="text" id="title" name="title">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       Frontend:
                    </label>
                    <input class="ps-3 form-control" type="text" id="front_ender" name="front_ender">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Backend:
                    </label>
                    <input class="ps-3 form-control" type="text" id="back_ender" name="back_ender">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        User Interface:
                    </label>
                    <input class="ps-3 form-control" type="text" id="ui" name="ui">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       User Experience:
                    </label>
                    <input class="ps-3 form-control" type="text" id="ux" name="ux">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Illustrator:
                    </label>
                    <input class="ps-3 form-control" type="text" id="illustrator" name="illustrator">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       Description:
                    </label>
                    <textarea class="ps-3 form-control" type="text" id="description" name="description"></textarea>
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Link:
                    </label>
                    <input class="ps-3 form-control" type="text" id="link" name="link">
                </div>
                <div class="form-group my-5">
                    <label for="" class="control-label mb-3">
                        Website type:
                     </label>
                    <select class="form-control" name="type_id" id="type_id">
                        @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-5 d-flex flex-column">
                    <label  class="control-label mb-3">Development Languages Selection:</label>
                    <div class="col-7 offset-1">
                        @foreach($technologies as $tech)
                        <span >{{$tech->tech_name}}: </span> <input type="checkbox"  name="technologies[]" {{in_array($tech->id, old('technologies',[])) ? 'checked' : ''}} value="{{$tech->id}}" id="" class="form-check-input me-3">
                        @endforeach
                    </div>
                </div>  
                {{-- <div class="form-group my-5">
                    <label for="" class="control-label mb-3">
                        Supported Devices:
                     </label>
                     <ul>
                        <li>
                           <label for="">
                            Mobile:
                           </label>
                           IMPORTANTE!! IL NOME DELL'INPUT PER ASSOCIARE ALLA CATEGORIA
                            <input type="checkbox" name="categories[mobile]" id="mobile" value="1" >
                        </li>
                        <li>
                            <label for="">
                             Tablet:
                            </label>
                             <input type="checkbox" name="categories[tablet]" id="tablet" value="1">
                         </li>
                         <li>
                            <label for="">
                             PC:
                            </label>
                             <input type="checkbox" name="categories[pc]" id="pc" value="1" >
                         </li>
                         <li>
                            <label for="">
                             Smart TV:
                            </label>
                             <input type="checkbox" name="categories[smart_tv]" id="smart_tv" value="1" >
                         </li>
                     </ul>
                </div>
                <div class="form-group my-5">
                    <label for="" class="control-label mb-3">
                        Supported OS:
                     </label>
                     <ul>
                        <li>
                           <label for="">
                            Windows:
                           </label>
                            <input type="checkbox" name="categories[windows]" id="windows" value="1">
                        </li>
                        <li>
                            <label for="">
                             Mac:
                            </label>
                             <input type="checkbox" name="categories[mac]" id="mac" value="1">
                         </li>
                         <li>
                            <label for="">
                             Linux:
                            </label>
                             <input type="checkbox" name="categories[linux]" id="linux" value="1">
                         </li>
                         <li>
                            <label for="">
                             Android:
                            </label>
                             <input type="checkbox" name="categories[android]" id="android" value="1">
                         </li>
                         <li>
                            <label for="">
                             iOS:
                            </label>
                             <input type="checkbox" name="categories[ios]" id="ios" value="1">
                         </li>
                     </ul>
                </div>
                <div class="form-group my-5">
                    <label for="">
                        Age Restriction:
                    </label>
                    <input type="checkbox" name="categories[age_restriction]" id="age_restriction" value="1">
                </div> --}}
                <div class="col-12 d-flex justify-content-center py-4">
                    <button type="submit" class="btn btn-md btn-success">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection