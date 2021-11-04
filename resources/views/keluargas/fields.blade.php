<!-- Nomor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor', 'Nomor:') !!}
    {!! Form::text('nomor', null, ['class' => 'form-control']) !!}
</div>

<!-- Individu Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('individu_id', 'Individu Id:') !!}
    {{ Form::select('individu_id', App\Models\Individu::get()->pluck('nama', 'id')->prepend('-- Pilih Individu --', ''), null, ['class' => 'form-control', 'id' => 'individu_id']) }}
</div>

<!-- Peran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peran', 'Peran:') !!}
    {!! Form::text('peran', null, ['class' => 'form-control']) !!}
</div>