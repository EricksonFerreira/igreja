@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <br>
        <div class="row">
            <a href="{{route('culto.index')}}" class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow-none">
                    <span class="info-box-icon bg-info"><i class="fas  fa-school"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Cultos</span>
                        {{-- <span class="info-box-number">Todos os cultos da igreja</span> --}}
                    </div>

                </div>

            </a>

            <a href="{{route('membro.index')}}" class="col-md-3 col-sm-6 col-12">
                <div class="info-box shadow-sm">
                    <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Membros</span>
                        {{-- <span class="info-box-number">Todos os membros da igreja</span> --}}
                    </div>

                </div>

            </a>


        </div>
    </div>
@endsection
