@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Doklad
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Upravit') }} doklad</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('doklads.update', $doklad->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('doklad.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Zboží') }}
                            </span>

                                <div class="float-right">
                                    <a href="{{ route('products.create') }}?dokladId={{$doklad->id}}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Přidat zboží') }}
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

                                        <th>Name</th>
                                        <th>Product Code</th>
                                        <th>Product Price</th>
                                        <th>Type</th>
                                        <th>Doba Zaruky</th>
                                        <th>Pocet</th>
                                        <th>Extra</th>
                                        <th>Doklad Id</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>

                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->product_code }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>{{ $product->type }}</td>
                                            <td>{{ $product->doba_zaruky }}</td>
                                            <td>{{ $product->pocet }}</td>
                                            <td>{{ $product->extra }}</td>
                                            <td>{{ $product->doklad_id }}</td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Zobrazit') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Upravit') }}</a>
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
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </section>
@endsection
