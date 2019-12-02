let history = [];
let balance = 0.00;



function set_balance(new_balance) {
    balance = Number.parseFloat(new_balance).toFixed(2)
    document.querySelector('#b_amount').innerHTML = balance
}

function add_hist(cost, category) {
    let new_payment = {
        loss: cost < 0,
        cost: Math.abs(cost).toFixed(2),
        category: category
    }

    let new_li = document.createElement('li')
    let arrow

    if (new_payment.loss) {
        new_li.classList.add('loss')
        arrow = 'arrow_drop_down'
    } else {
        new_li.classList.add('growth')
        arrow = 'arrow_drop_up'
    }

    let new_arrow = document.createElement('i')
    new_arrow.classList.add('material-icons')
    new_arrow.classList.add('up-down')
    new_arrow.innerHTML = arrow

    let new_cost = document.createElement('h2')
    new_cost.innerHTML = new_payment.cost

    let new_category = document.createElement('i')
    new_category.classList.add('material-icons')
    new_category.classList.add('category')
    new_category.innerHTML = new_payment.category

    new_li.appendChild(new_arrow)
    new_li.appendChild(new_cost)
    new_li.appendChild(new_category)

    let ul = document.querySelector('.recent')

    if(ul.hasChildNodes()) ul.insertBefore(new_li, ul.firstChild)
    else ul.appendChild(new_li)

    history.push(new_payment)
    set_balance(parseFloat(balance) + parseFloat(cost))
}

let hist_form_open = false

function toggle_hist_form(add) {
    if (hist_form_open) {

        let cost = document.querySelector('#cost')
        let ud = document.querySelector('input[name="ud"]:checked')
        let category = document.querySelector('#category')

        if (add) {
            add_hist(cost.value * ud.value, category.value)
        }

        cost.value = ''
        document.querySelector('#radio_down').checked = true
        category.value = ''

        document.querySelector('.add_to_hist').style.height = '0'
        document.querySelector('.add_btn').style.textShadow = '3px 3px 0 #bbb'
        document.querySelector('.add_btn').style.background = '#fff'
    } else {
        document.querySelector('.add_to_hist').style.height = 'calc(100% - 110px)'
        document.querySelector('.add_btn').style.textShadow = '6px 6px 2px #ccc'
        document.querySelector('.add_btn').style.background = '#eee'

        document.querySelector('#cost').focus();
    }

    hist_form_open = !hist_form_open;
}

// New JS here

function getExpectedTotal() {
    //Assume form with id="theform"
    var expectedForm = document.forms["expectedForm"];
    //Get a reference to the TextBox
    var expectedFood = expectedForm.elements["expectedFood"];
    var expectedEntertainment = expectedForm.elements["expectedEntertainment"];
    var expectedTransport = expectedForm.elements["expectedTransport"];
    var expectedShopping = expectedForm.elements["expectedShopping"];
    var expectedSchool = expectedForm.elements["expectedSchool"];
    var expectedRecurring = expectedForm.elements["expectedRecurring"];
    var expectedOther = expectedForm.elements["expectedOther"];

    var howMuch = 0;
    howMuch = parseInt(expectedFood.value) + 
        parseInt(expectedEntertainment.value) +
        parseInt(expectedTransport.value) +
        parseInt(expectedShopping.value) +
        parseInt(expectedSchool.value) +
        parseInt(expectedRecurring.value) +
        parseInt(expectedOther.value);

    return howMuch;
}

function getTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var forecastTotal = getExpectedTotal();
    //var forecastTotal = 100;
 
    //display the result
    document.getElementById('expectedTotal').innerHTML = "$" + forecastTotal;
 
}

//Error Function
function goBack() {
    window.history.back();
}

//Chart
// Load the Visualization API and the piechart package. 
google.charts.load('current', {'packages':['corechart']}); 
       
// Set a callback to run when the Google Visualization API is loaded. 
google.charts.setOnLoadCallback(drawChart);

function drawChart() { 

    $.ajax({
        url: "http://students.stevens.edu/cne/main/getActualsData",
        dataType: "json",
        success: function (jsonData) {
            var data = new google.visualization.DataTable();
            // set up the columns for expenseCategory and expenseAmount
            data.addColumn('string', 'expenseCategory');
            data.addColumn('number', 'expenseAmount');

            for (var i = 0; i < jsonData.length; i++) {
                data.addRow(
                    [
                        jsonData[i].expenseCategory, 
                        parseInt(jsonData[i].expenseAmount)
                    ]
                );
            }

            var options = {
                title: 'Expense Summary (Actual)',
                is3D: false,
                piehole: 0.4,
            };
            var chart = new google.visualization.PieChart(document.getElementById('actualsChartDiv'));
            chart.draw(data, options);
        }
    });
}

