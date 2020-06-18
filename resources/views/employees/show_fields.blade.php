<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $employee->name }}</p>
</div>

<!-- Cedula Field -->
<div class="form-group">
    {!! Form::label('cedula', 'Cedula:') !!}
    <p>{{ $employee->cedula }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $employee->address }}</p>
</div>

<!-- Company Id Field -->
<div class="form-group">
    {!! Form::label('company_id', 'Company Id:') !!}
    <p>{{ $employee->company_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $employee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $employee->updated_at }}</p>
</div>

