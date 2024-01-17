<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('obchod') }}
            {{ Form::text('obchod', $doklad->obchod, ['class' => 'form-control' . ($errors->has('obchod') ? ' is-invalid' : ''), 'placeholder' => 'Obchod']) }}
            {!! $errors->first('obchod', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doprava') }}
            {{ Form::text('doprava', $doklad->doprava, ['class' => 'form-control' . ($errors->has('doprava') ? ' is-invalid' : ''), 'placeholder' => 'Doprava']) }}
            {!! $errors->first('doprava', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cislo_objednavky') }}
            {{ Form::text('cislo_objednavky', $doklad->cislo_objednavky, ['class' => 'form-control' . ($errors->has('cislo_objednavky') ? ' is-invalid' : ''), 'placeholder' => 'Cislo Objednavky']) }}
            {!! $errors->first('cislo_objednavky', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datum_nakupu') }}
            {{ Form::date('datum_nakupu', $doklad->datum_nakupu, ['class' => 'form-control' . ($errors->has('datum_nakupu') ? ' is-invalid' : ''), 'placeholder' => 'Datum Nakupu']) }}
            {!! $errors->first('datum_nakupu', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cena_s_dph') }}
            {{ Form::text('cena_s_dph', $doklad->cena_s_dph, ['class' => 'form-control' . ($errors->has('cena_s_dph') ? ' is-invalid' : ''), 'placeholder' => 'Cena S Dph']) }}
            {!! $errors->first('cena_s_dph', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::file('image') }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary " style="background-color: #007bff;">{{ __('Uložit') }}</button>
    </div>
</div>
