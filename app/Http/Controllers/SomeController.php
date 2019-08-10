<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SomeController extends Controller
{
    public function sumView(){
    	return view('some-view');
    }
    public function tong(Request $request){
    	$data = $request->all();
    	$N1 = $data['n_1'];
    	$N2 = $data['n_2'];
    	$N3 = $data['n_3'];
    	$x;
    	$x2;
    	$x3;

    	if ($N1 = 0 ) {
    		$x = -$N3/$N2;
    	}
    	else {
    		$denta = ($N2*$N2) - 4*$N1*$N2;
    		if($denta < 0) {
    			$x= 'vô nghiệm';
    		}
    		else if ($denta == 0){
    			$x= -$N2/2*$N1;
    		}
    		else {
    			$x2 = (-$N2*$N2 + sqrt($delta)/(2*$N1));
    			$x2 = (-$N2*$N2 - sqrt($delta)/(2*$N1));
    			return view('output', ['ket_qua1'=> $x1,
    									'ket_qua2'=> $x2
    									] );
    		}
    	}
    	
    	// dd ($request->all()) ;
    }
}
