<?php
    class studenti {
        protected $emri;
        protected $mbiemri;

        public function __construct($emriJuaj,$mbiemriJuaj)
        {
            $this->emri = $emriJuaj;
            $this->mbiemri = $mbiemriJuaj;
        }
        public function EmriPlote()
        {
            echo "<br>Full Name: ". $this->emri." ". $this->mbiemri;
        }
     
    }


    class departament extends studenti{
        private $numriDepartamentit;
        private $emriDepartamentit;
        public function __construct($emriJuaj,$mbiemriJuaj,$nrOfDepartment,$nameOfDepartment)
        {
            parent::__construct($emriJuaj,$mbiemriJuaj);
            $this->numriDepartamentit = $nrOfDepartment;
            $this->emriDepartamentit = $nameOfDepartment;
        }
        public function setDeptNo($numriDepartamentit){
         $this->numriDepartamentit = $numriDepartamentit;
        }
        public function getDeptNo(){
            return  $this->numriDepartamentit;
        }
        public function setDeptName($emriDepartamentit){
            $this->emriDepartamentit = $emriDepartamentit;
        }
        public function getDeptName(){
            return  $this->emriDepartamentit;
        }
        public function getDept()
        {
            echo "<br> Dept No:".$this->numriDepartamentit."   Dept Name: ".$this->emriDepartamentit;
        }
        public function __destruct() 
        { 
            echo "\t2020"; 
        }   

    }

    $objDept = new departament("Computer", "Engineering", 5, "FIEK");
    $objDept->EmriPlote();
    $objDept->getDept();
    $objDept->__destruct();
    
?>
