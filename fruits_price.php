<?php
    class Fruits{/*クラスを定義する。*/

        private $name = "";
        private $max_price = "";
        private $min_price = "";
        private $quantity = "";
        private $data = [];
        /*初期化 */
        function __construct($name,$max_price,$min_price,$quantity){
            $this->name = $name;
            $this->max_price = $max_price;
            $this->min_price = $min_price;
            $this->quantity = $quantity;
            for ($i = 0; $i < $this->quantity; $i++){
                $this->data[] =  rand($this->min_price,$this->max_price);
            }
        }

        function getMinPrice(){   /*要素から最小値を求める関数 */ 
            return(min($this->data));
        }

        function getMaxPrice(){/*要素から最大値を求める関数 */
            return(max($this->data));
        }

        function getAveragePrice(){/*要素から平均値を求める関数（小数点以下、四捨五入）。 */
            return(round(array_sum($this->data)/$this->quantity));
        }

        function getPrice(){
            echo "{$this->name}の価格\n";
            echo "最高値は、";
            print_r($this->getMaxPrice());
            echo "円です。\n"; 
            echo "最安値は、";
            print_r($this->getMinPrice()); 
            echo "円です。\n"; 
            echo "平均価格は、";
            print_r($this->getAveragePrice());
            echo "円です。（小数点以下、四捨五入）\n"; 
        }
    }

    $peach = new Fruits("桃",300,200,15);
    $peach->getPrice();
    
    
    $strawberry = new Fruits("イチゴ",400,500,15);
    $strawberry->getPrice();
?>