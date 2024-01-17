@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Product Code:</strong>
                            {{ $product->product_code }}
                        </div>
                        <div class="form-group">
                            <strong>Product Price:</strong>
                            {{ $product->product_price }}
                        </div>
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $product->type }}
                        </div>
                        <div class="form-group">
                            <strong>Doba Zaruky:</strong>
                            {{ $product->doba_zaruky }}
                        </div>
                        <div class="form-group">
                            <strong>Pocet:</strong>
                            {{ $product->pocet }}
                        </div>
                        <div class="form-group">
                            <strong>Extra:</strong>
                            {{ $product->extra }}
                        </div>
                        <div class="form-group">
                            <strong>Doklad Id:</strong>
                            {{ $product->doklad_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
