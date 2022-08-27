<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\Usuario;
use App\Models\Permissoes;


class UsuarioController extends Controller
{
    public function preencherDados() {

        return view('formulario');
    }

    public function cadastrar(Request $request) {

        $date = str_replace('.', '-', $request->input('data_cadastro'));
        $date = Carbon::parse($request->data_cadastro)->format('Y-m-d H:i:s');
        $usuario = new Usuario();
        $usuario->nome = $request->input('nome');
        $usuario->telefone = $request->input('telefone');
        $usuario->data_cadastro = $date;
    
        $validator = Validator::make($request->all(), [
            'nome' => ['required'],
            'telefone' => ['required'],
        ], [
            'nome.required' => 'O campo nome é obrigatório',
            'telefone.required' => 'O campo telefone é obrigatório',
        ]);

        if ($validator->fails()) {
            return redirect('formulario')
                ->withErrors($validator)
                ->withInput();
        }

        $usuario->save();

        $permissoes = new Permissoes($request->all());
        $permissoes->usuario_id = $request->input('usuario_id');
        $permissoes->nivel = '1';
        $permissoes->usuario()->associate($usuario);
        $permissoes->save();

        return redirect('/tabelausuarios')->with('CadastroUsuario', '402');

    }

    public function tabela() {

        $usuario = Usuario::all();
        $permissoes = Permissoes::all();

        return view('tabelausuarios', compact('usuario', 'permissoes'));
    }

    public function editar($id) {

        $usuario = Usuario::find($id);

        return view('editarusuario', compact('usuario'));

    }

    public function update(Request $request, $id) {

        $usuario = Usuario::find($id);
        $usuario->nome = $request->input('nome');
        $usuario->telefone = $request->input('telefone');
        $usuario->update();

        return redirect()->route('tabelausuarios')->with('EditarUsuario','402');

    }

    public function destroy($id)
    {
        $delete = Usuario::find($id);
        $delete->delete();
        return redirect()->route('tabelausuarios')->with('ExcluirUsuario', '402');
    }
}
