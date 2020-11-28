<?php 
    class Product{
        private int $pid;
        private $pTid;
        private string $imageURL;
        private string $product_name;
        private $price;
        private $about;
        public function __construct(int $pid, $pTid=null, string $imageURL, string $product_name, $price = null, $about=null)
        {
            $this->pid = $pid;
            $this->pTid = $pTid;
            $this->imageURL = $imageURL;
            $this->product_name = $product_name;
            $this->price = $price;
            $this->about = $about;
        }
        public function getPid(){
            return $this->pid;
        }
        public function getpTid(){
            return $this->pTid;
        }
        public function getImageURL(){
            return $this->imageURL;
        }
        public function getProductName(){
            return $this->product_name;
        }
        public function getPrice(){
            return $this->price;
        }
        public function getAbout(){
            return $this->about;
        }
    }
?>