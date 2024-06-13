@extends('layouts.template')

@section('content')

<style>
  .modal-button-container {
    display: flex;
    justify-content: center;
    margin-top: 50px; /* Sesuaikan dengan jarak dari atas yang diinginkan */
  }

  .modal-content {
    text-align: center;
  }
</style>

<div class="modal-button-container">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Selengkapnya klik disini
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Halo webres</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Terimakasih telah mengakses website ini,<br>
        Dari saya Tita Amalia
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
