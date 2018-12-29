<?php
    namespace App\Http\Controllers\Order;
    use App\Http\Controllers\Controller;
    use App\Model\Week;

    class Order extends Controller{

        public function order($id){
            //echo $id;die;
            $res = Week::where(['id' => $id])->first()->toArray();
            print_r($res);
            //echo __METHOD__;
        }
    }
?>