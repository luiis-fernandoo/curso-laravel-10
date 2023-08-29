@extends('admin.layouts.app')

@section('title', 'Mostrar Dúvida')

@section('header')
<h1>Duvida {{$supports->id}}</h1>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 my-4">Detalhes da Dúvida</h1>
    </div>

    <div class="row">

        <div class="col-lg-6">

            <div class="col-lg-6">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{$supports->subject}}</h6>
                        <h6 class="m-0 font-weight-bold text-primary"> Status: {{$supports->status}}</h6>
                        <div class="dropdown no-arrow show">

                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        {{$supports->body}}
                    </div>
                    <div class="card-body">
                        <form class="user" action="{{ route('supports.destroy', $supports->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-user btn-block my-4" type="submit">deletar</button>
                        </form>
                    </div>

                </div>

            </div>