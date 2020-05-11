<?php
    class employee {
        protected $fname;
        protected $lname;

        public function __construct($firstName,$lastName)
        {
            $this->fname = $firstName;
            $this->lname = $lastName;
        }
        public function getFullName()
        {
            echo "<br>Full Name: ". $this->fname." ". $this->lname;
        }

    }


    class dept extends employee{
        private $deptNo;
        private $deptName;
        public function __construct($firstName,$lastName,$deptNumber,$departName)
        {
            parent::__construct($firstName,$lastName);
            $this->deptNo = $deptNumber;
            $this->deptName = $departName;
        }
        public function setDeptNo($deptNo){
         $this->deptNo = $deptNo;
      }
      public function getDeptNo(){
         return  $this->deptNo;
      }
      public function setDeptName($deptName){
         $this->deptName = $deptName;
      }
      public function getDeptName(){
         return  $this->deptName;
      }
        public function getDept()
        {
            echo "<br> Dept No: ".$this->deptNo." Dept Name: ".$this->deptName;
        }

    }
    $objDept = new dept("Wiil", "Shkodra", 5, "FIEK");
    $objDept->getFullName();
    $objDept->getDept();
?>
