<div class="main-form">
  <h1>Manage Your Goals</h1>
  <form method="POST" action="http://students.stevens.edu/cne/main/manage_goals" accept-charset="utf-8">

    <div class="row">
      <div class="col-25">
        <label for="goalType">Goal Type</label>
      </div>
      <div class="col-75">
        <input type="radio" name="goalType" value="shortTerm">Short-Term
        <input type="radio" name="goalType" value="longTerm">Long-Term    
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="goalTitle">Goal Title</label>
      </div>
      <div class="col-75">
        <input type="text" name="goalTitle" placeholder="I want to save for ...">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="goalAmount">Amount</label>
      </div>
      <div class="col-75">
        <input type="number" name="goalAmount" placeholder="$">
      </div>
    </div>

    <div class="row">
        <input type="submit" value="Submit">
    </div>
  </form>
</div>