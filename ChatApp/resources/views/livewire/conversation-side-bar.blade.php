<style>
    .conversation-side-bar{
        width:30vw;
        height:85vh;
        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
        overflow-y: auto;
    }
</style>


<div class="conversation-side-bar">

    @for($i=0; $i<=4; $i++)
        <livewire:conversation-icon />
    @endfor

</div>
