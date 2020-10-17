<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class GameController extends Controller
{
//    public function index(Request $request){
////        return view('index');
//        $model = new index();
////        return $request->name;
//        return $model->test();
//    }
//    public function index(){
////        $games = Game::all();
////        return $games;
//        $games = new Game();
//        return $games->getGame();
//    }
    public function index(){
        $games = Game::all();
//        dd($games);
        return view('games')->with('games', $games);
    }
    public function show($id){
        $game = Game::findOrfail($id);

        return view('game')->with('game', $game);
    }
    public function create(){
        return view('create');
    }
    public function save(Request $request){
        $game = new Game($request->all());
//        $game->title = $request->title;
//        $game->game_description = $request->game_description;
        $game->save();
        return redirect()->back();
    }
    public function delete($id){
//        $game = Game::were('id', $id)->get();
        $game  = Game::findOrfail($id);
        $game->delete();
        return redirect()->back();
    }
    public function  edit($gameid){
        return view('edit')->with('gameId', $gameid);
    }
    public function update(Request $request, $gameId){
        $game = Game::findOrfail($gameId);
//        $game = $request->all();
        $game->update($request->all());
//        $game->update([
//            'title'=>$request->title,
//            'game_description'=>$request->game_description,
//            'rating'=>$request->rating,
//
//        ]);
    }


}
