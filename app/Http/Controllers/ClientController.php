<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClientResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{

    public function index()
    {
        $client =User::where("isGuide" , "=" ,0)->get();
        return ClientResource::collection($client);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=> ['required' , 'string' ],
            "prenom"=> ['required' , 'string' ],
            "username"=> ['required' , 'string' ],
            "date_naissance"=> ['required' ,'date' ],
            "sertificat"=> ['required' , 'string','image' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "photo"=> ['required' , 'string' ,'image'],
            "email"=> ['required' , 'email' ,'unique:users'],
            "password"=> ['required' ,'min:8'],
        ]);
        $request['password']=bcrypt($request->password);
        $data = User :: create($request->all());
        return new ClientResource($data);
    }




    /**
     * Update the resource in storage.
     */
    public function update(Request $request , string $id)
    {
        //
        $client = User::find($id);
        $request->validate([
            "name"=> ['required' , 'string' ],
            "prenom"=> ['required' , 'string' ],
            "username"=> ['required' , 'string' ],
            "date_naissance"=> ['required' ,'date' ],
            "sertificat"=> ['required' , 'string','image' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "photo"=> ['required' , 'string' ,'image'],
            "email"=> ['required' , 'email' ,'unique:users'],
            "password"=> ['required' ,'min:8'],
        ]);
        $client->update($request->all());
        return new ClientResource($client);
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(string $id)
    {
        $client = User::findOrFail($id);
        $client->delete();
        return 204 ;
    }

         // CRUD de client  

    public function aficher(){
        $client =User::where("isGuide" , "=" ,0)->get();
        return view('client.aficherClient',compact("client"));

    }
    public function add(){
        return view("client.AjouterClient");

    }
    // public function Ajouter(Request $request){
    //     $request->validate([
    //         "name"=> ['required' , 'string' ],
    //         "prenom"=> ['required' , 'string' ],
    //         "username"=> ['required' , 'string' ],
    //         "date_naissance"=> ['required' ,'date' ],
    //         "sertificat"=> ['required' , 'string','image' ],
    //         "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
    //         "photo"=> ['required' , 'string' ,'image'],
    //         "email"=> ['required' , 'email' ,'unique:users'],
    //         "password"=> ['required' ,'min:8'],
    //     ]);

    //     User::create([
    //         "name"=>$request->name,
    //         "prenom"=>$request->prenom,
    //         "username"=>$request->username,
    //         "date_naissance"=>$request->date_naissance,
    //         "sertificat"=>$request->sertificat,
    //         "cine"=>$request->cine,
    //         "photo"=>$request->photo,
    //         "email"=>$request->email,
    //         "password"=>$request->password,


    //     ]);
    //     $request['password']=bcrypt($request->password);
    //     return redirect()->route('client.aficherClient');
    // }
    public function Ajouter(Request $request) {
        $request->validate([
            "name" => ['required', 'string'],
            "prenom" => ['required', 'string'],
            "username" => ['required', 'string'],
            "date_naissance" => ['required', 'date'],
            "sertificat" => ['required', 'image'],
            "cine" => ['required', 'string', 'max:8', 'min:8'],
            "photo" => ['required', 'image'],
            "email" => ['required', 'email', 'unique:users'],
            "password" => ['required', 'min:8'],
        ]);
    
        // التعامل مع رفع الملفات وتخزينها
        $sertificatPath = $request->file('sertificat')->store('certificates');
        $photoPath = $request->file('photo')->store('photos');
    
        // تشفير كلمة المرور
        $hashedPassword = bcrypt($request->password);
    
        // إنشاء المستخدم
        User::create([
            "name" => $request->name,
            "prenom" => $request->prenom,
            "username" => $request->username,
            "date_naissance" => $request->date_naissance,
            "sertificat" => $sertificatPath,
            "cine" => $request->cine,
            "photo" => $photoPath,
            "email" => $request->email,
            "password" => $hashedPassword,
        ]);
    
        return redirect()->route('client.aficherClient');
    }
    

    public function ditail( string $id){
        $client=User::find($id);
        return view("client.dital",compact('client'));
    }
    public function edite($id){
        $client=User::find($id);
        return view('client.edite',compact('client'));

    }
    
    public function modifier(Request $request, $id){

        $request->validate([
            "name"=> ['required' , 'string' ],
            "prenom"=> ['required' , 'string' ],
            "username"=> ['required' , 'string' ],
            "date_naissance"=> ['required' ,'date' ],
            "sertificat"=> ['required' , 'string','image' ],
            "cine"=> ['required' , 'string' ,'max:8', 'min:8'],
            "photo"=> ['required' , 'string' ,'image'],
            "email"=> ['required' , 'email' ,Rule::unique('users')->ignore($id)],
            "password"=> ['required' ,'min:8'],
        ]);
        $client=User::find($id);
        $client->update([
            "name"=>$request->name,
            "prenom"=>$request->prenom,
            "username"=>$request->username,
            "date_naissance"=>$request->date_naissance,
            "sertificat"=>$request->sertificat,
            "cine"=>$request->cine,
            "photo"=>$request->photo,
            "email"=>$request->email,
            "password"=>$request->password,
        ]);
        return redirect()->route('client.aficherClient');

    }

    public function supprimer($id){
        $client=User::find($id);
        $client->delete($id);

    return redirect()->route('client.aficherClient');

    }



}

