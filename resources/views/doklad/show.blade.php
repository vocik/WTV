@extends('layouts.app')

@section('template_title')
    {{ $doklad->name ?? __("Show Doklad") }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Doklad') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doklads.index') }}">{{ __('Zpět') }}</a>
                        </div>
                    </div>

                    @isset($doklad->image)
                        <div class="card-body">
                            <a href="{{ url("images/" . $doklad->image) }}" target="_blank">
                                <img src="{{ url("images/" . $doklad->image) }}" alt="image" style="height: 300px;">
                            </a>
                        </div>
                    @endisset

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Obchod:</strong>
                            {{ $doklad->obchod }}
                        </div>
                        <div class="form-group">
                            <strong>Doprava:</strong>
                            {{ $doklad->doprava }}
                        </div>
                        <div class="form-group">
                            <strong>Cislo Objednavky:</strong>
                            {{ $doklad->cislo_objednavky }}
                        </div>
                        <div class="form-group">
                            <strong>Datum Nakupu:</strong>
                            {{ $doklad->datum_nakupu }}
                        </div>
                        <div class="form-group">
                            <strong>Cena S Dph:</strong>
                            {{ $doklad->cena_s_dph }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Product') }}
                            </span>
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
                                        <th>Name</th>
                                        <th>Product Code</th>
                                        <th>Product Price</th>
                                        <th>Type</th>
                                        <th>Doba Zaruky</th>
                                        <th>Pocet</th>
                                        <th>Extra</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->product_code }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>{{ $product->type }}</td>
                                            <td>{{ $product->doba_zaruky }}</td>
                                            <td>{{ $product->pocet }}</td>
                                            <td>{{ $product->extra }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
