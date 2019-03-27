
<div class="row">
  <div class="col-sm-2">
    {!! form::label('nickname','Nickname') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
      {{ Form::text('nickname',NULL, ['class'=>'form-control', 'id'=>'nickname', 'placeholder'=>'Nickname Post...']) }}
      {{ $errors->first('nickname', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('parent_name','Parent Name') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('body') ? 'has-error' : "" }}">
      {{ Form::text('parent_name',NULL, ['class'=>'form-control', 'id'=>'parent_name', 'placeholder'=>'Parent Name Post...']) }}
      {{ $errors->first('parent_name', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-2">
    {!! form::label('gender','Gender') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('gender') ? 'has-error' : "" }}">
      {!! Form::radio('gender', 'male', (old('gender') == 'm'), ['id' => 'male']) !!}{!! form::label('male','Male') !!}
{!! Form::radio('gender', 'female', (old('gender') == 'f'), ['id'=>'female']) !!}{!! form::label('female','Female') !!}
    </div>
  </div>
</div>


<div class="row">
  <div class="col-sm-2">
        {!! form::label('dob','Date of Birth') !!}
  </div>
  <div class="col-sm-10">
  <div class="form-group {{ $errors->has('dob') ? 'has-error' : "" }}">
        {{ Form::date('dob',NULL, ['class'=>'form-control', 'id'=>'datepicker', 'placeholder'=>'TARIKH Post...']) }}
  </div>
  </div>
</div>


  <div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
  </div>
