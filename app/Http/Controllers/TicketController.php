<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        return response([
            'success' => true,
            'message' => "Tickets récupérés avec succès",
            'data' => Ticket::all()
        ]);
    }

    public function customer(){
        return response([
            'success' => true,
            'message' => "Clients récupérés avec succès",
            'data' => Customer::with('tickets')->get()
        ]);
    }

    public function user(){
        return response([
            'success' => true,
            'message' => "Utilisateurs récupérés avec succès",
            'data' => User::with('tickets')->get()
        ]);
    }
}
