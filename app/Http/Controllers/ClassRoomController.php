<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
    public function index(){
    	$classes = ClassRoom::all();
    	return view('admin.class', ['classes' => $classes]);

    }
    public function createForm(){
    	return view('admin.add_class');
    }
    public function create(ClassRoomRequest $request)
            {
            // $this->validate($request, [
            // 'name' => 'required|string|min:8',
            // 'teachername' => 'required|string|min:5|max:32',
            // 'major' => 'required|string',
            // 'maxstudent' => 'nullable|numeric'
            // ]);
            $data = $request->except('_token');
            
            //lưu dữ liệu vào bảng class
            // $classRoom = new classRoom();
            // //gán dữ liệu cho các thuộc tính
            // $classRoom->name = $data['name'];
            // $classRoom->teacher_name = $data['teachername'];
            // $classRoom->major = $data['major'];
            // $classRoom->max_student = $data['maxstudent'];
            // $classRoom->save();
            // cách 2 
            classRoom::create($data);
            //CÁCH 3 
            // $mutidata = [
            //       $data,
            //       $data,
            //       $data
            // ];
            //    classRoom::insert($mutidata);
            return $this->index();
   }
   function remove($class)
   {
      classRoom::destroy($class);
      return $this->index();
   }
    public function editform(classRoom $class){
     // dDAT TEN THAM SOS TRUFNG S THAM SỐ Ở ROUTE KÈM THEO CLASSROOM THÌ TRẢ VỀ LUÔN CLASSROOM CÓ ID MÀ K CẦN FIND
       return view('admin.add_class', ['class' => $class]);
   }
     public function update(ClassRoomRequest $request)
     {
         // láy ra dữ liệu cần update
      $data = $request->except('_token' , 'id');
      
      // tìm ra dữ liệu có id truyền vào
       $classRoom = classRoom::find($request->id);
      // $classRoom = classRoom::where('id', "=" ,$request->id )->first();
      $classRoom->update($data);
      return $this->index();
     }
}
