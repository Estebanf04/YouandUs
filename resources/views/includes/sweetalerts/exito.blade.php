@if(Session::has('message'))
    <script>
        swal("¡Perfecto!", "{{ Session::get('message') }}", 'success',{
            button:true,
            button:"OK",
        })
    </script>
    @endif