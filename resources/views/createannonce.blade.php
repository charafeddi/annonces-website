@extends('layouts.app')

@section('content')
<div class="page-info">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page">Forms</li>
        </ol>
    </nav>
</div>
<div class="main-wrapper">
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Commençons par l’essentiel !</h5>
                                <form method="POST" action="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Quel est le titre de l’annonce ?</label>
                                        <input type="text" class="form-control" id="exampleInputTitle" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Choisissez une catégorie suggérée</label>
                                        <select class="form-control custom-select" name="category" id="exampleFormControlSelect1" >
                                              @foreach ($collection as $item)
                                               @if ($item ->parent_id == null)
                                                   <option value="{{$item ->id}}"> {{$item ->name}}</option>
                                               @else
                                                   @foreach ($collection as $sub)
                                                       @if ($item ->parent_id == $sub ->id)
                                                           //error I need to chane it to drop down 
                                                       @endif
                                                   @endforeach
                                               @endif
                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="discription">Discription</label>
                                        <textarea class="form-control" id="discription" name="discription" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="Prix">Prix</label>
                                        <input type="text" class="form-control" id="Prix" name="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="Prix">Ville</label>
                                        <select class="js-states form-control" tabindex="-1" name="city" style="display: none; width: 100%">
                                            @foreach ($cties as $item)
                                                <option value="{{$item}}">{{$item}}</option>
                                            @endforeach
                                            
                                    </select>
                                    </div>
                                    <input type="hidden" value="{{Auth::user()->id}}">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection