<?php
    class Fruits{/*クラスを定義する。*/

        private $names = "";
        private $max_price = "";
        private $min_price = "";
        private $quantity = "";
        private $prices = [];

        function __construct($names,$max_price,$min_price,$quantity){/*初期化 */
            $this->names = $names;
            $this->max_price = $max_price;
            $this->min_price = $min_price;
            $this->quantity = $quantity;
            for ($i = 0; $i < $this->quantity; $i++){
                $this->prices[] =  rand($this->min_price,$this->max_price);
            }
        }

        function getMinPrice(){   /*要素から最小値を求める関数 */ 
            return(min($this->prices));
        }

        function getMaxPrice(){/*要素から最大値を求める関数 */
            return(max($this->prices));
        }

        function getAveragePrice(){/*要素から平均値を求める関数（小数点以下、四捨五入）。 */
            return(round(array_sum($this->prices)/$this->quantity));
        }

        function printStatistics(){
            echo "{$this->names}の価格";
            echo "<br />";
            echo "最高値は、";
            print_r($this->getMaxPrice());
            echo "円です。";
            echo "<br />"; 
            echo "最安値は、";
            print_r($this->getMinPrice()); 
            echo "円です。";
            echo "<br />"; 
            echo "平均価格は、";
            print_r($this->getAveragePrice());
            echo "円です。（小数点以下、四捨五入）";
            echo "<br />"; 
        }
    }
?>