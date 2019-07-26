{{-- ----------------------- --}}
{{-- Success Message --}}
{{-- ----------------------- --}}
@if(session('success'))
<script>
    $.confirm({
        title: 'Success!',
        content: '{{session('
        success ')}}',
        type: 'green',
        typeAnimated: true,
        buttons: {
            close: function () {}
        }
    });

</script>
@endif

{{-- ----------------------- --}}
{{-- Error Flash --}}
{{-- ----------------------- --}}

@if(session('error'))
<script>
    $.confirm({
        title: 'Ops!',
        content: '{{session('
        error ')}}',
        type: 'red',
        typeAnimated: true,
        buttons: {
            close: function () {}
        }
    });

</script>
@endif
{{-- ----------------------- --}}
{{-- Error Message --}}
{{-- ----------------------- --}}
@php
$error_all = '';

foreach ($errors->all() as $error){
$error_all .= $error.' . ';
}
@endphp

@if($error_all)
<script>
    $.confirm({
        title: 'Error!',
        content: '{{ $error_all }}',
        type: 'red',
        typeAnimated: true,
        buttons: {
            close: function () {}
        }
    });

</script>
@endif

@if(Request::is('contact'))
<script>
    $.confirm({
        content: 'Conact form is not made dynamic yet',
        type: 'red',
        typeAnimated: true,
        buttons: {
            close: function () {}
        }
    });

</script>
@endif
