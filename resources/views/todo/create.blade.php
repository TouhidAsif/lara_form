@extends('layout.app')


@section('body')

<br>
<a href="/todo" class="btn btn-info">Back</a>
<div class="col-lg-4 col-lg-offset-4">
<h1>Create new Item for ToDo List</h1>
{{csrf_field()}}
<form class="form-horizontal" action="/todo" method="post">
  <fieldset>
    <div class="form-group">
      <div class="col-lg-10">
        <textarea class="form-control" rows="5" id="textArea"></textarea>
        <button type="submit" class="btn btn-success">Submit</button>
 
      </div>
    </div>

      </div>
     
  </fieldset>
</form>

</div>

@endsection