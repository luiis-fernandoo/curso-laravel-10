@extends('admin.layouts.app')

@section('title', 'Editar Dúvida')

@section('header')
Duvida {{$support->id}}
@endsection

@section('content')
<x-alert></x-alert>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Editar Dúvida!</h1>
                            </div>
                            <form action="{{ route('supports.update', $support->id) }}" class="user" method="post">
                                @method('put')
                                @include('admin.supports.partials.form', [
                                'support' => $support
                                ])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    </div>

    @endsection