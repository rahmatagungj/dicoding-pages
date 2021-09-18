<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'available_users' => User::all()->toJson()
        ], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event($username)
    {

        $user = User::where('username', $username)->first();

        if (!$user) return response()->json([
            'error' => 'User not found',
            'available_users' => User::all()->toJson()
        ], 404);

        $DATA_EVENT = [
            [
                'title' => 'Tips Sukses Berkarir sebagai Developer dan Programmer 2021',
                'kategory' => 'Seminar',
            ],
            [
                'title' => 'Teknologi Baru Android di Google I/O 2021',
                'kategory' => 'Seminar',
            ],

        ];

        return view('users.event', compact('DATA_EVENT', 'user'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function challenge($username)
    {

        $user = User::where('username', $username)->first();

        if (!$user) return response()->json([
            'error' => 'User not found',
            'available_users' => User::all()->toJson()
        ], 404);

        $DATA_CHALLENGE = [
            [
                'title' => '#MakanTanpaSisa Instagram AR Filter Competition',
                'image' => 'chal1.png',
                'provider' => 'Bank DBS Indonesia',
                'kategory' => 'Seminar',
            ],

        ];

        return view('users.challenge', compact('DATA_CHALLENGE', 'user'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $username)
    {
        $user = User::where('username', $username)->first();

        if (!$user) return response()->json([
            'error' => 'User not found',
            'available_users' => User::all()->toJson()
        ], 404);

        $DATA_COURSE = [
            [
                'title' => 'Memulai Pemrograman Dengan C',
                'image' => 'Memulai Pemrograman Dengan C.png',
                'time_learn' => '15',
                'rating' => '4.98',
                'level' => 'Dasar',
            ],
            [
                'title' => 'Memulai Pemrograman Dengan Java',
                'image' => 'Memulai Pemrograman Dengan Java.png',
                'time_learn' => '15',
                'rating' => '4.97',
                'level' => 'Dasar',
            ],
            [
                'title' => 'Belajar Dasar Pemrograman Web',
                'image' => 'Belajar Prinsip Pemrograman SOLID.png',
                'time_learn' => '45',
                'rating' => '4.95',
                'level' => 'Pemula',
            ],
            [
                'title' => 'Belajar Membuat Front-End Web untuk Pemula
                ',
                'image' => 'image 14.png',
                'time_learn' => '40',
                'rating' => '4.95',
                'level' => 'Pemula',
            ],
            [
                'title' => 'Belajar Fundamental Front-End Web Development',
                'image' => 'image 15.png',
                'time_learn' => '70',
                'rating' => '4.98',
                'level' => 'Menengah',
            ],
            [
                'title' => 'Menjadi Front-End Web Developer Expert',
                'image' => 'image 16.png',
                'time_learn' => '90',
                'rating' => '4.98',
                'level' => 'Mahir',
            ],

        ];
        return view('users.index', compact('DATA_COURSE', 'user', 'username'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $username)
    {
        // get the user
        $user_table = User::where('username', $username)->first();
        if (
            $this->validate($request, [
                // check if username is not same
                'username' => 'alpha_num|min:4|max:10|unique:users,username,' . $user_table->id,
                'email' => 'email|unique:users,email,' . $user_table->id,
            ])
        ) {
            $user_table->update($request->all());
            return response()->json($request->all(), 200);
        } else {
            return response()->json(['error' => 'Validation failed'], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
