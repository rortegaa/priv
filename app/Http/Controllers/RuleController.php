<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\District;
use App\Rule;
use Illuminate\Http\Request;

class RuleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($district)
    {
        return view('rules.index', [
            'rules_visitor' => Rule::where([
                ['district_id', $district],
                ['role_id', '=', 7],
            ])->get(),
            'rules_resident' => Rule::where([
                ['district_id', $district],
                ['role_id', '=', 6],
            ])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rule::create($this->validateAttributes($request));

        Session::flash('success', 'Registro insertado correctamente');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(Rule $rule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit($district, $id)
    {
        return view('rules.create', [
            'rule' => Rule::Where([
                ['id', $id],
                ['district_id', $district]
            ])->firstOrFail()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $district, $id)
    {
        $this->validateAttributes($request);

        $rule = Rule::Where([
            ['id', $id],
            ['district_id', $district]
        ])->firstOrFail();

        $rule->rule = $request->input('rule');
        $rule->role_id = $request->input('role_id');

        $rule->save();

        Session::flash('success', 'Registro actualizado correctamente');

        return redirect()->route('rules.index', ['district' => auth()->user()->district_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rule = Rule::Where([
            ['id', $id],
            ['district_id', auth()->user()->district_id]
        ])->delete();
        
        Session::flash('success', 'Registro eliminado correctamente');

        return back();
    }

    public function validateAttributes($request)
    {
        $attributes = $request->validate([
            'rule' => 'required|string',
            'role_id' => 'required',
        ]);

        $attributes['district_id'] = auth()->user()->district_id;

        return $attributes;
    }

}
