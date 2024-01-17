@extends('layouts.app')

@section('template_title')
    Doklad
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Doklad') }}
                            </span>

                             <div class="float-right">
                             @if ($showButton)
                                <a href="{{ route('doklads.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Vytvořit nový doklad') }}
                                </a>
                                @endif
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
                                        
										<th>Obchod</th>
										<th>Doprava</th>
										<th>Cislo Objednavky</th>
										<th>Datum Nakupu</th>
										<th>Cena S Dph</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doklads as $doklad)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $doklad->obchod }}</td>
											<td>{{ $doklad->doprava }}</td>
											<td>{{ $doklad->cislo_objednavky }}</td>
											<td>{{ $doklad->datum_nakupu }}</td>
											<td>{{ $doklad->cena_s_dph }}</td>

                                            <td>
                                                <form action="{{ route('doklads.destroy',$doklad->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doklads.show',$doklad->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Zobrazit') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doklads.edit',$doklad->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Upravit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" style="background-color: #dc3545;"><i class="fa fa-fw fa-trash"></i> {{ __('Smazat') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $doklads->links() !!}
            </div>
        </div>
    </div>
@endsection
