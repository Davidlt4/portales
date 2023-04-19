@extends('layouts.app')

@section('template_title')
    Remitente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Remitente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('remitentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Portal</th>
										<th>Aplicacion</th>
										<th>Id Usuario</th>
										<th>Id Delegacion</th>
										<th>Servidor</th>
										<th>Cuenta</th>
										<th>Contraseña</th>
										<th>Puerto</th>
										<th>Encriptacion</th>
										<th>Activo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($remitentes as $remitente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $remitente->id_portal }}</td>
											<td>{{ $remitente->aplicacion }}</td>
											<td>{{ $remitente->id_usuario }}</td>
											<td>{{ $remitente->id_delegacion }}</td>
											<td>{{ $remitente->servidor }}</td>
											<td>{{ $remitente->cuenta }}</td>
											<td>{{ $remitente->contraseña }}</td>
											<td>{{ $remitente->puerto }}</td>
											<td>{{ $remitente->encriptacion }}</td>
											<td>@if ($remitente->activo==0)
                                                    {{'No'}}
                                                @else
                                                    {{'Si'}}
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{ route('remitentes.destroy',$remitente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('remitentes.show',$remitente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('remitentes.edit',$remitente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    <!--Ver correos-->
                                                    <a class="btn btn-sm btn-warning " href="{{ route('remitentemails',$remitente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Correos') }}</a>
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
                {!! $remitentes->links() !!}
            </div>
        </div>
    </div>
@endsection
