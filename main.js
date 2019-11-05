let history = [];

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
}

let hist_form_open = false

function toggle_hist_form(add) {
    if (hist_form_open) {

        let cost = document.querySelector('#cost')
        let category = document.querySelector('#category')

        if (add) {
            add_hist(cost.value, category.value)
        }

        cost.value = ''
        category.value = ''
        
        document.querySelector('.add_to_hist').style.height = '0'
        document.querySelector('.add_btn').style.textShadow = '3px 3px 0 #bbb'
        document.querySelector('.add_btn').style.background = '#fff'
    } else {
        document.querySelector('.add_to_hist').style.height = 'calc(100% - 110px)'
        document.querySelector('.add_btn').style.textShadow = '6px 6px 2px #ccc'
        document.querySelector('.add_btn').style.background = '#eee'

    }

    hist_form_open = !hist_form_open
}
