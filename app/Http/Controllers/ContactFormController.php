<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\CheckFormData;
use App\Http\Requests\StoreContactForm;
use App\Person;


class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->input('search');
        //contactディレクトリ内のblade.indexのname=searchからインプット
        $query = DB::table('contact_forms');

        if ($search !== null) {
            $search_split = mb_convert_kana($search, 's');

            $search_split2 = preg_split('/[\s]+/', $search_split, -1, PREG_SPLIT_NO_EMPTY);

            foreach ($search_split2 as $value) {
                $query->where('name', 'like', '%' . $value . '%');
            }
        };

        $query->select('*');
        $contacts = $query->simplePaginate(5);

        // $contacts = ContactForm::all();
        //dd($contacts);

        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactForm $request)
    {
        $contact = new ContactForm;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->url = $request->url;
        $contact->sex = $request->sex;
        $contact->age = $request->age;
        $contact->contact = $request->contact;
        $contact->save();

        return redirect('contact/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactForm::find($id);

        $sex = CheckFormData::checkSex($contact);

        return view('contact.show', compact('contact', 'sex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $contact = ContactForm::find($id);

        $sex = CheckFormData::checkSex($contact);


        return view('contact.edit', compact('contact', 'sex'));
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
        $contact = ContactForm::find($id);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->url = $request->url;
        $contact->sex = $request->sex;
        $contact->age = $request->age;
        $contact->contact = $request->contact;

        $contact->save();

        return redirect('contact/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactForm::find($id);

        $contact->delete();

        return redirect('contact/index');
    }
}
