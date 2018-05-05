<div class="form-group">
  {{ Form::label('name', 'Product name') }}
  {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::label('description', 'Product description') }}
  {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
  {{ Form::submit('Save', ['class' => 'btn btn-sm btn-primary']) }}  
</div>