<?php
    class Calculator {

        public $result = 0;
        public function reset()
        {
            $this->result = 0;
        }
        public function getResult()
        {
            return $this->result;
        }
        public function add()
        {
            $result = func_get_args();
            foreach($result as $res){
                $this->result += $res;
            }
            return $this->result;
        }
        public function subtract()
        {
            $result = func_get_args();
            foreach($result as $res){
                $this->result -= $res;
            }
            return $this->result;
        }
        public function divide()
        {
            $result = func_get_args();
            $this->result = $result[0] / $result[1];
            return $this->result;
        }
        public function multiply()
        {
            $result = func_get_args();
            $this->result = $result[0]  * $result[1];
            return $this->result;
        }

    }


