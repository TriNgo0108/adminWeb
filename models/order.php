<?php 
    class Order{
        private string $orderDate;
        private string $product_name;
        private int $price;
        private int $quality;
        private int $total;

        public function __construct(string $orderDate, string $product_name, int $price, int $quality, int $total)
        {
            $this->orderDate = $orderDate;
            $this->product_name = $product_name;
            $this->price = $price;
            $this->quality = $quality;
            $this->total = $total;
        }

        public function getOrderDate(){
            return $this->orderDate;
        }
        public function getProductName(){
            return $this->product_name;
        }
        public function getPrice(){
            return $this->price;
        }
        
        public function getQuality(){
            return $this->quality;
        }
        
        public function getTotal(){
            return $this->total;
        }

    }
?>