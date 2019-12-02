<h3>Expense History</h3>

<?php

    $this->table->set_heading('Expense Type', 'Expense Category', 'Expense Frequency', 'Date', 'Name', 'Description', 'Amount');

    foreach ($EIEIO as $ei):
        $this->table->add_row($ei->expenseType, $ei->expenseCategory, $ei->expenseFrequency, $ei->oneTimeExpenseDate, $ei->expenseTitle, $ei->expenseDescription, $ei->expenseAmount);
    endforeach;

    echo $this->table->generate();

?>