<div class="main-form">
  <h1 id="forecast-h1">Manage Your Budget Forecast</h1>
  <form method="POST" action="http://students.stevens.edu/cne/main/manage_forecast" accept-charset="utf-8" id="expectedForm">

    <hr>

    <div class="row">
      <div class="current-label">
        <h2>Income-to-Date</h2>
      </div>
      <div class="col-75">
        <h2 id="income-num">$100.00</h2>  
      </div>
    </div>

    <div class="row">
      <div class="current-label">
        <h2>Expenses-to-Date</h2>
      </div>
      <div class="col-75">
        <h2 id="expense-num">$100.00</h2>  
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-25">
        <label for="expectedIncome">Expected Income</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedIncome" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <h3>Expected Expenses (by Category)</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="expectedFood">Food</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedFood" id="expectedFood" value="0" onchange="getTotal()" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="expectedEntertainment">Entertainment</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedEntertainment" id="expectedEntertainment" value="0" onchange="getTotal()" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="expectedTransport">Transport</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedTransport" id="expectedTransport" value="0" onchange="getTotal()" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="expectedShopping">Shopping</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedShopping" id="expectedShopping" value="0" onchange="getTotal()" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="expectedSchool">School</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedSchool" id="expectedSchool" value="0" onchange="getTotal()" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="expectedRecurring">Recurring</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedRecurring" id="expectedRecurring" value="0" onchange="getTotal()" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="expectedOther">Other/Discretionary</label>
      </div>
      <div class="col-75">
        <input class="expected" type="number" name="expectedOther" id="expectedOther" value="0" onchange="getTotal()" placeholder="$">
      </div>
    </div>

    <div class="row">
      <div id="expectedLabel">
        <h3>Expected Expense Total:</h3>
      </div>
      <div class="col-75">
        <h2 id="expectedTotal">$0.00</h2>  
      </div>
    </div>


    <div class="row">
        <input type="submit" value="Submit">
    </div>
  </form>
</div>