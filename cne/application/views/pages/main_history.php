<div class="report-container">

    <h3 class="report-title">Expense History</h3>

    <div class="table-responsive">

        <?php

            $template = array(
                'table_open'            => '<table class="table">',

                'thead_open'            => '<thead class="table-thead">',
                'thead_close'           => '</thead>',

                'heading_row_start'     => '<tr>',
                'heading_row_end'       => '</tr>',
                'heading_cell_start'    => '<th>',
                'heading_cell_end'      => '</th>',

                'tbody_open'            => '<tbody>',
                'tbody_close'           => '</tbody>',

                'row_start'             => '<tr>',
                'row_end'               => '</tr>',
                'cell_start'            => '<td>',
                'cell_end'              => '</td>',

                'row_alt_start'         => '<tr>',
                'row_alt_end'           => '</tr>',
                'cell_alt_start'        => '<td>',
                'cell_alt_end'          => '</td>',

                'table_close'           => '</table>'
            );

            $this->table->set_template($template);


            $this->table->set_heading('Expense Type', 'Expense Category', 'Expense Frequency', 'Date', 'Name', 'Description', 'Amount ($)');

            foreach ($EIEIO as $ei):
                $this->table->add_row($ei->expenseType, $ei->expenseCategory, $ei->expenseFrequency, $ei->oneTimeExpenseDate, $ei->expenseTitle, $ei->expenseDescription, $ei->expenseAmount);
            endforeach;

            echo $this->table->generate();

        ?>

    </div>

</div>