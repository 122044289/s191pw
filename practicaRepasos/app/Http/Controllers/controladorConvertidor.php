
    <?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class controladorConvertidor extends Controller
    {
        public function inicio(){
            return view('inicio');
        }
        public function repaso1(){
            return view('repaso1');
        }
        public function convertidor(Request $request){
            $entrada = $request->input('entrada');
            $salida = $request->input('salida');
            $cantidad = $request->input('cantidad');
            $resultado = 0;
    
            switch($salida){
                case 'MB-GB':
                    $resultado = $entrada / 1024;
                    break;
                case 'GB-MB':
                    $resultado = $entrada * 1024;
                    break;
                case 'GB.TB':
                    $resultado = $entrada / 1024;
                    break;
                case 'TB-GB':
                    $resultado = $entrada * 1024;
                    break;
    
                default:
                    echo  "No se ha seleccionado una opción válida";
                    exit;
            }
            return $resultado;
        }
    }

}
