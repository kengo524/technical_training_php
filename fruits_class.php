<?php
    class Fruits{/*クラスを定義する。*/

        private $name = "";
        private $max_price = "";
        private $min_price = "";
        private $quantity = "";

        public function __construct($name,$max_price,$min_price,$quantity){/*初期化 */
            $this->name = $name;
            $this->max_price = $max_price;
            $this->min_price = $min_price;
            $this->quantity = $quantity;
        }
        
        public function getPrices(){/*指定範囲内でのランダム生成された価格の配列を作成 */
            for ($i = 0; $i < $this->quantity; $i++){
                $prices[] =  rand($this->min_price,$this->max_price);
            };
            return $prices;
        }

        public function getMinPrice(){/*要素から最小値を求める関数 */ 
            return(min($this->getPrices()));
        }

        public function getMaxPrice(){/*要素から最大値を求める関数 */
            return(max($this->getPrices()));
        }

        public function getAveragePrice(){/*要素から平均値を求める関数（小数点以下、四捨五入）。 */
            return(round(array_sum($this->getPrices())/$this->quantity));
        }

        public function printStatistics(){/*統計表示を実施 */
            echo "{$this->name}の価格";
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