<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Buku::all();
        return view('dashboard.buku.index',[
            'buku'=>Buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            // 'name' => 'required|max:255|unique:users',
            'NoBook' => 'required|min:5|max:5',
            'name' => 'required|min:5|max:255',
            'nohp' => 'required|min:5|max:255',
            'email' => 'required|email:dns',
            'tanggal' => 'required',
        ]);

        Buku::create([
            'NoBook'=>$validatedData['NoBook'],
            'nama'=>$validatedData['name'],
            'no_hp'=>$validatedData['nohp'],
            'email'=>$validatedData['email'],
            'tanggal_buku'=>$validatedData['tanggal'],
        ]);

        return redirect('dashboard/buku')->with('success', 'Data berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $post)
    {
        return view('dashboard.post.show',[
            'post'=>$post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id=0)
    {
        $data = Buku::findorfail($id);
       return view('dashboard.buku.edit',[
        'data'=>$data,
       ]);
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
        $data = Buku::findorfail($id);

        $validatedData = $request->validate([
            // 'name' => 'required|max:255|unique:users',
            'NoBook' => 'required|min:5|max:5',
            'nama' => 'required|min:5|max:255',
            'no_hp' => 'required|min:5|max:255',
            'email' => 'required|email:dns',
            'tanggal_buku' => 'required',
        ]);

        $data->update([
            'NoBook'=>$validatedData['NoBook'],
            'nama'=>$validatedData['nama'],
            'no_hp'=>$validatedData['no_hp'],
            'email'=>$validatedData['email'],
            'tanggal_buku'=>$validatedData['tanggal_buku'],
        ]);

        return redirect('dashboard/buku')->with('success', 'Data berhasil terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Buku::findorfail($id);
        $data->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
