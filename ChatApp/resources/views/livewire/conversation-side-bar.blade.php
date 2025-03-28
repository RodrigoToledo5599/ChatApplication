<style>
    .conversation-side-bar{
        width:25vw;
        height:85vh;
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
        overflow-y: auto;
    }
</style>


<div class="conversation-side-bar">

    @foreach($users as $usuario)
        <livewire:conversation-icon :user="$usuario"/>
    @endforeach

</div>
