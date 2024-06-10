<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\AcceptedAdmin;
use App\Models\DeletedAdmin;


class AdminTableController extends Controller
{
    // Admin->View Admin List 
    public function AdminList(){
        $administrators = AcceptedAdmin::latest()->get();
        return view('admin.content.administrator.adminList', compact('administrators'));
    }

    // Admin->Delete Admin Data 
    public function AdminDelete($id)
    {
        // Find the Admin by ID
        $administrators = AcceptedAdmin::findOrFail($id);

        // Store the Admin data in the Deleted Admin table
        DeletedAdmin::create([
            'fullName' => $administrators->fullName,
            'DOB' => $administrators->DOB,
            'gender' => $administrators->gender,
            'NICnumber' => $administrators->NICnumber,
            'employeeID' => $administrators->employeeID,
            'experience' => $administrators->experience,
            'qualifications' => $administrators->qualifications,
        ]);

        // Delete the Admin from the original table
        $administrators->delete();

        // Redirect back to the Admin list.
        return redirect()->route('admin.adminList');
    }

    // Admin->View Admin Data
    public function DeletedAdmin()
    {
        //Retrieve records from the Deleted Admin Table
        $deletedAdministrator = DeletedAdmin::latest()->get();

        //View Delered Admin List
        return view('admin.content.history.deletedAdmins', compact('deletedAdministrator'));
    }

    // Admin->View Admin Profile Form 
    public function AdminProfile($id)
    {
        // Find the Admin by ID
        $administrators = AcceptedAdmin::findOrFail($id);

        // Redirect to the Course Update page
        return view('admin.content.administrator.adminProfile', compact('administrators'));
    }

    public function DeletedAdminProfile($id)
    {
        // Find the Teacher by ID
        $administrators = DeletedAdmin::findOrFail($id);

        // Redirect to the Admin Update page
        return view('admin.content.administrator.adminProfile', compact('administrators'));
    }

    // Admin->View Update Admin Form 
    public function EditAdminProfile($id){
        // Find the Admin by ID
        $administrators = AcceptedAdmin::findOrFail($id);

        // Redirect to the Admin Update page
        return view('admin.content.administrator.adminProfileEdit', compact('administrators'));
    }

    public function UpdateAdminProfile(Request $request, $id){
        // Validation
        $request->validate([
            'experience' => 'required',
            'qualifications' => 'required',
            'note' => 'required',
        ]);

        // Find the Admin by ID
        $administrators = AcceptedAdmin::findOrFail($id);
        
        // Update the Admin record
        $administrators->update($request->only(['experience', 'qualifications', 'note']));

        // Redirect to the Admin list page
        return redirect()->route('admin.adminList');
    }

    public function SearchDeletedAdmins(Request $request)
    {
        $search = $request->input('search');
        
        $deletedAdministrator = DeletedAdmin::when($search, function ($query, $search) {
            return $query->where('fullName', 'like', "%{$search}%")
                         ->orWhere('employeeID', 'like', "%{$search}%");
        })->get();

        return view('admin.content.history.deletedAdmins', compact('deletedAdministrator'));
    }

    public function SearchAdminList(Request $request)
    {
        $search = $request->input('search');
        
        $administrators = AcceptedAdmin::when($search, function ($query, $search) {
            return $query->where('fullName', 'like', "%{$search}%")
                         ->orWhere('employeeID', 'like', "%{$search}%");
        })->get();

        return view('admin.content.administrator.adminList', compact('administrators'));
    }

}
