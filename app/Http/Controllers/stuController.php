<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\students;

class stuController extends Controller
{


    protected $students;

    public function __construct(){
        $this->students = new Students();
                    }



    public function saveData(Request $request)
        {

            //dd($request);

               $request->validate([
                'stuName' => ['required'],
                'stuDOB' => ['required'],
                'stuHome' => ['required']
                ]);
                //dd($request);

            $this->students -> create($request->all());
                        return redirect('Student-Data');

                    }

            public function showData(){
                        $response['students'] = $this->students->all();
                        return view ("/Student-Data")->with($response);
                    }

            public function deleteData($stuId){
                $students = $this->students->find($stuId);
                $students->delete();
                return redirect()->back();
            }

            public function editData($stuId){
                $response['students'] = $this->students->find($stuId);
                return view("Student-Data-update")->with($response);
            }
            public function updateData(Request $request , $stuId){
                $students = $this->students->find($stuId);
                $students->update( array_merge( $students -> toarray() , $request -> toarray() ));
                return redirect('Student-Data');
            }


}
