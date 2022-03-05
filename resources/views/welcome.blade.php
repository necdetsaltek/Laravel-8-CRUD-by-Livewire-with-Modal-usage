
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 8 CRUD by Modal Form and Using Livewire</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        @livewireStyles

    </head>
    <body>
        
        <br />
        <br />
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Laravel 8 CRUD by Modal Form and Using Livewire</h2>
                        </div>
                        <div class="card-body">
                            
                            @livewire('posts')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>


        @livewireScripts

        <script type="text/javascript">

        window.livewire.on('userStore', () => {
            $('#createModal').modal('hide');
            $('#updateModal').modal('hide');
        });

        </script>
        
    </body>
</html>
