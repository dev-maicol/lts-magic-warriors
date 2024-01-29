<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Clan;

use Illuminate\Support\Facades\Http;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        //
        $request->validate([
            'id_user' => 'required',
            'id_clan' => 'required',
        ]);

        $clan = Clan::where('id', $request->id_clan)->where('state', 1)->first();
        $tag = $clan->tag;

        $url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23' . $tag . "/members";
        $headers = [
            'Authorization' => 'Bearer '.env('API_KEY'),
            'Content-Type' => 'application/json',
        ];
        $response = Http::withHeaders($headers)->get($url);
        if ($response->successful()){
            $datos = $response->json()['items'];
            $tags_members = array();
            // return $datos;
            foreach ($datos as $member) {
              $tags_members[] = substr($member['tag'], 1);
            }

            $members = array();
            // Recorremos los tags para consultar y traer informacion de cada miembro del clan
            foreach( $tags_members as $tag_member){
              $urlMember = "https://cocproxy.royaleapi.dev" . '/v1/players/%23' . $tag_member;
              $responseMember = Http::withHeaders($headers)->get($urlMember);
              
              if ($responseMember->successful()){
                $datosMember = $responseMember->json();
                // Convertir el JSON a un array asociativo
                // Verificar si la propiedad existe antes de intentar eliminarla
                if (isset($datosMember['achievements'])) {
                  // Eliminar la propiedad
                  unset($datosMember['achievements']);
                }
                $members[] = $datosMember;
              }
            }
            // Convertir el array a formato JSON
            $jsonMembers = json_encode($members);
            // return gettype($jsonMembers);    
            return $jsonMembers;
        }else{
            return "Error response";
        }
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
