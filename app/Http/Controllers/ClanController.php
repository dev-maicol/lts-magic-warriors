<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\Controls;
use Illuminate\Support\Carbon;

// $URL_BASE = "https://cocproxy.royaleapi.dev";

class ClanController extends Controller
{

    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clans = Clan::all();
        return view('clans.index', compact('clans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clans.create');
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
        $request->validate([
            'tag' => 'required'
        ]);

        // Verificar que no inicie con #
        $tag = $request->tag;
        // Verificar si la etiqueta inicia con #
        if (Str::startsWith($tag, '#')) {
            // Eliminar el caracter # y actualizar el valor en el request
            $request->merge(['tag' => substr($tag, 1)]);
        }
        // Consultar api clash of clans para obtener el nombre del clan
        // URL de la API externa
        $url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23'.$request->tag;

        // Headers que deseas incluir en la solicitud
        $headers = [
            'Authorization' => 'Bearer '.env('API_KEY'),
            'Content-Type' => 'application/json',
            // Agrega más headers según sea necesario
        ];

        // Realizar la solicitud GET a la API externa con headers
        $response = Http::withHeaders($headers)->get($url);

        // Verificar si la solicitud fue exitosa (código de respuesta 2xx)
        if ($response->successful()) {
            // Obtener los datos de la respuesta (generalmente en formato JSON)
            $datos = $response->json();
            // dd($datos['name']);

            // Agregar un valor al Request
            $request->merge(['name' => $datos['name']]);

            // Procesar los datos según tus necesidades
            Clan::create($request->all());
            // Establecer un mensaje en la sesión
            session()->flash('success', 'Se guardó correctamente.');
            return redirect()->route('clans.index');

            // return response()->json($datos);
        } else {
            // La solicitud no fue exitosa, manejar el error
            $statusCode = $response->status();
            $mensajeError = $response->body();

            session()->flash('error', 'Error al guardar.');
            // return response()->json(['error' => $mensajeError], $statusCode);
            return redirect()->route('clans.index');
        }

        // Clan::create($request->all());
        // return redirect()->route('clans.index');
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
    public function edit(Clan $clan)
    {
        //
        return view('clans.edit', compact('clan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clan $clan)
    {
        //
        $request->validate([
            'tag' => 'required'
        ]);
        // Volvemos a consultar el nombre del clan
        $clan->update($request->all());
        return redirect()->route('clan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clan $clan)
    {
        //
        // Verificar si el campo 'state' es 1 y cambiarlo a 0, o viceversa.
        $clan->state = $clan->state == 1 ? 0 : 1;

        // Guardar el modelo actualizado en la base de datos.
        $clan->save();

        // Establecer un mensaje en la sesión
        session()->flash('success', 'Se cambió el estado correctamente.');

        // return redirect()->route('positions.index');
        // Devolver una respuesta JSON indicando el resultado de la eliminación
        return response()->json(['message' => 'Se cambió el estado correctamente.']);
    }

    // Controlador war guerra
    public function war($tag)
    {
        // Tu lógica para la ruta clans/war/{tag}
        // Puedes acceder al valor del parámetro $tag aquí
        $url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23' .$tag. '/currentwar';

        // Headers que deseas incluir en la solicitud
        $headers = [
            'Authorization' => 'Bearer '.env('API_KEY'),
            'Content-Type' => 'application/json',
            // Agrega más headers según sea necesario
        ];

        // Realizar la solicitud GET a la API externa con headers
        $response = Http::withHeaders($headers)->get($url);

        // Verificar si la solicitud fue exitosa (código de respuesta 2xx)
        if ($response->successful()) {
            // Obtener los datos de la respuesta (generalmente en formato JSON)
            $datos = $response->json();
            // dd($datos);
            
            // session()->flash('success', 'Se guardó correctamente*****.');
            return view('clans.war', compact('datos'));

            // return response()->json($datos);
        } else {
            // La solicitud no fue exitosa, manejar el error
            $statusCode = $response->status();
            $mensajeError = $response->body();
            // dd($response);

            // session()->flash('error', 'Error al guardar.');
            // return response()->json(['error' => $mensajeError], $statusCode);
            return view('clans.war', compact('statusCode','mensajeError'));
            // return redirect()->route('clans.index');
        }

        return view('clans.war', compact(''));
    }

    // Controlador capital del clan
    public function capital($tag, $name)
    {
        // Tu lógica para la ruta clans/war/{tag}
        // Puedes acceder al valor del parámetro $tag aquí
        $url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23' .$tag. '/capitalraidseasons?limit=1';

        // Headers que deseas incluir en la solicitud
        $headers = [
            'Authorization' => 'Bearer '.env('API_KEY'),
            'Content-Type' => 'application/json',
            // Agrega más headers según sea necesario
        ];

        // Realizar la solicitud GET a la API externa con headers
        $response = Http::withHeaders($headers)->get($url);

        // Verificar si la solicitud fue exitosa (código de respuesta 2xx)
        if ($response->successful()) {
            // Obtener los datos de la respuesta (generalmente en formato JSON)
            $datos = $response->json();
            
            $datos = $datos['items'][0];
            // dd($datos);
            // session()->flash('success', 'Se guardó correctamente*****.');
            return view('clans.capital', compact('datos', 'name'));

            // return response()->json($datos);
        } else {
            // La solicitud no fue exitosa, manejar el error
            $statusCode = $response->status();
            $mensajeError = $response->body();
            // dd($response);

            // session()->flash('error', 'Error al guardar.');
            // return response()->json(['error' => $mensajeError], $statusCode);
            return view('clans.capital', compact('statusCode','mensajeError'));
            // return redirect()->route('clans.index');
        }

        // return view('clans.capital', compact(''));
    }

    // controlador para mostrar informacion de la cwl en la vista general o public
    public function capitalPublic(Request $request)
    {

        // También puedes obtener solo la fecha actual sin la hora
        $today = Carbon::now()->format('Y-m-d');
        $limit = 50;
        // return $today;
        $registers = Controls::where('date', $today)->count();
        if( $registers >= $limit)
        {
            $totalDay = $registers;
            $error[0] = "Limit reached!";
            $error[1] = "Sorry, the limit of queries per day has been reached.";
            return view('public.informationCapital', compact('error', 'limit', 'totalDay'));
        }
        // return $registers;
        // id obtiene el id del clan seleccionado
        $id = $request->tag_clan_capital;
        $clan = Clan::where('id', $id)->where('state', 1)->first();
        // return $clan->tag;
        $output = "";
        if($clan){
            // $output = "ok";
            // consultamos la capital
            $tag = $clan->tag;
            $url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23' . $tag . "/capitalraidseasons?limit=1";
            $headers = [
                'Authorization' => 'Bearer '.env('API_KEY'),
                'Content-Type' => 'application/json',
            ];
            $response = Http::withHeaders($headers)->get($url);
            if ($response->successful()) {
              $datos = $response->json()['items']['0'];
              // return $datos;
              $members = $datos['members'];
              $capital = [];
              // return $members;
              // $datos = (object)$datos;
              foreach ($datos as $clave => $valor) {
                if(is_array($valor)){
                  // echo 'arrayyy:::';
                }else{
                  // echo $clave . ': ' . $valor . '<br>';
                  $capital[$clave] = $valor;
                }
              }
            $membersCollection = collect($members);

            // Ordenar la colección por la columna "capitalResourcesLooted" de mayor a menor
            $sortedMembers = $membersCollection->sortByDesc('capitalResourcesLooted');
            
            // $newInformation = [
            //     'id_clan' => $clan->id,
            //     'action' => 'capital',
            //     'date' => $today
            // ];
            // Actualiza el objeto Request con los nuevos datos
            $request->merge([
                'id_clan' => $clan->id,
                'action' => 'capital',
                'date' => $today
            ]);
            Controls::create($request->all());
            $totalDay = Controls::where('date', $today)->count();
            // Combina los datos actuales con los nuevos datos
            // $nuevosDatosCombinados = array_merge($datosActuales, $nuevosDatos);

            //   return $sortedMembers;
              return view('public.informationCapital', compact('sortedMembers', 'capital', 'clan', 'totalDay', 'limit'));
              // echo $members;
              // return $datos;
            } else {
              $statusCode = $response->status();
              $mensajeError = $response->body();
              $error = [];
              $error[0] = $statusCode;
              $error[1] = $mensajeError;
              $totalDay = Controls::where('date', $today)->count();
              return view('public.informationCapital', compact('error', 'totalDay', 'limit'));
            }
        }else{
            // $output = "no";
            $error[0] = "Clan error!";
            $error[1] = "Error when searching for clan information";
            $totalDay = Controls::where('date', $today)->count();
            return view('public.informationCapital', compact('error', 'totalDay', 'limit'));
        }
        // return $output;
    }

    // controlador para mostrar informacion de la cwl en la vista general o public
    public function cwlPublic(Request $request)
    {
        // También puedes obtener solo la fecha actual sin la hora
        $today = Carbon::now()->format('Y-m-d');
        $limit = 50;
        // return $today;
        $registers = Controls::where('date', $today)->count();
        if( $registers >= $limit)
        {
            $totalDay = $registers;
            $error[0] = "Limit reached!";
            $error[1] = "Sorry, the limit of queries per day has been reached.";
            return view('public.informationCWL', compact('error', 'limit', 'totalDay'));
        }
        // id obtiene el id del clan seleccionado
        $id = $request->tag_clan_cwl;
        $day = $request->dayCWL;
        // return $day;
        $clan = Clan::where('id', $id)->where('state', 1)->first();
        // return $clan->tag;
        $output = "";
        if($clan){
            // $output = "ok";
            // consultamos la capital
            $tag = $clan->tag;
            $url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23' . $tag . "/currentwar/leaguegroup";
            $headers = [
                'Authorization' => 'Bearer '.env('API_KEY'),
                'Content-Type' => 'application/json',
            ];
            $response = Http::withHeaders($headers)->get($url);
            // return $response;
            // Convertir la respuesta a un arreglo asociativo
            $data = $response->json();
            if( isset($data['reason']) && $data['reason'] === 'notFound')
            {
                $error[0] = "CWL error!";
                $error[1] = "The clan has not started CWL";
                $totalDay = Controls::where('date', $today)->count();
                return view('public.informationCWL', compact('error', 'totalDay', 'limit'));
            }
            $rounds = $response['rounds'][$day-1];
            if($rounds['warTags'][0] == '#0')
            {
                // return "No existe guerra";
                $error[0] = "CWL error!";
                $error[1] = "The war sought does not exist";
                $totalDay = Controls::where('date', $today)->count();
                return view('public.informationCWL', compact('error', 'totalDay', 'limit'));
            }
            // $tagsWars = "";
            foreach($rounds['warTags'] as $tagWar)
            {
                // $tagsWars = $tagsWars . " ___ " . $tagWar;
                $urlWar = "https://cocproxy.royaleapi.dev" . '/v1/clanwarleagues/wars/%23' . substr($tagWar, 1);
                $responseWar = Http::withHeaders($headers)->get($urlWar);
                // return $responseWar;
                // return $responseWar['clan']['tag'];
                if(substr($responseWar['clan']['tag'], 1) == $clan->tag || substr($responseWar['opponent']['tag'], 1) == $clan->tag)
                {
                    // se encontro la guerra donde esta el clan buscado por el tag
                    // return $responseWar->json();
                    $data = $responseWar->json();
                    // return $data;
                    Controls::create($request->all());
                    $totalDay = Controls::where('date', $today)->count();
                    return view('public.informationCWL', compact('data', 'clan', 'day', 'totalDay', 'limit'));
                }
                // return "No se encontro el clan";
                // return $responseWar->json();
            }
            // return "No se encontro el clan";
            // $error[0] = "Clan error!";
            // $error[1] = "Error when searching for clan information CWL war";
            // return view('public.informationCWL', compact('error'));
            // return $tagsWars;
            // return $rounds['warTags'][0];
            // return $response->json();
            // return $day;
            // if ($response->successful()) 
            // {
            //   $datos = $response->json()['items']['0'];
            //   $members = $datos['members'];
            //   $capital = [];
            //   foreach ($datos as $clave => $valor) {
            //     if(is_array($valor)){
            //     }else{
            //       $capital[$clave] = $valor;
            //     }
            //   }
            //     $membersCollection = collect($members);

            //     $sortedMembers = $membersCollection->sortByDesc('capitalResourcesLooted');

            //   return view('public.informationCapital', compact('sortedMembers', 'capital', 'clan'));
            // } else 
            // {
            //   $statusCode = $response->status();
            //   $mensajeError = $response->body();
            //   $error = [];
            //   $error[0] = $statusCode;
            //   $error[1] = $mensajeError;
            //   return view('public.informationCapital', compact('error'));
            // }
        }else{
            // $output = "no";
            $error[0] = "Clan error!";
            $error[1] = "Error when searching for clan information";
            return view('public.informationCWL', compact('error'));
        }
        // return $output;
    }


    // controlador para mostrar informacion de la war en la vista general o public
    public function warPublic(Request $request)
    {
        // También puedes obtener solo la fecha actual sin la hora
        $today = Carbon::now()->format('Y-m-d');
        $limit = 50;
        // return $today;
        $registers = Controls::where('date', $today)->count();
        if( $registers >= $limit)
        {
            $totalDay = $registers;
            $error[0] = "Limit reached!";
            $error[1] = "Sorry, the limit of queries per day has been reached.";
            return view('public.informationWar', compact('error', 'limit', 'totalDay'));
        }

        // id obtiene el id del clan seleccionado
        $id = $request->tag_clan_war;
        // $day = $request->dayCWL;
        // return $day;
        $clan = Clan::where('id', $id)->where('state', 1)->first();
        // return $clan;
        $output = "";
        if($clan){
            // $output = "ok";
            // consultamos la capital
            $tag = $clan->tag;
            $url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23' . $tag . "/currentwar";
            $headers = [
                'Authorization' => 'Bearer '.env('API_KEY'),
                'Content-Type' => 'application/json',
            ];
            $response = Http::withHeaders($headers)->get($url);
            // return $response;
            // Convertir la respuesta a un arreglo asociativo
            $data = $response->json();
            // return $data;
            if( isset($data['reason']) && $data['reason'] === 'notFound')
            {
                $error[0] = "War error!";
                $error[1] = "The clan has not started WAR";
                $totalDay = Controls::where('date', $today)->count();
                return view('public.informationWar', compact('error', 'totalDay', 'limit'));
            }
            if( isset($data['reason']))
            {
                $error[0] = "War error!";
                $error[1] = $data['reason'];
                $totalDay = Controls::where('date', $today)->count();
                return view('public.informationWar', compact('error', 'totalDay', 'limit'));
            }
            if( $data['state'] == 'notInWar')
            {
                $error[0] = "War error!";
                $error[1] = "The clan has not started WAR";
                $totalDay = Controls::where('date', $today)->count();
                return view('public.informationWar', compact('error', 'totalDay', 'limit'));
            }


            $request->merge([
                'id_clan' => $clan->id,
                'action' => 'capital',
                'date' => $today
            ]);
            Controls::create($request->all());
            $totalDay = Controls::where('date', $today)->count();
            
            return view('public.informationWar', compact('data', 'clan', 'totalDay', 'limit'));
            
            // return "No se encontro el clan";
            // $error[0] = "Clan error!";
            // $error[1] = "Error when searching for clan information war";
            // return view('public.informationWar', compact('error'));
            // return $tagsWars;
            // return $rounds['warTags'][0];
            // return $response->json();
            // return $day;
            // if ($response->successful()) 
            // {
            //   $datos = $response->json()['items']['0'];
            //   $members = $datos['members'];
            //   $capital = [];
            //   foreach ($datos as $clave => $valor) {
            //     if(is_array($valor)){
            //     }else{
            //       $capital[$clave] = $valor;
            //     }
            //   }
            //     $membersCollection = collect($members);

            //     $sortedMembers = $membersCollection->sortByDesc('capitalResourcesLooted');

            //   return view('public.informationCapital', compact('sortedMembers', 'capital', 'clan'));
            // } else 
            // {
            //   $statusCode = $response->status();
            //   $mensajeError = $response->body();
            //   $error = [];
            //   $error[0] = $statusCode;
            //   $error[1] = $mensajeError;
            //   return view('public.informationCapital', compact('error'));
            // }
        }else{
            // $output = "no";
            $error[0] = "Clan error!";
            $error[1] = "Error when searching for clan information";
            $totalDay = Controls::where('date', $today)->count();
            return view('public.informationCWL', compact('error', 'totalDay', 'limit'));
        }
        // return $output;
    }
}
