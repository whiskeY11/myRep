<?php

namespace App\Http\Controllers;

use App\TodoItem;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function add($nazov, $popis) {
        $item = new TodoItem();
        $item->nazov = $nazov;
        $item->popis = $popis;
        $item->save();
        echo "TODO Item pridaný:<br/> Názov = ".$nazov.", popis = ".$popis;
    }

    public function remove($id) {
        $item = TodoItem::find($id);
        $item->delete();
        echo "TODO Item s id = ".$id." vymazaný.";
    }

    public function edit($id, $nazov, $popis) {
        $item = TodoItem::find($id);
        $item->nazov = $nazov;
        $item->popis = $popis;
        $item->save();
        echo "TODO Item s id = ".$id." editovaný:<br/> Názov = ".$nazov.", popis = ".$popis;
    }

    public function getList() {
        $items = TodoItem::all();
        echo "Zoznam udalostí:<br><br>";
        $index = 1;
        foreach ($items as $row) {
            echo $index.". Udalosť: ID = ".$row->id.", Názov = ".$row->nazov.", popis = ".$row->popis.".<br>";
            $index++;
        }
    }
}
