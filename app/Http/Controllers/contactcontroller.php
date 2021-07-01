 
<?php

        namespace App\Http\Controllers;

        use App\Models\contact;
        use Illuminate\Http\Request;

        class contactcontroller extends Controller
        {
            public function index()
            {


                $contacts = contact::all();

                return view('index', compact('contacts'));
            }


            public function store(Request $request)
            {
                $contact = new contact;
                $contact->fName = $request->firstName;
                $contact->lName = $request->lastName;
                $contact->email = $request->email;
                $contact->save();
                return redirect()->backe();
            }
            public function edit($id)
            {
                $contact=contact::find($id);

                return view ('edit',compact('contact'));
            }
        
public function update(Request $request)
{
    $contact=contact::find($id);
    $contact->fName=$request->firstName; 
    $contact->lName=$request->lastName; 
    $contact->email=$request->email;
$contact->save();
return redirect()->bake;
}
public function destroy($id)
{
$contact=contact::find($ id);
$contact->delete();
return redirect()->back();
}

}
}
        