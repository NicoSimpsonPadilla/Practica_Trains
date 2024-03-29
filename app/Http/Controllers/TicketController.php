<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\Train;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets/index', 
        ['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticket_type = TicketType::all();
        $trains = Train::all();
        return view('tickets/create', 
        ['ticket_types' => $ticket_type, 
        'trains' => $trains]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->train_id = $request->input('train');
        $ticket->ticket_type_id = $request->input('type');
        $ticket->save();

        return redirect('tickets');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::find($id);
        return view('tickets/show', ['ticket' => $ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket_type = TicketType::all();
        $trains = Train::all();
        return view('tickets/edit', 
        ['ticket' => $ticket, 
        'ticket_types' => $ticket_type, 
        'trains' => $trains]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->train->name = $request->input('train');
        $ticket->ticket_type_id = $request->input('type');
        $ticket->save();

        return redirect('tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Ticket::find($id)->delete();
        return redirect('tickets');
    }
}
