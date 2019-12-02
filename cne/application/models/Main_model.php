<?php

class Main_model extends CI_Model {

    /*
   function __construct()
    {
          parent::__construct();
    }
    */

    function validate()
    {

        $sql = "SELECT * FROM cne.membership WHERE username = '" . $this->input->post('username') . "'" . " AND password = '" . md5($this->input->post('password')) . "'";
        
        $query = $this->db->query($sql);
        
        if($query->num_rows() == 1)
        {
            return true;
        }
        
    }
    
    function create_member()
    {      
        $new_member_insert_data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email_address' => $this->input->post('email_address'),         
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))                       
        );
        
        $insert = $this->db->insert('membership', $new_member_insert_data);
        return $insert;
    }

    function create_income()
    {     
        $new_income_insert_data = array(
            'username' => $_SESSION['username'],
            'incomeType' => $this->input->post('incomeType'),      
            'incomeSource' => $this->input->post('incomeSource'), 
            'incomeFrequency' => $this->input->post('incomeFrequency'), 
            'incomeStartingDate' => $this->input->post('incomeStartingDate'), 
            'incomeAmount' => $this->input->post('incomeAmount')                
        );
        
        $insert = $this->db->insert('main_income', $new_income_insert_data);
        return $insert;
    }

    function create_expenses()
    {       
        $new_expenses_insert_data = array(
            'username' => $_SESSION['username'],
            'expenseType' => $this->input->post('expenseType'),
            'expenseCategory' => $this->input->post('expenseCategory'), 
            'expenseFrequency' => $this->input->post('expenseFrequency'), 
            'oneTimeExpenseDate' => $this->input->post('oneTimeExpenseDate'), 
            'expenseAmount' => $this->input->post('expenseAmount'), 
            'expenseTitle' => $this->input->post('expenseTitle'), 
            'expenseDescription' => $this->input->post('expenseDescription')                
        );
        
        $insert = $this->db->insert('main_expenses', $new_expenses_insert_data);
        return $insert;
    }

    function create_goals()
    {      
        $new_goals_insert_data = array(
            'username' => $_SESSION['username'],
            'goalType' => $this->input->post('goalType'),
            'goalTitle' => $this->input->post('goalTitle'),                 
            'goalAmount' => $this->input->post('goalAmount') 
        );
        
        $insert = $this->db->insert('main_goals', $new_goals_insert_data);
        return $insert;
    }

    function create_forecast()
    {      
        $new_forecast_insert_data = array(
            'username' => $_SESSION['username'],
            'expectedIncome' => $this->input->post('expectedIncome'),
            'expectedFood' => $this->input->post('expectedFood'), 
            'expectedEntertainment' => $this->input->post('expectedEntertainment'), 
            'expectedTransport' => $this->input->post('expectedTransport'), 
            'expectedShopping' => $this->input->post('expectedShopping'), 
            'expectedSchool' => $this->input->post('expectedSchool'), 
            'expectedRecurring' => $this->input->post('expectedRecurring'), 
            'expectedOther' => $this->input->post('expectedOther'),                 
        );
        
        $insert = $this->db->insert('main_forecast', $new_forecast_insert_data);
        return $insert;
    }

    function getActualsDataFromDatabase () {
        $sql = "SELECT expenseCategory, CAST(sum(expenseAmount) AS INT) AS expenseAmount FROM cne.main_expenses WHERE username = '" . $_SESSION['username'] . "' GROUP BY expenseCategory";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return FALSE;
        }
    }

    function getExpenseHistoryData () {
        $sql = "SELECT `username`, `expenseType`, `expenseCategory`, `expenseFrequency`, `oneTimeExpenseDate`, `expenseTitle`, `expenseDescription`, `expenseAmount` FROM `main_expenses`" . " WHERE username = '" . $_SESSION['username'] . "'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else {
            return FALSE;
        }
    }

    function getIncomeData () {
        $sql = "SELECT cast(sum(incomeAmount) as float) as incomeAmount FROM main_income" . " WHERE username = '" . $_SESSION['username'] . "'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->row()->incomeAmount;
        }
        else {
            return FALSE;
        }
    }    

    function getExpenseData () {
        $sql = "SELECT sum(expenseAmount) AS expenseAmount FROM main_expenses" . " WHERE username = '" . $_SESSION['username'] . "'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            return $query->row()->expenseAmount;
        }
        else {
            return FALSE;
        }
    }  

    function getForecastData () {
        $sql = "SELECT sum(expectedIncome) - (sum(expectedFood) + sum(expectedEntertainment) + sum(expectedTransport) + sum(expectedShopping) + sum(expectedSchool) + sum(expectedRecurring) + sum(expectedOther)) AS forecast FROM cne.main_forecast" . " WHERE username = '" . $_SESSION['username'] . "'";
  
        $query = $this->db->query($sql);
        
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->forecast;
        }
        else {
            return FALSE;
        }
    }  

    function getFirstName () {
        $sql = "SELECT DISTINCT first_name AS firstName FROM cne.membership" . " WHERE username = '" . $_SESSION['username'] . "'";

        $query = $this->db->query($sql);

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->firstName;
        }
        else {
            return FALSE;
        }
    }      

}