<!doctype html>
<html lang="en">

<head>
    @include('user.include.head')
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        {{-- sidebar --}}
        @include('user.include.sidebar')
        {{-- end sidebar --}}

        <!-- Page Content  -->
        <div id="content" class="">
            {{-- topbar --}}
            {{-- <div class="container-fluid p-2 bg-secondary ">
                <div class="row justify-content-center">
                    <div class="col-10 shadow m-2 bg-secondary">

                    </div>
                </div>
            </div> --}}
            {{-- end topbar --}}
            <div class="container-fluid">
                @include('user.include.topbar')
                @yield('content')
            </div>
        </div>
    </div>

    <script src="style/admin/js/jquery.min.js"></script>
    <script src="style/admin/js/popper.js"></script>
    <script src="style/admin/js/bootstrap.min.js"></script>
    <script src="style/admin/js/main.js"></script>
    <script src="{{ asset('style/admin/js/bootstrap-editable.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('status'))
        <script>
            swal("Message", "{{ Session::get('status') }}", 'success', {
                button: true,
                button: "Ok",
                timer: 3000
            });
        </script>
    @endif

    @if (Session::has('statusDelete'))
        statusDelete
        <script>
            swal("Message", "{{ Session::get('statusDelete') }}", 'warning', {
                    button: true,
                    button: "Ok",
                    timer: 3000,
                    dangerMode: true
                })
                // .then((willDelete) => {
                //     if (willDelete) {
                //         swal("Are you sure you want to delete?", {
                //             icon: "success",
                //         });
                //     } else {
                //         swal("You cancel successfull!");
                //     }
                // });
        </script>
    @endif
</body>

</html>
