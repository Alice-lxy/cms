<?php
    namespace App\Http\Controllers\Order;
    use App\Http\Controllers\Controller;
    use App\Model\Week;

    class Order extends Controller{

        public function order(){
            //echo $id;die;
            /*$res = Week::where(['id' => $id])->first()->toArray();
            print_r($res);*/
            //echo __METHOD__;
            $res = Week::all();
            $res = [
                'res'=>$res,
            ];
            return view('order.list',$res);
        }

        /** 增*/
        public function insert(){
            $data = [
                'name' => '示范户',
                'age' =>17
            ];
            $res = Week::insert($data);
            print_r($res);
        }

        /** 删*/
        public function delete($id){
            $res = Week::where(['id' => $id])->delete();
            print_r($res);
        }

        /** 改*/
        public function update($id){
            $where = [
                'id' => $id
            ];
            $data = [
                'name'=> 'youth',
                'age' => 12
            ];
            $arr = Week::where($where)->update($data);
            print_r($arr);
        }
    }
?>