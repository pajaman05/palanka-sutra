@extends('layouts.full-width')

@include('partials.header-sections')

@section('content-1')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">
                <button class="category-btn btn btn-primary custom-btn mb-2" data-route="kategorijas" data-heading="Kategorije">Kategorijas</button>
                <button class="category-btn btn btn-primary custom-btn mb-2" data-route="tims" data-heading="Tim">Tims</button>
                <button class="category-btn btn btn-primary custom-btn mb-2" data-route="sponzors" data-heading="Sponzori">Sponzors</button>
                <button class="category-btn btn btn-primary custom-btn mb-2" data-route="diskusijas" data-heading="Diskusije">Diskusijas</button>
                <button class="category-btn btn btn-primary custom-btn mb-2" data-route="users" data-heading="Korisnici">Users</button>
                <button class="category-btn btn btn-primary custom-btn mb-2" data-route="komentars" data-heading="Komentari">Komentars</button>
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
                $('.category-btn').removeClass('active');

                $('.category-btn').click(function() {
                    
                    $('.category-btn').removeClass('active');
                    $(this).addClass('active');

                    const route = $(this).data('route');
                    const heading = $(this).data('heading');
                    fetchTable(route, heading);
                });


            // metoda poziva funkciju za edit formu
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
                        $('#dynamic-table').html(response).show();      // Postavlja tabelu
                        $('#edit-form').hide(); // Sakrij edit formu kada se učita nova tabela
                    },
                    error: function(xhr) {
                        console.error("Greška prilikom učitavanja podataka: ", xhr);
                    }
                });
            }

            

            // AJAX grabi podatke za edit formu
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





            // metoda za delete formu i potvrdu
        $(document).on('submit', '.delete-form', function(e) {
    e.preventDefault();

    const form = $(this);
    const activeButton = $('.category-btn.active');
    const table = activeButton.data('route');
    const heading = activeButton.data('heading'); 


    if (confirm("Da li ste sigurni da želite da obrišete ovog korisnika?")) {
        const route = form.attr('action');

        $.ajax({
            url: route,
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                    fetchTable(table, heading);
                },
            error: function(xhr) {
                console.error("Greška prilikom brisanja: ", xhr);
            }
        });
    } else {
        return false;
    }
});






    });

    </script>
@endsection

@include('partials.footer-sections')
