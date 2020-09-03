<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $currency->id }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $currency->country }}</p>
</div>

<!-- Currency Field -->
<div class="form-group">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{{ $currency->currency }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $currency->code }}</p>
</div>

<!-- Symbol Field -->
<div class="form-group">
    {!! Form::label('symbol', 'Symbol:') !!}
    <p>{{ $currency->symbol }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $currency->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $currency->updated_at }}</p>
</div>

