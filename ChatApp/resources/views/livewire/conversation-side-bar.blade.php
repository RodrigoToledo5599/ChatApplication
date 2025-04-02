
<div class="conversation-side-bar d-flex flex-column justify-content-start align-items-start", style="overflow-y:auto; width:25vw; height:100vh;">
    <div class="title-region d-flex flex-column justify-content-start" style=" width:25vw; padding-left: 2vw;">
        <h1>
            Bem vindo {{$auth_user->name}}
        </h1>
    </div>
    @foreach($users as $usuario)
        <livewire:conversation-icon :user="$usuario"/>
    @endforeach
</div>
