<style>
    
    .conversation-icon{
        width:27vw;
        height:10vh;
        /* background-color: blue; */

        display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: start;
        /* border: solid 1px black; */
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .conversation-icon:hover{
        border: solid 1px black;
        border-radius: 12px;
        cursor: pointer;
    }

    .conversation-icon .img-space{
        width:6vw;
        
        display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }



</style>

<div class="conversation-icon">
    <div class="img-space">
        <img src="{{ asset('img/account-circle.svg')}}" alt="">
    </div>
    <h4>Nome do contatinho</h4>
</div>
