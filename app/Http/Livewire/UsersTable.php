<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{

    use WithPagination;
    protected $queryString = [
        'search'=>['except'=>''],
        'perPage'=>['except'=>'5'],
        'state'=>['except'=>'3']
    ];
    public $perPage = '5';
    public $search= '';
    public $state=3;



    public function edit($id){
        $user = User::findOrFail($id);
        if ($user->active ==1 ){
            $user->active = 0;
        }
        else{
            $user->active = 1;
        }
        $user->save();
    }
//        return response()->json(['message' => 'User status updated successfully.']);


    public function render()
    {
        return view('livewire.users-table',[
            'users'=> User::where('name','LIKE',"%{$this->search}%")
                ->orwhere('email','LIKE',"%{$this->search}%")
                ->active($this->state)
                ->paginate($this->perPage)
        ]);
    }

    public function clear(){
        $this->search='';
        $this->page = 1;
        $this->perPage = '5';
        $this->state=3;
    }
}
