<?php

namespace App\Excel;

use App\Models\ScholarshipChild;
use Illuminate\Support\Collection; 
use Maatwebsite\Excel\Concerns\ToCollection;
 
use App\Models\ScholarshipMeb;
use App\Models\ScholarshipUser;
use Carbon\Carbon; 

class End implements ToCollection
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function collection(Collection $rows)
    {

        $rows->map(function ($row){
              
            
            $insertuser = [
                'scholarship_id' => 1, 
                'user_id' => 0,
                'tc'=> $row[5], 
                'parent' =>  $row[7] ?? null, 
                'name' => $row[6],
                'surname' => null,
                'iban' =>   null, 
                'phone' => $row[9] ?? null
            ];    
           
            $createduser =  ScholarshipUser::create($insertuser);  
            
            $insertMeb = [
                'order_no' => 0, 
                'student_no' => 0, 
                'tc' => $row[1],  
                'afet' => 1,  
                'name' => $row[2],
                'class' => 0,
                'school' =>$row[3],
                'created_by' => 1
            ];  
            
            $new_meb = ScholarshipMeb::create($insertMeb); 
            
            $insertchild = [
                'suser_id' => $createduser->id,
                'meb_id'=> $new_meb->id, 
                'created_by'=> 0, 
                'status_2'=> 100, 
                'school' => 0, 
                'platform' => 9,
            ];     
    
            ScholarshipChild::create($insertchild);
           
        });
       
      
    }
}