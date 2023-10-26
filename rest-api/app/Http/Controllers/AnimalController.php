<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ["Kucing", "Ayam", "Ikan"];

    public function index()
    {
        echo "Menampilkan data animals:" ."<br/>";
        foreach ($this->animals as $animal){
            echo $animal."<br/>";
            }
    }

    public function store(Request $request)
    {
        echo "Menambahkan hewan baru: - $request->nama"."<br>";
        array_push($this->animals, $request->nama);
        echo $this->index();
    }

    public function update(Request $request, $id)
    {
        echo "Mengedit data hewan - id $id - $request->nama";
        $this->animals[$id] = $request->nama;
        echo $this->index();
    }

    public function destroy(Request $request, $id)
    {
        echo "Menghapus data hewan - id $id";
        unset($this->animals[$id]);
        echo $this->index();
    }
}
