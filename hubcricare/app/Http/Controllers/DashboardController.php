<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        $dataAtual = Carbon::now(); // calcualr idade atual
        $dia = Carbon::now()->day;
        //dd($dia);
        $mes = Carbon::now()->month;
        //dd($mes);
        $ano = Carbon::now()->year;

        $aniversariantesDoDia = $request->input( 'aniversariantesDoDia', null);

        $aniversariantesDoMes = Funcionario::whereMonth('dt_nasc', Carbon::now()->month)->when( $aniversariantesDoDia, function ($query) use( $aniversariantesDoDia) {
            return $query->whereDay('dt_nasc',$aniversariantesDoDia);
        })->orderByRaw('day(dt_nasc) asc')->get();

        $aniversariante = Funcionario::whereDay('dt_nasc', $dia)->whereMonth('dt_nasc', $mes)->orderByRaw('day(dt_nasc) asc')->get();
        /* dd($aniversariante); */

        $ok = Carbon::parse("$dia-$mes-$ano");
        //dd($ok);

        return view('admin.home', compact(['user', 'aniversariantesDoMes', 'dataAtual', 'ano', 'ok', 'dia', 'mes', 'aniversariante']));
    }
}
