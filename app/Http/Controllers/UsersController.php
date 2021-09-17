<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = [
            'name' => 'Rahmat Agung Julians',
            'headline' => 'Javascript Enjoyer',
            'xp' => '800',
            'join_year' => '2020',
            'city' => 'Bandung',
            'username'=>'rahmatagungj',
            'email'=>'rahmatagungj@gmail.com',
            'bio'=>'Hi im human',
        ];

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

        return view('users.index', compact('DATA_COURSE', 'user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event()
    {

        $user = [
            'name' => 'Rahmat Agung Julians',
            'headline' => 'Javascript Enjoyer',
            'xp' => '800',
            'join_year' => '2020',
            'city' => 'Bandung',
            'username'=>'rahmatagungj',
            'email'=>'rahmatagungj@gmail.com',
            'bio'=>'Hi im human',
        ];

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
    public function challenge()
    {

        $user = [
            'name' => 'Rahmat Agung Julians',
            'headline' => 'Javascript Enjoyer',
            'xp' => '800',
            'join_year' => '2020',
            'city' => 'Bandung',
            'username'=>'rahmatagungj',
            'email'=>'rahmatagungj@gmail.com',
            'bio'=>'Hi im human',
        ];

        $DATA_CHALLENGE = [
            [
                'title' => '#MakanTanpaSisa Instagram AR Filter Competition',
                'image' => 'chal1.png',
                'provider'=>'Bank DBS Indonesia',
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
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
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
    public function update(Request $request, Users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users)
    {
        //
    }
}
