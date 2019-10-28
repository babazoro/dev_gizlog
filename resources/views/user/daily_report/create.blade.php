@extends ('common.user')
@section ('content')

<h2 class="brand-header">日報作成</h2>
<div class="main-wrap">
  <div class="container">
    {!! Form::open(['route' => 'dailyreport.store']) !!}
      {!! Form::input('hidden', 'user_id', Auth::id(), ['class' => 'form-control']) !!}
      <!-- <input class="form-control" name="user_id" type="hidden"> -->
      <div class="form-group form-size-small">
      {!! Form::input('date', 'reporting_time', null, ['class' => 'form-control']) !!}
    <!-- <input class="form-control" name="reporting_time" type="date"> -->
    <span class="help-block"></span>
    </div>
    <div class="form-group">
      {!! Form::input('text', 'title', null, ['class' => 'from-control', 'placeholder' => 'Title']) !!}
      <!-- <input class="form-control" placeholder="Title" name="title" type="text"> -->
      <span class="help-block"></span>
    </div>
    <div class="form-group">
      {!! Form::textarea('contents', null, ['class' => 'form-control', 'pleaceholder' => 'Content']) !!}
      <!-- <textarea class="form-control" placeholder="Content" name="contents" cols="50" rows="10"></textarea> -->
      <span class="help-block"></span>
    </div>
    {!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}
    <!-- <button type="submit" class="btn btn-success pull-right">Add</button> -->
    {!! Form::close() !!}
  </div>
</div>
@endsection
