<div class="main-form">
  <h1>Manage Your Income</h1>
  <form method="POST" action="http://students.stevens.edu/cne/main/manage_income" accept-charset="utf-8">

    <div class="row">
      <div class="col-25">
        <label for="incomeType">Type of Income</label>
      </div>
      <div class="col-75">
        <select id="incomeType" name="incomeType">
          <option value="fixed">Fixed</option>
          <option value="variable">Variable</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="incomeSource">Source of Income</label>
      </div>
      <div class="col-75">
        <select id="incomeSource" name="incomeSource">
          <option value="fixedAllowance">Fixed - Allowance</option>
          <option value="fixedWages">Fixed - Wages</option>
          <option value="variableSideJob">Variable - Side Job</option>
          <option value="variableSelling">Variable - Selling</option>
          <option value="variableTrading">Variable - Trading</option>
          <option value="variableOther">Variable - Other</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="incomeFrequency">Frequency</label>
      </div>
      <div class="col-75">
        <select id="incomeFrequency" name="incomeFrequency">
          <option value="weekly">Weekly</option>
          <option value="biWeekly">Bi-weekly</option>
          <option value="monthly">Monthly</option>
          <option value="annual">Annual</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="incomeStartingDate">Starting Date</label>
      </div>
      <div class="col-75">
        <input type="date" name="incomeStartingDate" placeholder="1/1/2019">
      </div>
    </div>    

    <div class="row">
      <div class="col-25">
        <label for="incomeAmount">Amount</label>
      </div>
      <div class="col-75">
        <input type="number" name="incomeAmount" placeholder="$">
      </div>
    </div>

    <div class="row">
        <input type="submit" value="Submit">
    </div>
  </form>
</div>
