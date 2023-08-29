@extends('admin.layouts.app')

@section('title', 'Fórum')

@section('hearder')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 my-4">Listagem de Suportes</h1>

@endsection

@section('content')

<div class="container-fluid">
    <!-- DataTales Example -->

    <div class="card shadow mb-4 my-4">
        <div class="card-header py-3 d-flex">
            <a href="{{ route('supports.create') }}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">Nova Dúvida</span>
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Assunto</th>
                            <th>Status</th>
                            <th>Conteúdo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($support->items() as $supports)
                        <tr>
                            <td>{{ $supports->id }}</td>
                            <td>{{ $supports->subject }}</td>
                            <td>{{ getStatusSupport($supports->status) }}</td>
                            <td>{{ $supports->body }}</td>
                            <td>
                                <a href="{{ route('supports.show', $supports->id) }}" class="btn btn-info btn-icon-split">
                                    <span class="icon text-white-25">
                                        <i class="fas fa-info-circle sm"></i>
                                    </span>
                                    <span class="text">Ver mais</span>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('supports.edit', $supports->id) }}" class="btn btn-warning btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </span>
                                    <span class="text">Editar</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<x-pagination :paginator="$support" :appends="$filters" />

@endsection