<form class="form-horizontal">
<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Task</label>  
  <div class="col-md-4">
  <input id="taskname" name="taskname" type="text" placeholder="Enter Task" class="form-control input-md">
  <span class="help-block">Enter the task in the box above.</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Completed(Y/N)</label>
  <div class="col-md-4">
      <input id="completed" name="completed" type="text" placeholder="Yes/No" class="form-control input-md">
      <span class="help-block">Has this task been completed ?</span>
  </div>
</div>
    <!-- Textarea -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="datecreated">Date Created</label>
        <div class="col-md-4">
            <input type="date" class="form-control" id="datecreated" name="datecreated">
        </div>
    </div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="datecompleted">Date Completed</label>
  <div class="col-md-4">                     
    <input type="date" class="form-control" id="datecompleted" name="datecompleted">
  </div>
</div>


<div class="form-group">
  <div class="col-md-8">
    <button id="submittask" name="submittask" class="btn btn-success">Add</button>
  </div>
</div>

</fieldset>
</form>
