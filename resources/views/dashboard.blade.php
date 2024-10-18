@extends('layouts.full-width')

@include('partials.header-sections')

@section('content-1')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">
                <button id="tims-btn" class="btn btn-primary custom-btn mb-2">Tims</button>
                <button id="sponzors-btn" class="btn btn-primary custom-btn mb-2">Sponzors</button>
                <button id="diskusijas-btn" class="btn btn-primary custom-btn mb-2">Diskusijas</button>
                <button id="users-btn" class="btn btn-primary custom-btn mb-2">Users</button>
                <button id="kategorijas-btn" class="btn btn-primary custom-btn mb-2">Kategorijas</button>
                <button id="komentars-btn" class="btn btn-primary custom-btn mb-2">Komentars</button>
            </div>

            <div class="col-md-10">
                <h2 id="dynamic-heading" class="mb-4"></h2>
                <div id="dynamic-table"></div>
                <div id="edit-form" style="display: none;"></div> <!-- Mesto za edit formu -->
            </div>
        </div>
    </div>

    <style>
        .custom-btn {
            width: 100%;
            white-space: nowrap;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 30px;
        }
    </style>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    <script>
        $(document).ready(function() {
            $('#kategorijas-btn').click(function() {
                fetchTable('kategorijas', 'Kategorije');
            });

            $('#tims-btn').click(function() {
                fetchTable('tims', 'Tim');
            });

            $('#sponzors-btn').click(function() {
                fetchTable('sponzors', 'Sponzori');
            });

            $('#diskusijas-btn').click(function() {
                fetchTable('diskusijas', 'Diskusije');
            });

            $('#users-btn').click(function() {
                fetchTable('users', 'Korisnici');
            });

            $('#komentars-btn').click(function() {
                fetchTable('komentars', 'Komentari');
            });



       /*     $(document).on('click', '.edit-btn', function() {
                const id = $(this).data('id');
                fetchEditForm(id);
            });

*/

            $(document).on('click', '.edit-btn', function() {
            const table = $(this).data('table');
            const id = $(this).data('id');
            fetchEditForm(table, id);



        });



        

            // AJAX grabi podatke
            function fetchTable(routeName, headingText) {
                $.ajax({
                    url: `/fetch/${routeName}`,
                    type: 'GET',
                    success: function(response) {
                        $('#dynamic-heading').text(headingText); // Postavlja naslov
                        $('#dynamic-table').html(response);      // Postavlja tabelu
                        $('#edit-form').hide(); // Sakrij edit formu kada se učita nova tabela
                    },
                    error: function(xhr) {
                        console.error("Greška prilikom učitavanja podataka: ", xhr);
                    }
                });
            }


    

            function fetchEditForm(table, id) {
            $.ajax({
                url: `/fetch/${table}/${id}`,  // Dynamically build the URL using table and id
                type: 'GET',
                success: function(response) {
                    $('#edit-form').html(response).show(); // Show the edit form
                    $('#dynamic-table').hide();            // Hide the table
                },
                error: function(xhr) {
                    console.error("Greška prilikom učitavanja edit forme: ", xhr);
                }
            });
        }



        });
    </script>
@endsection

@include('partials.footer-sections')
