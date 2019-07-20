<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumView(){
    	return view('sum-view');
    }
    public function sum(Request $request){
    	$data = $request->all();
    	$so1 = $data['so1'];
    	$so2 = $data['so2'];
    	$so3 = $data['so3'];
    	//tinh ket qua tra ve cua cong thuc
    	//1. khai bao ra cac bien co the su dung
    	$x;
    	$x1;
    	$x2;
    	//2. kiem tra a == 0?
    	if ($so1 == 0) {
    		$x = -$so3/$so2;
    		return view ('output', ['ket_qua'=>$x]);
    	//neu a != 0
    	}else {
    		// 3.1 tinh delta	
    		$delta = ($so2*$so2) - 4*$so1*$so3;
    		// 3.1.1 kiem tra delta
    		if ($delta <0) {
    			$x = 'vo nghiem';
    			return view ('output', ['ket_qua'=>$x]);
    		}elseif ($delta == 0) {
    			$x1 = -$so2/(2*$so1);
    			return view ('output', ['ket_qua'=>$x]);
    		}else {
    			$x1 = (-$so2 + sqrt($delta))/(2*$so1);
    			$x2 = (-$so2 - sqrt($delta))/(2*$so1);
    			return view('output', [
    				'ket_qua_1'=>$x1,
    				'ket_qua_2'=>$x2,]);
    		}
    	}
    	
    	return view ('output', ['ket_qua'=>$delta]);
    }
}
