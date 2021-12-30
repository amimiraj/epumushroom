<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class ContactController extends Controller {

    public function contact() {

        $menu = view('pages.menu');
        $content = view('pages.contact');

        return view('master')->with('menu', $menu)->with('master-content', $content);
    }

    public function save_contact(Request $request) {
        $data = array();
        $data['contact_name'] = $request->contact_name;
        $data['contact_email'] = $request->contact_email;
        $data['contact_subject'] = $request->contact_subject;
        $data['contact_message'] = $request->contact_message;

        DB::table('tbl_contact')->insert($data);

        return back();
    }

    public function show_contact() {
        $all_contact = DB::table('tbl_contact')->get();

        return view('admin.pages.contact.show_contact')
                        ->with('all_contact', $all_contact);
    }

    public function delete_contact($contact_id) {
        DB::table('tbl_contact')->where('contact_id', $contact_id)->delete();

        session()->put('contact_msg', 'Deleted successfully!!!');
        return redirect('/show-contact');
    }

}
