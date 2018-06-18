@extends('layouts.home')
@section('home_content')
    <div class="body-header feather-card">
        <span>Rubros</span>
    </div>
    <div class="body-content feather-card">
        <div class="body-content-item">
            <div class="body-content-item-title">
                <span>Lista de Cuatrimestres</span>
                <div class="right-align">
                    <a href="{{ route('quarters.create') }}" class="waves-effect waves-light btn btn-flat">
                        <i class="material-icons right">add</i>Add
                    </a>
                </div>
            </div>
            <div class="body-content-item-body">
                <table class="highlight responsive-table">
                    <thead>
                    <tr>
                        <th>Rubro</th>
                        <th>Fecha inicio</th>
                        <th>Fecha final</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($quarters as $quarter)
                        <tr>
                            <td>{{ $quarter->name }}</td>
                            <td>{{ $quarter->init_date }}</td>
                            <td>{{ $quarter->end_date }}</td>
                            <td>
                                @can('quarters.show')
                                    <a href="{{ route('quarters.show', $quarter->id) }}" class="waves-effect waves-light btn btn-flat">
                                        <i class="material-icons">assignment</i>
                                    </a>
                                @endcan
                            </td>
                            <td>
                                @can('quarters.edit')
                                    <a href="{{ route('quarters.edit', $quarter->id) }}" class="waves-effect waves-light btn btn-flat">
                                        <i class="material-icons">create</i>
                                    </a>
                                @endcan
                            </td>
                            <td>
                                @can('quarters.destroy')
                                    <form action="{{ route('quarters.destroy', $quarter->id) }}" method="DELETE">
                                        <button class="waves-effect waves-light btn btn-flat disabled">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection