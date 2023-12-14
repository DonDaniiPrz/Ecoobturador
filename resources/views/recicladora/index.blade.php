@extends('layouts.app')

@section('template_title')
    Recicladora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recicladora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('recicladoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Recicladora</th>
										<th>Nombre Recicladora</th>
										<th>Razon Social</th>
										<th>Direccion</th>
										<th>Descripcion</th>
										<th>Users Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recicladoras as $recicladora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $recicladora->Id_recicladora }}</td>
											<td>{{ $recicladora->Nombre_recicladora }}</td>
											<td>{{ $recicladora->Razon_social }}</td>
											<td>{{ $recicladora->Direccion }}</td>
											<td>{{ $recicladora->Descripcion }}</td>
											<td>{{ $recicladora->users_id }}</td>

                                            <td>
                                                <form action="{{ route('recicladoras.destroy',$recicladora->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('recicladoras.show',$recicladora->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('recicladoras.edit',$recicladora->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $recicladoras->links() !!}
            </div>
        </div>
    </div>
@endsection
