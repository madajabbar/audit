@extends('backend.crud.modal')
@section('input-form')
<div class="form-group">
   <div class="form-line">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control" required>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="win">Win</label>
      <input type="number"  name="win" class="form-control" required>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="draw">Draw</label>
      <input type="number"  name="draw" class="form-control" required>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="lose">Lose</label>
      <input type="number"  name="lose" class="form-control" required>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="goals_again">GA</label>
      <input type="number"  name="goals_again" class="form-control" required>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="goals_for">GF</label>
      <input type="number"  name="goals_for" class="form-control" required>
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="picture">Picture</label>
      <input type="file" name="picture" class="form-control">
   </div>
</div>
<div class="form-group">
   <div class="form-line">
      <label for="logo">Logo</label>
      <input type="file" name="logo" class="form-control">
   </div>
</div>

@endsection
