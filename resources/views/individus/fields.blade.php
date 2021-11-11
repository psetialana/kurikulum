<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'NIK:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    {!! Form::text('tanggal_lahir', null, ['class' => 'form-control datepicker']) !!}
</div>

@push('page_scripts')
<script>
    $('#tanggal_lahir').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>
@endpush