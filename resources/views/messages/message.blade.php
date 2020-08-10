@if(SESSION('success'))
    <div class="alert alert-success" role="alert">
        {{SESSION('success')}}
    </div>
@elseif(SESSION('error'))
<div class="alert alert-danger" role="alert">
    {{SESSION('error')}}
</div>
@elseif(SESSION('info'))
<div class="alert alert-info" role="alert">
    {{SESSION('info')}}
@endif