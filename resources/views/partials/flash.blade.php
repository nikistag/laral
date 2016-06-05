@if(Session::has('flash_message'))

<div class="alert alert-success {{Session::has('flash_message_important') ? 'alert-important' : ''}}">
    @if(Session::has('flash_message_important'))
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    @endif
    {{ session('flash_message') }}
</div>
<script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
</script>
@endif