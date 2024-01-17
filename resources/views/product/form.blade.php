<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_code') }}
            {{ Form::text('product_code', $product->product_code, ['class' => 'form-control' . ($errors->has('product_code') ? ' is-invalid' : ''), 'placeholder' => 'Product Code']) }}
            {!! $errors->first('product_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('product_price') }}
            {{ Form::text('product_price', $product->product_price, ['class' => 'form-control' . ($errors->has('product_price') ? ' is-invalid' : ''), 'placeholder' => 'Product Price']) }}
            {!! $errors->first('product_price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $product->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doba_zaruky') }}
            {{ Form::text('doba_zaruky', $product->doba_zaruky, ['class' => 'form-control' . ($errors->has('doba_zaruky') ? ' is-invalid' : ''), 'placeholder' => 'Doba Zaruky']) }}
            {!! $errors->first('doba_zaruky', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pocet') }}
            {{ Form::text('pocet', $product->pocet, ['class' => 'form-control' . ($errors->has('pocet') ? ' is-invalid' : ''), 'placeholder' => 'Pocet']) }}
            {!! $errors->first('pocet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('extra') }}
            {{ Form::text('extra', $product->extra, ['class' => 'form-control' . ($errors->has('extra') ? ' is-invalid' : ''), 'placeholder' => 'Extra']) }}
            {!! $errors->first('extra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::hidden('doklad_id', request()->get("dokladId") ? request()->get("dokladId") : $product->doklad_id) }}
            {!! $errors->first('doklad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary" style="background-color: #007bff;">{{ __('Uložit') }}</button>
    </div>
</div>
