<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Data</h3>
            </div>
            <div class="card-body d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary text-center" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Kantor Kelurahan</h4>
                            <p style="font-size: 32pt">{{$total_points}}</p>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <hr>
                <p>Anda login sebagai <b> {{ Auth::user()->name}}</b> dengan email <i>{{ Auth::user()->email}}</i></p>
            </div>
        </div>
    </div>

</x-app-layout>
