@extends('layouts.app')

@section('template_title')
    Correo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Correo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('correos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Remitente</th>
										<th>Destinatarios</th>
										<th>Cc</th>
										<th>Cco</th>
										<th>Texto</th>
										<th>Asunto</th>
										<th>Enviado</th>
										<th>Status</th>
										<th>Mensaje</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($correos as $correo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $correo->id_remitente }}</td>
											<td>{{ $correo->destinatarios }}</td>
											<td>{{ $correo->cc }}</td>
											<td>{{ $correo->cco }}</td>
											<td>{{ $correo->texto }}</td>
											<td>{{ $correo->asunto }}</td>
											<td>@if ($correo->enviado==0)
                                                    {{'No'}}
                                                @else
                                                    {{'Si'}}
                                                @endif
                                            </td>
											<td>{{ $correo->status }}</td>
											<td>{{ $correo->mensaje }}</td>

                                            <td>
                                                <form action="{{ route('correos.destroy',$correo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('correos.show',$correo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('correos.edit',$correo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $correos->links() !!}
            </div>
        </div>
    </div>
@endsection
