<?php

namespace App\Http\Livewire;

use App\Models\Wage;
use Livewire\Component;
use App\Models\Category;

class CreateVacancies extends Component
{
    public $title;
    public $wage;
    public $category;
    public $company;
    public $last_day;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required|string',
        'wage_id' => 'required',
        'category_id' => 'required',
        'company' => 'required',
        'last_day' => 'required',
        'description' => 'required',
        'image' => 'required',
    ];


    public function render()

    {

        $wages = Wage::all();
        $categories = Category::all();

        return view('livewire.create-vacancies', ['wages' => $wages, 'categories' => $categories]);
    }
}
