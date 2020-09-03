<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Designation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthday', 'Birthday:') !!}
    {!! Form::text('birthday', null, ['class' => 'form-control','id'=>'birthday']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#birthday').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Religion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('religion', 'Religion:') !!}
    {!! Form::text('religion', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Joining Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('joining_date', 'Joining Date:') !!}
    {!! Form::text('joining_date', null, ['class' => 'form-control','id'=>'joining_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#joining_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
</div>
