<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use App\Mail\Contacto;

Route::get('/', 'WebController@home')->name('home');
Route::get('contactame', 'WebController@contact')->name('contact');
Route::get('quienes-somos', 'WebController@aboutMe')->name('about');
Route::get('articulo/{slug}', 'WebController@post')->name('post');

Route::post('enviar-mensaje', function(Request $request, Mailer $mailer){

    

    Validator::make($request->all(),[
        'nombre' => 'required',
        'correo' => 'required|email',
        'asunto' => 'required',
        'mensaje' => 'required'
    ])->validate();


    $mailer->to('headjd@gmail.com')
        ->send(new Contacto($request->nombre, $request->correo, $request->asunto, $request->mensaje));

    flash('Tu Mensaje llego con Éxito!. Gracias!')->success();

    return redirect()->back();

})->name('enviarMensaje');

Auth::routes();