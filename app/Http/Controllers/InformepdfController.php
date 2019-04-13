<?php

namespace labquiam\Http\Controllers;

use Illuminate\Http\Request;
use labquiam\Http\Requests;
use labquiam\procedencia;
use labquiam\tipomuestra;
use labquiam\tipoanalisi;
use labquiam\determinacion;
use labquiam\user;
use labquiam\Muestra;
use labquiam\view;
use labquiam;
class InformepdfController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function informepdf()
    {
        return view("informepdf.listado_informe");
    }

    
     public function informeverpdf($id)
    
    {
      $informe =  muestra::findOrFail($id);
      $procedencias = procedencia::all();
      $tipomuestras = tipomuestra::all();
      $tipoanalisis = tipoanalisi::all();
      $determinacion = determinacion::where('muestra_id',$id)->get();

      foreach ($determinacion as $det) 
      {
            $det->datos = json_decode($det->datos);
      }
	 
        // return view('informepdf.informes_por_muestras' , compact('informe'));
        // return view('informepdf.informes_por_muestras')->with('tipoanalisis',$tipoanalisis)->with('tipomuestras',$tipomuestras)->with('procedencias',$procedencias)->with('informe',$informe)->with('determinacion',$determinacion);
        $view= \View::make ('informepdf.informes_por_muestras')->with('tipoanalisis',$tipoanalisis)->with('tipomuestras',$tipomuestras)->with('procedencias',$procedencias)->with('informe',$informe)->with('determinacion',$determinacion)->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('informepdf.informes_por_muestras');
    }

      public function crearPDF($datos,$vistaurl,$tipo)
    {

        $data = $datos;
        $date = date('Y-m-d');
        $view =  \View::make($vistaurl, compact('data', 'date'))->render();
        $pdf = \Labquiam::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte_porpais($tipo){

     $vistaurl="pdf.reporte_por_pais";
     $paises=Muestra::all();
     
     return $this->crearPDF($paises, $vistaurl,$tipo);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
