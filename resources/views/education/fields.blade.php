<!-- School Name Field -->
<div class="form-group col-sm-6">
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    {!! Form::label('school_name', 'School Name:') !!}
    {!! Form::text('school_name', null, ['class' => 'form-control']) !!}
</div>

<!-- School Web Field -->
<div class="form-group col-sm-6">
    {!! Form::label('school_web', 'School Web:') !!}
    {!! Form::text('school_web', null, ['class' => 'form-control']) !!}
</div>

<!-- Degree Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('degree_name', 'Degree Name:') !!}
    {!! Form::text('degree_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Grade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grade', 'Grade:') !!}
    {!! Form::text('grade', null, ['class' => 'form-control']) !!}
</div>

<!-- Year In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year_in', 'Year In:') !!}
    {!! Form::text('year_in', null, ['class' => 'form-control','id'=>'year_in']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#year_in').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Year Out Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year_out', 'Year Out:') !!}
    {!! Form::text('year_out', null, ['class' => 'form-control','id'=>'year_out']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#year_out').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Education Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education_level', 'Education Level:') !!}
    {!! Form::select('education_level', ['Primary' => 'Primary', 'Secondary' => 'Secondary', 'Vocational' => 'Vocational', 'Diploma' => 'Diploma', 'Bachelor' => 'Bachelor', 'Post-graduate' => 'Post-graduate'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('education.index') }}" class="btn btn-secondary">Cancel</a>
</div>
