@extends('layouts.theme.app')
@section('content')
<div class="row sales">
    <div class="col-sm-12">
        <div class="widget widget-chat-one">
            <div class="widget-heading">
                <h4 class="card-title">
                    <b>ComponentName | PageTitle</b>
                </h4>
                <ul class="tabs tab-pills">
                    <li>
                        <a href="javascript:void(0)" class="btn bg-dark" data-toggle="model" data-target="#theModal">Agregar</a>
                    </li>
                </ul>
            </div>
            Search

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mt-1">
                        <thead class="text-white" style="background: #3B3F5C;">
                            <tr>
                                <th class="table-th text-white">DESCRIPCION</th>
                                <th class="table-th text-white">IMAGEN</th>
                                <th class="table-th text-white">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6>Category Name</h6>
                                </td>
                                <td class="text-center">
                                    <img src="" alt="imagen de ejemplo" height="70" width="80" class="rounded">
                                </td>
                                <td class="text-center">
                                    <a href="javascript:void(0)" class="btn btn-dark" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-dark" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    pagination
                </div>
            </div>

        </div>

    </div>
    Include Form
</div>
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
