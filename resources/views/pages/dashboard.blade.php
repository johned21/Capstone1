@extends('layouts.app')

@section('content')

<div class="wrapper">
	
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <div class="logo-name">
                    Dashboard
                </div>
            </div>
            <i class='bx bx-menu' id="btn-menu"></i>
        </div>

        <ul class="nav-list">
            <li>
                <a href="">
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="search...">
                </a>
                <span class="tooltip">Search</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-home'></i>
                    <span class="links-name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>

            <li>
                <a href="">
                    <i class='bx bx-info-circle'></i>
                    <span class="links-name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>

        </ul>

        <div class="logout-content fixed-bottom">
            <div class="logout">
                <div class="logout-details">
                    <div class="logout-name">Logout</div>
                </div>
                <i class='bx bx-log-out' id="logout"></i>
            </div>
        </div>
    </div>

    <div class="dashboard-content fixed-top">
        <div class="text">
            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="w-full flex pb-10">
                            <div class="w-3/6 mx-1">
                                <input wire:model.debounce.300ms="search" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"placeholder="Search users...">
                            </div>
                            <div class="w-1/6 relative mx-1">
                                <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option value="id">ID</option>
                                    <option value="name">Name</option>
                                    <option value="email">Email</option>
                                    <option value="created_at">Sign Up Date</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            <div class="w-1/6 relative mx-1">
                                <select wire:model="orderAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option value="1">Ascending</option>
                                    <option value="0">Descending</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                            <div class="w-1/6 relative mx-1">
                                <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                </div>
                            </div>
                        </div>
                        <table class="table-auto w-full mb-6">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $user->id }}</td>
                                        <td class="border px-4 py-2">{{ $user->name }}</td>
                                        <td class="border px-4 py-2">{{ $user->email }}</td>
                                        <td class="border px-4 py-2">{{ $user->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $users->links() !!}

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
        let btn = document.querySelector("#btn-menu");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function(){
            sidebar.classList.toggle("active");
        }

        
    </script>

</div>
@endsection